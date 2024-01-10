<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'rentsite');

$sql = "SELECT * FROM files";
$result = mysqli_query($conn, $sql);
$files = [];
while ($row = mysqli_fetch_assoc(($result))) {
    $files[] = $row;
}


// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['pdf'])) {
        echo "<script>alert('Ekstensi harus berupa PDF!');
        document.location.href='user/upload.php';
        </script>";
    } elseif ($_FILES['myfile']['size'] > 10000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            // Insert file information into the 'files' table
            $sqlInsertFile = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
            mysqli_query($conn, $sqlInsertFile);

            // Retrieve the ID of the last inserted file
            $idFile = mysqli_insert_id($conn);

            // Get the peminjaman ID from the URL parameter
            $idPeminjaman = isset($_GET['id']) ? $_GET['id'] : '';

            if (!empty($idPeminjaman)) {
                // Update 'id_file' in 'peminjaman_gedung' table
                $sqlUpdatePeminjaman = "UPDATE peminjaman_gedung SET id = $idFile, status_upload_berkas = 1 WHERE id_peminjaman = $idPeminjaman";

                if (mysqli_query($conn, $sqlUpdatePeminjaman)) {
                    // Redirect back to riwayat.php after successful upload and status update
                    header("Location: user/riwayat.php?status=success");
                    exit();
                } else {
                    echo "Failed to update peminjaman status.";
                }
            } else {
                echo "ID Peminjaman tidak valid.";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}

// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));

        //This part of code prevents files from being corrupted after download
        ob_clean();
        flush();

        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}
?>