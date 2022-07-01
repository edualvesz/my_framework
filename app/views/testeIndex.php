<?php 

$REQUEST_URI = filter_input(INPUT_SERVER, 'REQUEST_URI');
$INITE = strpos($REQUEST_URI, '?');
if($INITE){
    $REQUEST_URI = substr($REQUEST_URI, 0, $INITE);
}

$REQUEST_URI_PASTA = substr($REQUEST_URI, 1);

$URL = explode('/', $REQUEST_URI_PASTA);

$URL[0] = ($URL[0] != '' ? $URL[0] : 'home');

if(file_exists($URL[0] . '.php')){
    require ($URL[0] . '.php');
     
} elseif (is_dir($URL[0] . '.php')) {
    if(isset($URL[1]) && file_exists($URL[0] . '/' . $URL[1] . '.php')){
        require ($URL[0] . '/' . $URL[1] . '.php');
    } else {
        require ('404.php');
    }
} else {
    require ('404.php');
}

//https://www.youtube.com/watch?v=0Ja7bZE3RFg

?>