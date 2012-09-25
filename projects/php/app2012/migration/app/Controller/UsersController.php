<?php
class UsersController extends AppController {
    public $helpers = array('Html', 'Form');

    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow('add', 'logout');
    }

    public function index() {
        $this->set('users', $this->User->find('all'));
    }
    
    public function view($id = null) {
        $this->User->id = $id;
        $this->set('user', $this->User->read());
    }
    
    public function add() {
        if ($this->request->is('user')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash('User has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add User.');
            }
        }
    }
    public function edit($id = null) {
    $this->User->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->User->read();
    } else {
        if ($this->User->save($this->request->data)) {
            $this->Session->setFlash('User has been updated.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Unable to update User.');
        }
    }
}
	public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }
    if ($this->User->delete($id)) {
        $this->Session->setFlash('The user with id: ' . $id . ' has been deleted.');
        $this->redirect(array('action' => 'index'));
    }
}
}
?>