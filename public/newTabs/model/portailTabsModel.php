<?php

function getArtists(PDO $db){

    $sql = "SELECT DISTINCT tabs_artist.artist_name, tabs_artist.artist_id
    FROM    tabs_artist
    JOIN    tabs_song ON tabs_artist.artist_id = tabs_song.artists_id
    ORDER BY artist_name";

    /*
    $sql = "SELECT DISTINCT  tabs_artist.artist_name, tabs_song.song_name, tabs_tab.full_song
            FROM    tabs_artist
            JOIN    tabs_song ON tabs_artist.artist_id = tabs_song.artists_id
            JOIN    tabs_tab ON tabs_song.tabs_id = tabs_tab.tab_id
            ORDER BY artist_name";
    */
    $stmt = $db->prepare($sql);
    
    try {
    
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    
    }catch (PDOException $e){
    
        error_log("Error getting tabs: " . $e->getMessage());
        return false;
    
    }

} 

function getSongs(PDO $db){

    $sql = "SELECT tabs_song.song_name, tabs_song.artists_id, tabs_artist.artist_id, tabs_tab.full_song, tabs_tab.tab_id, tabs_song.tabs_id
    FROM    tabs_song
    JOIN    tabs_artist ON tabs_artist.artist_id = tabs_song.artists_id
    JOIN    tabs_tab ON tabs_song.tabs_id = tabs_tab.tab_id
    ORDER BY song_name";

    $stmt = $db->prepare($sql);
    
    try {
    
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    
    }catch (PDOException $e){
    
        error_log("Error getting tabs: " . $e->getMessage());
        return false;
    
    }

} 

function getTabs(PDO $db, $song) {

    $sql = "SELECT *
    FROM    tabs_tab
    JOIN    tabs_song ON tabs_tab.tab_id = tabs_song.tabs_id";

    $stmt = $db->prepare($sql);
    
    try {
    
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    
    }catch (PDOException $e){
    
        error_log("Error getting tabs: " . $e->getMessage());
        return false;
    
    }
}


function checkPass($passToCheck) {
    $cleanedPass = htmlspecialchars(strip_tags(trim($passToCheck)), ENT_QUOTES);
    if ($cleanedPass == MY_TABS_PWD) {
        return true;
    }else {
        header ("public");
    }
}








/*
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

function getTabs(PDO $db): array {
    $sql = "SELECT * FROM portail_tabs_tab ORDER BY id ASC";
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

*/
