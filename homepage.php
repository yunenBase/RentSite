<?php
require 'function.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RentSite_Peminjaman Gedung</title>
  <link rel="stylesheet" href="landing.css?v=<?php echo time(); ?>" />
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
  <div class="container">
    <nav class="menu">
      <div class="logo">
        <img class="gmblogo" src="logorentsite.png" alt="" />
        <h1>RentSite</h1>
      </div>
      <ul>
        <li><a href="indexgedung.php">Cek Gedung</a></li>
        <li><a href="indexsop.php">SOP</a></li>
        <li><a href="indexberkas.php">Berkas</a></li>
        <li><a href="indexfaq.php">FAQ</a></li>
        <a href="log_mahasiswa.php" class="login1">Login</a>
      </ul>
      <div class="menu-toggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>

    <div class="homepage1">
      <ul class="boxkiri">
        <div class="text1">
          <h5>Bingung Mau Pinjam Gedung?</h5>
        </div>
        <div class="text2">
          <h2>Sekarang Peminjaman Gedung Unand Menjadi Lebih Mudah</h2>
        </div>
        <button class="text3">Klik Disini</button>
      </ul>
      <div class="boxkanan"></div>
    </div>
    <div class="homepage2">
      <div class="box1">Alur Peminjaman Gedung</div>
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

    <div class="homepage3">
      <div class="box1">Peminjaman Gedung Kini Telah Terdigitalisasi</div>
      <div class="box2">
        <div class="boxkonten">
          <div class="konten1garing">
            <div class="garing"></div>
            <div class="textgaring1">24 Jam</div>
            <div class="textgaring2">7 Hari</div>
            <div class="textgaring3">Services</div>
          </div>
          <div class="konten2"></div>
        </div>
        <div class="boxkonten">
          <div class="konten1">
            <div class="text1">S O P</div>
            <div class="text2">Standar Operasional Prosedur Yang Jelas</div>
          </div>
          <div class="konten2"></div>
        </div>
        <div class="boxkonten">
          <div class="konten1 text">Pinjam Gedung Dari Mana Saja</div>
          <div class="konten2"></div>
        </div>
      </div>
    </div>
  </div>
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
  <script src="script.js"></script>
</body>

</html>