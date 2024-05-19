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
<fieldset class="devLogField">
    <button id="devOrderUp" class="devOrderChange">&uarr;</button><button id="devOrderDown" class="devOrderChange">&darr;</button>
    <div class="listHolder">
        <ul id="devList">
<?php	
foreach($getDevLogs as $log) {
?>
        <li class="devListItem"><?=$log["date"]?> - <?=$log["log"]?></li> 
<?php	
}
?>
        </ul>
    </div>
</fieldset>

<script src="scripts/logScript.js"></script>
</body>
</html>