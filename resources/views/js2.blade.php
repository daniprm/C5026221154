<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function validateForm() {
        //let x = document.forms["myForm"]["fname"].value;
        var x = document.getElementById("fname");
        var nrp = document.getElementById("nrp");
        //bahwa yang dicek cukup yang invalid
        //lakukan per  jenis validasi, supaya user tahu salahnya apa
        if (x.value == "") {
          //isian kosong berarti textbox tidak diisi
          alert("Nama harus diisi");
          x.focus();
          return false; //function ini ada return value, bukan void
          //stop, tidak dikirim ke server
        }
        if (nrp.value == "") {
          //isian kosong berarti textbox tidak diisi
          alert("NRP harus diisi");
          nrp.focus();
          return false; //function ini ada return value, bukan void
          //stop, tidak dikirim ke server
        }
        if (isNaN(nrp.value) == true) {
          alert("NRP harus angka");
          nrp.focus();
          nrp.value = "";
          return false;
        }
        if (nrp.value.length != 10) {
          alert(
            "NRP harus 10 digit, Anda memasukkan " +
              nrp.value.length +
              " digit!"
          );
          nrp.focus();
          return false;
        }
        if (nrp.value.substring(0, 4) !== "5026") {
          alert("Hanya untuk mahasiswa SI");
          nrp.focus();
          return false;
        }

        if (nrp.value.substring(4, 6) !== ("22" || "21")) {
          alert("Hanya untuk angkatan 2022 & 2021");
          nrp.focus();
          return false;
        }
      }
    </script>
  </head>
  <body>
    <div class="container pt-5">
      <h2 class="text-center">Ketik Nama dan NRP anda:</h2>

    <form
      name="myForm"
      action="https://chat.openai.com/?model=text-davinci-002-render-sha"
      onsubmit="return validateForm()"
      method="post"
      class="border border-1 p-4 rounded w-75 mx-auto"
    >
      <label for="fname">Nama:</label>
      <input type="text" id="fname" name="fname" class="form-control border rounded-pill" />
      <label for="nrp">NRP:</label>
      <input type="text" id="nrp" name="nrp" class="form-control rounded-pill" />

      <input type="submit" value="Submit" class="btn btn-primary mt-4" />
      <input type="reset" value="Cancel" class="btn btn-danger mt-4" />
    </form>
    </div>

  </body>
</html>
