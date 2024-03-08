<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
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
            <div class="portalWindow windowPrefo" id="portalToPrefo"><div class="portalDesc" id="descPrefo">Mon premier site. Fait pour le fin de notre préformation (17/11/2023)</div></div>
        </div>
        <div class="windowHolder" id="windowHolder2">
            <h3>Mes débuts avec JS</h3>
            <div class="portalWindow windowEarlyJS" id="portalToEarlyJS"><div class="portalDesc" id="descEarlyJS">Mes premiers pas en JS (17/11/2023 - 22/12/2023)</div></div>
        </div>
        <div class="windowHolder" id="windowHolder3">
            <h3>Premier Travail d'Intégration</h3>
            <div class="portalWindow windowTI1" id="portalToTI1"><div class="portalDesc" id="descTI1">Notre premier test d'intégration (14/12/2023)</div></div>
        </div>
        <div class="windowHolder" id="windowHolder4">
            <h3>Deuxième Travail d'Intégration</h3>
            <div class="portalWindow windowTI2" id="portalToTI2"><div class="portalDesc" id="descTI2">Le deuxième test d'intégration (19/02/2024)</div></div>
        </div>
        <div class="windowHolder" id="windowHolder5">
            <h3>To Be Announced</h3>
            <div class="portalWindow windowTBA1" id="portalToTBA1"><div class="portalDesc" id="descTBA1"></div></div>
        </div>
        <div class="windowHolder" id="windowHolder6">
            <h3>Coming Soon</h3>
            <div class="portalWindow windowTBA2" id="portalToTBA2"><div class="portalDesc" id="descTBA2"></div></div>
        </div>
        <div class="windowHolder" id="windowHolder7">
            <h3>GitHub</h3>
            <div class="portalWindow windowGit" id="portalToGit"><div class="portalDesc" id="descGit">Vers ma page GitHub</div></div>
        </div>
        <div class="windowHolder" id="windowHolder8">
            <h3>CF2M</h3>
            <div class="portalWindow windowCF2M" id="portalToCF2M"><div class="portalDesc" id="descCF2M">Vers le site de l'école</div></div>
        </div>
    </div>
</fieldset>

<p>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>
</p>
            
    

<script src="scripts/script.js"></script>
</body>
</html>