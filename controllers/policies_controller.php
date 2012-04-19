<?php
class PoliciesController extends AppController {

	var $name = 'Policies';

	function index() {
		$this->Policy->recursive = 0;
		$this->set('policies', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid policy', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('policy', $this->Policy->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Policy->create();
			if ($this->Policy->save($this->data)) {
				
				$this->flashWarning('The policy has been saved', 'index');
			} else {
				$this->Session->setFlash(__('The policy could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		$this->idEmptyRedirect($id, 'index');
		if (!empty($this->data)) {
			if ($this->Policy->save($this->data)) {
				$this->flashSuccess('The policy has been saved', 'index');
			} else {
				$this->Session->setFlash(__('The policy could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Policy->read(null, $id);
		}
	}

	function delete($id = null) {
		$this->idEmptyRedirect($id, 'index');
		if ($this->Policy->delete($id)) {
			$this->Session->setFlash(__('Policy deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Policy was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
