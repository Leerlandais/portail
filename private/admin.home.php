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
        <p class="h1 text-center text-danger"></p>
        

    </div>

    <?php require_once("inc/jsBS.php"); ?>
</body>
</html>