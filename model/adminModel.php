<?php

function addNewWindow (PDO $db, string $title, string $desc, string $image, string $url) : bool | string {
    $place = count(getAllVisiblePortals($db));
    $place++;
    $sql = "INSERT INTO `portals`
                        (`title`, 
                        `description`, 
                        `img_src`, 
                        `dest_url`,
                        `placement`) 
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $db->prepare($sql);
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

function getPortalPlaceForAdmin (PDO $db) : array | bool {
    $sql = "SELECT `id`, `title`, `placement`, `visible`
            FROM `portals`
            ORDER BY `placement`";
    
    try{        
        $query = $db->query($sql);
            if($query->rowCount()===0) return false;
        $result = $query->fetchAll();
            $query->closeCursor();
        return $result;

    }catch(Exception $e) {
        return $e->getMessage();
    }
}

function getOnePortalForUpdate(PDO $db, int $id) : array | bool {
    $sql = "SELECT *
            FROM `portals`
            WHERE `id` = ?";
    
    $stmt = $db->prepare($sql);
    try {
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }catch(Exception $e) {
        return $e->getMessage();
    }
}

function updateExistingWindow (PDO $db, string $title, string $desc, string $image, string $url, int $id) : bool | string {

    $sql = "UPDATE `portals` 
            SET `title`= ?,
                `description`= ?,
                `img_src`= ?,
                `dest_url`= ? 
            WHERE `id` = ?";
    
    $stmt = $db->prepare($sql);
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

function changePortalVisibility(PDO $db, int $id, int $vis) : bool | string {
    $sql = "UPDATE `portals`
            SET `visible` = ?
            WHERE `id` = ?";

    $stmt = $db->prepare($sql);
    $stmt->bindValue(1, $vis);
    $stmt->bindValue(2, $id);

    try {
        $stmt->execute();
        return true;
    }catch(Exception $e) {
        return $e->getMessage();
    }

}