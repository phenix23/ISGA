<div class="formateurs view">
<h2><?php  echo __('Formateur'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($formateur['Formateur']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code Formateur'); ?></dt>
		<dd>
			<?php echo h($formateur['Formateur']['code_formateur']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($formateur['Formateur']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prenom'); ?></dt>
		<dd>
			<?php echo h($formateur['Formateur']['prenom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Niveau Acadmic'); ?></dt>
		<dd>
			<?php echo h($formateur['Formateur']['niveau_acadmic']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Experiance'); ?></dt>
		<dd>
			<?php echo h($formateur['Formateur']['experiance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($formateur['Formateur']['code']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Formateur'), array('action' => 'edit', $formateur['Formateur']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Formateur'), array('action' => 'delete', $formateur['Formateur']['id']), null, __('Are you sure you want to delete # %s?', $formateur['Formateur']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Formateurs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formateur'), array('action' => 'add')); ?> </li>
	</ul>
</div>
