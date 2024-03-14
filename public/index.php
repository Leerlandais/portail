<?php

require_once "../config.php";
require_once "../model/portailModel.php";
require_once "../model/portailTabsModel.php";
require_once "../model/portailCountriesModel.php";

try {
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}    



/*  -------------     CONTACT    --------------  */

$messages = getMessages($db);
$replies = getReplies($db);

if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    
    
    $insert = addMessage($db,$_POST['name'],$_POST['email'],$_POST['message']);
    
    if ($insert) {        
        header("Location: ?p=contact"); 
        exit();
    } else {        
        $messageError = "Something went wrong";
    }    
    
}    


if (isset($_POST['nameRep'], $_POST['parent_id'], $_POST['messageRep'])) {
    
    
    $insertReply = addReply($db,$_POST['nameRep'],$_POST['parent_id'],$_POST['messageRep']);
    
    if ($insertReply) {        
        header("Location: ?p=contact"); 
        exit();
    } else {        
        $messageError = "Something went wrong";
    }    
    
}    

/*  -------------     TABS    --------------  */

$artists = getArtists($db);
$songs = getSongs($db);


if (isset($_POST["artist_name"])) {
    $addName = addArtist($db, $_POST["artist_name"]);
    
    if ($addName) {
        header("Location: ?p=tabcontrol");
        exit();
    } else {        
        $messageError = "Something went wrong";
    }  
}



if (isset($_POST["artist_id"], $_POST["song_name"])) {
    $addSong = addSong($db, $_POST["artist_id"], $_POST["song_name"]);
    
    if ($addSong) {
        header("Location: ?p=tabcontrol");
        exit();
    } else {        
        $messageError = "Something went wrong";
    }  
}

/* ---------------- MAPS ---------------------- */


// $countries = getCountries($db);

$totalCountries = count(countCountries($db));

if (!empty($_GET[PAGINATION_GET_NAME]) && ctype_digit($_GET[PAGINATION_GET_NAME])) {
    $page = (int) $_GET[PAGINATION_GET_NAME];
    
} else {
    $page = 1;
}

/// $pagination = paginationModel("./", PAGINATION_GET_NAME, $totalCountries, $page, $itemCount, $sortByType);

/*
if(isset($_GET["sort"])) {
    switch($_GET["sort"]) {
        case 'name' :
                $sortByType = "nom";
            break;
        case 'iso' :
                $sortByType = "iso";
            break;
        case 'pop' :
                $sortByType = "population";
            break;
        case 'area' :
                $sortByType = "superficie";
            break;
        case 'cap' :
                $sortByType = "capitale";
            break;
        case 'pop_cap' :
                $sortByType = "popu_cap";
            break;
        case 'alt' :
                $sortByType = "altitude";
            break;                                                                                            
        }
        $countries = getCountriesBySort($db, $page, MY_COUNTRIES_PER_PAGE, $sortByType);
        $pagination = paginationModel("./", PAGINATION_GET_NAME, $totalCountries, $page, MY_COUNTRIES_PER_PAGE);
}else if(isset($_POST["itemsPerPage"])){
    if($_POST["itemsPerPage"] === "all") $_POST["itemsPerPage"] = $totalCountries;
    $itemCount = $_POST["itemsPerPage"];
    $countries = getCountriesBySort($db, $page, $itemCount);
    $pagination = paginationModel("./", PAGINATION_GET_NAME, $totalCountries, $page, $itemCount);
    }else {
        $countries = getCountriesBySort($db, $page, MY_COUNTRIES_PER_PAGE);
        
    }
*/

    
/*  -------------     CONTROLLER    --------------  */

 $db =null;

if(isset($_GET["p"])){
    switch($_GET["p"]){
        case 'home':
            $title = "Welcome";
            include("../view/portailHome.php");
            break;
            case 'contact' :
                $title = "Contact Me";
                include("../view/portailContact.php");
                break;
                case 'cardgame' :
                    $title = 'Card Memory Game';
                    include("../view/portailCardGame.php");
                    break;
                    case 'devlog' :
                        $title = "Development History";
                        include("../view/portailLog.php");
                        break;
                        case 'tabsLee' :
                            $title = "Guitar Tablatures";
                            include("../view/portailTabs.php");
                            break;
                            case 'tabcontrol' :
                                $title = "Me Only";
                                include("../view/portailTabDB.php");
                                break;
                                case 'countries' :
                                    $title = "Countries";
                                    include("../view/portailCountries.php");
                                    break;            
                                    default :
                                    $title = "Page d'Accueil";
                                    include("../view/portailHome.php");
                                }
                            }else{
                                $title = "Page d'Accueil";
                                include("../view/portailHome.php");
                                
                            }
                            
                            
                            