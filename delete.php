<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM contacts WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute(['id' => $id]);

echo "Ma'lumot muvaffaqiyatli o'chirildi!";
?>
