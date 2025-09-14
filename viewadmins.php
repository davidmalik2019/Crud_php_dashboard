<?php
include 'db.php';
include 'header.php';



$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$stmt = $pdo->prepare("SELECT * FROM admins WHERE id = ?");
$stmt->execute([$id]);
$item = $stmt->fetch();
if (!$item) { http_response_code(404); echo "<p class='empty'>Admin not found.</p>"; include 'footer.php'; exit; }
?>
<div class="card">
  <h3>Admin Details</h3>
  <p><span class="badge">ID</span> <?php echo htmlspecialchars($item['id']); ?></p>
  <p><span class="badge">Full Name</span> <?php echo htmlspecialchars($item['name']); ?></p>
  <p><span class="badge">Email</span> <?php echo htmlspecialchars($item['email']); ?></p>
  <p><span class="badge">Role</span> <?php echo htmlspecialchars($item['role']); ?></p>
  <p><span class="badge">Phone</span> <?php echo htmlspecialchars($item['phone']); ?></p>
  <div class="actions" style="margin-top:12px">
    <a class="btn" href="listadmins.php">Back</a>
    <a class="btn ok" href="editadmins.php?id=<?php echo $item['id']; ?>">Edit</a>
    <a class="btn danger" href="deleteadmins.php?id=<?php echo $item['id']; ?>" onclick="return confirm('Delete this Admin?');">Delete</a>
  </div>
</div>
<?php include 'footer.php'; ?>