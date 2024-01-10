<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "rentsite";

$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Fungsi untuk mengubah password
function changePassword($Nama_Lengkap, $newPassword, $conn)
{
    // Gunakan metode keamanan yang kurang aman (hanya untuk keperluan demonstrasi)
    $hashedPassword = md5($newPassword);

    $sql = "UPDATE pengguna_mahasiswa SET Password = '$hashedPassword' WHERE Nama_Lengkap = '$Nama_Lengkap'";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['pesan'] = "Password berhasil diubah. Silahkan Login Kembali";
        header("Location: ../index.php");
    } else {
        $_SESSION['pesan'] = "Gagal mengubah password: " . $conn->error;
    }
}

// Proses jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nama_Lengkap = $_POST["username"];
    $currentPassword = $_POST["current_password"];
    $newPassword = $_POST["new_password"];

    // Periksa apakah pengguna dengan Nama Lengkap tersebut ada
    $checkUserQuery = "SELECT * FROM pengguna_mahasiswa WHERE Nama_Lengkap = '$Nama_Lengkap'";
    $result = $conn->query($checkUserQuery);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Periksa apakah password saat ini sesuai
        if (md5($currentPassword) === $user["Password"]) {
            // Ubah password jika password saat ini sesuai
            changePassword($Nama_Lengkap, $newPassword, $conn);
        } else {
            echo "Password saat ini tidak sesuai.";
        }
    } else {
        echo "Pengguna dengan Nama Lengkap $Nama_Lengkap tidak ditemukan.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/ubahSandiUser.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>

<body>
    <h2>Ubah Kata Sandi</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="username">Nama Lengkap:</label>
        <input type="text" name="username" required><br>

        <label for="current_password">Kata Sandi Lama:</label>
        <input type="password" name="current_password" required><br>

        <label for="new_password">Kata Sandi Baru:</label>
        <input type="password" name="new_password" required><br>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>

</html>