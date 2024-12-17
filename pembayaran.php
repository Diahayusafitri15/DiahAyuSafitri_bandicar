<?php
include 'koneksi.php'; // Sertakan koneksi database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_pemesan = $_POST['id_pemesan'];
    $jumlah_bayar = $_POST['jumlah_bayar'];
    $metode_pembayaran = $_POST['metode_pembayaran'];

    // Validasi data input
    if (!empty($id_pemesan) && !empty($jumlah_bayar) && !empty($metode_pembayaran)) {
        // Gunakan koneksi $mysqli yang sudah didefinisikan di koneksi.php
        $stmt = $mysqli->prepare("INSERT INTO pembayaran (id_pemesan, jumlah_bayar, metode_pembayaran) VALUES (?, ?, ?)");
        $stmt->bind_param("ids", $id_pemesan, $jumlah_bayar, $metode_pembayaran);

        if ($stmt->execute()) {
            echo "Pembayaran berhasil disimpan.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Harap isi semua data pembayaran.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembayaran</title>
</head>
<body>
    <h1>Form Pembayaran</h1>
    <form method="POST" action="">
        <label for="id_pemesan">ID Pemesan:</label>
        <input type="number" name="id_pemesan" required><br><br>

        <label for="jumlah_bayar">Jumlah Bayar:</label>
        <input type="number" step="0.01" name="jumlah_bayar" required><br><br>

        <label for="metode_pembayaran">Metode Pembayaran:</label>
        <select name="metode_pembayaran" required>
            <option value="Transfer Bank">Transfer Bank</option>
            <option value="Kartu Kredit">Kartu Kredit</option>
            <option value="E-Wallet">E-Wallet</option>
            <option value="Tunai">Tunai</option>
        </select><br><br>

        <button type="submit">Simpan Pembayaran</button>
    </form>
</body>
</html>
