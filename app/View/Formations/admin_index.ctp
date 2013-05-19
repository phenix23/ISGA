<div class="formations index">
    <div class= "page-header">
        <h2 class='section-title' style="margin-left: -20px;"><?php echo __('Liste des Formations'); ?></h2>

        <!-- Recherche avencé-->
        <div class="row">
            <div class="span8 offset6">
                <form method="get" action="<?php echo $this->Html->url(array('controller'=>'formations','action'=>'search'));?>" class="form-inline">
                    <input name="name" class="span2" type="text" placeholder="Mots clé: Hse, Informatique, Django" >
                    <input name="location" class="span2" type="text" placeholder="Lieu: Wilaya">
                    <input name="date_start" class="span2" type="date" placeholder="Date: ">
                    <button type="submit" class="btn btn-primary"> <i class="icon-search icon-white"></i></button>
                </form>
            </div>
        </div>
        
        

        <div class="btn-toolbar">
            <div class="btn-group" style="margin-left: 20px;">
                <?php echo $this->Html->link(__('Nouvelle Formation'), array('action' => 'add'), array('class' => 'btn btn-success')); ?>
            </div>
        </div>
        <div class="tabbable tabs-left">
            <?php $results = $this->requestAction(array('controller' => 'formations', 'action' => 'index'));
            ?>
            <ul id='nav' class="nav nav-tabs">
                <?php foreach ($results as $result) : ?>
                    <li><?php echo $this->Js->link($result['Formation']['domaine'], array('action' => 'tabcontent', $result['Formation']['domaine']), array('update' => 'content')); ?>
                    </li>
                <?php endforeach; ?> 
            </ul> 
            <?php echo $this->element('tabcontent', array('domaine' => $result['Formation']['domaine'])); ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $('#nav li:first').addClass('active');
        $('#nav a').on('click', function(e){
            $('#nav li').removeClass('active');
            $(e.target).parent().addClass('active');
            $('#nav li').removeClass('active-navtab');
            $(e.target).parent().addClass('active-navtab');
            $('div.tab-content').fadeOut().load($(this).attr('href'),function(){ $('div.tab-content').fadeIn()});
            return false;
        });
        
//        $('#nav > li > a').on('click',function(e){           
//        var txt = $(e.target).text();
//        console.debug(txt);
//        $(this).load('/ISGA/formations/search/',{'domaine':txt});
//        return false;
//        });
    });
</script>

