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

?>
<h1>My Favourite Tablatures</h1>
<a href="?p=tabs" class="backTabs"><h4>Back to Tabs</h4></a>

<fieldset class="artistTabField">
<div class="existingArtist">
    <h2>Artists already in the DB</h2>
    <ul>
<?php  foreach ($artists as $artist) : ?>
        <li class="artistList"><?=$artist["artist_name"]?></li>
        <div class="songInp">
            <form action="" class = "artistForm" method="POST">
                <label for="song_name" class="artistLabel">Song Name</label>
                <input type="text" class="artistInp" name="song_name">
                <input type="text" class="artistInp" name="artist_id" value="<?=$artist['id']?>">
            </form>
        </div>
        </form>
        <?php  endforeach;  ?>
    </ul>
    
    <div class="artistTabForm">
        <form action="" class = "artistForm" method="POST">
            <div class="formInp">
                <label for="artist_name" class="artistLabel">Artist's Name</label>
                <input type="text" class="artistInp" name="artist_name">
            </div>
        </form>
    </div>
</div>
</fieldset>


<script src="scripts/tabs.js"></script>
</body>
</html>

