<?php
/* Transentries Test cases generated on: 2014-01-10 13:55:35 : 1389358535*/
App::import('Controller', 'Transentries');

class TestTransentriesController extends TransentriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TransentriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.transentry', 'app.tag', 'app.potentry');

	function startTest() {
		$this->Transentries =& new TestTransentriesController();
		$this->Transentries->constructClasses();
	}

	function endTest() {
		unset($this->Transentries);
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
