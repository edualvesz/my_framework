<?php
namespace connModel;

use indexModel\testeModel;
use PDO;

class Model 
{
    public $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=127.0.0.1;dbname=integra_moodle_tray', 'root', '');
    }
}

?>