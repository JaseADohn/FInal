<?php
require_once("util-db.php");
require_once("model-tasks-by-user.php");
$pageTitle = "tasks by user";
include "view-header.php";

$tasks = selectTasksByUser($_GET['id']);
include "view-tasks-by-user.php";

include "view-footer.php";
?>
