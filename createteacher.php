<?php
include('header.php');    
?>
<div class="card">
  <h3>Create Teacher</h3>

  <form method="post" action="createteachernew.php">
    <label>Name<br><input class="input" type="text" name="name" value="<?php echo htmlspecialchars($values['name'] ?? ''); ?>" required></label>
    <label>Email<br><input class="input" type="text" name="email" value="<?php echo htmlspecialchars($values['email'] ?? ''); ?>" required></label>
    <label>Subject<br><input class="input" type="text" name="subject" value="<?php echo htmlspecialchars($values['subject'] ?? ''); ?>" required></label>
    <label>Phone<br><input class="input" type="text" name="phone" value="<?php echo htmlspecialchars($values['phone'] ?? ''); ?>" required></label>
	<p> </P>
    <div class="actions">
        <input type="submit" class="btn" value="Add" name="createteacher">
      
      <a class="btn" href="list.php">Cancel</a>
    </div>
  </form>
</div>
<?php include  'footer.php'; ?>
