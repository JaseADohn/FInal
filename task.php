<?php
require_once("util-db.php");
require_once("model-task.php");
$pageTitle = "Tasks";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
    case "Add":
      if (insertTask($_POST['tName'], $_POST['uid'], $_POST['desc'], $_POST['prio'])) {
          echo '<div class="alert alert-success" role="alert"> Product added </div>';
        } 
        break;
        case "Edit":
      if (updateTask($_POST['tName'], $_POST['tid'])) {
          echo '<div class="alert alert-success" role="alert"> Product Edited </div>';
        } 
        break;
    case "Delete":
      if (deleteTask($_POST['tid'])) {
          echo '<div class="alert alert-success" role="alert"> Product deleted </div>';
        } 
        break;
    }
}

$products = selectTask();
include "view-task.php";

include "view-footer.php";
?>
