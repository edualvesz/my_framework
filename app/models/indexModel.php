<?php 

namespace app\models;

use app\system\Model;
use PDO;

class testeModel extends Model
{
    public function salvaBanco($cupom, $email){
        $query = $this->db->prepare("INSERT INTO cupom_embaixador (cupom, email) VALUES (:cupom, :email)");
        $query->bindValue(':cupom', $cupom, PDO::PARAM_STR);
        //$query->bindVAlue(':ano', $ano,  PDO::PARAM_STR);
        $query->bindVAlue(':email', $email,  PDO::PARAM_STR);
        if($query->execute()){
        return true;
        } else {
        return false;
        }
    }
}

?>