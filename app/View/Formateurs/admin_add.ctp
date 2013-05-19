<div class="formateurs form">
<?php echo $this->Form->create('Formateur'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Formateur'); ?></legend>
	<?php
		echo $this->Form->input('code_formateur');
		echo $this->Form->input('nom');
		echo $this->Form->input('prenom');
		echo $this->Form->input('niveau_acadmic');
		echo $this->Form->input('experiance');
		echo $this->Form->input('code');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Formateurs'), array('action' => 'index')); ?></li>
	</ul>
</div>
