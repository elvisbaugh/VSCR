<?php
/* Sale Test cases generated on: 2012-04-19 04:55:38 : 1334811338*/
App::import('Model', 'Sale');

class SaleTestCase extends CakeTestCase {
	var $fixtures = array('app.sale', 'app.customer', 'app.parish', 'app.card', 'app.rental', 'app.vehicle');

	function startTest() {
		$this->Sale =& ClassRegistry::init('Sale');
	}

	function endTest() {
		unset($this->Sale);
		ClassRegistry::flush();
	}

}
