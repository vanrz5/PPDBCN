<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Data Siswa</title>

    <!-- Tambahkan SweetAlert dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Tambahkan font Ubuntu dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        /* Terapkan font Ubuntu ke seluruh body */
        body, .swal2-title, .swal2-html-container, .swal2-confirm, .swal2-cancel {
            font-family: 'Ubuntu', sans-serif;
        }
    </style>
</head>
<body>
    <!-- Jika tidak perlu HTML tambahan di sini, body kosong -->
</body>
</html>

<?php
session_start();

$koneksi = mysqli_connect("localhost", "root", "", "profile_school");

// Tambah siswa
if (isset($_POST['tambah_barang'])) {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $birth = $_POST['birth'];
    $gender = $_POST['gender'];
    $ayah = $_POST['ayah'];
    $ibu = $_POST['ibu'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO students (nisn, nama, birth, gender, ayah, ibu, jurusan, email, phone) 
            VALUES ('$nisn', '$nama', '$birth', '$gender', '$ayah', '$ibu', '$jurusan', '$email', '$phone')";
    $hasil = mysqli_query($koneksi, $sql);

    if ($hasil) {
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Data siswa berhasil ditambahkan!',
                customClass: {
                    title: 'swal2-title',
                    htmlContainer: 'swal2-html-container'
                }
            }).then(function() {
                window.location = 'home.php';
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Gagal menambahkan data siswa!',
                customClass: {
                    title: 'swal2-title',
                    htmlContainer: 'swal2-html-container'
                }
            }).then(function() {
                history.go(-1);
            });
        </script>";
    }    
}

// Edit siswa
if (isset($_POST['edit_barang'])) {
    $id = $_POST['id'];
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $birth = $_POST['birth'];
    $gender = $_POST['gender'];
    $ayah = $_POST['ayah'];
    $ibu = $_POST['ibu'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE students SET nisn='$nisn', nama='$nama', birth='$birth', gender='$gender', ayah='$ayah', ibu='$ibu', jurusan='$jurusan', email='$email', phone='$phone' WHERE id='$id'";
    $hasil = mysqli_query($koneksi, $sql);

    if ($hasil) {
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Data siswa berhasil diperbarui!',
                customClass: {
                    title: 'swal2-title',
                    htmlContainer: 'swal2-html-container'
                }
            }).then(function() {
                window.location = 'home.php';
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Gagal memperbarui data siswa!',
                customClass: {
                    title: 'swal2-title',
                    htmlContainer: 'swal2-html-container'
                }
            }).then(function() {
                history.go(-1);
            });
        </script>";
    }
}

// Hapus siswa
if (isset($_POST['delete_barang'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM students WHERE id='$id'";
    $hasil = mysqli_query($koneksi, $sql);

    echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: 'Data siswa berhasil dihapus!',
            customClass: {
                title: 'swal2-title',
                htmlContainer: 'swal2-html-container'
            }
        }).then(function() {
            window.location = 'home.php';
        });
    </script>";
}

// Tambah akun
if (isset($_POST['tambah_akun'])) {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);  // Keamanan lebih baik dengan hashing

    $sql = "INSERT INTO register (firstname, lastname, email, password) 
            VALUES ('$firstname', '$lastname', '$email', '$password')";
    $hasil = mysqli_query($koneksi, $sql);

    if ($hasil) {
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Akun berhasil ditambahkan!',
                customClass: {
                    title: 'swal2-title',
                    htmlContainer: 'swal2-html-container'
                }
            }).then(function() {
                window.location = 'home.php';
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Gagal menambahkan akun!',
                customClass: {
                    title: 'swal2-title',
                    htmlContainer: 'swal2-html-container'
                }
            }).then(function() {
                history.go(-1);
            });
        </script>";
    }
}

// BAN akun
if (isset($_POST['ban'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM register WHERE id='$id'";
    $hasil = mysqli_query($koneksi, $sql);

    echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: 'Akun berhasil dihapus!',
            customClass: {
                title: 'swal2-title',
                htmlContainer: 'swal2-html-container'
            }
        }).then(function() {
            window.location = 'home.php';
        });
    </script>";
}
?>
