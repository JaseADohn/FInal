<div class ="row">
  <div class="col">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            color: #333;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
        }

        .user-card {
            background-color: #fff;
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
    </style>
    <h1>Users</h1>
  </div>
  <div class="col-auto">
    <?php
      include "view-user-newform.php";
    ?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Password</th>
      <th></th>
      <th></th>
      <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($user = $users->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $user['user_id']; ?></td>
    <td><?php echo $user['username']; ?></td>
    <td><?php echo $user['password']; ?></td>
    <td><a href ="products-by-user.php?id=<?php echo $user['user_id']; ?>">Products</a></td>
    <td>
    <?php
      include "view-user-editform.php";
    ?>
    </td>
    <td>
      <form method="post" action="">
  <input type="hidden" name="uid" value="<?php echo $user['user_id']; ?>">
  <input type = "hidden" name = "actionType" value = "Delete">
  <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');"> 
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
        </svg>
  </button>
      </form>
    </td>
  </tr>
  <?php
}

?>
    </tbody>
  </table>
</div>
