<?php
/* Policies Test cases generated on: 2012-04-19 05:00:06 : 1334811606*/
App::import('Controller', 'Policies');

class TestPoliciesController extends PoliciesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PoliciesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.policy', 'app.vehicle', 'app.customer', 'app.parish', 'app.card', 'app.rental', 'app.sale');

	function startTest() {
		$this->Policies =& new TestPoliciesController();
		$this->Policies->constructClasses();
	}

	function endTest() {
		unset($this->Policies);
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
