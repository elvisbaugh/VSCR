<?php
/* Parish Test cases generated on: 2012-04-19 04:52:02 : 1334811122*/
App::import('Model', 'Parish');

class ParishTestCase extends CakeTestCase {
	var $fixtures = array('app.parish', 'app.customer', 'app.card', 'app.rental', 'app.sale', 'app.vehicle');

	function startTest() {
		$this->Parish =& ClassRegistry::init('Parish');
	}

	function endTest() {
		unset($this->Parish);
		ClassRegistry::flush();
	}

}
