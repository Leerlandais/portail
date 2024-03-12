<?php

function getCountries(PDO $db): array {
    $sql = "SELECT * FROM portail_countries ORDER BY id ASC"; 
    $stmt = $db->prepare($sql);
    try {
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }catch (PDOException $e){
        error_log("Error getting messages: " . $e->getMessage());
        return false;
    }
    return [];
}