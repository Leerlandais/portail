<?php

require_once ("../model/adminModel.php");

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
      echo $errorMessage = "Problem adding Window";
    }
    header ('Location: ?home');
}

// ADD NEW LOG
if (isset($_POST["dateInp"],
          $_POST["logInp"])) {
    
    $date   = standardClean($_POST["dateInp"]);
    $log    = standardClean($_POST["logInp"]);

    $addNewLog = addNewLog ($db, $date, $log);
    if ($addNewLog !== true) {
        $errorMessage = "Problem adding Log";
    }
    header ("Location: ?addNewLog");
          }

// UPDATE
if (isset($_POST["titleUpdate"],
          $_POST["descUpdate"],
          $_POST["imageUpdate"],
          $_POST["widthUpdate"],
          $_POST["heightUpdate"],
          $_POST["urlUpdate"],
          $_GET["item"]) &&
          ctype_digit($_GET["item"])) {
    
    $title  = standardClean($_POST["titleUpdate"]);
    $desc   = standardClean($_POST["descUpdate"]);
    $image  = simpleTrim($_POST["imageUpdate"]);
    $imgW   = intval(intClean($_POST["widthUpdate"]));
    $imgH   = intval(intClean($_POST["heightUpdate"]));
    $url    = urlClean($_POST["urlUpdate"]);
    $id     = intval(intClean($_GET["item"]));

    $updateWindow = updateExistingWindow ($db, $title, $desc, $image, $imgW, $imgH, $url, $id);
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

// UPDATE LOG
if (isset($_POST["dateUpdate"],
          $_POST["logUpdate"],
          $_GET["log"]) &&
          ctype_digit($_GET["log"])) {
    $date   = standardClean($_POST["dateUpdate"]);
    $log    = standardClean($_POST["logUpdate"]);
    $id     = intval(intClean($_GET["log"]));

    $updateLog = updateExistingLog($db, $date, $log, $id);
    if ($updateLog !== true) {
        $errorMessage = "Problem updating Log";
    }
    header("Location: ?devlog");
          }

// PRE-UPDATE SELECTION LOG
if (isset($_GET["updateLog"], 
          $_GET["log"]) && 
          ctype_digit($_GET["log"])) {

    $id = intval(intClean($_GET["log"]));
        $oneLog = getOneLogForUpdate($db, $id);
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

// HIDE/SHOW LOG
if (isset($_GET["updateLog"], 
          $_GET["id"],
          $_GET["show"]) && 
          ctype_digit($_GET["id"]) && ctype_digit($_GET["show"])) {

    $id  = intval(intClean($_GET["id"]));
    $vis = intval(intClean($_GET["show"]));
        $showHide = changeLogVisibility($db, $id, $vis);
} 

// MOVE POSITION
if (isset($_GET["update"],
          $_GET["dir"],
          $_GET["place"]) &&
          ctype_digit($_GET["place"])) {

            $_GET['dir'] === "up" ? $dir = "-1" : $dir = "+1";
            $place = intval(intClean($_GET["place"]));
                $changePlaces = switchPlacements ($db, $dir, $place);
          }

// UPDATE GLOBAL CSS
if (isset($_POST["cssSelector"],
          $_POST["cssValue"])) {
    $value      = standardClean($_POST["cssValue"]);
    $selector   = standardClean($_POST["cssSelector"]);
    $changeCSS  = updateGlobalCss($db, $value, $selector);

}

// UNDO CHANGE TO GLOBAL
if (isset($_POST["undoChange"])) {
    $selector   = standardClean($_POST["cssReset"]);    
    $undo       = undoChangeToGlobal($db, $selector);
}

// RESET TO DEFAULT
if (isset($_POST["resetDefault"])) {
    $selector   = standardClean($_POST["cssReset"]);        
    $reset      = resetGlobalToDefault($db, $selector);
}

// so Admin can leave
if (isset($_GET["logout"])) include("../model/logoutModel.php");

// so Admin can see the home page
if (isset($_GET["home"])) {
    $title = "Welcome Boss";
    include("../view/portailHome.php");
    die();
}

// and get back to the admin page
if (isset($_GET["retour"])) {
    $title = 'Hello again, Boss';
    include ("../private/admin.home.php");
    die();
}

// and the global update form
if (isset($_GET["global"])) $siteCss = getGlobalCss($db);

$title = "Admin Only";
include ("../private/admin.home.php");
die();

