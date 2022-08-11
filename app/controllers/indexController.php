<?php 

namespace app\controllers;
use app\models\testeModel;

//error_reporting(E_ALL ^ E_NOTICE);

class testeController
{
    public function salvaBanco(){
        var_dump($_POST);
        $camposCupom = new testeModel();

        $cupom = $_POST['cupom'];
        $email = $_POST['email'];
        
        if($camposCupom->salvaBanco($cupom, $email)){
            echo ("true");
        } else {
            echo ("false");
        }
    }
}
?>