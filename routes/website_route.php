<?php


use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Source\Models\Page;
use Source\Sql\Models\Projeto;
use Source\Sql\Models\Blog;

$app->get('/', function (Request $request, Response $response, array $args) use ($app) {

    
    $page = new Page();
    $page->setTpl("header",[]);
    $page->setTpl("index_adm");
    
    $page->setTpl("footer",[]);
    
});
$app->get('/game', function (Request $request, Response $response, array $args) use ($app) {

    
    $page = new Page();
    $page->setTpl("header",[]);
    $page->setTpl("index_game");
    
    $page->setTpl("footer",[]);
    
});


?>