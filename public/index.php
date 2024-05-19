<?php
session_start();
require_once "../config.php";
require_once("../control/dbConnectControl.php");
require_once("../model/portailModel.php");
require_once("../model/laundryModel.php");
require_once("../model/loginModel.php");
require_once("../control/jsonController.php");



if (isset($_SESSION["id"]) && $_SESSION["id"] === session_id()) {
    require_once ("../control/private.control.php");
    die();
}else {
    require_once("../control/public.control.php");
}

$db = null;