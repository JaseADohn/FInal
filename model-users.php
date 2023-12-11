<?php
function selectUsers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT user_id, username, password FROM `user` ");
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
        $stmt = $conn->prepare("INSERT INTO `user` (`username`, `password`) VALUES (?, ?)");
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
        $stmt = $conn->prepare("UPDATE `user` SET `username` = ?, `password` = ? WHERE `user_id` = ?");
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
        $stmt = $conn->prepare("DELETE FROM user WHERE `user`.`user_id` = ?");
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
