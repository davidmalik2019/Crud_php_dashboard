<?php
include 'db.php';
include 'header.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$stmt = $pdo->prepare("SELECT * FROM students WHERE id = ?");
$stmt->execute([$id]);
$item = $stmt->fetch();
if (!$item) { http_response_code(404); echo "<p class='empty'>Student not found.</p>"; include __DIR__ . '/../includes/footer.php'; exit; }
?>
<div class="card">
  <h3>Student Details</h3>
  <p><span class="badge">ID</span> <?php echo htmlspecialchars($item['id']); ?></p>
  <p><span class="badge">Name</span> <?php echo htmlspecialchars($item['name']); ?></p>
  <p><span class="badge">Email</span> <?php echo htmlspecialchars($item['email']); ?></p>
  <p><span class="badge">Class</span> <?php echo htmlspecialchars($item['class']); ?></p>
  <p><span class="badge">Age</span> <?php echo htmlspecialchars($item['age']); ?></p>
  <div class="actions" style="margin-top:12px">
    <a class="btn" href="liststudents.php">Back</a>
    <a class="btn ok" href="editstudents.php?id=<?php echo $item['id']; ?>">Edit</a>
    <a class="btn danger" href="deletestudents.php?id=<?php echo $item['id']; ?>" onclick="return confirm('Delete this Student?');">Delete</a>
  </div>
</div>
<?php include  'footer.php'; ?>
