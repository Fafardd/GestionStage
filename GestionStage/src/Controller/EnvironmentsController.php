<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Environments Controller
 *
 * @property \App\Model\Table\EnvironmentsTable $Environments
 *
 * @method \App\Model\Entity\Environment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnvironmentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $environments = $this->paginate($this->Environments);

        $this->set(compact('environments'));
    }

    /**
     * View method
     *
     * @param string|null $id Environment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $environment = $this->Environments->get($id, [
            'contain' => ['Internships']
        ]);

        $this->set('environment', $environment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $environment = $this->Environments->newEntity();
        if ($this->request->is('post')) {
            $environment = $this->Environments->patchEntity($environment, $this->request->getData());
            if ($this->Environments->save($environment)) {
                $this->Flash->success(__('The environment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The environment could not be saved. Please, try again.'));
        }
        $internships = $this->Environments->Internships->find('list', ['limit' => 200]);
        $this->set(compact('environment', 'internships'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Environment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $environment = $this->Environments->get($id, [
            'contain' => ['Internships']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $environment = $this->Environments->patchEntity($environment, $this->request->getData());
            if ($this->Environments->save($environment)) {
                $this->Flash->success(__('The environment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The environment could not be saved. Please, try again.'));
        }
        $internships = $this->Environments->Internships->find('list', ['limit' => 200]);
        $this->set(compact('environment', 'internships'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Environment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $environment = $this->Environments->get($id);
        if ($this->Environments->delete($environment)) {
            $this->Flash->success(__('The environment has been deleted.'));
        } else {
            $this->Flash->error(__('The environment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
