function validateForm() {
    var hasError = false;

    var inputNama = document.getElementById("inputNama").value;
    var namaError = document.getElementById("namaError");

    var inputSubjek = document.getElementById("inputSubjek").value;
    var subjekError = document.getElementById("subjekError");

    var inputPesan = document.getElementById("inputPesan").value;
    var pesanError = document.getElementById("pesanError");

    var inputEmail = document.getElementById("inputEmail").value;
    var emailError = document.getElementById("emailError");

    
    // Validasi nama (tidak boleh lebih dari 20 karakter)
    if (inputNama.length == 0) {
        namaError.innerHTML = "Nama tidak boleh kosong";
        namaError.style.display = "block";
        hasError = true;
      } 
    else if (inputNama.length > 20) {
      namaError.innerHTML = "Nama tidak boleh lebih dari 20 karakter.";
      namaError.style.display = "block";
      hasError = true;
    }else {
      namaError.style.display = "none";
    }

    if (inputEmail.length == 0) {
      emailError.innerHTML = "Email tidak boleh kosong";
      emailError.style.display = "block";
      hasError = true;
    } else {
      emailError.style.display = "none";
    }

    if (inputSubjek.length == 0) {
      subjekError.innerHTML = "Subjek tidak boleh kosong";
      subjekError.style.display = "block";
      hasError = true;
    } else {
      subjekError.style.display = "none";
    }

    if (inputPesan.length == 0) {
      pesanError.innerHTML = "Pesan tidak boleh kosong";
      pesanError.style.display = "block";
      hasError = true;
    } else {
        pesanError.style.display = "none";
    }

    if (hasError) {
        return false;
      }

    return true;
    
  }
  