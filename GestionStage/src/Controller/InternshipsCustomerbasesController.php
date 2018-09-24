<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InternshipsCustomerbases Controller
 *
 * @property \App\Model\Table\InternshipsCustomerbasesTable $InternshipsCustomerbases
 *
 * @method \App\Model\Entity\InternshipsCustomerbase[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InternshipsCustomerbasesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Internships', 'Customerbases']
        ];
        $internshipsCustomerbases = $this->paginate($this->InternshipsCustomerbases);

        $this->set(compact('internshipsCustomerbases'));
    }

    /**
     * View method
     *
     * @param string|null $id Internships Customerbase id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $internshipsCustomerbase = $this->InternshipsCustomerbases->get($id, [
            'contain' => ['Internships', 'Customerbases']
        ]);

        $this->set('internshipsCustomerbase', $internshipsCustomerbase);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $internshipsCustomerbase = $this->InternshipsCustomerbases->newEntity();
        if ($this->request->is('post')) {
            $internshipsCustomerbase = $this->InternshipsCustomerbases->patchEntity($internshipsCustomerbase, $this->request->getData());
            if ($this->InternshipsCustomerbases->save($internshipsCustomerbase)) {
                $this->Flash->success(__('The internships customerbase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The internships customerbase could not be saved. Please, try again.'));
        }
        $internships = $this->InternshipsCustomerbases->Internships->find('list', ['limit' => 200]);
        $customerbases = $this->InternshipsCustomerbases->Customerbases->find('list', ['limit' => 200]);
        $this->set(compact('internshipsCustomerbase', 'internships', 'customerbases'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Internships Customerbase id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $internshipsCustomerbase = $this->InternshipsCustomerbases->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $internshipsCustomerbase = $this->InternshipsCustomerbases->patchEntity($internshipsCustomerbase, $this->request->getData());
            if ($this->InternshipsCustomerbases->save($internshipsCustomerbase)) {
                $this->Flash->success(__('The internships customerbase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The internships customerbase could not be saved. Please, try again.'));
        }
        $internships = $this->InternshipsCustomerbases->Internships->find('list', ['limit' => 200]);
        $customerbases = $this->InternshipsCustomerbases->Customerbases->find('list', ['limit' => 200]);
        $this->set(compact('internshipsCustomerbase', 'internships', 'customerbases'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Internships Customerbase id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $internshipsCustomerbase = $this->InternshipsCustomerbases->get($id);
        if ($this->InternshipsCustomerbases->delete($internshipsCustomerbase)) {
            $this->Flash->success(__('The internships customerbase has been deleted.'));
        } else {
            $this->Flash->error(__('The internships customerbase could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
