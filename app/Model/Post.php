<?php

class Post extends AppModel {
     public $belongsTo = array(
   'Topic' => array(
    'className' => 'Topic',
    'foreignKey' => 'topic_id',
    'conditions' => '',
    'fields' => '',
    'order' => ''
   )
  ); 
    
}
?>