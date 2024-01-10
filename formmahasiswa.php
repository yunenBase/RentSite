<!--<?php
session_start(); // Start the session
require("function.php");

if (isset($_POST['daftar'])) {
  $Nama_Lengkap = $_POST['Nama_Lengkap'];
  $NIM = $_POST["NIM"];
  $Fakultas = $_POST["Fakultas"];
  $Jurusan = $_POST["Jurusan"];
  $Password = md5($_POST["Password"]); // Menggunakan md5 untuk menghasilkan hash kata sandi

    // Menggunakan mysqli_query untuk eksekusi query
    $sql = "INSERT INTO pengguna_mahasiswa (Nama_Lengkap, NIM, Fakultas, Jurusan, Password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $Nama_Lengkap, $NIM, $Fakultas, $Jurusan, $Password);
    $stmt->execute();

    // Periksa apakah eksekusi statement berhasil
    if ($stmt->affected_rows > 0) {
        // Eksekusi berhasil
        header('location:index.php');
    } else {
        // Eksekusi gagal
        echo "Gagal menambahkan data ke database.";
    }

    // Tutup statement dan koneksi di luar blok kondisional
    $stmt->close();
    $conn->close();
}


?>
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Registrasi Mahasiswa</title>
    <link rel="stylesheet" href="formmahasiswa.css?v=<?php echo time(); ?>">
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
                <h2 class="judul">Isi Data Dengan Benar</h2>
                <label for="Nama_Lengkap">Nama Lengkap :</label>
                <input type="text" name="Nama Lengkap" id="Nama Lengkap">
                <label for="NIM">NIM :</label>
                <input type="text" name="NIM" id="NIM">
                <label for="Fakultas">Fakultas :</label>
                <input type="text" name="Fakultas" id="Fakultas">
                <label for="Jurusan">Jurusan :</label>
                <input type="text" name="Jurusan" id="Jurusan">
                <label for="Password">Password :</label>
                <input type="text" name="Password" id="Password">
                <button type="submit" name="daftar">Daftar</button>
            </form>


            <h2 class="text3"><a href="">“Kebijakan Privasi" dan "Syarat Penggunaan."</a> </h2>