<div class="row">
    <div class="col">
        <style>
            body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(45deg, #ffcc00, #ffcc00 40%, #ffd699 40%, #ffd699 60%, #ff6666 60%, #ff6666);
        }

        h1 {
            color: #333;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 20px;
            border-radius: 8px;
        }

       .user-card {
                background-color: rgba(255, 255, 255, 0.8);
                margin: 20px;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                text-align: center;
            }

            footer {
                margin-top: 20px;
                text-align: center;
                color: #fff;
            }
            .custom-card {
                background-color: #f8f9fa; 
                border: 1px solid #dee2e6;
                border-radius: 8px;
                margin-bottom: 20px;
            }

            .card-body {
                padding: 20px;
            }
        </style>
        <h1>Users</h1>
    </div>
    <div class="col-auto">
        <?php
        include "view-user-newform.php";
        ?>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php while ($user = $users->fetch_assoc()) { ?>
        <div class="col">
            <div class="card hover-card" style="width: 18rem; margin-bottom: 20px;" onmouseover="animateCard(this, 1.1)" onmouseout="animateCard(this, 1)">
                <div class="card-body">
                    <h5 class="card-title">User ID: <?php echo $user['user_id']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Username: <?php echo $user['username']; ?></h6>
                    <p class="card-text">Password: <?php echo $user['password']; ?></p>
                    <a href="tasks-by-user.php?id=<?php echo $user['user_id']; ?>" class="btn btn-info" style="text-decoration: none;">View Tasks</a>

                    <div class="card-link">
                        <?php include "view-user-editform.php"; ?>
                    </div>
                    
                    <form method="post" action="" onsubmit="return confirmDelete();">
                        <input type="hidden" name="uid" value="<?php echo $user['user_id']; ?>">
                        <input type="hidden" name="actionType" value="Delete">
                        <button type="submit" class="btn btn-danger btn-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                            </svg>
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<script>
    function openEditModal(userId) {
        var userName = "<?php echo $user['username']; ?>";
        var userPassword = "<?php echo $user['password']; ?>";

        document.getElementById('editUserModalLabel').innerText = 'Edit User';
        document.getElementById('uName').value = userName;
        document.getElementById('uPassword').value = userPassword;
        document.getElementById('uid').value = userId;

        $('#editUserModal').modal({
            backdrop: false
        });
    }

   function confirmDelete() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            return result.isConfirmed;
        });
    }

     function animateCard(card, scale) {
                        anime({
                            targets: card,
                            scale: scale, 
                            duration: 300, 
                            easing: 'easeInOutQuad' 
                                });
                }
</script>
