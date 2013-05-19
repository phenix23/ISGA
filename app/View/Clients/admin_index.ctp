<div class="clients index">
	<h2><?php echo __('Clients'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('nom'); ?></th>
			<th><?php echo $this->Paginator->sort('prenom'); ?></th>
			<th><?php echo $this->Paginator->sort('société'); ?></th>
			<th><?php echo $this->Paginator->sort('adresse'); ?></th>
			<th><?php echo $this->Paginator->sort('function'); ?></th>
			<th><?php echo $this->Paginator->sort('service'); ?></th>
			<th><?php echo $this->Paginator->sort('telephone'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('mail'); ?></th>
			<th><?php echo $this->Paginator->sort('ville'); ?></th>
			<th><?php echo $this->Paginator->sort('codepostal'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($clients as $client): ?>
	<tr>
		<td><?php echo h($client['Client']['id']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['code']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['nom']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['prenom']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['société']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['adresse']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['function']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['service']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['fax']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['mail']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['ville']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['codepostal']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $client['Client']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $client['Client']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $client['Client']['id']), null, __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Inscriptions'), array('controller' => 'inscriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscription'), array('controller' => 'inscriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
