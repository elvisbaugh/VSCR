<?php
/* Policy Test cases generated on: 2012-04-19 04:52:39 : 1334811159*/
App::import('Model', 'Policy');

class PolicyTestCase extends CakeTestCase {
	var $fixtures = array('app.policy', 'app.vehicle');

	function startTest() {
		$this->Policy =& ClassRegistry::init('Policy');
	}

	function endTest() {
		unset($this->Policy);
		ClassRegistry::flush();
	}

}
