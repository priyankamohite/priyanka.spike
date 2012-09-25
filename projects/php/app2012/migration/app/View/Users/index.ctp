<!-- File: /app/View/Users/index.ctp  (edit links added) -->

<h1>users</h1>
<p><?php echo $this->Html->link("Add User", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
                <th>Action</th>
        <th>Password</th>
    </tr>


<?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($user['User']['username'], array('action' => 'view', $user['User']['id'])); ?>
        </td>
        <td> <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $user['User']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?>
        </td>
        <td>
            <?php echo $user['User']['password']; ?>
        </td>
         <td>
                    <?php echo $user['User']['role']; ?>
        </td>
    </tr>
<?php endforeach; ?>

</table>