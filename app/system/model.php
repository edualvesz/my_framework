<?php
namespace app\system;

use app\models\testeModel;
use PDO;

class Model 
{
    public $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=integra_moodle_tray', 'root', '@1q2w3e#');
    }
}

?>