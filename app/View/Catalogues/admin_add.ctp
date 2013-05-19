<div class="catalogues form">
<?php echo $this->Form->create('Catalogue'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Catalogue'); ?></legend>
	<?php
		echo $this->Form->input('code');
		echo $this->Form->input('name');
		echo $this->Form->input('date_creation');
		echo $this->Form->input('date_validation');
		echo $this->Form->input('date_fin');
		echo $this->Form->input('responsable');
		echo $this->Form->input('path');
		echo $this->Form->input('pdf_file');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Catalogues'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
	</ul>
</div>
