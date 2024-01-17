<!doctype html>
<html class="no-js" lang="en">

<?php 
include 'cek.php';
include 'dbconnect.php';
?>

<html>
<head>
  <link rel="icon" href="logoicon.ico">
  <title>Export Data PO Barang PJS</title>
  <link rel="icon" type="image/png" href="favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
  <div class="container">
   <br>
   <h2>Daftar Pembelian Barang</h2>
   <h4>Filter Tanggal</h4>
   <br>
   <div class="row">
    <div class="col">
      <form method="post" class="form-inline">
       Tanggal Mulai : &nbsp <input type="datetime-local" name="tgl_mulai" class="form-control">
       &nbsp Tanggal Selesai :<input type="datetime-local" name="tgl_selesai" class="form-control ml-3">
       <button type="submit" name="filter_tgl" class="btn btn-success ml-3">Filter</button>
     </form>
   </div>
 </div>
 <br>
 <div class="data-tables datatable-dark">
   <table id="dataTable3" class="display" style="width:100%"><thead class="thead-dark">
     <tr>
       <th>No</th>
       <th>Tanggal</th>
       <th>No PO</th>
       <th>Kode Alat</th>
       <th>Nama Pemesan</th>
       <th>Nama Toko</th>
       <th>Nama Barang</th>     
       <th>Qty</th>
       <th>Satuan</th>
       <th>Harga Per Satuan</th>
       <th>Lokasi</th>
       <th>Keterangan</th>
     </tr></thead><tbody>
       <?php 
       if(isset($_POST['filter_tgl'])){
        $mulai = $_POST['tgl_mulai'];
        $selesai = $_POST['tgl_selesai'];

        if($mulai!=null || $selesai!=null){

          $palat=mysqli_query($conn,"SELECT * from pengeluaranalat pa, stockalat sa where sa.idx=pa.ida AND tanggal BETWEEN '$mulai' and DATE_ADD('$selesai',INTERVAL 1 DAY) order by tanggal ASC");
        }
        else{
          $palat=mysqli_query($conn,"SELECT * from pengeluaranalat pa, stockalat sa where sa.idx=pa.ida order by tanggal ASC");

        }
      } else {
       $palat=mysqli_query($conn,"SELECT * from pengeluaranalat pa, stockalat sa where sa.idx=pa.ida order by tanggal ASC");
       $no=1;
     }   
     $no=1;
     while($p=mysqli_fetch_array($palat)){
       $idb = $p['ida'];
       $id = $p['id'];
       ?>

       <tr>
         <td><?php echo $no++ ?></td>                                               
         <td><?php echo $p['tanggal'] ?></td>
         <td><?php echo $p['nopo'] ?></td>
         <td><?php echo $p['kodealat'] ?></td>
         <td><?php echo $p['namapemesan'] ?></td>
         <td><?php echo $p['namatoko'] ?></td>
         <td><?php echo $p['namabarang'] ?></td>
         <td><?php echo $p['qty'] ?></td>
         <td><?php echo $p['satuan'] ?></td>
         <td><?php echo $p['harga'] ?></td>
         <td><?php echo $p['lokasi'] ?></td>
         <td><?php echo $p['keterangan'] ?></td>
       </tr>		
       <?php 
     }
     ?>
   </tbody>
 </table>
</div>
</div>

<script>
  $(document).ready(function() {
    $('#dataTable3').DataTable( {
      dom: 'Bfrtip',
      buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print',
      ]
    } );
  } );

</script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>



</body>

</html>