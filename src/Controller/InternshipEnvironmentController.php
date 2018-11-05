<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InternshipEnvironment Controller
 *
 * @property \App\Model\Table\InternshipEnvironmentTable $InternshipEnvironment
 *
 * @method \App\Model\Entity\InternshipEnvironment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InternshipEnvironmentController extends AppController
{

    public function isAuthorized($user)
    {
        //$action = $this->request->getParam('action');

        if($user['category']== 2 || $user['category'] == 3){
            return true;
        } 
        // Par défaut, on refuse l'accès.
        return false;
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Internships', 'Environments']
        ];
        $internshipEnvironment = $this->paginate($this->InternshipEnvironment);

        $this->set(compact('internshipEnvironment'));
    }

    /**
     * View method
     *
     * @param string|null $id Internship Environment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $internshipEnvironment = $this->InternshipEnvironment->get($id, [
            'contain' => ['Internships', 'Environments']
        ]);

        $this->set('internshipEnvironment', $internshipEnvironment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $internshipEnvironment = $this->InternshipEnvironment->newEntity();
        if ($this->request->is('post')) {
            $internshipEnvironment = $this->InternshipEnvironment->patchEntity($internshipEnvironment, $this->request->getData());
            if ($this->InternshipEnvironment->save($internshipEnvironment)) {
                $this->Flash->success(__('The internship environment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The internship environment could not be saved. Please, try again.'));
        }
        $internships = $this->InternshipEnvironment->Internships->find('list', ['limit' => 200]);
        $environments = $this->InternshipEnvironment->Environments->find('list', ['limit' => 200]);
        $this->set(compact('internshipEnvironment', 'internships', 'environments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Internship Environment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $internshipEnvironment = $this->InternshipEnvironment->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $internshipEnvironment = $this->InternshipEnvironment->patchEntity($internshipEnvironment, $this->request->getData());
            if ($this->InternshipEnvironment->save($internshipEnvironment)) {
                $this->Flash->success(__('The internship environment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The internship environment could not be saved. Please, try again.'));
        }
        $internships = $this->InternshipEnvironment->Internships->find('list', ['limit' => 200]);
        $environments = $this->InternshipEnvironment->Environments->find('list', ['limit' => 200]);
        $this->set(compact('internshipEnvironment', 'internships', 'environments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Internship Environment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $internshipEnvironment = $this->InternshipEnvironment->get($id);
        if ($this->InternshipEnvironment->delete($internshipEnvironment)) {
            $this->Flash->success(__('The internship environment has been deleted.'));
        } else {
            $this->Flash->error(__('The internship environment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
