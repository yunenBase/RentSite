<?php
require '../function.php';


$sql = "SELECT * FROM peminjaman_gedung";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/riwayat.css?v=<?php echo time(); ?>" />
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
        <div class="konten1">Riwayat Peminjaman Gedung</div>
        <div class="isitable">
            <?php
            $status = isset($_GET['status']) ? $_GET['status'] : ''; // Baca parameter status dari URL
            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID Peminjaman</th><th>Kode Gedung</th><th>Tanggal Pinjam</th><th>Tanggal Pakai</th><th>Batas Upload Berkas</th><th>Status</th><th>Instansi Peminjam</th><th>Aksi</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    $date1 = $row["tanggal_pinjam"];
                    $date = new DateTime($date1);
                    $date_plus = $date->modify("+14 days");
                    $date_plus->format("Y-m-d");

                    // Sesuaikan dengan kolom status_upload_berkas yang sesuai dengan basis data Anda
                    //$status = ($row["status_upload_berkas"] == 1) ? "Proses Verifikasi" : "Belum Upload Berkas";//
                    $status = ($row["status_upload_berkas"] == 1) ? "Proses Verifikasi" : (($row["status_upload_berkas"] == 2) ? "Siap Dipakai" : "Belum Upload Berkas");

                    echo "<tr>";
                    echo "<td>" . $row["id_peminjaman"] . "</td>";
                    echo "<td>" . $row["kode_gedung"] . "</td>";
                    echo "<td>" . $row["tanggal_pinjam"] . "</td>";
                    echo "<td>" . $row["tanggal_pakai"] . "</td>";
                    echo "<td>" . $date_plus->format("Y-m-d") . "</td>";
                    echo '<td class="pilihan">' . '<a class="tersedia" href="">' . $status . '</a>';
                    echo "<td>" . $row["instansi_peminjam"] . "</td>";
                    echo '<td class="pilihan">' . '<a class="tersedia" href="../upload.php?id=' . $row["id_peminjaman"] . '">Upload Berkas</a>' . '<a class="tersedia" href="hapus_peminjaman.php?id=' . $row["id_peminjaman"] . '">Batal Pinjam</a>' . "</td>";

                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "Tidak ada data gedung.";
            }
            ?>
        </div>


    </main>
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
    <script src="pilihan.js"></script>
    <script src="script.js"></script>
</body>

</html>