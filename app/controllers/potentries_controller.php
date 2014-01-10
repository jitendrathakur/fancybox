<?php
class PotentriesController extends AppController {

	var $name = 'Potentries';

	function index() {
		$this->autorender = false;
  		$this->layout = 'iframe';
		$this->Potentry->recursive = 0;
		$this->set('potentries', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid potentry', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('potentry', $this->Potentry->read(null, $id));
	}

	function add() {
		$this->autorender = false;
  		$this->layout = 'iframe';
		if (!empty($this->data)) {
			$this->Potentry->create();
			if ($this->Potentry->save($this->data)) {
				$this->Session->setFlash(__('The potentry has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The potentry could not be saved. Please, try again.', true));
			}
		}
		$tags = $this->Potentry->Tag->find('list');
		$this->set(compact('tags'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid potentry', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Potentry->save($this->data)) {
				$this->Session->setFlash(__('The potentry has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The potentry could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Potentry->read(null, $id);
		}
		$tags = $this->Potentry->Tag->find('list');
		$this->set(compact('tags'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for potentry', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Potentry->delete($id)) {
			$this->Session->setFlash(__('Potentry deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Potentry was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
