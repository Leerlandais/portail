<?php


if (isset($_GET['json'])) {
    $datas = getAllCss($db);
    if (!is_string($datas)) {
        echo json_encode($datas);
    }
    exit();
}

