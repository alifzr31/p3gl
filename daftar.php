<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up | Katalog Peta - P3GL</title>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div>
                <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "terdaftar") {
                            echo "<div class='alert'>Email sudah terdaftar</div>";
                        }
                    }
                ?>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact__text">
                        <h3>Sign Up</h3>
                        <ul>
                            <li><a href="index.php" style="color: #f08632;"><i class="bi bi-arrow-left"></i> Kembali ke Beranda</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="contact__form">
                        <form action="regist.php" method="POST" enctype="multipart/form-data">
                            <div class="row" style="">
                                <div class="col-lg-12">
                                    <p style="color: red;">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</p>
                                    <input type="file" name="foto[]" required style="background: none; border: none;" />
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" name="nip" placeholder="NIP" required autofocus>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" name="nama" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="col-lg-12">
                                    <select name="jk" class="form_input" required>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="alamat" placeholder="Alamat" cols="30" rows="10" required></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" name="no_tlp" placeholder="No. Telepon" required>
                                    <input type="hidden" name="typeuser" value="user">
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="site-btn">Sign Up</button>
                                    <br/>Sudah punya akun? <a href="login.php" style="color: #f08632;">Masuk disini</a>
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