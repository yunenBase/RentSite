<?php
require '../function.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOP</title>
    <link rel="stylesheet" href="../css/sopUser.css">
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
                <a href="landingPagePenjaga.php" style="text-decoration: none;">
                    <h1>RentSite</h1>
                </a>
            </div>
            <ul>
                <li><a href="cekGedungPenjaga.php">Cek Gedung</a></li>
                <li><a href="sopPenjaga.php">SOP</a></li>
                <li><a href="loadBerkasPenjaga.php">Berkas</a></li>
                <a href="" class="login1">Penjaga</a>
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
        <div>
            <div class="konten1">SOP Peminjaman Gedung</div>
            <div class="konten2">
                <p>1. Peminjam melakukan login/registrasi di RentSite</p>
                <p>2. Peminjam harus melakukan booking paling lambat 20 hari sebelum menggunakan gedung</p>
                <p>3. Peminjam harus melakukan upload berkas paling lambat 3 hari setelah melakukan booking</p>
                <p>4. Peminjam tidak diperbolehkan berkelahi, merusak fasilitas, dan menggunakan alat di dalam ruangan
                    tanpa
                    seizin penjaga gedung</p>
                <p>5. Peminjam diharuskan mennjaga kebersihan dan merawat fasilitas yang telah tersedia di dalam ruangan
                    yang di
                    pinjam</p>
                <p>6. Apabila peminjam menggunakan fasilitas seperti sound system, ac, monitor, dll, wajib menggunakan
                    teknisi
                    ruangan</p>
                <p>7. Untuk kegiatan yang dilakukan hingga jam malam (melewati pukul 20.00) wajib melapor kepada satpam
                    terdekat
                </p>
                <p>8. Peminjam dapat melakukan pembatalan jika status gedung belum terverifikasi</p>
                <p>9. Pembatalan peminjaman gedung yang telah terverifikasi akan dikenakan pinalti berupa tidak
                    diperbolehkan
                    meminjam gedung dalam waktu 2 minggu terhitung setelah dilakukannya pembatalan</p>
                <p>10. Apabila terjadi kehilangan properti ruangan yang di pinjam, maka peminjam bertanggungjawab untuk
                    mengganti barang yang hilang tersebut</p>
                <p>11. Penjaga gedung tidak diperbolehkan meminta uang operasional kepada peminjam jika peminjaman
                    dilakukan
                    dalam hari dan jam kerja</p>
                <p>12. Penjaga gedung tidak diperbolehkan secara sepihak menolak dan membubarkan acara yang telah
                    disetujui oleh
                    Biro Rumah Tangga dan Wakil Rektor II</p>
            </div>
            <button onclick="downloadFile()" class="konten3">Unduh Dokumen SOP</button>
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
        window.location.href =
            " https://docs.google.com/document/d/1PRbtaqc2IFY0XeY-zH5N5QjpSb-tbYLe1YAxowpz5HQ/edit?usp=drivesdk";
    }
    </script>
    <script src="script.js"></script>
</body>

</html>