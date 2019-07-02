<h1>Posts</h1>
<table>
    <tr>
        <th>Post</th>
        <th>Topic Title</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <tr>
		
        <td>
            <?php echo $this->Html->link($post['Post']['body'],
array('controller' => 'posts', 'action' => 'view', $post['Post']['id']));  ?> <!-- ideicates where the action is directed -->
        </td>
        <td>
            <?php echo $this->Html->link($post['Topic']['title'],
array('controller' => 'posts', 'action' => 'view', $post['Post']['id']));  ?> <!-- ideicates where the action is directed -->
        </td>
 

    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>
 