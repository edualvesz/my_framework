<?php 

class Model
{

    public $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=127.0.0.1;dbname=db_teste', 'root', '');
    }

}

?>