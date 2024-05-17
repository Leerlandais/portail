<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" type="text/css" href="styles/styleHome.css.php">
    
</head>
<body>
<?php
include("../view/inc/header.php");
$getPortals = getAllVisiblePortals ($db);

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
        foreach ($getPortals as $db) {
            ?>
            <div class="windowHolder" style="height :<?=$db["img_height"]?>vh;" url=<?=$db["dest_url"]?>>
                <h3><?=$db["title"]?></h3>
            <div class="portalWindow" id="" style="background-image: <?=$db["img_src"]?>; width :<?=$db["img_width"]?>%; "><div class="portalDesc"><?=$db["description"]?></div></div>
            </div>
        <?php
        }
        ?>
    </div>
</fieldset>       

<script src="scripts/script.js"></script>
</body>
</html>