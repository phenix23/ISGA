<div class="formations form">
		<div class="row">
		<div class="span10">
<?php echo $this->Form->create('Formation',array('type'=>'file')); ?>
	<fieldset>
		<h2 class="section-title"><?php echo __('Edit Formation'); ?></h2>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('code_formation');
		echo $this->Form->input('name');
		echo $this->Form->input('prix');
		echo $this->Form->input('location');
		echo $this->Form->input('formateur_id',array('options'=> $formateurs));
		echo $this->Form->input('content',array('type'=>'textarea','rows'=>15,'cols'=>40));
		echo $this->Form->input('date_start',array('dateFormat' => 'DMY'));
		echo $this->Form->input('date_end',array('dateFormat' => 'DMY'));
		echo $this->Form->input('langue');
		echo $this->Form->input('catalogue_id',array('options'=> $catalogues));
		echo $this->Form->input('deplome');
		echo $this->Form->input('domaine');
		echo $this->Form->input('categorie');
		echo $this->Form->input('code');
                echo $this->Form->file('pdf_file', array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
        <div class="span2">
            <div style="display: table-cell;">
                <div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
                    <?php echo $this->Html->link(__('<i class="icon-list icon-white"></i><span><strong>  Liste Formations   </strong></span>'), array('action' => 'index'), array('escape' => false,'class' => 'btn  btn-info btn-toolbar-vertical')); ?>
                </div>
                <div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
                    <?php echo $this->Html->link(__('<i class="icon-user icon-white"></i><span><strong>Nouveau Formateur</strong></span>'), array('controller' => 'formateurs', 'action' => 'add'), array('escape' => false,'class' => 'btn  btn-info btn-toolbar-vertical')); ?> 
                </div><div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
                    <?php echo $this->Html->link(__('<i class="icon-folder-open icon-white"></i><span><strong>Nouveau Catalogue</strong></span>'), array('controller' => 'catalogues', 'action' => 'add'), array('escape' => false,'class' => 'btn  btn-info btn-toolbar-vertical')); ?> 
                </div><div class="span1" style="margin-bottom: 5px;margin-top: 5px;">
                    <?php echo $this->Html->link(__('<i class="icon-ok icon-white"></i><span><strong>   Liste Inscriptions    </strong></span>'), array('controller' => 'inscriptions', 'action' => 'index'), array('escape' => false,'class' => 'btn  btn-info btn-toolbar-vertical')); ?> 
                </div>
            </div>
        </div>
</div>
</div>
<?php echo $this->Html->script('tiny_mce/tiny_mce.js');?>

<?php echo $this->Html->scriptBlock("
    tinyMCE.init({
		// General options
		mode : 'textareas',
		theme : 'advanced',
		plugins : 'autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks',

		// Theme options
		theme_advanced_buttons1 : 'save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect',
		theme_advanced_buttons2 : 'cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor',
		theme_advanced_buttons3 : 'tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen',
		theme_advanced_buttons4 : 'insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks',
		theme_advanced_toolbar_location : 'top',
		theme_advanced_toolbar_align : 'left',
		theme_advanced_statusbar_location : 'bottom',
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : 'css/content.css',

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : 'lists/template_list.js',
		external_link_list_url : 'lists/link_list.js',
		external_image_list_url : 'lists/image_list.js',
		media_external_list_url : 'lists/media_list.js',

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : 'Some User',
			staffid : '991234'
		}
	});"
);?>
