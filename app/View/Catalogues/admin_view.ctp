<div class="catalogues view">
<h2><?php  echo __('Catalogue'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($catalogue['Catalogue']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($catalogue['Catalogue']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($catalogue['Catalogue']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Creation'); ?></dt>
		<dd>
			<?php echo h($catalogue['Catalogue']['date_creation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Validation'); ?></dt>
		<dd>
			<?php echo h($catalogue['Catalogue']['date_validation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Fin'); ?></dt>
		<dd>
			<?php echo h($catalogue['Catalogue']['date_fin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable'); ?></dt>
		<dd>
			<?php echo h($catalogue['Catalogue']['responsable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Path'); ?></dt>
		<dd>
			<?php echo h($catalogue['Catalogue']['path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pdf File'); ?></dt>
		<dd>
			<?php echo h($catalogue['Catalogue']['pdf_file']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Catalogue'), array('action' => 'edit', $catalogue['Catalogue']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Catalogue'), array('action' => 'delete', $catalogue['Catalogue']['id']), null, __('Are you sure you want to delete # %s?', $catalogue['Catalogue']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Catalogues'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Catalogue'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Formations'); ?></h3>
	<?php if (!empty($catalogue['Formation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Code Formation'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Prix'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Formateur Id'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('Date Start'); ?></th>
		<th><?php echo __('Date End'); ?></th>
		<th><?php echo __('Langue'); ?></th>
		<th><?php echo __('Catalogue Id'); ?></th>
		<th><?php echo __('Deplome'); ?></th>
		<th><?php echo __('Domaine'); ?></th>
		<th><?php echo __('Categorie'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($catalogue['Formation'] as $formation): ?>
		<tr>
			<td><?php echo $formation['id']; ?></td>
			<td><?php echo $formation['code_formation']; ?></td>
			<td><?php echo $formation['name']; ?></td>
			<td><?php echo $formation['prix']; ?></td>
			<td><?php echo $formation['location']; ?></td>
			<td><?php echo $formation['formateur_id']; ?></td>
			<td><?php echo $formation['content']; ?></td>
			<td><?php echo $formation['date_start']; ?></td>
			<td><?php echo $formation['date_end']; ?></td>
			<td><?php echo $formation['langue']; ?></td>
			<td><?php echo $formation['catalogue_id']; ?></td>
			<td><?php echo $formation['deplome']; ?></td>
			<td><?php echo $formation['domaine']; ?></td>
			<td><?php echo $formation['categorie']; ?></td>
			<td><?php echo $formation['code']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'formations', 'action' => 'view', $formation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'formations', 'action' => 'edit', $formation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'formations', 'action' => 'delete', $formation['id']), null, __('Are you sure you want to delete # %s?', $formation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
