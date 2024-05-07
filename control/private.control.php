<?php



// INSERTION
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

// UPDATE
if (isset($_POST["titleUpdate"],
          $_POST["descUpdate"],
          $_POST["imageUpdate"],
          $_POST["urlUpdate"],
          $_GET["item"]) &&
          ctype_digit($_GET["item"])) {
    
    $title  = standardClean($_POST["titleUpdate"]);
    $desc   = standardClean($_POST["descUpdate"]);
    $image  = simpleTrim($_POST["imageUpdate"]);
    $url    = urlClean($_POST["urlUpdate"]);
    $id     = intval(intClean($_GET["item"]));

    $updateWindow = updateExistingWindow ($db, $title, $desc, $image, $url, $id);
            if ($updateWindow !== true) {
                $errorMessage = "Problem updating Window";
            }
            header("Location: ?update");
          }

// PRE-UPDATE SELECTION 
if (isset($_GET["update"], 
          $_GET["item"]) && 
          ctype_digit($_GET["item"])) {

    $id = intval(intClean($_GET["item"]));
        $onePortal = getOnePortalForUpdate($db, $id);
}          


// HIDE/SHOW
if (isset($_GET["update"], 
          $_GET["id"],
          $_GET["show"]) && 
          ctype_digit($_GET["id"]) && ctype_digit($_GET["show"])) {

    $id  = intval(intClean($_GET["id"]));
    $vis = intval(intClean($_GET["show"]));
        $showHide = changePortalVisibility($db, $id, $vis);
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