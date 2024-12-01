<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
</html>

<?php
include('conn.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

// Tambahkan link font Ubuntu
echo "<link href='https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap' rel='stylesheet'>";

// Pengecekan untuk admin
if ($email === 'admin@gmail.com' && $password === '12345') {
    // Jika email dan password cocok, maka register akun akan gagal
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
          <script>
            Swal.fire({
                icon: 'error',
                title: 'Login Gagal',
                text: 'Silahkan Login ulang',
                customClass: {
                    title: 'swal2-title-custom',
                    popup: 'swal2-popup-custom'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    history.go(-1);
                }
            });
          </script>
          <style>
              .swal2-title-custom, .swal2-popup-custom {
                  font-family: 'Ubuntu', sans-serif;
              }
          </style>";
    exit();
}

$query = "INSERT INTO register(firstname,lastname,email,password) VALUES ('$firstname','$lastname','$email','$password')";
$result = mysqli_query($conn,$query);


if($result){
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
          <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Login berhasil',
                customClass: {
                    title: 'swal2-title-custom',
                    popup: 'swal2-popup-custom'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = '../public/students/register';
                }
            });
          </script>
          <style>
              .swal2-title-custom, .swal2-popup-custom {
                  font-family: 'Ubuntu', sans-serif;
              }
          </style>";
}else{
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
          <script>
            Swal.fire({
                icon: 'error',
                title: 'Login Gagal',
                text: 'Silahkan Login ulang',
                customClass: {
                    title: 'swal2-title-custom',
                    popup: 'swal2-popup-custom'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    history.go(-1);
                }
            });
          </script>
          <style>
              .swal2-title-custom, .swal2-popup-custom {
                  font-family: 'Ubuntu', sans-serif;
              }
          </style>";
}

?>