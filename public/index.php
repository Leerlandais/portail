<?php

require_once "../config.php";
require_once "../model/portailModel.php";

try {
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}

$messages = getMessages($db);
$replies = getReplies($db);

if(isset($_GET["p"])){
    switch($_GET["p"]){
        case 'home':
            $title = "Page d'Accueil";
            include("../view/portailHome.php");
            break;
        case 'contact' :
            $title = "Contact Me";
            include("../view/portailContact.php"); // I'll change it back once the page is done
            break;
        }
    }else{
        $title = "Page d'Accueil";
        include("../view/portailHome.php");
}

if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {

        
    $insert = addMessage($db,$_POST['name'],$_POST['email'],$_POST['message']);
        
    if ($insert) {        
        header("Location: ?p=contact"); 
        exit();
    } else {        
        $messageError = "Something went wrong";
    }

}
