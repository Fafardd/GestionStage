<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InternshipCustomerbase Controller
 *
 * @property \App\Model\Table\InternshipCustomerbaseTable $InternshipCustomerbase
 *
 * @method \App\Model\Entity\InternshipCustomerbase[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InternshipCustomerbaseController extends AppController
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
        $internshipCustomerbase = $this->paginate($this->InternshipCustomerbase);

        $this->set(compact('internshipCustomerbase'));
    }

    /**
     * View method
     *
     * @param string|null $id Internship Customerbase id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $internshipCustomerbase = $this->InternshipCustomerbase->get($id, [
            'contain' => ['Internships', 'Customerbases']
        ]);

        $this->set('internshipCustomerbase', $internshipCustomerbase);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $internshipCustomerbase = $this->InternshipCustomerbase->newEntity();
        if ($this->request->is('post')) {
            $internshipCustomerbase = $this->InternshipCustomerbase->patchEntity($internshipCustomerbase, $this->request->getData());
            if ($this->InternshipCustomerbase->save($internshipCustomerbase)) {
                $this->Flash->success(__('The internship customerbase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The internship customerbase could not be saved. Please, try again.'));
        }
        $internships = $this->InternshipCustomerbase->Internships->find('list', ['limit' => 200]);
        $customerbases = $this->InternshipCustomerbase->Customerbases->find('list', ['limit' => 200]);
        $this->set(compact('internshipCustomerbase', 'internships', 'customerbases'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Internship Customerbase id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $internshipCustomerbase = $this->InternshipCustomerbase->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $internshipCustomerbase = $this->InternshipCustomerbase->patchEntity($internshipCustomerbase, $this->request->getData());
            if ($this->InternshipCustomerbase->save($internshipCustomerbase)) {
                $this->Flash->success(__('The internship customerbase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The internship customerbase could not be saved. Please, try again.'));
        }
        $internships = $this->InternshipCustomerbase->Internships->find('list', ['limit' => 200]);
        $customerbases = $this->InternshipCustomerbase->Customerbases->find('list', ['limit' => 200]);
        $this->set(compact('internshipCustomerbase', 'internships', 'customerbases'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Internship Customerbase id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $internshipCustomerbase = $this->InternshipCustomerbase->get($id);
        if ($this->InternshipCustomerbase->delete($internshipCustomerbase)) {
            $this->Flash->success(__('The internship customerbase has been deleted.'));
        } else {
            $this->Flash->error(__('The internship customerbase could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
