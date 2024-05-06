<?php
require_once ("../model/adminModel.php");
if (isset($_GET["logout"])) include("../model/logoutModel.php");


if (isset($_GET["home"])) {
    $title = "Welcome Boss";
    include("../view/portailHome.php");
    die();
}

if (isset($_GET["retour"])) {
    $title = 'Hello again, Boss';
    include ("../private/admin.home.php");
    die();
}

if (isset($_POST["titleInp"], 
          $_POST["descInp"], 
          $_POST["imageInp"], 
          $_POST["urlInp"])) {
    
    $title  = standardClean($_POST["titleInp"]);
    $desc   = standardClean($_POST["descInp"]);
    $image  = simpleTrim($_POST["imageInp"]);
    $url    = urlClean($_POST["urlInp"]);

    $insertNewWindow = addNewWindow ($db, $title, $desc, $image, $url);
    if ($insertNewWindow !== true) {
        $errorMessage = "Problem adding Window";
    }
    header ('Location: ./');
}


include ("../private/admin.home.php");
die();