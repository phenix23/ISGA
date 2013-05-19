<div class="span4">
    <h2>Slide Bar</h2>
    <?php $categories = $this->requestAction(array('controller' => 'categories', 'action' => 'sidebar', 'admin' => false));
    ?>
    <ul class="nav">
        <?php foreach ($categories as $key => $value) : $value = current($value); ?>
        <li ><?php 
        echo $this->Html->link($value['name'].'('.$value['post_count'].')',$value['link']);
        ?> </li>
        <?php endforeach; ?>
    </ul>
</div>