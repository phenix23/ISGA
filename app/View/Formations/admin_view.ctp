<div class="formations view">
<h2><?php  echo __('Formation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code Formation'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['code_formation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prix'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['prix']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Formateur'); ?></dt>
		<dd>
			<?php echo $this->Html->link($formation['Formateur']['id'], array('controller' => 'formateurs', 'action' => 'view', $formation['Formateur']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Start'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['date_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date End'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['date_end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Langue'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['langue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Catalogue'); ?></dt>
		<dd>
			<?php echo $this->Html->link($formation['Catalogue']['name'], array('controller' => 'catalogues', 'action' => 'view', $formation['Catalogue']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deplome'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['deplome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Domaine'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['domaine']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categorie'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['categorie']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['code']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Formation'), array('action' => 'edit', $formation['Formation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Formation'), array('action' => 'delete', $formation['Formation']['id']), null, __('Are you sure you want to delete # %s?', $formation['Formation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Formations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formateurs'), array('controller' => 'formateurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formateur'), array('controller' => 'formateurs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Catalogues'), array('controller' => 'catalogues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Catalogue'), array('controller' => 'catalogues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscriptions'), array('controller' => 'inscriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscription'), array('controller' => 'inscriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Inscriptions'); ?></h3>
	<?php if (!empty($formation['Inscription'])): ?>
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
		foreach ($formation['Inscription'] as $inscription): ?>
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
