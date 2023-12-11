

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newTaskModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
        <path d="M8 1.5a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V2a.5.5 0 0 1 .5-.5zM1.5 8a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1H2a.5.5 0 0 1-.5-.5zM8 14.5a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0v-6a.5.5 0 0 1 .5-.5zM14.5 8a.5.5 0 0 1 .5.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
    </svg>
    Add Task
</button>


<div class="modal fade" id="newTaskModal" tabindex="-1" aria-labelledby="newTaskModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newTaskModalLabel">New Task</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
            <div class="mb-3">
              <label for="tName" class="form-label">Task Name</label>
              <input type="text" class="form-control" id="tName" name="tName">
            </div>
          <div class="mb-3">
              <label for="desc" class="form-label">description</label>
              <input type="text" class="form-control" id="desc" name="desc">
          </div>
          <div class="mb-3">
              <label for="prio" class="form-label">Priority</label>
              <input type="text" class="form-control" id="prio" name="prio">
          </div>
              <div class="mb-3">
              <label for="uid" class="form-label">User ID</label>
<?php
$userList = selectUserForInput();
include "view-user-input-list.php";

?>
            </div>
                <input type="hidden" name="actionType" value="Add">
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
