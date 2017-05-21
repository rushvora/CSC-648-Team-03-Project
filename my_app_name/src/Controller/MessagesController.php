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
        $uid = $this->Auth->user('USERID');
	pr($uid);		
	$message= $this->Messages->findAllByRecipientid($uid);
	$this->set('messages', $message);
    }

    /**
     *Outbox method
     *
     *Users Outbox
     */
    public function outbox($uid = null)
    {
        $uid = $this->Auth->user('USERID');
        pr($uid);               
        $message= $this->Messages->findAllBySenderid($uid);
        $this->set('messages', $message);
    }

    /**
     * View method
     *
     * @param string|null $id Message id.
     * @return \Cake\Network\Response|null
     */
    public function view($id = null)
    {
        $message = $this->Messages->get($id, [
            'contain' => []
        ]);
	
//	$this->Message->saveField('readStatus', 1);	
	
        $this->set('message', $message);
        $this->set('_serialize', ['message']);
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
	//pr($users);
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
