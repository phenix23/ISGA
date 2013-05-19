<div class="formateurs view">
	<h2 class="section-title"><?php echo __('Formateurs'); ?></h2>
        
        <div class="btn-toolbar">
        <?php echo $this->Html->link(__('<i class="icon-plus icon-white"></i><span><strong> Nouveau Formateur</strong></span>'), array('action' => 'add'),array('class'=>'btn btn-info','escape'=> false)); ?>
        </div>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-hover table-bordered">
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
			<?php echo $this->Html->link(__('<i class="icon-eye-open icon-white"></i>'), array('action' => 'view', $formateur['Formateur']['id']),array('class'=>'btn btn-info','escape'=> false)); ?>
			<?php echo $this->Html->link(__('<i class="icon-edit icon-white"></i>'), array('action' => 'edit', $formateur['Formateur']['id']),array('class'=>'btn btn-success','escape'=> false)); ?>
			<?php echo $this->Form->postLink(__('<i class="icon-trash icon-white"></i>'), array('action' => 'delete', $formateur['Formateur']['id']), array('class'=>'btn btn-danger','escape'=> false), __('Are you sure you want to delete # %s?', $formateur['Formateur']['id'])); ?>
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
