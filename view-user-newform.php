<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newTaskModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
        <path d="M8 1.5a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V2a.5.5 0 0 1 .5-.5zM1.5 8a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1H2a.5.5 0 0 1-.5-.5zM8 14.5a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0v-6a.5.5 0 0 1 .5-.5zM14.5 8a.5.5 0 0 1 .5.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
    </svg>
    Add User
</button>


<div class="modal fade" id="newUserModal" tabindex="-1" aria-labelledby="newUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newUserModalLabel">New User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
            <div class="mb-3">
              <label for="uName" class="form-label">User Name</label>
              <input type="text" class="form-control" id="uName" name="uName">
            </div>
              <div class="mb-3">
              <label for="uPassword" class="form-label">User Password</label>
              <input type="text" class="form-control" id="uPassword" name="uPassword">
            </div>
                <input type="hidden" name="actionType" value="Add">
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
