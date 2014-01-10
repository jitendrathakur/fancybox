<?php
/* Transentry Fixture generated on: 2014-01-10 13:52:55 : 1389358375 */
class TransentryFixture extends CakeTestFixture {
	var $name = 'Transentry';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'tag_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 512, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'language' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 8, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'translation' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1024, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'createdBy' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modifiedBy' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'tag_id' => 'Lorem ipsum dolor sit amet',
			'language' => 'Lorem ',
			'translation' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-01-10 13:52:55',
			'createdBy' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-01-10 13:52:55',
			'modifiedBy' => 'Lorem ipsum dolor sit amet',
			'status' => 1
		),
	);
}
