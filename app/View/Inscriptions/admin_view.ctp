<div class="inscriptions view">
<h2><?php  echo __('Inscription'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inscription['Client']['id'], array('controller' => 'clients', 'action' => 'view', $inscription['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Formation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inscription['Formation']['name'], array('controller' => 'formations', 'action' => 'view', $inscription['Formation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Inscription'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['date_inscription']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Validation'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['date_validation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nbr Inscription'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['nbr_inscription']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($inscription['Inscription']['etat']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inscription'), array('action' => 'edit', $inscription['Inscription']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Inscription'), array('action' => 'delete', $inscription['Inscription']['id']), null, __('Are you sure you want to delete # %s?', $inscription['Inscription']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscriptions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscription'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
	</ul>
</div>
