<?php
include('header.php');    
?>
<div class="card">
  <h3>Create Student</h3>
   
  <form method="post" action="createstudentnew.php">
    <label>Name<br><input class="input" type="text" name="name" value="<?php echo htmlspecialchars($values['name'] ?? ''); ?>" required></label>
    <label>Email<br><input class="input" type="text" name="email" value="<?php echo htmlspecialchars($values['email'] ?? ''); ?>" required></label>
    <label>Class<br><input class="input" type="text" name="class" value="<?php echo htmlspecialchars($values['class'] ?? ''); ?>" required></label>
    <label>Age<br><input class="input" type="text" name="age" value="<?php echo htmlspecialchars($values['age'] ?? ''); ?>" required></label>
	<p> </P>
    <div class="actions">
        <input type="submit" class="btn" value="add" name="createstudent">
      
      <a class="btn" href="liststudents.php">Cancel</a>
    </div>
  </form>
</div>
<?php include  'footer.php'; ?>
