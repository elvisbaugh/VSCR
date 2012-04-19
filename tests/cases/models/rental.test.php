<?php
/* Rental Test cases generated on: 2012-04-19 04:55:05 : 1334811305*/
App::import('Model', 'Rental');

class RentalTestCase extends CakeTestCase {
	var $fixtures = array('app.rental', 'app.customer', 'app.parish', 'app.card', 'app.sale', 'app.vehicle');

	function startTest() {
		$this->Rental =& ClassRegistry::init('Rental');
	}

	function endTest() {
		unset($this->Rental);
		ClassRegistry::flush();
	}

}
