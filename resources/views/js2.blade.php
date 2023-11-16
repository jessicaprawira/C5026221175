<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr. net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
function validateForm() {
    // let x = document.forms["myForm"]["fname"].value;
    var x = document.getElementById("fname");
    var nrp = document.getElementById("nrp");

    if (x.value == "") { //isian kosong, berarti text box tidak diisi
    alert("Nama harus diisi...");
    x.focus;
    return false;
    //stop, gak dikirim ke server
  }

    if (nrp.value == "") {
      alert("NRP harus diisi..");
      nrp.focus;
      return false;
  }

    if(isNaN(nrp.value) == true) {
      alert("NRP harus berupa angka.");
      nrp.focus;
      nrp.value = "";
      return false; //function ini ada return value, bukan void
  }

    if (nrp.value.length != 10) {
      alert("Jumlah digit harus 10, Anda memasukkan " + nrp.value.length + "digit!");
      nrp.focus;
      nrp.value= "";
      return false; //function ini ada return value, bukan void
  }
//5026221175
    if (nrp.value.substring(0,4) != 5026) {
      alert("Hanya untuk mahasiswa SI");
      nrp.focus;
      return false; //function ini ada return value, bukan void
  }

    if (nrp.value.substring(4,6) != 21 && nrp.value.substring(4,6) !=22) {
      alert("Hanya untuk mahasiswa angkatan 21 dan 22");
      nrp.focus;

      return false; //function ini ada return value, bukan void
    }

    //return false; //boleh diberi boleh tidak, karena default function adalah true. pencegahan nilai ke false berfungsi supaya tidak jadi dikirimkan.
  }
</script>
</head>

<body>

<h2>Pendaftaran Asisten Lab Sistem Informasi</h2>

<form name="myForm" action="https://google.com" onsubmit="return validateForm()" method="post">
  <label for="fname">Name:</label>
  <input type="text" name="fname" id="fname" class="form-control">
  <label for="nrp">NRP:</label>
  <input type="text" id="nrp" class="form-control" name="nrp">
  <input type="submit" value="Submit" class="btn btn-primary">
  <input type="reset" value="Kosongi" class="btn btn-warning">
</form>
</body>
</html>
