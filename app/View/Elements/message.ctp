<div class="alert alert-<?php echo isset($typeMsg)?$typeMsg : 'alert-success'; ?>">
    <a class="close" href="#" onclick="$(this).parent().slideUp()">X</a>
   <p><?php echo $message ; ?></p>
</div>