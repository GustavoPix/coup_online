<?php
namespace Source\Sql\Models;

use Source\Sql\Sql;

class Blog{


    
    public static function GetPosts($parans = array())
    {
        $parans = array_merge(array(
            "limit"=>10,
            "order"=>true,
            "type"=>"complete"
        ),$parans);

        $sql = new Sql();

        if($parans['type'] == "complete")
        {
            return $sql->select("SELECT * FROM posts_blog ORDER BY id " . ($parans['order'] ? "" : "DESC ") . "LIMIT " . $parans['limit']);
        }
        else if($parans['type'] == "resume")
        {
            return $sql->select("SELECT id AS link, titulo AS name, thumbnail AS img FROM posts_blog ORDER BY id " . ($parans['order'] ? "" : "DESC ") . "LIMIT " . $parans['limit']);
        }
        else
        {
            return array();
        }
    }

    public static function GetPost($id)
    {
        $sql = new Sql();
        $project =  $sql->select("SELECT * FROM posts_blog WHERE id = :id",[
            ":id"=>$id
        ]);
        return count($project) > 0 ? $project[0] : null;
    }
    public static function GetSectionsPost($id)
    {
        $sql = new Sql();
        $sections =  $sql->select("SELECT * FROM sessoes_post_blog WHERE post = :id",[
            ":id"=>$id
        ]);
        return $sections;
    }
    
}

?>