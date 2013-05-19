<?php
/*
 * View/Events/index.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
?>
<div class="events formateurs view">
    <h2 class="section-title">Liste Planifications</h2>
    <table class="table table-bordered table-hover">
        <tr>
            <th><?php echo $this->Paginator->sort('event_type_id'); ?></th>
            <th><?php echo $this->Paginator->sort('title'); ?></th>
            <th><?php echo $this->Paginator->sort('status'); ?></th>
            <th><?php echo $this->Paginator->sort('start'); ?></th>
            <th><?php echo $this->Paginator->sort('end'); ?></th>
            <th><?php echo $this->Paginator->sort('all_day'); ?></th>
            <th class="actions"></th>
        </tr>
        <?php
        $i = 0;
        foreach ($events as $event):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
            <tr<?php echo $class; ?>>
                <td>
                    <?php echo $this->Html->link($event['EventType']['name'], array('controller' => 'event_types', 'action' => 'view', $event['EventType']['id'])); ?>
                </td>
                <td><?php echo $event['Event']['title']; ?></td>
                <td><?php echo $event['Event']['status']; ?></td>
                <td><?php echo $event['Event']['start']; ?></td>
                <?php if ($event['Event']['all_day'] == 0) { ?>
                    <td><?php echo $event['Event']['end']; ?></td>
                <?php } else { ?>
                    <td>N/A</td>
                <?php } ?>
                <td><?php if ($event['Event']['all_day'] == 1) {
                echo "Yes";
            } else {
                echo "No";
            } ?>&nbsp;</td>
                <td class="actions">
            <?php echo $this->Html->link(__('View', true), array('action' => 'view', $event['Event']['id'])); ?>
    <?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $event['Event']['id'])); ?>
                </td>
            </tr>
<?php endforeach; ?>
    </table>
    <div class=" pagination pagination-centered">
        <ul><li><?php echo $this->Paginator->prev('<< ' . __('prècèdent', true), array(), null, array('class' => 'disabled')); ?>
            </li>
            <li>	  	<?php echo $this->Paginator->numbers(); ?>
            </li>
            <li>		<?php echo $this->Paginator->next(__('suivant', true) . ' >>', array(), null, array('class' => 'disabled')); ?>        
            </li>
        </ul>

    </div>
</div>

