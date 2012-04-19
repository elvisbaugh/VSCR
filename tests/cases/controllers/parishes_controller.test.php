<?php
/* Parishes Test cases generated on: 2012-04-19 04:59:21 : 1334811561*/
App::import('Controller', 'Parishes');

class TestParishesController extends ParishesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ParishesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.parish', 'app.customer', 'app.card', 'app.rental', 'app.vehicle', 'app.policy', 'app.sale');

	function startTest() {
		$this->Parishes =& new TestParishesController();
		$this->Parishes->constructClasses();
	}

	function endTest() {
		unset($this->Parishes);
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
