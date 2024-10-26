<?php
include '../koneksi.php'; // Hubungkan ke database

// Query untuk mengambil data dari tabel 'isi'
$sql = "SELECT * FROM isi where id IN (5, 6, 7, 8) "; // Ambil semua data dari tabel 'isi'
$result = $conn->query($sql);

$images_paths = []; // Array untuk menyimpan semua path gambar

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Ambil data dari setiap baris
        $images_data[] = [
            'path' => $row['images_path'],
            'body' => $row['body']
        ]; // Menambahkan path gambar dan body ke array
    }
} else {
    echo "Data tidak ditemukan";
}
?>

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

<body>
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar">
            <ul>
                <li><a href="#">activities</a></li>
                <li><a href="../about/page2.php">about</a></li>
                <li><a href="../profile/profile.php">profile</a></li>
                <li><a href="../hobbies/hobi.php">hobbies</a></li>
                <li><a href="../index.php">home</a></li>
                <li style="float:left"><a href="#contact">WIDI ARDHIANSYAH</a></li>
            </ul>
        </nav>

        <div class="row">
            <?php foreach ($images_data as $data): ?>
                <div class="gallery">
                    <a target="_blank" href="<?php echo $data['path']; ?>">
                        <img src="<?php echo $data['path']; ?>" alt="Image" width="600" height="400">
                    </a>
                    <div class="desc"><?php echo $data['body']; ?></div> <!-- Menampilkan body di sini -->
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
