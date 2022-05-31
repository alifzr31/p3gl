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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
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
    <?php
        include '../koneksi.php';

        session_start();

        if ($_SESSION['typeuser'] == "") {
            header("location:../login.php?pesan=harus_login");
        }
        
        $email = $_SESSION['email'];
        $data = mysqli_query($koneksi, "select * from users where email='$email'");
        $d = mysqli_fetch_array($data);
    ?>
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__links">
                <a href="profil.php" style="color: #282B30;"><?php echo $d['nama']; ?></a>
                <a href="../logout.php" style="color: #282B30;">Logout <i class="bi bi-box-arrow-right"></i></a>
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
                                <a href="./index.html"><img src="../img/sikata.png" class="logo_header" alt=""></a>
                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right__links">
                                    <div class="avatar">
                                        <img src="file/profil/<?php echo $d['gambar']; ?>" alt="">
                                        <a href="profil.php" style="color: #282B30;"><?php echo $d['nama']; ?></a>
                                        <a href="../logout.php" style="color: #282B30;">Logout <i class="bi bi-box-arrow-right"></i></a>
                                    </div>
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
                        <a href="index.php">Home</a>
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
                            <form method="GET">
                                <select name="kategori">
                                    <option value="" disabled selected hidden>Kategori</option>
                                    <option value="sistematik">Sistematik</option>
                                    <option value="tematik">Tematik</option>
                                </select>
                                <input type="text" placeholder="Cari Peta">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php

                    $batas = 8;
                    $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                    $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

                    $prev = $halaman - 1;
                    $next = $halaman + 1;
                    
                    $data = mysqli_query($koneksi, "select * from peta");
                    $jml_data = mysqli_num_rows($data);
                    $total_halaman = ceil($jml_data/$batas);
                    $nomor = $halaman_awal + 1;
                
                if (isset($_GET['kategori']) || isset($_GET['cari'])) {
                    $ktgr = $_GET['kategori'];
                    $data_peta = mysqli_query($koneksi, "select * from peta where kategori='$ktgr' limit $halaman_awal, $batas");
                    $data_filter = mysqli_query($koneksi, "select * from peta where kategori='$ktgr'");
                    $jml = mysqli_num_rows($data_filter);
                } else {
                    
                    $data_peta = mysqli_query($koneksi, "select * from peta limit $halaman_awal, $batas");
                }
            ?>
            
            <div class="row">

                <?php
                    while ($d = mysqli_fetch_array($data_peta)) {
                ?>
                
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="../admin/peta/<?php echo $d['gambar']; ?>">
                            <div class="product__label">
                                <span style="text-transform: capitalize;"><?php echo $d['kategori']; ?></span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#"><?php echo $d['judul']; ?></a></h6>
                            <div class="product__item__price" style="text-transform: capitalize;"><?php echo $d['penulis']; ?></div>
                            <div class="cart_add">
                                <a href="peta-detail.php?id=<?php echo $d['id']; ?>">Detail Peta</a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    }
                ?>
                
            </div>

            <div class="shop__last__option">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="shop__pagination">
                        <a <?php if($halaman > 1){ echo "href='?halaman=$prev'"; } ?>><span class="arrow_carrot-left"></span></a>
                        <?php 
                            for($x=1;$x<=$total_halaman;$x++){
                                ?> 
                                <a href="?halaman=<?php echo $x ?>" <?php if ($halaman == $x) {?> style="background-color: black; color: white;" <?php } ?>><?php echo $x; ?></a>
                                <?php
                            }
                        ?>
                            <a <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>><span class="arrow_carrot-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="shop__last__text">
                            <p>
                                <?php echo $jml_data; ?> Peta Ditemukan
                            </p>
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