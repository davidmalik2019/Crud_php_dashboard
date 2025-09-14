<?php
//header.php/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>School Details</title>
  <link rel="stylesheet" href="styles.css"/>
</head>
<body>
<header class="topbar">
  <div class="container">
   <center> <h1>Valid Crown Internation College, Bwari</h1></center>
    <nav class="nav">
      <a href="index.php">Dashboard</a>
      <a href="liststudents.php">Students</a>
      <a href="list.php">Teachers</a>
      <a href="listadmins.php">Admins</a>
    </nav>
  </div>
</header>
<main class="container">

<section class="grid">
  <div class="card">
    <h3>Students</h3>
    <p class="helper">Manage student records (create, view, edit, delete).</p>
    <div class="actions">
      <a class="btn primary" href="createstudents.php">Add Student</a>
      <a class="btn" href="liststudents.php">View All</a>
    </div>
  </div>
  <div class="card">
    <h3>Teachers</h3>
    <p class="helper">Manage teacher records and subjects taught.</p>
    <div class="actions">
      <a class="btn primary" href="create.php">Add Teacher</a>
      <a class="btn" href="list.php">View All</a>
    </div>
  </div>
  <div class="card">
    <h3>Admins</h3>
    <p class="helper">Manage admin staff and roles.</p>
    <div class="actions">
      <a class="btn primary" href="createadmins.php">Add Admin</a>
      <a class="btn" href="listadmins.php">View All</a>
    </div>
  </div>
</section>
<?php
// includes/footer.php
?>
</main>
<footer class="footer">
  <div class="container">
    <center><p>&copy; <?php echo date('Y'); ?> Valid Crown Internation College, Bwari</p></center>
  </div>
</footer>
</body>
</html>

