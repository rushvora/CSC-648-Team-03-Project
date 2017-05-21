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

}
?>
