<?php
session_start();
require '../function.php';


// Ambil data pengguna dari sesi
$Nama_Lengkap = $_SESSION['Nama_Lengkap'];
$user_data = query("SELECT * FROM pengguna_mahasiswa WHERE Nama_Lengkap = '$Nama_Lengkap'");

// Pastikan data pengguna ditemukan
if (empty($user_data)) {
    echo "Data pengguna tidak ditemukan.";
    exit();
}

$user_data = $user_data[0];

if (isset($_POST['logout'])) {
    // Hapus semua data sesi
    session_unset();
    session_destroy();

    // Alihkan ke homepage.php
    echo "<script>alert('Berhasil Log Out!');
        document.location.href='../index.php';
        </script>";
    // header("Location: ../index.php");
    exit();
} elseif (isset($_POST['ubah_sandi'])) {
    // Hapus semua data sesi
    session_unset();
    session_destroy();

    // Alihkan ke ubahsandi.php
    header("Location: ubahsandi.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="../css/profilUser.css?v=<?php echo time(); ?>">
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
                <li><a href="riwayat.php">Riwayat</a></li>
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
        <div class="konten1">
            <div class="coprofil"><img class="potoprofil" src="../img/prof.png" alt=""></div>

            <div class="dataprofil">
                <p>Nama Lengkap :
                    <?php echo $user_data['Nama_Lengkap']; ?>
                </p>
                <p>NIM :
                    <?php echo $user_data['NIM']; ?>
                </p>
                <p>Fakultas :
                    <?php echo $user_data['Fakultas']; ?>
                </p>
                <p>Jurusan :
                    <?php echo $user_data['Jurusan']; ?>
                </p>
            </div>
        </div>
        <div class="konten2">
            <form class="edit" method="post">
                <button class="edit1">Upload Foto</button>
                <button type="submit" name="ubah_sandi" class="edit2">Ubah Kata Sandi</button>
                <button class="edit3">Ubah Data Profil</button>
                <button type="submit" name="logout" class="edit4">Log Out</button>
            </form>
        </div>

    </main>

    <!-- footer -->

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
    <script src="script.js"></script>
</body>

</html>