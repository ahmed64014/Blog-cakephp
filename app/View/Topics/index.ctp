
<h1>Topics</h1>

<?php echo $this->Html->link('Create a new topic',
array('controller' => 'topics', 'action' => 'add'));  ?>
<br>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
		<th>Published</th>
        <th>Created</th>
		<th>Modified</th>
		<th>Edit</th>
		<th>Delete</th>
    </tr>

    

    <?php foreach ($topics as $topic): ?>
    <tr>
        <td><?php echo $topic['Topic']['id']; ?></td>
		
        <td>
            <?php echo $this->Html->link($topic['Topic']['title'],
array('controller' => 'topics', 'action' => 'view', $topic['Topic']['id']));  ?> <!-- ideicates where the action is directed -->
        </td>
		<td><?php echo $topic['Topic']['visible'];?> </td>
      
		  <td><?php echo $topic['Topic']['created']; ?></td>
 <td><?php echo $topic['Topic']['modified'];?> </td>
 
<td> <?php echo $this->Html->link('Edit',
array('controller' => 'topics', 'action' => 'edit', $topic['Topic']['id']));  ?> </td>
<td><?php echo $this->form->postlink('Delete',
array('controller' => 'topics', 'action' => 'delete', $topic['Topic']['id']),array('confirm' => 'Are you sure that you would like to delete the topic?'));  ?> </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($topic); ?>
</table>
 