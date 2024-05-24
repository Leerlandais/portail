<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <style>
        body {background: linear-gradient(180deg, hsla(208, 33%, 21%, 1) 0%, hsla(211, 36%, 46%, 1) 100%);
              height: 200vh;}
    </style>
    <?php require_once("inc/cssBS.php"); ?>
</head>
<body>
    <div class="container-fluid d-flex flex-column align-items-center">
        <?php include('inc/header.php'); ?>
        <p class="h1 text-center text-danger">
            <?php if (isset($errorMessage)) echo $errorMessage;?>
        </p>
        <?php
            if (isset($_GET["insert"])) {
                include ("inc/insert-form.php");
            }else if (isset($_GET["update"]) && isset($_GET["item"])) {
                include ("inc/update-form.php");
            }else if (isset($_GET["global"])) {
                include ("inc/global-form.php");
            }else if (isset($_GET["devlog"])) {
                include ("inc/devlog-table.php");
            }else if (isset($_GET["updateLog"]) && isset($_GET["log"])) {
                include ("inc/updateLog-form.php");
            }else if (isset($_GET["addNewLog"])) {
                include ("inc/addLog-form.php");
            }else {
                include ("inc/update-table.php");
            }
        ?>

    </div>

    <?php  require_once("inc/jsBS.php"); ?>
</body>
</html>