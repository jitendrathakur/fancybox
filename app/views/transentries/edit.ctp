<div class="transentries form">
<?php echo $this->Form->create('Transentry');?>
	<fieldset>
		<legend><?php __('Edit Transentry'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tag_id');
		echo $this->Form->input('language');
		echo $this->Form->input('translation');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Transentry.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Transentry.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Transentries', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tags', true), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag', true), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>