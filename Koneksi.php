<?php
// Konfigurasi database
$host = 'localhost'; // Nama host server
$user = 'root';      // Username MySQL Anda
$password = '';      // Password MySQL Anda
$database = 'PT_BandiCar'; // Nama database

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $database);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Jika koneksi berhasil
// echo "Koneksi berhasil!";
?>
