<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 11:18:47 GMT -->
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resiq.id</title>
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url() ?>assets/admin/assets/images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/assets/css/line-awesome.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/assets/css/daterangepicker.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/assets/css/animated-headline.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/assets/css/style.css">
</head>
<body>
<!-- start cssload-loader -->
<div class="preloader" id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!-- ================================
            START HEADER AREA
================================= -->
<header class="header-area">
    <div class="header-top-bar padding-right-100px padding-left-100px">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-top-content">
                        <div class="header-left">
                            <ul class="list-items">
                                <li><a href="#"><i class="la la-phone mr-1"></i>085x xxxx xxxx</a></li>
                                <li><a href="#"><i class="la la-envelope mr-1"></i>resiq@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-top-content">
                        <div class="header-right d-flex align-items-center justify-content-end">
                            <div class="header-right-action">
                            <a href="#" class="theme-btn theme-btn-small theme-btn-transparent mr-1">Jual Milikmu</a>
                                <a href="<?= site_url('regis/register') ?>" class="theme-btn theme-btn-small theme-btn-transparent mr-1">Sign Up</a>
                                <a href="<?= site_url('auth/login') ?>" class="theme-btn theme-btn-small">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu-wrapper padding-right-100px padding-left-100px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-wrapper">
                        <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                        <div class="logo">
                            <a href="<?= site_url('home') ?>"><h1 style="margin-left: 30px;">Resiq.id</h1></a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div><!-- end menu-toggler -->
                        </div><!-- end logo -->
                        <div class="main-menu-content">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="<?= site_url('home') ?>">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Bahan Baku Plastik <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="#">Member Pemasok</a></li>
                                            <li><a href="#">Konsumen</a></li>
                                            <li><a href="#">Mitra Daur</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Produk Luaran <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="<?= base_url('produk_luaran/paving'); ?>">Paving Blok</a></li>
                                            <li><a href="<?= base_url('produk_luaran/kerajinan'); ?>">Kerajinan</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Environment Education <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="#">Rantai Pasok Sampah </a></li>
                                            <li><a href="#">Pemilihan Sampah </a></li>
                                            <li><a href="#">Biopori dan Kompos </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= site_url("quisioner_landing/quisioner") ?>">questioner </a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- end main-menu-content -->
                    </div><!-- end menu-wrapper -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-wrapper -->
</header>
<!-- ================================
         END HEADER AREA
================================= -->


<?php echo $contents ?>

<!-- ================================
    START MOBILE AREA
================================= -->
<section class="mobile-app padding-top-100px padding-bottom-50px section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="mobile-app-content">
                    <div class="section-heading">
                        <h2 class="sec__title line-height-55">Resiq Android and IOS App is Available!</h2>
                    </div><!-- end section-heading -->
                    <ul class="info-list padding-top-30px">
                        <li class="d-flex align-items-center mb-3"><span class="la la-check icon-element flex-shrink-0 ml-0"></span> Access and change your itinerary on-the-go</li>
                        <li class="d-flex align-items-center mb-3"><span class="la la-check icon-element flex-shrink-0 ml-0"></span> Free cancellation on select hotels</li>
                        <li class="d-flex align-items-center mb-3"><span class="la la-check icon-element flex-shrink-0 ml-0"></span> Get real-time trip updates</li>
                    </ul>
                    <div class="btn-box padding-top-30px">
                        <a href="#" class="d-inline-block mr-3">
                            <img src="<?= base_url() ?>assets/landing/assets/images/app-store.png" alt="">
                        </a>
                        <a href="#" class="d-inline-block">
                            <img src="<?= base_url() ?>assets/landing/assets/images/google-play.png" alt="">
                        </a>
                    </div><!-- end btn-box -->
                </div>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="mobile-img">
                    <img src="<?= base_url() ?>assets/landing/assets/images/mobile-app.png" alt="mobile-img">
                </div>
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end mobile-app -->
<!-- ================================
    END MOBILE AREA
================================= -->

<!-- ================================
       START FOOTER AREA
================================= -->
<section class="footer-area section-bg padding-top-100px padding-bottom-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <div class="footer-logo padding-bottom-30px">
                        <a href="index.php" class="foot__logo"><h1>Resiq.id</h1></a>
                    </div><!-- end logo -->
                    <p class="footer__desc">Produk hasil karya mahasiswa Fakultas Teknik Universitas Dian Nuswantoro</p>
                    <ul class="list-items pt-3">
                        <li> Jl. Sadewa 2 No.8, Pendrikan Kidul, <br>Kec. Semarang Tengah, Kota Semarang, Jawa Tengah. 50131</li>
                        <li>085xxx xxx xxx</li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Tentang Kami</h4>
                    <ul class="list-items list--items">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php">Bahan Baku Plastik</a></li>
                        <li><a href="index.php">Produk Luaran</a></li>
                        <li><a href="index.php">Environment Education</a></li>
                        <li><a href="index.php">Quistioner</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Produk</h4>
                    <ul class="list-items list--items">
                        <li><a href="#">Paving Blok</a></li>
                        <li><a href="#">Drum Dryer</a></li>
                        <li><a href="#">Kerajinan</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Subscribe now</h4>
                    <p class="footer__desc pb-3">Subscribe for latest updates & promotions</p>
                    <div class="contact-form-action">
                        <form action="#">
                            <div class="input-box">
                                <label class="label-text">Enter email address</label>
                                <div class="form-group mb-0">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="email" name="email" placeholder="Email address">
                                    <button class="theme-btn theme-btn-small submit-btn" type="submit">Go</button>
                                    <span class="font-size-14 pt-1"><i class="la la-lock mr-1"></i>Your information is safe with us.</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="term-box footer-item">
                    <ul class="list-items list--items d-flex align-items-center">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
            </div><!-- end col-lg-8 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="section-block mt-4"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="copy-right padding-top-30px">
                    <p class="copy__desc">
                        &copy; Copyright Resiq.id 2021
                    </p>
                </div><!-- end copy-right -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5" style="margin-top: 20px;">
                <div class="footer-social-box text-right">
                    <ul class="social-profile">
                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                        <li><a href="#"><i class="lab la-instagram"></i></a></li>                            <li><a href="#"><i class="lab la-youtube"></i></a></li>
                    </ul>
                </div>      
            </div><!-- end col-lg-4 -->
            <!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
       END FOOTER AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle">Sign Up</h5>
                        <p class="font-size-14">Hello! Welcome Create a New Account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your email">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Repeat Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type again password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Register Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Sign up Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle2">Login</h5>
                        <p class="font-size-14">Hello! Welcome to your account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group mb-2">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your password">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="custom-checkbox mb-0">
                                        <input type="checkbox" id="rememberchb">
                                        <label for="rememberchb">Remember me</label>
                                    </div>
                                    <p class="forgot-password">
                                        <a href="recover.html">Forgot Password?</a>
                                    </p>
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Login Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Login Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- Template JS Files -->
<script src="<?= base_url() ?>assets/landing/assets/js/jquery-3.4.1.min.js"></script>
<script src="<?= base_url() ?>assets/landing/assets/js/jquery-ui.js"></script>
<script src="<?= base_url() ?>assets/landing/assets/js/popper.min.js"></script>
<script src="<?= base_url() ?>assets/landing/assets/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/landing/assets/js/bootstrap-select.min.js"></script>
<script src="<?= base_url() ?>assets/landing/assets/js/moment.min.js"></script>
<script src="<?= base_url() ?>assets/landing/assets/js/daterangepicker.js"></script>
<script src="<?= base_url() ?>assets/landing/assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/landing/assets/js/jquery.fancybox.min.js"></script>
<script src="<?= base_url() ?>assets/landing/assets/js/jquery.countTo.min.js"></script>
<script src="<?= base_url() ?>assets/landing/assets/js/animated-headline.js"></script>
<script src="<?= base_url() ?>assets/landing/assets/js/jquery.ripples-min.js"></script>
<script src="<?= base_url() ?>assets/landing/assets/js/quantity-input.js"></script>
<script src="<?= base_url() ?>assets/landing/assets/js/main.js"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 11:22:13 GMT -->
</html>