<?php
/*
 * View/FullCalendar/index.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */

echo $this->Html->script(array('/full_calendar/js/jquery-1.5.min', '/full_calendar/js/jquery-ui-1.8.9.custom.min', '/full_calendar/js/fullcalendar.min', '/full_calendar/js/jquery.qtip-1.0.0-rc3.min','/full_calendar/js/ready'), array('inline' => 'false'));
echo $this->Html->css('/full_calendar/css/fullcalendar', null, array('inline' => false));
?>


<div class="Calendar index">

    <div id="calendar" class="formateurs view" style="padding-top : 20px;">
        <?php 
        $script_event = $this->Html->link(_("'+'").'<i class="icon-tasks icon-white"></i>'._("'+'").  
                   '  Nouvelle Planification', array('plugin' => 'full_calendar', 'controller' => 'events', 'action' => 'add'),array('class'=>'btn btn-success' ,'escape'=> false));
        $script_list = $this->Html->link(_("'+'").'<i class="icon-list icon-white"></i>'._("'+'").'  Liste Planifications', array('plugin' => 'full_calendar', 'controller' => 'events'),array('class'=>'btn btn-primary' ,'escape'=> false)); 

        $this->Html->scriptBlock("
          $(function(){
            $('#calendar div.fc-content')
                  .before('<div class=" .'"buttons"'." >'+".
                "'<div class= " .'"span1"'.">'+'".$script_event."'+'</div>'+".
                "'<div class= " .'"span1"'.">'+'".$script_list."'+'</div>'
                );});"
               ,array('inline'=>false)); ?>

           </div>
       </div>
       <!-- <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Event', true), array('plugin' => 'full_calendar', 'controller' => 'events', 'action' => 'add')); ?></li>
            <li><?php echo $this->Html->link(__('Manage Events', true), array('plugin' => 'full_calendar', 'controller' => 'events')); ?></li>
            <li><?php echo $this->Html->link(__('Manage Events Types', true), array('plugin' => 'full_calendar', 'controller' => 'event_types')); ?></li>
        </ul> -->
    </div>