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
include 'koneksi.php'; // Hubungkan ke database

// Query untuk mengambil data dari tabel 'isi'
$sql = "SELECT header, body FROM isi WHERE id = 1"; // Sesuaikan id atau kondisi lain jika perlu
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Menampilkan data dari baris pertama
    $row = $result->fetch_assoc();
    $header = $row['header'];
} else {
    $header = "Data tidak ditemukan";
}

?>


<body>
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar">
            <ul>

                <li><a href="activities/act.php">activities</a></li>
                <li><a href="about/page2.php">about</a></li>
                <li><a href="profile/profile.php">profile</a></li>
                <li><a href="hobbies/hobi.php">hobbies</a></li>
                <li><a href="index.php">home</a></li>
                <li style="float:left"><a href="#contact">WIDI ARDHIANSYAH</a></li>
            </ul>
        </nav>

        <!-- Quotes -->
        <div class="quotes">
            <h3>
                “<?php echo $header; ?>”
            </h3>
            
        </div>
        
        <div class="vertical-text-container">
            <a class="vertical-text" href="#www.widi.ard.com">
                www.sayawidi.com
            </a>
        </div>

        <div class="bottomleft">
            <h1 id="current-time"></h1>
            <h5 id="current-day"></h5>
            <h6 id="current-date"></h6>
        </div>
    </div>
    
    <!-- Script Date and Time -->
    <script>
        function updateTime() {
            var currentDate = new Date();

            var currentHour = String(currentDate.getHours()).padStart(2, '0');
            var currentMinute = String(currentDate.getMinutes()).padStart(2, '0');
            var currentDay = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'][currentDate.getDay()];
            var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            var currentMonth = months[currentDate.getMonth()];
            var currentYear = currentDate.getFullYear();
            var currentDayOfMonth = String(currentDate.getDate()).padStart(2, '0');

            var currentTimeString = currentHour + ':' + currentMinute;
            var currentDateString = currentDayOfMonth + ', ' + currentMonth + ' ' + currentYear;

            document.getElementById('current-time').innerText = currentTimeString;
            document.getElementById('current-day').innerText = currentDay;
            document.getElementById('current-date').innerText = currentDateString;
        }

        setInterval(updateTime, 1000); // Update waktu setiap 1 detik
        updateTime(); // Panggil fungsi untuk pertama kali saat halaman dimuat
    </script>
</body>
</html>