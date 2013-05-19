<div class="catalogues form">
    <div class="row">
        <div class="span10">
            <?php echo $this->Form->create('Catalogue', array('type' => 'file', 'class' => 'fileupload fileupload-new')); ?>
            <fieldset>
                <h2 class="section-title"><?php echo __('Nouveau Catalogue'); ?></h2>

                <?php
                echo $this->Form->input('code');
                echo $this->Form->input('name');
                echo $this->Form->input('date_creation');
                echo $this->Form->input('date_validation');
                echo $this->Form->input('date_fin');
                echo $this->Form->input('responsable');
                echo $this->Form->input('path');
                echo $this->Form->file('pdf_file', array('type' => 'file'));
                ?>
            </fieldset>
            <?php echo $this->Form->end(__('Enrgistrer')); ?>
        </div>
        <div class="span2">
            <div style="display: table-cell;">
                <div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
                   <?php echo $this->Html->link('<i class="icon-align-justify icon-white"></i><span><strong>Liste</strong></span>', array('action' => 'index'), array('class' => 'btn btn-primary', 'escape' => false, 'rel' => 'tooltip', 'title' => 'Liste')); ?> 
                </div>
                <div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
                    <?php echo $this->Html->link('<i class="icon-pencil icon-white"></i><span><strong>Modif</strong></span> </i>', array('action' => 'add'), array('class' => 'btn btn-success', 'escape' => false, 'rel' => 'tooltip', 'title' => 'Ajouter')); ?>
                </div>
                <div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
                    <?php echo $this->Html->link('<i class="icon-edit icon-white"></i><span><strong> Editer</strong></span>', array('action' => 'edit'), array('class' => 'btn btn-info', 'escape' => false, 'rel' => 'tooltip', 'title' => 'Editer')); ?>
                </div>
                <div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
                    <?php echo $this->Html->link('<i class="icon-trash icon-white"></i><span><strong>Supp</strong></span>', array('action' => 'delete'), array('class' => 'btn btn-danger', 'escape' => false, 'rel' => 'tooltip', 'title' => 'Supprimer')); ?>
                </div>
            </div>
        </div>
<!--        <div id="info" class="span2">
            <div class="infobox" style="display:block;">
                <div class="header">Actions</div>
                <div class="list-action">
                    <?php echo $this->Html->link(__('List Catalogues'), array('action' => 'index'), array('class' => 'btn  btn-primary btn-block  btn-block')); ?> 
                    <?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index'), array('class' => 'btn  btn-primary btn-block  btn-block')); ?>  
                    <?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add'), array('class' => 'btn  btn-primary btn-block  btn-block')); ?> 



                </div>
            </div>
        </div>-->
    </div>
</div>