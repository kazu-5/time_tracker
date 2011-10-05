<?php
/* TimeTrack Fixture generated on: 2011-09-19 11:42:44 : 1316400164 */
class TimeTrackFixture extends CakeTestFixture {
	var $name = 'TimeTrack';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'start_time' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'end_time' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'task_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'memo' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'start_time' => 1,
			'end_time' => 1,
			'task_id' => 1,
			'memo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);
}
