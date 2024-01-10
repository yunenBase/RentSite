<?php
require 'function.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    // Tangani pengunggahan file
    $uploadDir = 'uploads/'; // Tetapkan direktori unggahan Anda
    $allowedExtensions = ['pdf']; // Ekstensi file yang diizinkan

    $fileName = $_FILES['file']['name'];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if (in_array($fileExtension, $allowedExtensions)) {
        $uploadFile = $uploadDir . basename($fileName);

        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
            // File berhasil diunggah, sekarang masukkan ke dalam tabel dokumenpdf
            $fileContent = file_get_contents($uploadFile);

            // Sesuaikan dengan entitas tabel dokumenpdf (tidak perlu menyertakan 'id' karena sudah AUTO_INCREMENT)
            $sql = "INSERT INTO dokumenpdf (nama_file, isi_file, tanggal_dibuat) VALUES (:nama_file, :isi_file, NOW())";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nama_file', $fileName);
            $stmt->bindParam(':isi_file', $fileContent, PDO::PARAM_LOB);

            if ($stmt->execute()) {
                // Redirect atau tampilkan pesan keberhasilan
                header("Location: success.php");
                exit();
            } else {
                echo "Gagal menyisipkan data ke database.";
            }
        } else {
            echo "Pengunggahan file gagal!";
        }
    } else {
        echo "Ekstensi file tidak diizinkan. Harap unggah file PDF.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Uploadberkas</title>
  <link rel="stylesheet" href="uploadberskas.css" />
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <div class="container">
    <nav class="menu">
      <div class="logo">
        <img class="gmblogo" src="logorentsite.png" alt="" />
        <h1>RentSite</h1>
      </div>
      <ul>
        <li><a href="cekgedung.php">Cek Gedung</a></li>
        <li><a href="sop.php">SOP</a></li>
        <li><a href="loadberkas.php">Berkas</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <a href="profil.php" class="login1">Profile</a>
      </ul>
      <div class="menu-toggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>
  </div>



  <h2>Upload Berkas</h2>
  <div class="upload" ondrop="upload_file(event)" ondragover="return false">
    <div class="isiupload">
      <h3 class="textupload">
        Seret Berkas Kesini!<br />
        Atau
      </h3>
      <button class="cari">Cari file</button>
      <input type="file" name="file" id="file" hidden />
    </div>
    <div class="garing1"></div>
    <div class="garing2"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
  </div>
  <div class="tombol">
    <button>Kirim Berkas</button><button>Hapus</button>
  </div>
  <h4>
    Belum Punya Berkas? Unduh <span><a href="loadberkas.php"> Disini!</a></span>
  </h4>
  <!-- konten -->
  <fotter>
    <div class="foot1">
      <ui class="judul">Rent Site</ui>
      <img class="logo" src="cekgedung/logorentsite.png" alt="" />
    </div>
    <div class="foot2"></div>
    <div class="foot3">
      <p class="kontak1">Kampus Universitas Andalas</p>
      <a class="kontak2" href="">Limau Manis, Kec. Pauh</a>
      <a class="kontak3" href="">Kota Padang, Sumatera Barat</a>
      <a class="kontak4" href="">(+62)-123-456-789</a>
    </div>
  </fotter>
  <!-- footer -->
  <script src="upload.js"></script>
  <script src="script.js"></script>
</body>

</html>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Upload Dokumen</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--        <link href="styles.css" rel="stylesheet" />-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
  </script>
</head>


<body>
  <nav class="navbar navbar-dark bg-primary shadow mb-5">
    <div class="container-fluid">
      <a class="navbar-brand"><i class="bi bi-file-pdf"></i> Pdf Book</a>
    </div>
  </nav>

  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
              <div class="card-header">
                <h3 class="text-center font-weight-light my-4"><i class="bi bi-file-pdf"></i>Tambah Pdf</h3>
              </div>
              <div class="card-body">
                <form action="index.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="small mb-1" for="judul_file_pdf">Judul Pdf</label>
                    <input class="form-control py-4" id="judul_file_pdf" name="judul_file_pdf" type="text"
                      placeholder="Judul" autocomplete="off" required />

                  </div>
                  <div class="form-group">
                    <label class="small mb-1" for="nama_file_pdf">File Pdf</label>
                    <div class="input-group mb-3">
                      <input type="file" class="form-control" id="nama_file_pdf" name="nama_file_pdf" required>
                    </div>
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                    <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
                  </div>

                </form>
              </div>
              <div class="card-footer text-center">
                <div class="small"><a href="index.php">Kembali</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
</body>

</html>