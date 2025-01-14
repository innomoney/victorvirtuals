<?php

include "./validate/blog.inc.php";

?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from iamubaidah.com/html/miscoo/live/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Jan 2023 09:14:27 GMT -->
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
                                                <a class="nav-link active" href="index.php">home</a>
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
                    <div class="col-xl-6 col-lg-7">
                        <div class="breadcrumb-content">
                            <h2 class="title">Blog Details</h2>
                            <p>Misco has thousands of free online games for all generation. Play action, racing, sports, and other fun games for free at Misco</p>
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="arrow">
                                    <i class="fas fa-angle-right"></i>
                                </li>
                                <li>
                                    Blog Details
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- blog details begin -->
        <div class="blog-details">
            <div class="container">
                <div class="part-post">
                    <div class="part-img">
                        <img src="assets/img/news/blog-details.jpg" alt="">
                    </div>
                    <div class="part-meta">
                        <div class="left-side">
                            <ul>
                                <li>
                                    <span class="icon">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                    <span class="text">
                                        20 January, 2020
                                    </span>
                                </li>
                                <li>
                                    <span class="icon">
                                        <i class="far fa-user"></i>
                                    </span>
                                    <span class="text">
                                        By Mostaq Siramp
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="right-side">
                            <ul>
                                <li>
                                    <div class="single-meta">
                                        <span class="icon">
                                            <i class="fas fa-heart"></i>
                                        </span>
                                        <span class="text">9,858</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-meta">
                                        <span class="icon">
                                            <i class="fas fa-comments"></i>
                                        </span>
                                        <span class="text">7,637</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-meta">
                                        <span class="icon">
                                            <i class="fas fa-share-alt"></i>
                                        </span>
                                        <span class="text">5,973</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="part-text">
                        <h2 class="title">Every games player deserves the chance to try out.</h2>
                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century
                            who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:  Lorem ipsum dolor sit amet, consectetur adipis
                            cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that
                            doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content. 
                            The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with the
                            ir software. Today it's seen all around the web; on templates, websites, and stock designs.</p>
                        <p>
                            Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century
                            who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:  Lorem ipsum dolor sit amet, consectetur adipis
                            cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <p>
                            Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century
                            who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:  Lorem ipsum dolor sit amet, consectetur adipis
                            cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that
                            doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content. 
                            The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with the
                            ir software. Today it's seen all around the web; on templates, websites, and stock designs.
                        </p>
                        <div class="row text-with-img">
                            <div class="col-xl-5 col-lg-12 this-l-size">
                                <img src="assets/img/news/blog-details-2.jpg" alt="" class="text-img">
                            </div>
                            <div class="col-xl-7 col-lg-12 this-l-size">
                                <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, grap
                                    hic or web designs. The passage is attributed to an unknown typesetter in the 15th century
                                    who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in
                                    a type specimen book. It usually begins with:  Lorem ipsum dolor sit amet, consectetur adipis
                                    cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                               
                            </div>
                        </div>
                        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century
                            who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:  Lorem ipsum dolor sit amet, consectetur adipis
                            cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that
                            doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content. 
                            The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with the
                            ir software. Today it's seen all around the web; on templates, websites, and stock designs.</p>
                        <p>
                            Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century
                            who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:  Lorem ipsum dolor sit amet, consectetur adipis
                            cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that
                            doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content. 
                            The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with the
                            ir software. Today it's seen all around the web; on templates, websites, and stock designs.
                        </p>
                    </div>
                </div>
                <div class="part-comment">
                    <h3 class="title">Comments (30+)</h3>
                    <div class="all-comments">
                        <div class="single-comment">
                            <div class="img-box">
                                <div class="part-user">
                                    <img src="assets/img/news/comment-user-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="part-comment-text">
                                <span class="user-name">Haywood Grigsby</span>
                                <span class="date-of-comment">22 June, 2020</span>
                                <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesett
                                    who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:  Lorem ipsum dolor sit
                                    cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. The purpose of lorem ipsum is to create a natural looking block of text (sentence, par
                                    it's seen all around the web; on templates, websites, and stock designs.</p>
                            </div>
                            <button class="reply-comment">
                                <i class="fas fa-share"></i>
                                Reply
                            </button>
                        </div>
                        <div class="single-comment reply">
                            <div class="img-box">
                                <div class="part-user">
                                    <img src="assets/img/news/comment-user-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="part-comment-text">
                                <span class="user-name">Haywood Grigsby</span>
                                <span class="date-of-comment">22 June, 2020</span>
                                <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesett
                                    who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:  Lorem ipsum dolor sit
                                    cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. The purpose of lorem ipsum is to create a natural looking block of text (sentence, par
                                    it's seen all around the web; on templates, websites, and stock designs.</p>
                            </div>
                            <button class="reply-comment">
                                <i class="fas fa-share"></i>
                                Reply
                            </button>
                        </div>
                        <div class="single-comment">
                            <div class="img-box">
                                <div class="part-user">
                                    <img src="assets/img/news/comment-user-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="part-comment-text">
                                <span class="user-name">Haywood Grigsby</span>
                                <span class="date-of-comment">22 June, 2020</span>
                                <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesett
                                    who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:  Lorem ipsum dolor sit
                                    cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. The purpose of lorem ipsum is to create a natural looking block of text (sentence, par
                                    it's seen all around the web; on templates, websites, and stock designs.</p>
                            </div>
                            <button class="reply-comment">
                                <i class="fas fa-share"></i>
                                Reply
                            </button>
                        </div>
                    </div>
                </div>
                <div class="comment-form">
                    <h3 class="title">Leave A Comment</h3>
                    <form method="post" action="">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <input type="text" name="firstname" placeholder="First Name*">
                                <input type="text" name="lastname" placeholder="Last Name*">
                                <input type="email" name="email" placeholder="Email*">
                                <input type="text" name="phone" placeholder="Phone No:*">
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <textarea name="message" placeholder="Message*"></textarea>
                            </div>
                        </div>
                        <button class="submit-btn" name="submit" type="submit">Submit A Comment <i class="fas fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>

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

<!-- Mirrored from iamubaidah.com/html/miscoo/live/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Jan 2023 09:14:46 GMT -->
</html>