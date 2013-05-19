<div class="formations view">
    <div class="row">
        <div id="content-view" class="span10">
            <h2 class='section-title'><?php echo h($formation['Formation']['name']); ?></h2>
            <div class="btn-toolbar">
                <?php echo $this->Html->link('<i class="icon-pencil icon-white"></i><strong>Inscription</strong>', array('controller' => 'inscriptions', 'action' => 'add', 'id_formation' => $formation['Formation']['id']), array('class' => 'btn btn-success','escape' => false)); ?>
                <a href="#myModal" role="button" class="btn btn-info" data-toggle="modal"><i class="icon-question-sign icon-white"></i> <strong> Questions</strong></a> 
            </div>
            <div style="margin-top: 30px;"><?php echo $formation['Formation']['content']; ?></div>
<!-- 			<?php
                echo $this->Text->truncate(
                        $formation['Formation']['content'], 4000, array(
                    'ellipsis' => '...',
                    'exact' => true,
                    'html' => false
                        )
                );
                ?></p>
                            <a href='<?php echo $this->Html->url(); ?>' class='btn btn-navbar' >Lire la suite </a> -->
            <div class="footer-view">    <p>Tags:
                    <a href="#"><span class="label label-info">Snipp</span></a>
                    <a href="#"><span class="label label-info">Bootstrap</span></a>
                    <a href="#"><span class="label label-info">UI</span></a>
                    <a href="#"><span class="label label-info">growth</span></a>
                    | <i class="icon-user"></i> <a href="#">Admin</a>
                    | <i class="icon-calendar"></i> Sept 16th, 2012 at 4:20 pm
                    | <i class="icon-comment"></i> <a href="#">3 Comments</a>
                    | <i class="icon-share"></i> <a href="#">39 Shares</a>
                </p>
            </div>
          <!--   <div id="contact">
                <h2 class="section-title">Des Questions!</h2>
                <div class="Message form">
                    <?php echo $this->Form->create(null, array('url' => array('action' => 'sendMail'))); ?>
                    <fieldset>
                        <?php
                        echo $this->Form->input('nom', array('required', 'data-validation-required-message' => 'Champs obligatoire'));
                        echo $this->Form->input('email', array('type' => 'email', 'required', 'data-validation-email-message' => 'Email Erroné'));
                        echo $this->Form->input('sujet');
                        echo $this->Form->input('content', array('type' => 'textarea', 'rows' => 4, 'cols' => 60, 'max' => 100, 'data-validation-max-message' => 'saisiez au moins 100 Lettre'));
                        ?>
                    </fieldset>
                    <?php echo $this->Form->end('Envoyer'); ?>
                </div> -->
            <!-- </div> -->
        </div>

        <div class="span2">
            <div class="infobox">        
                <div class="header">Informations</div>
                <div>
                    <dl>
                        <dt><?php echo __('Domaine'); ?></dt>
                        <dd>
                            <?php echo h($formation['Formation']['domaine']); ?>
                            &nbsp;
                        </dd>
                        <hr style="margin-top: 10px;margin-bottom: 10px;">
                        <dt><?php echo __('Categorie'); ?></dt>
                        <dd>
                            <?php echo h($formation['Formation']['categorie']); ?>
                            &nbsp;
                        </dd>
                        <hr style="margin-top: 10px;margin-bottom: 10px;">
                        <dt><?php echo __('Catalogue'); ?></dt>
                        <dd>
                            <?php echo $this->Html->link($formation['Catalogue']['name'], array('controller' => 'catalogues', 'action' => 'view', $formation['Catalogue']['id'])); ?>
                            &nbsp;
                        </dd>
                        <hr style="margin-top: 10px;margin-bottom: 10px;">

                        <dt><?php echo __('Date Début'); ?></dt>
                        <dd>
                            <?php echo h($formation['Formation']['date_start']); ?>
                            &nbsp;
                        </dd>
                        <hr style="margin-top: 10px;margin-bottom: 10px;">

                        <dt><?php echo __('Date Fin'); ?></dt>
                        <dd>
                            <?php echo h($formation['Formation']['date_end']); ?>
                            &nbsp;
                        </dd>
                        <hr style="margin-top: 10px;margin-bottom: 10px;">

                        <dt><?php echo __('Prix'); ?></dt>
                        <dd>
                            <?php echo h($formation['Formation']['prix']); ?>
                            &nbsp;
                        </dd>
                        <hr style="margin-top: 10px;margin-bottom: 10px;">

                        <dt><?php echo __('Location'); ?></dt>
                        <dd>
                            <?php echo h($formation['Formation']['location']); ?>
                            &nbsp;
                        </dd>
                        <hr style="margin-top: 10px;margin-bottom: 10px;">

                        <dt><?php echo __('Formateur'); ?></dt>
                        <dd>
                            <?php echo $this->Html->link($formation['Formateur']['nom'], array('controller' => 'formateurs', 'action' => 'view', $formation['Formateur']['id'])); ?>
                            &nbsp;
                        </dd>
                        <hr style="margin-top: 10px;margin-bottom: 10px;">

                        <dt><?php echo __('Langue'); ?></dt>
                        <dd>
                            <?php echo h($formation['Formation']['langue']); ?>
                            &nbsp;
                        </dd>
                        <hr style="margin-top: 10px;margin-bottom: 10px;">

                        <dt><?php echo __('diplôme'); ?></dt>
                        <dd>
                            <?php echo h($formation['Formation']['deplome']); ?>
                            &nbsp;
                        </dd>
                    </dl>
                </div>			
            </div>
            <div class="infobox">
                <div class="header">Partager</div>
                <!-- <div>
                        <ul>
                                <li style="display: table;margin-top: 10px"><?php echo $this->Html->image('icons/facebook.png'); ?>
                                        facebook</li>
                                        <li  style="display: table;"><?php echo $this->Html->image('icons/google_plus.png'); ?>gmail</li>
                                        <li style="display: table;"><?php echo $this->Html->image('icons/twitter.png'); ?>twitter</li>
                                </ul>
                        </div> -->
                <!-- sharethis Button BEGIN -->
                <span class='st_facebook_vcount' displayText='Facebook'></span>
                <span class='st_twitter_vcount' displayText='Tweet'></span>
                <span class='st_linkedin_vcount' displayText='LinkedIn'></span>
                <span class='st_email_vcount' displayText='Email'></span>
                <!-- shareThis Button END -->
            </div>
            <div class="infobox">
                <div class="header">Télécharger</div>
                <div>
                    <!-- script pour impression -->
                    <script>var pfHeaderImgUrl = '';var pfHeaderTagline = '';var pfdisableClickToDel = 0;var pfDisablePDF = 0;var pfDisableEmail = 1;var pfDisablePrint = 0;var pfCustomCSS = '';var pfBtVersion='1';(function(){var js, pf;pf = document.createElement('script');pf.type = 'text/javascript';if('https:' == document.location.protocol){js='https://pf-cdn.printfriendly.com/ssl/main.js'}else{js='http://cdn.printfriendly.com/printfriendly.js'}pf.src=js;document.getElementsByTagName('head')[0].appendChild(pf)})();</script>
                    <ul style="margin-left: 0px;">
                        <li li style="display: inline-block;margin-top: 10px;margin-left:-25px"><a href="http://www.printfriendly.com" style="color:rgb(0,0,0);text-decoration:none;" class="printfriendly" onclick="window.print();return false;" title="Impression"><img style="border:none;margin:0 6px"  src="http://cdn.printfriendly.com/pf-icon.gif" width="23" height="25" alt="Print Friendly and PDF" />Imprimer</a></li>
                        <hr style="margin-top: 10px;margin-bottom: 10px;">
                        <li li style="display: -webkit-box;margin-top: 10px;margin-left: 5px;"><?php echo $this->Html->image('application_pdf.png');
                            echo $this->Html->link('PDF', array('controller' => 'formations', 'action' => 'download', $formation['Formation']['id']) ,array('espace'=> false)) ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Questions !</h3>
    </div>
    <div class="modal-body">
            <?php echo $this->Form->create(null, array('controller' => 'TicketEmails', 'action' => 'sendMail')); ?>
        <div class="span3">           
            <?php echo $this->Form->input('Nom', array('type' => "text", 'class' => "span3", 'placeholder' => "Votre Nom", 'label' => 'Nom')); ?>
            <?php echo $this->Form->input('Prénom', array('type' => "text", 'class' => "span3", 'placeholder' => "Votre Prénom", 'label' => 'Prénom')); ?>
            <?php echo $this->Form->input('Email', array('type' => "text", 'class' => "span3", 'placeholder' => "Votre address Mail", 'label' => 'Email Address')); ?>
<?php echo $this->Form->input('subject', array('label' => 'Objet', 'value' => h($formation['Formation']['name']))); ?>
        </div>
        <div class="span5">
<?php echo $this->Form->input('Message', array('type' => 'textarea', 'class' => 'input-xlarge span5', 'rows' => '5')); ?>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"> Fermer</button>
        <button type="submit" class="btn btn-primary"> Envoyer</button>
<?php echo $this->Form->end(); ?>
    </div>
</div>

<!-- sharethis script -->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "41506c7d-357b-4c8d-a894-0628a3b9f198", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script type="text/javascript">
    $(function(){
        /*$('#content-view  p').expander({
            slicePoint:       200,  // default is 100
            expandPrefix:     ' ', // default is '... '
            expandText:       '[Lire la Suite]', // default is 'read more'
            userCollapseText: '[^]'  // default is 'read less',window : 4
        });*/
    });
</script>
