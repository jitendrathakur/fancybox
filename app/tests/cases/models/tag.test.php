<?php
/* Tag Test cases generated on: 2014-01-10 13:52:13 : 1389358333*/
App::import('Model', 'Tag');

class TagTestCase extends CakeTestCase {
	var $fixtures = array('app.tag', 'app.potentry', 'app.transentry');

	function startTest() {
		$this->Tag =& ClassRegistry::init('Tag');
	}

	function endTest() {
		unset($this->Tag);
		ClassRegistry::flush();
	}

}
