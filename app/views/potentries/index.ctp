<div class="potentries index">
	<h2><?php __('Potentries');?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover table-condensed">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('tag_id');?></th>
			<th><?php echo $this->Paginator->sort('page');?></th>
			<th><?php echo $this->Paginator->sort('linenumber');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('createdBy');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($potentries as $potentry):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $potentry['Potentry']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($potentry['Tag']['id'], array('controller' => 'tags', 'action' => 'view', $potentry['Tag']['id'])); ?>
		</td>
		<td><?php echo $potentry['Potentry']['page']; ?>&nbsp;</td>
		<td><?php echo $potentry['Potentry']['linenumber']; ?>&nbsp;</td>
		<td><?php echo $potentry['Potentry']['created']; ?>&nbsp;</td>
		<td><?php echo $potentry['Potentry']['createdBy']; ?>&nbsp;</td>
		<td><?php echo $potentry['Potentry']['status']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $potentry['Potentry']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $potentry['Potentry']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $potentry['Potentry']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $potentry['Potentry']['id'])); ?>
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
