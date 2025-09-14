<?php
include 'db.php';
include 'header.php';

$stmt = $pdo->query("SELECT * FROM teachers");
$rows = $stmt->fetchAll();
?>
<div class="card">
  <div class="actions" style="justify-content:space-between;align-items:center">
    <h3 style="margin:0">Teachers List</h3>
     <a href="excelteacher.php"><input type="submit" name="excel" value="Download Data (Excel)" class="btn primary"></a>
    <a class="btn primary" href="createteacher.php">Add Teacher</a>
  </div>
  <?php if (count($rows) === 0): ?>
    <p class="empty">No teachers found.</p>
  <?php else: ?>
  <table class="table">
    <thead>
      <tr class="row">
        <th>Name</th><th>Email</th><th>Subject</th><th>Phone</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($rows as $r): ?>
      <tr class="row">
        <td><?php echo htmlspecialchars($r['name'] ?? ''); ?></td><td><?php echo htmlspecialchars($r['email'] ?? ''); ?></td><td><?php echo htmlspecialchars($r['subject'] ?? ''); ?></td><td><?php echo htmlspecialchars($r['phone'] ?? ''); ?></td>
        <td class="actions">
          <a class="btn" href="view.php?id=<?php echo $r['id']; ?>">View</a>
          <a class="btn ok" href="edit.php?id=<?php echo $r['id']; ?>">Edit</a>
          <a class="btn danger" href="delete.php?id=<?php echo $r['id']; ?>" onclick="return confirm('Delete this Student?');">Delete</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?php endif; ?>
</div>
<?php include 'footer.php'; ?>
