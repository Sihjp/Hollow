<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="images/" href="images/woai.ico"/>
    <script src="https://kit.fontawesome.com/8f42612d99.js" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="page2style.css">
    <title>About</title>
</head>

<?php
include '../koneksi.php'; // Hubungkan ke database

// Query untuk mengambil data dari tabel 'isi'
$sql = "SELECT header, body FROM isi WHERE id = 2"; // Sesuaikan id atau kondisi lain jika perlu
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Menampilkan data dari baris pertama
    $row = $result->fetch_assoc();
    $header = $row['header'];
    $body = $row['body'];
} else {
    $header = "Data tidak ditemukan";
    $body = "";
}
?>

<body>
    <div class="container">
    <nav class="navbar">
            <ul>
                <li><a href="../activities/act.php">activities</a></li>
                <li><a href="../index.html">back</a></li>
                <li><a href="../profile/profile.php">profile</a></li>
                <li><a href="../hobbies/hobi.php">hobbies</a></li>
                <li><a href="../index.php">home</a></li>
                <li style="float:left"><a href="#contact">WIDI ARDHIANSYAH</a></li>
            </ul>
        </nav>

        <div class="vertical-text-container">
            <a class="vertical-text" href="#www.widi.ard.com">
                Contact me
            </a>
        </div>


        <div class="row">
                <div class="column side">
                    <img src="../images/myself.jpeg" alt="Foto Diri">
                </div>
                
                <div class="column middle">
                    <h2><?php echo $header; ?></h2>
                    <p>
                        <?php echo $body; ?>
                    </p>
                    <div class="icons">
                        <a href="#">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="LuSiapa?#1839">
                            <i class="fa-brands fa-discord"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                        
                    </div>
                </div>

            
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        // Tambahkan kelas CSS ke elemen yang ingin diberikan animasi
        document.body.classList.add('animate');
        });
    </script>
</body>
</html>