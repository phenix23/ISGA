<?php // $results = $this->requestAction(array('controller' => 'formations', 'action' => 'news')); ?>
<?php $results ; ?>
<div class="news">
    <ul>
      <?php foreach ($results as $result) : ?>
        <li id='<?php echo $result['Formation']['id']?>'><?php echo $result['Formation']['name']?></li>
        <?php endforeach; ?>
    </ul>
</div>
