<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Favourite Tablatures</title>
    <link rel="stylesheet" href="styles/tabs.css">
    
</head>
<body>
<?php // var_dump($songs); ?>

<fieldset class="artistField">
    <legend>Select Artist</legend>
    <div class="artistWindow">
        <ul class="artistList">
            <?php foreach ($artists as $artist) : ?>
                <li class="artistName"><?=$artist["artist_name"]?></li>
                    <ul class="songList">
                    <?php 
                        $i=1;
                        foreach ($songs as $song) : 
                            if ($song["artists_id"] == $artist["artist_id"]) {
                        ?>
                            <li class="songName"><a href="?song=<?=$song["tabs_id"]?>"><?=$song["song_name"]?></a></li>
                    <?php
                            } 
                            $i++;
                        endforeach; ?>

                    </ul>
                <?php endforeach; ?>
        </ul>
    </div>
</fieldset>

<div class="showSong">
    
<?php if (isset($tabs)) {  ?>
    <?php
    foreach($tabs as $tab) :
        if ($tab["tab_id"] == $_GET["song"]) {
            echo $tab["tab_name"]."<br>";  // stick tab in divs etc ?>
    <div class="tabHolder">
        <div class="tabWindow">
        
        <div class="chord"><?=$tab["chord1"];?></div><div class="verse"><?=$tab["verse1"];?></div></div>
        <div class="tabWindow">
        <div class="chord"><?=$tab["chord2"];?></div>        </div>
        <div class="tabWindow">
        <div class="verse"><?=$tab["verse2"];?></div>        </div>
        <div class="tabWindow">
        <div class="chord"><?=$tab["chord3"];?></div>        </div>
        <div class="tabWindow">
        <div class="verse"><?=$tab["verse3"];?></div>        </div>
        <div class="tabWindow">
        <div class="chord"><?=$tab["chord4"];?></div>        </div>
        <div class="tabWindow">
        <div class="verse"><?=$tab["verse4"];?></div>        </div>
        <div class="tabWindow">
        <div class="chord"><?=$tab["chord5"];?></div>        </div>
        <div class="tabWindow">
        <div class="verse"><?=$tab["verse5"];?></div>        </div>
        <div class="tabWindow">
        <div class="chord"><?=$tab["chord6"];?></div>        </div>
        <div class="tabWindow">
        <div class="verse"><?=$tab["verse6"];?></div>        </div>
        </div>
        <?php
        }
    endforeach;
    }
?>
</div>
<script src="scripts/tabs.js"></script>
</body>
</html>