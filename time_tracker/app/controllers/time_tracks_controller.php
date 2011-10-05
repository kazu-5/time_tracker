<?php
class TimeTracksController extends AppController {

	var $name = 'TimeTracks';

	function index() {
		$this->TimeTrack->recursive = 0;
		$this->set('timeTracks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid time track', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('timeTrack', $this->TimeTrack->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TimeTrack->create();
			if ($this->TimeTrack->save($this->data)) {
				$this->Session->setFlash(__('The time track has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The time track could not be saved. Please, try again.', true));
			}
		}
		$tasks = $this->TimeTrack->Task->find('list');
		$this->set(compact('tasks'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid time track', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TimeTrack->save($this->data)) {
				$this->Session->setFlash(__('The time track has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The time track could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TimeTrack->read(null, $id);
		}
		$tasks = $this->TimeTrack->Task->find('list');
		$this->set(compact('tasks'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for time track', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TimeTrack->delete($id)) {
			$this->Session->setFlash(__('Time track deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Time track was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
