<?php
/* Transentry Test cases generated on: 2014-01-10 13:52:55 : 1389358375*/
App::import('Model', 'Transentry');

class TransentryTestCase extends CakeTestCase {
	var $fixtures = array('app.transentry', 'app.tag', 'app.potentry');

	function startTest() {
		$this->Transentry =& ClassRegistry::init('Transentry');
	}

	function endTest() {
		unset($this->Transentry);
		ClassRegistry::flush();
	}

}
