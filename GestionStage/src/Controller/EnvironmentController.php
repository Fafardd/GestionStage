<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Environment Controller
 *
 * @property \App\Model\Table\EnvironmentTable $Environment
 *
 * @method \App\Model\Entity\Environment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnvironmentController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $environment = $this->paginate($this->Environment);

        $this->set(compact('environment'));
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
        $environment = $this->Environment->get($id, [
            'contain' => ['Internship']
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
        $environment = $this->Environment->newEntity();
        if ($this->request->is('post')) {
            $environment = $this->Environment->patchEntity($environment, $this->request->getData());
            if ($this->Environment->save($environment)) {
                $this->Flash->success(__('The environment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The environment could not be saved. Please, try again.'));
        }
        $this->set(compact('environment'));
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
        $environment = $this->Environment->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $environment = $this->Environment->patchEntity($environment, $this->request->getData());
            if ($this->Environment->save($environment)) {
                $this->Flash->success(__('The environment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The environment could not be saved. Please, try again.'));
        }
        $this->set(compact('environment'));
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
        $environment = $this->Environment->get($id);
        if ($this->Environment->delete($environment)) {
            $this->Flash->success(__('The environment has been deleted.'));
        } else {
            $this->Flash->error(__('The environment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
