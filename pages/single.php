<?php

use App\App;
use App\Table\Article;
use App\Table\Categorie;

$post = Article::find($_GET['id']);
if($post === false){
    App::notFound();
}

App::setTitle($post->title);

?>

<h1><?= $post->title; ?></h1>

<p>
    <em><?= $post->categories; ?></em>
</p>

<h2><?= $post->content; ?></h2>