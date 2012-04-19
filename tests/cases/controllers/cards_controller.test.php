<?php
/* Cards Test cases generated on: 2012-04-19 04:57:18 : 1334811438*/
App::import('Controller', 'Cards');

class TestCardsController extends CardsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CardsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.card', 'app.customer', 'app.parish', 'app.rental', 'app.vehicle', 'app.policy', 'app.sale');

	function startTest() {
		$this->Cards =& new TestCardsController();
		$this->Cards->constructClasses();
	}

	function endTest() {
		unset($this->Cards);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
