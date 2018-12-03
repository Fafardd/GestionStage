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
		$url = '';
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);
				if($user['category']==3){
				$url = '/Internships/';
			}else if($user['category']==2){
				
				$url = '/companies/add/';
				
				$this->loadModel('companies');
				
				$companies = $this->paginate($this->companies);
				
								foreach($companies as $companies){
					
					if($companies['user_id']==$user['id']){
						
						$url = '/Internships-students/';
						
						$this->loadModel('updated_companies');
				
				$updated_companies = $this->paginate($this->updated_companies);
				
				foreach($updated_companies as $updated_companies){
					
					if($updated_companies['companies_id']==$companies['id']){
						
						if($updated_companies['days_not_updated'] !=-1){
						
							$url = '/companies/edit/' + $companies['id'];
						}
						
					}
					
				}
						
					
					
					break;
					}
				}
				
				
			} else if($user['category']==1){
				
				$url = '/students/add/';
				
				$this->loadModel('students');
				
				$students = $this->paginate($this->students);
				
				foreach($students as $students){
					
					if($students['user_id']==$user['id']){}
					$url = '/Internships/';
					break;
				}
				
			}
            return $this->redirect($this->Auth->redirectUrl($url));
			}
			$this->Flash->error('Votre identifiant ou votre mot de passe est incorrect.');
		}
	}
	
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['logout', 'add', 'rpassword', 'recupass']);
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
			$email->setTo($user->email)->setSubject('Bienvenue sur Tinstage.ca')->send("Benvienue sur tinstage, nous vous souhaitons une bonnne recherche de stage. \n\nEmail : ".$user->email);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'login']);
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
	
	public function gettoken($length){
		 $token = "";
		 $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		 $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
		 $codeAlphabet.= "0123456789";
		 $max = strlen($codeAlphabet); // edited

		for ($i=0; $i < $length; $i++) {
			$token .= $codeAlphabet[random_int(0, $max-1)];
		}

		return $token;
	}
	
	public function rpassword(){
		if ($this->request->is('post')) {
			
			$this->loadModel('users');
		
			$users = $this->paginate($this->users);	
			
			$currentuser;
			
			$token = "123soleil";
			
			foreach ($users as $user){
				if ($user->email == $_POST["email"]) {
				
					$token = $this->gettoken(69);
					
					$email = new Email('tinstage');
					$email->setTo($_POST["email"])->setSubject('Voici votre token')->send("Token : ".$token);
					
					$currentuser = $user;
					
					break;
					
				}
			}
			
			$this->Flash->success(__('If your email is in our database, an email has been sent to you, please directly change your password afterwards or your token will expire.'));
			
			$session = $this->getRequest()->getSession();
			
			$session->write('token', $token);
			$session->write('user', $currentuser);
			
			return $this->redirect(['action' => 'recupass']);
			
		}
	}
	
	public function recupass(){
		
		$session = $this->getRequest()->getSession();
		
		$token = $session->read('token');
		$user = $session->read('user');
		
		if ($this->request->is('post')) {
			
			if ($_POST["token"] == $token) {
				
				$this->Auth->setUser($user);
				
				$session->write('token', null);
				$session->write('user', null);
				
				return $this->redirect(['action' => 'edit', $user->id]);
				
			}
			
		}
	}
}