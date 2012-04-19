<?php
class SalesController extends AppController {

	var $name = 'Sales';

	function index() {
		$this->Sale->recursive = 0;
		$this->set('sales', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->flashwarning('Invalid sale', 'index');
		}
		$this->set('sale', $this->Sale->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Sale->create();
			if ($this->Sale->save($this->data)) {
				$this->flashSuccess('The sale has been saved', 'index');
			} else {
				$this->Session->setFlash(__('The sale could not be saved. Please, try again.', true));
			}
		}
		$this->_list();
	}

	function edit($id = null) {
		$this->idEmptyRedirect($id, 'index');
		if (!empty($this->data)) {
			if ($this->Sale->save($this->data)) {				
				$this->flashSuccess('The sale has been saved', 'index');
			} else {
				$this->Session->setFlash(__('The sale could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sale->read(null, $id);
		}
		$this->_list();
	}

	function delete($id = null) {
		$this->idEmptyRedirect($id, 'index');
		if ($this->Sale->delete($id)) {
			$this->flashSuccess('Sale deleted');
		}
		$this->flashWarning('Sale was not deleted', 'index');
	}
	
	
	function _list() {
		
		$customers = $this->Sale->Customer->find('list');
		$vehicles = $this->Sale->Vehicle->find('list');
		$cards = $this->Sale->Card->find('list');
		$this->set(compact('customers', 'vehicles', 'cards'));
	
	}
}
