<?php
require_once("util-db.php");
require_once("model-users.php");

$pageTitle = "Users";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertUser($_POST['uName'], $_POST['uPassword'])) {

                echo '<script src="path/to/anime.js"></script>';

                echo '<script>
                        var popUp = document.createElement("div");
                        popUp.innerHTML = "User added!";
                        popUp.classList.add("popup");
                        document.body.appendChild(popUp);

                        anime({
                            targets: ".popup",
                            opacity: [0, 1],
                            translateY: [-100, 0],
                            duration: 500,
                            easing: "easeInOutQuad",
                            delay: 200
                        });

                        setTimeout(function() {
                            anime({
                                targets: ".popup",
                                opacity: [1, 0],
                                translateY: [0, -100],
                                duration: 500,
                                easing: "easeInOutQuad",
                                complete: function(anim) {
                                    document.body.removeChild(popUp);
                                }
                            });
                        }, 3000);
                    </script>';
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

