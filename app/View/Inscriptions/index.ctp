<div class="inscriptions formateurs view">
    <h2 class="section-title" ><?php echo __('Liste des inscriptions'); ?></h2>

    <div class="btn-toolbar">
        <?php echo $this->Html->link(__('<i class="icon-bullhorn icon-white"></i> Liste Client'), array('controller' => 'clients', 'action' => 'index'), array('class' => 'btn btn-info', 'escape' => false)); ?>
    </div>
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('code'); ?></th>
            <th><?php echo $this->Paginator->sort('client_id'); ?></th>
            <th><?php echo $this->Paginator->sort('formation_id'); ?></th>
            <th><?php echo $this->Paginator->sort('date_inscription'); ?></th>
            <th><?php echo $this->Paginator->sort('date_validation'); ?></th>
            <th><?php echo $this->Paginator->sort('nbr_inscription'); ?></th>
            <th><?php echo $this->Paginator->sort('etat'); ?></th>
            <th><?php echo $this->Paginator->sort('event_id'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($inscriptions as $inscription): ?>
            <tr>
                <td><?php echo h($inscription['Inscription']['id']); ?>&nbsp;</td>
                <td><?php echo h($inscription['Inscription']['code']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($inscription['Client']['id'], array('controller' => 'clients', 'action' => 'view', $inscription['Client']['id'])); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($inscription['Formation']['name'], array('controller' => 'formations', 'action' => 'view', $inscription['Formation']['id'])); ?>
                </td>
                <td><?php echo h($inscription['Inscription']['date_inscription']); ?>&nbsp;</td>
                <td><?php echo h($inscription['Inscription']['date_validation']); ?>&nbsp;</td>
                <td><?php echo h($inscription['Inscription']['nbr_inscription']); ?>&nbsp;</td>
                <td><?php echo h($inscription['Inscription']['etat']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($inscription['Inscription']['event_id'], array('plugin'=> 'full_calendar' ,'controller' => 'events', 'action' => 'view', $inscription['Inscription']['event_id'])); ?>
                </td>
                <td class="actions">
                    <?php echo $this->Html->link(__('<i class="icon-eye-open icon-white"></i>'), array('action' => 'view', $inscription['Inscription']['id']), array('class' => 'btn btn-info', 'escape' => false)); ?>
                    <?php echo $this->Html->link(__('<i class="icon-edit icon-white"></i>'), array('action' => 'edit', $inscription['Inscription']['id']), array('class' => 'btn btn-success', 'escape' => false)); ?>
                    <?php echo $this->Form->postLink(__('<i class="icon-trash icon-white"></i>'), array('action' => 'delete', $inscription['Inscription']['id']), array('class' => 'btn btn-danger', 'escape' => false), __('Are you sure you want to delete # %s?', $inscription['Inscription']['id'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?>	</p>

    <div class="paging">
        <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
<!--<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Inscription'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'formations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'formations', 'action' => 'add')); ?> </li>
    </ul>
</div>-->
