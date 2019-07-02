<h1><?php echo $post['Post']['body'] ; ?><h1>
<?php echo $this->Html->link('Create a comment for this post',
array('controller' => 'comments', 'action' => 'add', $post['Post']['id']));  ?>
<br>
<table>
<tr><td>No.</td><td>User</td><td>Comment</td></tr>
<?php 
$Counter = 1;
    foreach($post['Comment'] as $comment) {
	 echo "<tr><td>".$Counter."</td><td>".$comment['user_id']."</td><td>".$comment['body']."</td></tr>" ; 
	 $Counter++;
	 }
	 ?>
	 </table>