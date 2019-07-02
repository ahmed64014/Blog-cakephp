<?php
class CommentsController extends AppController {
    public $components = array('Session');
	   public function index() {
      $this->set('comments', $this->Comment->find('all'));
    }
  
  
 public function add($id) {     // 3shan el id b2a byege automatic fa lazem at2aked en hwa nfs el id bta3 el database 
        if ($this->request->is('post')) {
            $this->Comment->create();
			
		$this->request->data['Comment']['post_id'] = $id;
            if ($this->Comment->save($this->request->data)) {
           $this->Session->setFlash('Your comment has been saved.');
           //   return $this->redirect(array('action' => 'index'));
            
           //$this->Flash->error(__('Unable to add your topic.'));
         //$this->redirect('index');
		}
		
    }
		 $this->set('posts', $this->Comment->Post->find('list'));
        }
		 	  public function view($id) {
   
        $data = $this->Comment->findById($id);
    
        $this->set('Comment', $data);
    }
}



?>