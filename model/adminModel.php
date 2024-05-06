<?php

function addNewWindow (PDO $db, string $title, string $desc, string $image, string $url) {
    var_dump($title, $desc, $image, $url);
    $sql = "INSERT INTO `portals`
                        (`title`, 
                        `description`, 
                        `img_src`, 
                        `dest_url`) 
            VALUES (?, ?, ?, ?)";

    $stmt = $db->prepare($sql);
    
    $stmt->bindValue(1, $title);
    $stmt->bindValue(2, $desc);
    $stmt->bindValue(3, $image);
    $stmt->bindValue(4, $url);

    try {
        $stmt->execute();
        return true;
    }catch(Exception $e) {
        return $e->getMessage();
    }
}