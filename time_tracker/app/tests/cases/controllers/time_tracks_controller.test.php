<?php
/* TimeTracks Test cases generated on: 2011-09-10 13:04:48 : 1315652688*/
App::import('Controller', 'TimeTracks');

class TestTimeTracksController extends TimeTracksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TimeTracksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.time_track', 'app.task');

	function startTest() {
		$this->TimeTracks =& new TestTimeTracksController();
		$this->TimeTracks->constructClasses();
	}

	function endTest() {
		unset($this->TimeTracks);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
