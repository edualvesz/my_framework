<?php 

namespace app\models;
use app\controllers\testeController;
use app\system\Model;
use PDO;

error_reporting(E_ALL ^ E_NOTICE);

require_once '../system/model.php';
require_once '../controllers/indexController.php';

class testeModel extends Model
{
    public function salvaBanco($cupom, $email){
        global $db;
        $query = $this->db->prepare("INSERT INTO cupom_embaixador (cupom, email) VALUES (:cupom, :email)");
        $query->bindValue(':cupom', $cupom, PDO::PARAM_STR);
        $query->bindVAlue(':email', $email, PDO::PARAM_STR);
        if($query->execute()){
        return true;
        } else {
        return false;
        }
    }
}

?>