<?php


$conn = mysqli_connect("localhost", "root", "", "rentsite");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahMahasiswa($nama_lengkap, $nim, $fakultas, $jurusan)
{
    global $conn;
    $query = "INSERT INTO pengguna_mahasiswa (Nama_Lengkap, NIM, Fakultas, Jurusan) 
              VALUES ('$nama_lengkap', '$nim', '$fakultas', '$jurusan')";
    mysqli_query($conn, $query);
}

function tambahDosen($nama_lengkap, $nip, $fakultas)
{
    global $conn;
    $query = "INSERT INTO pengguna_dosen (Nama_Lengkap, NIP, Fakultas) 
              VALUES ('$nama_lengkap', '$nip', '$fakultas')";
    mysqli_query($conn, $query);
}

?>