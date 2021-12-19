<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dirto - Directory & Listing HTML Template</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/line-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animated-headline.css">
    <link rel="stylesheet" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/jquery.filer.css">
    <link rel="stylesheet" href="css/jquery.filer-dragdropbox-theme.css">
    <link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
    <?php
        require('../Configuration/Connexion.php');
        $con=new Connexion();
    ?>
</head>
<body>
<!-- start per-loader -->
<div class="loader-container">
    <div class="loader-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!-- end per-loader -->

<!-- ================================
            START HEADER AREA
================================= -->
<header class="header-area">
    <div class="header-menu-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-full-width">
                        <div class="logo">
                        <a href=""><img src="neldam.png" alt="neldam" width="100" head="100"></a>
                        </div><!-- end logo -->
                        <div class="main-menu-content">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">Accueil <span class="la la-angle-down"></span></a>
                                        <!-- <ul class="dropdown-menu-item">
                                            <li><a href="index.html">home one</a></li>
                                            <li><a href="index2.html">home two</a></li>
                                            <li><a href="index3.html">home three</a></li>
                                            <li><a href="index4.html">home four <span class="new-page-badge">new</span></a></li>
                                            <li><a href="index5.html">home five <span class="new-page-badge">new</span></a></li>
                                        </ul> -->
                                    </li>
                                    <li>
                                        <a href="#">categories <span class="la la-angle-down"></span></a>
                                        <!-- <ul class="dropdown-menu-item">
                                            <li><a href="all-categories.html">all categories</a></li>
                                            <li><a href="all-locations.html">all locations</a></li>
                                            <li><a href="top-place.html">top places </a></li>
                                        </ul> -->
                                    </li>
                                   <!--  <li>
                                        <a href="#">listings <span class="la la-angle-down"></span></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="listing-grid.html">listing grid</a></li>
                                            <li><a href="list-map-view.html">map view </a></li>
                                            <li><a href="list-map-view2.html">map view 2 </a></li>
                                            <li><a href="listing-list.html">listing list </a></li>
                                            <li><a href="list-left-sidebar.html">left sidebar  </a></li>
                                            <li><a href="list-right-sidebar.html">right sidebar  </a></li>
                                            <li><a href="listing-details.html">listing details</a></li>
                                            <li><a href="add-listing.html">add listing</a></li>
                                        </ul>
                                    </li> -->
                                    <!-- <li>
                                        <a href="#">pages <span class="la la-angle-down"></span></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="user-profile.html">user profile</a></li>
                                            <li><a href="top-author.html">top authors </a></li>
                                            <li><a href="dashboard.html">dashboard</a></li>
                                            <li><a href="booking.html">booking  </a></li>
                                            <li><a href="booking-confirmation.html">booking confirmation </a></li>
                                            <li><a href="invoice.html">invoice</a></li>
                                            <li><a href="pricing.html">pricing</a></li>
                                            <li><a href="about.html">about</a></li>
                                            <li><a href="faq.html">faq</a></li>
                                            <li><a href="contact.html">contact</a></li>
                                            <li><a href="page-404.html">404 page</a></li>
                                            <li><a href="recover.html">recover pass <span class="new-page-badge">new</span></a></li>
                                        </ul>
                                    </li> -->
                                    <!-- <li>
                                        <a href="#">blog <span class="la la-angle-down"></span></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="blog-full-width.html">full width <span class="new-page-badge">new</span></a></li>
                                            <li><a href="blog-grid.html">blog grid</a></li>
                                            <li><a href="blog-left-sidebar.html">left sidebar </a></li>
                                            <li><a href="blog-right-sidebar.html">right sidebar </a></li>
                                            <li><a href="blog-single.html">blog detail</a></li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </nav>
                        </div><!-- end main-menu-content -->
                        <div class="logo-right-content">
                            <ul class="author-access-list">
                                <li>
                                    <a href="login.html">login</a>
                                    <span class="or-text">or</span>
                                    <a href="sign-up.html">sign up</a>
                                </li>
                                <li>
                                    <a href="add-listing.html" class="theme-btn">
                                        <span class="la la-plus-circle"></span>
                                        add listing
                                    </a>
                                </li>
                            </ul>
                            <div class="side-menu-open">
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                            </div><!-- end side-menu-open -->
                            <div class="side-user-menu-open">
                                <span class="la la-user"></span>
                            </div><!-- end side-user-menu-open -->
                        </div><!-- end logo-right-content -->
                    </div><!-- end menu-full-width -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-wrapper -->
    <div class="side-nav-container">
        <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
        </div><!-- end humburger-menu -->
        <div class="side-menu-wrap">
            <ul class="side-menu-ul">
                <li>
                    <a href="#">home <span class="la la-angle-down"></span></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="index.html">home one</a></li>
                        <li><a href="index2.html">home two  </a></li>
                        <li><a href="index3.html">home three</a></li>
                        <li><a href="index4.html">home four <span class="new-page-badge">new</span></a></li>
                        <li><a href="index5.html">home five <span class="new-page-badge">new</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">categories <span class="la la-angle-down"></span></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="all-categories.html">all categories</a></li>
                        <li><a href="all-locations.html">all locations</a></li>
                        <li><a href="top-place.html">top places </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">listings <span class="la la-angle-down"></span></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="listing-grid.html">listing grid</a></li>
                        <li><a href="list-map-view.html">map view  </a></li>
                        <li><a href="list-map-view2.html">map view 2  </a></li>
                        <li><a href="listing-list.html">listing list  </a></li>
                        <li><a href="list-left-sidebar.html">left sidebar  </a></li>
                        <li><a href="list-right-sidebar.html">right sidebar </a></li>
                        <li><a href="listing-details.html">listing details</a></li>
                        <li><a href="add-listing.html">add listing</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">pages <span class="la la-angle-down"></span></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="user-profile.html">user profile</a></li>
                        <li><a href="top-author.html">top authors </a></li>
                        <li><a href="dashboard.html">dashboard</a></li>
                        <li><a href="booking.html">booking  </a></li>
                        <li><a href="booking-confirmation.html">booking confirmation </a></li>
                        <li><a href="invoice.html">invoice</a></li>
                        <li><a href="pricing.html">pricing</a></li>
                        <li><a href="about.html">about</a></li>
                        <li><a href="faq.html">faq</a></li>
                        <li><a href="contact.html">contact</a></li>
                        <li><a href="page-404.html">404 page</a></li>
                        <li><a href="recover.html">recover pass<span class="new-page-badge">new</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">blog <span class="la la-angle-down"></span></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="blog-full-width.html">full width <span class="new-page-badge">new</span></a></li>
                        <li><a href="blog-grid.html">blog grid</a></li>
                        <li><a href="blog-left-sidebar.html">left sidebar </a></li>
                        <li><a href="blog-right-sidebar.html">right sidebar </a></li>
                        <li><a href="blog-single.html">blog detail</a></li>
                    </ul>
                </li>
            </ul>
            <div class="side-nav-button">
                <a href="login.html" class="theme-btn">login</a>
                <a href="sign-up.html" class="theme-btn">sign up</a>
            </div><!-- end side-nav-button -->
        </div><!-- end side-menu-wrap -->
    </div><!-- end side-nav-container -->
    <div class="side-user-panel">
        <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
        </div><!-- end humburger-menu -->
        <div class="side-menu-wrap side-user-menu-wrap">
            <div class="side-user-img">
                <img src="images/team2.jpg" alt="image">
                <h4 class="su__name">Mark Williamson</h4>
                <span class="su__meta">Joined 3 years ago</span>
                <div class="avatar-icon">
                    <a href="dashboard.html" data-toggle="tooltip" data-placement="top" title="Change Avatar"> <i class="fa fa-plus"></i></a>
                </div>
            </div>
            <ul class="side-menu-ul">
                <li><a href="dashboard.html"><span class="la la-user user-icon"></span> My Profile</a></li>
                <li><a href="dashboard.html"><span class="la la-list-alt user-icon"></span> My Listings</a></li>
                <li><a href="dashboard.html"><span class="la la-bookmark-o user-icon"></span> My Bookmarks</a></li>
                <li><a href="dashboard.html"><span class="la la-plus-circle user-icon"></span> add listing</a></li>
                <li><div class="dropdown-divider"></div></li>
                <li><a href="#"><span class="la la-question user-icon"></span> help</a></li>
                <li><a href="#"><span class="la la-gear user-icon"></span> Settings</a></li>
                <li><a href="#"><span class="la la-power-off user-icon"></span> Sign Out</a></li>
            </ul>
            <div class="side-user-search contact-form-action">
                <form method="post">
                    <div class="form-group mb-0">
                        <span class="la la-search form-icon"></span>
                        <input class="form-control" type="search" name="search-field" placeholder="Search by keywords">
                    </div>
                    <button type="button" class="theme-btn border-0">
                        Search
                    </button>
                </form>
            </div><!-- end sidebar-widget -->
        </div><!-- end side-menu-wrap -->
    </div><!-- end side-user-panel -->
</header>
<!-- ================================
         END HEADER AREA
================================= -->

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area listing-detail-breadcrumb">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 position-relative">
                    <div class="breadcrumb-content">
                        <h2 class="breadcrumb__title">Tasty Hand-Pulled Noodles</h2>
                        <p class="breadcrumb__desc">
                           <span class="la la-map-marker"></span> 101 East Parkview Road, New York
                        </p>
                        <ul class="listing-info mt-3 mb-3">
                            <li>
                                <div class="theme-btn average-symble" data-toggle="tooltip" data-placement="top" title="Pricey">
                                    <span class="average-active">$$$</span>$$
                                </div>
                            </li>
                            <li>
                                <div class="average-ratings">
                                    <span class="theme-btn button-success">
                                        4.2 <i class="la la-star"></i>
                                    </span>
                                    <span><strong>36</strong> Reviews</span>
                                </div>
                            </li>
                            <li>
                                <span class="theme-btn listing-tag"><i class="la la-cutlery"></i> Eat & Drink</span>
                            </li>
                        </ul>
                        <ul class="listing-info">
                            <li><button type="button" class="theme-btn border-0"><i class="la la-bookmark-o"></i> save</button></li>
                            <li>
                                <div class="dropdown share-dropmenu">
                                    <button class="theme-btn dropdown-toggle border-0 after-none" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-external-link"></i> share
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                                       <a href="#" class="dropdown-item"><i class="fa fa-facebook"></i> facebook</a>
                                       <a href="#" class="dropdown-item"><i class="fa fa-twitter"></i> twitter</a>
                                       <a href="#" class="dropdown-item"><i class="fa fa-instagram"></i> instagram</a>
                                       <a href="#" class="dropdown-item"><i class="fa fa-tumblr"></i> Tumblr</a>
                                       <a href="#" class="dropdown-item"><i class="fa fa-snapchat"></i> snapchat </a>
                                       <a href="#" class="dropdown-item"><i class="fa fa-google-plus"></i> Google plus </a>
                                       <a href="#" class="dropdown-item"><i class="fa fa-pinterest"></i> pinterest </a>
                                       <a href="#" class="dropdown-item"><i class="fa fa-vk"></i> VKontakte </a>
                                       <a href="#" class="dropdown-item"><i class="fa fa-linkedin"></i> linkedin </a>
                                       <a href="#" class="dropdown-item"><i class="fa fa-youtube-play"></i> youtube </a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#" class="theme-btn"><span class="la la-money"></span> reserve a seat</a></li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                    <div class="report-list-items">
                        <ul class="listing-info">
                            <li><a href="#review" class="theme-btn"><i class="la la-star-o"></i> write a review</a></li>
                            <li>
                                <a href="#" class="theme-btn" data-toggle="modal" data-target=".bs-example-modal-lg">
                                    <i class="la la-flag-o"></i> report
                                </a>
                            </li>
                        </ul>
                    </div><!-- end report-list-items -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
    <div class="bread-svg">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M-4.22,89.30 C280.19,26.14 324.21,125.81 511.00,41.94 L500.00,150.00 L0.00,150.00 Z"></path>
        </svg>
    </div><!-- end bread-svg -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START SINGLE LISTING AREA
================================= -->
<section class="single-listing-area padding-top-35px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-listing-wrap">
                    <h2 class="widget-title">Gallery</h2>
                    <div class="title-shape"></div>
                    <div class="gallery-carousel padding-top-35px padding-bottom-40px">
                        <div data-dot="<img src='images/g-img1.jpg'>" class="gallery-item">
                            <img src="images/img17.jpg" alt="gallery-image">
                        </div><!-- end gallery-item -->
                        <div data-dot="<img src='images/g-img2.jpg'>" class="gallery-item">
                            <img src="images/img18.jpg" alt="gallery-image">
                        </div><!-- end gallery-item -->
                        <div data-dot="<img src='images/g-img3.jpg'>" class="gallery-item">
                            <img src="images/img19.jpg" alt="gallery-image">
                        </div><!-- end gallery-item -->
                        <div data-dot="<img src='images/g-img4.jpg'>" class="gallery-item">
                            <img src="images/img20.jpg" alt="gallery-image">
                        </div><!-- end gallery-item -->
                        <div data-dot="<img src='images/g-img5.jpg'>" class="gallery-item">
                            <img src="images/img21.jpg" alt="gallery-image">
                        </div><!-- end gallery-item -->
                        <div data-dot="<img src='images/g-img6.jpg'>" class="gallery-item">
                            <img src="images/img22.jpg" alt="gallery-image">
                        </div><!-- end gallery-item -->
                    </div><!-- end gallery-carousel -->
                    <div class="listing-description padding-bottom-35px">
                        <h2 class="widget-title">Description</h2>
                        <div class="title-shape"></div>
                        <div class="section-heading mt-4">
                            <p class="sec__desc font-size-16">
                                Nemo ucxqui officia voluptatem accu santium doloremque laudantium,
                                totam rem ape dicta sunt dose explicabo. Nemo enim ipsam voluptatem quia voluptas.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa kequi
                                officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                                unde omnis iste natus error sit voluptatem accusan tium dolorem
                                que laudantium, totam rem aperiam the eaque ipsa quae abillo
                                was inventore veritatis keret quasi aperiam architecto
                                beatae vitae dicta sunt explicabo.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                    </div><!-- end listing-description -->
                    <div class="feature-listing padding-bottom-20px">
                        <h2 class="widget-title">Features</h2>
                        <div class="title-shape"></div>
                        <ul class="list-items mt-4">
                            <li><i class="la la-check-circle-o color-text font-size-18"></i> Instant Noodles</li>
                            <li><i class="la la-check-circle-o color-text font-size-18"></i> Wireless Internet</li>
                            <li><i class="la la-check-circle-o color-text font-size-18"></i> Smoking Allowed</li>
                            <li><i class="la la-check-circle-o color-text font-size-18"></i> Street Parking</li>
                            <li><i class="la la-check-circle-o color-text font-size-18"></i> Bike Parking</li>
                            <li><i class="la la-check-circle-o color-text font-size-18"></i> Accepts Credit cards</li>
                        </ul>
                    </div><!-- end feature-listing -->
                    <div class="video-listing padding-bottom-40px">
                        <h2 class="widget-title">Video</h2>
                        <div class="title-shape"></div>
                        <div class="video__box margin-top-35px text-center">
                            <img src="images/img22.jpg" alt="video-image">
                            <div class="video__box-content">
                                <a class="mfp-iframe video-popup-btn video-play-btn" href="https://www.youtube.com/watch?v=5dAICQT1HiU" title="Play Video">
                                    <span class="la la-play-circle-o"></span>
                                </a>
                                <p class="video__desc">watch video</p>
                            </div><!-- end video__box-content -->
                        </div><!-- end video__box -->
                    </div><!-- end video-listing -->
                    <div class="listing-map gmaps">
                        <h2 class="widget-title">Location</h2>
                        <div class="title-shape margin-bottom-35px"></div>
                        <div id="map"></div>
                    </div><!-- end listing-map -->
                    <div class="contact-listing padding-top-40px padding-bottom-40px">
                        <h2 class="widget-title">Contact Information</h2>
                        <div class="title-shape"></div>
                        <div class="info-list margin-top-35px padding-bottom-35px">
                            <ul>
                                <li class="mb-2"><span><i class="la la-map-marker"></i> Address:</span>101 East Parkview Road, New York</li>
                                <li class="mb-2"><span><i class="la la-envelope-o"></i> Email:</span><a href="mailto:example@gmail.com">example@gmail.com</a></li>
                                <li class="mb-2"><span><i class="la la-phone"></i> Phone:</span><a href="#">+7(111)123456789</a></li>
                                <li><span><i class="la la-external-link-square"></i> Website:</span><a href="#">www.techydevs.com</a></li>
                            </ul>
                        </div>
                        <div class="section-block"></div>
                        <div class="social-contact padding-top-40px">
                            <a href="#" class="theme-btn facebook-link"><i class="fa fa-facebook"></i> Facebook</a>
                            <a href="#" class="theme-btn twitter-link"><i class="fa fa-twitter"></i> Twitter</a>
                            <a href="#" class="theme-btn instagram-link"><i class="fa fa-instagram"></i> Instagram</a>
                            <a href="#" class="theme-btn linkedin-link"><i class="fa fa-linkedin"></i> Linkedin</a>
                            <a href="#" class="theme-btn youtube-link"><i class="fa fa-youtube-play"></i> Youtube</a>
                        </div>
                    </div><!-- end contact-listing -->
                    <div class="review-content-wrap">
                        <h2 class="widget-title">Customer feedback</h2>
                        <div class="title-shape"></div>
                        <div class="review-content padding-top-45px padding-bottom-40px">
                            <div class="review-rating-summary">
                                <div class="review-rating-summary-inner">
                                    <div class="stats-average__count">
                                        <span class="stats-average__count-count">4.4</span>
                                    </div><!-- end stats-average__count -->
                                    <div class="stats-average__rating">
                                        <div class="rating-rating d-flex">
                                            <span class="la la-star ml-0"></span>
                                            <span class="la la-star ml-0"></span>
                                            <span class="la la-star ml-0"></span>
                                            <span class="la la-star ml-0"></span>
                                            <span class="la la-star-half-full ml-0"></span>
                                        </div>
                                        <p class="stats-average__rating-rating"> (1.233)</p>
                                    </div><!-- end stats-average__rating -->
                                </div><!-- end review-rating-summary-inner -->
                                <div class="course-rating-text">
                                    <p class="course-rating-text__text">Food Rating</p>
                                </div><!-- end course-rating-text -->
                            </div><!-- end review-rating-summary -->
                            <div class="review-rating-widget">
                                <div class="review-rating-rate">
                                    <ul>
                                        <li class="review-rating-rate__items">
                                            <div class="review-rating-inner__item">
                                                <div class="review-rating-rate__item-text">5 stars</div>
                                                <div class="review-rating-rate__item-fill">
                                                    <span class="review-rating-rate__item-fill__fill rating-fill-width1"></span>
                                                </div>
                                                <div class="review-rating-rate__item-percent-text">77 %</div>
                                            </div>
                                        </li>
                                        <li class="review-rating-rate__items">
                                            <div class="review-rating-inner__item">
                                                <div class="review-rating-rate__item-text">4 stars</div>
                                                <div class="review-rating-rate__item-fill">
                                                    <span class="review-rating-rate__item-fill__fill rating-fill-width2"></span>
                                                </div>
                                                <div class="review-rating-rate__item-percent-text">54 %</div>
                                            </div>
                                        </li>
                                        <li class="review-rating-rate__items">
                                            <div class="review-rating-inner__item">
                                                <div class="review-rating-rate__item-text">3 stars</div>
                                                <div class="review-rating-rate__item-fill">
                                                    <span class="review-rating-rate__item-fill__fill rating-fill-width3"></span>
                                                </div>
                                                <div class="review-rating-rate__item-percent-text">14 %</div>
                                            </div>
                                        </li>
                                        <li class="review-rating-rate__items">
                                            <div class="review-rating-inner__item">
                                                <div class="review-rating-rate__item-text">2 stars</div>
                                                <div class="review-rating-rate__item-fill">
                                                    <span class="review-rating-rate__item-fill__fill rating-fill-width4"></span>
                                                </div>
                                                <div class="review-rating-rate__item-percent-text">5 %</div>
                                            </div>
                                        </li>
                                        <li class="review-rating-rate__items">
                                            <div class="review-rating-inner__item">
                                                <div class="review-rating-rate__item-text">1 stars</div>
                                                <div class="review-rating-rate__item-fill">
                                                    <span class="review-rating-rate__item-fill__fill rating-fill-width5"></span>
                                                </div>
                                                <div class="review-rating-rate__item-percent-text">2 %</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- end review-rating-rate -->
                            </div><!-- end review-rating-widget -->
                        </div><!-- end review-content -->
                    </div><!-- end review-content-wrap -->
                    <div class="comments-wrap">
                        <h2 class="widget-title">5 Reviews</h2>
                        <div class="title-shape"></div>
                        <ul class="comments-list padding-top-40px">
                            <li>
                                <div class="comment">
                                    <img class="avatar__img" alt="" src="images/testi-img1.jpg">
                                    <div class="comment-body">
                                        <div class="meta-data">
                                            <span class="comment__author">adam smith</span>
                                            <span class="comment__date">Reviewed 2 Days ago</span>
                                            <div class="rating-rating">
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-half-full"></span>
                                            </div>
                                        </div>
                                        <p class="comment-content">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation.
                                            Curabitur non nulla sit amet nisl tempus
                                        </p>
                                        <div class="comment-reply d-flex justify-content-between align-items-center">
                                            <a class="theme-btn comment__btn" href="#">
                                                <i class="la la-reply"></i> Reply
                                            </a>
                                            <p class="feedback-box">
                                                Was this review?
                                                <button type="button" href="#" class="theme-btn">
                                                    <i class="la la-thumbs-o-up"></i> Helpful
                                                </button>
                                                <button type="button" href="#" class="theme-btn">
                                                    <i class="la la-smile-o"></i> Funny
                                                </button>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- end comment -->
                                <ul class="comments-reply">
                                    <li>
                                        <div class="comment">
                                            <img class="avatar__img" alt="" src="images/testi-img1.jpg">
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <span class="comment__author">Julian Smith</span>
                                                    <span class="comment__date">Reviewed 3 Days ago</span>
                                                    <div class="rating-rating">
                                                        <span class="la la-star"></span>
                                                        <span class="la la-star"></span>
                                                        <span class="la la-star"></span>
                                                        <span class="la la-star"></span>
                                                        <span class="la la-star-half-full"></span>
                                                    </div>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim ad minim veniam.
                                                    Curabitur non nulla sit amet nisl tempus
                                                </p>
                                                <div class="comment-reply d-flex justify-content-between align-items-center">
                                                    <a class="theme-btn comment__btn" href="#">
                                                        <i class="la la-reply"></i> Reply
                                                    </a>
                                                    <p class="feedback-box">
                                                        Was this review?
                                                        <button type="button" href="#" class="theme-btn">
                                                            <i class="la la-thumbs-o-up"></i> Helpful
                                                        </button>
                                                        <button type="button" href="#" class="theme-btn">
                                                            <i class="la la-smile-o"></i> Funny
                                                        </button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul><!-- end comment -->
                                <div class="comment">
                                    <img class="avatar__img" alt="" src="images/testi-img1.jpg">
                                    <div class="comment-body">
                                        <div class="meta-data">
                                            <span class="comment__author">Matt Derry</span>
                                            <span class="comment__date">Reviewed 4 Days ago</span>
                                            <div class="rating-rating">
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                            </div>
                                        </div>
                                        <p class="comment-content">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation.
                                            Curabitur non nulla sit amet nisl tempus
                                        </p>
                                        <div class="comment-reply d-flex justify-content-between align-items-center">
                                            <a class="theme-btn comment__btn" href="#">
                                                <i class="la la-reply"></i> Reply
                                            </a>
                                            <p class="feedback-box">
                                                Was this review?
                                                <button type="button" href="#" class="theme-btn">
                                                    <i class="la la-thumbs-o-up"></i> Helpful
                                                </button>
                                                <button type="button" href="#" class="theme-btn">
                                                    <i class="la la-smile-o"></i> Funny
                                                </button>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- end comment -->
                            </li>
                        </ul>
                        <div class="section-block"></div>
                        <div class="button-shared padding-top-40px text-center">
                            <button type="button" class="theme-btn border-0">
                                <span class="la la-refresh"></span> Load more review
                            </button>
                        </div><!-- end button-shared -->
                    </div><!-- end comments-wrap -->
                    <div class="add-review-listing padding-top-50px" id="review">
                        <h2 class="widget-title">Add a Review</h2>
                        <div class="title-shape"></div>
                        <div class="section-heading padding-top-20px">
                            <p class="sec__desc font-size-16">Your email address will not be published. Required fields are marked *</p>
                        </div>
                        <ul class="rating-list padding-top-20px">
                            <li>
                                <span class="la la-star"></span>
                                <label class="review-label">
                                    <input type="radio" checked="checked" name="review-radio">
                                    <span class="review-mark"></span>
                                </label>
                            </li>
                            <li>
                                <span class="la la-star"></span> <span class="la la-star"></span>
                                <label class="review-label">
                                    <input type="radio" name="review-radio">
                                    <span class="review-mark"></span>
                                </label>
                            </li>
                            <li>
                                <span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span>
                                <label class="review-label">
                                    <input type="radio" name="review-radio">
                                    <span class="review-mark"></span>
                                </label>
                            </li>
                            <li>
                                <span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span>
                                <label class="review-label">
                                    <input type="radio" name="review-radio">
                                    <span class="review-mark"></span>
                                </label>
                            </li>
                            <li>
                                <span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span>
                                <label class="review-label">
                                    <input type="radio" name="review-radio">
                                    <span class="review-mark"></span>
                                </label>
                            </li>
                        </ul>
                        <div class="contact-form-action mt-5">
                            <form method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Name</label>
                                            <div class="form-group">
                                                <span class="la la-user form-icon"></span>
                                                <input class="form-control" type="text" name="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Email</label>
                                            <div class="form-group">
                                                <span class="la la-envelope-o form-icon"></span>
                                                <input class="form-control" type="email" name="email" placeholder="Email Address">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">Review</label>
                                            <div class="form-group">
                                                <span class="la la-pencil form-icon"></span>
                                                <textarea class="message-control form-control" name="message" placeholder="Write Message"></textarea>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12">
                                        <div class="upload-btn-box">
                                            <form action="#" method="post" enctype="multipart/form-data">
                                                <input type="file" name="files[]" id="filer_input" multiple="multiple">
                                                <button class="theme-btn border-0 margin-top-20px" type="submit" value="submit">
                                                    Submit review
                                                </button>
                                            </form>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                </div><!-- end row -->
                            </form>
                        </div><!-- end contact-form-action -->
                    </div><!-- end add-review-listing -->
                </div><!-- end single-listing-wrap -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="author-verified-badge margin-bottom-20px">
                    <div class="author__verified-badge" data-toggle="tooltip" data-placement="top" title="Listing has been verified and belongs the business owner or manager">
                        <span class="la la-check-circle-o"></span> Verified Listing
                    </div>
                </div><!-- end author-verified-badge -->
                <div class="sidebar section-bg">
                    <div class="sidebar-widget">
                        <div class="author-bio margin-bottom-30px">
                            <div class="d-flex align-items-center">
                                <img src="images/testi-img2.jpg" alt="author-image">
                                <div class="author-inner-bio">
                                    <h4 class="author__title font-weight-bold pb-0 mb-1">Mark Williamson</h4>
                                    <p class="author__meta">Posted 3 Days ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="info-list">
                            <ul>
                                <li class="mb-2"><i class="la la-map-marker"></i> 101 Parkview, New York</li>
                                <li class="mb-2"><i class="la la-envelope-o"></i> <a href="mailto:example@gmail.com">example@gmail.com</a></li>
                                <li class="mb-2"><i class="la la-phone"></i> <a href="#">+7(111)123456789</a></li>
                                <li class="mb-2"><i class="la la-external-link-square"></i> <a href="#">www.techydevs.com</a></li>
                            </ul>
                        </div>
                        <div class="section-block-2 margin-top-35px margin-bottom-35px"></div>
                        <ul class="social-profile margin-bottom-35px text-center">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"> <i class="fa fa-behance"></i></a></li>
                        </ul>
                        <div class="btn-box text-center">
                            <a href="user-profile.html" class="theme-btn d-block">
                                <span class="la la-user"></span> view profile
                            </a>
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Statics info</h3>
                        <div class="title-shape"></div>
                        <div class="info-list static-info padding-top-35px">
                            <ul>
                                <li class="mb-2"><i class="la la-list-alt"></i> 12 Listings</li>
                                <li class="mb-2"><i class="la la-star-o"></i> 4.4 Ratings</li>
                                <li class="mb-2"><i class="la la-bookmark-o"></i> 24 Bookmark</li>
                                <li class="mb-2"><i class="la la-eye"></i> 745 Views</li>
                                <li class="mb-2"><i class="la la-external-link"></i> 120 Share</li>
                                <li class="mb-2"><i class="la la-eye"></i> 20 Comments</li>
                                <li><i class="la la-heart-o"></i> 120 Likes</li>
                            </ul>
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget date-widget">
                        <h3 class="widget-title">Booking</h3>
                        <div class="title-shape"></div>
                       <div class="contact-form-action padding-top-35px">
                           <form>
                               <div class="form-group">
                                   <span class="la la-calendar-o form-icon"></span>
                                   <input class="date-range form-control" type="text" name="daterange" value="04/08/2019"/>
                               </div>
                           </form>
                       </div>
                        <div class="time-slots padding-bottom-30px">
                            <select class="select-option-field-5">
                                <option value >Time Slots</option>
                                <option value="1">8:00am - 8:30am</option>
                                <option value="2">9:00am - 9:30am</option>
                                <option value="3">10:00am - 10:30am</option>
                                <option value="4">11:00am - 11:30am</option>
                                <option value="5">12:00pm - 12:30pm</option>
                                <option value="6">13:00pm - 13:30pm</option>
                                <option value="7">14:00pm - 14:30pm</option>
                                <option value="8">15:00pm - 15:30pm</option>
                            </select>
                        </div><!-- end time-slots -->
                        <div class="booking-content d-flex align-items-center justify-content-between text-center">
                            <div class="input-number-group">
                                <p>Adults</p>
                                <div class="input-group-button">
                                    <span class="input-number-decrement">-</span>
                                </div>
                                <input class="input-number" type="number" value="0" min="0" max="1000">
                                <div class="input-group-button">
                                    <span class="input-number-increment">+</span>
                                </div>
                            </div><!-- end input-number-group -->
                            <div class="input-number-group">
                                <p>Children</p>
                                <div class="input-group-button">
                                    <span class="input-number-decrement">-</span>
                                </div>
                                <input class="input-number" type="number" value="0" min="0" max="1000">
                                <div class="input-group-button">
                                    <span class="input-number-increment">+</span>
                                </div>
                            </div><!-- end input-number-group -->
                        </div><!-- end booking-content -->
                        <div class="btn-box text-center padding-top-35px">
                            <a href="booking.html" class="theme-btn d-block">request to book</a>
                        </div><!-- end btn-box -->
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <div class="opening-hours">
                            <div class="listing-badge d-flex justify-content-between align-items-center">
                                <div>
                                    <h3 class="widget-title">Opening Hours</h3>
                                    <div class="title-shape"></div>
                                </div>
                               <p><span class="theme-btn button-success">now open</span></p>
                            </div>
                            <ul class="list-items padding-top-30px">
                                <li class="d-flex justify-content-between">Monday <strong class="font-weight-medium">9am - 5pm</strong></li>
                                <li class="d-flex justify-content-between">Tuesday <strong class="font-weight-medium">9am - 5pm</strong></li>
                                <li class="d-flex justify-content-between">Wednesday <strong class="font-weight-medium">9am - 5pm</strong></li>
                                <li class="d-flex justify-content-between">Thursday <strong class="font-weight-medium">9am - 5pm</strong></li>
                                <li class="d-flex justify-content-between">Friday <strong class="font-weight-medium">9am - 5am</strong></li>
                                <li class="d-flex justify-content-between">Sat-Sun <strong class="color-text">Closed</strong></li>
                            </ul>
                        </div><!-- end opening-hours -->
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Categories</h3>
                        <div class="title-shape"></div>
                        <div class="cat-list padding-top-30px">
                            <ul class="list-items">
                                <li class="mb-2 pb-2"><a href="#" class="d-flex justify-content-between align-items-center before-none">Restaurant <span>11</span></a></li>
                                <li class="mb-2 pb-2"><a href="#" class="d-flex justify-content-between align-items-center before-none">Shop <span>21</span></a></li>
                                <li class="mb-2 pb-2"><a href="#" class="d-flex justify-content-between align-items-center before-none">Fitness <span>31</span></a></li>
                                <li class="mb-2 pb-2"><a href="#" class="d-flex justify-content-between align-items-center before-none">Event <span>24</span></a></li>
                                <li class="mb-2 pb-2"><a href="#" class="d-flex justify-content-between align-items-center before-none">Bar <span>15</span></a></li>
                                <li class="mb-2 pb-2"><a href="#" class="d-flex justify-content-between align-items-center before-none">Salon <span>33</span></a></li>
                                <li><a href="#" class="d-flex justify-content-between align-items-center before-none">Beauty <span>10</span></a></li>
                            </ul>
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget tag-widget">
                        <h3 class="widget-title">Tags Cloud</h3>
                        <div class="title-shape"></div>
                        <ul class="tag-list padding-top-30px">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Restaurant</a></li>
                            <li><a href="#">Gym</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Office</a></li>
                            <li><a href="#">Bar</a></li>
                            <li><a href="#">Health Care</a></li>
                            <li><a href="#">Car Parking</a></li>
                            <li><a href="#">Nightlife</a></li>
                            <li><a href="#">Doctor</a></li>
                            <li><a href="#">Bike Parking</a></li>
                        </ul>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget similar-widget">
                        <h3 class="widget-title">Similar Listings</h3>
                        <div class="title-shape"></div>
                        <div class="similar-list padding-top-30px">
                            <div class="recent-item mb-3">
                                <div class="recent-img">
                                    <a href="blog-single.html">
                                        <img src="images/img34.jpg" alt="blog image">
                                    </a>
                                </div><!-- end recent-img -->
                                <div class="recentpost-body">
                                    <h4 class="recent__link">
                                        <a href="blog-single.html">The best sale marketer of the next year</a>
                                    </h4>
                                    <div class="rating-rating">
                                        <span class="la la-star"></span>
                                        <span class="la la-star"></span>
                                        <span class="la la-star"></span>
                                        <span class="la la-star"></span>
                                        <span class="la la-star-half-full"></span>
                                    </div>
                                    <p class="recent__meta"><span class="color-text font-weight-bold">$19.00</span> <a href="#">Gym & Fitness</a></p>
                                </div><!-- end recent-img -->
                            </div><!-- end recent-item -->
                            <div class="recent-item mb-3">
                                <div class="recent-img">
                                    <a href="blog-single.html">
                                        <img src="images/img35.jpg" alt="blog image">
                                    </a>
                                </div><!-- end recent-img -->
                                <div class="recentpost-body">
                                    <h4 class="recent__link">
                                        <a href="blog-single.html">How to make your ideas became true</a>
                                    </h4>
                                    <div class="rating-rating">
                                        <span class="la la-star"></span>
                                        <span class="la la-star"></span>
                                        <span class="la la-star"></span>
                                        <span class="la la-star"></span>
                                        <span class="la la-star-half-full"></span>
                                    </div>
                                    <p class="recent__meta"><span class="color-text font-weight-bold">$19.00</span> <a href="#">Restaurants</a></p>
                                </div><!-- end recent-img -->
                            </div><!-- end recent-item -->
                            <div class="recent-item mb-3">
                                <div class="recent-img">
                                    <a href="blog-single.html">
                                        <img src="images/img36.jpg" alt="blog image">
                                    </a>
                                </div><!-- end recent-img -->
                                <div class="recentpost-body">
                                    <h4 class="recent__link">
                                        <a href="blog-single.html">What gets in the way of strategy</a>
                                    </h4>
                                    <div class="rating-rating">
                                        <span class="la la-star"></span>
                                        <span class="la la-star"></span>
                                        <span class="la la-star"></span>
                                        <span class="la la-star"></span>
                                        <span class="la la-star-half-full"></span>
                                    </div>
                                    <p class="recent__meta"><span class="color-text font-weight-bold">$19.00</span> <a href="#">Art & Design</a></p>
                                </div><!-- end recent-img -->
                            </div><!-- end recent-item -->
                            <div class="recent-item">
                                <div class="recent-img">
                                    <a href="blog-single.html">
                                        <img src="images/img37.jpg" alt="blog image">
                                    </a>
                                </div><!-- end recent-img -->
                                <div class="recentpost-body">
                                    <h4 class="recent__link">
                                        <a href="blog-single.html">What gets in the way of strategy</a>
                                    </h4>
                                    <div class="rating-rating">
                                        <span class="la la-star"></span>
                                        <span class="la la-star"></span>
                                        <span class="la la-star"></span>
                                        <span class="la la-star"></span>
                                        <span class="la la-star-half-full"></span>
                                    </div>
                                    <p class="recent__meta"><span class="color-text font-weight-bold">$19.00</span> <a href="#">Outdoors</a></p>
                                </div><!-- end recent-img -->
                            </div><!-- end recent-item -->
                        </div><!-- end similar-list -->
                        <div class="btn-box text-center padding-top-30px">
                            <a href="listing-grid.html" class="theme-btn d-block">
                                <span class="la la-eye"></span> see all listings
                            </a>
                        </div><!-- end btn-box -->
                    </div><!-- end sidebar-widget -->
                     <div class="sidebar-widget">
                        <h3 class="widget-title">Subscribe</h3>
                        <div class="title-shape"></div>
                         <div class="subscribe-form padding-top-30px">
                             <div class="contact-form-action">
                                 <form>
                                     <div class="form-group mb-1">
                                         <span class="la la-envelope-o form-icon"></span>
                                         <input class="form-control" type="email" name="text" placeholder="Enter your email">
                                         <button type="submit" class="theme-btn submit-btn border-0">Go</button>
                                     </div>
                                     <p class="font-size-14 font-weight-medium">You can unsubscribe at any time</p>
                                 </form>
                             </div>
                         </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget social-widget">
                        <h3 class="widget-title">Follow & Connect</h3>
                        <div class="title-shape"></div>
                        <ul class="social-profile padding-top-30px">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div><!-- end sidebar-widget -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end single-listing-area -->
<!-- ================================
    END SINGLE LISTING  AREA
================================= -->

<!-- ================================
    START CARD AREA
================================= -->
<section class="card-area padding-top-80px padding-bottom-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="widget-title">People Also Viewed</h2>
                    <div class="title-shape"></div>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-8 -->
        </div><!-- end row -->
        <div class="row padding-top-40px">
            <div class="col-lg-12">
                <div class="card-carousel card-static">
                    <div class="card-item">
                        <a href="listing-details.html" class="card-image-wrap">
                            <div class="card-image">
                                <img src="images/img28.jpg" class="card__img" alt="">
                                <span class="badge">now open</span>
                                <span class="badge-toggle" data-toggle="tooltip" data-placement="bottom" title="22 Likes">
                                    <i class="la la-heart-o"></i>
                                </span>
                            </div>
                        </a>
                        <div class="card-content-wrap">
                            <div class="card-content">
                                <a href="listing-details.html">
                                    <h5 class="card-meta"><span class="la la-cutlery"></span> Restaurant</h5>
                                    <h4 class="card-title">Favorite Place Food Bank
                                        <i class="fa fa-check-circle" data-toggle="tooltip" data-placement="top" title="Claimed"></i>
                                    </h4>
                                    <p class="card-sub">Bishop Avenue, New York</p>
                                </a>
                                <a href="#" class="author-img">
                                    <img src="images/small-team1.jpg" alt="author-img">
                                </a>
                                <ul class="info-list padding-top-20px">
                                    <li><span class="la la-phone"></span> (416) 551-0589</li>
                                    <li><span class="la la-link"></span>
                                        <a href="#"> www.mysitelink.com</a>
                                    </li>
                                    <li><span class="la la-calendar-check-o"></span>
                                        Posted 1 month ago
                                    </li>
                                </ul>
                            </div>
                            <div class="rating-row">
                                <div class="rating-rating">
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-half-full"></span>
                                    <span class="la la-star last-star"></span>
                                    <span class="rating-count">4.5</span>
                                </div>
                                <div class="listing-info">
                                    <ul>
                                        <li><span class="la la-eye info__count"></span> 247</li>
                                        <li><span class="la la-heart-o info__save" data-toggle="tooltip" data-placement="top" title="Bookmark"></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card-content-wrap -->
                    </div><!-- end card-item -->
                    <div class="card-item">
                        <a href="listing-details.html" class="card-image-wrap">
                            <div class="card-image">
                                <img src="images/img29.jpg" class="card__img" alt="">
                                <span class="badge badge-closed">closed</span>
                                <span class="badge-toggle" data-toggle="tooltip" data-placement="bottom" title="22 Likes">
                                    <i class="la la-heart-o"></i>
                                </span>
                            </div>
                        </a>
                        <div class="card-content-wrap">
                            <div class="card-content">
                                <a href="listing-details.html">
                                    <h5 class="card-meta"><span class="la la-plane"></span> travel</h5>
                                    <h4 class="card-title">beach blue boardwalk</h4>
                                    <p class="card-sub">Bishop Avenue, New York</p>
                                </a>
                                <a href="#" class="author-img">
                                    <img src="images/small-team2.jpg" alt="author-img">
                                </a>
                                <ul class="info-list padding-top-20px">
                                    <li><span class="la la-phone"></span> (416) 551-0589</li>
                                    <li><span class="la la-link"></span>
                                        <a href="#"> www.mysitelink.com</a>
                                    </li>
                                    <li><span class="la la-calendar-check-o"></span>
                                        Posted 1 month ago
                                    </li>
                                </ul>
                            </div>
                            <div class="rating-row">
                                <div class="rating-rating">
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-half-full"></span>
                                    <span class="la la-star last-star"></span>
                                    <span class="rating-count">4.6</span>
                                </div>
                                <div class="listing-info">
                                    <ul>
                                        <li><span class="la la-eye info__count"></span> 247</li>
                                        <li><span class="la la-heart-o info__save" data-toggle="tooltip" data-placement="top" title="Bookmark"></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card-content-wrap -->
                    </div><!-- end card-item -->
                    <div class="card-item">
                        <a href="listing-details.html" class="card-image-wrap">
                            <div class="card-image">
                                <img src="images/img30.jpg" class="card__img" alt="">
                                <span class="badge">now open</span>
                                <span class="badge-toggle" data-toggle="tooltip" data-placement="bottom" title="22 Likes">
                                    <i class="la la-heart-o"></i>
                                </span>
                            </div>
                        </a>
                        <div class="card-content-wrap">
                            <div class="card-content">
                                <a href="listing-details.html">
                                    <h5 class="card-meta"><span class="la la-hotel"></span> hotel</h5>
                                    <h4 class="card-title">
                                        hotel govendor <i class="fa fa-check-circle" data-toggle="tooltip" data-placement="top" title="Claimed"></i>
                                    </h4>
                                    <p class="card-sub">Bishop Avenue, New York</p>
                                </a>
                                <a href="#" class="author-img">
                                    <img src="images/small-team3.jpg" alt="author-img">
                                </a>
                                <ul class="info-list padding-top-20px">
                                    <li><span class="la la-phone"></span> (416) 551-0589</li>
                                    <li><span class="la la-link"></span>
                                        <a href="#"> www.mysitelink.com</a>
                                    </li>
                                    <li><span class="la la-calendar-check-o"></span>
                                        Posted 1 month ago
                                    </li>
                                </ul>
                            </div>
                            <div class="rating-row">
                                <div class="rating-rating">
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-half-full"></span>
                                    <span class="la la-star last-star"></span>
                                    <span class="rating-count">4.7</span>
                                </div>
                                <div class="listing-info">
                                    <ul>
                                        <li><span class="la la-eye info__count"></span> 247</li>
                                        <li><span class="la la-heart-o info__save" data-toggle="tooltip" data-placement="top" title="Bookmark"></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card-content-wrap -->
                    </div><!-- end card-item -->
                    <div class="card-item">
                        <a href="listing-details.html" class="card-image-wrap">
                            <div class="card-image">
                                <img src="images/img31.jpg" class="card__img" alt="">
                                <span class="badge">now open</span>
                                <span class="badge-toggle" data-toggle="tooltip" data-placement="bottom"
                                      title="22 Likes">
                                    <i class="la la-heart-o"></i>
                                </span>
                            </div>
                        </a>
                        <div class="card-content-wrap">
                            <div class="card-content">
                                <a href="listing-details.html">
                                    <h5 class="card-meta"><span class="la la-music"></span> event</h5>
                                    <h4 class="card-title">sticky band party</h4>
                                    <p class="card-sub">Bishop Avenue, New York</p>
                                </a>
                                <a href="#" class="author-img">
                                    <img src="images/small-team4.jpg" alt="author-img">
                                </a>
                                <ul class="info-list padding-top-20px">
                                    <li><span class="la la-phone"></span> (416) 551-0589</li>
                                    <li><span class="la la-link"></span>
                                        <a href="#"> www.mysitelink.com</a>
                                    </li>
                                    <li><span class="la la-calendar-check-o"></span>
                                        Posted 1 month ago
                                    </li>
                                </ul>
                            </div>
                            <div class="rating-row">
                                <div class="rating-rating">
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-half-full"></span>
                                    <span class="la la-star last-star"></span>
                                    <span class="rating-count">4.5</span>
                                </div>
                                <div class="listing-info">
                                    <ul>
                                        <li><span class="la la-eye info__count"></span> 247</li>
                                        <li><span class="la la-heart-o info__save" data-toggle="tooltip" data-placement="top" title="Bookmark"></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card-content-wrap -->
                    </div><!-- end card-item -->
                    <div class="card-item">
                        <a href="listing-details.html" class="card-image-wrap">
                            <div class="card-image">
                                <img src="images/img32.jpg" class="card__img" alt="">
                                <span class="badge badge-closed">closed</span>
                                <span class="badge-toggle" data-toggle="tooltip" data-placement="bottom" title="22 Likes">
                                    <i class="la la-heart-o"></i>
                                </span>
                            </div>
                        </a>
                        <div class="card-content-wrap">
                            <div class="card-content">
                                <a href="listing-details.html">
                                    <h5 class="card-meta"><span class="la la-shopping-cart"></span> shop</h5>
                                    <h4 class="card-title">Sena Clothing Shopping Mall</h4>
                                    <p class="card-sub">Bishop Avenue, New York</p>
                                </a>
                                <a href="#" class="author-img">
                                    <img src="images/small-team5.jpg" alt="author-img">
                                </a>
                                <ul class="info-list padding-top-20px">
                                    <li><span class="la la-phone"></span> (416) 551-0589</li>
                                    <li><span class="la la-link"></span>
                                        <a href="#"> www.mysitelink.com</a>
                                    </li>
                                    <li><span class="la la-calendar-check-o"></span>
                                        Posted 1 month ago
                                    </li>
                                </ul>
                            </div>
                            <div class="rating-row">
                                <div class="rating-rating">
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-half-full"></span>
                                    <span class="la la-star last-star"></span>
                                    <span class="rating-count">4.6</span>
                                </div>
                                <div class="listing-info">
                                    <ul>
                                        <li><span class="la la-eye info__count"></span> 247</li>
                                        <li><span class="la la-heart-o info__save" data-toggle="tooltip" data-placement="top" title="Bookmark"></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card-content-wrap -->
                    </div><!-- end card-item -->
                    <div class="card-item">
                        <a href="listing-details.html" class="card-image-wrap">
                            <div class="card-image">
                                <img src="images/img30.jpg" class="card__img" alt="">
                                <span class="badge">now open</span>
                                <span class="badge-toggle" data-toggle="tooltip" data-placement="bottom" title="22 Likes">
                                    <i class="la la-heart-o"></i>
                                </span>
                            </div>
                        </a>
                        <div class="card-content-wrap">
                            <div class="card-content">
                                <a href="listing-details.html">
                                    <h5 class="card-meta"><span class="la la-hotel"></span> hotel</h5>
                                    <h4 class="card-title">
                                        hotel govendor <i class="fa fa-check-circle" data-toggle="tooltip" data-placement="top" title="Claimed"></i>
                                    </h4>
                                    <p class="card-sub">Bishop Avenue, New York</p>
                                </a>
                                <a href="#" class="author-img">
                                    <img src="images/small-team6.jpg" alt="author-img">
                                </a>
                                <ul class="info-list padding-top-20px">
                                    <li><span class="la la-phone"></span> (416) 551-0589</li>
                                    <li><span class="la la-link"></span>
                                        <a href="#"> www.mysitelink.com</a>
                                    </li>
                                    <li><span class="la la-calendar-check-o"></span>
                                        Posted 1 month ago
                                    </li>
                                </ul>
                            </div>
                            <div class="rating-row">
                                <div class="rating-rating">
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-half-full"></span>
                                    <span class="la la-star last-star"></span>
                                    <span class="rating-count">4.7</span>
                                </div>
                                <div class="listing-info">
                                    <ul>
                                        <li><span class="la la-eye info__count"></span> 247</li>
                                        <li><span class="la la-heart-o info__save" data-toggle="tooltip" data-placement="top" title="Bookmark"></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card-content-wrap -->
                    </div><!-- end card-item -->
                </div><!-- end card-carousel -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end card-area -->
<!-- ================================
    END CARD AREA
================================= -->

<!-- ================================
    START CTA AREA
================================= -->
<section class="cta-area cta-area2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-box d-flex align-items-center">
                    <div class="col-lg-8">
                        <div class="section-heading">
                            <h2 class="sec__title text-white">Subscribe to Newsletter!</h2>
                            <p class="sec__desc">Subscribe to get latest updates and information.</p>
                        </div><!-- end section-heading -->
                    </div><!-- end col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="contact-form-action">
                            <form method="post">
                                <div class="form-group mb-0">
                                    <span class="la la-envelope-o form-icon"></span>
                                    <input class="form-control" type="email" placeholder="Enter your email">
                                    <button class="theme-btn" type="submit">Subscribe</button>
                                </div>
                            </form>
                        </div><!-- end contact-form-action -->
                    </div><!-- end col-lg-3 -->
                </div><!-- end cta-box -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!-- ================================
    END CTA AREA
================================= -->

<!-- ================================
       START FOOTER AREA
================================= -->
<section class="footer-area section-bg padding-top-140px padding-bottom-60px">
    <div class="box-icon"></div>
    <div class="box-icon"></div>
    <div class="box-icon"></div>
    <div class="box-icon"></div>
    <div class="box-icon"></div>
    <div class="box-icon"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 column-td-6">
                <div class="footer-item">
                    <div class="logo">
                        <a href="index.html" class="foot-logo"><img src="images/logo2.png" alt="logo"></a>
                        <p class="footer__desc">
                            Morbi convallis bibendum urna ut viverra. Maecenas
                            quis consequat libero, a feugiat eros
                        </p>
                        <ul class="social-profile">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                               <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                              <a href="#">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-behance"></i>
                                </a>
                            </li>
                        </ul>
                    </div><!-- end logo -->
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-6">
                <div class="footer-item">
                    <h4 class="footer__title">Quick Links</h4>
                    <ul class="list-items">
                        <li><a href="about.html">about us</a></li>
                        <li><a href="sign-up.html">sign up</a></li>
                        <li><a href="login.html">log in</a></li>
                        <li><a href="add-listing.html">add listing</a></li>
                        <li><a href="contact.html">contact us</a></li>
                        <li><a href="pricing.html">pricing</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-6">
                <div class="footer-item">
                    <h4 class="footer__title">Categories</h4>
                    <ul class="list-items">
                        <li><a href="#">Shops</a></li>
                        <li><a href="#">Hotels</a></li>
                        <li><a href="#">Restaurants</a></li>
                        <li><a href="#">Bars</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Fitness</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-6">
                <div class="footer-item">
                    <h4 class="footer__title">Contact with Us</h4>
                    <ul class="info-list contact-links">
                        <li><span class="la la-home "></span> 12345 Little Baker St, Melbourne </li>
                        <li><span class="la la-headphones"></span> <a href="#">+ 61 23 8093 3400</a></li>
                        <li><span class="la la-envelope-o"></span> <a href="#">dirto@gmail.com</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="copy-right margin-top-50px padding-top-60px">
                    <p class="copy__desc">
                        &copy; Copyright Dirto 2020. Made with
                        <span class="la la-heart-o"></span> by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                    </p>
                    <ul class="list-items">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div><!-- end copy-right -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
       START FOOTER AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->


<!-- end modal-shared -->
<div class="modal-form">
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-top">
                    <button type="button" class="close close-arrow" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close mb-0"></span>
                    </button>
                    <h4 class="modal-title"><span class="la la-flag-o mb-0"></span> Report this Listing</h4>
                </div>
                <div class="contact-form-action">
                    <form method="post">
                        <div class="msg-box">
                            <label class="label-text">Write Message</label>
                            <div class="form-group">
                                <i class="la la-pencil form-icon"></i>
                                <textarea class="message-control form-control" name="message" placeholder="What's wrong with this listing?" required></textarea>
                            </div>
                        </div>
                        <div class="btn-box text-right">
                            <button type="submit" class="theme-btn button-success border-0" ><i class="la la-paper-plane"></i> Send message</button>
                        </div>
                    </form>
                </div><!-- end contact-form-action -->
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->
</div><!-- end modal-form -->
<!-- end modal-shared -->

<!-- Template JS Files -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/isotope-3.0.6.min.js"></script>
<script src="js/animated-headline.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/jquery.show-more.js"></script>
<script src="js/jquery-rating.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYzby4yYDVaXPmtu4jZAGR258K6IYwjIY&libraries"></script>
<script src="js/gmap-script.js"></script>
<script src="js/jquery.filer.min.js"></script>
<script src="js/smooth-scrolling.js"></script>
<script src="js/main.js"></script>
</body>
</html>