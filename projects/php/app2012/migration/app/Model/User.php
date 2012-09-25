<?php
class User extends AppModel {
	public $name = 'User';
    public $hasOne = 'Profile';
   // public $hasMany = 'Role';
	 public $validate = array(
        'id' => array(
            'rule' => 'notEmpty'
        ),
        'username' => array(
            'rule' => 'notEmpty'
        ),
        'password' => array(
            'rule' => 'notEmpty'
        ),
         'role'=>array(
             'valid' => array(
                 'rule' => array('inList', array('admin', 'user')),
                 'message' => 'Please enter a valid role',
                 'allowEmpty' => false
             )

         )
    );
}
?>