<?php
require 'function.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="reg.css">
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,700&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anda Ingin Mendaftar Sebagai Apa?</title>
  </head>

<body>

  <div class="boxlogin">
    <form id="roleForm">
      <label for="role">Anda Ingin Mendaftar Sebagai Apa?</label>
      <select id="role" name="role">
        <option value="" disabled selected>-- Pilih --</option>
        <option value="dosen">Dosen</option>
        <option value="mahasiswa">Mahasiswa</option>
      </select>
      <button type="button" onclick="redirectToForm()">Continue</button>
    </form>
  </div>

  <script>
  function redirectToForm() {
    // Mendapatkan nilai peran yang dipilih dari dropdown
    var selectedRole = document.getElementById("role").value;

    // Mengarahkan ke halaman formulir berdasarkan peran yang dipilih
    switch (selectedRole) {
      case "dosen":
        window.location.href = "formdosen.php";
        break;
      case "mahasiswa":
        window.location.href = "formmahasiswa.php";
        break;
    }
  }
  </script>

</body>

</html>

</script>

<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 20px;
}

form {
  max-width: 400px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 8px;
}

input {
  width: 100%;
  padding: 8px;
  margin-bottom: 15px;
  box-sizing: border-box;
}

select {
  width: 100%;
  padding: 8px;
  margin-bottom: 15px;
  box-sizing: border-box;
}

button {
  background-color: #4caf50;
  color: #fff;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}
</style>
</head>

<body>