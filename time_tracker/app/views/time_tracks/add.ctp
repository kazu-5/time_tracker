<div class="timeTracks form">
<?php echo $this->Form->create('TimeTrack');?>
	<fieldset>
		<legend><?php __('Add Time Track'); ?></legend>
	<?php
		echo $this->Form->input('start_time');
		echo $this->Form->input('end_time');
		echo $this->Form->input('task_id');
		echo $this->Form->input('memo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Time Tracks', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tasks', true), array('controller' => 'tasks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task', true), array('controller' => 'tasks', 'action' => 'add')); ?> </li>
	</ul>
</div>