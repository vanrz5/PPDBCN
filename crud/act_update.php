<?php
include('conn_read.php');

$nama = $_GET['nama_brg'];
$kategori = $_GET['kategori_brg'];
$jumlah = $_GET['jumlah_brg'];
$harga = $_GET['harga_brg'];
$tanggal = $_GET['tanggal_brgmasuk'];


$query = "UPDATE barang SET nama_brg='$nama',
kategori_brg='$kategori',jumlah_brg='$jumlah',harga_brg='$harga',
tanggal_brgmasuk='$tanggal'";
$result = mysqli_query($koneksi,$query);

if($result){
    echo "<script>
         alert('Data Berhasil Dimasukan')
         window.location='category.php'    
         </script>";
}else{
    echo "<script>
         alert('Login Gagal, Silahkan Login ulang')
         history.go(-1)   
        </script>";
}

?>