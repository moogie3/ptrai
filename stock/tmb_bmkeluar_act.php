<?php
include 'dbconnect.php';
$kodebarang = $_POST['kodebarang'];
$tanggal = $_POST['tanggal'];
$keluar = $_POST['keluar'];
$keterangan = $_POST['keterangan'];
$project = $_POST['project'];

$query = mysqli_query($conn, "insert into sbarangmkeluar values('','$kodebarang','$tanggal','$keluar', '$keterangan','$project')");

$query2 = mysqli_query($conn, "UPDATE stockm SET jkeluar = jkeluar + '$keluar' WHERE idx = '$kodebarang'");
if ($query && $query2) {

  echo " <div class='alert alert-success'>
  <strong>Sistem Berhasil Menambah Barang</strong>
  </div>
  <meta http-equiv='refresh' content='1; url= stockmaterial.php'/>  ";
} else {
  echo "<div class='alert alert-warning'>
  <strong>Sistem Gagal Menambah Barang</strong>
  </div>
  <meta http-equiv='refresh' content='1; url= stockmaterial.php'/> ";
}

?>

<html>

<head>
  <link rel="icon" href="logoicon.ico">
  <title>Tambah Barang Keluar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>