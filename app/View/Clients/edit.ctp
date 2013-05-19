<div class="clients form">
<?php echo $this->Form->create('Client'); ?>
	<fieldset>
		<legend><?php echo __('Edit Client'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('code');
		echo $this->Form->input('nom');
		echo $this->Form->input('prenom');
		echo $this->Form->input('société');
		echo $this->Form->input('adresse');
		echo $this->Form->input('function');
		echo $this->Form->input('service');
		echo $this->Form->input('telephone');
		echo $this->Form->input('fax');
		echo $this->Form->input('mail');
		echo $this->Form->input('ville');
		echo $this->Form->input('codepostal');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Client.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Client.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Inscriptions'), array('controller' => 'inscriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscription'), array('controller' => 'inscriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
