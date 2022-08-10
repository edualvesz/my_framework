<?php 


namespace app\controllers;
use app\models\testeModel;


require_once '../models/indexModel.php';

error_reporting(E_ALL ^ E_NOTICE);

//$indexModel = new testeModel();
//$indexModel->salvaBanco();


class testeController
{
    public function salvaBanco(){


        $cupom = $_POST['cupom'];
        $email = $_POST['email'];

        //if(isset($_POST['salvar'])){
        
        $camposCupom = new testeModel();
        
        if($camposCupom->salvaBanco($cupom, $email)){
            echo ("true");
        } else {
            echo ("false");
        }
    
   // }
    }
}
?>