<?php

require_once "../config.php";
require_once "../model/portailTabsModel.php";


try {
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}    

$artists = getArtists($db);
$songs = getSongs($db);
// $tabs = getTabs($db);

if (isset($_GET["song"])) {
    $thisSong = $_GET["song"];
    $tabs = getTabs($db, $thisSong);
}
    

/*  -------------     TABS    --------------  */


    
/*  -------------     CONTROLLER    --------------  */

 $db =null;
 
 include ("../view/portailTabs.php");
                            
                            