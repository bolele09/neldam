<!DOCTYPE html>
<html lang="">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Neldam</title>
    <!-- Favicon -->
    <link rel="icon" href="neldam.png" alt="neldam" width="50" hight="50">
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
                                        <a href="" >ACCUEIL</a>    
                                    </li>
                                    <li>
                                        <a href="index.php" >RESTAURANTS</a>   
                                        <ul class="dropdown-menu-item">
                                            <li><a href="">Resto A</a></li>
                                            <li><a href="">Resto B</a></li>
                                            <li><a href="">Resto C</a></li>
                                            <li><a href="">Resto D<span class="new-page-badge">new</span></a></li>
                                            <li><a href="">Resto E <span class="new-page-badge">new</span></a></li>
                                        </ul> 
                                    </li>

                                    <li>
                                        <a href="" >
                                            PROMOTIONS
                                        </a>    
                                    </li>

                                    <li>
                                        <a href="" >CONTACT </a>    
                                    </li>
                                </ul>
                               <!--  <ul>
                                     <li>
                                        <a href="index.php">Accueil <span class="la la-angle-down"></span></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="index.html">home one</a></li>
                                            <li><a href="index2.html">home two</a></li>
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
                                            <li><a href="list-map-view.html">map view </a></li>
                                            <li><a href="list-map-view2.html">map view 2 </a></li>
                                            <li><a href="listing-list.html">listing list </a></li>
                                            <li><a href="list-left-sidebar.html">left sidebar  </a></li>
                                            <li><a href="list-right-sidebar.html">right sidebar  </a></li>
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
                                            <li><a href="recover.html">recover pass <span class="new-page-badge">new</span></a></li>
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
                                </ul> --> 

                            </nav>
                        </div><!-- end main-menu-content -->
                        <div class="logo-right-content">
                            <ul class="author-access-list">

                                <!-- <li>
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
                            </ul> -->
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
    START HERO-WRAPPER AREA
================================= -->
<section class="hero-wrapper hero-wrapper4">
    <div class="hero-overlay"></div><!-- end hero-overlay -->
    <div class="video-bg">
    <img src="bg.jpg"  width="100% ">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-heading">
                    <div class="section-heading">
                        <h2 class="sec__title">Avec Neldam Vous Avez la Possibilite de Commander Dans Le Restaurant Le Plus Proche De Chez Vous</h2>
                        <p class="sec__desc">
                            Et On Vous Livre Sur Place.
                        </p>
                    </div>
                </div><!-- end hero-heading -->
                <!-- <div class="main-search-input">
                    <div class="main-search-input-item">
                        <div class="contact-form-action">
                            <form action="#">
                                <div class="form-group mb-0">
                                    <span class="la la-search form-icon"></span>
                                    <input class="form-control" type="text" placeholder="What are you looking for?">
                                </div>
                            </form>
                        </div>
                    </div><end main-search-input-item --><!-- 
                    <div class="main-search-input-item location">
                        <select class="select-option-field">
                            <option value>Select a Location</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AX">Åland Islands</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua &amp; Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AC">Ascension Island</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia</option>
                            <option value="BA">Bosnia &amp; Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="VG">British Virgin Islands</option>
                            <option value="BN">Brunei</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="BQ">Caribbean Netherlands</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo - Brazzaville</option>
                            <option value="CD">Congo - Kinshasa</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Côte d’Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CW">Curaçao</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czechia</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="SZ">Eswatini</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GG">Guernsey</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong SAR China</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IM">Isle of Man</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JE">Jersey</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="XK">Kosovo</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Laos</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao SAR China</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="MD">Moldova</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="ME">Montenegro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar (Burma)</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="MK">North Macedonia</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PS">Palestinian Territories</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn Islands</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Réunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russia</option>
                            <option value="RW">Rwanda</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">São Tomé &amp; Príncipe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SX">Sint Maarten</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia &amp; South Sandwich Islands</option>
                            <option value="KR">South Korea</option>
                            <option value="SS">South Sudan</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="BL">St. Barthélemy</option>
                            <option value="SH">St. Helena</option>
                            <option value="KN">St. Kitts &amp; Nevis</option>
                            <option value="LC">St. Lucia</option>
                            <option value="MF">St. Martin</option>
                            <option value="PM">St. Pierre &amp; Miquelon</option>
                            <option value="VC">St. Vincent &amp; Grenadines</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard &amp; Jan Mayen</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="TW">Taiwan</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania</option>
                            <option value="TH">Thailand</option>
                            <option value="TL">Timor-Leste</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad &amp; Tobago</option>
                            <option value="TA">Tristan da Cunha</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks &amp; Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VA">Vatican City</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Vietnam</option>
                            <option value="WF">Wallis &amp; Futuna</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                    </div><end main-search-input-item -->
                    <!-- <div class="main-search-input-item category">
                        <select class="select-option-field-2">
                            <option value >Select a Category</option>
                            <option value="1">Shops</option>
                            <option value="2">Hotels</option>
                            <option value="3">Foods & Restaurants</option>
                            <option value="4">Fitness</option>
                            <option value="5">Travel</option>
                            <option value="6">Salons</option>
                            <option value="7">Event</option>
                            <option value="8">Business</option>
                        </select>
                    </div>end main-search-input-item
                    <div class="main-search-input-btn">
                        <button class="button theme-btn" type="submit">Search</button>
                    </div>end main-search-input-btn
                </div>end main-search-input --> 
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="hero-svg-content text-center">
        <i class="fa fa-angle-down"></i>
    </div>
</section><!-- end hero-wrapper -->
<!-- ================================
    END HERO-WRAPPER AREA
================================= -->

<!-- ================================
    START CAT AREA
================================= -->
<section class="cat-area padding-top-100px padding-bottom-90px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title before-none pt-0">DECOUVREZ NOS RESTAURANTS!</h2>
                    <p class="sec__desc">
                        Trouvez  un restaurant dans votre localité!
                    </p>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        
        <div class="row mt-5"> 







            <?php
                // connexion
                $mypdo=$con->EtablirConnexion();
                // requete permettant d'afficher les infos necessaires
                $req=$mypdo->prepare('select * from restaurant order by nomRestaurant LIMIT 12');
                $req->execute();
                    if($req->rowCount()==0)
                    {
                        echo"<font color='red'><b><center>Aucun Restaurant n'est enregistré </center></b></font>";
                        exit();
                    }
                    else
                    {
                    while($donnees=$req->fetch()){
                    ?> 



            <div class="col-lg-3 column-td-6">
                <div class="category-item mb-4 mt-0 ml-0 mr-0 p-0">
                    <figure class="category-fig m-0">
                        <img src="../img/logo_resto/<?php echo $donnees['logo']?> " alt=" " class="cat-img">
                        <figcaption class="fig-caption">
                            <a href="menuresto.php?idres=<?php echo $donnees['idRestaurant']?>" class="cat-fig-box">
                                <div class="icon-element mb-3">
                                    <span class="la la-cutlery"></span>
                                </div>

                                <div class="cat-content">
                                    <h4 class="cat__title">
                                    <?php 
                                        echo $donnees['nomRestaurant']
                                    ?></h4>
                                </div>
                            </a>
                        </figcaption>
                    </figure>
                </div><!-- end category-item m-0 padding-0 -->
            </div>
            <?php
                }
                }
             ?> 

        </div> <!-- end row -->   
                
        
    </div><!-- end container -->
</section><!-- end cat-area -->
<!-- ================================
    END CAT AREA
================================= -->

<!-- ================================
    START HIW AREA
================================= -->
<!-- <section class="hiw-area text-center padding-top-100px padding-bottom-80px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title before-none pt-0">How Dirto Works</h2>
                    <p class="sec__desc">
                        Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, <br>
                        a feugiat eros. Nunc ut lacinia tortors.
                    </p> -->
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <!-- <div class="row padding-top-100px">
            <div class="col-lg-3 column-td-6">
                <div class="icon-box">
                    <div class="info-icon">
                        <span class="la la-search-plus"></span>
                        <span class="info-number">1</span>
                    </div>end info-icon
                    <div class="info-content">
                        <h4 class="info__title">Find a Place</h4>
                        <p class="info__desc">
                            Proin dapibus nisl ornare diam varius ecos tempus. Aenean a quam
                        </p> -->
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <!-- <div class="col-lg-3 column-td-6">
                <div class="icon-box">
                    <div class="info-icon">
                        <span class="la la-map-o"></span>
                        <span class="info-number">2</span> -->
                    </div><!-- end info-icon-->
                    <!-- <div class="info-content">
                        <h4 class="info__title">Select a location</h4>
                        <p class="info__desc">
                            Proin dapibus nisl ornare diam varius ecos tempus. Aenean a quam
                        </p> -->
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <!-- <div class="col-lg-3 column-td-6">
                <div class="icon-box">
                    <div class="info-icon">
                        <span class="la la-sort"></span>
                        <span class="info-number">3</span> -->
                    </div><!-- end info-icon-->
                    <!-- <div class="info-content">
                        <h4 class="info__title">Select a Category</h4>
                        <p class="info__desc">
                            Proin dapibus nisl ornare diam varius ecos tempus. Aenean a quam
                        </p> -->
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <!-- <div class="col-lg-3 column-td-6">
                <div class="icon-box">
                    <div class="info-icon">
                        <span class="la la-check-circle"></span>
                        <span class="info-number">4</span> -->
                    </div><!-- end info-icon-->
                    <!-- <div class="info-content">
                        <h4 class="info__title">See Result</h4>
                        <p class="info__desc">
                            Proin dapibus nisl ornare diam varius ecos tempus. Aenean a quam
                        </p> -->
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end hiw-area -->
<!-- ================================
    END HIW AREA
================================= -->

<!-- ================================
    START CARD AREA
================================= -->
<!-- <section class="card-area text-center padding-top-100px padding-bottom-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title before-none pt-0">Most Visited Places</h2>
                    <p class="sec__desc">
                        Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, <br>
                        a feugiat eros. Nunc ut lacinia tortors.
                    </p> -->
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <!-- <div class="row">
            <div class="col-lg-12">
                <div class="card-carousel mt-5">
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
                            </div> -->
                        </div><!-- end card-content-wrap -->
                    </div><!-- end card-item -->
                    <!-- <div class="card-item">
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
                            </div> -->
                        </div><!-- end card-content-wrap -->
                    </div><!-- end card-item -->
                    <!-- <div class="card-item">
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
                            </div> -->
                        </div><!-- end card-content-wrap -->
                    </div><!-- end card-item -->
                   <!--  <div class="card-item">
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
                            </div> -->
                        </div><!-- end card-content-wrap -->
                    </div><!-- end card-item -->
                    <!-- <div class="card-item">
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
                            </div> -->
                        </div><!-- end card-content-wrap -->
                    </div><!-- end card-item -->
                   <!--  <div class="card-item">
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
                            </div> -->
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
    START FUN-FACT AREA
================================= -->
<!-- <section class="funfact-area section-bg-2 padding-top-100px padding-bottom-50px before-none after-none text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title before-none pt-0 text-white">Numbers Say Everything</h2>
                    <p class="sec__desc">
                        Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, <br>
                        a feugiat eros. Nunc ut lacinia tortors.
                    </p> -->
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <!-- <div class="row mt-5">
            <div class="col-lg-3 column-td-6">
                <div class="counter-item">
                    <div class="counter-number fun-bg1">
                        <span class="counter">1150</span>
                        <span class="count-symbol">+</span> -->
                    </div><!-- end counter-number -->
                    <!-- <div class="counter-content padding-top-20px">
                        <p class="counter__title">Projects Completed</p> -->
                    </div><!-- end counter-content -->
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
            <!-- <div class="col-lg-3 column-td-6">
                <div class="counter-item">
                    <div class="counter-number fun-bg2">
                        <span class="counter">3040</span>
                        <span class="count-symbol">+</span> -->
                    </div><!-- end counter-number -->
                   <!--  <div class="counter-content padding-top-20px">
                        <p class="counter__title">Happy Clients</p> -->
                    </div><!-- end counter-content -->
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
           <!--  <div class="col-lg-3 column-td-6">
                <div class="counter-item">
                    <div class="counter-number fun-bg3">
                        <span class="counter">2020</span>
                        <span class="count-symbol">+</span> -->
                    </div><!-- end counter-number -->
                    <!-- <div class="counter-content padding-top-20px">
                        <p class="counter__title">Cup of Coffee</p> -->
                    </div><!-- end counter-content -->
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
            <!-- <div class="col-lg-3 column-td-6">
                <div class="counter-item">
                    <div class="counter-number fun-bg4">
                        <span class="counter">350</span>
                        <span class="count-symbol">+</span> -->
                    </div><!-- end counter-number -->
                    <!-- <div class="counter-content padding-top-20px">
                        <p class="counter__title">Awards Winning</p> -->
                    </div><!-- end counter-content -->
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end funfact-area -->
<!-- ================================
    END FUN-FACT AREA
================================= -->

<!-- ================================
    START HIW AREA
================================= -->
<!-- <section class="hiw-area padding-top-100px padding-bottom-80px after-none text-center"> --><!-- 
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title before-none pt-0">What We Offer</h2>
                    <p class="sec__desc">
                        Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, <br>
                        a feugiat eros. Nunc ut lacinia tortors.
                    </p> -->
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <!-- <div class="row mt-5">
            <div class="col-lg-3 column-td-6">
                <div class="icon-box icon-box-layout">
                    <div class="info-icon">
                        <span class="la la-map"></span> -->
                    </div><!-- end info-icon-->
                    <!-- <div class="info-content">
                        <h4 class="info__title">Great Places</h4>
                        <p class="info__desc">
                            There are many variations of passages of Lorem Ipsum available.
                        </p> -->
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <!-- <div class="col-lg-3 column-td-6">
                <div class="icon-box icon-box-layout">
                    <div class="info-icon">
                        <span class="la la-cutlery"></span> -->
                    </div><!-- end info-icon-->
                    <!-- <div class="info-content">
                        <h4 class="info__title">Great Restaurants</h4>
                        <p class="info__desc">
                            There are many variations of passages of Lorem Ipsum available.
                        </p> -->
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <!-- <div class="col-lg-3 column-td-6">
                <div class="icon-box icon-box-layout">
                    <div class="info-icon">
                        <span class="la la-hotel"></span> -->
                    </div><!-- end info-icon-->
                    <!-- <div class="info-content">
                        <h4 class="info__title">Great Hotels</h4>
                        <p class="info__desc">
                            There are many variations of passages of Lorem Ipsum available.
                        </p> -->
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
            <!-- <div class="col-lg-3 column-td-6">
                <div class="icon-box icon-box-layout info-more-content">
                    <div class="info-icon">
                        <span class="la la-ellipsis-h"></span> -->
                    </div><!-- end info-icon-->
                   <!--  <div class="info-content">
                        <h4 class="info__title">And More...</h4>
                        <p class="info__desc">
                            There are many variations of passages of Lorem Ipsum available.
                        </p> -->
                    </div><!-- end info-content -->
                </div><!-- end icon-box -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end hiw-area -->
<!-- ================================
    END HIW AREA
================================= -->

<!-- ================================
    START CTA AREA
================================= -->
<!-- <section class="cta-area section-bg column-sm-center padding-top-80px padding-bottom-80px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <div class="section-heading">
                    <h2 class="sec__title before-none pt-0 mb-3 font-size-28">Dirto is the best way to find & discover <br> great local businesses</h2>
                    <p class="sec__desc font-size-17">
                        Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero
                    </p> -->
                </div><!-- end section-heading -->
            </div><!-- end col-lg-9 -->
            <!-- <div class="col-lg-3">
                <div class="btn-box">
                    <a href="sign-up.html" class="theme-btn">Create Account</a> -->
                </div><!-- end btn-box -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!-- ================================
    END CTA AREA
================================= -->

<!-- ================================
       START TESTIMONIAL AREA
================================= -->
<!-- <section class="testimonial-area padding-top-100px padding-bottom-100px text-center">
    <img src="images/testi-img1.jpg" alt="testtmonial-image" class="random-img">
    <img src="images/testi-img2.jpg" alt="testtmonial-image" class="random-img">
    <img src="images/testi-img3.jpg" alt="testtmonial-image" class="random-img">
    <img src="images/testi-img4.jpg" alt="testtmonial-image" class="random-img">
    <img src="images/testi-img5.jpg" alt="testtmonial-image" class="random-img">
    <img src="images/testi-img6.jpg" alt="testtmonial-image" class="random-img">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title before-none pt-0">What Our Users Said</h2>
                    <p class="sec__desc">
                        Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero,<br>
                        a feugiat eros. Nunc ut lacinia tortors.
                    </p> -->
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <!-- <div class="row">
            <div class="col-lg-8 mx-auto mt-4">
                <div class="testimonial-carousel">
                    <div class="testimonial-item">
                        <div class="testi-comment">
                            <p class="testi__desc">
                                Excepteur sint occaecat cupidatat non proident sunt in culpa
                                officia deserunt mollit anim laborum sint occaecat cupidatat non
                                proident. Occaecat cupidatat non proident des
                                culpa officia deserunt mollit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at cumque fuga
                                minima molestias nihil perspiciatis repudiandae sed vitae voluptatibus?
                            </p>
                        </div>
                        <div class="testi-content">
                            <img src="images/team8.jpg" class="testi__img" alt="testimonial image">
                            <h4 class="tesi__title">Richard Doe</h4>
                            <span class="testi__meta">united states</span>
                        </div> -->
                    </div><!-- end testimonial-item -->
                    <!-- <div class="testimonial-item">
                        <div class="testi-comment">
                            <p class="testi__desc">
                                Excepteur sint occaecat cupidatat non proident sunt in culpa
                                officia deserunt mollit anim laborum sint occaecat cupidatat non
                                proident. Occaecat cupidatat non proident des
                                culpa officia deserunt mollit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at cumque fuga
                                minima molestias nihil perspiciatis repudiandae sed vitae voluptatibus?
                            </p>
                        </div>
                        <div class="testi-content">
                            <img src="images/team9.jpg" class="testi__img" alt="testimonial image">
                            <h4 class="tesi__title">Denwen Evil</h4>
                            <span class="testi__meta">united kingdom</span>
                        </div> -->
                    </div><!-- end testimonial-item -->
                    <!-- <div class="testimonial-item">
                        <div class="testi-comment">
                            <p class="testi__desc">
                                Excepteur sint occaecat cupidatat non proident sunt in culpa
                                officia deserunt mollit anim laborum sint occaecat cupidatat non
                                proident. Occaecat cupidatat non proident des
                                culpa officia deserunt mollit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at cumque fuga
                                minima molestias nihil perspiciatis repudiandae sed vitae voluptatibus?
                            </p>
                        </div>
                        <div class="testi-content">
                            <img src="images/team10.jpg" class="testi__img" alt="testimonial image">
                            <h4 class="tesi__title">Collis Pong</h4>
                            <span class="testi__meta">melbourne, australia</span> -->
                        </div>
                    </div><!-- end testimonial-item -->
                </div><!-- end testimonial-carousel -->
            </div><!-- end col-lg-8 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end testimonial-area -->
<!-- ================================
       START TESTIMONIAL AREA
================================= -->

<div class="section-block"></div>

<!-- ================================
       START BLOG AREA
================================= -->
<!-- <section class="blog-area padding-top-100px before-none after-none padding-bottom-80px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title before-none pt-0">Latest Tips & Articles</h2>
                    <p class="sec__desc">
                        Morbi convallis bibendum urna ut viverra. Maecenas quis consequat,<br>
                        a feugiat eros. Nunc ut lacinia tortors.
                    </p> -->
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <!-- <div class="row mt-5">
            <div class="col-lg-4 column-td-6">
                <div class="card-item blog-card">
                    <a href="blog-single.html" class="card-image-wrap">
                        <div class="card-image">
                            <img src="images/img31.jpg" alt="blog image" class="card__img"> -->
                        </div><!-- end card-image -->
                    <!-- </a>
                    <div class="card-content pl-0 pr-0">
                        <a href="blog-single.html" class="card-title">
                            50 Greatest Event Places in United Kingdom
                        </a>
                        <ul class="card-meta pl-0 d-flex justify-content-between align-items-center mt-2">
                            <li>25 Dec, 2018 - <a href="#" class="tag__text">Tips & Tricks</a></li>
                            <li><a href="javascript:void(0)">340 Likes</a></li>
                        </ul>
                        <p class="card-sub mt-3">
                            Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem eaque ipsa quae ab illo inventore
                            incididunt ut labore et dolore magna
                        </p>
                        <ul class="post-author d-flex align-items-center justify-content-between mt-3">
                            <li>
                                <img src="images/testi-img7.jpg" alt="">
                                <span class="by__text">By</span>
                                <span>David Wise</span>
                            </li>
                            <li>
                                <a href="blog-single.html" class="blog__btn">
                                    read more -->
                                </a>
                            </li>
                        </ul>
                    </div><!-- end blog-post-body -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <!-- <div class="col-lg-4 column-td-6">
                <div class="card-item blog-card">
                    <a href="blog-single.html" class="card-image-wrap">
                        <div class="card-image">
                            <img src="images/img32.jpg" alt="blog image" class="card__img"> -->
                        </div><!-- end card-image -->
                    <!-- </a>
                    <div class="card-content pl-0 pr-0">
                        <a href="blog-single.html" class="card-title">
                            Top 10 Best Clothing Shops in Sydney
                        </a>
                        <ul class="card-meta pl-0 d-flex justify-content-between align-items-center mt-2">
                            <li>26 Dec, 2018 - <a href="#" class="tag__text">Tips & News</a></li>
                            <li><a href="javascript:void(0)">620 Likes</a></li>
                        </ul>
                        <p class="card-sub mt-3">
                            Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem eaque ipsa quae ab illo inventore
                            incididunt ut labore et dolore magna
                        </p>
                        <ul class="post-author d-flex align-items-center justify-content-between mt-3">
                            <li>
                                <img src="images/testi-img7.jpg" alt="">
                                <span class="by__text">By</span>
                                <span>Mark Wins</span>
                            </li>
                            <li>
                                <a href="blog-single.html" class="blog__btn">
                                    read more
                                </a>
                            </li>
                        </ul> -->
                    </div><!-- end card-content -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <!-- <div class="col-lg-4 column-td-6">
                <div class="card-item blog-card">
                    <a href="blog-single.html" class="card-image-wrap">
                        <div class="card-image">
                            <img src="images/img30.jpg" alt="blog image" class="card__img"> -->
                        </div><!-- end card-image -->
                    <!-- </a>
                    <div class="card-content pl-0 pr-0">
                        <a href="blog-single.html" class="card-title">
                            Top 15 Greatest Hotels in United States
                        </a>
                        <ul class="card-meta pl-0 d-flex justify-content-between align-items-center mt-2">
                            <li>27 Dec, 2018 - <a href="#" class="tag__text">Tips & Tricks</a></li>
                            <li><a href="javascript:void(0)">800 Likes</a></li>
                        </ul>
                        <p class="card-sub mt-3">
                            Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem eaque ipsa quae ab illo inventore
                            incididunt ut labore et dolore magna
                        </p>
                        <ul class="post-author d-flex align-items-center justify-content-between mt-3">
                            <li>
                                <img src="images/testi-img7.jpg" alt="">
                                <span class="by__text">By</span>
                                <span>Matt Derry</span>
                            </li>
                            <li>
                                <a href="blog-single.html" class="blog__btn">
                                    read more
                                </a>
                            </li>
                        </ul> -->
                    </div><!-- end card-content -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
       START BLOG AREA
================================= -->

<div class="section-block"></div>

<!-- ================================
    START CTA AREA
================================= -->
<section class="cta-area cta-area3 padding-top-100px padding-bottom-100px section-bg">
    <img src="images/symble1.png" alt="" class="symble-img">
    <img src="images/symble2.png" alt="" class="symble-img">
    <img src="images/symble3.png" alt="" class="symble-img">
    <img src="images/symble4.png" alt="" class="symble-img">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="mobile-img">
                    <img src="images/mobile.png" alt="mobile-img">
                </div>
            </div><!-- end col-lg-5 -->
            <div class="col-lg-6 ml-auto">
                <div class="mobile-app-content">
                    <div class="section-heading">
                        <h2 class="sec__title before-none pt-0 mb-3">Avec Neldam Plus Besoin De Vous Fatiguer</h2>
                        <p class="sec__desc font-size-17 mb-4">
                            Omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem
                            quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet
                            Lorem ipsum dolor sit amet.
                        </p>
                    </div><!-- end section-heading -->
                    <ul class="info-list contact-links">
                        <li class="d-flex align-items-center mb-2"><span class="la la-file-text-o"></span> Real Time Listing</li>
                        <li class="d-flex align-items-center mb-2"><span class="la la-filter"></span> Budget Filter For Budget</li>
                        <li class="d-flex align-items-center mb-2"><span class="la la-question-circle"></span> Notification Price Reduction</li>
                    </ul>
                    <div class="btn-box text-left margin-top-40px">
                        <a href="#" class="theme-btn download-btn"><span class="la la-apple"></span> app store</a>
                        <a href="#" class="theme-btn download-btn"><span class="la la-android"></span> google play</a>
                    </div><!-- end btn-box -->
                </div>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!-- ================================
    END CTA AREA
================================= -->

<!-- ================================
       START CLIENTLOGO AREA
================================= -->
<section class="clientlogo-area padding-top-80px padding-bottom-80px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="client-logo text-center">
                    <div class="client-logo-item">
                        <img src="images/client-logo.png" alt="brand image">
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="images/client-logo.png" alt="brand image">
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="images/client-logo.png" alt="brand image">
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="images/client-logo.png" alt="brand image">
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="images/client-logo.png" alt="brand image">
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="images/client-logo.png" alt="brand image">
                    </div><!-- end client-logo-item -->
                </div><!-- end client-logo -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end clientlogo-area -->
<!-- ================================
       START CLIENTLOGO AREA
================================= -->

<!-- ================================
    START CTA AREA
================================= -->
<section class="cta-area cta-area2">
    <div class="container">
        <!-- <div class="row">
            <div class="col-lg-12">
                <div class="cta-box d-flex align-items-center">
                    <div class="col-lg-8">
                        <div class="section-heading">
                            <h2 class="sec__title before-none pt-0 text-white">Subscribe to Newsletter!</h2>
                            <p class="sec__desc">Subscribe to get latest updates and information.</p>
                        </div> --><!-- end section-heading -->
                    <!-- </div> --><!-- end col-lg-8 -->
                   <!--  <div class="col-lg-4">
                        <div class="contact-form-action">
                            <form method="post">
                                <div class="form-group mb-0">
                                    <span class="la la-envelope-o form-icon"></span>
                                    <input class="form-control" type="email" placeholder="Enter your email">
                                    <button class="theme-btn" type="submit">Subscribe</button>
                                </div>
                            </form> -->
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
                        <a href="index.html" class="foot-logo"><img src="neldam.png" alt="neldam" width="150" hight="150"></a>
                        <p class="footer__desc">
                            Neldam Est une Nouvelle Plateforme qui regroupe a la foi plusieurs domaines 
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
                        <!-- <li><a href="#">Shops</a></li>
                        <li><a href="#">Hotels</a></li> -->
                        <li><a href="#">Restaurants</a></li>
                        <!-- <li><a href="#">Bars</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Fitness</a></li> -->
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-6">
                <div class="footer-item">
                    <h4 class="footer__title">Contact with Us</h4>
                    <ul class="info-list contact-links">
                        <li><span class="la la-home"></span> 12345 Little Baker St, Melbourne </li>
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
<script src="js/jquery.filer.min.js"></script>
<script src="js/smooth-scrolling.js"></script>
<script src="js/main.js"></script>
</body>
</html>