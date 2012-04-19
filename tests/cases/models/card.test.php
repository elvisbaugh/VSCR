<?php
/* Card Test cases generated on: 2012-04-19 04:49:51 : 1334810991*/
App::import('Model', 'Card');

class CardTestCase extends CakeTestCase {
	var $fixtures = array('app.card', 'app.customer', 'app.rental', 'app.sale');

	function startTest() {
		$this->Card =& ClassRegistry::init('Card');
	}

	function endTest() {
		unset($this->Card);
		ClassRegistry::flush();
	}

}
