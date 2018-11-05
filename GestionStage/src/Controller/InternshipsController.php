<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Internships Controller
 *
 * @property \App\Model\Table\InternshipsTable $Internships
 *
 * @method \App\Model\Entity\Internship[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InternshipsController extends AppController
{

    public function isAuthorized($user)
    {
        //$action = $this->request->getParam('action');

        if($user['category']== 2){
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
            'contain' => ['Companies', 'Types']
        ];
        $internships = $this->paginate($this->Internships);
       

        $this->set(compact('internships'));
    }

    /**
     * View method
     *
     * @param string|null $id Internship id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $internship = $this->Internships->get($id, [
            'contain' => ['Companies', 'Types', 'InternshipsCustomerbases', 'InternshipsEnvironments', 'InternshipsStudents']
        ]);

        $this->set('internship', $internship);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $internship = $this->Internships->newEntity();
        if ($this->request->is('post')) {
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

    /**
     * Edit method
     *
     * @param string|null $id Internship id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
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

    /**
     * Delete method
     *
     * @param string|null $id Internship id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
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
