<?php
include 'koneksi.php';

$query = "SELECT p.id, u.username, m.nama_mobil, p.tanggal_pesan 
          FROM pesanan p
          JOIN users u ON p.user_id = u.id
          JOIN mobil m ON p.mobil_id = m.id";
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pesanan</title>
</head>
<body>
    <h2>Daftar Pesanan</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Pemesan</th>
            <th>Nama Mobil</th>
            <th>Tanggal Pesan</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['id']) ?></td>
            <td><?= htmlspecialchars($row['username']) ?></td>
            <td><?= htmlspecialchars($row['nama_mobil']) ?></td>
            <td><?= htmlspecialchars($row['tanggal_pesan']) ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
