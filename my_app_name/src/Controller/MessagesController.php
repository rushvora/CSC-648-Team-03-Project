<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Messages Controller
 *
 * @property \App\Model\Table\MessagesTable $Messages
 */
class MessagesController extends AppController
{

    /**
     * Index method
     *
     *
     *  Users Inbox
     * @return \Cake\Network\Response|null
     * 	Is used for as the list of all the messages a specific  user has
    */
    public function index($uid = null)
    {
        $users = TableRegistry::get('Users');
        $query = $users->find();
        $recipients = [];
        foreach ($query as $user) {
           $recipients[$user->USERID] = $user->USERNAME;
        }

        $uid = $this->Auth->user('USERID');
	$message= $this->Messages->findAllByRecipientid($uid);
	$this->set('messages', $message);
        $this->set('recipient', $recipients);

    }

    /**
     *Outbox method
     *
     *Users Outbox
     */
    public function outbox($uid = null)
    {
	$users = TableRegistry::get('Users');
	$query = $users->find();
	$recipients = [];
	foreach ($query as $user) {
	   $recipients[$user->USERID] = $user->USERNAME;
	}

        $uid = $this->Auth->user('USERID');
        $message= $this->Messages->findAllBySenderid($uid);
	$this->set('messages', $message);
        $this->set('recipient', $recipients);
    }

    /**
     * View method
     *
     * @param string|null $id Message id.
     * @return \Cake\Network\Response|null
     */
    public function view($id = null)
    {
        $users = TableRegistry::get('Users');
        $query = $users->find();
        $recipients = [];
        foreach ($query as $user) {
           $recipients[$user->USERID] = $user->USERNAME;
        }

        
	$uid = $this->Auth->user('USERID');
        $message = $this->Messages->get($id);
	if ($uid == $message->RECIPIENTID){	//If statement to not change readStatus if the person that is viewing the message is the sender
	    $message->READSTATUS = 1;
        }
	
	$this->Messages->save($message);	//sets the readstatus to 1 to show that the message has been read	
        $this->set('message', $message);
        $this->set('recipient', $recipients);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {  	

	$uid = $this->Auth->user('USERID');

        $users=$this->Messages->Users->findAllByUserid($uid);
	$this->set('users', $users);
	$message = $this->Messages->newEntity();
	$message->SENDERID = $uid;
	$message->READSTATUS = '0';
        if ($this->request->is('post')) {
            $message = $this->Messages->patchEntity($message, $this->request->data);
            if ($this->Messages->save($message)) {
                $this->Flash->success(__('The message has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The message could not be saved. Please, try again.'));
        }
        $this->set(compact('message'));
        $this->set('_serialize', ['message']);
    }


    /**
     * Delete method
     *
     * @param string|null $id Message id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $message = $this->Messages->get($id);
        if ($this->Messages->delete($message)) {
            $this->Flash->success(__('The message has been deleted.'));
        } else {
            $this->Flash->error(__('The message could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
