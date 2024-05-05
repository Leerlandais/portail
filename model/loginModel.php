<?php

function userLogin(PDO $db, string $name, string $pass) : bool | string {

    
    $sql = "SELECT *
            FROM `users`
            WHERE `nom` = ?";

$stmt = $db->prepare($sql);
$stmt->bindValue(1, $name);

    try {
        $stmt->execute();
            if($stmt->rowCount()===0) return false;
                $result = $stmt->fetch();

            if (password_verify($pass, $result['pwd'])) {
                $_SESSION = $result;
                unset($_SESSION['pwd']);
                $_SESSION['id'] = session_id();
                
                return true;
            }else {
                $errorMessage = "bad pwd";
                return $errorMessage;
            }
        }catch (Exception $e) {
            return $e->getMessage();
        } 
}