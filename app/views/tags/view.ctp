<div class="tags view well span12">
<h2><?php  __('Tag');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow span2"';?>
		<dt class="span4"><?php __('Id'); ?></dt>
		<dd class="span4">
			<?php echo $tag['Tag']['id']; ?>
			&nbsp;
		</dd>
		<dt class="span4"><?php __('Original Tag'); ?></dt>
		<dd class="span4">
			<?php echo $tag['Tag']['original_tag']; ?>
			&nbsp;
		</dd>
		<dt class="span4"><?php __('Type'); ?></dt>
		<dd class="span4">
			<?php echo $tag['Tag']['type']; ?>
			&nbsp;
		</dd>
		<dt class="span4"><?php __('Comment'); ?></dt>
		<dd class="span4">
			<?php echo $tag['Tag']['comment']; ?>
			&nbsp;
		</dd>
		<dt class="span4"><?php __('Created'); ?></dt>
		<dd class="span4">
			<?php echo $tag['Tag']['created']; ?>
			&nbsp;
		</dd>
		<dt class="span4"><?php __('CreatedBy'); ?></dt>
		<dd class="span4">
			<?php echo $tag['Tag']['createdBy']; ?>
			&nbsp;
		</dd>
		<dt class="span4"><?php __('Modified'); ?></dt>
		<dd class="span4">
			<?php echo $tag['Tag']['modified']; ?>
			&nbsp;
		</dd>
		<dt class="span4"><?php __('ModifiedBy'); ?></dt>
		<dd class="span4">
			<?php echo $tag['Tag']['modifiedBy']; ?>
			&nbsp;
		</dd>
		<dt class="span4"><?php __('Status'); ?></dt>
		<dd class="span4">
			<?php echo $tag['Tag']['status']; ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php __('Related Potentries');?></h3>
	<?php if (!empty($tag['Potentry'])):?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped table-bordered table-hover table-condensed" id="potentries">
	<thead>
		<th><?php __('Id'); ?></th>
		<th><?php __('Tag Id'); ?></th>
		<th><?php __('Page'); ?></th>
		<th><?php __('Linenumber'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('CreatedBy'); ?></th>
		<th><?php __('Status'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</thead>
	<tbody>
	<?php
		$i = 0;
		foreach ($tag['Potentry'] as $potentry):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $potentry['id'];?></td>
			<td><?php echo $potentry['tag_id'];?></td>
			<td><?php echo $potentry['page'];?></td>
			<td><?php echo $potentry['linenumber'];?></td>
			<td><?php echo $potentry['created'];?></td>
			<td><?php echo $potentry['createdBy'];?></td>
			<td><?php echo $potentry['status'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'potentries', 'action' => 'view', $potentry['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'potentries', 'action' => 'edit', $potentry['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'potentries', 'action' => 'delete', $potentry['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $potentry['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Potentry', true), array('controller' => 'potentries', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Transentries');?></h3>
	<?php if (!empty($tag['Transentry'])):?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped table-bordered table-hover table-condensed" id="transentries">
	<thead>
		<th><?php __('Id'); ?></th>
		<th><?php __('Tag Id'); ?></th>
		<th><?php __('Language'); ?></th>
		<th><?php __('Translation'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('CreatedBy'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('ModifiedBy'); ?></th>
		<th><?php __('Status'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</thead>
	<tbody>
	<?php
		$i = 0;
		foreach ($tag['Transentry'] as $transentry):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $transentry['id'];?></td>
			<td><?php echo $transentry['tag_id'];?></td>
			<td><?php echo $transentry['language'];?></td>
			<td><?php echo $transentry['translation'];?></td>
			<td><?php echo $transentry['created'];?></td>
			<td><?php echo $transentry['createdBy'];?></td>
			<td><?php echo $transentry['modified'];?></td>
			<td><?php echo $transentry['modifiedBy'];?></td>
			<td><?php echo $transentry['status'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'transentries', 'action' => 'view', $transentry['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'transentries', 'action' => 'edit', $transentry['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'transentries', 'action' => 'delete', $transentry['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $transentry['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Transentry', true), array('controller' => 'transentries', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
