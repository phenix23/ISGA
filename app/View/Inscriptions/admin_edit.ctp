<div class="inscriptions form">
<?php echo $this->Form->create('Inscription'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Inscription'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('code');
		echo $this->Form->input('client_id');
		echo $this->Form->input('formation_id');
		echo $this->Form->input('date_inscription');
		echo $this->Form->input('date_validation');
		echo $this->Form->input('nbr_inscription');
		echo $this->Form->input('etat');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Inscription.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Inscription.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Inscriptions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
	</ul>
</div>
