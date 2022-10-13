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
    <title>VISTAPBJ  | Daftar Akun </title>
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

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

      <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3" style="color:blue">Daftar</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class=""></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class=""></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class=""></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0"></p>
          </div>

          






    
            <!--Input Mulai dari Sini-->
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                     @csrf

            <!--Contoh Register Tampilan Lama-->
            <!-- <div class="row mb-3">
                <label for="nip" class="col-md-4 col-form-label text-md-end">{{ __('NIP') }}</label>

                <div class="col-md-6">
                <input id="nip" type="number" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" required autocomplete="nip" autofocus>
                    @error('nip')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div> -->

            <!-- Nama input -->
            <!-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label> -->
            <div class="form-outline mb-3">
                <input placeholder="Nama Anda" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>   
 
            <!-- NIP input -->
            <!-- <label for="nip" class="col-md-4 col-form-label text-md-end">{{ __('NIP') }}</label> -->
            <div class="form-outline mb-3">
                <input placeholder="NIP Anda" id="nip" type="number" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" required autocomplete="nip" autofocus>
                @error('nip')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>    

            <!-- OPD input -->
            <!-- <label for="opd" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label> -->
            <div class="form-outline mb-3">
                <input placeholder="OPD Anda" id="opd" type="text" class="form-control @error('opd') is-invalid @enderror" name="opd" value="{{ old('opd') }}" required autocomplete="opd" autofocus>
                @error('opd')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>    

            <!-- Telepon input -->
            <!-- <label for="telepon" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label> -->
            <div class="form-outline mb-3">
                <input placeholder="Telepon Anda" id="telepon" type="number" class="form-control @error('telepon') is-invalid @enderror" name="telepon" value="{{ old('telepon') }}" required autocomplete="telepon" autofocus>
                @error('telepon')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>   

            <!-- Email input -->
            <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label> -->
            <div class="form-outline mb-3">
                <input placeholder="Email Anda" id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>   
            
            <!-- Password input -->
            <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label> -->
            <div class="form-outline mb-3">
                <input placeholder="Password Anda" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                @error('password')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>  
           
            <!-- Konfirmasi password input -->
            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Konfirmasi Kata Sandi') }}</label> -->
            <div class="form-outline mb-3">
            <input placeholder="Konfirmasi password Anda" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div> 
            
            <!-- Input file-->
            <label for="avatar" class="col-md-4 col-form-label text-md-end"></label>
            <div class="form-outline mb-3">
                <input placeholder="File Anda" id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" 
                name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar" autofocus>
                <!-- @error('avatar')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror -->
                @if ($errors->has('avatar'))
                    <span class="text-danger">
                        {{ $errors->first('avatar') }}
                    </span>
                @endif
            </div>  

            <!--Input Sampai Sini-->

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <!--<a href="#!" class="text-body">Forgot password?</a>-->
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
          <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
          </button>
            <p class="small fw-bold mt-2 pt-1 mb-0" style="color:white">Sudah Punya Akun ? <a href="{{route('login')}}"
                class="link-danger">Login</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
  {{-- <div
  class="d-flex justify-content-center p-2 py-1 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-100">
      Copyright © 2022. PBJAP.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div> --}}


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

</section>