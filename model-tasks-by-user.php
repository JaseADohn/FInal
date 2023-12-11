<?php
function selectTasksByUser($uid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT task_id, task_name, description, priority FROM `task` WHERE user_id = ?");
        $stmt->bind_param("i", $uid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
