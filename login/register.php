<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style_register.css">
</head>
<body>

      <main class="cd__main">
         <!-- Start DEMO HTML (Use the following code into your project)-->
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu"> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <div class="profile-pic">
              <img src="img/icon.png" width="40px" height="40px" alt="Profile Picture">
           </div>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#"><i class="fas fa-sliders-h fa-fw"></i> Account</a></li>
          <li><a class="dropdown-item" href="#"><i class="fas fa-cog fa-fw"></i> Settings</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="index.php"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>


<!-- <nav class="navbar-container sticky-top">
  <div class="navbar navbar-expand-lg bg-body-tertiary navbar-logo">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">
              <img src="../img/cn_logo.png" alt="Logo" width="60" height="50" class="d-inline-block align-text-top">
              SMK Citra Negara
          </a>
          <a class="navbar-smk">
            <img src="img/icon.png" alt="" width="50" height="50">
          </a>
      </div>
  </div>
</nav> -->

<div class="container form-container">
    <!-- Form Header -->
    <!-- <div class="form-section">
        <h4>Registration (Internal)</h4>
    </div> -->

    <!-- Form -->
    <form class="needs-validation mt-3" novalidate>

        <!-- Student's ID Number -->
        <div class="mb-3">
            <label for="studentId" class="form-label">NISN</label>
            <input type="text" class="form-control" id="nisn" placeholder="Nomor Induk Siswa Nasional" required>
            <div class="invalid-feedback">
                Tolong masukan NISN Calon Murid.
            </div>
        </div>

        <!-- Student's Name -->
        <div class="mb-3">
            <label for="studentName" class="form-label">Nama Murid</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama Panjang Murid" required>
            <div class="invalid-feedback">
                Tolong masukan Nama Panjang Calon Murid.
            </div>
        </div>

        <!-- Student's Date of Birth -->
        <div class="mb-3">
            <label for="studentDob" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="birth" required>
            <div class="invalid-feedback">
                Tolong masukan Tanggal Lahir Calon Murid.
            </div>
        </div>

        <!-- Student's Gender -->
        <div class="mb-3">
            <label for="gender" class="form-label">Jenis Kelamin Siswa</label>
            <div>
                <input type="radio" class="form-check-input" name="gender" id="cowo" value="Laki-Laki" required>
                <label for="cewe" class="form-check-label">Laki-Laki</label>
            </div>
            <div>
                <input type="radio" class="form-check-input" name="gender" id="cewe" value="Perempuan" required>
                <label for="cewe" class="form-check-label">Perempuan</label>
            </div>
            <div class="invalid-feedback">
                Tolong pilih jenis kelamin Murid.
            </div>
        </div>

        <!-- Parent's/Guardian's Name -->
        <div class="mb-3">
            <label for="parentName" class="form-label">Nama Ayah / Wali Murid</label>
            <input type="text" class="form-control" id="ayah" placeholder="Nama Panjang Ayah / Wali Murid" required>
            <div class="invalid-feedback">
            Tolong masukan Nama Ayah Calon Murid.
            </div>
        </div>

        <div class="mb-3">
            <label for="parentName" class="form-label">Nama Ibu / Wali Murid</label>
            <input type="text" class="form-control" id="ibu" placeholder="Nama Panjang Ibu / Wali Murid" required>
            <div class="invalid-feedback">
            Tolong masukan Nama Ibu Calon Murid.
            </div>
        </div>

        <!-- Parent's/Guardian's Email -->
        <div class="mb-3">
            <label for="parentEmail" class="form-label">Email Orang Tua / Wali Murid</label>
            <input type="email" class="form-control" id="email" placeholder="Email Orang Tua / Wali Murid" required>
            <div class="invalid-feedback">
                Tolong masukan Email Orang Tua / Wali Murid.
            </div>
        </div>

        <!-- Parent's/Guardian's WA/Mobile Phone Number -->
        <div class="mb-3">
            <label for="parentPhone" class="form-label">No HP Orang Tua / Wali Murid</label>
            <input type="tel" class="form-control" id="phone" placeholder="No HP Orang Tua / Wali Murid" required>
            <div class="invalid-feedback">
                Tolong masukan No HP Orang Tua / Wali Murid.
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" id="submit" class="btn btn-success">Submit</button>
    </form>
</div>

<!-- Bootstrap JS and validation script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>

    // Bootstrap form validation
    (function () {
        'use strict';
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>

</body>
</html>