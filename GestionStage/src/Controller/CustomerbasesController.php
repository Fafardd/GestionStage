<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Customerbases Controller
 *
 * @property \App\Model\Table\CustomerbasesTable $Customerbases
 *
 * @method \App\Model\Entity\Customerbase[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomerbasesController extends AppController
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
        $customerbases = $this->paginate($this->Customerbases);

        $this->set(compact('customerbases'));
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
        $customerbase = $this->Customerbases->get($id, [
            'contain' => ['Internships']
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
        $customerbase = $this->Customerbases->newEntity();
        if ($this->request->is('post')) {
            $customerbase = $this->Customerbases->patchEntity($customerbase, $this->request->getData());
            if ($this->Customerbases->save($customerbase)) {
                $this->Flash->success(__('The customerbase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customerbase could not be saved. Please, try again.'));
        }
        $internships = $this->Customerbases->Internships->find('list', ['limit' => 200]);
        $this->set(compact('customerbase', 'internships'));
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
        $customerbase = $this->Customerbases->get($id, [
            'contain' => ['Internships']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customerbase = $this->Customerbases->patchEntity($customerbase, $this->request->getData());
            if ($this->Customerbases->save($customerbase)) {
                $this->Flash->success(__('The customerbase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customerbase could not be saved. Please, try again.'));
        }
        $internships = $this->Customerbases->Internships->find('list', ['limit' => 200]);
        $this->set(compact('customerbase', 'internships'));
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
        $customerbase = $this->Customerbases->get($id);
        if ($this->Customerbases->delete($customerbase)) {
            $this->Flash->success(__('The customerbase has been deleted.'));
        } else {
            $this->Flash->error(__('The customerbase could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
