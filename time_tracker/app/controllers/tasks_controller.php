<?php
class TasksController extends AppController {

	var $name = 'Tasks';
	var $uses = array('Task','TrackingTask','TimeTrack');

	function index() {
		$this->Task->recursive = 0;
		$this->set('tasks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid task', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('task', $this->Task->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Task->create();
			if ($this->Task->save($this->data)) {
				$this->Session->setFlash(__('The task has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The task could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid task', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Task->save($this->data)) {
				$this->Session->setFlash(__('The task has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The task could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Task->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for task', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Task->delete($id)) {
			$this->Session->setFlash(__('Task deleted', true));
			//$this->TimeTrack

			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Task was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function start($id = null) {
		//タスクの開始時間を取得
		$start_time = time(); //対象タスクの開始時間

		//TrackingTaskテーブルのレコードを更新
		$this->TrackingTask->id = 1;
		$this->TrackingTask->saveField("flag_tracking", true);
		$this->TrackingTask->saveField("start_time",$start_time);
		$this->TrackingTask->saveField("task_id",$id);
		$this->setAction("tracking");
		$this->render("start");
	}

	function tracking(){
		$tracking_task = $this->TrackingTask->read(null,1);
		$start_time = $tracking_task['TrackingTask']['start_time'];
		$id = $tracking_task['TrackingTask']['task_id'];
		$task = $this->Task->read(null,$id);
		$name = $task['Task']['name'];
		$elapsed_time = time() - $start_time;

		$start_time_String = date("Y-m-d H:i:s",$start_time);
		$elapsed_time_String = floor($elapsed_time/3600).gmdate(":i:s", $elapsed_time);

		$this->set('id', $id);
		$this->set('tracking_task', $tracking_task);
		$this->set('start_time', $start_time_String);
		$this->set('name', $name);
		$this->set('elapsed_time', $elapsed_time_String);
	}

	function stop() {
		$memo = $_POST['memo'];
		$end_time = time();

		$tracking_task = $this->TrackingTask->read(null,1);
		$start_time = $tracking_task['TrackingTask']['start_time'];
		$id = $tracking_task['TrackingTask']['task_id'];

		$this->TrackingTask->id = 1;
		$this->TrackingTask->saveField("flag_tracking",0);

		$time_track = array();
		$time_track['TimeTrack']['start_time'] = $start_time;
		$time_track['TimeTrack']['end_time'] = $end_time;
		$time_track['TimeTrack']['task_id'] = $id;
		//$time_track['TimeTrack']['memo'] = $memo;
		$this->TimeTrack->save($time_track);

		$this->redirect(array('action'=>'index'));
	}
}
