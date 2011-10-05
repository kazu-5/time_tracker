<?php
/* Task Test cases generated on: 2011-09-19 11:41:18 : 1316400078*/
App::import('Model', 'Task');

class TaskTestCase extends CakeTestCase {
	var $fixtures = array('app.task', 'app.tracking_task', 'app.time_track');

	function startTest() {
		$this->Task =& ClassRegistry::init('Task');
	}

	function endTest() {
		unset($this->Task);
		ClassRegistry::flush();
	}

}
