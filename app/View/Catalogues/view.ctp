<!-- <div class="catalogues view" style="background-color: #fafafa !important; padding-left: 20px;padding-top: 5px;"> -->
<div class="row">
    <div class="span10">
        <div class="catalogues view ">
            <h2 class="section-title"><?php echo __('Catalogue'); ?></h2>
            <dl>
                <dt><?php echo __('N°'); ?></dt>
                <dd>
                    <?php echo h($catalogue['Catalogue']['code']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Titre'); ?></dt>
                <dd>
                    <?php echo h($catalogue['Catalogue']['name']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Date Création'); ?></dt>
                <dd>
                    <?php echo h($catalogue['Catalogue']['date_creation']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Date Validation'); ?></dt>
                <dd>
                    <?php echo h($catalogue['Catalogue']['date_validation']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Date Expiration'); ?></dt>
                <dd>
                    <?php echo h($catalogue['Catalogue']['date_fin']); ?>
                    &nbsp;
                </dd>
<!-- 		<dt><?php echo __('Responsable'); ?></dt>
<dd>
                <?php echo h($catalogue['Catalogue']['responsable']); ?>
        &nbsp;
</dd> -->
                <dt><?php echo __('Document PDF'); ?></dt>
                <dd>
                    <?php echo $this->Html->link('Download PDF', array('controller' => 'catalogue', 'action' => 'download', $catalogue['Catalogue']['id'])) ?>
                    &nbsp;
                </dd>
            </dl>
        </div>
    </div>
    <div class="span2">
        <div style="display: table-cell;">
            <div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
                <?php echo $this->Html->link('<i class="icon-align-justify icon-white"></i><span><strong>Liste</strong></span>', array('action' => 'index', $catalogue['Catalogue']['id']), array('class' => 'btn btn-primary', 'escape' => false, 'rel' => 'tooltip', 'title' => 'Liste')); ?>
            </div>
            <div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
                <?php echo $this->Html->link('<i class="icon-pencil icon-white"></i><span><strong>Modif</strong></span> </i>', array('action' => 'add', $catalogue['Catalogue']['id']), array('class' => 'btn btn-success', 'escape' => false, 'rel' => 'tooltip', 'title' => 'Ajouter')); ?>
            </div>
            <div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
                <?php echo $this->Html->link('<i class="icon-edit icon-white"></i><span><strong> Editer</strong></span>', array('action' => 'edit', $catalogue['Catalogue']['id']), array('class' => 'btn btn-info', 'escape' => false, 'rel' => 'tooltip', 'title' => 'Editer')); ?>
            </div>
            <div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
                <?php echo $this->Html->link('<i class="icon-trash icon-white"></i><span><strong>Supp</strong></span>', array('action' => 'delete', $catalogue['Catalogue']['id']), array('class' => 'btn btn-danger', 'escape' => false, 'rel' => 'tooltip', 'title' => 'Supprimer')); ?>
            </div>
        </div>
    </div>
</div>
</div> 