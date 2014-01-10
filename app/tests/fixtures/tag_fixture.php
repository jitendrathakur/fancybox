<?php
/* Tag Fixture generated on: 2014-01-10 13:52:13 : 1389358333 */
class TagFixture extends CakeTestFixture {
	var $name = 'Tag';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 512, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'original_tag' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1024, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'comment' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1024, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'id' => 'Lorem ipsum dolor sit amet',
			'original_tag' => 'Lorem ipsum dolor sit amet',
			'type' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-01-10 13:52:13',
			'createdBy' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-01-10 13:52:13',
			'modifiedBy' => 'Lorem ipsum dolor sit amet',
			'status' => 1
		),
	);
}
