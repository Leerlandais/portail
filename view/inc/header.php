<div class="headerDiv">
    <h1 id="portalHeader">Bienvenue sur mon Portail</h1>
    <!--  <h6 id="screenwidth"></h6><button id="showScreen">Press</button>  -->
    <div class="navLinks">
        <?php
   //     var_dump($db);
    if (isset($_GET["p"])) {
        switch($_GET["p"]) {
            case 'home':
                ?>
                <a href="?p=contact"><h4>Contact</h4></a>
                <a href="?p=devlog"><h4>Development Log</h4></a>
                <?php
                break;
                case 'contact':
                    ?>
                <a href="?p=home"><h4>Home</h4></a>
                <a href="?p=devlog"><h4>Development Log</h4></a>
                <?php
                break;
                case 'cardgame':
                    ?>
                <a href="?p=home"><h4>Home</h4></a>
                <a href="?p=contact"><h4>Contact</h4></a>
                <a href="?p=devlog"><h4>Development Log</h4></a>
                <?php
                break;
                case 'devlog':
                    ?>
                <a href="?p=home"><h4>Home</h4></a>
                <a href="?p=contact"><h4>Contact</h4></a>
                <?php
                break;
                case 'tabsLee' :
                    ?>
                <a href="?p=home"><h4>Home</h4></a>
                <a href="?p=contact"><h4>Contact</h4></a>
                <a href="?p=devlog"><h4>Development Log</h4></a>
                <?php
                break;
                case 'countries' :
                    ?>
                <a href="?p=home"><h4>Home</h4></a>
                <a href="?p=contact"><h4>Contact</h4></a>
                <a href="?p=devlog"><h4>Development Log</h4></a>
                <?php
                break;
                default:
                header("Location: ?p=home");
                exit();
            }
        } else if (isset($_GET["pg"])) {
            switch($_GET["pg"]) {
                case 'tabsLee':
                    ?>
                    <a href="http://portail/public/?p=contact"><h4>Contact</h4></a>
                    <a href="http://portail/public/?p=devlog"><h4>Development Log</h4></a>
                    <?php
                    break;
                    case 'tabcontrol':
                        ?>
                    <a href="http://portail/public/?p=home"><h4>Home</h4></a>
                    <a href="http://portail/public/?p=devlog"><h4>Development Log</h4></a>
                    <?php
                    break;
                    }
            ?>

        <?php
    }
    ?>
    </div>
</div>