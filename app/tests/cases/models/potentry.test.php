<?php
/* Potentry Test cases generated on: 2014-01-10 13:51:11 : 1389358271*/
App::import('Model', 'Potentry');

class PotentryTestCase extends CakeTestCase {
	var $fixtures = array('app.potentry', 'app.tag');

	function startTest() {
		$this->Potentry =& ClassRegistry::init('Potentry');
	}

	function endTest() {
		unset($this->Potentry);
		ClassRegistry::flush();
	}

}
