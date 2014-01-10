<?php
class TransentriesController extends AppController {

	var $name = 'Transentries';

	function index() {
		$this->autorender = false;
  		$this->layout = 'iframe';
		$this->Transentry->recursive = 0;
		$this->set('transentries', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid transentry', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('transentry', $this->Transentry->read(null, $id));
	}

	function add() {
		$this->autorender = false;
  		$this->layout = 'iframe';
		if (!empty($this->data)) {
			$this->Transentry->create();
			if ($this->Transentry->save($this->data)) {
				$this->Session->setFlash(__('The transentry has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transentry could not be saved. Please, try again.', true));
			}
		}
		$tags = $this->Transentry->Tag->find('list');
		$this->set(compact('tags'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid transentry', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Transentry->save($this->data)) {
				$this->Session->setFlash(__('The transentry has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transentry could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Transentry->read(null, $id);
		}
		$tags = $this->Transentry->Tag->find('list');
		$this->set(compact('tags'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for transentry', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Transentry->delete($id)) {
			$this->Session->setFlash(__('Transentry deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Transentry was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
