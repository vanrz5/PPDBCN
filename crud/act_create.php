<?php
include('koneksibrg.php');

$nama = $_GET['nama_brg'];
$kategori = $_GET['kategori_brg'];
$jumlah = $_GET['jumlah_brg'];
$harga = $_GET['harga_brg'];
$tanggal = $_GET['tanggal_brgmasuk'];


$query = "INSERT INTO barang(nama_brg,kategori_brg,jumlah_brg,harga_brg,tanggal_brgmasuk) VALUES ('$nama','$kategori','$jumlah','$harga','$tanggal')";
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