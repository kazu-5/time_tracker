<?php
/* TimeTrack Test cases generated on: 2011-09-19 11:42:44 : 1316400164*/
App::import('Model', 'TimeTrack');

class TimeTrackTestCase extends CakeTestCase {
	var $fixtures = array('app.time_track', 'app.task', 'app.tracking_task');

	function startTest() {
		$this->TimeTrack =& ClassRegistry::init('TimeTrack');
	}

	function endTest() {
		unset($this->TimeTrack);
		ClassRegistry::flush();
	}

}
