<?php

function getMessages(PDO $db): array
{
    /*
    $sql = "SELECT * FROM portail_messages ORDER BY id DESC"; 
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result; 
    */
    $sql = "SELECT * FROM portail_messages ORDER BY id DESC"; 
    $stmt = $db->prepare($sql);
    try {
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }catch (PDOException $e){
        error_log("Error getting messages: " . $e->getMessage());
        return false;
    }
}

function getReplies(PDO $db): array
{
    /*
    $sql = "SELECT * FROM portail_replies, portail_messages WHERE portail_replies.parent_message_id=portail_messages.id ORDER BY date_reply ASC"; 
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result; 
    */
    $sql = "SELECT * FROM portail_replies JOIN portail_messages ON portail_replies.parent_message_id = portail_messages.id ORDER BY date_reply ASC"; 
    $stmt = $db->prepare($sql);
    try {
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }catch (PDOException $e){
        error_log("Error getting replies: " . $e->getMessage());
        return false;
    }
}

/*
function addMessage(PDO $db,
string $firstname,
string $email,
string $message
)
{
    $firstN = htmlspecialchars(strip_tags(trim($firstname)), ENT_QUOTES);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $text = htmlspecialchars(strip_tags(trim($message)),ENT_QUOTES);
    if (empty($firstN) || $email === false || empty($text)) {
        return false;
    }
    
    $sql = "INSERT INTO `portail_messages` (`name`, `email`, `message`) VALUES ('$firstN', '$email', '$text')";
    try {
        $db->exec($sql);
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

*/

function addMessage(PDO $db, string $firstname, string $email, string $message) {
    $cleanedFirstName = htmlspecialchars(strip_tags(trim($firstname)), ENT_QUOTES);
    $cleanedEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    $cleanedMessage = htmlspecialchars(strip_tags(trim($message)), ENT_QUOTES);

    if (empty($cleanedFirstName) || $cleanedEmail === false || empty($cleanedMessage)) {
        return false;
    }

    $sql = "INSERT INTO `portail_messages` (`name`, `email`, `message`) VALUES (:firstname, :email, :message)";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':firstname', $cleanedFirstName);
    $stmt->bindParam(':email', $cleanedEmail);
    $stmt->bindParam(':message', $cleanedMessage);

    try {

        $stmt->execute();
        return true;
    } catch (PDOException $e) {

        error_log("Error adding message: " . $e->getMessage());
        return false;
    }
}

function addReply(PDO $db, string $firstname, string $parent, string $message) {
    $cleanedFirstName = htmlspecialchars(strip_tags(trim($firstname)), ENT_QUOTES);
    $cleanedParent =  htmlspecialchars(strip_tags(trim($parent)), ENT_QUOTES);
    $cleanedMessage = htmlspecialchars(strip_tags(trim($message)), ENT_QUOTES);

    if (empty($cleanedFirstName) || empty($cleanedMessage)) {
        return false;
    }

    $sql = "INSERT INTO `portail_replies` (`reply_name`, `parent_message_id`, `reply_to_parent`) VALUES (:firstname, :parentId, :message)";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':firstname', $cleanedFirstName);
    $stmt->bindParam(':parentId', $cleanedParent);
    $stmt->bindParam(':message', $cleanedMessage);

    try {

        $stmt->execute();
        return true;
    } catch (PDOException $e) {

        error_log("Error adding message: " . $e->getMessage());
        return false;
    }
}