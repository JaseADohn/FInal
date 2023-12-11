<?php
require_once("util-db.php");
require_once("model-users.php");

$pageTitle = "Users";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
    case "Add":
      if (insertUser($_POST['uName'], $_POST['uPassword'])) {
                echo '<script>
                        Swal.fire({
                            icon: "success",
                            title: "User Created!",
                            showConfirmButton: false,
                            timer: 1500
                        }).    then(function() {
                            location.reload(); // Refresh the page or do any other action
                        });
                      </script>';
                echo '<input type="hidden" name="formSubmitted" value="true">';
            }
            break;
        case "Edit":
      if (updateUser($_POST['uName'], $_POST['uPassword'], $_POST['uid'])) {
          echo '<div class="alert alert-success" role="alert"> User Edited </div>';
        } 
        break;
    case "Delete":
      if (deleteUser($_POST['uid'])) {
          echo '<div class="alert alert-success" role="alert"> User deleted </div>';
        } 
        break;
    }
}

$users = selectUsers();
include "view-users.php";
include "view-footer.php";
?>

