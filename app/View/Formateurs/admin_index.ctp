<div class="formateurs index">
	<h2><?php echo __('Formateurs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('code_formateur'); ?></th>
			<th><?php echo $this->Paginator->sort('nom'); ?></th>
			<th><?php echo $this->Paginator->sort('prenom'); ?></th>
			<th><?php echo $this->Paginator->sort('niveau_acadmic'); ?></th>
			<th><?php echo $this->Paginator->sort('experiance'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($formateurs as $formateur): ?>
	<tr>
		<td><?php echo h($formateur['Formateur']['id']); ?>&nbsp;</td>
		<td><?php echo h($formateur['Formateur']['code_formateur']); ?>&nbsp;</td>
		<td><?php echo h($formateur['Formateur']['nom']); ?>&nbsp;</td>
		<td><?php echo h($formateur['Formateur']['prenom']); ?>&nbsp;</td>
		<td><?php echo h($formateur['Formateur']['niveau_acadmic']); ?>&nbsp;</td>
		<td><?php echo h($formateur['Formateur']['experiance']); ?>&nbsp;</td>
		<td><?php echo h($formateur['Formateur']['code']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $formateur['Formateur']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $formateur['Formateur']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $formateur['Formateur']['id']), null, __('Are you sure you want to delete # %s?', $formateur['Formateur']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Formateur'), array('action' => 'add')); ?></li>
	</ul>
</div>
