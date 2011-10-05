<div class="timeTracks view">
<h2><?php  __('Time Track');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $timeTrack['TimeTrack']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Start Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $timeTrack['TimeTrack']['start_time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('End Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $timeTrack['TimeTrack']['end_time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Task'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($timeTrack['Task']['name'], array('controller' => 'tasks', 'action' => 'view', $timeTrack['Task']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Memo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $timeTrack['TimeTrack']['memo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Time Track', true), array('action' => 'edit', $timeTrack['TimeTrack']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Time Track', true), array('action' => 'delete', $timeTrack['TimeTrack']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $timeTrack['TimeTrack']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Time Tracks', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time Track', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tasks', true), array('controller' => 'tasks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task', true), array('controller' => 'tasks', 'action' => 'add')); ?> </li>
	</ul>
</div>
