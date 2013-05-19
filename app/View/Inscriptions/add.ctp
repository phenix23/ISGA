    <?php $planifs = $this->requestAction(array('controller'=>'Inscriptions','action'=>'list_planification',$formations['Formation']['id'])); ?>
<div class="inscriptions form">
	<div class="row">
		<div class="span10">
			<?php echo $this->Form->create('Inscription'); ?>
			<fieldset>
				<h2 class="section-title"><?php echo __('Formulaire d\'Inscription'); ?></h2>

				<div class="clients form">
					<?php echo $this->Form->create('Client'); ?>
					<fieldset>
						<?php
						echo $this->Form->input('nom',array('label'=>'Nom'));
						echo $this->Form->input('prenom',array('label'=>'Prénom'));
						echo $this->Form->input('société',array('label'=>'Entreprise'));
						echo $this->Form->input('adresse');
						echo $this->Form->input('function');
						echo $this->Form->input('service');
						echo $this->Form->input('telephone',array('label'=>'Téléphone','type'=>'number','required','data-validation-number-message'=>'que des chiffre','max'=>10));
						echo $this->Form->input('fax',array('type'=>'number','required','data-validation-number-message'=>'que des chiffre','max'=>10));
						echo $this->Form->input('mail',array('type'=>'email','required','data-validation-email-message'=>'Email Erroné'));
						echo $this->Form->input('ville');
						echo $this->Form->input('codepostal',array('label'=>'Code Postal','type'=>'number','required','data-validation-number-message'=>'que des chiffre','max'=>5));
						?>
					</fieldset>
				</div>
				<?php 
				echo $this->Form->input('date_inscription',array('type'=>'date','dateFormat' => 'DMY'));
				echo $this->Form->input('date_validation',array('type'=>'date','dateFormat' => 'DMY'));
				echo $this->Form->input('nbr_inscription',array('type'=>'number','required','data-validation-number-message'=>'que des chiffre','maxlength'=>2));
				echo $this->Form->input('Etat',array('options'=> array('Validée','Annulée')));
				echo $this->Form->input('event_id',array('options'=> $planifs ,'label'=>'Planification' ,'style'=>'width : 500px;'));
                                
				?>
			</fieldset>
			<?php echo $this->Form->end(__('Valider'),array('class'=>'btn btn-success')); ?>
		</div>
		<div id="info"  class="span2">
			<div class="infobox">
				<div class="header">Formation</div>
				<div><?php echo $formations['Formation']['name']; ?>
				</div>
			</div>
			<div class="infobox">
				<div class="header">Date Début</div>
				<div><?php echo $formations['Formation']['date_start']; ?></div>
			</div>
			<div class="infobox">
				<div class="header">Date Fin</div>
				<div><?php echo $formations['Formation']['date_end']; ?></div>
			</div>
			<div class="infobox">
				<div class="header">Catalogue</div>
				<div>
					<?php    echo $catalogues['Catalogue']['name']; ?>
				</div>
			</div>
			<div class="infobox">
				<div class="header">Lieu</div>
				<div>
					<?php    echo $formations['Formation']['location']; ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<script type="text/javascript">
$(this).scroll(function(){
    var scrollHight = $(window).scrollTop();
    if(scrollHight < 660){
	$('#info').animate({'marginTop': (scrollHight) + 'px' ,
		'transition-property': 'marginTop',
		'transition-duration': '2s'}, 50 );
    }
});
</script>