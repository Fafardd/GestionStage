<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InternshipsEnvironments Controller
 *
 * @property \App\Model\Table\InternshipsEnvironmentsTable $InternshipsEnvironments
 *
 * @method \App\Model\Entity\InternshipsEnvironment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InternshipsEnvironmentsController extends AppController
{
<<<<<<< HEAD
    public function isAuthorized($user)
    {
        //$action = $this->request->getParam('action');

        if($user['category']== 2 || $user['category'] == 3){
            return true;
        } 
        // Par défaut, on refuse l'accès.
        return false;
    }
=======
>>>>>>> bc6dfc527811203f66880e6a88e1d69ba52b883e

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
        $internshipsEnvironments = $this->paginate($this->InternshipsEnvironments);

        $this->set(compact('internshipsEnvironments'));
    }

    /**
     * View method
     *
     * @param string|null $id Internships Environment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $internshipsEnvironment = $this->InternshipsEnvironments->get($id, [
            'contain' => ['Internships', 'Environments']
        ]);

        $this->set('internshipsEnvironment', $internshipsEnvironment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $internshipsEnvironment = $this->InternshipsEnvironments->newEntity();
        if ($this->request->is('post')) {
            $internshipsEnvironment = $this->InternshipsEnvironments->patchEntity($internshipsEnvironment, $this->request->getData());
            if ($this->InternshipsEnvironments->save($internshipsEnvironment)) {
                $this->Flash->success(__('The internships environment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The internships environment could not be saved. Please, try again.'));
        }
        $internships = $this->InternshipsEnvironments->Internships->find('list', ['limit' => 200]);
        $environments = $this->InternshipsEnvironments->Environments->find('list', ['limit' => 200]);
        $this->set(compact('internshipsEnvironment', 'internships', 'environments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Internships Environment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $internshipsEnvironment = $this->InternshipsEnvironments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $internshipsEnvironment = $this->InternshipsEnvironments->patchEntity($internshipsEnvironment, $this->request->getData());
            if ($this->InternshipsEnvironments->save($internshipsEnvironment)) {
                $this->Flash->success(__('The internships environment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The internships environment could not be saved. Please, try again.'));
        }
        $internships = $this->InternshipsEnvironments->Internships->find('list', ['limit' => 200]);
        $environments = $this->InternshipsEnvironments->Environments->find('list', ['limit' => 200]);
        $this->set(compact('internshipsEnvironment', 'internships', 'environments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Internships Environment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $internshipsEnvironment = $this->InternshipsEnvironments->get($id);
        if ($this->InternshipsEnvironments->delete($internshipsEnvironment)) {
            $this->Flash->success(__('The internships environment has been deleted.'));
        } else {
            $this->Flash->error(__('The internships environment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
