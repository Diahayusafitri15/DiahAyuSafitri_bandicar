<?php
include 'koneksi.php';

// Query data pemesan
$query = "SELECT * FROM pemesan";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemesan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="d-flex">
        <?php include 'sidebar.php'; ?>
        <div class="p-4" style="flex: 1;">
            <h2>Data Pemesan</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Pemesan</th>
                        <th>Alamat</th>
                        <th>Kontak</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id']) ?></td>
                            <td><?= htmlspecialchars($row['nama_pemesan']) ?></td>
                            <td><?= htmlspecialchars($row['Alamat']) ?></td>
                            <td><?= htmlspecialchars($row['kontak']) ?></td>
                            <td>
                                <a href="edit_pemesan.php?id=<?= urlencode($row['id']) ?>" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
