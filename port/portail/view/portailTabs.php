<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="styles/tabs.css">
    
</head>
<body>
<?php
 include("../view/inc/header.php");

?>
<h1>My Favourite Tablature<a href="?p=tabcontrol" class = "leeOnly">s</a></h1>

<fieldset>
    <div class="artistDisplay">
       
            <?php  foreach ($artists as $artist) : ?>
                <ul class="artistUL">
                    <li class="showArtist"><?=$artist["artist_name"]?></li>
                    <?php  foreach ($songs as $song) : 
                         if ($song["artist_id"] === $artist["id"]) { ?>
                            <ul class="songUL">
                             <li><?=$song["song_name"];?></li>    
                                 </ul>        
                                <?php 
            }
        endforeach;  
        ?>
                </ul>
        <?php  endforeach;  ?>

</div>
</fieldset>

    
<script src="scripts/tabs.js"></script>
</body>
</html>