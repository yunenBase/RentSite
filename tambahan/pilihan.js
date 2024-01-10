const milih = document.getElementsByClassName("status"),
  aksi = document.getElementsByClassName("pilihan"),
  sedia = document.getElementsByClassName("tersedia"),
  tidaksedia = document.getElementsByClassName("tidaktersedia");

for (let i = 0; i < milih.length; i++) {
  var isipilih = milih[i].innerText; //
  if (isipilih.includes("Tidak Tersedia")) {
    sedia[i].style.display = "none";
  } else if (isipilih.includes("Tersedia")) {
    tidaksedia[i].style.display = "none";
  }
}
