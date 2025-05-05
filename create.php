<?php
include 'config.php'; // Ma'lumotlar bazasi ulanishi

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Formadagi ma'lumotlarni olish
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];

    // Ma'lumotni bazaga qo'shish
    $sql = "INSERT INTO contacts (name, contact, message) VALUES (:name, :contact, :message)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'name' => $name,
        'contact' => $contact,
        'message' => $message
    ]);

    // Foydalanuvchini index.php sahifasiga qaytarish
    header("Location: ../index.html");
    exit; // Qayta yo'naltirishdan keyin kod davom etmasligi uchun
}
?>
