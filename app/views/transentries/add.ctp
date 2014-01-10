<div class="transentries form">
<?php echo $this->Form->create('Transentry', $twitterBootstrapCreateOptions);?>
	<fieldset>
		<legend><?php __('Add Transentry'); ?></legend>
	<?php
		echo $this->Form->input('tag_id');
		echo $this->Form->input('language');
		echo $this->Form->input('translation');
		echo $this->Form->input('createdBy');
		echo $this->Form->input('modifiedBy');
		echo $this->Form->input('status');
		echo $this->Form->submit('Submit', $twitterBootstrapEndOptions);
	?>
	</fieldset>
<?php echo $this->Form->end();?>
</div>