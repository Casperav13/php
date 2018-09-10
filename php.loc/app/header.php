<?php
require_once 'include/database.php';
require_once 'include/functions.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Блог</title>

    <!-- Bootstrap -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                    <span class="sr-only">Открыть навигацию</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Блог</a>
            </div>
            <div class="collapse navbar-collapse" id="responsive-menu">
                <ul class="nav navbar-nav">
                    <?php
                    
                   // Одномерный массив ---> $category_1 =array (1, 'Путешествия', 'travel');
                    /*Двумерный массив $category_1 = array (
                        'category_id' => 1,
                        'category_title' => 'Путешествие',
                        'category_slug' => 'travel'         
                     );
                    $category_2 = array (
                        'category_id' => 2,
                        'category_title' => 'Жизнь',
                        'category_slug' => 'life'             
                     );*/
                    /*$categories = array(
                        array (
                        'category_id' => 1,
                        'category_title' => 'Путешествие',
                        'category_slug' => 'travel'         
                     ), 
                        array (
                        'category_id' => 2,
                        'category_title' => 'Жизнь',
                        'category_slug' => 'life'             
                     ),
                        array (
                        'category_id' => 3,
                        'category_title' => 'Дерево',
                        'category_slug' => 'tree'
                     )
                     );*/
                    $categories = get_categories();
                   /*$menu_items = array ();
                    if(count($menu_items)) {
                       echo '<li><a href="#">Пункт 1</a></li>';
                       //echo '<li><a href="#">Пункт 1</a></li>';
                       //echo '<li><a href="#">Пункт 1</a></li>';
                    }
                    /*elseif (count($menu_items)<3){
                        echo '<li><a href="#">Пункт 1</a></li>';
                       }*/
                   // else {
                     //   echo '<li><a href="#">Создать категорию</a></li>';
                    //}
                    //count ($menu_items) ? $menu_items=0 : $menu_items=10;
                    ?>
                    <?php if (count($categories)===0):?>
                     <li><a href="#"><i class="glyphicon glyphicon-plus-sign"></i>Добавить категорию</a></li>

                    <?php else: ?>
                    <?php
                        //$i = 0;
                        //$count = count($categories);
                        //while ($i <=count($categories)){
                        //echo '<li><a href="category.php?id='.$categories[$i]['category_slug'].'">'.$categories[$i]['category_title'].'</a></li>';
                        //$i++;
                        //}
                        
                        //do{
                          //echo '<li><a href="#">Пункт '.$i.'</a></li>';
                          //$i++;
                        //}
                        //while ($i<=1);
                        
                        //for ($i=1, $count=count(categories);$count<=count($categories);$count++, $i++){
                          // echo '<li><a href="#">Пункт '.$i.'</a></li>'; 
                            
                        //}
                    ?>
                        <?php foreach ($categories as $category): ?> 
                         <li><a href="/category.php?id=<?=$category["id"]?>"><?=$category["title"]?></a></li>
                        <?php endforeach; ?>
                    <?php endif ?>
    
                </ul>
            </div>
        </div>
    </div>

