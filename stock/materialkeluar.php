<!doctype html>
<html class="no-js" lang="en">
<?php
include 'dbconnect.php';
include 'cek.php';
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
    <div id="preloader">
        <div class="loader"></div>
    </div>
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
                                <li><span>Barang Keluar Material</span></li>
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
                                    <h4>Daftar Keluar Stock Material</h4>
                                    <button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal"
                                        class="btn btn-success col-md-2"><span
                                            class="glyphicon glyphicon-plus"></span>Tambah Barang Keluar</button>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <form method="post" class="form-inline">
                                            Mulai &nbsp &nbsp<input type="date" name="tgl_mulai" class="form-control">
                                            &nbsp &nbsp Sampai<input type="date" name="tgl_selesai"
                                                class="form-control ml-3">
                                            <button type="submit" name="filter_tgl"
                                                class="btn btn-outline-success ml-3">Filter</button>
                                        </form>
                                    </div>
                                </div>
                                <br>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="display" style="width:100%;text-align: center">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah Keluar</th>
                                                <th>Satuan</th>
                                                <th>Keterangan</th>
                                                <th>Project</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($_POST['filter_tgl'])) {
                                                $mulai = $_POST['tgl_mulai'];
                                                $selesai = $_POST['tgl_selesai'];

                                                if ($mulai != null || $selesai != null) {

                                                    $cbarangkeluar = mysqli_query($conn, "SELECT * from sbarangmkeluar sc, stockm sk where sk.idx=sc.idx AND tanggal BETWEEN '$mulai' and DATE_ADD('$selesai',INTERVAL 1 DAY) order by tanggal ASC");
                                                } else {
                                                    $cbarangkeluar = mysqli_query($conn, "SELECT * from sbarangmkeluar sc, stockm sk where sk.idx=sc.idx order by tanggal ASC");

                                                }
                                            } else {
                                                $cbarangkeluar = mysqli_query($conn, "SELECT * from sbarangmkeluar sc, stockm sk where sk.idx=sc.idx order by tanggal ASC");
                                                $no = 1;
                                            }
                                            $no = 1;
                                            while ($p = mysqli_fetch_array($cbarangkeluar)) {
                                                $idb = $p['idx'];
                                                $id = $p['id'];

                                                ?>
                                                <tr style="text-align: center">
                                                    <td>
                                                        <?php echo $no++ ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $p['tanggal'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $p['kodebarang'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $p['namabarang'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $p['keluar'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $p['satuan'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $p['keterangan'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $p['project'] ?>
                                                    </td>
                                                    <td><button data-toggle="modal" data-target="#del<?= $id; ?>"
                                                            class="btn btn-danger">Delete</button></td>
                                                </tr>

                                                <div class="modal fade" id="del<?= $id; ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Hapus Item
                                                                </h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>

                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                                Apakah Anda yakin ingin menghapus item ini dari daftar stock
                                                                keluar material?
                                                            </div>

                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <!-- Move the form outside of the modal-content division -->
                                                                <form action="del_bmkeluar_act.php" method="post">
                                                                    <input type="hidden" name="id" value="<?= $id; ?>">
                                                                    <input type="hidden" name="idbarang"
                                                                        value="<?= $idb; ?>">
                                                                    <input type="hidden" name="keluar"
                                                                        value="<?= $keluar; ?>">
                                                                    <button type="submit" class="btn btn-danger"
                                                                        name="hapus">Hapus</button>
                                                                </form>
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Batal</button>
                                                            </div>
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
                                <a href="exportalat.php" target="_blank" class="btn btn-dark">Export Data</a>
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
                    <h4 class="modal-title">Stock Keluar Material</h4>
                </div>
                <div class="modal-body">
                    <form action="tmb_bmkeluar_act.php" method="post">
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input name="tanggal" type="datetime-local" class="form-control" placeholder="Tanggal PO"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Kode Barang | Nama Barang</label>
                            <select name="kodebarang" class="custom-select form-control"
                                onchange="fetchStock(this.value)">
                                <option selected>Pilih Kode Barang</option>
                                <?php
                                $deta = mysqli_query($conn, "select * from stockm order by kodebarang ASC");
                                while ($de = mysqli_fetch_array($deta)) {
                                    ?>
                                    <option value="<?php echo $de['idx'] ?>"> <?php echo $de['kodebarang'] ?>     <?php echo $de['namabarang'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Stock Tersedia</label>
                            <input id="stock_awal" name="stockakhir" type="text" class="form-control"
                                placeholder="Stock Tersedia" value="" disabled>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Keluar </label>
                            <input name="keluar" type="text" class="form-control" placeholder="Jumlah">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input name="keterangan" type="text" class="form-control" placeholder="Keterangan">
                        </div>
                        <div class="form-group">
                            <label>Project</label>
                            <input name="project" type="text" class="form-control" placeholder="Project">
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
        function fetchStock(selectedKodeBarang) {
            // Send an AJAX request to the PHP script to fetch stock information
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var data = JSON.parse(this.responseText);
                    // Update the "Stock Tersedia" input field with the received stock information
                    var stock_awal = parseInt(data.stock_awal); // Convert the response to an integer
                    var masuk = parseInt(data.masuk);
                    var keluar = parseInt(data.keluar); // Get the value of "masuk" input
                    var stock_tersedia = stock_awal + masuk - keluar; // Calculate the stock tersedia

                    // Update the "Stock Tersedia" input field with the calculated value
                    document.getElementById("stock_awal").value = stock_tersedia;
                }
            };
            xhttp.open("GET", "get_stockm.php?kodebarang=" + encodeURIComponent(selectedKodeBarang), true);
            xhttp.send();
        }
    </script>

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