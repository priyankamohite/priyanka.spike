<!-- File: /app/View/Users/edit.ctp -->

<h1>Edit User</h1>
<?php
    echo $this->Form->create('User', array('action' => 'edit'));
    echo $this->Form->input('id');
    echo $this->Form->input('username');
    echo $this->Form->input('password');
     echo $this->Form->input('role');
    echo $this->Form->end('Save Post');