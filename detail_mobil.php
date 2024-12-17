<?php
include 'koneksi.php';

// Ambil ID mobil dari URL
$id_mobil = $_GET['id'];

// Query untuk mendapatkan data mobil
$sql = "SELECT * FROM mobil WHERE id = $id_mobil";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $mobil = $result->fetch_assoc();
    ?>

    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Detail Mobil</title>
    </head>
    <body>
        <h1>Detail Mobil - <?php echo $mobil['nama']; ?></h1>
        <!-- Tampilkan gambar -->
        <?php if (!empty($mobil['gambar']) && file_exists('uploads/' . $mobil['gambar'])): ?>
            <img src="uploads/<?php echo $mobil['gambar']; ?>" alt="Gambar Mobil" style="width:300px;">
        <?php else: ?>
            <p><i>Gambar tidak tersedia</i></p>
        <?php endif; ?>
        <p>Nama: <?php echo $mobil['nama']; ?></p>
        <p>Merk: <?php echo $mobil['merk']; ?></p>
        <p>Plat Nomor: <?php echo $mobil['plat_nomor']; ?></p>
        <p>Jumlah Kursi: <?php echo $mobil['jumlah_kursi']; ?></p>
        <p>Tahun Beli: <?   php echo $mobil['tahun_beli']; ?></p>
    </body>
    </html>

    <?php
} else {
    echo "Mobil tidak ditemukan.";
}

$conn->close();
?>
  