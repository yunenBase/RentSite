//selecting all required elements
const dropArea = document.querySelector(".upload"),
  dragText = dropArea.querySelector(".textupload"),
  button = dropArea.querySelector(".cari"),
  dragDot = dropArea.querySelectorAll(".dot"),
  input = dropArea.querySelector("input");

let file; //this is a global variable and we'll use it inside multiple functions
var fileobj;

button.onclick = () => {
  input.click(); //if user click on the button then the input also clicked
  file_browse();
};

input.addEventListener("change", function () {
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = this.files[0];
  dropArea.classList.add("active");
  showFile(); //calling function
});

//If user Drag File Over DropArea
dropArea.addEventListener("dragover", (event) => {
  event.preventDefault(); //preventing from default behaviour
  dropArea.classList.add("active");

  dragText.textContent = "Lepaskan Umtuk Mengupload File";
  dragDot.forEach((dotElement) => {
    dotElement.style.display = "none";
  });
});

//If user leave dragged File from DropArea
dropArea.addEventListener("dragleave", () => {
  dropArea.classList.remove("active");
  dragText.textContent = "Seret berkas kesini";

  dragDot.forEach((dotElement) => {
    dotElement.style.display = "block";
  });
});

//If user drop File on DropArea
dropArea.addEventListener("drop", (event) => {
  event.preventDefault(); //preventing from default behaviour
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = event.dataTransfer.files[0];
  showFile(); //calling function
});

// ganti ini sesuaikan dengam php dan ganti hanya untuk upload file bukan gambar
function showFile() {
  let fileType = file.type; //getting selected file type
  let validExtensions = ["application/pdf"]; // Set valid extension to PDF
  if (validExtensions.includes(fileType)) {
    // If user selected file is a PDF file
    dropArea.innerHTML = `<p>${file.name}</p>`; // Display the PDF file name
    dropArea.classList.add("active");
  } else {
    alert("Invalid file type. Please upload a PDF file.");
    dropArea.classList.remove("active");
    dragText.innerHTML = "Seret Berkas Kesini!<br>Atau";
  }
}
function upload_file(e) {
  e.preventDefault();
  fileobj = e.dataTransfer.files[0];
  js_file_upload(fileobj);
}

function file_browse() {
  document.getElementById("file").onchange = function () {
    fileobj = document.getElementById("file").files[0];
    js_file_upload(fileobj);
  };
}

function js_file_upload(file_obj) {
  if (file_obj != undefined) {
    var form_data = new FormData();
    form_data.append("file", file_obj);

    // Tambahkan validasi untuk memastikan bahwa tipe file adalah PDF
    if (file_obj.type === "application/pdf") {
      var xhttp = new XMLHttpRequest();
      xhttp.open("POST", "uploadberkas.php", true);
      xhttp.onload = function (event) {
        if (xhttp.status == 200) {
          console.log("Uploaded!");
        } else {
          console.error("Error:", xhttp.status, xhttp.statusText);
        }
      };
      xhttp.onerror = function () {
        console.error("Network error occurred.");
      };

      xhttp.send(form_data);
    } else {
      alert("Invalid file type. Please upload a PDF file.");
    }
  }
}
