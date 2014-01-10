<?php
class Potentry extends AppModel {
	var $name = 'Potentry';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Tag' => array(
			'className' => 'Tag',
			'foreignKey' => 'tag_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
