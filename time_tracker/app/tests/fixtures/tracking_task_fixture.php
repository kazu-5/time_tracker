<?php
/* TrackingTask Fixture generated on: 2011-09-19 11:43:45 : 1316400225 */
class TrackingTaskFixture extends CakeTestFixture {
	var $name = 'TrackingTask';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'flag_tracking' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'start_time' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'task_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'flag_tracking' => 1,
			'start_time' => 1,
			'task_id' => 1
		),
	);
}
