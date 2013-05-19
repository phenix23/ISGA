<div class="formations form">
<?php echo $this->Form->create('Formation'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Formation'); ?></legend>
	<?php
		echo $this->Form->input('code_formation');
		echo $this->Form->input('name');
		echo $this->Form->input('prix');
		echo $this->Form->input('location');
		echo $this->Form->input('formateur_id');
		echo $this->Form->input('content');
		echo $this->Form->input('date_start');
		echo $this->Form->input('date_end');
		echo $this->Form->input('langue');
		echo $this->Form->input('catalogue_id');
		echo $this->Form->input('deplome');
		echo $this->Form->input('domaine');
		echo $this->Form->input('categorie');
		echo $this->Form->input('code');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Formations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Formateurs'), array('controller' => 'formateurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formateur'), array('controller' => 'formateurs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Catalogues'), array('controller' => 'catalogues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Catalogue'), array('controller' => 'catalogues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscriptions'), array('controller' => 'inscriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscription'), array('controller' => 'inscriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
