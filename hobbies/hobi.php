<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="images/" href="images/woai.ico"/>
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>

<?php
include '../koneksi.php'; // Hubungkan ke database

// Query untuk mengambil data dari tabel 'isi'
$sql = "SELECT header, body, images_path FROM isi WHERE id = 3"; // Sesuaikan id atau kondisi lain jika perlu
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Menampilkan data dari baris pertama
    $row = $result->fetch_assoc();
    $header = $row['header'];
    $body = $row['body'];
    $images_path = $row['images_path'];
} else {
    $header = "Data tidak ditemukan";
}
?>


<body>
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar">
            <ul>

                <li><a href="../activities/act.php">activities</a></li>
                <li><a href="../about/page2.php">about</a></li>
                <li><a href="../profile/profile.php">profile</a></li>
                <li><a href="#">hobbies</a></li>
                <li><a href="../index.php">home</a></li>
                <li style="float:left"><a href="#contact">WIDI ARDHIANSYAH</a></li>
            </ul>
        </nav>

        <div class="row">
                <div class="column side">
                    <img src="<?php echo $images_path; ?>" alt="Foto Diri">
                </div>
                <div class="column middle">
                    <h2 style="padding: 10px">
                        <?php echo $header; ?>
                    </h2>
                    <p style="padding: 10px">
                        <?php echo $body; ?>
                    </p>
                </div>
        </div>
    </div>
        
</body>
</html>