<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Source\Sql\Models\User;
use Source\Sql\Sql;

$app->post('/api/login', function (Request $request, Response $response, array $args) use ($app) {

    if(!isset($_POST['email']) || !isset($_POST['password']))
    {
        echo json_encode([
            "success"=>false,
            "message"=>"Email ou senha incompletos"
        ]);
        die();
    }
    else
    {
        $parans = [
            "email"=>$_POST['email'],
            "password"=>$_POST['password']
        ];
    
        $result = User::getAll($parans);

        if(count($result) > 0)
        {
            echo json_encode([
                "success"=>true,
                "user"=>$result[0]
            ]);
        
        }
        else
        {
            echo json_encode([
                "success"=>false,
                "message"=>"Email ou senha incorretos"
            ]);
        }
    }

});

$app->get('/config/table/create_and_set', function (Request $request, Response $response, array $args) use ($app) {

    $sql = new Sql();

    if(count($sql->select("SELECT id FROM projetos")) == 0)
    {
        $sql->select("create table if not exists projetos (
            id INT auto_increment primary key,
            nome VARCHAR(255) NOT NULL,
            thumbnail VARCHAR(255),
            tipo VARCHAR(255),
            projeto TEXT,
            site VARCHAR(255),
            features TEXT,
            solucao TEXT,
            resultado TEXT,
            depoimento TEXT,
            quote VARCHAR(255),
            created_at TIMESTAMP NOT NULL DEFAULT NOW()
        )");

        $sql->select("create table if not exists image_projeto(
            id INT auto_increment primary key,
            projeto INT,
            url VARCHAR(255) NOT NULL
        )");

        $sql->select("create table if not exists tecnologias_projeto(
            id INT auto_increment primary key,
            name VARCHAR(255) NOT NULL,
            projeto INT NOT NULL
        )");

        $sql->select("create table if not exists mensagem(
            id INT auto_increment primary key,
            created_at TIMESTAMP NOT NULL DEFAULT NOW(),
            nome VARCHAR(255),
            email VARCHAR(255),
            message TEXT,
            answered_in TIMESTAMP DEFAULT '1970-01-01 00:00:01'
        )");

        $sql->select("create table if not exists mensagem_projeto(
            id INT auto_increment primary key,
            created_at TIMESTAMP NOT NULL DEFAULT NOW(),
            nome VARCHAR(255),
            email VARCHAR(255),
            telefone VARCHAR(15),
            empresa VARCHAR(255),
            pretencao_projeto VARCHAR(255),
            message TEXT,
            file INT(1),
            answered_in TIMESTAMP DEFAULT '1970-01-01 00:00:01'
        )");

        $sql->select("INSERT INTO image_projeto(projeto,url)
            VALUES(1,'ilustranext01.jpg')");

        $sql->select("INSERT INTO image_projeto(projeto,url)
            VALUES(1,'ilustranext02.jpg')");

        $sql->select("INSERT INTO image_projeto(projeto,url)
            VALUES(1,'ilustranext03.jpg')");

        $sql->select("INSERT INTO image_projeto(projeto,url)
            VALUES(1,'ilustranext04.jpg')");

        $sql->select("INSERT INTO image_projeto(projeto,url)
            VALUES(1,'ilustranext05.jpg')");

        $sql->select("INSERT INTO image_projeto(projeto,url)
            VALUES(1,'ilustranext06.jpg')");

        $sql->select("INSERT INTO projetos(nome,thumbnail,tipo,projeto,site,features,solucao,resultado)
            VALUES(:nome,:thumbnail,:tipo,:projeto,:site,:features,:solucao,:resultado)",[
                ":nome"=>"Ilustranext",
                ":thumbnail"=>"thumb01.jpg",
                ":tipo"=>"Ilustranext é uma plataforma de gestão de equipes e projetos",
                ":projeto"=>"Ilustranext é uma plataforma de gestão de equipes e projetos",
                ":site"=>"https://ilustraviz.com",
                ":features"=>"Gerenciamento de projetos, equipes, automações de processos e inteligencia artificial",
                ":solucao"=>"A plataforma Ilustranext nasceu com foco em produção de seus colaboradores, além de unificar processos, dados, simplificação de uso e gerenciamento de equipe.",
                ":resultado"=>"Estamos desenvolvendo a plataforma e promovendo melhorias no serviço do mesmo. Atualmente, a plataforma inclui uma gestão de usuários por meio de tasks, setor financeiro, cadastro de projetos e dados e o mais recente: Inteligencia Artificial para o tagueamento de produtos e rastreio de atividades, nossa meta é que com o uso da inteligencia artifical, os designers ganhem muito mais tempo ao procurar por um modelo 3D"
            ]);

        $sql->select("INSERT INTO tecnologias_projeto(name,projeto)
            VALUES(:name,:projeto)",[
                ":name"=>"php",
                ":projeto"=>1
            ]);

        $sql->select("INSERT INTO tecnologias_projeto(name,projeto)
            VALUES(:name,:projeto)",[
                ":name"=>"vuejs",
                ":projeto"=>1
            ]);

        $sql->select("INSERT INTO tecnologias_projeto(name,projeto)
            VALUES(:name,:projeto)",[
                ":name"=>"html",
                ":projeto"=>1
            ]);
        echo "OK";
    }
    else
    {
        echo "Já existe";
    }

});

?>