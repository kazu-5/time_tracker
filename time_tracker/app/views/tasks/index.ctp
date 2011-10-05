<div class="tasks index">
	<h2><?php __('タスク一覧');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('No');?></th>
			<th><?php echo $this->Paginator->sort('タスク名');?></th>
			<th class="actions"><?php __('　');?></th>
	</tr>
	<?php
	$i = 0;
	$no = 0;
	foreach ($tasks as $task):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		$no++;
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $no; ?>&nbsp;</td>
		<td><?php echo $task['Task']['name']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Start', true), array('action' => 'start', $task['Task']['id'])); ?>
			<!-- <?php echo $this->Html->link(__('View', true), array('action' => 'view', $task['Task']['id'])); ?> -->
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $task['Task']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $task['Task']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $task['Task']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	  	<?php echo $this->Paginator->numbers();?>
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('メニュー'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Task', true), array('action' => 'add')); ?></li>
		<!--<li><?php echo $this->Html->link(__('List Tracking Tasks', true), array('controller' => 'tracking_tasks', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Tracking Task', true), array('controller' => 'tracking_tasks', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('List Time Tracks', true), array('controller' => 'time_tracks', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Time Track', true), array('controller' => 'time_tracks', 'action' => 'add')); ?> </li>-->
	</ul>
</div>