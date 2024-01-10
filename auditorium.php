<?php
require 'function.php';

$namaDB = "auditorium";
$sql = "SELECT * FROM $namaDB";
$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="idn">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cek Gedung</title>
    <link rel="stylesheet" href="css/klikPinjam.css" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <!-- Navbar -->

    <nav class="menu">
        <div class="logo">
            <img class="gmblogo" src="logorentsite.png" alt="" />
            <h1>RentSite</h1>
        </div>
        <ul>
            <li><a href="cekgedung.php">Cek Gedung</a></li>
            <li><a href="sop.php">SOP</a></li>
            <li><a href="loadberkas.php">Berkas</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <a href="profil.php" class="login1">Profile</a>
        </ul>
        <div class="menu-toggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <!-- konten -->
    <?php include "template/tampil-data-gedung.php"; ?>

    <!-- footer -->

    <fotter>
        <div class="foot1">
            <ui class="judul">Rent Site</ui>
            <img class="logo" src="logorentsite.png" alt="" />
        </div>
        <div class="foot2"></div>
        <div class="foot3">
            <p class="kontak1">Kampus Universitas Andalas</p>
            <a class="kontak2" href="">Limau Manis, Kec. Pauh</a>
            <a class="kontak3" href="">Kota Padang, Sumatera Barat</a>
            <a class="kontak4" href="">(+62)-123-456-789</a>
        </div>
    </fotter>
    <script src="pilihan.js"></script>
    <script src="script.js"></script>
</body>

</html>