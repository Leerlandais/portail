<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
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
                            <li class="songName"><a href="?song=song<?=$i?>"><?=$song["song_name"]?></a></li>
                    <?php
                            } 
                        endforeach; ?>

                    </ul>
                <?php endforeach; ?>
        </ul>
    </div>
</fieldset>
<script src="scripts/tabs.js"></script>
</body>
</html>