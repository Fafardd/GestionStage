<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Coordonator Controller
 *
 * @property \App\Model\Table\CoordonatorTable $Coordonator
 *
 * @method \App\Model\Entity\Coordonator[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoordonatorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $coordonator = $this->paginate($this->Coordonator);

        $this->set(compact('coordonator'));
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
        $coordonator = $this->Coordonator->get($id, [
            'contain' => []
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
        $coordonator = $this->Coordonator->newEntity();
        if ($this->request->is('post')) {
            $coordonator = $this->Coordonator->patchEntity($coordonator, $this->request->getData());
            if ($this->Coordonator->save($coordonator)) {
                $this->Flash->success(__('The coordonator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coordonator could not be saved. Please, try again.'));
        }
        $this->set(compact('coordonator'));
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
        $coordonator = $this->Coordonator->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coordonator = $this->Coordonator->patchEntity($coordonator, $this->request->getData());
            if ($this->Coordonator->save($coordonator)) {
                $this->Flash->success(__('The coordonator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coordonator could not be saved. Please, try again.'));
        }
        $this->set(compact('coordonator'));
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
        $coordonator = $this->Coordonator->get($id);
        if ($this->Coordonator->delete($coordonator)) {
            $this->Flash->success(__('The coordonator has been deleted.'));
        } else {
            $this->Flash->error(__('The coordonator could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
