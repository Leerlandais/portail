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
            <li class="devListItem">21/03/2024 - Moved Tabs and Maps into their own folders (local, Git and Site)</li>
            <li class="devListItem">20/03/2024 - Made Tabs Page visible and protected the AddTab page</li>
            <li class="devListItem">16/03/2024 - Complete rewrite of Countries, fully working</li>
            <li class="devListItem">15/03/2024 - Added SortBy to Countries</li>
            <li class="devListItem">14/03/2024 - Select Amount to display to Countries</li>
            <li class="devListItem">13/03/2024 - Added Pages to Countries</li>
            <li class="devListItem">12/03/2024 - Changed PHP query to prepare</li>
            <li class="devListItem">11/03/2024 - Changed SQL to JOIN</li>     
            <li class="devListItem">10/03/2024 - Started new project. Tabs</li>
            <li class="devListItem">09/03/2024 - Started Dev Log</li>
            <li class="devListItem">09/03/2024 - Finished Card Game</li>
            <li class="devListItem">07/03/2024 - Started Card Game</li>
            <li class="devListItem">06/03/2024 - Finished Reply Field</li>
            <li class="devListItem">04/03/2024 - Started Reply Field</li>
            <li class="devListItem">02/03/2024 - Started Contact Page</li>
            <li class="devListItem">01/03/2024 - Created Portal Home Page</li>
            <li class="devListItem">29/02/2024 - Registered Domain</li>
        </ul>
    </div>
</fieldset>

<script src="scripts/logScript.js"></script>
</body>
</html>