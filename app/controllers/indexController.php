<?php 


namespace indexController;
use indexModel\testeModel;
use index;



class testeController
{

    public function salvaCupom(){
        $cupom = $_POST['cupom'];
        $email = $_POST['email'];

        $camposCupom = new testeModel();
        
        if($camposCupom->salvaBanco($cupom['cupom'], $email['email'])){
            echo("true");
        } else {
            echo("false");
        }
    }
}

?>