

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portail</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?php
include("../view/inc/header.php");
?>

<fieldset>
    <legend>Choisissez votre Passage</legend>
    <div class="portalHolder">
        <div class="windowHolder" id="windowHolder1">
            <h3>Site Préformation</h3>
            <div class="portalWindow windowPrefo" id="portalToPrefo"></div>
        </div>
        <div class="windowHolder" id="windowHolder2">
            <h3>Mes débuts avec JS</h3>
            <div class="portalWindow windowEarlyJS" id="portalToEarlyJS"></div>
        </div>
        <div class="windowHolder" id="windowHolder3">
            <h3>Premier Travail d'Intégration</h3>
            <div class="portalWindow windowTI1" id="portalToTI1"></div>
        </div>
        <div class="windowHolder" id="windowHolder4">
            <h3>Deuxième Travail d'Intégration</h3>
            <div class="portalWindow windowTI2" id="portalToTI2"></div>
        </div>
        <div class="windowHolder" id="windowHolder5">
            <h3>To Be Announced</h3>
            <div class="portalWindow windowTBA1" id="portalToTBA1"></div>
        </div>
        <div class="windowHolder" id="windowHolder6">
            <h3>Coming Soon</h3>
            <div class="portalWindow windowTBA2" id="portalToTBA2"></div>
        </div>
        <div class="windowHolder" id="windowHolder7">
            <h3>GitHub</h3>
            <div class="portalWindow windowGit" id="portalToGit"></div>
        </div>
        <div class="windowHolder" id="windowHolder8">
            <h3>CF2M</h3>
            <div class="portalWindow windowCF23" id="portalToCF2M"></div>
        </div>
    </div>
</fieldset>

    

<script src="scripts/script.js"></script>
</body>
</html>