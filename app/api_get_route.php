<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Source\Sql\Sql;

$app->get('/api/startpartida', function (Request $request, Response $response, array $args) use ($app) {

    
    if($_GET['token'] == "g6abgeag65k6QyEwZSrfb~wo|")
    {
        $sql = new Sql();
        $old = $sql->select("SELECT id FROM cartas_jogo WHERE id_carta = 1");
        if(count($old) == $_GET['qta'])
        {
            $sql->select("UPDATE castas_jogo SET carta_esta = 0, status_carta = 0");
        }
        else if(count($old) > $_GET['qta'])
        {
            $limit = count($old) - $_GET['qta'];
            for($i = 1; $i <= 6; $i++)
            {
                $old = $sql->select("SELECT id FROM cartas_jogo WHERE id_carta = $i LIMIT $limit");

                for($j = 0; $j < $limit; $j++)
                {
                    $sql->select("DELETE FROM cartas_jogo WHERE id = :id",[
                        ":id"=>$old[$j]['id']
                    ]);
                }
            }
            $sql->select("UPDATE castas_jogo SET carta_esta = 0, status_carta = 0");
        }
        else
        {
            $limit = $_GET['qta'] - count($old);
            
            for($j = 0; $j < $limit; $j++)
            {
                for($i = 1; $i <= 6; $i++)
                {
                    $sql->select("INSERT cartas_jogo(id_carta,carta_esta,status_carta) VALUES(:id_carta,:carta_esta,:status_carta)",[
                        ":id_carta"=>$i,
                        ":carta_esta"=>0,
                        ":status_carta"=>0
                    ]);
                }
            }
        }
        
    }

    $result = array(
        "ok"=>true
    );

    $response->getBody()->write(json_encode($result));
    return $response
          ->withHeader('Content-Type', 'application/json')
          ->withStatus(201);
    
});

$app->get('/api/setplayers', function (Request $request, Response $response, array $args) use ($app) {

    if($_GET['token'] == "g6abgeag65k6QyEwZSrfb~wo|")
    {
        $sql = new Sql();
        $old = $sql->select("SELECT * FROM usuarios");
        if(count($old) > $_GET['qta'])
        {
            $limit = count($old) - $_GET['qta'];
            for($j = 0; $j < $limit; $j++)
            {
                $sql->select("DELETE FROM cartas_jogo WHERE id = :id",[
                    ":id"=>$old[$j]['id']
                ]);
            }


            $sql->select("UPDATE castas_jogo SET carta_esta = 0, status_carta = 0");
        }
    }
    

    $result = array(
        "ok"=>true
    );

    $response->getBody()->write(json_encode($result));
    return $response
          ->withHeader('Content-Type', 'application/json')
          ->withStatus(201);
    
});





?>