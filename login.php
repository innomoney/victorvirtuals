<?php

include "./validate/login.inc.php";

?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from iamubaidah.com/html/miscoo/live/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Jan 2023 09:15:20 GMT -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Miscoo - HTML Template For Online Game</title>
        <!-- favicon -->
        <link rel="shortcut icon" href="favicon.html" type="image/x-icon">
        <!-- bootstrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- fontawesome icon  -->
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">
        <!-- flaticon css -->
        <link rel="stylesheet" href="assets/fonts/flaticon.css">
        <!-- animate.css -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <!-- <link rel="stylesheet" href="assets/css/owl.carousel.min.css"> -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="assets/css/modal-video.min.css">
        <!-- stylesheet -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- responsive -->
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>

        <!-- preloader begin -->
        <div class="preloader">
            <img src="assets/img/preloader.gif" alt="">
        </div>
        <!-- preloader end -->

        <!-- header section begin -->
        <div class="header">
            <div class="row">
                <div class="overflow-hidden col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-7 d-xl-block d-lg-block">
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo.png" alt="LOGO"></a>
                            </div>
                        </div>
                        <div class="d-xl-none d-lg-none col-5 d-flex align-items-center justify-content-end">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9">
                    <div class="top-header">
                            <div class="row justify-content-end">
                                <div class="col-xl-8 col-lg-8">
                                    <div class="top-right">
                                        <div class="buttons">
                                            <a href="#">support</a>
                                            <a href="register.php"><i class="fas fa-sign-in-alt"></i> signup</a>
                                        </div>
                                        <form class="part-searchBar">
                                            <input type="text" placeholder="Search Games">
                                            <button>
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="bottom-header">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="indexphp">home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="about.php">about</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="games.php">Games</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="contest.php">Contest</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Blog
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="blog.php">Blog Post</a>
                                                    <a class="dropdown-item" href="blog-details.php">Blog Details</a>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Pages
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                                    <a class="dropdown-item" href="promotion.php">Promotion</a>
                                                    <a class="dropdown-item" href="affiliate-programming.php">Affilite Program</a>
                                                    <a class="dropdown-item" href="game-details.php">Games Details</a>
                                                    <a class="dropdown-item" href="faq.php">Faq</a>
                                                    <a class="dropdown-item" href="account.php">My Account</a>
                                                    <a class="dropdown-item" href="register.php">Register</a>
                                                    <a class="dropdown-item" href="login.php">Login</a>
                                                </div>
                                            </li>
                                            
                                            <li class="nav-item">
                                                <a class="nav-link" href="contact.php">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header section end -->

        <!-- breadcrumb begin -->
        <div class="breadcrumb-miscoo">
            <div class="breadcrumb-img">
                <img src="assets/img/breadcrumb.png" alt="">
                <img src="assets/img/breadcrumb.png" alt="">
                <img src="assets/img/breadcrumb.png" alt="">
                <img src="assets/img/breadcrumb.png" alt="">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="breadcrumb-content">
                            <h2 class="title">Login to enter</h2>
                            <p>Misco has thousands of free online games for all generation. Play action, racing, sports, and other fun games for free at Misco</p>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="arrow">
                                    <i class="fas fa-angle-right"></i>
                                </li>
                                <li>
                                    Login
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- register begin -->
        <div class="register login-page">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="reg-body">
                            <form method="post" action="">
                                <h4 class="sub-title">Login to your account</h4>
                                <input type="text" name="email" placeholder="User Email*">
                                <input type="password" name="password" placeholder="Password*">
                                <button class="btn-form def-btn" type="submit" name="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- register end -->

        <!-- cta begin -->
        <div class="cta">
            <div class="container">
                <div class="row justify-content-xl-between justify-content-lg-between justify-content-sm-center">
                    <div class="col-xl-7 col-lg-7 col-md-8 col-sm-10">
                        <h2>Miscoo - Where everything are<br/> possible with  crypto gaming</h2>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-10">
                        <a href="#0" class="def-btn play-now-btn">Play Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta end -->

        <!-- footer begin -->
        <div class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-4 col-sm-10">
                            <div class="about-widget">
                                <a href="index.html" class="logo">
                                    <img src="assets/img/logo.png" alt="">
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis commodi ut illum. Cumque, unde suscipit error!</p>
                                <div class="social-links">
                                    <ul>
                                        <li>
                                            <a href="#0" class="single-link">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#0" class="single-link">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#0" class="single-link">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#0" class="single-link">
                                                <i class="fab fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-sm-10">
                            <div class="link-widget">
                                <h4 class="title">
                                    Play Games
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#0" class="single-link">
                                            Action Games
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-link">
                                            Intellectual
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-link">
                                            Online Casino
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-link">
                                            Lottery Draw
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" class="single-link">
                                            Chess Master
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-10">
                            <div class="newsletter-widget">
                                <h4 class="title">
                                    Subscribe To Our Newsletter
                                </h4>
                                <form class="newsletter-form">
                                    <input type="text" placeholder="Enter Your Mail Address">
                                    <button class="def-btn def-small">
                                        Subscribe
                                    </button>
                                </form>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi accusamus labore recusandae! Quia sint consectetur explicabo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">
                            <p>Copyright © <a href="index.php">The Misco</a> - 2020. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer end -->

        <!-- jquery -->
        <script src="assets/js/jquery.js"></script>
        <!-- popper js -->
        <script src="../../../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <!-- bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- owl carousel -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- magnific popup -->
        <script src="assets/js/jquery-modal-video.min.js"></script>
        <!-- filterizr js -->
        <script src="assets/js/jquery.filterizr.min.js"></script>
        <!-- way poin js-->
        <script src="assets/js/waypoints.min.js"></script>
        <!-- wow js-->
        <script src="assets/js/wow.min.js"></script>
        <!-- main -->
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from iamubaidah.com/html/miscoo/live/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Jan 2023 09:15:20 GMT -->
</html>      