<?php
function selectTasksByUser($uid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT p.product_id, product_name, p.category_id, c.category_name, orders_amount, order_status FROM `product` p join orders o on o.product_id = p.product_id JOIN category c ON c.category_id = p.category_id where o.user_id=?");
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
