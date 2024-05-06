<?php
session_start();
require_once "../config.php";
require_once("../control/dbConnectControl.php");
require_once("../model/portailModel.php");
require_once("../model/laundryModel.php");
require_once("../model/loginModel.php");
try {


    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}    


if (isset($_SESSION["id"]) && $_SESSION["id"] === session_id()) {
    require_once ("../control/private.control.php");
    die();
}else {
    require_once("../control/public.control.php");
}
