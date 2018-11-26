<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Mailer\Email;
use Cake\Utility\Text;
class InternshipsStudentsController extends AppController
{
	public function postuler($internshipid){
        $internshipsStudent = $this->InternshipsStudents->newEntity();
		
        if($internshipid!=null){
			$internshipsStudent['internship_id'] = $internshipid;
			$loguser = $this->request->getSession()->read('Auth.User');
			$student = $this->InternshipsStudents->Students->findByUserId($loguser['id'])->first();
			if ($student != null) {
				$internshipsStudent['student_id'] = $student['id'];
				if ($this->InternshipsStudents->save($internshipsStudent)) {
					
					$this->loadModel('companies');
					$companies = $this->paginate($this->companies);
					
					
					$this->loadModel('internships');
					$internships = $this->paginate($this->internships);
					
					$currentInternship;
					
					$currentStudent = $student;
					
					foreach ($internships as $internship){
						
						if ($internshipid == $internship->id) {
							
							$currentInternship = $internship;
							
							break;
							
						}
						
					}
					
					
					foreach ($companies as $companie){
						
						if ($currentInternship->company_id == $companie->id) {
							
							$email = new Email('tinstage');
							$email->setTo($companie->email)->setSubject('Nouveau appliquant : '.$currentStudent->name." ".$currentStudent->first_name." Pour : ".$currentInternship->title)->send("Nous souhaitons vous informer qu’un étudiant a appliqué sur votre offre de stage.\n\nOffre de stage : ".$currentInternship->title."\n\nNom de l’élève : ".$currentStudent->name." ".$currentStudent->first_name."\nEmail de l’élève : ".$currentStudent->email."\nTelephone de l’élève : ".$currentStudent->phone."\nNotes de l’élève : ".$currentStudent->notes."\nAutres details de l’élève : ".$currentStudent->other_details."\n\nAu plaisir de vous revoir.\n\nCeci est un message automatisé. Veuillez ne pas y répondre. Prenez contact avec le coordonnateur de stage pour toute question.");	
					
							break;
						}
						
					}
					
					$this->Flash->success(__('The internships application has been saved.'));
					return $this->redirect(['controller' => 'Internships', 'action' => 'index']);
				}
			} else {
				$this->Flash->error(__('Your are not yet registered as a student, please advise your internship coordonator.'));
			}
		}
        $this->Flash->error(__('The internships application could not be saved. Please, try again.'));
        
    }
    public function isAuthorized($user)
    {
        //$action = $this->request->getParam('action');
        if($user['category']== 1 || $user['category']== 2 || $user['category']== 3){
            return true;
        } 
        // Par défaut, on refuse l'accès.
        return false;
    }
    public function index()
    {	
	
	$this->paginate = [
            'contain' => ['Internships', 'Students']
        ];
	
		$this->loadModel("Students");
		$Students = $this->Students->find()->where([true]);		
		$this->loadModel('Internships');
		$Internships = $this->Internships->find()->where([true]);		
        $internshipsStudents = $this->paginate($this->InternshipsStudents);
		$actStudent;
		$loggeduser = $this->request->getSession()->read('Auth.User');
		if($loggeduser['category']==2){
		$query = $this->Internships->find()->leftJoinWith('Companies')->where(['Companies.user_id'=>$loggeduser['id']]);
        //$internships = $this->paginate($query);
		}elseif($loggeduser['category']==1||$loggeduser['category']==3){
			
			foreach ($Students as $student){
				if ($student->user_id == $loggeduser['id']) {
					
					
					$actStudent = $student;
					
					break;
					
				}
				
			}
			$internshipsStudents = $this->paginate($this->InternshipsStudents);
		}
		
		$this->paginate = [
            'contain' => ['Internships', 'Students']
        ];
		
        $this->set(compact('internshipsStudents', 'query', 'actStudent', 'Internships'));
    }
    public function view($id = null)
    {
        $internshipsStudent = $this->InternshipsStudents->get($id, [
            'contain' => ['Internships', 'Students']
        ]);
        $this->set('internshipsStudent', $internshipsStudent);
    }
    public function add()
    {
        $internshipsStudent = $this->InternshipsStudents->newEntity();
        if ($this->request->is('post')) {
            $internshipsStudent = $this->InternshipsStudents->patchEntity($internshipsStudent, $this->request->getData());
            if ($this->InternshipsStudents->save($internshipsStudent)) {
                $this->Flash->success(__('The internships student has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The internships student could not be saved. Please, try again.'));
        }
        $internships = $this->InternshipsStudents->Internships->find('list', ['limit' => 200]);
        $students = $this->InternshipsStudents->Students->find('list', ['limit' => 200]);
        $this->set(compact('internshipsStudent', 'internships', 'students'));
    }
    public function edit($id = null)
    {
        $internshipsStudent = $this->InternshipsStudents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $internshipsStudent = $this->InternshipsStudents->patchEntity($internshipsStudent, $this->request->getData());
            if ($this->InternshipsStudents->save($internshipsStudent)) {
                $this->Flash->success(__('The internships student has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The internships student could not be saved. Please, try again.'));
        }
        $internships = $this->InternshipsStudents->Internships->find('list', ['limit' => 200]);
        $students = $this->InternshipsStudents->Students->find('list', ['limit' => 200]);
        $this->set(compact('internshipsStudent', 'internships', 'students'));
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $internshipsStudent = $this->InternshipsStudents->get($id);
        if ($this->InternshipsStudents->delete($internshipsStudent)) {
            $this->Flash->success(__('The internships student has been deleted.'));
        } else {
            $this->Flash->error(__('The internships student could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}