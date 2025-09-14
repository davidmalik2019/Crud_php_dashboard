<?php
include 'db.php';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$stmt = $pdo->prepare("DELETE FROM teachers WHERE id = ?");
$stmt->execute([$id]);
header("Location: list.php");
exit;
