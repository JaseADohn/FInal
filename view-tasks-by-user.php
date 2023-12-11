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
    </style>
<h1>Tasks by user</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Task ID</th>
      <th>Name</th>
      <th>Description</th>
      <th>Priority</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($task = $tasks->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $task['task_id']; ?></td>
    <td><?php echo $task['task_name']; ?></td>
    <td><?php echo $task['description']; ?></td>
    <td><?php echo $task['priority']; ?></td>
  </tr>
  <?php
}

?>
    </tbody>
  </table>
</div>
