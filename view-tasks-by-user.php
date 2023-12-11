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
    <td><?php echo $product['task_id']; ?></td>
    <td><?php echo $product['task_name']; ?></td>
    <td><?php echo $product['description']; ?></td>
    <td><?php echo $product['priority']; ?></td>
  </tr>
  <?php
}

?>
    </tbody>
  </table>
</div>
