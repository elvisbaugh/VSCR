<?php
/* Vehicles Test cases generated on: 2012-04-19 05:01:22 : 1334811682*/
App::import('Controller', 'Vehicles');

class TestVehiclesController extends VehiclesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class VehiclesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.vehicle', 'app.customer', 'app.parish', 'app.card', 'app.rental', 'app.sale', 'app.policy');

	function startTest() {
		$this->Vehicles =& new TestVehiclesController();
		$this->Vehicles->constructClasses();
	}

	function endTest() {
		unset($this->Vehicles);
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
