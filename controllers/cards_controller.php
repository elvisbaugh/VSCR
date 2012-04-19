<?php
class CardsController extends AppController {

	var $name = 'Cards';

	function index() {
		$this->Card->recursive = 0;
		$this->set('cards', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->flashWarning('Invalid card', 'index');
		}
		$this->set('card', $this->Card->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Card->create();
			if ($this->Card->save($this->data)) {
				$this->flashSuccess('The card has been saved', 'index');
			} else {
				
				$this->flashWarning('The card could not be saved. Please, try again.');
			}
		}
		$this->_list();
	}

	function edit($id = null) {
		$this->idEmptyRedirect($id, 'index');
		if (!empty($this->data)) {
			if ($this->Card->save($this->data)) {
				$this->flashSuccess('The card has been saved', 'index');
			} else {
				$this->flashWarning('The card could not be saved. Please, try again.');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Card->read(null, $id);
		}
		$this->_list();
	}

	function delete($id = null) {
		$this->idEmptyRedirect($id, 'index');
		if ($this->Card->delete($id)) {
			$this->flashSuccess('Card deleted', 'index' );
		}
		$this->flashWarning('Card was not deleted', 'index');
	}
	
	
	
	
	
	
	#protected methods
	
	function _list() {
		$customers = $this->Card->Customer->find('list', array('fields' => 'Customer.name'));
		$this->set(compact('customers'));
	
	}
	
}
