<?php

$post_id = $_GET['post_id'];

require_once 'app/header.php';
$post = get_post_by_id($post_id);
?>

<div class ="container">
    <div class ="row">
        <div class ="col-md-9">
            <div class="page-header">
                <h1><?=$post['title']?></h1>
            </div>
            <p>
                <i class="icon-list"></i><a href="#">Название категории</a> 
               |<i class="icon-calendar"></i> 13 июня 2018        
            </p>
            <hr>
            <div class="post-content">
                <img src="<?=$post['image']?>" align="left" style= "padding: 0 10px 10px 0">
                 <?=$post['content']?>
            </div>
        </div>
        <div class="col-md-3">
            sidebar
        </div>
    </div>
</div>

<?php
include_once 'app/footer.php';
?>