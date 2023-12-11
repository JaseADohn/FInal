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
                    document.addEventListener("DOMContentLoaded", function() {
                        $("#userCreatedModal").modal("show");
                    });
               </script>';
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

<div class="modal fade" id="userCreatedModal" tabindex="-1" aria-labelledby="userCreatedModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userCreatedModalLabel">User Created!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Optionally, you can add more details or buttons here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
