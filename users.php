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
                    toastr.success("User Created!");
                    setTimeout(function() {
                        location.reload(); // Refresh the page or perform other actions
                    }, 1500);
                    </script>';
                echo '<input type="hidden" name="formSubmitted" value="true">';
            }
            break;
        case "Edit":
            if (updateUser($_POST['uName'], $_POST['uPassword'], $_POST['uid'])) {
                echo '<div class="alert alert-success" role="alert"> User Edited </div>';
            } else {
                echo '<div class="alert alert-danger" role="alert"> User edit failed </div>';
            }
            break;
        case "Delete":
            if (deleteUser($_POST['uid'])) {
                echo '<div class="alert alert-success" role="alert"> User deleted </div>';
            } else {
                echo '<div class="alert alert-danger" role="alert"> User deletion failed </div>';
            }
            break;
    }
}

$users = selectUsers();
include "view-users.php";
include "view-footer.php";
?>

