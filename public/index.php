<?php

require_once "../config.php";

try {
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}


if(isset($_GET["p"])){
    switch($_GET["p"]){
        case 'home':
            $title = "Page d'Accueil";
            include("../view/portailHome.php");
            break;
        case 'contact' :
            $title = "Contact Me";
            include("../view/contact.php");
            break;
        }
    }else{
        $title = "Page d'Accueil";
        include("../view/portailHome.php");
}