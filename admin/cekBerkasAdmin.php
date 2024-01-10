<?php
require '../function.php';

$files = query("SELECT peminjaman_gedung.id_peminjaman, peminjaman_gedung.kode_gedung, peminjaman_gedung.tanggal_pinjam, peminjaman_gedung.tanggal_pakai, peminjaman_gedung.batas_upload_berkas, peminjaman_gedung.instansi_peminjam, files.id FROM peminjaman_gedung, files WHERE peminjaman_gedung.id = files.id")
    // $sql = "SELECT * FROM auditorium";
// $result = $conn->query($sql);

    ?>


<!DOCTYPE html>
<html lang="idn">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cek Gedung</title>
    <link rel="stylesheet" href="../css/CekBerkasAdmin.css?v=<?php echo time(); ?>" />
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
            <img class="gmblogo" src="../img/logorentsite.png" alt="" />
            <a href="landingPageAdmin.php" style="text-decoration: none;">
                <h1>RentSite</h1>
            </a>
        </div>
        <ul>
            <li><a href="cekGedungAdmin.php">Cek Peminjaman</a></li>
            <li><a href="sopAdmin.php">Edit SOP</a></li>
            <li><a href="cekBerkasAdmin.php">Cek Berkas</a></li>
            <li><a href="faqAdmin.php">Edit FAQ</a></li>
            <a href="" class="login1">Admin</a>
        </ul>
        <div class="menu-toggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <!-- konten -->

    <main>
        <div class="konten1">Berkas Telah DiUpload</div>
        <div class="isitable">
            <table>
                <thead>
                    <tr>

                        <th>ID Peminjaman</th>
                        <th>Kode Gedung</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Pakai</th>
                        <th>Batas Upload Berkas</th>
                        <th>Status</th>
                        <th>Instansi Peminjam</th>
                    </tr>
                </thead>

                <?php foreach ($files as $row): ?>
                    <tbody>
                        <tr>

                            <td>
                                <?= $row["id_peminjaman"] ?>
                            </td>
                            <td>
                                <?= $row["kode_gedung"] ?>
                            </td>
                            <td>
                                <?= $row["tanggal_pinjam"] ?>
                            </td>
                            <td>
                                <?= $row["tanggal_pakai"] ?>
                            </td>
                            <td>
                                <?= $row["batas_upload_berkas"] ?>
                            </td>
                            <td><button><a href="download-api.php?file_id=<?php echo $row['id'] ?>">Download
                                        Berkas</a></button><button><a
                                        href="riwayatApi.php?file_id=<?php echo $row['id_peminjaman'] ?>">Terima</a></button><button><a
                                        href="">Tolak</a></button>
                            </td>
                            <td>
                                <?= $row["instansi_peminjam"] ?>
                            </td>


                        </tr>
                    </tbody>

                <?php endforeach ?>
            </table>

            <!-- if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Kode Gedung</th><th>Tanggal Pakai</th><th>Status</th><th>Instansi Peminjam</th><th>Aksi</th></tr>";
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["Kode_Gedung"] . "</td>";
          echo "<td>" . date('l, j F Y', strtotime($row["Tanggal"])) . "</td>";
          echo '<td class="status">' . '<a class="edit lihat" href="riwayat.php">Download Berkas</a>' . '<a class="edit setuju" href="riwayat.php">Setujui</a>' . '<a class="edit tolak" href="riwayat.php">Tolak</a>' . "</td>";
          echo "<td>" . $row["Instansi_Peminjam"] . "</td>";
          echo '<td class="pilihan">' . '<a class="tersedia" href="riwayat.php">Edit<br>Ketersediaan</a>' . "</td>";
          echo "</tr>";
        }
        echo "</table>";
      } else {
        echo "Tidak ada data gedung.";
      } -->

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
    <script src="pilihan.js"></script>
    <script src="script.js"></script>
</body>

</html>