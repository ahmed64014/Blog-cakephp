

<h1>Create a new comment</h1>
<?php
echo $this->Form->create('Comment');
echo $this->Form->input('body');
echo $this->Form->end('Save Comment');
?>