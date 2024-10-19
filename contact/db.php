<?php
$servername = "localhost"; // Nama server, untuk localhost ini "localhost"
$username = "root"; // Username MySQL
$password = ""; // Password MySQL, biasanya kosong jika di localhost
$dbname = "kontak_db"; // Nama database yang kamu buat

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
