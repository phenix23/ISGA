<div class="index formateurs view" style=" margin-left: 20px; margin-right: 20px; ">
    <h2 class='section-title'><?php echo 'Boite Mail'; ?></h2>

    <?php 
     $mbox = imap_open("{imap.gmail.com:993/ssl/imap}INBOX", "test.messagrie", "Eclipse1091")
                or die("Connexion impossible : " . imap_last_error());
    $check = imap_mailboxmsginfo($mbox);?>
    <p><strong> Nombre de messages  : <?php echo '('.$check->Nmsgs.')' ;
    imap_close($mbox);
    ;?></strong></p>
    
    <?php echo $this->Form->create('TicketEmail', array('controller' => 'TicketEmails', 'action' => 'deleteOne')); ?>
    <table class="table tabbable-bordered table-hover" data-provides="rowlink">
        <thead>
            <tr>
                <th class="span1" ><input type="checkbox"></th>
                <th class="span1" >Emetteur</th>
                <th class="span1" >Objet</th>
                <th class="span1">Contenu</th>
                <th class="span1" >Date</th>
                <th hidden ="true">action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ticketEmails as $value) : current($value) ?>
                <tr>              
                    <td>
 <?php echo $this->Form->checkbox('checkbox', array('hiddenField' => false, 'value' => $value['TicketEmail']['email_number']));?></td>
    <!--                        <input type="checkbox"> <a href="#"><i class="icon-star-empty"></i></a></td>-->
                    <td><strong><?php echo $value['TicketEmail']['sender_name'] ?></strong></td>
                    <td><span class="label label-info"><?php echo $value['TicketEmail']['subject'] ?></span></td>
                    <td class="span1"><strong><?php echo $this->Text->truncate($value['TicketEmail']['plainmsg'], 40);  ?></strong></td>
                    <td><strong><?php echo $value['TicketEmail']['created'] ?></strong></td>
                    <td hidden ="true"><?php echo $this->Html->link('consultation', array('controller'=>'TicketEmails','action'=>'view',$value['TicketEmail']['id'])) ;?></td>
                </tr>
<?php endforeach; ?>
        </tbody>
    </table>
    <div class="btn-toolbar">
        <!-- Envoi mail -->
        <a href="#myModal" role="button" class="btn" data-toggle="modal"><i class="icon-pencil"></i> <strong> New Mail</strong></a>
        <!-- Supprimer un mail -->
        <button type="submit" class="btn"><i class="icon-trash"></i><strong> Delete Mail</strong></button>

    </div>
<?php echo $this->Form->end(); ?>
</div>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Nouveau Message</h3>
    </div>
    <div class="modal-body">
            <?php echo $this->Form->create(null, array('controller' => 'TicketEmails', 'action' => 'sendMail')); ?>
        <div class="span3">           
            <?php echo $this->Form->input('FirstName', array('type' => "text", 'class' => "span3", 'placeholder' => "Your First Name", 'label' => 'First Name')); ?>
            <?php echo $this->Form->input('LirstName', array('type' => "text", 'class' => "span3", 'placeholder' => "Your Last Name", 'label' => 'Last Name')); ?>
            <?php echo $this->Form->input('Email', array('type' => "text", 'class' => "span3", 'placeholder' => "Your email address", 'label' => 'Email Address')); ?>
<?php echo $this->Form->input('subject', array('label' => 'Subject', 'options' => array('General Customer Service' => 'General Customer Service', 'Suggestions' => 'Suggestions', 'Product Support' => 'Product Support'))); ?>
        </div>
        <div class="span5">
<?php echo $this->Form->input('Message', array('type' => 'textarea', 'class' => 'input-xlarge span5', 'rows' => '5')); ?>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button type="submit" class="btn btn-primary">Send Mail</button>
<?php echo $this->Form->end(); ?>
    </div>
</div>
<script>
    $(function(){
        //$('#myModal').modal('show');
        //$('tbody.rowlink').rowlink();
    })
</script>
