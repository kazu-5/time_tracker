<?php header("Content-type: text/html;charset=utf-8"); ?>
<div class="timeTracks index">
	<h2><?php __('Time Tracks');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<!-- <th><?php echo $this->Paginator->sort('id');?></th>  -->
			<th><?php echo $this->Paginator->sort('タスク名');?></th>
			<th><?php //echo $this->Paginator->sort('メモ');?></th>
			<th><?php echo $this->Paginator->sort('所要時間');?></th>
			<th><?php echo $this->Paginator->sort('開始時刻');?></th>
			<th><?php echo $this->Paginator->sort('終了時刻');?></th>
			<th class="actions"><?php __('');?></th>

			<!-- <th class="actions"><?php __('Actions');?></th>  -->
	</tr>
	<?php
	$i = 0;
	foreach ($timeTracks as $timeTrack):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<!-- <td><?php echo $timeTrack['TimeTrack']['id']; ?>&nbsp;</td>  -->
		<?php $time = $timeTrack['TimeTrack']['end_time'] - $timeTrack['TimeTrack']['start_time'];?>
		<td>
			<!-- <?php echo $this->Html->link($timeTrack['Task']['name'], array('controller' => 'tasks', 'action' => 'view', $timeTrack['Task']['id'])); ?> -->
			<?php echo $timeTrack['Task']['name']; ?>
		</td>
		<td><?php //echo $timeTrack['TimeTrack']['memo']; ?>&nbsp;</td>
		<td><?php echo floor($time/3600).gmdate(":i:s", $time);; ?>&nbsp;</td>
		<td><?php echo date("Y-m-d H:i:s",$timeTrack['TimeTrack']['start_time']); ?>&nbsp;</td>
		<td><?php echo date("Y-m-d H:i:s",$timeTrack['TimeTrack']['end_time']); ?>&nbsp;</td>

		<td class="actions">
			<?php //echo $this->Html->link(__('View', true), array('action' => 'view', $timeTrack['TimeTrack']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit', true), array('action' => 'edit', $timeTrack['TimeTrack']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $timeTrack['TimeTrack']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $timeTrack['TimeTrack']['id'])); ?>
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
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<!-- <li><?php echo $this->Html->link(__('New Time Track', true), array('action' => 'add')); ?></li> -->
		<li><?php echo $this->Html->link(__('List Tasks', true), array('controller' => 'tasks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task', true), array('controller' => 'tasks', 'action' => 'add')); ?> </li>
	</ul>
</div>