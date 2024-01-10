<?php
require '../function.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pinjam'])) {
    // Ambil data dari form
    $kodeGedung = $_POST['kode_gedung'];
    $tanggalPinjam = date('Y-m-d');
    $tanggalPakai = $_POST['tanggal_pakai'];
    $batasUpload = date('Y-m-d', strtotime($tanggalPinjam . ' +14 days'));
    $instansiPeminjam = $_POST['instansi_peminjam'];

    // Query untuk menyimpan data peminjaman ke database
    $sqlInsert = "INSERT INTO peminjaman_gedung (kode_gedung, tanggal_pinjam, tanggal_pakai, batas_upload_berkas, instansi_peminjam)
                  VALUES ('$kodeGedung', '$tanggalPinjam', '$tanggalPakai', '$batasUpload', '$instansiPeminjam')";

    // Eksekusi query
    if ($conn->query($sqlInsert) === TRUE) {
        // Jika data berhasil dimasukkan, pindahkan user ke halaman riwayat.php
        header("Location: riwayat.php");
        exit();
    } else {
        echo "Error: " . $sqlInsert . "<br>" . $conn->error;
    }
}

$sql = "SELECT * FROM auditorium"; // Sesuaikan dengan nama tabel auditorium
$result = $conn->query($sql);

if (isset($_POST["submit"])) {

    // if (pinjam($_POST) > 0) {
    //   echo "
    //         <script>
    //             alert('data berhasil ditambahkan!');
    //             document.location.href = 'matakuliah.php';
    //         </script>
    //     ";
    // } else {
    //   echo "
    //         <script>
    //             alert('data gagal ditambahkan!');
    //             document.location.href = 'matakuliah.php';
    //         </script>
    //     ";
    // }


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/auditorium.css?v=<?php echo time(); ?>" />
    <title>Peminjaman Gedung</title>
</head>

<body>
    <!-- header start -->
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

    <!-- header end -->

    <!-- konten start-->

    <main>
        <div class="konten1">Auditorium</div>
        <div class="isitable">
            <?php
            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Kode Gedung</th><th>Tanggal</th><th>Status</th><th>Instansi Peminjam</th><th>Aksi</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["Kode_Gedung"] . "</td>";
                    echo "<td>" . date('l, j F Y', strtotime($row["Tanggal"])) . "</td>";
                    echo '<td class="status">' . $row["Status"] . "</td>";
                    echo "<td>" . $row["Instansi_Peminjam"] . "</td>";
                    echo '<td class="pilihan">' . '<button type="button" id="btnPeminjaman" onclick="showForm(\'' . $row["Kode_Gedung"] . '\')">Pinjam</button>' . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "Tidak ada data gedung.";
            }
            ?>
        </div>
    </main>

    <!-- konten end -->

    <!-- prototype -->
    <!-- <div class="container">
        <h1>Peminjaman Gedung</h1>
        <button id="btnPeminjaman" onclick="showForm()">Peminjaman</button>
        <table id="tablePeminjaman">
            <thead>
                <tr>
                    <th>Tanggal Peminjaman</th>
                    <th>Nama Peminjam</th>
                    <th>Catatan Peminjam</th>
                </tr>
            </thead>
            <tbody> -->
    <!-- Tabel peminjaman akan muncul di sini -->
    <!-- </tbody>
        </table>
    </div> -->

    <div id="formPopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closeForm()">&times;</span>
            <form method="POST" action="">
                <label for="kode_gedung">Masukkan Kode Gedung:</label>
                <input type="text" id="kode_gedung" name="kode_gedung" required />

                <label for="tanggal_pakai">Masukkan Tanggal Hari Ini:</label>
                <input type="date" id="tanggal_pinjam" name="tanggal_pinjam" required />

                <label for="tanggal_pakai">Masukkan Tanggal Penggunaan:</label>
                <input type="date" id="tanggal_pakai" name="tanggal_pakai" required />

                <label for="instansi_peminjam">Masukkan Nama Instansi:</label>
                <input type="text" id="instansi_peminjam" name="instansi_peminjam" required />

                <button type="submit" name="pinjam">Pinjam</button>
            </form>
        </div>
    </div>
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

    <script src="../js/klikPinjam.js"></script>
    <!-- <script src="pilihan.js"></script> -->
</body>

</html>