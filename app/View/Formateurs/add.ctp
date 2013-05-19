<div class="formateurs view span10">
    <?php echo $this->Form->create('Formateur'); ?>
    <fieldset>
        <h2 class="section-title"><?php echo __('Nouveau Formateur'); ?></h2>
        <?php
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
            <?php echo $this->Html->link(__('<i class="icon-align-justify icon-white"></i><span><strong>Liste Formateurs</strong></span>'), array('action' => 'index'), array('class' => 'btn btn-info', 'escape' => false, 'rel' => 'tooltip', 'title' => 'Ajouter')); ?>
        </div>
    </div>
</div>
