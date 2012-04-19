<?php
class CustomersController extends AppController {

	var $name = 'Customers';

	function index() {
		$this->Customer->recursive = 0;
		$this->set('customers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->flashWarning('Invalid customer', 'index');
		}
		$this->set('customer', $this->Customer->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Customer->create();
			if ($this->Customer->save($this->data)) {
				$this->flashSuccess('The customer has been saved', 'index');
			} else {
				$this->flashWarning('The customer could not be saved. Please, try again.');
			}
		}
		$this->_list();
	}

	function edit($id = null) {
		$this->idEmptyRedirect($id, 'index'); 
		if (!empty($this->data)) {
			if ($this->Customer->save($this->data)) {
				$this->flashSuccess('The customer has been saved', 'index');
			} else {
				$this->flashWarning('The customer could not be saved. Please, try again.');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Customer->read(null, $id);
		}
		$this->_list();
	}

	function delete($id = null) {
		$this->idEmptyRedirect($id, 'index');
		if ($this->Customer->delete($id)) {
			$this->flashsuccess('Customer deleted', 'index');
		}
		$this->flashWarning('Customer was not deleted', 'index');
	}
	
	
	
	function _list() {
	
		$parishes = $this->Customer->Parish->find('list');
		$this->set(compact('parishes'));
	}
	
	
}
