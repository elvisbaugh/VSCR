<?php
/* Customer Test cases generated on: 2012-04-19 04:50:58 : 1334811058*/
App::import('Model', 'Customer');

class CustomerTestCase extends CakeTestCase {
	var $fixtures = array('app.customer', 'app.parish', 'app.card', 'app.rental', 'app.sale', 'app.vehicle');

	function startTest() {
		$this->Customer =& ClassRegistry::init('Customer');
	}

	function endTest() {
		unset($this->Customer);
		ClassRegistry::flush();
	}

}
