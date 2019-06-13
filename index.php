<?php

require 'vendor/autoload.php';

$router = new App\Router($_GET['url']);

$router -> get('/posts', function(){echo 'Tous les articles'; });
$router -> get('/posts/:id', function($id){echo 'Affiche l\'article' . $id; });
$router -> post('/posts/:id', function($id){echo 'Poster pour l\'article' . $id; });