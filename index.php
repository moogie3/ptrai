<?php
session_start();
include 'stock/dbconnect.php';
if (isset($_SESSION['role'])) {
  header("location:stock/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="stock/logoicon.ico">
  <title>PT. Reggia Altura Integra</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="ui/css/materia.min.css"> <!--font form sign in-->
  <link rel="stylesheet" href="ui/css/style.css"> <!--background, font form sign in-->
  <link rel="stylesheet" href="ui/css/plugins.css">
  <link rel="stylesheet" href="ui/css/responsive.css" />
  <link rel="stylesheet" href="assets/css/plugins.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

  <!-- Custom styles for this template -->
  <link href="ui/css/signin.css" rel="stylesheet">
  <link rel="stylesheet" href="ui/css/sweetalert2.min.css">
  <!-- jQuery 2.2.0 -->
  <script src="ui/js/sweetalert2.js"></script>
  <script src="ui/js/jQuery-2.2.0.min.js"></script>
  <script src="assets/js/main.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="ui/js/bootstrap.min.js"></script>
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <div class="preloader">
    <div class="loaded hexdots-loader">Loading…</div>
  </div><!-- End off Preloader -->
  <div class="container">
    <form class="form-signin" method="post" target="_self">
      <center>
        <h4>Login</h4>
      </center>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" name="username" id="user" class="form-control" placeholder="Username" required autofocus>
      <br />
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="pass" class="form-control" placeholder="Password" required>
      <br />
      <button class="btn btn-md btn-danger btn-block" type="submit" name="btn-login">Login</button>
    </form>
  </div>

  <?php
  if (isset($_POST['btn-login'])) {
    $uname = mysqli_real_escape_string($conn, $_POST['username']);
    $upass = mysqli_real_escape_string($conn, md5($_POST['password']));
    $login = mysqli_query($conn, "select * from login where username='$uname' and password='$upass';"); // menyeleksi data user dengan username dan password yang sesuai
    $cek = mysqli_num_rows($login); // menghitung jumlah data yang ditemukan
    if ($cek > 0) // cek apakah username dan password di temukan pada database
    {
      while ($data = $login->fetch_assoc()) {
        $_SESSION['user'] = $data['nickname'];
        $_SESSION['user_login'] = $data['username'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['id'] = $data['id'];
        $_SESSION['role'] = $data['role'];
      }
      header("location:stock/index.php");
    } else ?>
    {
    <script>
      swal({
        title: 'Login Error!',
        text: 'Username dan Password Salah',
        type: 'error',
        confirmButtonText: 'OK'
      })
    </script>
  <?php }
  ?>
</body>

</html>