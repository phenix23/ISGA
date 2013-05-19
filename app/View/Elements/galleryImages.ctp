<div class="gallery-container">
    <header>
        <h1>Album des Photos</h1>
        <div>
            <button id="start-slideshow" class="btn btn-success" data-slideshow="5000" data-target="#modal-gallery" data-selector="#gallery a[rel=gallery]"> Diporama </button>
<!--            <button id="toggle-fullscreen" class="btn  btn-primary" data-toggle="button"> Plain Ecran </button>-->
            <a href="#myModal" role="button" class="btn " data-toggle="modal">Upload Image</a>
        </div>
    </header>
    <div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery"></div>
    <div id="modal-gallery" class="modal modal-gallery hide fade" tabindex="-1">
        <div class="modal-header">
            <a class="close" data-dismiss="modal">×</a>
            <h3 class="modal-title"></h3>
        </div>
        <div class="modal-body"><div class="modal-image"></div></div>
        <div class="modal-footer">
            <a class="btn modal-download" target="_blank">
                <i class="icon-download"></i>
                <span>Télécharger</span>
            </a>
            <a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000">
                <i class="icon-play icon-white"></i>
                <span>Diporama</span>
            </a>
            <a class="btn btn-info modal-prev">
                <i class="icon-arrow-left icon-white"></i>
                <span>Précédent</span>
            </a>
            <a class="btn btn-primary modal-next">
                <span>Suivant</span>
                <i class="icon-arrow-right icon-white"></i>
            </a>
        </div>
    </div>

    <!-- dialogue upload Image-->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Uploader Image</h3>
        </div>
        <div class="modal-body">
            <?php echo $this->Form->create('Media', array('url' => array('controller' => 'medias','action' => 'uploadImage'),'type'=> 'file')); ?>
            <?php echo $this->Form->input('name', array('type' => "text", 'class' => "span3", 'placeholder' => "Nom Image", 'label' => 'Designation')); ?>
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                <div>
                    <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><?php echo $this->Form->file('image_file', array('type'=>'file'));?></span>
                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                </div>
            </div>
            <?php echo $this->Form->input('description', array('type' => 'textarea', 'class' => 'input-xlarge span5', 'rows' => '5','placeholder' => "Description de l'Image",)); ?>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Fermer</button>
            <button type="submit" class="btn btn-primary"> Envoyer</button>
<?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>