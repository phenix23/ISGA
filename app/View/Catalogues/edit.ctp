<div class="catalogues form">
			<div class="row">
		<div class="span10">
<?php echo $this->Form->create('Catalogue',array('type'=>'file')); ?>
	<fieldset>
		<h2 class="section-title"><?php echo __('Edit Catalogue'); ?></h2>
	<?php
		echo $this->Form->input('code',array('label'=>'N°'));
		echo $this->Form->input('name',array('label'=>'Titre'));
		echo $this->Form->input('date_creation',array('label'=>'Date Création'));
		echo $this->Form->input('date_validation',array('label'=>'Date Validation'));
		echo $this->Form->input('date_fin',array('label'=>'Date Expiration'));
		echo $this->Form->input('responsable',array('label'=>'Responsable'));
		echo $this->Form->input('path',array('label'=>'Chemain'));
		echo $this->Form->file('pdf_file', array('label'=>'Document Pdf','type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enregistrer') ,array('class'=>'btn btn-success')); ?>
</div>

<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Catalogue.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Catalogue.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Catalogues'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
	</ul> -->
</div>
</div>
