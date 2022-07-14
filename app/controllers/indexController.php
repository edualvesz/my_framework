<?php 


namespace app\controllers;
use app\models\testeModel;


require_once '../models/indexModel.php';

error_reporting(E_ALL ^ E_NOTICE);

$indexModel = new testeModel();
//$indexModel->salvaBanco($cupom, $email);

class testeController
{
    
    public function salvaBanco(){

        //if(isset($_POST['salvaDados'])){
        $cupom = $_POST['cupom'];
        $email = $_POST['email'];
        
        $camposCupom = new testeModel();
        
        if($camposCupom->salvaBanco($cupom, $email)){
            echo ("true");
        } else {
            echo ("false");
        }
    //}
    }
}

?>