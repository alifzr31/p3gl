<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Peta | Katalog Peta - P3GL</title>

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

<?php
    include '../koneksi.php';

    session_start();

    $email = $_SESSION['email'];
    $data = mysqli_query($koneksi, "select * from users where email='$email'");
    $d = mysqli_fetch_array($data);
?>

<body>
    
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__links">
                <img src="img/testimonial/ta-1.jpg" alt="">
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
                                <a href="./index.html"><img src="img/logo.png" class="logo_header" alt=""></a>
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
                            <li><a href="./index.html">Home</a></li>
                            <li class="active"><a href="peta.php">Peta</a></li>
                            <li><a href="./contact.html">Kontak Kami</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <?php
        $id = $_GET['id'];
        $peta = mysqli_query($koneksi, "select * from peta where id = '$id'");
        $pt = mysqli_fetch_array($peta);
    ?>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Detail Peta</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="./index.php" style="color: #f08632;">Home</a>
                        <a href="./shop.html" style="color: #f08632;">Peta</a>
                        <span><?php echo $pt['judul']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__img">
                        <div class="product__details__big__img">
                            <img class="big_img" src="../admin/peta/<?php echo $pt['gambar']; ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <div class="product__label" style="text-transform: capitalize;"><?php echo $pt['kategori']; ?></div>
                        <h4><?php echo $pt['judul']; ?></h4>
                        <h5><?php echo $pt['penulis']; ?> - <?php echo $pt['tahun']; ?></h5>
                        
                        <ul>
                            <li><span>Lokasi : <?php echo $pt['lokasi']; ?></span></li>
                            <li><span>Skala 1 : <?php echo $pt['skala']; ?></span></li>
                        </ul>
                        <div class="product__details__option">
                            <a href="#" class="primary-btn">Download Peta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->

    <?php
        $kategori = $pt['kategori'];
        $judul = $pt['judul'];
        $petaterkait = mysqli_query($koneksi, "select * from peta where kategori='$kategori' and not judul='$judul'");
    ?>
    
    <!-- Related Products Section Begin -->
    <section class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Peta Terkait</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="related__products__slider owl-carousel">

                    <?php
                        while ($ptrltd = mysqli_fetch_array($petaterkait)) {
                    ?>

                    <div class="col-lg-3">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="../admin/peta/<?php echo $ptrltd['gambar']; ?>">
                                <div class="product__label">
                                    <span style="text-transform: capitalize;"><?php echo $ptrltd['kategori']; ?></span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#"><?php echo $ptrltd['judul']; ?></a></h6>
                                <div class="product__item__price"><?php echo $ptrltd['penulis']; ?></div>
                                <div class="cart_add">
                                    <a href="peta-detail.php?id=<?php echo $ptrltd['id']; ?>">Detail Peta</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Related Products Section End -->

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