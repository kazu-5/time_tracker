<?php
	header("Content-type: text/html;charset=utf-8");
	header("Refresh:1");
?>

<div class="tracking">
	<h2><?php __('Tracking'); ?></h2>
	<h4>タスク「<?php echo $name?>」を実行中</h4><br/>
	開始時刻「<?php echo $start_time?>」<br/>
	経過時間「<?php echo $elapsed_time?>」<br/>
	<br/>
	<?php echo $this->Html->link(__('Stop', true), array('action' => 'stop', $id)); ?>
</div>