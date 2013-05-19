<div class="inscriptions index">
	<h2><?php echo __('Inscriptions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('client_id'); ?></th>
			<th><?php echo $this->Paginator->sort('formation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date_inscription'); ?></th>
			<th><?php echo $this->Paginator->sort('date_validation'); ?></th>
			<th><?php echo $this->Paginator->sort('nbr_inscription'); ?></th>
			<th><?php echo $this->Paginator->sort('etat'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($inscriptions as $inscription): ?>
	<tr>
		<td><?php echo h($inscription['Inscription']['id']); ?>&nbsp;</td>
		<td><?php echo h($inscription['Inscription']['code']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($inscription['Client']['id'], array('controller' => 'clients', 'action' => 'view', $inscription['Client']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($inscription['Formation']['name'], array('controller' => 'formations', 'action' => 'view', $inscription['Formation']['id'])); ?>
		</td>
		<td><?php echo h($inscription['Inscription']['date_inscription']); ?>&nbsp;</td>
		<td><?php echo h($inscription['Inscription']['date_validation']); ?>&nbsp;</td>
		<td><?php echo h($inscription['Inscription']['nbr_inscription']); ?>&nbsp;</td>
		<td><?php echo h($inscription['Inscription']['etat']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $inscription['Inscription']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $inscription['Inscription']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $inscription['Inscription']['id']), null, __('Are you sure you want to delete # %s?', $inscription['Inscription']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Inscription'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
	</ul>
</div>
