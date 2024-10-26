<?php
$host = "localhost";
$user = "root"; // atau username MySQL yang kamu gunakan
$password = ""; // masukkan password MySQL, kosongkan jika tidak ada
$database = "component"; // ganti dengan nama database kamu

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
