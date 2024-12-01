<?php
include('koneksibrg.php');
if(isset($_POST['tambah'])) {

    $nama = $_POST['nama_brg'];
    $kategori = $_POST['kategori_brg'];
    $jumlah = $_POST['jumlah_brg'];
    $harga = $_POST['harga_brg'];
    $tanggal = $_POST['tanggal_brgmasuk'];

    $jumlah_barang_new = mysqli_query($koneksi, "SELECT * FROM barang WHERE nama_brg='$nama'");
    $get_data2 = mysqli_fetch_array($jumlah_barang_new);

    $stok_sekarang = $get_data2["jumlah_brg"];
    $tambahbarang = $stok_sekarang + $jumlah;

    //$sqlplus = "INSERT INTO barang(nama_brg,kategori_brg,jumlah_brg,harga_brg,tanggal_brgmasuk) VALUES ('$nama','$kategori','$jumlah','$harga','$tanggal')";
    $update_barang = "UPDATE barang SET jumlah_brg='$tambahbarang' WHERE nama_brg='$nama'";
    $result = mysqli_query($koneksi, $update_barang);

    

if($result){
    echo header('location:purchase.php');
}else{
    echo "<script>
         alert('Data Gagal Ditambah')
         history.go(-1)   
        </script>";

}
}

?>