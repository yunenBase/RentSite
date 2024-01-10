<?php
session_start(); // Start the session
require("function.php");

// Check if the form is submitted
if (isset($_POST['daftar'])) {
  $Nama_Lengkap = $_POST['Nama_Lengkap'];
  $NIP = $_POST["NIP"];
  $Fakultas = $_POST["Fakultas"];
  $Password = md5($_POST["Password"]); // Menggunakan md5 untuk menghasilkan hash kata sandi

    // Menggunakan mysqli_query untuk eksekusi query
    $sql = "INSERT INTO pengguna_dosen (Nama_Lengkap, NIP, Fakultas, Password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $Nama_Lengkap, $NIP, $Fakultas, $Password);
    $stmt->execute();

    // Check if the statement execution is successful
    if ($stmt->affected_rows > 0) {
        // Redirect to index.php on success
        header('location:role_login.php');
        exit(); // Make sure to exit after redirection
    } else {
        // Display an error message
        $error = "Gagal menambahkan data ke database.";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pendaftaran Dosen</title>

  <link rel="stylesheet" href="formdosen.css">
</head>

<body>
  <div class="container">
    <div class="bungkus">

      <?php if (isset($error)) : ?>
        <script>
          alert('<?= $error ?>');
          document.location.href = 'index.php';
        </script>
      <?php endif; ?>

      <img class="logolog" src="logorentsite.png" alt="">
      <form class="box" action="" method="post">
        <h2 class="judul">Isi Data Dengan Benar</h2>
        <label for="Nama_Lengkap">Nama Lengkap :</label>
        <input type="text" name="Nama_Lengkap" id="Nama_Lengkap">
        <label for="NIP">NIP :</label>
        <input type="text" name="NIP" id="NIP">
        <label for="Fakultas">Fakultas :</label>
        <input type="text" name="Fakultas" id="Fakultas">
        <label for="Password">Password :</label>
        <input type="password" name="Password" id="Password">
        <button type="submit" name="daftar">Daftar</button>
      </form>
      
      <h2 class="text3"><a href="">“Kebijakan Privasi" dan "Syarat Penggunaan."</a> </h2>
    </div>
  </div>
</body>

</html>
