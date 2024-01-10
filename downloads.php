<?php include 'filesLogic.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Uploadberkas</title>
    <link rel="stylesheet" href="uploadberskas.css?v=<?php echo time(); ?>" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <title>Download files</title>
</head>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <h3>Upload File</h3>
                <input type="file" name="myfile"> <br>
                <button type="submit" name="save">upload</button>
            </form>
        </div>
    </div>
</body>

</html> -->


<body>
    <div class="contain">
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


    <table>
        <thead>
            <th>ID</th>
            <th>Filename</th>
            <th>size (in mb)</th>
            <th>Downloads</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach ($files as $file): ?>
            <tr>
                <td>
                    <?php echo $file['id']; ?>
                </td>
                <td>
                    <?php echo $file['name']; ?>
                </td>
                <td>
                    <?php echo floor($file['size'] / 1000) . ' KB'; ?>
                </td>
                <td>
                    <?php echo $file['downloads']; ?>
                </td>
                <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>


    <!-- footer start -->
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
    <script>
    let selectedFile;

    function handleFileSelect(event) {
        event.preventDefault();

        const files = event.target.files || event.dataTransfer.files;

        if (files.length > 0) {
            // Handle the uploaded files
            handleFiles(files);
        }
    }

    function handleFiles(files) {
        const filePreview = document.getElementById("file-preview");
        const fileLabel = document.getElementById("file-label");

        for (const file of files) {
            console.log("File name:", file.name);
            console.log("File type:", file.type);
            console.log("File size:", file.size);

            // Display file name and preview
            fileLabel.innerText = `Selected File: ${file.name}`;
            selectedFile = file;

            // Display PDF preview (you may need a library for more complex previews)
            if (file.type === "application/pdf") {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const pdfObject = document.createElement("object");
                    pdfObject.data = e.target.result;
                    pdfObject.width = "100%";
                    pdfObject.height = "500";
                    filePreview.innerHTML = "";
                    filePreview.appendChild(pdfObject);
                };
                reader.readAsDataURL(file);
            } else {
                filePreview.innerHTML =
                    "File preview not supported for this file type.";
            }
        }
    }

    function submitForm() {
        // Implement your logic for form submission
        if (selectedFile) {
            console.log("File submitted:", selectedFile.name);
            // Add your submission logic here, for example, using FormData to submit the file
            const formData = new FormData();
            formData.append("file", selectedFile);

            // Example: You can use fetch API to send the form data to the server
            // fetch("your_upload_endpoint", {
            //   method: "POST",
            //   body: formData,
            // })
            // .then(response => response.json())
            // .then(data => console.log(data))
            // .catch(error => console.error('Error:', error));
        } else {
            console.log("No file selected for submission");
        }
    }

    function deleteFile() {
        // Implement your logic for deleting the selected file
        const filePreview = document.getElementById("file-preview");
        const fileLabel = document.getElementById("file-label");

        fileLabel.innerText = "Drag & Drop a PDF file here or click to select";
        selectedFile = null;
        filePreview.innerHTML = "";
    }

    // Set up event listeners for drag and drop
    const dropArea = document.getElementById("drop-area");

    dropArea.addEventListener("dragover", function(event) {
        event.preventDefault();
        dropArea.classList.add("dragover");
    });

    dropArea.addEventListener("dragleave", function() {
        dropArea.classList.remove("dragover");
    });

    dropArea.addEventListener("drop", function(event) {
        event.preventDefault();
        dropArea.classList.remove("dragover");

        const files = event.dataTransfer.files;

        if (files.length > 0) {
            // Handle the dropped files
            handleFiles(files);
        }
    });
    </script>
    <!-- <script src="script.js"></script> -->
</body>

</html>