<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<style>
    .form-section {
    background-color: #f48127; /* Orange section header */
    color: white;
    padding: 10px;
}

.form-container {
    margin-top: 20px;
}

.form-control.is-invalid {
    border-color: #dc3545; /* Red border for invalid fields */
}

.form-control:invalid ~ .invalid-feedback {
    display: block;
}

  /* Menggeser ikon profil ke kiri */
.profile-pic {
    position: relative;
    left: -4rem; /* Menggeser ikon 4rem ke kiri */
}

/* Mengatur dropdown menu agar muncul di sebelah kanan ikon */
.profile-menu .dropdown-menu {
    left: auto;
    right: 0; /* Menempatkan dropdown di kanan ikon */
    margin-top: -2rem;
}
</style>

      <main class="cd__main">
         <!-- Start DEMO HTML (Use the following code into your project)-->
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu"> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <div class="profile-pic">
              <img src="../img/icon.png" width="40px" height="40px" alt="Profile Picture">
           </div>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <!-- <li><a class="dropdown-item" href="#"><i class="fas fa-sliders-h fa-fw"></i> Account</a></li>
          <li><a class="dropdown-item" href="#"><i class="fas fa-cog fa-fw"></i> Settings</a></li>
          <li><hr class="dropdown-divider"></li> -->
          <li><a class="dropdown-item" href="../../login/index.php"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<div class="container form-container">

    <!-- Form -->
    <form action="{{ route('student.store') }}" method="POST" class="needs-validation mt-3" novalidate>
    @csrf

    <!-- Student's ID Number -->
    <div class="mb-3">
        <label for="studentId" class="form-label">NISN</label>
        <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Nomor Induk Siswa Nasional" required>
        <div class="invalid-feedback">
            Tolong masukan NISN Calon Murid.
        </div>
    </div>

    <!-- Student's Name -->
    <div class="mb-3">
        <label for="studentName" class="form-label">Nama Murid</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Panjang Murid" required>
        <div class="invalid-feedback">
            Tolong masukan Nama Panjang Calon Murid.
        </div>
    </div>

    <!-- Student's Date of Birth -->
    <div class="mb-3">
        <label for="studentDob" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="birth" name="birth" required>
        <div class="invalid-feedback">
            Tolong masukan Tanggal Lahir Calon Murid.
        </div>
    </div>

    <!-- Students Gender -->
    <div class="mb-3">
        <label for="program" class="form-label">Jenis Kelamin</label>
        <select class="form-select" id="gender" name="gender" required>
            <option value="" selected disabled>Pilih Jenis Kelamin Murid</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <div class="invalid-feedback">
            Tolong pilih Gender Murid.
        </div>
    </div>

    <!-- Parent's/Guardian's Name -->
    <div class="mb-3">
        <label for="ayah" class="form-label">Nama Wali Murid</label>
        <input type="text" class="form-control" id="ayah" name="ayah" placeholder="Nama Panjang Wali Murid" required>
        <div class="invalid-feedback">
            Tolong masukan Nama Wali Calon Murid.
        </div>
    </div>

    <div class="mb-3">
        <label for="ibu" class="form-label">Asal Sekolah Calon Murid</label>
        <input type="text" class="form-control" id="ibu" name="ibu" placeholder="Asal Sekolah Calon Murid" required>
        <div class="invalid-feedback">
            Tolong masukan Asal Sekolah Calon Murid.
        </div>
    </div>

    <!-- Program Selection -->
    <div class="mb-3">
        <label for="program" class="form-label">Program Keahlian</label>
        <select class="form-select" id="jurusan" name="jurusan" required>
            <option value="" selected disabled>Pilih Program Keahlian</option>
            <option value="TJKT">TJKT</option>
            <option value="MPLB">MPLB</option>
            <option value="PPLG">PPLG</option>
            <option value="DKV">DKV</option>
            <option value="PM">PM</option>
        </select>
        <div class="invalid-feedback">
            Tolong pilih Program Keahlian yang diinginkan.
        </div>
    </div>

    <!-- Parent's/Guardian's Email -->
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        <div class="invalid-feedback">
            Tolong masukan Email 
        </div>
    </div>

    <!-- Parent's/Guardian's WA/Mobile Phone Number -->
    <div class="mb-3">
        <label for="phone" class="form-label">No HP Orang Tua / Wali Murid</label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="No HP Orang Tua / Wali Murid" required>
        <div class="invalid-feedback">
            Tolong masukan No HP Orang Tua / Wali Murid.
        </div>
    </div>

    <!-- Submit Button -->
    <button type="submit" id="submit" class="btn btn-success">Submit</button>
    <br><br>
</form>

</div>

@if(session('success'))
        <script>
            Swal.fire({
                title: 'Success!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to login.php
                    window.location.href = '../../login/index.php';
                }
            });
        </script>
    @endif

<!-- Bootstrap JS and validation script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
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