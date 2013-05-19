<div class="inscriptions formateurs view span10">
<?php echo $this->Form->create('Inscription'); ?>
	<fieldset>
		<h2 class="section-title"><?php echo __('Edit Inscription'); ?></h2>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('code');
		echo $this->Form->input('client_id');
		echo $this->Form->input('formation_id');
		echo $this->Form->input('date_inscription');
		echo $this->Form->input('date_validation');
		echo $this->Form->input('nbr_inscription');
		echo $this->Form->input('etat');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="span2">
    <div style="display: table-cell;">
        
        <div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
            <?php echo $this->Html->link(__('<i class="icon-list icon-white"></i>  List Clients'), array('controller' => 'clients', 'action' => 'index'), array('class' => 'btn btn-info btn-toolbar-vertical', 'escape' => false)); ?>

        </div>
        <div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
            <?php echo $this->Html->link(__('<i class="icon-list icon-white"></i>   List Formations'), array('controller' => 'formations', 'action' => 'index'), array('class' => 'btn btn-info btn-toolbar-vertical', 'escape' => false)); ?>
        </div>
        <div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
            <?php echo $this->Html->link(__('<i class="icon-list icon-white"></i> Liste Inscription '), array('action' => 'index'), array('class' => 'btn btn-info btn-toolbar-vertical', 'escape' => false)); ?> 
        </div>
<!--        <div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
            <?php echo $this->Form->postLink(__('<i class="icon-trash icon-white"></i> Supp'), array('action' => 'delete', $inscription['Inscription']['id']), array('class' => 'btn btn-danger', 'escape' => false), __('Are you sure you want to delete # %s?', $inscription['Inscription']['id'])); ?>
        </div>-->
    </div>
</div>
<!--<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Inscription.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Inscription.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Inscriptions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
