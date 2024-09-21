<?php
$host = 'localhost'; // Ubah sesuai dengan host database Anda
$db   = 'absensi';   // Nama database
$user = 'root';      // Nama pengguna database
$pass = '';          // Kata sandi database

// Buat koneksi
$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
