<div class="catalogues index">
	<h2><?php echo __('Catalogues'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('date_creation'); ?></th>
			<th><?php echo $this->Paginator->sort('date_validation'); ?></th>
			<th><?php echo $this->Paginator->sort('date_fin'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable'); ?></th>
			<th><?php echo $this->Paginator->sort('path'); ?></th>
			<th><?php echo $this->Paginator->sort('pdf_file'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($catalogues as $catalogue): ?>
	<tr>
		<td><?php echo h($catalogue['Catalogue']['id']); ?>&nbsp;</td>
		<td><?php echo h($catalogue['Catalogue']['code']); ?>&nbsp;</td>
		<td><?php echo h($catalogue['Catalogue']['name']); ?>&nbsp;</td>
		<td><?php echo h($catalogue['Catalogue']['date_creation']); ?>&nbsp;</td>
		<td><?php echo h($catalogue['Catalogue']['date_validation']); ?>&nbsp;</td>
		<td><?php echo h($catalogue['Catalogue']['date_fin']); ?>&nbsp;</td>
		<td><?php echo h($catalogue['Catalogue']['responsable']); ?>&nbsp;</td>
		<td><?php echo h($catalogue['Catalogue']['path']); ?>&nbsp;</td>
		<td><?php echo h($catalogue['Catalogue']['pdf_file']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $catalogue['Catalogue']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $catalogue['Catalogue']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $catalogue['Catalogue']['id']), null, __('Are you sure you want to delete # %s?', $catalogue['Catalogue']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Catalogue'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
	</ul>
</div>
