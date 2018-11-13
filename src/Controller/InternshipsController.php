<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
use Cake\Utility\Text;
use Cake\ORM\TableRegistry;
class InternshipsController extends AppController
{
    public function isAuthorized($user)
    {
        if($user['category']== 1||$user['category']== 2||$user['category']== 3){
            return true;
        } 
        return false;
    }
    public function index()
    {
        $this->paginate = [
            'contain' => ['Companies', 'Types']
        ];
        $internships = $this->paginate($this->Internships);
		$loggeduser = $this->request->getSession()->read('Auth.User');
		if($loggeduser['category']==2){
		$query = $this->Internships->find()->leftJoinWith('Companies')->where(['Companies.user_id'=>$loggeduser['id']]);
        $internships = $this->paginate($query);
		}elseif($loggeduser['category']==1||$loggeduser['category']==3){
			$internships = $this->paginate($this->Internships);
		}
        $this->set(compact('internships', 'companies'));
    }
    public function view($id = null)
    {
        $internship = $this->Internships->get($id, [
            'contain' => ['Companies', 'Types', 'InternshipsCustomerbases', 'InternshipsEnvironments', 'InternshipsStudents']
        ]);
        $this->set('internship', $internship);
    }
    public function add()
    {
		$this->loadModel("users");
		$users = $this->paginate($this->users);		
		
        $internship = $this->Internships->newEntity();
        if ($this->request->is('post')) {
            $internship = $this->Internships->patchEntity($internship, $this->request->getData());
			
				
			foreach ($users as $user){
				if ($user->category == 1) {
					
					$email = new Email('tinstage');
					$email->setTo($user->email)->setSubject('Nouveau stage : '.$internship->title)->send("Bonjour,\n\nNous souhaitons vous informer qu’un nouvelle offre de stage est disponible : \n\n".$internship->title."\n\n".$internship->stage_details."\n\nBonne recherche de stage !\n\nCeci est un message automatisé. Veuillez ne pas y répondre. Prenez contact avec le coordonnateur de stage pour toute question.");
					
				}
				
			}
			
            if ($this->Internships->save($internship)) {
                $this->Flash->success(__('The internship has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The internship could not be saved. Please, try again.'));
        }
        $companies = $this->Internships->Companies->find('list', ['limit' => 200]);
        $types = $this->Internships->Types->find('list', ['limit' => 200]);
        $this->set(compact('internship', 'companies', 'types'));
    }
    public function edit($id = null)
    {
        $internship = $this->Internships->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $internship = $this->Internships->patchEntity($internship, $this->request->getData());
            if ($this->Internships->save($internship)) {
                $this->Flash->success(__('The internship has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The internship could not be saved. Please, try again.'));
        }
        $companies = $this->Internships->Companies->find('list', ['limit' => 200]);
        $types = $this->Internships->Types->find('list', ['limit' => 200]);
        $this->set(compact('internship', 'companies', 'types'));
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $internship = $this->Internships->get($id);
        if ($this->Internships->delete($internship)) {
            $this->Flash->success(__('The internship has been deleted.'));
        } else {
            $this->Flash->error(__('The internship could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}