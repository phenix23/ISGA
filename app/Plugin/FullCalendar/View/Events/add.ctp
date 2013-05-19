<?php
/*
 * View/Events/add.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>
<div class="events form">
    <?php echo $this->Form->create('Event'); ?>
    <?php $formations = $this->requestAction('/events/list_formations'); ?>
    <fieldset>
        <h2 class="section-title"><?php echo __('Nouvelle Planification'); ?></h2>
        <?php
//        $this->Html->scriptBlock("$(function(){
//        $('#EventFormationId').on('select',function(e){  
//        ".$index ." = parseInt($(e.target).val()); alert('".$index."');
//        });");
        echo $this->Form->input('event_type_id');
        echo $this->Form->input('formation_id', array('options' => $formations, 'label' => 'Formation', 'empty' => '(Formation à planifier)'));
        echo $this->Form->input('title');
        echo $this->Form->input('details');
        echo $this->Form->input('start');
        echo $this->Form->input('end');
        echo $this->Form->input('all_day', array('checked' => 'checked'));
        echo $this->Form->input('status', array('options' => array(
                'Scheduled' => 'Scheduled', 'Confirmed' => 'Confirmed', 'In Progress' => 'In Progress',
                'Rescheduled' => 'Rescheduled', 'Completed' => 'Completed'
            )
                )
        );
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit', true)); ?>
</div>
<!--<div class="actions">
    <ul>
        <li><?php echo $this->Html->link(__('Manage Events', true), array('plugin' => 'full_calendar', 'action' => 'index')); ?></li>
        <li><li><?php echo $this->Html->link(__('View Calendar', true), array('plugin' => 'full_calendar', 'controller' => 'full_calendar')); ?></li>
    </ul>
</div>-->
<script>

</script>
