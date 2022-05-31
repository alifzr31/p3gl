<!DOCTYPE html>
<html lang="en">

<head>
    <title>GURU Able - Free Lite Admin Template </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="CodedThemes">
    <meta name="keywords"
    content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Favicon icon -->
    <link rel="icon" href="../img/sikata.png" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!--  Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
</head>

<?php
    include '../koneksi.php';
    session_start();

    $email = $_SESSION['email'];
    $data = mysqli_query($koneksi, "select * from users where email='$email'");
    $d = mysqli_fetch_array($data)
?>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="index.html">
                            <img class="img-fluid" src="../img/sikata1.png" style="width: 100%;" alt="Theme-Logo" />
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="../user/file/profil/<?php echo $d['gambar']; ?>" class="img-radius" alt="User-Profile-Image">
                                    <span><?php echo $d['nama']; ?></span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="logout.php">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-40 img-radius" src="../user/file/profil/<?php echo $d['gambar']; ?>" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span><?php echo $d['nama']; ?></span>
                                        <span id="more-details"><?php echo $d['typeuser']; ?><i class="ti-angle-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="#"><i class="ti-user"></i>View Profile</a>
                                            <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-search">
                                <span class="searchbar-toggle">  </span>
                                <div class="pcoded-search-box ">
                                    <input type="text" placeholder="Search">
                                    <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
                                </div>
                            </div>

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Home</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="index.php">
                                        <span class="pcoded-micon"><i class="ti-bar-chart"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Data</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="form-elements-component.html">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Form Components</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="data_user.php">
                                        <span class="pcoded-micon"><i class="ti-user"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Data User</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="data_peta.php">
                                        <span class="pcoded-micon"><i class="ti-map"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Data Peta</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                
                            </ul>

                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i class="icofont icofont-file-code bg-c-blue"></i>
                                                    <div class="d-inline">
                                                        <h4>Edit Peta</h4>
                                                        <span>Edit Data Peta</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index.html">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a>Data</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="data_peta.php">Data Peta</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a>Edit Data Peta</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->
                                    <?php
                                        $id = $_GET['id'];
                                        $peta = mysqli_query($koneksi, "select * from peta where id = '$id'");
                                        $pt = mysqli_fetch_array($peta);
                                    ?>
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-block">
                                                            <h4 class="sub-title">Edit Data Peta</h4>
                                                            <form action="proses_edit_peta.php" method="POST"  enctype="multipart/form-data">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">ID</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="id" class="form-control" value="<?php echo $pt['id']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Foto Profil</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="file" name="foto[]" class="form-control" placeholder="Foto Profil"  style="border: none;">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Judul</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="judul" class="form-control" value="<?php echo $pt['judul']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Lokasi</label>
                                                                    <div class="col-sm-10">
																		<input type="text" name="lokasi" class="form-control" value="<?php echo $pt['lokasi']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Skala</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number" name="skala" class="form-control" value="<?php echo $pt['skala']; ?>">
                                                                    </div>
                                                                </div>
																<div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Penulis</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="penulis" class="form-control" value="<?php echo $pt['penulis']; ?>">
                                                                    </div>
                                                                </div>
																<div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Tahun</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number" name="tahun" class="form-control" value="<?php echo $pt['tahun']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Kategori</label>
                                                                    <div class="col-sm-10">
                                                                        <select name="kategori" class="form-control">
                                                                            <option selected hidden disabled>Kategori</option>
                                                                            <option value="sistematik" <?php if ($pt['kategori'] == "sistematik") { echo "selected"; } ?>>Sistematik</option>
                                                                            <option value="tematik" <?php if ($pt['kategori'] == "tematik") { echo "selected"; } ?>>Tematik</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-10">
                                                                        <button type="submit" class="btn btn-primary">Edit Data</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                        <!-- Page body end -->
                                                                    </div>
                                                                </div>
                                                                <!-- Main-body end -->
                                                                <div id="styleSelector">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Warning Section Starts -->
                                        <!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!--  Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>
<!-- classie js -->
<script type="text/javascript" src="assets/js/classie/classie.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
</body>

</html>
