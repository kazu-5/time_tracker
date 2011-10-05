<div class="tasks view">
<h2><?php  __('Task');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $task['Task']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $task['Task']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Task', true), array('action' => 'edit', $task['Task']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Task', true), array('action' => 'delete', $task['Task']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $task['Task']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tasks', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tracking Tasks', true), array('controller' => 'tracking_tasks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tracking Task', true), array('controller' => 'tracking_tasks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Tracks', true), array('controller' => 'time_tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Track', true), array('controller' => 'time_tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php __('Related Tracking Tasks');?></h3>
	<?php if (!empty($task['TrackingTask'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $task['TrackingTask']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Flag Tracking');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $task['TrackingTask']['flag_tracking'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Start Time');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $task['TrackingTask']['start_time'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Task Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $task['TrackingTask']['task_id'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Tracking Task', true), array('controller' => 'tracking_tasks', 'action' => 'edit', $task['TrackingTask']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php __('Related Time Tracks');?></h3>
	<?php if (!empty($task['TimeTrack'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Start Time'); ?></th>
		<th><?php __('End Time'); ?></th>
		<th><?php __('Task Id'); ?></th>
		<th><?php __('Memo'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($task['TimeTrack'] as $timeTrack):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $timeTrack['id'];?></td>
			<td><?php echo $timeTrack['start_time'];?></td>
			<td><?php echo $timeTrack['end_time'];?></td>
			<td><?php echo $timeTrack['task_id'];?></td>
			<td><?php echo $timeTrack['memo'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'time_tracks', 'action' => 'view', $timeTrack['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'time_tracks', 'action' => 'edit', $timeTrack['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'time_tracks', 'action' => 'delete', $timeTrack['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $timeTrack['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Time Track', true), array('controller' => 'time_tracks', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
