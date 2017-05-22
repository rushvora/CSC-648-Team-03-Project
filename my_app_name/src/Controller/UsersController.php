<?php
namespace  App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow('register', 'logout');
    }

   public function login() {
    if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
            $this->Auth->setUser($user);
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Flash->error(__('Invalid username or password, try again'));
    }
   }
   public function register()
    {
        $user = $this->Users->newEntity();
	
        if ($this->request->is('post')) {

	$response = $_POST["g-recaptcha-response"];
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = http_build_query(array(
		'secret' => '6LdoBh0UAAAAAC10aBiLRn9kDIabX6JzzK6vpfMO',
		'response' => $_POST["g-recaptcha-response"]
	));
	$options = array(
		'http' => array (
			'method' => 'POST',
                        'header'=>"content-type: application/x-www-form-urlencoded\r\n" . "Content-Length: " . strlen($data) . "\r\n",
			'content' => $data
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success=json_decode($verify);



//            $user = $this->Users->patchEntity($user, $this->request->getData());
	//_POST is an array and password 
	     $user->set(['USERNAME' => $_POST['username'],'PASSWORD' => $_POST['password'], 'EMAIL' => $_POST['email']]);
            if(substr($user->get('EMAIL'),-13)!='mail.sfsu.edu'){
               $this->Flash->error(__('Please add sfsu email address,'));
	    }
	    else if($captcha_success->success==false) {
		$this->Flash->error(__('Captcha verification failed. Please try again.'));
	    } 
	    else {
	        if ($this->Users->save($user)) {
                    $this->Flash->success(__('The user has been saved.'));
                    return $this->redirect(['action' => 'register']);
                }
                $this->Flash->error(__('Unable to add the user.'));
            }
        }
        $this->set('user', $user);
    }

/*
    public function index() {
        $this->set('users', $this->Users->find('all');
    }

    public function view($id = null) {
        $this->User->id = ($id);
        $this->set(compact('user'));
    }

    public function add() {
	$user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }
        $this->set('user', $user);
    }

/*
    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');

        $this->request->allowMethod('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Flash->success(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }
*/
   public function logout() {
     return $this->redirect($this->Auth->logout());
   }

    /**
     * Allow a user to request a password reset.
     * @return
     */
    function forgot_password() {
        if (!empty($this->data)) {
            $user = $this->User->findByUsername($this->data['User']['username']);
            if (empty($user)) {
                $this->Session->setflash('Sorry, the username entered was not found.');
                $this->redirect('/users/forgot_password');
            } else {
                $user = $this->__generatePasswordToken($user);
                if ($this->User->save($user) && $this->__sendForgotPasswordEmail($user['User']['id'])) {
                    $this->Session->setflash('Password reset instructions have been sent to your email address.
						You have 24 hours to complete the request.');
                    $this->redirect('/users/login');
                }
            }
        }
    }
    /**
     * Allow user to reset password if $token is valid.
     * @return
     */
    function reset_password_token($reset_password_token = null) {
        if (empty($this->data)) {
            $this->data = $this->User->findByResetPasswordToken($reset_password_token);
            if (!empty($this->data['User']['reset_password_token']) && !empty($this->data['User']['token_created_at']) &&
            $this->__validToken($this->data['User']['token_created_at'])) {
                $this->data['User']['id'] = null;
                $_SESSION['token'] = $reset_password_token;
            } else {
                $this->Session->setflash('The password reset request has either expired or is invalid.');
                $this->redirect('/users/login');
            }
        } else {
            if ($this->data['User']['reset_password_token'] != $_SESSION['token']) {
                $this->Session->setflash('The password reset request has either expired or is invalid.');
                $this->redirect('/users/login');
            }
            $user = $this->User->findByResetPasswordToken($this->data['User']['reset_password_token']);
            $this->User->id = $user['User']['id'];
            if ($this->User->save($this->data, array('validate' => 'only'))) {
                $this->data['User']['reset_password_token'] = $this->data['User']['token_created_at'] = null;
                if ($this->User->save($this->data) && $this->__sendPasswordChangedEmail($user['User']['id'])) {
                    unset($_SESSION['token']);
                    $this->Session->setflash('Your password was changed successfully. Please login to continue.');
                    $this->redirect('/users/login');
                }
            }
        }
    }
    /**
     * Generate a unique hash / token.
     * @param Object User
     * @return Object User
     */
    function __generatePasswordToken($user) {
        if (empty($user)) {
            return null;
        }
        // Generate a random string 100 chars in length.
        $token = "";
        for ($i = 0; $i < 100; $i++) {
            $d = rand(1, 100000) % 2;
            $d ? $token .= chr(rand(33,79)) : $token .= chr(rand(80,126));
        }
        (rand(1, 100000) % 2) ? $token = strrev($token) : $token = $token;
        // Generate hash of random string
        $hash = Security::hash($token, 'sha256', true);;
        for ($i = 0; $i < 20; $i++) {
            $hash = Security::hash($hash, 'sha256', true);
        }
        $user['User']['reset_password_token'] = $hash;
        $user['User']['token_created_at']     = date('Y-m-d H:i:s');
        return $user;
    }
    /**
     * Validate token created at time.
     * @param String $token_created_at
     * @return Boolean
     */
    function __validToken($token_created_at) {
        $expired = strtotime($token_created_at) + 86400;
        $time = strtotime("now");
        if ($time < $expired) {
            return true;
        }
        return false;
    }
    /**
     * Sends password reset email to user's email address.
     * @param $id
     * @return
     */
    function __sendForgotPasswordEmail($id = null) {
        if (!empty($id)) {
            $this->User->id = $id;
            $User = $this->User->read();
            $this->Email->to 		= $User['User']['email'];
            $this->Email->subject 	= 'Password Reset Request - DO NOT REPLY';
            $this->Email->replyTo 	= 'do-not-reply@example.com';
            $this->Email->from 		= 'Do Not Reply <do-not-reply@example.com>';
            $this->Email->template 	= 'reset_password_request';
            $this->Email->sendAs 	= 'both';
            $this->set('User', $User);
            $this->Email->send();
            return true;
        }
        return false;
    }
    /**
     * Notifies user their password has changed.
     * @param $id
     * @return
     */
    function __sendPasswordChangedEmail($id = null) {
        if (!empty($id)) {
            $this->User->id = $id;
            $User = $this->User->read();
            $this->Email->to 		= $User['User']['email'];
            $this->Email->subject 	= 'Password Changed - DO NOT REPLY';
            $this->Email->replyTo 	= 'do-not-reply@example.com';
            $this->Email->from 		= 'Do Not Reply <do-not-reply@example.com>';
            $this->Email->template 	= 'password_reset_success';
            $this->Email->sendAs 	= 'both';
            $this->set('User', $User);
            $this->Email->send();
            return true;
        }
        return false;
    }
}

?>
