<?php
namespace Source\Sql\Models;

use Source\Sql\Sql;

class Message{


    public static function PostMessage($nome, $email, $message)
    {
        
        $sql = new Sql();

        $sql->select("INSERT INTO mensagem(nome, email, message)
            VALUES(:nome, :email, :message)",[
                ":nome"=>$nome,
                ":email"=>$email,
                ":message"=>$message
            ]);
        
        $return =  $sql->select("SELECT id FROM mensagem WHERE  nome = :nome AND email = :email AND message  = :message",[
            ":nome"=>$nome,
            ":email"=>$email,
            ":message"=>$message
        ]);

        return count($return) > 0;
        
    }

    public static function PostProject($nome, $email, $telefone, $empresa, $pretencao_projeto, $message, $has_file)
    {
        
        $sql = new Sql();

        $sql->select("INSERT INTO mensagem_projeto(nome, email, telefone, empresa, pretencao_projeto, message, file)
            VALUES(:nome, :email, :telefone, :empresa, :pretencao_projeto, :mensagem, :has_file)",[
                ":nome"=>$nome,
                ":email"=>$email,
                ":telefone"=>$telefone,
                ":empresa"=>$empresa,
                ":pretencao_projeto"=>$pretencao_projeto,
                ":has_file"=>$has_file,
                ":mensagem"=>$message
            ]);
        
        $return =  $sql->select("SELECT id FROM mensagem_projeto WHERE  nome = :nome AND email = :email AND message  = :message",[
            ":nome"=>$nome,
            ":email"=>$email,
            ":message"=>$message
        ]);

        return count($return) > 0;
        
    }

    
}

?>