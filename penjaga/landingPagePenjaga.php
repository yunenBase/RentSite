<?php
require '../function.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RentSite_Peminjaman Gedung</title>
    <link rel="stylesheet" href="../css/landingPageAdmin.css">
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
</body>
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

    <div class="homepage2">
        <div class="box1">Halaman Penjaga Gedung</div>
        <div class="box2">
            <div class="jalur1">
                <div class="kotak">
                    <div class="kotak1"></div>
                    <div class="kotak2">
                        <div class="persegi"></div>
                    </div>
                </div>
                <div class="isibulat">
                    <div class="bulat"></div>
                    <p class="text">Cek Ketersediaan Gedung</p>
                    <button class="button">klik Disini</button>
                </div>
            </div>
            <div class="jalur2">
                <div class="isibulat">
                    <button class="button">klik Disini</button>
                    <p class="text">Bookoing Gedung</p>
                    <div class="bulat"></div>
                    <div class="tiga2"></div>
                </div>
                <div class="kotak">
                    <div class="kotak2">
                        <div class="persegi"></div>
                    </div>
                    <div class="kotak1"></div>
                </div>
            </div>
            <div class="jalur3">
                <div class="kotak">
                    <div class="kotak1"></div>
                    <div class="kotak2">
                        <div class="persegi"></div>
                    </div>
                </div>
                <div class="isibulat">
                    <div class="tiga"></div>
                    <div class="bulat"></div>
                    <p class="text">Submit Berkas</p>
                    <button class="button">klik Disini</button>
                </div>
            </div>
            <div class="jalur4">
                <div class="isibulat">
                    <button class="button">klik Disini</button>
                    <p class="text">Verifikasi Berkas</p>
                    <div class="bulat"></div>
                    <div class="tiga2"></div>
                </div>
                <div class="kotak">
                    <div class="kotak2">
                        <div class="persegi"></div>
                    </div>
                    <div class="kotak1"></div>
                </div>
            </div>
            <div class="jalur5">
                <div class="kotak"></div>
                <div class="isibulat">
                    <div class="tiga"></div>
                    <div class="bulat"></div>
                    <p class="text7">Gedung Siap Digunakan</p>
                </div>
            </div>
        </div>
        <div class="box3">
            <div class="miringkiri1 circlekiri">
                <div class="circle">
                    <div class="tigabulat1"></div>
                    <div class="iner"></div>
                </div>
            </div>
            <div class="miringkiri2 circlekiri">
                <div class="circle">
                    <div class="tigabulat1"></div>
                    <div class="iner"></div>
                </div>
            </div>
            <div class="miringkanan1 circlekanan">
                <div class="circle">
                    <div class="tigabulat"></div>
                    <div class="iner"></div>
                </div>
            </div>
            <div class="miringkanan2 circlekanan">
                <div class="circle">
                    <div class="tigabulat"></div>
                    <div class="iner"></div>
                </div>
            </div>
            <div class="kontenbox1 kontenbox">
                <p class="text">Cek Ketersediaan Gedung</p>
                <button class="button">klik Disini</button>
            </div>
            <div class="tigabulat2">
                <div class="tigabulat7"></div>
            </div>
            <div class="kontenbox2 kontenbox">
                <p class="text">Bookoing Gedung</p>
                <button class="button">klik Disini</button>
            </div>
            <div class="tigabulat3">
                <div class="tigabulat7"></div>
            </div>
            <div class="kontenbox3 kontenbox">
                <p class="text">Submit Berkas</p>
                <button class="button">klik Disini</button>
            </div>
            <div class="tigabulat4">
                <div class="tigabulat7"></div>
            </div>
            <div class="kontenbox4 kontenbox">
                <p class="text">Verifikasi Berkas</p>
                <button class="button">klik Disini</button>
            </div>
            <div class="tigabulat5">
                <div class="tigabulat7"></div>
            </div>
            <div class="kontenbox5 kontenbox">
                <p class="text7">Gedung Siap Digunakan</p>
            </div>
        </div>
    </div>

    <!-- konten -->
    <fotter>
        <div class="foot1">
            <ui class="judul">Rent Site</ui>
            <img class="logo" src="../img/logorentsite.png" alt="" />
        </div>
        <div class="foot2"></div>
        <div class="foot3">
            <p class="kontak1">Kampus Universitas Andalas</p>
            <a class="kontak2" href="">Limau Manis, Kec. Pauh</a>
            <a class="kontak3" href="">Kota Padang, Sumatera Barat</a>
            <a class="kontak4" href="">(+62)-123-456-789</a>
        </div>
    </fotter>
    <!-- footer -->

    <script src="script.js"></script>
    </body>

</html>