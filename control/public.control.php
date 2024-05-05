<?php
$getPortals = getAllVisiblePortals ($log);

if (isset($_POST["nameInp"], $_POST["passInp"])) {
    $name = standardClean($_POST["nameInp"]);
    $pass = simpleTrim($_POST["passInp"]);
        
    $loginAttempt = userLogin ($log, $name, $pass);
    if ($loginAttempt === true) {
        header("Location: ./");
        die();
    }else {
        
        $title = "Incorrect Login";
       
    include "../view/portailHome.php";
    die();
}
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
             
                                    default :
                                    $title = "Page d'Accueil";
                                    include("../view/portailHome.php");
                                }
                            }else{
                                $title = "Page d'Accueil";
                                include("../view/portailHome.php");
                                
                            }
                            