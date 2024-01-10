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
      reader.onload = function (e) {
        const pdfObject = document.createElement("object");
        pdfObject.data = e.target.result;
        pdfObject.width = "100%";
        pdfObject.height = "500";
        filePreview.innerHTML = "";
        filePreview.appendChild(pdfObject);
      };
      reader.readAsDataURL(file);
    } else {
      filePreview.innerHTML = "File preview not supported for this file type.";
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

dropArea.addEventListener("dragover", function (event) {
  event.preventDefault();
  dropArea.classList.add("dragover");
});

dropArea.addEventListener("dragleave", function () {
  dropArea.classList.remove("dragover");
});

dropArea.addEventListener("drop", function (event) {
  event.preventDefault();
  dropArea.classList.remove("dragover");

  const files = event.dataTransfer.files;

  if (files.length > 0) {
    // Handle the dropped files
    handleFiles(files);
  }
});
