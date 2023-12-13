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
        <h1>Tasks</h1>
    </div>
    <div class="col-auto">
        <?php include "view-task-newform.php"; ?>
    </div>
</div>

<div class="row row-cols-1 g-4">
    <?php while ($task = $tasks->fetch_assoc()) { ?>
        <div class="col">
            <div class="card custom-card" onmouseover="animateCard(this, 1.1)" onmouseout="animateCard(this, 1)">
                <div class="card-body">
                    <h5 class="card-title">Task ID: <?php echo $task['task_id']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Name: <?php echo $task['task_name']; ?></h6>
                    <p class="card-text">Description: <?php echo $task['description']; ?></p>
                    <p class="card-text">Priority: <?php echo $task['priority']; ?></p>
                    <p class="card-text">User ID: <?php echo $task['user_id']; ?></p>

                    <?php include "view-task-editform.php"; ?>

                    <form method="post" action="" onsubmit="return confirmDelete();">
                        <input type="hidden" name="tid" value="<?php echo $task['task_id']; ?>">
                        <input type="hidden" name="actionType" value="Delete">
                        <button type="submit" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                              <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
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
     function animateCard(card, scale) {
                        anime({
                            targets: card,
                            scale: scale, 
                            duration: 250, 
                            easing: 'easeInOutQuad' 
                                });
                }
    function openEditTaskModal(taskId) {
        var taskName = "<?php echo $task['task_name']; ?>";
        var taskDescription = "<?php echo $task['description']; ?>";
        var taskPriority = "<?php echo $task['priority']; ?>";

        document.getElementById('editTaskModalLabel').innerText = 'Edit Task';
        document.getElementById('taskName').value = taskName;
        document.getElementById('taskDescription').value = taskDescription;
        document.getElementById('taskPriority').value = taskPriority;
        document.getElementById('tid').value = taskId;

        $('#editTaskModal').modal({
            backdrop: false
        });
    }
</script>
