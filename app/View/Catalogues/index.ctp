<div class="catalogues index" style=" margin-left: 20px; margin-right: 20px; ">
    <div class= "page-header" style="box-shadow: 1px 2px 30px -10px;background-color: white;border-radius: 4px;padding: 10px">
		<h2 class="section-title" style="margin-left: -30px"><?php echo __('Liste des Catalogues'); ?></h2>
		        <div class="btn-toolbar">
            <div class="btn-group" style="margin-left: 20px;">
                <?php echo $this->Html->link(__('<i class="icon-plus icon-white"></i> Nouveau Catalogue'), array('action' => 'add'), array('class' => 'btn btn-info' ,'escape'=> false)); ?>
            </div>
        </div>
		<table class="table table-striped table-hover table-bordered">
			<tr>
<!-- 				<th><?php echo $this->Paginator->sort('id'); ?></th> -->
				<th><?php echo $this->Paginator->sort('N°'); ?></th>
				<th><?php echo $this->Paginator->sort('Titre'); ?></th>
				<th><?php echo $this->Paginator->sort('Date Création'); ?></th>
				<th><?php echo $this->Paginator->sort('Date Validation'); ?></th>
				<th><?php echo $this->Paginator->sort('Date Expiration'); ?></th>
<!-- 				<th><?php echo $this->Paginator->sort('responsable'); ?></th>
				<th><?php echo $this->Paginator->sort('path'); ?></th> -->
				<th><?php echo $this->Paginator->sort('Document PDF'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php
			foreach ($catalogues as $catalogue): ?>
			<tr>
<!-- 				<td><?php echo h($catalogue['Catalogue']['id']); ?>&nbsp;</td>
 -->				<td><?php echo h($catalogue['Catalogue']['code']); ?>&nbsp;</td>
				<td><?php echo h($catalogue['Catalogue']['name']); ?>&nbsp;</td>
				<td><?php echo h($catalogue['Catalogue']['date_creation']); ?>&nbsp;</td>
				<td><?php echo h($catalogue['Catalogue']['date_validation']); ?>&nbsp;</td>
				<td><?php echo h($catalogue['Catalogue']['date_fin']); ?>&nbsp;</td>
<!-- 				<td><?php echo h($catalogue['Catalogue']['responsable']); ?>&nbsp;</td>
				<td><?php echo h($catalogue['Catalogue']['path']); ?>&nbsp;</td> -->
				<td><?php echo h($catalogue['Catalogue']['pdf_file']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link('<i class="icon-eye-open icon-white"></i>', array('action' => 'view', $catalogue['Catalogue']['id']), array('class' => 'btn btn-info', 'escape' => false, 'rel' => 'tooltip', 'title' => 'consulter'));
                ?> -
                <?php echo $this->Html->link('<i class="icon-edit icon-white"></i>', array('action' => 'edit', $catalogue['Catalogue']['id']), array('class' => 'btn btn-success', 'escape' => false, 'rel' => 'tooltip', 'title' => 'editer')); ?> -
                <?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i>', array('action' => 'delete', $catalogue['Catalogue']['id']), array('class' => 'btn btn-danger', 'escape' => false, 'rel' => 'tooltip', 'title' => 'supprimer'), __('Are you sure you want to delete # %s?', $catalogue['Catalogue']['id'])); ?>
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

			<div class="pagination pagination-centered">
				<ul>
					<li><?php
					echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));?><li>
					<li><?php echo $this->Paginator->numbers(array('separator' => ''));?><li>
						<li><?php echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
						?><li>
					</ul>
				</div>
			</div>
		</div>
<!-- 	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('New Catalogue'), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List Formations'), array('controller' => 'catalogues', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Formation'), array('controller' => 'catalogues', 'action' => 'add')); ?> </li>
		</ul>
	</div> -->
