<?php
include 'db.php';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$stmt = $pdo->prepare("DELETE FROM admins WHERE id = ?");
$stmt->execute([$id]);
header("Location: listadmins.php");
exit;
