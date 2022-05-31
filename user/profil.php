<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Saya | Katalog Peta - P3GL</title>

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

<?php
    include '../koneksi.php';
    session_start();

    if ($_SESSION['typeuser'] == "") {
        header("location:../login.php?pesan=harus_login");
    }
    
    $email = $_GET['email'];
    $data = mysqli_query($koneksi, "select * from users where email='$email'");
    $d = mysqli_fetch_array($data);
?>

<body>
    
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__links">
                <div class="avatar">
                    <img src="file/profil/<?php echo $d['gambar']; ?>" alt="">
                    <a href="profil.php?email=<?php echo $email; ?>" style="color: black;"><?php echo $d['nama']; ?></a>
                    <a href="../logout.php" style="color: #282B30;">Logout <i class="bi bi-box-arrow-right"></i></a>
                </div>
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
                                        <img src="file/profil/<?php echo $d['gambar']; ?>">
                                        <a href="profil.php?email=<?php echo $email; ?>" style="color: #282B30;"><b><?php echo $d['nama']; ?></b></a>
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
                            <li><a href="peta.php">Peta</a></li>
                            <li><a href="contact.php">Kontak Kami</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
                <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "berhasil_edit") {
                            echo "<div class='berhasil'>Profil anda berhasil di edit</div>";
                        }
                    }
                ?>
            <div class="map">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-7">
                            <div class="map__inner">
                                <img src="file/profil/<?php echo $d['gambar']; ?>" style="width: 50%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact__text">
                        <h3>Profil Saya</h3>
                        <a href="edit_profil.php?email=<?php echo $email; ?>" class="site-btn"><i class="bi bi-pencil-square"></i> Edit Profil</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact__form">
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p><?php echo $d['nip']; ?></p>
                                </div>
                                <div class="col-lg-12">
                                    <p><?php echo $d['nama']; ?></p>
                                </div>
                                <div class="col-lg-12">
                                    <p><?php echo $d['email']; ?></p>
                                </div>
                                <div class="col-lg-12">
                                    <p><?php echo $d['alamat']; ?></p>
                                </div>
                                <div class="col-lg-12">
                                    <p><?php echo $d['no_telp']; ?></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

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
            <input type="text" id="search-input" placeholder="Search here.....">
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