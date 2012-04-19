<?php
/* Rentals Test cases generated on: 2012-04-19 05:00:39 : 1334811639*/
App::import('Controller', 'Rentals');

class TestRentalsController extends RentalsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RentalsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.rental', 'app.customer', 'app.parish', 'app.card', 'app.sale', 'app.vehicle', 'app.policy');

	function startTest() {
		$this->Rentals =& new TestRentalsController();
		$this->Rentals->constructClasses();
	}

	function endTest() {
		unset($this->Rentals);
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
