<?php
session_start();
include 'koneksi.php'; // Pastikan koneksi sudah benar

// Cek jika user belum login
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Detail Mobil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="bg-primary text-white p-3" style="width: 250px; height: 100vh;">
            <h4>Aplikasi Rental Mobil</h4>
            <ul class="nav flex-column mt-4">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="data_merk.php" class="nav-link text-white"><i class="fas fa-tag"></i> Data Merk</a>
                </li>
                <li class="nav-item">
                    <a href="data_mobil.php" class="nav-link text-white"><i class="fas fa-car"></i> Data Mobil</a>
                </li>
                <li class="nav-item">
                    <a href="data_pemesan.php" class="nav-link text-white"><i class="fas fa-users"></i> Data Pemesan</a>
                </li>
                <li class="nav-item">
                    <a href="pembayaran.php" class="nav-link text-white"><i class="fas fa-credit-card"></i> pembayaran</a>
                </li>
            </ul>
        </nav>

        <!-- Content -->
        <div class="p-4" style="flex: 1;">
            <h2 class="mb-4">Selamat datang di PT.Bandi Car</h2>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <!-- Kolom Gambar -->
                        <div class="col-md-4 text-center">
                            <img src="civic.jpg" class="img-fluid rounded" alt="Mobil">
                            <h6 class="mt-3">Civic turbo</h6>
                            <p class="text-muted">Mobil ini memiliki performa unggul dan cocok untuk balapan.</p>
                        </div>
                        <!-- Kolom Detail -->
                        <div class="col-md-8">
                            <h5 class="mb-3">Informasi Detail Mobil</h5>
                            <table class="table table-bordered table-hover">
                                <tr class="table-primary">
                                    <th><i class="fas fa-car"></i> Nama</th>
                                    <td>Civic</td>
                                </tr>
                                <tr class="table-secondary">
                                    <th><i class="fas fa-tag"></i> Merk</th>
                                    <td>Honda</td>
                                </tr>
                                <tr class="table-info">
                                    <th><i class="fas fa-id-card"></i> Plat Nomor</th>
                                    <td>D 14 H</td>
                                </tr>
                                <tr class="table-warning">
                                    <th><i class="fas fa-users"></i> Jumlah Kursi</th>
                                    <td>5 Kursi</td>
                                </tr>
                                <tr class="table-success">
                                    <th><i class="fas fa-calendar"></i> Tahun Beli</th>
                                    <td>2022</td>
                                </tr>
                            </table>
                            <!-- Tombol Aksi -->
                            <div class="d-flex mt-4">
                                <button class="btn btn-primary me-2">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <button class="btn btn-danger me-2">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                                <button class="btn btn-secondary">
                                    <i class="fas fa-arrow-left"></i> Back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian Media Sosial -->
            <div class="mt-5 text-center">
                <h5>Follow Us</h5>
                <a href="https://facebook.com" target="_blank" class="btn btn-outline-primary m-2">
                    <i class="fab fa-facebook"></i> Facebook
                </a>
                <a href="https://twitter.com" target="_blank" class="btn btn-outline-info m-2">
                    <i class="fab fa-twitter"></i> Twitter
                </a>
                <a href="https://instagram.com" target="_blank" class="btn btn-outline-danger m-2">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
            </div>
        </div>
    </div>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
