<div class="tags index">
	<h2><?php __('Tags');?></h2>
	<table id ="tags" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<th><?php echo $this->Paginator->sort('id');?></th>
		<th><?php echo $this->Paginator->sort('original_tag');?></th>
		<th><?php echo $this->Paginator->sort('type');?></th>
		<th><?php echo $this->Paginator->sort('comment');?></th>
		<th><?php echo $this->Paginator->sort('created');?></th>
		<th><?php echo $this->Paginator->sort('createdBy');?></th>
		<th><?php echo $this->Paginator->sort('modified');?></th>
		<th><?php echo $this->Paginator->sort('modifiedBy');?></th>
		<th><?php echo $this->Paginator->sort('status');?></th>
		<th class="actions"><?php __('Actions');?></th>
	</thead>
	<tbody>
		<?php
		$i = 0;
		foreach ($tags as $tag):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tag['Tag']['id']; ?>&nbsp;</td>
			<td><?php echo $tag['Tag']['original_tag']; ?>&nbsp;</td>
			<td><?php echo $tag['Tag']['type']; ?>&nbsp;</td>
			<td><?php echo $tag['Tag']['comment']; ?>&nbsp;</td>
			<td><?php echo $tag['Tag']['created']; ?>&nbsp;</td>
			<td><?php echo $tag['Tag']['createdBy']; ?>&nbsp;</td>
			<td><?php echo $tag['Tag']['modified']; ?>&nbsp;</td>
			<td><?php echo $tag['Tag']['modifiedBy']; ?>&nbsp;</td>
			<td><?php echo $tag['Tag']['status']; ?>&nbsp;</td>
			<td class="actions span2">
				<?php echo $this->Html->link(__('View', true), array('action' => 'view', $tag['Tag']['id']), array('class' => 'btn btn-info btn-mini')); ?>				
				<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $tag['Tag']['id']),  array('class' => 'btn btn-danger btn-mini'), sprintf(__('Are you sure you want to delete # %s?', true), $tag['Tag']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</tr>
	</body>
	</table>
	 <?php //echo $this->element('pagination'); ?>
</div>
