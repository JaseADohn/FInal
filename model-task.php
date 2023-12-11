<?php
function selectTask() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT task_id, task_name, description, priority, user_id FROM `tasks` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectUserForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT user_id, username FROM `user` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertTask($tName, $uid, $desc, $prio) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `tasks` (`task_name`, `user_id`, 'description', 'priority') VALUES (?, ?)");
        $stmt->bind_param("sisi", $tName, $uid, $desc, $prio);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateTask($tName, $tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `tasks` SET `task_name` = ?, 'description' = ?, 'priority' = ?, WHERE `task_id` = ?");
        $stmt->bind_param("si", $tName, $tid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteTask($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM tasks WHERE `task`.`task_id` = ?");
        $stmt->bind_param("i", $tid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>