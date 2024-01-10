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
    <link rel="stylesheet" href="../css/cekGedungAdmin.css?v=<?php echo time(); ?>" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
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
                <img class="gmblogo" src="../logorentsite.png" alt="" />
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
    </div>

    <!-- konten -->
    <main>
        <div class="konten1">Gedung Yang Dipinjam</div>
        <div class="isitable">
            <?php
            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID Peminjaman</th><th>Kode Gedung</th><th>Tanggal Pinjam</th><th>Tanggal Pakai</th><th>Batas Upload Berkas</th><th>Instansi Peminjam</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    $date1 = $row["tanggal_pinjam"];
                    $date = new DateTime($date1);
                    $date_plus = $date->modify("+14 days");
                    $date_plus->format("Y-m-d");
                    echo "<tr>";
                    echo "<td>" . $row["id_peminjaman"] . "</td>";
                    echo "<td>" . $row["kode_gedung"] . "</td>";
                    echo "<td>" . $row["tanggal_pinjam"] . "</td>";
                    echo "<td>" . $row["tanggal_pakai"] . "</td>";
                    echo "<td>" . $date_plus->format("Y-m-d") . "</td>";
                    echo "<td>" . $row["instansi_peminjam"] . "</td>";
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