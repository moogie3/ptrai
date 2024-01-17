<!doctype html>
<html class="no-js" lang="en">

<?php
include 'cek.php';
include 'dbconnect.php';
?>

<html>

<head>
    <link rel="icon" href="logoicon.ico">
    <title>Export Data Stock Material</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="container">
        <br>
        <h2>Stock Material PT. Reggia Altura Integra</h2>
        <br>
        <div class="data-tables datatable-dark">
            <table class="display" id="dataTable3" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Stock Awal</th>
                        <th>Masuk</th>
                        <th>Keluar</th>
                        <th>Stock Akhir</th>
                        <th>Satuan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $barangcs = mysqli_query($conn, "SELECT * from stockm order by kodebarang ASC");
                    $no = 1;
                    while ($p = mysqli_fetch_array($barangcs)) {
                        $ida = $p['idx'];
                        $stockAwal = $p['stockawal'];
                        $stockMasuk = $p['jmasuk'];
                        $stockKeluar = $p['jkeluar'];
                        $stockAkhir = $stockAwal + $stockMasuk - $stockKeluar;
                        ?>

                        <tr style="text-align: center">
                            <td>
                                <?php echo $no++ ?>
                            </td>
                            <td>
                                <?php echo $p['kodebarang'] ?>
                            </td>
                            <td>
                                <?php echo $p['namabarang'] ?>
                            </td>
                            <td>
                                <?php echo $stockAwal ?>
                            </td>
                            <td>
                                <?php echo $stockMasuk ?>
                            </td>
                            <td>
                                <?php echo $stockKeluar ?>
                            </td>
                            <td>
                                <?php echo $stockAkhir ?>
                            </td>
                            <td>
                                <?php echo $p['satuan'] ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#dataTable3').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print',
                ]
            });
        });

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