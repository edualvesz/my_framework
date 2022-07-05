<?php 

require '../../system/model.php';
//namespace app\system;
use app\controllers;

class testeModel extends Model 
{
    public function salvaBanco(){
        $query = $this->db->prepare("INSERT INTO cupom_embaixador (cupom, ano_referencia, email) VALUES (:cupom, :ano, :email)");
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