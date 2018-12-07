<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Files Controller
 *
 * @property \App\Model\Table\FilesTable $Files
 *
 * @method \App\Model\Entity\File[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FilesController extends AppController
{
    public function isAuthorized($user) {
        return true;
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Students']
        ];
        $this->loadModel("Students");
		$Students = $this->Students->find()->where([true]);
        $files = $this->paginate($this->Files);

        $this->set(compact('files', 'Students'));
    }

    /**
     * View method
     *
     * @param string|null $id File id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $file = $this->Files->get($id, [
            'contain' => ['Students']
        ]);

        $this->set('file', $file);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    /*ublic function add()
    {
        $file = $this->Files->newEntity();
        if ($this->request->is('post')) {
            $file = $this->Files->patchEntity($file, $this->request->getData());
            if ($this->Files->save($file)) {
                $this->Flash->success(__('The file has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The file could not be saved. Please, try again.'));
        }
        $students = $this->Files->Students->find('list', ['limit' => 200]);
        $this->set(compact('file', 'students'));
    }*/

    public function add() {
        //5mb max
        
        
        if ($this->request->is('post')) {
            /*debug($this->request->data['name']);
                die();*/
                
                for ($i = 0; $i< count($this->request->data['name']); $i++){
                    $file = $this->Files->newEntity();
                
                
            if (!empty($this->request->data['name'][$i]['name'])) {
                $fileName = $this->request->data['name'][$i]['name'];
                $uploadPath = 'Files/';
                $uploadFile = $uploadPath . $fileName;

                //$this->log($this->request->data);
                
                if (move_uploaded_file($this->request->data['name'][$i]['tmp_name'], 'img/' . $uploadFile)) {

                    $file = $this->Files->patchEntity($file, $this->request->getData());
                    $file->name = $fileName;
                    $file->path = $uploadPath;

                    
                    if(strpos($file->name, "docx") !== false || strpos($file->name, "pdf") !== false){

                        
                       if($this->request->data['name'][$i]['size'] > 5000){

                        
                    
                            if ($this->Files->save($file)) {
                                $this->Flash->success(__('File has been uploaded and inserted successfully.'));
                                return $this->redirect(['action' => 'index']);
                            } else {
                                $this->Flash->error(__('Unable to upload file, please try again.'));
                            }

                        }else {
                            $this->Flash->error(__('File too big'));
                        }   

                    }else {
                        $this->Flash->error(__('Wrong type'));
                    }
                } else {
                    $this->Flash->error(__('Unable to save file, please try again.'));
                }
            } else {
                $this->Flash->error(__('Please choose a file to upload.'));
            }
        }
        }
        $students = $this->Files->Students->find('list', ['limit' => 200]);
        $this->set(compact('file', 'students'));
    }

    /*public function openFile($id = null){
        $file = $this->Files->get($id, [
            'contain' => []
        ]);;

        $fileName = $file->name;
        $uploadPath = 'Files/';
        $uploadFile = $uploadPath . $fileName;

        $path = 'img/' . $uploadFile;


        $size = filesize($path);
        header('Content-Type: application/octet-stream');
        header('Content-Length: '.$size);
        header('Content-Disposition: attachment; filename='.$filename);
        header('Content-Transfer-Encoding: binary');
        debug($path);
        
        fopen($path . $fileName, 'r');

        

        fpassthru($file);
        exit;
        
        

    }*/

    /**
     * Edit method
     *
     * @param string|null $id File id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $file = $this->Files->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $file = $this->Files->patchEntity($file, $this->request->getData());
            if ($this->Files->save($file)) {
                $this->Flash->success(__('The file has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The file could not be saved. Please, try again.'));
        }
        $students = $this->Files->Students->find('list', ['limit' => 200]);
        $this->set(compact('file', 'students'));
    }

    /**
     * Delete method
     *
     * @param string|null $id File id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $file = $this->Files->get($id);
        if ($this->Files->delete($file)) {
            $this->Flash->success(__('The file has been deleted.'));
        } else {
            $this->Flash->error(__('The file could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
