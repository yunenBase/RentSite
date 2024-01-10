<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "rentsite");

// Ambil ID file dari URL
$idFile = isset($_GET['file_id']) ? $_GET['file_id'] : '';

// Query untuk mengambil informasi file dari database
$sql = "SELECT * FROM files WHERE id = $idFile";
$result = mysqli_query($conn, $sql);

if ($result) {
    $fileData = mysqli_fetch_assoc($result);
    $fileName = $fileData['name'];
    $fileSize = $fileData['size'];
    $fileContent = $fileData['content'];

    // Set header untuk pengunduhan
    header("Content-length: $fileSize");
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=\"$fileName\"");

    // Mengirimkan konten file ke browser
    echo $fileContent;
} else {
    echo "File not found.";
}

// Tutup koneksi ke database
mysqli_close($conn);
?>
