<?php
require '../function.php';

$namaDB = "auditorium";
$sql = "SELECT * FROM $namaDB";
$result = $conn->query($sql);

if (isset($_POST["submit"])) {

  if (pinjam($_POST) > 0) {
    echo "
          <script>
              alert('data berhasil ditambahkan!');
              document.location.href = 'matakuliah.php';
          </script>
      ";
  } else {
    echo "
          <script>
              alert('data gagal ditambahkan!');
              document.location.href = 'matakuliah.php';
          </script>
      ";
  }


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/gedung.css" />
  <!-- <link rel="stylesheet" href="../css/navbar.css" /> -->
  <title>Peminjaman Gedung</title>
</head>

<body>
  <!-- header start -->
  <?php include "../template/navbar.php"; ?>

  <!-- header end -->

  <!-- konten start-->
  <?php include "../template/tampil-data-gedung.php"; ?>

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
      <form id="peminjamanForm">



        <label for="instansi_peminjam">Masukkan Kode Gedung:</label>
        <input type="text" id="instansi_peminjam" name="instansi_peminjam" required />

        <label for="instansi_peminjam">Masukkan Tanggal Hari Ini:</label>
        <input type="date" id="instansi_peminjam" name="instansi_peminjam" required />

        <label for="instansi_peminjam">Masukkan Tanggal Anda Ingin Meggunakan gedung:</label>
        <input type="text" id="instansi_peminjam" name="instansi_peminjam" required />

        <label for="instansi_peminjam">Masukkan Nama Instansi:</label>
        <input type="text" id="instansi_peminjam" name="instansi_peminjam" required />


        <button type="submit" name="Submit" onclick="submitForm()"><a href="riwayat.php">Pinjam</a></button>
      </form>
    </div>
  </div>


  <script src="../js/klikPinjam.js"></script>
  <!-- <script src="pilihan.js"></script> -->
</body>

</html>