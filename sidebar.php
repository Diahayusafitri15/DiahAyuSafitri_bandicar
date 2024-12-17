<?php include 'koneksi.php'; // Memasukkan koneksi ke database ?>
<?php
// Ambil data jumlah mobil dari database
$result = $conn->query("SELECT COUNT(*) AS total_mobil FROM mobil");
$data = $result->fetch_assoc();
$total_mobil = $data['total_mobil'];
?>

<nav class="bg-primary text-white p-3" style="width: 250px; height: 100vh;">
    <h4>Aplikasi Rental Mobil</h4>
    <ul class="nav flex-column mt-4">
        <li class="nav-item">
            <a href="dashboard.php" class="nav-link text-white"><i class="fas fa-home"></i> Dashboard</a>
        </li>
        <li class="nav-item">
            <a href="data_merk.php" class="nav-link text-white"><i class="fas fa-tag"></i> Data Merk</a>
        </li>
        <li class="nav-item">
            <a href="data_mobil.php" class="nav-link text-white"><i class="fas fa-car"></i> Data Mobil <span class="badge bg-light text-dark"><?php echo $total_mobil; ?></span></a>
        </li>
        <li class="nav-item">
            <a href="data_pemesan.php" class="nav-link text-white"><i class="fas fa-users"></i> Data Pemesan</a>
        </li>
        <li class="nav-item">
            <a href="data_jenis_bayar.php" class="nav-link text-white"><i class="fas fa-credit-card"></i> Data Jenis Bayar</a>
        </li>
    </ul>
</nav>
