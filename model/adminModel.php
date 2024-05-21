<?php

function addNewWindow (PDO $db, string $title, string $desc, string $image, string $url) : bool | string {
    $place = count(getPortalPlaceForAdmin($db));
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

function addNewLog (PDO $db, string $date, string $log) : bool | string {
    $sql = "INSERT INTO `devlog`
                        (`date`,
                        `log`)
            VALUES (?, ?)";

    $stmt = $db->prepare($sql);
    $stmt->bindValue(1, $date);
    $stmt->bindValue(2, $log);

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
            ORDER BY `placement` DESC";
    
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

function getOneLogForUpdate(PDO $db, int $id) : array | bool {
    $sql = "SELECT *
            FROM `devlog`
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

function updateExistingWindow (PDO $db, string $title, string $desc, string $image, int $imgW, string $wType, int $imgH, string $hType, string $url, int $id) : bool | string {

    $sql = "UPDATE `portals` 
            SET `title`           = ?,
                `description`     = ?,
                `img_src`         = ?,
                `img_width`       = ?,
                `img_width_type`  = ?,
                `img_height`      = ?,
                `img_height_type` = ?,
                `dest_url`        = ? 
            WHERE `id` = ?";

    $stmt = $db->prepare($sql);
    $stmt->bindValue(1, $title);
    $stmt->bindValue(2, $desc);
    $stmt->bindValue(3, $image);
    $stmt->bindValue(4, $imgW);
    $stmt->bindValue(5, $wType);
    $stmt->bindValue(6, $imgH);
    $stmt->bindValue(7, $hType);
    $stmt->bindValue(8, $url);
    $stmt->bindValue(9, $id);

    try {
        $stmt->execute();
        return true;
    }catch(Exception $e) {
        return $e->getMessage();
    }
}

function updateExistingLog(PDO $db, string $date, string $log, int $id) : bool | string {
    $sql = "UPDATE `devlog`
            SET `date` = ?,
                `log`  = ?
            WHERE `id` = ?";
    
    $stmt = $db->prepare($sql);
    $stmt->bindValue(1, $date);
    $stmt->bindValue(2, $log);
    $stmt->bindValue(3, $id);

    try{
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

function changeLogVisibility(PDO $db, int $id, int $vis) : bool | string {
    $sql = "UPDATE `devlog`
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

function switchPlacements (PDO $db, string $dir, int $place) : bool | string {
    $movePlace = $place + $dir;
    
    $sqlTemp = "UPDATE `portals`
            SET `placement` = 100
            WHERE `placement` = ?";

    $sqlMove = "UPDATE `portals`
                SET `placement` = ?
                WHERE `placement` = ?";

    $sqlFinalise = "UPDATE `portals`
                    SET `placement` = ?
                    WHERE `placement` = 100";

    $stmtTemp = $db->prepare($sqlTemp);

    $stmtMove = $db->prepare($sqlMove);
    $stmtMove->bindValue(1, $place);
    $stmtMove->bindValue(2, $movePlace);

    $stmtFinalise = $db->prepare($sqlFinalise);
    $stmtFinalise->bindValue(1, $movePlace);

    try {
        $stmtTemp->execute([$place]);
        $stmtMove->execute();
        $stmtFinalise->execute();
        return true;
    }catch(Exception $e) {
        return $e->getMessage();
    }
}

function getGlobalCss(PDO $db) : array | bool {
    
    $sql = "SELECT * 
            FROM `global_css`
            ORDER BY `id`";
    
    try{
        $query = $db->query($sql);
        if ($query->rowCount() === 0) return false;
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
    }catch(Exception $e) {
        return $e->getMessage();
    }
}

function updateGlobalCss(PDO $db, string $value, string $selector){  // don't forget to set  : bool | string once done

    $sqlCopy = "SELECT `value` 
                FROM `global_css` 
                WHERE `selector` = ?"; 

    $stmtCopy   = $db->prepare($sqlCopy);
    $stmtCopy->execute([$selector]);
    $result  = $stmtCopy->fetch();

    
    $sqlOld  = "UPDATE `global_css`
                SET `old_val` = ? 
                WHERE `selector` = ?";

    $sqlNew  = "UPDATE `global_css`
                SET `value` = ?
                WHERE `selector` = ?";
    try {
    $stmtOld = $db->prepare($sqlOld);
    $stmtOld->bindValue(1, $result["value"]);
    $stmtOld->bindValue(2, $selector);
    $stmtNew = $db->prepare($sqlNew);
    $stmtNew->bindValue(1, $value);
    $stmtNew->bindValue(2, $selector);
        $stmtOld->execute();
        $stmtNew->execute();
        return $result;
    }catch(Exception $e) {
        return $e->getMessage();
    } 

}

function undoChangeToGlobal($db, $selector) {
    $sqlUndo = "SELECT `old_val`
                FROM `global_css`
                WHERE `selector` = ?";
    $stmtUndo = $db->prepare($sqlUndo);
    $stmtUndo->bindValue(1, $selector);
    $stmtUndo->execute();
    $result = $stmtUndo->fetch();
 
// var_dump($result["old_val"]);
// die();
    $sqlReplace = "UPDATE `global_css`
                   SET `value` = ?
                   WHERE `selector` = ?";
    $stmtReplace = $db->prepare($sqlReplace);
    try {
    
        $stmtReplace->bindValue(1, $result["old_val"]);
        $stmtReplace->bindValue(2, $selector);
        $stmtReplace->execute();
        if ($stmtReplace->rowCount()=== 0) {
            return false;
        }
        return true;
    }catch(Exception $e) {
        return $e->getMessage();
    }
}

function resetGlobalToDefault($db, $selector) {
    $sqlReset = "SELECT `def_val`
                FROM `global_css`
                WHERE `selector` = ?";
    $stmtReset = $db->prepare($sqlReset);
    $stmtReset->bindValue(1, $selector);
    $stmtReset->execute();
    $result = $stmtReset->fetch();
    $sqlReplace = "UPDATE `global_css`
                   SET `value` = ?
                   WHERE `selector` = ?";
    $stmtReplace = $db->prepare($sqlReplace);
    try {
        $stmtReset->execute();
        $stmtReplace->bindValue(1, $result["def_val"]);
        $stmtReplace->bindValue(2, $selector);
        $stmtReplace->execute();
        if ($stmtReplace->rowCount()=== 0) {
            return false;
        }
        return true;
    }catch(Exception $e) {
        return $e->getMessage();
    }
}


function getAllDevLogsForAdmin(PDO $db) : array | bool {
    $sql = "SELECT *
            FROM `devlog`
            ORDER BY `id`";
    
    try{
        $query = $db->query($sql);
        if ($query->rowCount()===0) return false;
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;   
    }catch(Exception $e) {
        $e->getMessage();
    }

}