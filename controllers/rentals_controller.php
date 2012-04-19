<?php
class RentalsController extends AppController {

	var $name = 'Rentals';

	function index() {
		$this->Rental->recursive = 0;
		$this->set('rentals', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			
			$this->flashWarning('Invalid rental', 'index');
		}
		$this->set('rental', $this->Rental->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Rental->create();
			if ($this->Rental->save($this->data)) {
				$this->flashSuccess('The rental has been saved', 'index');
			} else {
				$this->Session->setFlash(__('The rental could not be saved. Please, try again.', true));
			}
		}
		$this->_list();
	}

	function edit($id = null) {
		$this->idEmptyRedirect($id, 'index');
		if (!empty($this->data)) {
			if ($this->Rental->save($this->data)) {
				$this->Session->setFlash(__('The rental has been saved', true));
				$this->redirect(array('action' => 'index'));
				$this->flashSuccess('The rental has been saved', 'index');
			} else {
				$this->Session->setFlash(__('The rental could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Rental->read(null, $id);
		}
		$this->_list();
	}

	function delete($id = null) {
		$this->idEmptyRedirect($id, 'index');
		if ($this->Rental->delete($id)) {
			$this->flashSuccess('Rental deleted', 'index');
		}
		$this->flashWarning('Rental was not deleted', 'index');
		
	}
	
	
	function _list() {
		
		$customers = $this->Rental->Customer->find('list', array('fields' => 'Customer.name'));
		$vehicles = $this->Rental->Vehicle->find('list', array('fields' => 'Vehicle.vehicle_type'));
		$cards = $this->Rental->Card->find('list', array('fields' => 'Card.card_number'));
		$this->set(compact('customers', 'vehicles', 'cards'));
	
	}
}
