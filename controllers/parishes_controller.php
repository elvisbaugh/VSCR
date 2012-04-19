<?php
class ParishesController extends AppController {

	var $name = 'Parishes';

	function index() {
		$this->Parish->recursive = 0;
		$this->set('parishes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			
			$this->flasWarning('Invalid parish', 'index');
		}
		$this->set('parish', $this->Parish->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Parish->create();
			if ($this->Parish->save($this->data)) {
				
				$this->flashSuccess('The parish has been saved', 'index');
			} else {
				$this->Session->setFlash(__('The parish could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		$this->idEmptyRedirect($id, 'index');
		if (!empty($this->data)) {
			if ($this->Parish->save($this->data)) {
				
				$this->flashSuccess('The parish has been saved', 'index');
			} else {
				$this->Session->setFlash(__('The parish could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Parish->read(null, $id);
		}
	}

	function delete($id = null) {
		$this->idEmptyRedirect($id, 'index'); 
		if ($this->Parish->delete($id)) {
			
			$this->flashSuccess('Parish deleted', 'index');
		}
		$this->flashWarning('Parish was not deleted', 'index');
	}
}
