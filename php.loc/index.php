<?php
require 'app/header.php';
require 'app/footer.php';

?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="page-header">
                <h1>Все записи:</h1>
            </div>
            <?php 
            $posts = get_posts();
            ?>
            <?php foreach($posts as $post): ?>
            <div class="row">
  <div class="span8">
    <div class="row">
      <div class="span8">
        <h4><strong><a href="/post.php?post_id=<?=$post['id']?>"><?=$post['title']?></a></strong></h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <a href="#" class="thumbnail">
            <img src="<?=$post['image']?>" alt="">
        </a>
      </div>
      <div class="span6">      
        <p>
          <?=mb_substr($post['content'], 0, 128, 'UTF-8').'...' ?>
        </p>
        <p><a class="btn" href="/post.php?post_id=<?=$post['id']?>">Читать полностью</a></p>
      </div>
    </div>
    <div class="row">
      <div class="span8">
        <p></p>
        <p>
          <i class="icon-list"></i><a href="#">Название категории</a> 
          | <i class="icon-calendar"></i> 13 июня 2018        
        </p>
      </div>
    </div>
  </div>
</div>
            <?php endforeach; ?>
        </div>
            <div class ="col-md-3">
                <?php include_once 'app/sidebar.php'; ?>
            </div>
    </div>  
</div>
