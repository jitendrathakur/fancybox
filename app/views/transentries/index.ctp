<div class="transentries index">
	<h2><?php __('Transentries');?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover table-condensed">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('tag_id');?></th>
			<th><?php echo $this->Paginator->sort('language');?></th>
			<th><?php echo $this->Paginator->sort('translation');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('createdBy');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modifiedBy');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($transentries as $transentry):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $transentry['Transentry']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($transentry['Tag']['id'], array('controller' => 'tags', 'action' => 'view', $transentry['Tag']['id'])); ?>
		</td>
		<td><?php echo $transentry['Transentry']['language']; ?>&nbsp;</td>
		<td><?php echo $transentry['Transentry']['translation']; ?>&nbsp;</td>
		<td><?php echo $transentry['Transentry']['created']; ?>&nbsp;</td>
		<td><?php echo $transentry['Transentry']['createdBy']; ?>&nbsp;</td>
		<td><?php echo $transentry['Transentry']['modified']; ?>&nbsp;</td>
		<td><?php echo $transentry['Transentry']['modifiedBy']; ?>&nbsp;</td>
		<td><?php echo $transentry['Transentry']['status']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $transentry['Transentry']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $transentry['Transentry']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $transentry['Transentry']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $transentry['Transentry']['id'])); ?>
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
