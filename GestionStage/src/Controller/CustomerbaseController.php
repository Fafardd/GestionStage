<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Customerbase Controller
 *
 * @property \App\Model\Table\CustomerbaseTable $Customerbase
 *
 * @method \App\Model\Entity\Customerbase[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomerbaseController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $customerbase = $this->paginate($this->Customerbase);

        $this->set(compact('customerbase'));
    }

    /**
     * View method
     *
     * @param string|null $id Customerbase id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customerbase = $this->Customerbase->get($id, [
            'contain' => ['Internship']
        ]);

        $this->set('customerbase', $customerbase);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customerbase = $this->Customerbase->newEntity();
        if ($this->request->is('post')) {
            $customerbase = $this->Customerbase->patchEntity($customerbase, $this->request->getData());
            if ($this->Customerbase->save($customerbase)) {
                $this->Flash->success(__('The customerbase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customerbase could not be saved. Please, try again.'));
        }
        $this->set(compact('customerbase'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Customerbase id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customerbase = $this->Customerbase->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customerbase = $this->Customerbase->patchEntity($customerbase, $this->request->getData());
            if ($this->Customerbase->save($customerbase)) {
                $this->Flash->success(__('The customerbase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customerbase could not be saved. Please, try again.'));
        }
        $this->set(compact('customerbase'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customerbase id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customerbase = $this->Customerbase->get($id);
        if ($this->Customerbase->delete($customerbase)) {
            $this->Flash->success(__('The customerbase has been deleted.'));
        } else {
            $this->Flash->error(__('The customerbase could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
