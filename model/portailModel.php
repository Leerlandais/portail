<?php

function getMessages(PDO $db): array
{
    $sql = "SELECT * FROM portail_messages ORDER BY id DESC"; 
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result; 
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