<?php
include 'config.php';

$sql = "SELECT * FROM contacts";
$stmt = $conn->query($sql);
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma'lumotlar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Kontaktlar Ro'yxati</h1>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Ism</th>
                    <th>Tel raqam</th>
                    <th>Xabar</th>
                    <th>Amallar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td><?= $contact['id'] ?></td>
                        <td><?= htmlspecialchars($contact['name']) ?></td>
                        <td><?= htmlspecialchars($contact['contact']) ?></td>
                        <td><?= htmlspecialchars($contact['message']) ?></td>
                        <td>
                            <a href="delete.php?id=<?= $contact['id'] ?>" class="btn btn-sm btn-danger"
                               onclick="return confirm('Bu ma\'lumotni o‘chirishni tasdiqlaysizmi?')">O'chirish</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
