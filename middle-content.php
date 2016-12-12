<?php

$text = new Text();
if($_GET['text_id']){
    $text_id = $_GET['text_id'];
    $text = $text->getArticleid($text_id);
    include_once('text_article.php');
}

if($_GET or $_POST){
    $page = false;
}else{
    include_once('home.php');
}

if($_GET['about']){
    include_once('about.php');
}

if($_GET['create']){
    include_once('textform.php');
}

if($_POST['text_article']){
    $data = $_POST;
    $text = $text->saveArticle($data);
}

?>