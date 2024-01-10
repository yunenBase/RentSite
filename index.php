<?php
session_start();
require("function.php");

if (isset($_POST['login'])) {
  $Nama_Lengkap = $_POST['Nama_Lengkap'];
  $Password1 = ($_POST["Password"]); // Menggunakan md5 untuk menghasilkan hash kata sandi
  $Password = md5($Password1);
  // Query untuk pengguna mahasiswa
  $sqlMahasiswa = "SELECT * FROM pengguna_mahasiswa WHERE Nama_Lengkap=? AND Password=?";
  $stmtMahasiswa = $conn->prepare($sqlMahasiswa);
  $stmtMahasiswa->bind_param("ss", $Nama_Lengkap, $Password);
  $stmtMahasiswa->execute();
  $resultMahasiswa = $stmtMahasiswa->get_result();
  //admin
  $sqlAdmin = "SELECT * FROM admin WHERE Nama_Admin=? AND Password=?";
  $stmtAdmin = $conn->prepare($sqlAdmin);
  $stmtAdmin->bind_param("ss", $Nama_Lengkap, $Password1);
  $stmtAdmin->execute();
  $resultAdmin = $stmtAdmin->get_result();
  // Query untuk penjaga
  $sqlPenjaga = "SELECT * FROM tabel_penjaga WHERE Nama_Penjaga=? AND Password=?";
  $stmtPenjaga = $conn->prepare($sqlPenjaga);
  $stmtPenjaga->bind_param("ss", $Nama_Lengkap, $Password1);
  $stmtPenjaga->execute();
  $resultPenjaga = $stmtPenjaga->get_result();

  if ($resultMahasiswa->num_rows > 0) {
    $_SESSION['user_type'] = 'mahasiswa';
    $_SESSION['Nama_Lengkap'] = $Nama_Lengkap;
    $_SESSION['Password'] = $Password1;
    header("Location: user/landingPageUser.php");
    exit();
  } elseif ($resultPenjaga->num_rows > 0) {
    $_SESSION['user_type'] = 'penjaga';
    $_SESSION['Nama_Lengkap'] = $Nama_Lengkap;
    $_SESSION['Password'] = $Password1;
    header("Location: penjaga/landingPagePenjaga.php");
    exit();
  } elseif ($resultAdmin->num_rows > 0) {
    $_SESSION['user_type'] = 'admin';
    $_SESSION['Nama_Lengkap'] = $Nama_Lengkap;
    $_SESSION['Password'] = $Password1;
    header("Location: admin/landingPageAdmin.php");
    exit();
  } else {
    $error = "Username atau password salah.";
  }

  // Tutup statement
  $stmtMahasiswa->close();
  $stmtPenjaga->close();

  // Tutup koneksi
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Login</title>

  <link rel="stylesheet" href="log.css">
</head>

<body>
  <div class="container">
    <div class="bungkus">

      <?php if (isset($error)) {
        echo "
        <script>
                alert('gagal login!');
                document.location.href = 'index.php';
        </script>
        ";
      } ?>

      <img class="logolog" src="logorentsite.png" alt="">
      <form class="box" action="" method="post">
        <h2 class="judul">Login</h2>
        <label for="Nama_Lengkap">Nama Lengkap :</label>
        <input type="text" name="Nama_Lengkap" id="Nama_Lengkap">
        <label for="Password">Password :</label>
        <input type="password" name="Password" id="Password">
        <button type="submit" name="login">Login</button>
      </form>
      <h2 class="text1">Lupa Sandi ?</h2>
      <h2 class="text2">Belum punya akun? Daftar dan buat <a href="reg.php">disini</a></h2>
      <h2 class="text3"><a href="">“Kebijakan Privasi" dan "Syarat Penggunaan."</a> </h2>
    </div>

  </div>

</body>

</html>