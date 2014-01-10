<div class="tags form">
<?php echo $this->Form->create('Tag', $twitterBootstrapCreateOptions);?>
	<fieldset>
		<legend><?php __('Add Tag'); ?></legend>
	<?php
		echo $this->Form->input('original_tag');
		echo $this->Form->input('type');
		echo $this->Form->input('comment');
		echo $this->Form->input('createdBy');
		echo $this->Form->input('modifiedBy');
		echo $this->Form->input('status');
		echo $this->Form->submit('Submit', $twitterBootstrapEndOptions);
	?>
	</fieldset>
<?php echo $this->Form->end();?>
</div>
