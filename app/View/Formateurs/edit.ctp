<div class="formateurs view span10">
<?php echo $this->Form->create('Formateur'); ?>
	<fieldset>
		<h2 class="section-title"><?php echo __('Edit Formateur'); ?></h2>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('code_formateur');
		echo $this->Form->input('nom');
		echo $this->Form->input('prenom');
		echo $this->Form->input('niveau_acadmic');
		echo $this->Form->input('experiance');
		echo $this->Form->input('code');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="span2">
        <div style="display: table-cell;">
        <div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
	<?php echo $this->Html->link(__('<i class="icon-list icon-white"></i> Liste '), array('action' => 'index'),array('class'=>'btn btn-info','escape'=> false)); ?>
        </div>
            <div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
		<?php echo $this->Form->postLink(__('<i class="icon-trash icon-white"></i> Supp'), array('action' => 'delete', $this->Form->value('Formateur.id')), array('class'=>'btn btn-danger','escape'=> false), __('Are you sure you want to delete # %s?', $this->Form->value('Formateur.id'))); ?>
        </div>
    </div>
</div>
