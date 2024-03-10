<?php

function addArtist (PDO $db, string $artName) {
    $cleanedName = htmlspecialchars(strip_tags(trim($artName)), ENT_QUOTES);
    if (empty($cleanedName)) {
        return false;
    }

    $sql = "INSERT INTO `portail_tabs_artist` (`artist_name) VALUES (:name)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':name', $cleanedName);
    try {
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        error_log("Error adding message: " . $e->getMessage());
        return false;
    }
}

function getArtists(PDO $db): array {
    $sql = "SELECT * FROM portail_tabs_artist ORDER BY artist_name ASC";
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}





