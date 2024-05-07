<?php
try {

    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

} catch (Exception) {
    die($errorMessage = "Problem connecting to the DB");
}


try {

    $port = new PDO(DB_DRIVERS . ":host=" . DB_HOSTS . ";dbname=" . DB_NAMES . ";charset=" . DB_CHARSETS . ";port=" . DB_PORTS, DB_LOGINS, DB_PWDS);
    $port->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

} catch (Exception) {
    die($errorMessage = "Problem connecting to the DB");
}

