<!doctype html>
<html class="no-js" lang="en">

<?php
include 'dbconnect.php';
include 'cek.php';

if (isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $delete = mysqli_query($conn, "delete from pengeluaranalat where id='$id'");
    if ($delete) {

        echo " <div class='alert alert-success'>
            <strong>Sistem Berhasil Menghapus PO</strong>
            </div>
            <meta http-equiv='refresh' content='1; url= pembelianbarang.php'/>  ";
    } else {
        echo "<div class='alert alert-warning'>
            <strong>Sistem Gagal Menghapus PO</strong>
            </div>
            <meta http-equiv='refresh' content='1; url= spembelianbarangtockgudang.php'/> ";
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
                                    <div class="date" style="color: white;font-family:'Lato'">
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
                                <li><span>Purchase Order (PO)</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h4>Daftar Pembelian Barang</h4>
                                    <button data-toggle="modal" data-target="#myModal"
                                        class="btn btn-success col-md-2"><span
                                            class="glyphicon glyphicon-plus"></span>Tambah PO</button>
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
                                    <table id="dataTable3" class="display" style="width:100%;text-align: center;">
                                        <thead class="thead-dark">
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
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($_POST['filter_tgl'])) {
                                                $mulai = $_POST['tgl_mulai'];
                                                $selesai = $_POST['tgl_selesai'];

                                                if ($mulai != null || $selesai != null) {

                                                    $palat = mysqli_query($conn, "SELECT * from pengeluaranalat pa, stockc sa where sa.idx=pa.ida AND tanggal BETWEEN '$mulai' and DATE_ADD('$selesai',INTERVAL 1 DAY) order by tanggal ASC");
                                                } else {
                                                    $palat = mysqli_query($conn, "SELECT * from pengeluaranalat pa, stockalat sa where sa.idx=pa.ida order by tanggal ASC");

                                                }
                                            } else {
                                                $palat = mysqli_query($conn, "SELECT * from pengeluaranalat pa, stockalat sa where sa.idx=pa.ida order by tanggal ASC");
                                                $no = 1;
                                            }
                                            $no = 1;
                                            while ($p = mysqli_fetch_array($palat)) {
                                                $idb = $p['ida'];
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
                                                        <?php echo $p['nopo'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $p['kodealat'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $p['namapemesan'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $p['namatoko'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $p['namabarang'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $p['qty'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $p['satuan'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $p['harga'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $p['lokasi'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $p['keterangan'] ?>
                                                    </td>
                                                    <td><br><button style="margin-bottom: 10px" data-toggle="modal"
                                                            data-target="#edit<?= $id; ?>" class="btn btn-secondary">Edit
                                                            PO</button>
                                                        <br><button style="margin-bottom: 10px" data-toggle="modal"
                                                            data-target="#del<?= $id; ?>" class="btn btn-danger">Delete
                                                            PO</button>
                                                    </td>
                                                </tr>


                                                <!-- The Modal -->
                                                <div class="modal fade" id="edit<?= $id; ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form method="post">
                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Edit Nomor PO
                                                                        <?php echo $p['nopo'] ?> Barang
                                                                        <?php echo $p['namabarang'] ?>
                                                                    </h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal">&times;</button>
                                                                </div>

                                                                <!-- Modal body -->
                                                                <div class="modal-body">

                                                                    <label for="nopo">Nomor PO</label>
                                                                    <input type="text" id="nopo" name="nopo"
                                                                        class="form-control"
                                                                        value="<?php echo $p['nopo'] ?>">

                                                                    <label for="kodealat">Kode Alat</label>
                                                                    <select name="kodealat"
                                                                        class="custom-select form-control">
                                                                        <option selected value="<?php echo $p['idx'] ?>">
                                                                            Pilih Kode Alat</option>
                                                                        <?php
                                                                        $edet = mysqli_query($conn, "select * from stockalat order by kodealat ASC");
                                                                        while ($e = mysqli_fetch_assoc($edet)) {
                                                                            ?>
                                                                            <option value="<?php echo $e['idx']; ?>"><?php echo $e['kodealat']; ?></option>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </select>

                                                                    <label for="namapemesan">Nama Pemesan</label>
                                                                    <input type="text" id="namapemesan" name="namapemesan"
                                                                        class="form-control"
                                                                        value="<?php echo $p['namapemesan'] ?>">

                                                                    <label for="namatoko">Nama Toko</label>
                                                                    <input type="text" id="namatoko" name="namatoko"
                                                                        class="form-control"
                                                                        value="<?php echo $p['namatoko'] ?>">

                                                                    <label for="namabarang">Nama Barang</label>
                                                                    <input type="text" id="namabarang" name="namabarang"
                                                                        class="form-control"
                                                                        value="<?php echo $p['namabarang'] ?>">

                                                                    <label for="qty">Quantity</label>
                                                                    <input type="text" id="qty" name="qty"
                                                                        class="form-control"
                                                                        value="<?php echo $p['qty'] ?>">

                                                                    <label for="satuan">Satuan</label>
                                                                    <select name="satuan"
                                                                        class="custom-select form-control">
                                                                        <option selected value="<?php echo $p['satuan'] ?>">
                                                                            Pilih satuan</option>
                                                                        <option value="Buah">Buah</option>
                                                                        <option value="Unit">Unit</option>
                                                                        <option value="Meter">Meter</option>
                                                                        <option value="Sentimeter">Sentimeter</option>
                                                                        <option value="Milimeter">Milimeter</option>
                                                                    </select>

                                                                    <label for="harga">Harga</label>
                                                                    <input type="text" id="harga" name="harga"
                                                                        class="form-control"
                                                                        value="<?php echo $p['harga'] ?>">

                                                                    <label for="lokasi">Lokasi</label>
                                                                    <input type="text" id="lokasi" name="lokasi"
                                                                        class="form-control"
                                                                        value="<?php echo $p['lokasi'] ?>">

                                                                    <label for="keterangan">Keterangan</label>
                                                                    <input type="text" id="keterangan" name="keterangan"
                                                                        class="form-control"
                                                                        value="<?php echo $p['keterangan'] ?>">
                                                                    <input type="hidden" name="id" value="<?= $id; ?>">
                                                                    <input type="hidden" name="idbrg" value="<?= $idb; ?>">

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
                                                <div class="modal fade" id="del<?= $id; ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form method="post">
                                                                <!-- Modal Header -->
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Hapus Barang dengan Nomor PO
                                                                        <?php echo $p['nopo'] ?> untuk Kode Alat
                                                                        <?php echo $p['kodealat'] ?>
                                                                    </h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal">&times;</button>
                                                                </div>

                                                                <!-- Modal body -->
                                                                <div class="modal-body">
                                                                    Delete This Item ?
                                                                    <input type="hidden" name="id" value="<?= $id; ?>">
                                                                    <input type="hidden" name="idbrg" value="<?= $idb; ?>">
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
                                <a href="exportpembelianbarang.php" target="_blank" class="btn btn-dark">Export Data</a>
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
                    <h4 class="modal-title">Masukkan PO Manual</h4>
                </div>
                <div class="modal-body">
                    <form action="tmb_belibrg_act.php" method="post">
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input name="tanggal" type="datetime-local" class="form-control" placeholder="Tanggal PO"
                                required>
                        </div>
                        <div class="form-group">
                            <label>No PO</label>
                            <input name="nopo" type="text" class="form-control" placeholder="Nomor PO" required>
                        </div>
                        <div class="form-group">
                            <label>Kode Alat</label>
                            <select name="kodealat" class="custom-select form-control">
                                <option selected>Pilih Kode Alat</option>
                                <?php
                                $det = mysqli_query($conn, "select * from stockalat order by kodealat ASC");
                                while ($d = mysqli_fetch_array($det)) {
                                    ?>
                                    <option value="<?php echo $d['idx'] ?>"><?php echo $d['kodealat'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Pemesan</label>
                            <input name="namapemesan" type="text" class="form-control" placeholder="Nama Pemesan">
                        </div>
                        <div class="form-group">
                            <label>Nama Toko</label>
                            <input name="namatoko" type="text" class="form-control" placeholder="Nama Toko">
                        </div>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input name="namabarang" type="text" class="form-control" placeholder="Nama Barang">
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input name="qty" type="number" min="0" class="form-control" placeholder="Quantity Barang">
                        </div>
                        <div class="form-group">
                            <label>Satuan</label>
                            <select name="satuan" class="custom-select form-control">
                                <option selected>Pilih satuan</option>
                                <option value="Buah">Buah</option>
                                <option value="Unit">Unit</option>
                                <option value="Meter">Meter</option>
                                <option value="Sentimeter">Sentimeter</option>
                                <option value="Milimeter">Milimeter</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input name="harga" type="text" class="form-control" placeholder="Harga Barang">
                        </div>
                        <div class="form-group">
                            <label>Lokasi</label>
                            <input name="lokasi" type="text" class="form-control" placeholder="Lokasi">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input name="keterangan" type="text" class="form-control" placeholder="Keterangan">
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

        <script type="text/javascript">
            $(document).ready(function () {
                $(".add-more").click(function () {
                    var html = $(".copy").html();
                    $(".after-add-more").after(html);
                });

                // saat tombol remove dklik control group akan dihapus 
                $("body").on("click", ".remove", function () {
                    $(this).parents(".control-group").remove();
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
        <!-- others plugins -->
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/scripts.js"></script>


</body>

</html>