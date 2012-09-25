<!-- File: /app/View/Users/add.ctp -->

<h1>Add User</h1>
<?php
echo $this->Form->create('User');
echo $this->Form->input('id');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('role');
echo $this->Form->end('Save User');
?>
