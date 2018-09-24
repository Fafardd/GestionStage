<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Coordonators Controller
 *
 * @property \App\Model\Table\CoordonatorsTable $Coordonators
 *
 * @method \App\Model\Entity\Coordonator[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoordonatorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $coordonators = $this->paginate($this->Coordonators);

        $this->set(compact('coordonators'));
    }

    /**
     * View method
     *
     * @param string|null $id Coordonator id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coordonator = $this->Coordonators->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('coordonator', $coordonator);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coordonator = $this->Coordonators->newEntity();
        if ($this->request->is('post')) {
            $coordonator = $this->Coordonators->patchEntity($coordonator, $this->request->getData());
            if ($this->Coordonators->save($coordonator)) {
                $this->Flash->success(__('The coordonator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coordonator could not be saved. Please, try again.'));
        }
        $users = $this->Coordonators->Users->find('list', ['limit' => 200]);
        $this->set(compact('coordonator', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Coordonator id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coordonator = $this->Coordonators->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coordonator = $this->Coordonators->patchEntity($coordonator, $this->request->getData());
            if ($this->Coordonators->save($coordonator)) {
                $this->Flash->success(__('The coordonator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coordonator could not be saved. Please, try again.'));
        }
        $users = $this->Coordonators->Users->find('list', ['limit' => 200]);
        $this->set(compact('coordonator', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Coordonator id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coordonator = $this->Coordonators->get($id);
        if ($this->Coordonators->delete($coordonator)) {
            $this->Flash->success(__('The coordonator has been deleted.'));
        } else {
            $this->Flash->error(__('The coordonator could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
