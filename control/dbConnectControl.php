<?php
try {

    $log = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
    $log->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

} catch (Exception) {
    die($errorMessage = "Problem connecting to the DB");
}

/*
try {

    $log = new PDO(DB_DRIVERS . ":host=" . DB_HOSTS . ";dbname=" . DB_NAMES . ";charset=" . DB_CHARSETS . ";port=" . DB_PORTS, DB_LOGINS, DB_PWDS);
    $log->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

} catch (Exception) {
    die($errorMessage = "Problem connecting to the DB");
}

*/