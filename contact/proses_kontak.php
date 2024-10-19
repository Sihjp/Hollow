<?php
// Sertakan file koneksi database
include 'db.php';

// Ambil data dari form
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// SQL untuk memasukkan data ke tabel
$sql = "INSERT INTO kontak (fullname, email, phone, subject, message) VALUES ('$fullname', '$email', '$phone', '$subject', '$message')";

// Jalankan query dan cek apakah berhasil
if ($conn->query($sql) === TRUE) {
    header("Location: ../contact.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
