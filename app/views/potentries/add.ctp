<div class="potentries form">
<?php echo $this->Form->create('Potentry', $twitterBootstrapCreateOptions);?>
	<fieldset>
		<legend><?php __('Add Potentry'); ?></legend>
	<?php
		echo $this->Form->input('tag_id');
		echo $this->Form->input('page');
		echo $this->Form->input('linenumber');
		echo $this->Form->input('createdBy');
		echo $this->Form->input('status');
		echo $this->Form->submit('Submit', $twitterBootstrapEndOptions);
	?>
	</fieldset>
<?php echo $this->Form->end();?>
</div>