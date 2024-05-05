<?php

if (isset($_GET["logout"])) include("../model/logoutModel.php");


if (isset($_GET["home"])) {
    $title = "Welcome Boss";
    include("../view/portailHome.php");
    die();
}

if (isset($_GET["retour"])) {
    include ("../private/admin.home.php");
    die();
}
include ("../private/admin.home.php");
die();