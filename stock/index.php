<!doctype html>
<html class="no-js" lang="en">

<?php
include 'dbconnect.php';
include 'cek.php';
?>

<head>
  <meta charset="utf-8">
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
  <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
  <!-- others css -->
  <link rel="stylesheet" href="assets/css/typography.css">
  <link rel="stylesheet" href="assets/css/default-css.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <!-- modernizr css -->
  <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <div id="preloader">
    <div class="loader"></div>
  </div>
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
                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-agenda"></i><span>Consumable
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
                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-column4"></i><span>Material
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
              </ul>
            </div>
          </div>
        </div>
      </div>


      <!-- -->
      <!-- overview area end -->
      <!-- market value area start -->
      <div class="row mt-5 mb-5">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex justify-content-between align-items-center">
                <h4>Notes</h4>
              </div>
              <div class="market-status-table mt-4">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                      <tr style="text-align: center">
                        <th>No</th>
                        <th>Catatan</th>
                        <th>Ditulis oleh</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <form method='POST' action='notes.php'>
                      <tr class="table-active" style="text-align: center">
                        <td><input type='hidden' /></td>
                        <td><input type='text' class='form-control' name='konten' required /></td>
                        <td>Saya, <strong>
                            <?= $_SESSION['user']; ?>
                          </strong> <span class="badge badge-dark">
                            <?= $_SESSION['role']; ?>
                          </span></td>
                        <td><input type='submit' name='submit' class='btn btn-success btn-sm' value='Add Note' /></td>
                      <tr>
                    </form>
                    <?php
                    // Perintah untuk menampilkan data
                    $queri = "Select * From notes where status='aktif' Order by id DESC"; //menampikan SEMUA data dari tabel
                    $hasil = MySQLi_query($conn, $queri); //fungsi untuk SQL
                    $i = 1; // nilai awal variabel untuk no urut
                    while ($data = mysqli_fetch_array($hasil)) { // perintah untuk membaca dan mengambil data dalam bentuk array
                      $id = $data['id'];
                      echo "  <form method ='POST' action = 'done.php'>
                      <tr>
                      <td><center>" . $i . "</center></td>
                      <td><strong><center>" . $data['contents'] . "</center></strong></td>
                      <td><strong><center>" . $data['admin'] . "</center></strong></td>
                      <td><center><input type = 'hidden' name = 'id' value = '" . $data['id'] . "'> <input type='submit' name = 'submit'  class='btn btn-danger btn-sm' value = 'Delete' formaction='del.php' /></center></td>
                      </form></td>
                      </tr> </form>
                      ";
                      $i++;
                    }
                    ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- row area start-->
    </div>
    <!-- main content area end -->
    <!-- footer area start-->
    <footer>
      <div class="footer-area">
        <p>PT. PANCA JAYA STEVEDORING</p>
      </div>
    </footer>
    <!-- footer area end-->
  </div>
  <!-- page container area end -->

  <!-- jquery latest version -->
  <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
  <!-- bootstrap 4 js -->
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/metisMenu.min.js"></script>
  <script src="assets/js/jquery.slimscroll.min.js"></script>
  <script src="assets/js/jquery.slicknav.min.js"></script>

  <!-- start chart js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
  <!-- start highcharts js -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <!-- start zingchart js -->
  <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  <!-- all line chart activation -->
  <script src="assets/js/line-chart.js"></script>
  <!-- all pie chart -->
  <script src="assets/js/pie-chart.js"></script>
  <!-- others plugins -->
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/scripts.js"></script>
</body>

</html>