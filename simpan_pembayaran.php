<?php
include 'koneksi.php'; // Sertakan koneksi database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_pemesan = $_POST['id_pemesan'];
    $jumlah_bayar = $_POST['jumlah_bayar'];
    $metode_pembayaran = $_POST['metode_pembayaran'];

    if (!empty($id_pemesan) && !empty($jumlah_bayar) && !empty($metode_pembayaran)) {
        $query = "INSERT INTO pembayaran (id_pemesan, jumlah_bayar, metode_pembayaran) VALUES (?, ?, ?)";
        $stmt = $mysqli->prepare($query);

        if ($stmt) {
            $stmt->bind_param("ids", $id_pemesan, $jumlah_bayar, $metode_pembayaran);
            if ($stmt->execute()) {
                echo "Pembayaran berhasil disimpan!";
            } else {
                echo "Error saat menyimpan pembayaran: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error dalam query: " . $mysqli->error;
        }
    } else {
        echo "Semua data harus diisi!";
    }
}
?>
