<?php
/* Potentries Test cases generated on: 2014-01-10 13:53:51 : 1389358431*/
App::import('Controller', 'Potentries');

class TestPotentriesController extends PotentriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PotentriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.potentry', 'app.tag', 'app.transentry');

	function startTest() {
		$this->Potentries =& new TestPotentriesController();
		$this->Potentries->constructClasses();
	}

	function endTest() {
		unset($this->Potentries);
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
