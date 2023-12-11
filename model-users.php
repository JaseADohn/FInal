<?php
function selectUsers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT user_id, username, password FROM `users` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertUser($uName, $uPassword) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `users` (`username`, `password`) VALUES (?, ?)");
        $stmt->bind_param("ss", $uName, $uPassword);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateUser($uName, $uPassword, $uid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `users` SET `username` = ?, `password` = ? WHERE `user_id` = ?");
        $stmt->bind_param("ssi", $uName, $uPassword, $uid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteUser($uid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM users WHERE `user`.`user_id` = ?");
        $stmt->bind_param("i", $uid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>
