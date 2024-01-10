<!--<?php
session_start();
require("function.php");


if (isset($_POST['login'])) {
    $ID_Admin = $_POST['ID_Admin'];
    $Password = $_POST['Password'];
    
    $sql = "SELECT * FROM admin WHERE ID_Admin=? AND Password=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $ID_Admin, $Password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        $_SESSION['ID_Admin'] = $ID_Admin;
        header("Location: homepage2.php");
        exit();
    } else {
        $error = "Username atau password salah.";
    }

    $stmt->close(); // Close the prepared statement
    $conn->close(); // Close the database connection
}

?>
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Login</title>

  <link rel="stylesheet" href="log_admin.css">
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
        <label for="ID_Admin">ID_Admin :</label>
        <input type="text" name="ID_Admin" id="ID_Admin">
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