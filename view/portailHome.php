

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
    <legend>Choissisez votre Passage</legend>
    <div class="portalHolder">
      <div class="windowHolder"><h3>Site Préformation</h3><a href="https://2023.webdev-cf2m.be/Lee/Site/" target="_blank"><div class="portalWindow windowPrefo" id="portalToPrefo"></div></a></div> 
      <div class="windowHolder"><h3>Mes débuts avec JS</h3><a href="https://2023.webdev-cf2m.be/Lee/javaStuff/" target="_blank"><div class="portalWindow windowEarlyJS" id="portalToEarlyJS"></div></a></div> 
      <div class="windowHolder"><h3>Premier Travail d'Intégration</h3><a href="https://2023.webdev-cf2m.be/Lee/TI/public/" target="_blank"><div class="portalWindow windowTI1" id="portalToTI1"></div></a></div> 
      <div class="windowHolder"><h3>Deuxième Travail d'Intégration</h3><a href="https://2023.webdev-cf2m.be/Lee/TI2-HomeVersion/public/" target="_blank"><div class="portalWindow windowTI2" id="portalToTI2"></div></a></div> 
      <div class="windowHolder"><h3>To Be Announced</h3><a href="#"><div class="portalWindow windowTBA1" id="portalToTBA1"></div></a></div> 
      <div class="windowHolder"><h3>Coming Soon</h3><a href="#"><div class="portalWindow windowTBA2" id="portalToTBA2"></div></a></div> 
      <div class="windowHolder"><h3>GitHub</h3><a href="https://github.com/Leerlandais" target="_blank"><div class="portalWindow windowGit" id="portalToGit"></div></a></div> 
      <div class="windowHolder"><h3>CF2M</h3><a href="https://www.cf2m.be/home" target="_blank"><div class="portalWindow windowCF23" id="portalToCF2M"></div></a></div> 
    </div>
</fieldset>
    

<script src="scripts/script.js"></script>
</body>
</html>