<div class="headerDiv">
    <h1 id="portalHeader">Bienvenue sur mon Portai<a href="?login" style="margin: 0 !important; font-style:normal">l</a></h1>
  <h3 id="screenwidth" style="display: none;"></h3> 
    <div class="navLinks">
        <?php
   //     var_dump($db);
    if (isset($_GET["p"])) {
        switch($_GET["p"]) {
            case 'home':
                ?>

                <a href="?p=devlog"><h4>Development Log</h4></a>
                <?php
                break;
                case 'cardgame':
                    ?>
                <a href="?p=home"><h4>Home</h4></a>

                <a href="?p=devlog"><h4>Development Log</h4></a>
                <?php
                break;
                case 'devlog':
                    ?>
                <a href="?p=home"><h4>Home</h4></a>

                <?php
                break;
                default:
                header("Location: ?p=home");
                exit();
            }
            }else {
                ?>

                <a href="?p=devlog"><h4>Development Log</h4></a>
        <?php
    }
    ?>
    </div>
</div>