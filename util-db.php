<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'dohnoucr_HW3user', 'Baller120493!!', 'dohnoucr_Final');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
