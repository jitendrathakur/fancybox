<div class="tags form">
<?php echo $this->Form->create('Tag');?>
	<fieldset>
		<legend><?php __('Edit Tag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('original_tag');
		echo $this->Form->input('type');
		echo $this->Form->input('comment');
		echo $this->Form->input('createdBy');
		echo $this->Form->input('modifiedBy');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Tag.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Tag.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tags', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Potentries', true), array('controller' => 'potentries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Potentry', true), array('controller' => 'potentries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transentries', true), array('controller' => 'transentries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transentry', true), array('controller' => 'transentries', 'action' => 'add')); ?> </li>
	</ul>
</div>