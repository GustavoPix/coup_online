<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Source\Models\Page;
use Source\Sql\Models\Projeto;
use Source\Sql\Models\Blog;
use Source\Sql\Models\Message;


$app->post('/api/message', function (Request $request, Response $response, array $args) use ($app) {

    echo json_encode([
        "success"=> Message::PostMessage($_POST['nome'],$_POST['email'],$_POST['mensagem'])
    ]);

});

$app->post('/api/message_project', function (Request $request, Response $response, array $args) use ($app) {

    $uploaddir = '/var/www/uploads/';

    $has_file = count($_FILES['userfile']['name']) > 0 ? 1 : 0;

    for($i = 0; $i < count($_FILES['userfile']['name']); $i++)
    {
        $uploadfile = $uploaddir . $_POST['nome'] . $i . "_" . date('Ymdhms') . "_" . basename($_FILES['userfile']['name'][$i]);
        $has_file = move_uploaded_file($_FILES['userfile']['tmp_name'][$i], $uploadfile) ? 1 : 0;
    }
    //echo json_encode([
    //    $_POST['nome'],$_POST['email'],$_POST['telefone'], $_POST['empresa'], $_POST['pretencao_projeto'], $_POST['mensagem'], $has_file
    //]);
    //die;

    echo json_encode([
        "success"=> Message::PostProject($_POST['nome'],$_POST['email'],$_POST['telefone'], $_POST['empresa'], $_POST['pretencao_projeto'], $_POST['mensagem'], $has_file)
    ]);

});


?>