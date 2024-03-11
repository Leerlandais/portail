<?php
function getArtists(PDO $db): array {
    $sql = "SELECT * FROM portail_tabs_artist ORDER BY artist_name ASC";
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}


function getSongs(PDO $db): array {
    $sql = "SELECT * FROM portail_tabs_song ORDER BY id ASC";
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}

function addArtist (PDO $db, string $artName) {
    $cleanedName = htmlspecialchars(strip_tags(trim($artName)), ENT_QUOTES);
    if (empty($cleanedName)) {
        return false;
    }

    $sql = "INSERT INTO `portail_tabs_artist` (`artist_name`) VALUES (:name)";
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

function addSong (PDO $db, string $artistId, string $songName) {
    $cleanedID = htmlspecialchars(strip_tags(trim($artistId)), ENT_QUOTES);
    $cleanedSongName = htmlspecialchars(strip_tags(trim($songName)), ENT_QUOTES);
    if (empty($cleanedSongName) || empty($cleanedID)) {
        return false;
    }

    $sql = "INSERT INTO `portail_tabs_song` (`artist_id`, `song_name`) VALUES (:artID, :songName)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':artID', $cleanedID);
    $stmt->bindParam(':songName', $cleanedSongName);
    try {
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        error_log("Error adding message: " . $e->getMessage());
        return false;
    }
}



