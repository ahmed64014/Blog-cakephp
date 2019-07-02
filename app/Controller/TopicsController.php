<?php

 class Topicscontroller extends AppController {
	 public $components = array('Session');
	 
	 
	// public function index() {
		// $data = $this->Topic->find('all');    //To view the topics available after submiting the topic successfully by user 
	//	 $this->set->('topics', $data);
	public function beforefilter(){
		$this->Auth->allow('index');
		
	}
	   public function index() {
      $this->set('topics', $this->Topic->find('all'));
    }
	 	  public function view($id) {
   
        $data = $this->Topic->findById($id);
    
        $this->set('topic', $data);
    }
	  public function add() {
        if ($this->request->is('post')) {
            $this->Topic->create();
            if ($this->Topic->save($this->request->data)) {
           $this->Session->setFlash('Your topic has been saved.');
           //   return $this->redirect(array('action' => 'index'));
            
           //$this->Flash->error(__('Unable to add your topic.'));
         $this->redirect('index');
		}
		
		 }
		 
	 }
	 	    public function edit($id) {
				
				 $data = $this->Topic->findById($id);

	  if ($this->request->is(array('post','put'))) {
		  $this->Topic->id = $id;
	 if ($this->Topic->save($this->request->data)) {
           $this->Session->setFlash('Your topic has been edited.');
           //   return $this->redirect(array('action' => 'index'));
            
           //$this->Flash->error(__('Unable to add your topic.'));
         $this->redirect('index');
		}
  
    }
    $this->request->data = $data ;

	}
	public function delete($id) {
		$this->Topic->id = $id;
			  if ($this->request->is(array('post','put'))) {
		  $this->Topic->id = $id;
	 if ($this->Topic->delete()) {
           $this->Session->setFlash('Your topic has been deleted.');
           //   return $this->redirect(array('action' => 'index'));
            
           //$this->Flash->error(__('Unable to add your topic.'));
         $this->redirect('index');
		}
  
    }
	}
	}
 ?>