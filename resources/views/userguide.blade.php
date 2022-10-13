@extends('layouts.app')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous"></script>
@section('content')
<link href="{{ asset('css/register.css') }}" rel="stylesheet">

    <!-- META KEYWORDS AND DESCRIPTION -->
    <meta name="keywords" content="HTML5 Template, one page template, leanding page, themeforest template, ckavart, ckav, template, multipurpose template" />
    <meta name="description" content="Brom - HTML Creative Page">
    <meta name="author" content="CKav">

    <!-- META VIEW PORT -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- FAVICONS -->


    <link rel="shortcut icon" type="image/x-icon" href="img/admin/favicon.ico">
	<link rel="apple-touch-icon" href="images/favicons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">

    <!-- WEB FONT-FAMILY -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <!-- VENDOR FONT ICONS CSS -->
    <link rel="stylesheet" href="fonticons/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="fonticons/et-line/et-line-font.css">
    <link rel="stylesheet" href="fonticons/material-webfont/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="fonticons/pixeden/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="fonticons/simplelineicons/css/simple-line-icons.css">

    <!-- COMMON VENDOR CSS -->
    <link rel="stylesheet" href="vendor/animate-css/animate.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/sweetalert/sweetalert2.min.css">
    <link rel="stylesheet" href="vendor/jarallax/jarallax.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">

    <!-- PAGE SPECIFIC VENDOR CSS -->

    <!-- TEMPLATE COMMON CSS -->
    <link rel="stylesheet" href="css/ckav-main.css">
    <link rel="stylesheet" href="css/ckav-elements.css">
    <link rel="stylesheet" href="css/ckav-helper.css">
    <link rel="stylesheet" href="css/ckav-responsive.css">

    <!-- DEMO SPECIFIC TEMPLATE CSS -->

    <!-- TEMPLATE THEME CSS -->

    <!-- TEMPLATE USER CUSTOM CSS -->
    <link rel="stylesheet" href="css/template-custom.css">

  <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono|Inconsolata" rel="stylesheet">
  <link href="https://cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css" rel="stylesheet">

      <!-- META KEYWORDS AND DESCRIPTION -->
    <meta name="keywords" content="HTML5 Template, one page template, leanding page, themeforest template, ckavart, ckav, template, multipurpose template" />
    <meta name="description" content="Brom - HTML Creative Page">
    <meta name="author" content="CKav">

    <!-- META VIEW PORT -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- FAVICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="img/admin/favicon.ico">
	<link rel="apple-touch-icon" href="images/favicons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">

    <!-- WEB FONT-FAMILY -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <!-- VENDOR FONT ICONS CSS -->
    <link rel="stylesheet" href="fonticons/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="fonticons/et-line/et-line-font.css">
    <link rel="stylesheet" href="fonticons/material-webfont/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="fonticons/pixeden/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="fonticons/simplelineicons/css/simple-line-icons.css">

    <!-- COMMON VENDOR CSS -->
    <link rel="stylesheet" href="vendor/animate-css/animate.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/sweetalert/sweetalert2.min.css">
    <link rel="stylesheet" href="vendor/jarallax/jarallax.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">

    <!-- PAGE SPECIFIC VENDOR CSS -->

    <!-- TEMPLATE COMMON CSS -->
    <link rel="stylesheet" href="css/ckav-main.css">
    <link rel="stylesheet" href="css/ckav-elements.css">
    <link rel="stylesheet" href="css/ckav-helper.css">
    <link rel="stylesheet" href="css/ckav-responsive.css">

    <!-- DEMO SPECIFIC TEMPLATE CSS -->

    <!-- TEMPLATE THEME CSS -->

    <!-- TEMPLATE USER CUSTOM CSS -->
    <link rel="stylesheet" href="css/template-custom.css">

    <title>VISTAPBJ  | Petunjuk Penggunaan </title>
    <style>
    .joinBtn {
        width: 15em;
        height: 5ex;
        background-color: rgb(16, 168, 250);
        border: 2px solid rgb(0, 0, 0);
        border-radius: 10px;
        font-weight: bold;
        color: black;
        cursor: pointer;
    }
    </style>
</head>

    <body class="ckav-body tooltip-light">

        <!--
        ************************************************************
        * PAGE LOADER
        *************************************************************
        -->
        <div id="loader">
            <div class="load-three-bounce">
                <div class="load-child bounce1"></div>
                <div class="load-child bounce2"></div>
                <div class="load-child bounce3"></div>
            </div>
        </div>
        <!-- ************** END : PAGE LOADER **************  -->
    
    
        <div class="ckav-body">

    <!-- ************** END : NAVIGATION **************  -->

    <!-- Mobile menu -->
  <div class="mobile-menu d-lg-none">
    <div class="container">
      <div class="mobile-menu__close">
        <span><i class="mdi mdi-close" aria-hidden="true"></i></span>
      </div>
      <nav class="mobile-menu__wrapper">
        <ul>
          <li><a href="#hello">Hello</a></li>
          <li><a href="#resume">Resume</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#testimonials">testimonials</a></li>
          <li><a href="#blog">blog</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>

<!-- Mobile menu -->



{{-- <!--Hello-->
  <section id="hello" class="container section">
    <div class="row">
      <div class="col-md-10">
        <h1 id="hello_header" class="section__title">Cara Penggunaan</h1>
        <h5 style="color:black">
          Berikut adalah cara penggunaan Aplikasi Verifikasi Informasi Sertifikat Keterampilan, Keahlian & Sisa Kemampuan Paket Perusahaan Pengadaan Barang Jasa (VISTAPBJ) dalam bentuk PDF. Anda dapat mendownloadnya dengan cara klik tombol
        </h5></br>
        <a href="{{route('downloaduserguide')}}" class="section_btn site-btn">Download Cara Penggunaan</a>
      </div>
    </div>
  </section>
<!--Hello-->

<hr> --}}

<!--Resume-->
<br>
<br>
<br>
<br>

  <section id="resume" class="container section">
    <div class="row">
      <div class="col-md-10">
        <h1 id="resume_header" class="section__title">Video Cara Penggunaan</h1>
        <h5 style="color:black">
          Berikut adalah cara penggunaan Aplikasi Verifikasi Informasi Sertifikat Keterampilan, Keahlian & Sisa Kemampuan Paket Perusahaan Pengadaan Barang Jasa (VISTAPBJ) dalam bentuk Video. Anda dapat memainkan video dengan cara klik play
        </h5>
      </div>
    </div>
    <div id="video-player"> 
    <video width="600" height="350" controls>   
    <source src="{{URL('assets/videoplayback.mp4')}}" type="video/mp4">   
    </video>  
  </div> 
  
  <hr>

  <!--Hello-->
  <section id="hello" class="container section">
    <div class="row">
      <div class="col-md-10">
        <h1 id="hello_header" class="section__title">Cara Penggunaan</h1>
        <h5 style="color:black">
          Berikut adalah cara penggunaan Aplikasi Verifikasi Informasi Sertifikat Keterampilan, Keahlian & Sisa Kemampuan Paket Perusahaan Pengadaan Barang Jasa (VISTAPBJ) dalam bentuk PDF. Anda dapat mendownloadnya dengan cara klik tombol
        </h5>
        <button class="joinBtn"><a href="{{route('downloaduserguide')}}" class="section_btn site-btn"><p style="color:black">Download Cara Penggunaan</p></a></button>
      </div>
    </div>
  </section>
<!--Hello-->

  


    <!-- <div class="row">
      <div class="col-md-8 section__resume resume-list">
        <h3 class="resume-list_title">education</h3>
        <div class="resume-list__block">
          <p class="resume-list__block-title">University of Minnesota Twin Cities </p>
          <p class="resume-list__block-date">2006 - 2010</p>
          <p>
            Bachelor Computer Engineering Lorem
          </p>
        </div>
        <div class="resume-list__block">
          <p class="resume-list__block-title">School of Informational technologies</p>
          <p class="resume-list__block-date">2004 - 2005</p>
          <p>
            Awesome student, lorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed do eius-
            mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
          </p>
        </div>
        <div class="resume-list__block">
          <p class="resume-list__block-title">Lorem Ipsum School</p>
          <p class="resume-list__block-date">2003 - 2006</p>
          <p>
            Student, Lorem ipsum dolor sit amet, consecte tur adipisicing elit, sed do eiusmod tempor
            incididunt ut
          </p>
        </div>
      </div>
    </div> -->
    
<!-- Portfolio Modal -->
  <div class="modal fade portfolio-modal" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body col-md-11 col-lg-9 ml-auto mr-auto">
        <p class="portfolio-modal__title">Mobile and desktop app for London hostel store</p>
        <img class="portfolio-modal__img" src="assets/userguide/img/img_project_1_mono.png" alt="modal_img">
        <p class="portfolio-modal__description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utlabore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcolaboris nisi ut aliquip ex
          ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
          anim id est laborum. Sed ut perspiciatis undeomnis iste natus error sit voluptatem accusantium doloremque
          laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
          dicta sunt explicabo.Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
          conse.
        </p>
        <div class="portfolio-modal__link">
          <a href="">www.superapp.com</a>
        </div>
        <div  class="portfolio-modal__stack">
          <p class="portfolio-modal__stack-title">Using stack:</p>
          <ul class="tags">
            <li>html5</li>
            <li>css3</li>
            <li>JavaScript</li>
            <li>bower</li>
            <li>grunt</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
 <!--
        ************************************************************
        * NAVIGATION
        *************************************************************
        -->
        <div class="navigation-section" data-linear-gradient="rgba(0,0,0, 0)|rgba(0,0,0, 0.8)">
          <div class="container">
              <ul class="navigation-ul row gt0 align-items-center">
                  <li class="navigation-li col">
                      <a class="navigation-a" data-popup="#about" href="{{route('userguide')}}">
                          <span class="icon"><i class="icon-book-open"></i></span>
                          <span class="text">Cara Penggunaan</span>
                          <span class="line"></span>
                      </a>
                  </li>

                  <li class="navigation-li col">
                      <a class="navigation-a" data-popup="#services" href="{{route('datadashboardpaket')}}">
                          <span class="icon"><i class="icon-settings"></i></span>
                          <span class="text">Data Pengadaan</span>
                          <span class="line"></span>
                      </a>
                  </li>

                  <li class="navigation-li col">
                      <a class="navigation-a" href="{{route('register')}}">
                          <span class="icon"><i class="icon-people"></i></span>
                          <span class="text">Pendaftaran</span>
                          <span class="line"></span>
                      </a>
                  </li>

                  <li class="navigation-li col">
                      <a class="navigation-a" href="{{route('login')}}">
                          <span class="icon"><i class="icon-login"></i></span>
                          <span class="text">Login</span>
                          <span class="line"></span>
                      </a>
                  </li>

                  <li class="navigation-li col">
                      <a class="navigation-a" data-popup="#gallery" href="#">
                          <span class="icon"><i class="icon-camera"></i></span>    
                          <span class="text">Gallery</span> 
                          <span class="line"></span>
                      </a>
                  </li>

              </ul>
          </div>
      </div>
      <!-- ************** END : NAVIGATION **************  -->

      <!--
      ************************************************************
      * GALLERY SECTION
      *************************************************************
      -->
      <div id="gallery" class="popup-section gallery-section flex-cc">
          <div class="inner-wrapper" data-ckav-smd="align-center">

               <!-- CLOSE BUTTON -->
               <div class="popup-close button button-icon color-button-dark solid color-hov-button-dark">
                  <i class="pe-7s-close"></i>
              </div>

              <!-- POPUP HEADER -->
              <div class="header-area typo-light">
                  <h2 class="heading-section medium bold-600 margin-b-0">Galeri Pengembangan</h2>
              </div>

              <!-- POPUP CONTENT -->
              <div class="content-area">

                  <div class="portfolio-widget grid-portfolio portfolio-row grid-03" data-zoom-gallery="yes" data-ckav-md="grid-02" data-ckav-sm="grid-01">
                      <div class="portfolio-col">
                          <figure class="hover-box hover-box-01">

                              <!-- OVERLAY -->
                              <div class="overlay flex-bl typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                  <div class="info-text text-center">
                                      <a href="images/grid-portfolio-01.jpg" class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-size-fullscreen"></i></a>
                                      <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30">Gambar 1</h3>
                                      <p class="mr-0 fs12 op-08"></p>
                                  </div>
                              </div>

                              <!-- IMAGE -->
                              <img src="images/grid-portfolio-01.jpg" alt="portfolio image">

                          </figure>
                      </div>

                      <div class="portfolio-col">
                          <figure class="hover-box hover-box-01">

                              <!-- OVERLAY -->
                              <div class="overlay flex-bl typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                  <div class="info-text text-center">
                                      <a href="images/grid-portfolio-02.jpg" class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-size-fullscreen"></i></a>
                                      <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30">Gambar 2</h3>
                                      <p class="mr-0 fs12 op-08"></p>
                                  </div>
                              </div>

                              <!-- IMAGE -->
                              <img src="images/grid-portfolio-02.jpg" alt="portfolio image">

                          </figure>
                      </div>

                      <div class="portfolio-col">
                          <figure class="hover-box hover-box-01">

                              <!-- OVERLAY -->
                              <div class="overlay flex-bl typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                  <div class="info-text text-center">
                                      <a href="images/grid-portfolio-03.jpg" class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-size-fullscreen"></i></a>
                                      <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30">Gambar 3</h3>
                                      <p class="mr-0 fs12 op-08"></p>
                                  </div>
                              </div>

                              <!-- IMAGE -->
                              <img src="images/grid-portfolio-03.jpg" alt="portfolio image">

                          </figure>
                      </div>

                      <div class="portfolio-col">
                          <figure class="hover-box hover-box-01">

                              <!-- OVERLAY -->
                              <div class="overlay flex-bl typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                  <div class="info-text text-center">
                                      <a href="images/grid-portfolio-04.jpg" class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-size-fullscreen"></i></a>
                                      <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30">Gambar 4</h3>
                                      <p class="mr-0 fs12 op-08"></p>
                                  </div>
                              </div>

                              <!-- IMAGE -->
                              <img src="images/grid-portfolio-04.jpg" alt="portfolio image">

                          </figure>
                      </div>

                      <div class="portfolio-col">
                          <figure class="hover-box hover-box-01">

                              <!-- OVERLAY -->
                              <div class="overlay flex-bl typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                  <div class="info-text text-center">
                                      <a href="images/grid-portfolio-05.jpg" class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-size-fullscreen"></i></a>
                                      <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30">Gambar 5</h3>
                                      <p class="mr-0 fs12 op-08"></p>
                                  </div>
                              </div>

                              <!-- IMAGE -->
                              <img src="images/grid-portfolio-05.jpg" alt="portfolio image">

                          </figure>
                      </div>

                      <div class="portfolio-col">
                          <figure class="hover-box hover-box-01">

                              <!-- OVERLAY -->
                              <div class="overlay flex-bl typo-light" data-linear-gradient="rgba(31,34,41,0.5)|rgba(31,34,41,1)">
                                  <div class="info-text text-center">
                                      <a href="images/grid-portfolio-06.jpg" class="zoom-img button button-icon radius-full margin-lr-5 color-button-default solid"><i class="icon-size-fullscreen"></i></a>
                                      <h3 class="heading-content tiny bold-600 margin-b-5 margin-t-30">Gambar 6</h3>
                                      <p class="mr-0 fs12 op-08"></p>
                                  </div>
                              </div>

                              <!-- IMAGE -->
                              <img src="images/grid-portfolio-06.jpg" alt="portfolio image">

                          </figure>
                      </div>

                  </div>
              </div>

          </div>
      </div>
      <!-- ************** END : GALLERY SECTION **************  -->

  </div>
    </div>


<script src="vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="vendor/jquery/jquery-migrate-3.0.0.min.js"></script>
<script src="vendor/popper/umd/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="vendor/sweetalert/sweetalert2.min.js"></script>
<script src="vendor/jarallax/jarallax.min.js"></script>
<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="vendor/swiper/js/swiper.min.js"></script>
<script src="vendor/jQuery-viewport-checker/jquery.viewportchecker.min.js"></script>
<script src="vendor/enquire/enquire.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="vendor/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<script src="vendor/isotope/packery-mode.pkgd.min.js"></script>

<!-- PAGE SPECIFIC VENDOR SCRIPTS -->
<script src="vendor/particle-animation/particles.min.js"></script>
<script src="vendor/particle-animation/partical-animation.js"></script>

<!-- TEMPLATE COMMON SCRIPTS -->
<script src="js/ckav-main.js"></script>

<script src="assets/userguide/js/jquery-2.2.4.min.js"></script>
<script src="assets/userguide/js/popper.min.js"></script>
<script src="assets/userguide/js/bootstrap.min.js"></script>
<script src="assets/userguide/js/menu.js"></script>
<script src="assets/userguide/js/jquery.waypoints.js"></script>
<script src="assets/userguide/js/progress-list.js"></script>
<script src="assets/userguide/js/section.js"></script>
<script src="assets/userguide/js/portfolio-filter.js"></script>
<script src="assets/userguide/js/slider-carousel.js"></script>
<script src="assets/userguide/js/mobile-menu.js"></script>
<script src="assets/userguide/js/contacts.js"></script>
<script src="assets/userguide/js/mbclicker.min.js"></script>
<script src="assets/userguide/js/site-btn.js"></script>
<script src="assets/userguide/js/style-switcher.js"></script>



</section>