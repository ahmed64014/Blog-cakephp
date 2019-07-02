<h1>Comments</h1>
<table>
    <tr>
        <th>Comments</th>
        <th>Posts title</th>
	<!--	<th>Topic Title</th>  -->
		<th>User id</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($comments as $comment): ?>
    <tr>
		 <td>
            <?php echo $this->Html->link($comment['Comment']['body'],
array('controller' => 'comments', 'action' => 'view', $comment['Comment']['id']));  ?> <!-- ideicates where the action is directed -->
        </td>
        <td>
            <?php echo $this->Html->link($comment['Post']['body'],
array('controller' => 'comments', 'action' => 'view', $comment['Comment']['id']));  ?> <!-- ideicates where the action is directed -->
        </td>

<td> <?php echo $this->Html->link($comment['Comment']['user_id'],
array('controller' => 'comments', 'action' => 'view', $comment['Comment']['id']));  ?> <!-- ideicates where the action is directed -->
        </td>

    </tr>
    <?php endforeach; ?>
    <?php unset($comment); ?>
</table>
 