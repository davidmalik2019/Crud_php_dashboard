<?php
include('header.php');    
?>
<div class="card">
  <h3>Create Admins</h3>
   
  <form method="post" action="createadminnew.php">
    <label>Name<br><input class="input" type="text" name="name" value="<?php echo htmlspecialchars($values['name'] ?? ''); ?>" required></label>
    <label>Email<br><input class="input" type="text" name="email" value="<?php echo htmlspecialchars($values['email'] ?? ''); ?>" required></label>
    <label>Role<br><input class="input" type="text" name="role" value="<?php echo htmlspecialchars($values['role'] ?? ''); ?>" required></label>
    <label>Phone<br><input class="input" type="text" name="phone" value="<?php echo htmlspecialchars($values['phone'] ?? ''); ?>" required></label>
	<p> </P>
    <div class="actions">

        <input type="submit" class="btn" value="add" name="createadmin">
      
      <a class="btn" href="listadmins.php">Cancel</a>
    </div>
  </form>
</div>
<?php include  'footer.php'; ?>
