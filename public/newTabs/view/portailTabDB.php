<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="../public/styles/tabs.css">
    
</head>
<body>
    <?php
// var_dump($artists);
?>
<h1>My Favourite Tablatures</h1>
<a href="?pg=tabsLee" class="backTabs"><h4>Back to Tabs</h4></a>

<form action="" method="POST">
    <input type="password" name="pwd" id="pwd">
    <button type="submit">Enter</button>
</form>

<?php if (isset($checkedPwd)) {
    include("../../../view/inc/header.php");
}else {
    echo "Enter the Password";
}
?>
<script src="scripts/tabs.js"></script>
</body>
</html>

