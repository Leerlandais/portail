<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="styles/styleHome.css">
    
</head>
<body>
<?php
include("../view/inc/header.php");
$getPortals = getAllVisiblePortals ($port);
if (isset($_SESSION['id']) && $_SESSION["id"] === session_id()) {
    ?>
    <a href="?retour">Back to Admin</a>
    <?php
}
?>
    <?php 
    
    if (isset($_GET["login"])) include ("inc/login-form.php");
?>
<fieldset>
    <legend>Choisissez votre Passage</a></legend>
    <div class="portalHolder">
        <?php
        foreach ($getPortals as $port) {
            ?>
            <div class="windowHolder" url = <?=$port["dest_url"]?>>
                <h3><?=$port["title"]?></h3>
            <div class="portalWindow" id="" style="background-image: <?=$port["img_src"]?>;"><div class="portalDesc"><?=$port["description"]?></div></div>
            </div>
        <?php
        }
        ?>
    </div>
</fieldset>       

 

 <script src="scripts/script.js"></script>
</body>
</html>