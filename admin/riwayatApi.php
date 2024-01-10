<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "rentsite");

// Ambil ID file dari URL
$idPeminjaman = isset($_GET['file_id']) ? $_GET['file_id'] : '';

// Query untuk mengambil informasi file dari database

if (!empty($idPeminjaman)) {
  // Update 'id_file' in 'peminjaman_gedung' table
  $sqlUpdatePeminjaman = "UPDATE peminjaman_gedung SET status_upload_berkas = 2 WHERE id_peminjaman = $idPeminjaman";

  if (mysqli_query($conn, $sqlUpdatePeminjaman)) {
    // Redirect back to riwayat.php after successful upload and status update
    echo "<script>alert('Berhasil Menyetujui Peminjaman');
    document.location.href='cekBerkasAdmin.php?status=success'</script>";
    exit();
  } else {
    echo "Failed to update peminjaman status.";
  }
} else {
  echo "ID Peminjaman tidak valid.";
}

?>