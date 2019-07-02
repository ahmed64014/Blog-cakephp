<h1><?php echo $topic['Topic']['title'] ; ?><h1>
<?php echo $this->Html->link('Create a post for this topic',
array('controller' => 'posts', 'action' => 'add', $topic['Topic']['id']));  ?>
<br>
<table>
<tr><td>No.</td><td>User</td><td>Post</td></tr>
<?php 
$Counter = 1;
    foreach($topic['Post'] as $post) {
	 echo "<tr><td>".$Counter."</td><td>".$post['user_id']."</td><td>".$post['body']."</td></tr>" ; 
	 $Counter++;
	 }
	 ?>
	 </table>