<div id='content'class="tab-content">
    <?php
    if ($this->request->params['action'] == 'index') {
        $results = $this->requestAction(array('controler' => 'formations', 'action' => 'tabcontent', $domaine));
        $this->paginator->request->params['paging']['Formation'] = $results['paginator'];
        $formations = $results['formations'];
        
        
    }
//$this->paginator->request->params['paging']['Formation'] = $paginator;
    $this->Paginator->options(array(
        'update' => '#content',
        'evalScripts' => true,
        'url' => array('action' => 'tabcontent', $domaine),
        'before' => $this->Js->get('#content')->effect('fadeIn', array('buffer' => false)),
        'complete' => $this->Js->get('#content')->effect('fadeOut', array('buffer' => false))
    ));
    
    ?>
    <!-- Présentation admin -->

    <!--  -->
<!--      <table class="table table-striped table-hover table-bordered" id="tab1">
     <tr>
         <th><?php echo $this->Paginator->sort('Titre'); ?></th>
         <th><?php echo $this->Paginator->sort('prix'); ?></th>
         <th><?php echo $this->Paginator->sort('Lieu'); ?></th>
         <th><?php echo $this->Paginator->sort('Formateur'); ?></th>
         <th><?php echo $this->Paginator->sort('Date Début'); ?></th>
         <th><?php echo $this->Paginator->sort('Date Fin'); ?></th>
         <th><?php echo $this->Paginator->sort('Catalogue'); ?></th>
         <th><?php echo $this->Paginator->sort('diplôme'); ?></th>
         <th><?php echo $this->Paginator->sort('Domaine'); ?></th>
         <th><?php echo $this->Paginator->sort('Categorie'); ?></th>
         <th class="action"><?php echo __('Actions'); ?></th>
     </tr>
    <?php foreach ($formations as $formation): ?>
             <tr>
                 <td><?php echo h($formation['Formation']['name']); ?>&nbsp;</td>
                 <td><?php echo h($formation['Formation']['prix']); ?> DA&nbsp;</td>
                 <td><?php echo h($formation['Formation']['location']); ?>&nbsp;</td>
                 <td>
        <?php echo $this->Html->link($formation['Formateur']['nom'], array('controller' => 'formateurs', 'action' => 'view', $formation['Formateur']['id'])); ?>
                 </td>
                 <td><?php echo h($formation['Formation']['date_start']); ?>&nbsp;</td>
                 <td><?php echo h($formation['Formation']['date_end']); ?>&nbsp;</td>
                 <td>
        <?php echo $this->Html->link($formation['Catalogue']['name'], array('controller' => 'catalogues', 'action' => 'view', $formation['Catalogue']['id'])); ?>
                 </td>
                 <td><?php echo h($formation['Formation']['deplome']); ?>&nbsp;</td>
                 <td><?php echo h($formation['Formation']['domaine']); ?>&nbsp;</td>
                 <td><?php echo h($formation['Formation']['categorie']); ?>&nbsp;</td>
                 <td class="actions" >
        <?php echo $this->Html->link('<i class="icon-eye-open icon-white"></i>', array('action' => 'view', $formation['Formation']['id']), array('class' => 'btn btn-info', 'escape' => false, 'rel' => 'tooltip', 'title' => 'consulter'));
        ?> -
        <?php echo $this->Html->link('<i class="icon-edit icon-white"></i>', array('action' => 'edit', $formation['Formation']['id']), array('class' => 'btn btn-success', 'escape' => false, 'rel' => 'tooltip', 'title' => 'editer')); ?> -
        <?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i>', array('action' => 'delete', $formation['Formation']['id']), array('class' => 'btn btn-danger', 'escape' => false, 'rel' => 'tooltip', 'title' => 'supprimer'), __('Are you sure you want to delete # %s?', $formation['Formation']['id'])); ?>
                 </td>
             </tr>
    <?php endforeach; ?>
</table> -->

    <!-- Présentation client-->
    <table class="table table-striped table-hover table-bordered" id="tab1">
        <tr>
            <th><?php echo 'Période'; ?></th>
            <th><?php echo 'Formation'; ?></th>
            <th><?php echo 'Prix'; ?></th>
            <th><?php echo 'Lieu'; ?></th>
            <th><?php echo 'diplôme'; ?></th>
                            <?php if(isset($_SESSION['UserAuth']['User']['username'])) {  ?>
            <th><?php echo 'Action'; ?></th>
                            <?php } ?>

        </tr>
        <?php foreach ($formations as $formation): ?>
        <?php $this->Html->scriptBlock("$(function(){
             console.log('".$formation['Formation']['domaine']."');
            $('#nav li').removeClass('active');
            $('#nav li').removeClass('active-navtab');
            $('#nav > li > a').filter(function(){return $(this).text() == '".$formation['Formation']['domaine']."';}).parent().addClass('active active-navtab');      
});" 
         ,array('inline'=>false));?>
            <tr>
                <td>
                    <ul style=" display: table-row-group; ">
                        <li><?php echo 'Du: '.h($formation['Formation']['date_start']); ?>&nbsp;</li>
                        <li><?php echo 'Au: '.h($formation['Formation']['date_end']); ?>&nbsp;</li>
                    </ul>
                </td>
                <td style="text-align: left; ">
                    <div class='titre-formation'><?php echo $this->Html->link(__($formation['Formation']['name']), array('action' => 'view', $formation['Formation']['id'])); ?>&nbsp;</div>
                    <div class="domaine"><?php echo h($formation['Formation']['domaine']); ?>&nbsp;</div>
                    <div class="description"><?php echo $this->Text->truncate($formation['Formation']['content'], 200, array('exact' => false, 'html' => true)); ?>&nbsp;</div>
                </td>
                <td>
                    <?php echo h($formation['Formation']['prix']); ?> DA&nbsp;
                </td>
                <td  style="text-transform: capitalize;">
                    <?php echo h($formation['Formation']['location']); ?>&nbsp;
                </td>
                <td  style="text-transform: uppercase;">
                    <?php echo h($formation['Formation']['deplome']); ?>&nbsp;
                </td>
                <?php if(isset($_SESSION['UserAuth']['User']['username'])) {  ?>
                <td class="actions" style="width: 112px;" >
        <?php echo $this->Html->link('<i class="icon-edit icon-white"></i>', array('action' => 'edit', $formation['Formation']['id']), array('class' => 'btn btn-success', 'escape' => false, 'rel' => 'tooltip', 'title' => 'editer')); ?> -
        <?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i>', array('action' => 'delete', $formation['Formation']['id']), array('class' => 'btn btn-danger', 'escape' => false, 'rel' => 'tooltip', 'title' => 'supprimer'), __('Are you sure you want to delete # %s?', $formation['Formation']['id'])); ?>
                 </td>
                <?php } ?>
            </tr>
        <?php endforeach; ?>
    </table>   

    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Page {:page} sur {:pages}, montrant {:current} enregistrements sur un total de {:count} total, à partir de la fiche {:start}, se terminant {:end}')));
        ?>  </p>

    <div class="pageing pagination pagination-centered">
        <ul>
            <li><?php echo $this->Paginator->prev('< ' . __('précédent'), array(), null, array('class' => 'prev disabled')); ?></li>
            <li><?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>
            <li><?php echo $this->Paginator->next(__('suivant') . ' >', array(), null, array('class' => 'next disabled'));
        ?></li>
        </ul>
    </div>
</div>
</div>
<script type="text/javascript">
    $(function(){
        $('div.pageing a').on('click', function(){
            $('div.tab-content').fadeOut().load($(this).attr('href'),function(){
                $('div.tab-content').fadeIn();  
            });
            return false;
        });
    });
</script>
<?php $this->Js->writeBuffer(); ?>
