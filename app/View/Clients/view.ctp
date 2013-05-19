<div class="clients view">
<h2><?php  echo __('Client'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($client['Client']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($client['Client']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($client['Client']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prenom'); ?></dt>
		<dd>
			<?php echo h($client['Client']['prenom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Société'); ?></dt>
		<dd>
			<?php echo h($client['Client']['société']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adresse'); ?></dt>
		<dd>
			<?php echo h($client['Client']['adresse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Function'); ?></dt>
		<dd>
			<?php echo h($client['Client']['function']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service'); ?></dt>
		<dd>
			<?php echo h($client['Client']['service']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($client['Client']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($client['Client']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail'); ?></dt>
		<dd>
			<?php echo h($client['Client']['mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ville'); ?></dt>
		<dd>
			<?php echo h($client['Client']['ville']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codepostal'); ?></dt>
		<dd>
			<?php echo h($client['Client']['codepostal']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client'), array('action' => 'edit', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client'), array('action' => 'delete', $client['Client']['id']), null, __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscriptions'), array('controller' => 'inscriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscription'), array('controller' => 'inscriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Inscriptions'); ?></h3>
	<?php if (!empty($client['Inscription'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Formation Id'); ?></th>
		<th><?php echo __('Date Inscription'); ?></th>
		<th><?php echo __('Date Validation'); ?></th>
		<th><?php echo __('Nbr Inscription'); ?></th>
		<th><?php echo __('Etat'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($client['Inscription'] as $inscription): ?>
		<tr>
			<td><?php echo $inscription['id']; ?></td>
			<td><?php echo $inscription['code']; ?></td>
			<td><?php echo $inscription['client_id']; ?></td>
			<td><?php echo $inscription['formation_id']; ?></td>
			<td><?php echo $inscription['date_inscription']; ?></td>
			<td><?php echo $inscription['date_validation']; ?></td>
			<td><?php echo $inscription['nbr_inscription']; ?></td>
			<td><?php echo $inscription['etat']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'inscriptions', 'action' => 'view', $inscription['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'inscriptions', 'action' => 'edit', $inscription['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'inscriptions', 'action' => 'delete', $inscription['id']), null, __('Are you sure you want to delete # %s?', $inscription['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inscription'), array('controller' => 'inscriptions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
