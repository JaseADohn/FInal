<select class="form-select" id="uid" name="uid">
<?php
while ($userItem= $userList->fetch_assoc()) {
?>
    <option value="<?php echo $userItem['user_id']; ?>"><?php echo $userItem['username']; ?></option>
<?php
}
?>
</select>
