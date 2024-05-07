<?php

$adminPortals = getPortalPlaceForAdmin($port);

// INSERTION
if (isset($_POST["titleInp"], 
          $_POST["descInp"], 
          $_POST["imageInp"], 
          $_POST["urlInp"])) {
    
    $title  = standardClean($_POST["titleInp"]);
    $desc   = standardClean($_POST["descInp"]);
    $image  = simpleTrim($_POST["imageInp"]);
    $url    = urlClean($_POST["urlInp"]);

    $insertNewWindow = addNewWindow ($port, $title, $desc, $image, $url);
    if ($insertNewWindow !== true) {
        $errorMessage = "Problem adding Window";
    }
    header ('Location: ./');
}

if (isset($_GET["update"], $_GET["item"]) && ctype_digit($_GET["item"])) {
    $id = intval(intClean($_GET["item"]));
    $onePortal = getOnePortalForUpdate($port, $id);
}

// so Admin can leave
if (isset($_GET["logout"])) include("../model/logoutModel.php");

// so Admin can see the home page
if (isset($_GET["home"])) {
    $title = "Welcome Boss";
    include("../view/portailHome.php");
    die();
}

// and get back tp the admin page
if (isset($_GET["retour"])) {
    $title = 'Hello again, Boss';
    include ("../private/admin.home.php");
    die();
}

$title = "Admin Only";
include ("../private/admin.home.php");
die();