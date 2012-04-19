<?php
/* Vehicle Test cases generated on: 2012-04-19 04:56:16 : 1334811376*/
App::import('Model', 'Vehicle');

class VehicleTestCase extends CakeTestCase {
	var $fixtures = array('app.vehicle', 'app.customer', 'app.parish', 'app.card', 'app.rental', 'app.sale', 'app.policy');

	function startTest() {
		$this->Vehicle =& ClassRegistry::init('Vehicle');
	}

	function endTest() {
		unset($this->Vehicle);
		ClassRegistry::flush();
	}

}
