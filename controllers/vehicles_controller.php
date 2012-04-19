<?php
class VehiclesController extends AppController {

	var $name = 'Vehicles';

	function index() {
		$this->Vehicle->recursive = 0;
		$this->set('vehicles', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			
			$this->flashWarning('Invalid vehicle', 'index');
		}
		$this->set('vehicle', $this->Vehicle->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Vehicle->create();
			if ($this->Vehicle->save($this->data)) {
				$this->flashSuccess('The vehicle has been saved', 'index');
			} else {
				$this->Session->setFlash(__('The vehicle could not be saved. Please, try again.', true));
			}
		}
		$this->_list();
	}

	function edit($id = null) {
		$this->idEmptyRedirect($id, 'index');
		if (!empty($this->data)) {
			if ($this->Vehicle->save($this->data)) {
				$this->flashSuccess('The vehicle has been saved', 'index');
			} else {
				$this->Session->setFlash(__('The vehicle could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Vehicle->read(null, $id);
		}
		$this->_list();
	}

	function delete($id = null) {
		$this->idEmptyRedirect($id, 'index');
		if ($this->Vehicle->delete($id)) {
			$this->flashSuccess('Vehicle deleted', 'index');
		}
		$this->flashWarning('Vehicle was not deleted', 'index');
	}
	
	
	function _list() {
	
		$customers = $this->Vehicle->Customer->find('list');
		$policies = $this->Vehicle->Policy->find('list');
		$this->set(compact('customers', 'policies'));
		
	}
}
