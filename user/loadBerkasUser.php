<?php
require '../function.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Berkas</title>
    <link rel="stylesheet" href="../css/loadBerkasUser.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- Navbar -->
    <div class="container">
        <nav class="menu">
            <div class="logo">
                <img class="gmblogo" src="../img/logorentsite.png" alt="" />
                <a href="landingPageUser.php" style="text-decoration: none;">
                    <h1>RentSite</h1>
                </a>
            </div>
            <ul>
                <li><a href="cekGedungUser.php">Cek Gedung</a></li>
                <li><a href="sopUser.php">SOP</a></li>
                <li><a href="loadBerkasUser.php">Berkas</a></li>
                <li><a href="faqUser.php">FAQ</a></li>
                <a href="profilUser.php" class="login1">Profile</a>
            </ul>
            <div class="menu-toggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </div>

    <!-- konten -->

    <main>
        <div class="kontendownload">
            <div class="codoku"><img class="doku" src="../img/doku.png" alt=""></div>

            <div class="berkas">
                <div>Surat Permohonan Peminjaman Gedung</div>
                <div>200Kb</div>
                <button onclick="downloadFile()">Download</button>
            </div>
        </div>
    </main>

    <!-- footer -->

    <fotter>
        <div class="foot1">
            <ui class="judul">Rent Site</ui>
            <img class="logo" src="../img/logorentsite.png" alt="">
        </div>
        <div class="foot2"></div>
        <div class="foot3">
            <p class="kontak1">Kampus Universitas Andalas</p>
            <a class="kontak2" href="">Limau Manis, Kec. Pauh</a>
            <a class="kontak3" href="">Kota Padang, Sumatera Barat</a>
            <a class="kontak4" href="">(+62)-123-456-789</a>
        </div>
    </fotter>

    <script>
    function downloadFile() {
        // Mengarahkan pengguna ke Google Document
        window.location.href = "https://docs.google.com/document/d/1SQhcUgTZlJvS0pGs-ryp1HUupp5Hqq0N/edit";
    }
    </script>
    <script src="script.js"></script>
</body>

</html>