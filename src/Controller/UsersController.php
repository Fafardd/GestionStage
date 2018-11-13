<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
use Cake\Utility\Text;
class UsersController extends AppController
{
    public function isAuthorized($user)
    {
		$action = $this->request->getParam('action');
		// Toutes les autres actions nécessitent un slug
		$userid = $user['id'];
		if (!$userid) {
			return false;
		}
		if ($this->Auth->user('category') == '3') {
			return true;
		}
		$id = (int) $this->request->getParam('pass.0');
		
		return $id === $user['id'];
	}
    public function login()
{
    if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
            $this->Auth->setUser($user);
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Flash->error('Votre identifiant ou votre mot de passe est incorrect.');
    }
}
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['logout', 'add']);
    }
    public function logout()
    {
        $this->Flash->success('Vous avez été déconnecté.');
        return $this->redirect($this->Auth->logout());
    }
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Companies', 'Coordonators', 'Students']
        ]);

        $this->set('user', $user);
    }
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
			$email = new Email('tinstage');
			$email->setTo($user->email)->setSubject('Voici vos identifiants')->send("Email : ".$user->email."\nPassword : ".$this->request->getData('password'));
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}