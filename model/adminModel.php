<?php

function addNewWindow (PDO $port, string $title, string $desc, string $image, string $url) : bool | string {
    $place = count(getAllVisiblePortals($port));
    $place++;
    $sql = "INSERT INTO `portals`
                        (`title`, 
                        `description`, 
                        `img_src`, 
                        `dest_url`,
                        `placement`) 
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $port->prepare($sql);
    $stmt->bindValue(1, $title);
    $stmt->bindValue(2, $desc);
    $stmt->bindValue(3, $image);
    $stmt->bindValue(4, $url);
    $stmt->bindValue(5, $place);
    
    try {
        $stmt->execute();
        return true;
    }catch(Exception $e) {
        return $e->getMessage();
    }
}

function getPortalPlaceForAdmin (PDO $port) : array | bool {
    $sql = "SELECT `id`, `title`, `placement`, `visible`
            FROM `portals`
            ORDER BY `placement`";
    
    try{        
        $query = $port->query($sql);
            if($query->rowCount()===0) return false;
        $result = $query->fetchAll();
            $query->closeCursor();
        return $result;

    }catch(Exception $e) {
        return $e->getMessage();
    }
}

function getOnePortalForUpdate(PDO $port, int $id) : array | bool {
    $sql = "SELECT *
            FROM `portals`
            WHERE `id` = ?";
    
    $stmt = $port->prepare($sql);
    try {
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }catch(Exception $e) {
        return $e->getMessage();
    }
}

function updateExistingWindow (PDO $port, string $title, string $desc, string $image, string $url, int $id) : bool | string {

    $sql = "UPDATE `portals` 
            SET `title`= ?,
                `description`= ?,
                `img_src`= ?,
                `dest_url`= ? 
            WHERE `id` = ?";
    
    $stmt = $port->prepare($sql);
    $stmt->bindValue(1, $title);
    $stmt->bindValue(2, $desc);
    $stmt->bindValue(3, $image);
    $stmt->bindValue(4, $url);
    $stmt->bindValue(5, $id);

    try {
        $stmt->execute();
        return true;
    }catch(Exception $e) {
        return $e->getMessage();
    }
}