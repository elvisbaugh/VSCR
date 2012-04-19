<?php
/* Sales Test cases generated on: 2012-04-19 05:00:50 : 1334811650*/
App::import('Controller', 'Sales');

class TestSalesController extends SalesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SalesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.sale', 'app.customer', 'app.parish', 'app.card', 'app.rental', 'app.vehicle', 'app.policy');

	function startTest() {
		$this->Sales =& new TestSalesController();
		$this->Sales->constructClasses();
	}

	function endTest() {
		unset($this->Sales);
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
