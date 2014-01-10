<?php
/* Potentry Fixture generated on: 2014-01-10 13:51:11 : 1389358271 */
class PotentryFixture extends CakeTestFixture {
	var $name = 'Potentry';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'tag_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 512, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'page' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'linenumber' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'createdBy' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'tag_id' => 'Lorem ipsum dolor sit amet',
			'page' => 'Lorem ipsum dolor sit amet',
			'linenumber' => 1,
			'created' => '2014-01-10 13:51:11',
			'createdBy' => 'Lorem ipsum dolor sit amet',
			'status' => 1
		),
	);
}
