<?php
include 'db.php';
include 'header.php';

$stmt = $pdo->query("SELECT * FROM students");
$rows = $stmt->fetchAll();
?>
<div class="card">
  <div class="actions" style="justify-content:space-between;align-items:center">
    <h3 style="margin:0">Students List</h3>
    <a href="excelstudent.php"><input type="submit" name="excel" value="Download Data (Excel)" class="btn primary"></a>
    <a class="btn primary" href="createstudents.php">Add Student</a>
  </div>
  <?php if (count($rows) === 0): ?>
    <p class="empty">No students found.</p>
  <?php else: ?>
  <table class="table">
    <thead>
      <tr class="row">
        <th>Name</th><th>Email</th><th>Class</th><th>Age</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($rows as $r): ?>
      <tr class="row">
        <td><?php echo htmlspecialchars($r['name'] ?? ''); ?></td><td><?php echo htmlspecialchars($r['email'] ?? ''); ?></td><td><?php echo htmlspecialchars($r['class'] ?? ''); ?></td><td><?php echo htmlspecialchars($r['age'] ?? ''); ?></td>
        <td class="actions">
          <a class="btn" href="viewstudent.php?id=<?php echo $r['id']; ?>">View</a>
          <a class="btn ok" href="editstudents.php?id=<?php echo $r['id']; ?>">Edit</a>
          <a class="btn danger" href="deletestudents.php?id=<?php echo $r['id']; ?>" onclick="return confirm('Delete this Student?');">Delete</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?php endif; ?>
</div>
<?php include 'footer.php'; ?>
