<!-- File: /app/View/Posts/add.ctp -->

<h1>Create a new post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('body');
echo $this->Form->end('Save Post');
?>