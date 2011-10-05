<?php
class Task extends AppModel {
	var $name = 'Task';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasOne = array(
		'TrackingTask' => array(
			'className' => 'TrackingTask',
			'foreignKey' => 'task_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'TimeTrack' => array(
			'className' => 'TimeTrack',
			'foreignKey' => 'task_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
