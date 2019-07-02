<?php
class PostsController extends AppController {
    public $components = array('Session');
	   public function index() {
      $this->set('posts', $this->Post->find('all'));
    }
  
  
 public function add($id) {     // 3shan el id b2a byege automatic fa lazem at2aked en hwa nfs el id bta3 el database 
        if ($this->request->is('post')) {
            $this->Post->create();
			
		$this->request->data['Post']['topic_id'] = $id;
            if ($this->Post->save($this->request->data)) {
           $this->Session->setFlash('Your post has been saved.');
           //   return $this->redirect(array('action' => 'index'));
            
           //$this->Flash->error(__('Unable to add your topic.'));
         $this->redirect('index');
		}
		
    }
		 $this->set('topics', $this->Post->Topic->find('list'));
        }
		 	  public function view($id) {
   
        $data = $this->Post->findById($id);
    
        $this->set('post', $data);
    }
	 
}
?>