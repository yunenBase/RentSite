var formPopup = document.getElementById("formPopup");
var peminjamanForm = document.getElementById("peminjamanForm");

function showForm() {
  formPopup.style.display = "block";
}

function closeForm() {
  formPopup.style.animation = "fadeOut 0.3s ease-in-out";
  setTimeout(() => {
    formPopup.style.display = "none";
    formPopup.style.animation = "";
    resetForm();
  }, 300);
}

function resetForm() {
  peminjamanForm.reset();
}

function submitForm() {
  var table = document
    .getElementById("tablePeminjaman")
    .getElementsByTagName("tbody")[0];
  var newRow = table.insertRow(table.rows.length);
  var tanggal = document.getElementById("tanggal").value;
  var nama = document.getElementById("nama").value;
  var catatan = document.getElementById("catatan").value;

  var cellTanggal = newRow.insertCell(0);
  var cellNama = newRow.insertCell(1);
  var cellCatatan = newRow.insertCell(2);

  cellTanggal.innerHTML = tanggal;
  cellNama.innerHTML = nama;
  cellCatatan.innerHTML = catatan;

  closeForm();
}
