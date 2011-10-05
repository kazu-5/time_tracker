<?php
/* TrackingTask Test cases generated on: 2011-09-19 11:43:45 : 1316400225*/
App::import('Model', 'TrackingTask');

class TrackingTaskTestCase extends CakeTestCase {
	var $fixtures = array('app.tracking_task', 'app.task', 'app.time_track');

	function startTest() {
		$this->TrackingTask =& ClassRegistry::init('TrackingTask');
	}

	function endTest() {
		unset($this->TrackingTask);
		ClassRegistry::flush();
	}

}
