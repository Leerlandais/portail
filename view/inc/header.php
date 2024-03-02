<div class="headerDiv">
    <h1 id="portalHeader">Bienvenue sur mon Portail</h1>
   <!-- <h6 id="screenwidth"></h6> -->
   <?php
   if (isset($_GET["p"])) {
    switch($_GET["p"]){
        case 'home':
    ?>  <a href="?p=contact"><h4>Contact</h4></a>   <?php
            break;
        case 'contact' :
    ?>  <a href="?p=home"><h4>Home</h4></a>   <?php
            break;
        default:
         ?>  <a href="?p=contact"><h4>Contact</h4></a>   <?php
        }
    }else {
    ?>  <a href="?p=contact"><h4>Contact</h4></a>   <?php
    }
    ?>
</div>