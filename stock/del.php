<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="logoicon.ico">
  <title>PT. PANCA JAYA STEVEDORING</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">

    <?php
    session_start();
    if(!isset($_SESSION['id']) || $_SESSION['role'] !== 'Purchasing')
    {
     header("Location: ../index.php");
   }
   include_once 'dbconnect.php';
   $res=mysqli_query($conn,"SELECT * FROM login WHERE id=".$_SESSION['id']);

   $id = $_POST['id'];
   $update = "delete from notes where id = '$id'";
   $hasil = mysqli_query($conn,$update);



   if ($hasil){
    echo " <div class='alert alert-success'>
    <strong>Delete Note Berhasil</strong>
    </div>
    <meta http-equiv='refresh' content='1; url= index.php'/>  ";
    } else { echo "<div class='alert alert-warning'>
    <strong>Delete Note Gagal</strong>
    </div>
    <meta http-equiv='refresh' content='1; url= index.php'/> ";
  }
  ?>

</body>
</html>
