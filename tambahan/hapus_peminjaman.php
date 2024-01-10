<?php
require 'function.php';

// Ambil id_peminjaman dari parameter URL
$idPeminjaman = isset($_GET['id']) ? $_GET['id'] : '';

// Logika untuk menghapus data peminjaman dari database
if ($idPeminjaman != '') {
    // Lakukan query untuk menghapus data pada database
    $sqlDeletePeminjaman = "DELETE FROM peminjaman_gedung WHERE id_peminjaman = $idPeminjaman";

    // Eksekusi query
    if ($conn->query($sqlDeletePeminjaman) === TRUE) {
        // Redirect kembali ke halaman riwayat.php setelah berhasil menghapus
        header("Location: riwayat.php?status=delete_success");
        exit();
    } else {
        echo "Error deleting peminjaman: " . $conn->error;
    }
} else {
    echo "ID Peminjaman tidak valid";
}
?>