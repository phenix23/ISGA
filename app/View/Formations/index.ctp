


<div class="formations index">
    <div class= "page-header" style="box-shadow: 1px 2px 30px -10px;background-color: white;border-radius: 4px;padding: 10px">
        <h2 class='section-title' style="margin-left: -30px;"><?php echo __('Liste des Formations'); ?></h2>

        <!-- Recherche avencé-->
        <div class="row">
            <div class="span8 offset5">
                <form method="get" action="<?php echo $this->Html->url(array('controller' => 'formations', 'action' => 'search')); ?>" class="form-inline">
                    <input name="name" class="span2" type="text" placeholder="Mots clé: Hse, Informatique, Django" >
                    <input name="location" class="span2" type="text" placeholder="Lieu: Wilaya">
                    <input name="date_start" class="span2" type="date" placeholder="Date: ">
                    <button type="submit" class="btn btn-primary"> <i class="icon-search icon-white"></i></button>
                </form>
            </div>
        </div>




        <div class="tabbable">
            <?php $results = $this->requestAction(array('controller' => 'formations', 'action' => 'index'));
            ?>
            <ul id='nav' class="nav nav-tabs">
                <?php foreach ($results as $result) : ?>
                    <li style="font-weight: bold;font-size: 18px;text-transform: capitalize;">
                        <?php echo $this->Js->link($result['Formation']['domaine'], array('action' => 'tabcontent', $result['Formation']['domaine']), array('update' => 'content')); ?>
                    </li>
                <?php endforeach; ?> 
            </ul> 

     <?php if(isset($_SESSION['UserAuth']['User']['username'])) {  ?>
            <div class="btn-toolbar">
                <div class="btn-group" style="margin-left: 20px;">
                    <?php echo $this->Html->link('<i class="icon-plus icon-white"></i><span><strong>  Nouvelle Formation</strong></span> </i>', array('action' => 'add'), array('class' => 'btn btn-info', 'escape' => false)); ?>
                </div>
            </div>
     <?php }?>


            <?php echo $this->element('tabcontent', array('domaine' => $result['Formation']['domaine'])); ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {
        $('#nav li:first').addClass('active');
        $('#nav a').on('click', function(e) {
            $('#nav > li').removeClass('active');
            $(e.target).parent().addClass('active');
            $('#nav > li').removeClass('active-navtab');
            $(e.target).parent().addClass('active-navtab');
            $('div.tab-content').fadeOut().load($(this).attr('href'), function() {
                $('div.tab-content').fadeIn()
            });
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

