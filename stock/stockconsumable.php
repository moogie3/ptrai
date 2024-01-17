<!doctype html>
<html class="no-js" lang="en">
<?php
include 'dbconnect.php';
include 'cek.php';

if (isset($_POST['update'])) {
    $idx = $_POST['idbarang'];
    $kodebarang = $_POST['kodebarang'];
    $namabarang = $_POST['namabarang'];
    $stockawal = $_POST['stockawal'];
    $satuan = $_POST['satuan'];

    $updatedata = mysqli_query($conn, "update stockc set kodebarang='$kodebarang', namabarang='$namabarang', stockawal='$stockawal', satuan='$satuan' where idx='$idx'");
    //cek apakah berhasil
    if ($updatedata) {

        echo " <div class='alert alert-success'>
        <strong>Sistem Berhasil Mengupdate Informasi Barang</strong>
        </div>
        <meta http-equiv='refresh' content='1; url= stockconsumable.php'/>  ";
    } else {
        echo "<div class='alert alert-warning'>
        <strong>Sistem Gagal Mengupdate Informasi Barang</strong>
        </div>
        <meta http-equiv='refresh' content='1; url= stockconsumable.php'/> ";
    }
}
;

if (isset($_POST['hapus'])) {
    $idx = $_POST['idbarang'];

    $delete = mysqli_query($conn, "delete from stockc where idx='$idx'");

    //cek apakah berhasil
    if ($delete) {

        echo " <div class='alert alert-success'>
        <strong>Sistem Berhasil Menghapus Barang</strong>
        </div>
        <meta http-equiv='refresh' content='1; url= stockconsumable.php'/>  ";
    } else {
        echo "<div class='alert alert-warning'>
        <strong>Sistem Gagal Menghapus Barang</strong>
        </div>
        <meta http-equiv='refresh' content='1; url= stockconsumable.php'/> ";
    }
}
;
?>

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="logoicon.ico">
    <title>PT. Reggia Altura Integra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->

    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <a href="index.php"><img src="logo1.png" alt="logo" width="100%"></a>
                <h5 style="color: white">Hi,
                    <?= $_SESSION['user']; ?>!
                </h5>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li><a href="index.php"><i class="ti-notepad"></i><span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-agenda"></i><span>Consumable
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="stockconsumable.php"><i class="ti-package"></i> Stock Consumable</a>
                                    </li>
                                    <li><a href="consumablemasuk.php"><i class="ti-back-right"></i> Barang Masuk</a>
                                    </li>
                                    <li><a href="consumablekeluar.php"><i class="ti-back-left"></i> Barang Keluar</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-layout-column4"></i><span>Material
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="stockmaterial.php"><i class="ti-package"></i> Stock Material</a></li>
                                    <li><a href="materialmasuk.php"><i class="ti-back-right"></i> Barang Masuk</a>
                                    </li>
                                    <li><a href="materialkeluar.php"><i class="ti-back-left"></i> Barang Keluar</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="pembelianbarang.php"><i class="ti-shopping-cart"></i><span>Pembelian
                                        Barang (Purchase Order)</span></a>
                            </li>
                            <li><a href="logout.php"><i class="ti-power-off"></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <h2 style="color: white">Menu</h2>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li>
                                <h5>
                                    <div class="date" style="color: white;font-family: 'Lato'">
                                        <script type='text/javascript'>
                                            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                                            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                                            var date = new Date();
                                            var day = date.getDate();
                                            var month = date.getMonth();
                                            var thisDay = date.getDay(),
                                                thisDay = myDays[thisDay];
                                            var yy = date.getYear();
                                            var year = (yy < 1000) ? yy + 1900 : yy;
                                            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                        //-->
                                        </script></b>
                                    </div>
                                </h5>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->

            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Stock Consumable</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h4>Daftar Stock Consumable</h4>
                                    <button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal"
                                        class="btn btn-success col-md-2"><span
                                            class="glyphicon glyphicon-plus"></span>Tambah Barang</button>
                                </div>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="display" style="width:100%;text-align: center">
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
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $barangcs = mysqli_query($conn, "SELECT * from stockc order by kodebarang ASC");
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
                                                    <td><button data-toggle="modal" data-target="#edit<?= $ida; ?>"
                                                            class="btn btn-secondary">Edit Barang</button> <button
                                                            data-toggle="modal" data-target="#del<?= $ida; ?>"
                                                            class="btn btn-danger">Delete</button></td>
                                                </tr>


                                                <!-- The Modal -->
                                                <div class="modal fade" id="edit<?= $ida; ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form method="post">
                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Edit Barang
                                                                        <?php echo $p['kodebarang'] ?>
                                                                    </h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal">&times;</button>
                                                                </div>

                                                                <!-- Modal body -->
                                                                <div class="modal-body">

                                                                    <label for="kodebarang">Kode Barang</label>
                                                                    <input type="text" id="kodebarang" name="kodebarang"
                                                                        class="form-control"
                                                                        value="<?php echo $p['kodebarang'] ?>">

                                                                    <label for="namabarang">Nama Barang</label>
                                                                    <input type="text" id="namabarang" name="namabarang"
                                                                        class="form-control"
                                                                        value="<?php echo $p['namabarang'] ?>">

                                                                    <label for="stockawal">Stock Awal</label>
                                                                    <input type="text" id="stockawal" name="stockawal"
                                                                        class="form-control"
                                                                        value="<?php echo $p['stockawal'] ?>">

                                                                    <label for="satuan">Satuan</label>
                                                                    <input type="text" id="satuan" name="satuan"
                                                                        class="form-control"
                                                                        value="<?php echo $p['satuan'] ?>">

                                                                    <input type="hidden" name="idbarang"
                                                                        value="<?= $ida; ?>">

                                                                </div>

                                                                <!-- Modal footer -->
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary"
                                                                        name="update">Update</button>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>



                                                <!-- The Modal -->
                                                <div class="modal fade" id="del<?= $ida; ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form method="post">
                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Hapus Barang
                                                                        <?php echo $p['kodebarang'] ?>
                                                                    </h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal">&times;</button>
                                                                </div>

                                                                <!-- Modal body -->
                                                                <div class="modal-body">
                                                                    Apakah Anda yakin ingin menghapus barang ini dari daftar
                                                                    stock consumable?
                                                                    <input type="hidden" name="idbarang"
                                                                        value="<?= $ida; ?>">
                                                                </div>

                                                                <!-- Modal footer -->
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-danger"
                                                                        name="hapus">Hapus</button>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Batal</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>


                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <a href="exportsconsumable.php" target="_blank" class="btn btn-dark">Export Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>PT. Reggia Altura Integra</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- modal input -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Masukkan Stock Consumable</h4>
                </div>
                <div class="modal-body">
                    <form action="tmb_brg_act.php" method="post">
                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input name="kodebarang" type="text" class="form-control" placeholder="Kode Barang"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input name="namabarang" type="text" class="form-control" placeholder="Nama Barang"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Stock Awal</label>
                            <input name="stockawal" type="text" class="form-control" placeholder="Stock Awal">
                        </div>
                        <div class="form-group">
                            <label>Satuan</label>
                            <input name="satuan" type="text" class="form-control" placeholder="Satuan">
                        </div>

                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="Simpan">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('input').on('keydown', function (event) {
                if (this.selectionStart == 0 && event.keyCode >= 65 && event.keyCode <= 90 && !(event.shiftKey) && !(event.ctrlKey) && !(event.metaKey) && !(event.altKey)) {
                    var $t = $(this);
                    event.preventDefault();
                    var char = String.fromCharCode(event.keyCode);
                    $t.val(char + $t.val().slice(this.selectionEnd));
                    this.setSelectionRange(1, 1);
                }
            });
        });

        $(document).ready(function () {
            $('#dataTable3').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            });
        });
    </script>

    <!-- jquery latest version -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>