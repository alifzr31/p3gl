<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peta | Katalog Peta - P3GL</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__links">
                <a href="login.php" style="color: black;">Sign in</a>
                <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
            </div>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.php"><img src="img/logo.png" class="logo_header" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header" style="background-color: #191A1E;">
        <div class="header__top" style="background-color: #f08632;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">
                            <div class="header__logo">
                                <a href="./index.html"><img src="img/logo.png" class="logo_header" alt=""></a>
                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right__links">
                                    <a href="login.php" style="color: black;">Sign in</a>
                                    <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><a href="peta.php">Peta</a></li>
                            <li><a href="contact.php">Kontak Kami</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Peta</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="index.php" style="color: #f08632;">Home</a>
                        <span>Peta</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="shop__option">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="shop__option__search">
                            <?php
                                $s_ktgr = "";
                                $s_keyword = "";
                                if (isset($_POST['search'])) {
                                    $s_ktgr = $_POST['kategori'];
                                    $s_keyword = $_POST['keyword'];
                                }
                            ?>
                            <form action="" method="POST">
                                <select name="kategori" id="kategori">
                                    <option value="" hidden>Kategori</option>
                                    <option value="sistematik" <?php if ($s_ktgr == "sistematik") { echo 'selected'; } ?>>Sistematik</option>
                                    <option value="tematik" <?php if ($s_ktgr == "tematik") { echo 'selected'; } ?>>Tematik</option>
                                </select>
                                <input type="text" name="keyword" value="<?php echo $s_keyword; ?>" id="keyword" placeholder="Cari Peta">
                                <button type="submit" name="search"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- <div class="col-lg-5 col-md-5">
                        <div class="shop__option__right">
                            <select>
                                <option value="">Default sorting</option>
                                <option value="">A to Z</option>
                                <option value="">1 - 8</option>
                                <option value="">Name</option>
                            </select>
                            <a href="#"><i class="fa fa-list"></i></a>
                            <a href="#"><i class="fa fa-reorder"></i></a>
                        </div>
                    </div> -->
                </div>
            </div>

            <?php
                include 'koneksi.php';

                $search_ktgr = '%'. $s_ktgr .'%';
	            $search_keyword = '%'. $s_keyword .'%';
	            $no = 1;
	            $query = "SELECT * FROM peta WHERE kategori LIKE ? AND (judul LIKE ? OR lokasi LIKE ? OR penulis LIKE ?)";
	            $dewan1 = $koneksi->prepare($query);
	            $dewan1->bind_param('ssssss', $search_ktgr, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword);
	            $dewan1->execute();
	            $res1 = $dewan1->get_result();
 
	            if ($res1->num_rows > 0) {
	                while ($row = $res1->fetch_assoc()) {
	                    $id = $row['id'];
                        $gambar = $row['gambar'];
	                    $judul = $row['judul'];
	                    $lokasi = $row['lokasi'];
                        $skala = $row['skala'];
	                    $penulis = $row['penulis'];
                        $tahun = $_row['tahun'];
                        $kategori = $_row['kategori'];
                // $batas = 10;
                // $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                // $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

                // $prev = $halaman - 1;
                // $next = $halaman + 1;
                
                // $data = mysqli_query($koneksi, "select * from peta");
                // $jml_data = mysqli_num_rows($data);
                // $total_halaman = ceil($jml_data/$batas);
                // $data_peta = mysqli_query($koneksi, "select * from peta limit $halaman_awal, $batas");
                // $nomor = $halaman_awal + 1;
                
                // while ($d = mysqli_fetch_array($data_peta)) {
            ?>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/peta/<?php echo $gambar; ?>">
                            <div class="product__label">
                                <span style="text-transform: capitalize;"><?php echo $kategori; ?></span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#"><?php echo $judul; ?></a></h6>
                            <div class="product__item__price" style="text-transform: capitalize;"><?php echo $penulis; ?></div>
                            <div class="cart_add">
                                <a href="peta-detail.php?id=<?php echo $id; ?>">Detail Peta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                } } else {
            ?>

            Data tidak ada

            <?php
                }
            ?>

            <div class="shop__last__option">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="shop__pagination">
                        <a <?php if($halaman > 1){ echo "href='?halaman=$prev'"; } ?>><span class="arrow_carrot-left"></span></a>
                        <?php 
                            for($x=1;$x<=$total_halaman;$x++){
                                ?> 
                                <a href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a>
                                <?php
                            }
                        ?>
                            <a <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>><span class="arrow_carrot-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="shop__last__text">
                            <p><?php echo $jml_data; ?> Peta ditemukan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>Hubungi Kami</h6>
                        <ul>
                            <li>Jl. Dr. Djunjunan No.236, Bandung</li>
                            <li>+62-022-6032020 (tlp)</li>
                            <li>+62-022-6017887 (fax)</li>
                            <li>sekretariat@mgi.esdm.go.id</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/logo.png" class="logo_footer" alt=""></a>
                        </div>
                        <p>Pusat Penelitian dan Pengembangan Geologi Kelautan</p>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__newslatter">
                        <h6>Subscribe</h6>
                        <form action="#">
                            <input type="email" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="copyright__text text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          &copy; 2022 Pusat Penelitian dan Pengembangan Geologi Kelautan
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Cari Peta">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.barfiller.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>