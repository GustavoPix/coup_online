<?php
namespace Source\Sql\Models;

use Source\Sql\Sql;

class Projeto{


    
    public static function GetProjects($parans = array())
    {
        $parans = array_merge(array(
            "limit"=>10,
            "order"=>true,
            "type"=>"complete"
        ),$parans);

        $sql = new Sql();

        if($parans['type'] == "complete")
        {
            return $sql->select("SELECT * FROM projetos ORDER BY id " . ($parans['order'] ? "" : "DESC ") . "LIMIT " . $parans['limit']);
        }
        else if($parans['type'] == "resume")
        {
            return $sql->select("SELECT id AS link,nome AS name,thumbnail AS img FROM projetos ORDER BY id " . ($parans['order'] ? "" : "DESC ") . "LIMIT " . $parans['limit']);
        }
        else
        {
            return array();
        }
    }

    public static function GetProject($id)
    {
        $sql = new Sql();
        $project =  $sql->select("SELECT * FROM projetos WHERE id = :id",[
            ":id"=>$id
        ]);
        return count($project) > 0 ? $project[0] : null;
    }
    public static function GetImagesProject($id)
    {
        $sql = new Sql();
        $project =  $sql->select("SELECT url FROM image_projeto WHERE projeto = :id",[
            ":id"=>$id
        ]);
        return count($project) > 0 ? $project : null;
    }
    public static function GetTecnologiasProject($id)
    {
        $sql = new Sql();
        $project =  $sql->select("SELECT name FROM tecnologias_projeto WHERE projeto = :id",[
            ":id"=>$id
        ]);

        $tecnologias = array();

        foreach($project as $p)
        {
            array_push($tecnologias,$p['name']);
        }

        return $tecnologias;
    }
}

?>