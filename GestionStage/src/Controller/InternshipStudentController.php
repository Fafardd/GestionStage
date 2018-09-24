<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InternshipStudent Controller
 *
 * @property \App\Model\Table\InternshipStudentTable $InternshipStudent
 *
 * @method \App\Model\Entity\InternshipStudent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InternshipStudentController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Internships', 'Students']
        ];
        $internshipStudent = $this->paginate($this->InternshipStudent);

        $this->set(compact('internshipStudent'));
    }

    /**
     * View method
     *
     * @param string|null $id Internship Student id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $internshipStudent = $this->InternshipStudent->get($id, [
            'contain' => ['Internships', 'Students']
        ]);

        $this->set('internshipStudent', $internshipStudent);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $internshipStudent = $this->InternshipStudent->newEntity();
        if ($this->request->is('post')) {
            $internshipStudent = $this->InternshipStudent->patchEntity($internshipStudent, $this->request->getData());
            if ($this->InternshipStudent->save($internshipStudent)) {
                $this->Flash->success(__('The internship student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The internship student could not be saved. Please, try again.'));
        }
        $internships = $this->InternshipStudent->Internships->find('list', ['limit' => 200]);
        $students = $this->InternshipStudent->Students->find('list', ['limit' => 200]);
        $this->set(compact('internshipStudent', 'internships', 'students'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Internship Student id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $internshipStudent = $this->InternshipStudent->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $internshipStudent = $this->InternshipStudent->patchEntity($internshipStudent, $this->request->getData());
            if ($this->InternshipStudent->save($internshipStudent)) {
                $this->Flash->success(__('The internship student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The internship student could not be saved. Please, try again.'));
        }
        $internships = $this->InternshipStudent->Internships->find('list', ['limit' => 200]);
        $students = $this->InternshipStudent->Students->find('list', ['limit' => 200]);
        $this->set(compact('internshipStudent', 'internships', 'students'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Internship Student id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $internshipStudent = $this->InternshipStudent->get($id);
        if ($this->InternshipStudent->delete($internshipStudent)) {
            $this->Flash->success(__('The internship student has been deleted.'));
        } else {
            $this->Flash->error(__('The internship student could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
