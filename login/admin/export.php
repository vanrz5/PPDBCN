<?php
//import koneksi ke database
require "koneksi.php";
?>

<html>
<head>
  <title>Export to Local File</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <style>
    /* Gaya untuk tampilan utama */
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }

    .container {
      margin-top: 40px;
    }

    /* Gaya untuk Judul */
    h2 {
      text-align: center;
      color: #343a40;
      margin-bottom: 20px;
    }

    /* Gaya Tabel */
    table.dataTable {
      width: 100%;
      border-collapse: collapse;
      border: 1px solid #dee2e6;
      font-size: 14px;
    }

    table.dataTable th, table.dataTable td {
      padding: 10px;
      text-align: left;
    }

    table.dataTable thead th {
      background-color: #343a40;
      color: white;
    }

    table.dataTable tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    table.dataTable tbody tr:hover {
      background-color: #e9ecef;
    }

    /* Gaya untuk Tombol Ekspor */
    .dt-buttons .btn {
      background-color: #28a745;
      color: white;
      border: none;
      padding: 8px 12px;
      font-size: 14px;
      margin-right: 5px;
      transition: background-color 0.3s;
    }

    .dt-buttons .btn:hover {
      background-color: #218838;
      color: white;
    }

    /* Menghilangkan garis bawah pada teks link */
    .dt-buttons .btn a {
      color: white;
      text-decoration: none;
    }
  </style>
</head>

<body>
<div class="container">
<button type="button" class="btn btn-success">
<a href="data_siswa.php" style="color: white; text-decoration: none;">Kembali</a>
</button>
  <h2>Export Data</h2>
  <div class="data-tables datatable-dark">
    <table id="mauexport">
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
            echo "<tr>
              <td>{$no}</td>
              <td>{$data['nisn']}</td>
              <td>{$data['nama']}</td>
              <td>{$data['birth']}</td>
              <td>{$data['gender']}</td>
              <td>{$data['ayah']}</td>
              <td>{$data['ibu']}</td>
              <td>{$data['jurusan']}</td>
              <td>{$data['email']}</td>
              <td>{$data['phone']}</td>
              <td>{$data['created_at']}</td>
              <td>{$data['updated_at']}</td>
            </tr>";
            $no++;
          }
        ?>
      </tbody>
    </table>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
<script>
  $(document).ready(function() {
    $('#mauexport').DataTable({
      dom: 'Bfrtip',
      buttons: [
        'excel', 'pdf', 'print'
      ]
    });
  });
</script>

</body>
</html>