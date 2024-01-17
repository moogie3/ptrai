<!-- cek apakah sudah login -->
<link rel="stylesheet" href="assets/css/styles.css">
<link rel="icon" href="logoicon.ico">
<?php
session_start();
if ($_SESSION['role'] != 'admin') {
	header("location:../index.php?pesan=belum_login");
}
?>