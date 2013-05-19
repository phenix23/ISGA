<div class=" span10 formateurs view">
    <h2 class="section-title"><?php echo __('Formateur'); ?></h2>
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
<div class="span2">
    <div style="display: table-cell;">
        <div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
            <?php echo $this->Html->link('<i class="icon-align-justify icon-white"></i><span><strong>Liste</strong></span>', array('action' => 'index'), array('class' => 'btn btn-primary', 'escape' => false, 'rel' => 'tooltip', 'title' => 'Liste')); ?>
        </div>
        <div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
            <?php echo $this->Html->link('<i class="icon-pencil icon-white"></i><span><strong>Modif</strong></span> </i>', array('action' => 'add', $formateur['Formateur']['id']), array('class' => 'btn btn-success', 'escape' => false, 'rel' => 'tooltip', 'title' => 'Ajouter')); ?>
        </div>
        <div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
            <?php echo $this->Html->link('<i class="icon-edit icon-white"></i><span><strong> Editer</strong></span>', array('action' => 'edit', $formateur['Formateur']['id']), array('class' => 'btn btn-info', 'escape' => false, 'rel' => 'tooltip', 'title' => 'Editer')); ?>
        </div>
        <div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
            <?php echo $this->Html->link('<i class="icon-trash icon-white"></i><span><strong>Supp</strong></span>', array('action' => 'delete', $formateur['Formateur']['id']), array('class' => 'btn btn-danger', 'escape' => false, 'rel' => 'tooltip', 'title' => 'Supprimer')); ?>
        </div>
    </div>
</div>
