<?php

require "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="home.php">Admin</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../index.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="home.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Home
                        </a>
                        <a class="nav-link" href="data_akun.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Data Akun
                        </a>
                        <a class="nav-link" href="data_siswa.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Data Siswa
                        </a>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as: Admin</div>

                    </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Home</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Lorem ipsum dolor sit amet.</li>
                    </ol>


                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                Tambah Akun
                            </button> -->
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NISN</th>
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Gender</th>
                                        <th>Nama Wali</th>
                                        <th>Asal Sekolah</th>
                                        <th>Jurusan</th>
                                        <th>Email</th>
                                        <th>No Hp</th>
                                        <th>Create</th>
                                        <th>Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $getData = mysqli_query($koneksi, "SELECT *FROM students");
                                    $no = 1;
                                    while ($data = mysqli_fetch_array($getData)) {
                                        $nisn = $data["nisn"];
                                        $nama = $data["nama"];
                                        $birth = $data["birth"];
                                        $gender = $data["gender"];
                                        $ayah = $data["ayah"];
                                        $ibu = $data["ibu"];
                                        $jurusan = $data["jurusan"];
                                        $email = $data["email"];
                                        $nohp = $data["phone"];
                                        $create = $data["created_at"];
                                        $update = $data["updated_at"];

                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $nisn; ?></td>
                                            <td><?= $nama; ?></td>
                                            <td><?= $birth; ?></td>
                                            <td><?= $gender; ?></td>
                                            <td><?= $ayah; ?></td>
                                            <td><?= $ibu; ?></td>
                                            <td><?= $jurusan; ?></td>
                                            <td><?= $email; ?></td>
                                            <td><?= $nohp; ?></td>
                                            <td><?= $create; ?></td>
                                            <td><?= $update; ?></td>
                                        </tr>
                                    <?php
                                    };
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah barang</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <!-- <div class="modal-body">
                <form action="" method="post">
                    <input type="text" name="nama_barang" id="" placeholder="Nama Barang" class="form-control">
                    <br>
                    <input type="number" name="harga_barang" id="" placeholder="Harga Barang" class="form-control">
                    <br>
                    <input type="number" name="jumlah_barang" id="" placeholder="Jumlah Barang" class="form-control">
                    <br>
                    <input type="text" name="kategori" id="" placeholder="Kategori" class="form-control">
                    <br>
                    <button type="submit" class="btn btn-primary" name="tambah_barang">Tambah</button>
                </form>
            </div> -->

            <!-- Modal footer -->
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div> -->

</html>