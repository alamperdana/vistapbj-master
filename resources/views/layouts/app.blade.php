<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


<style>  
body { 
  background-image: url("images/bg-02.jpg");
  background-color: lightgray;
  }
</style>  

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <div class="ckav-body">

        <!--
        ************************************************************
        * HEADER
        *************************************************************
        -->
        <header class="ckav-header">
            <div class="container-fluid padding-0">

                <div class="row align-items-center">

                    <!-- LOGO -->
                    <div class="col">
                        <a href="{{url('/')}}" class="logo-wrapper margin-l-50 margin-t-50" data-ckav-smd="margin-t-13 margin-l-13 margin-b-13 width-px-75">
                            <img src="images/logo.png" alt="ckav">
                        </a>
                    </div>
                    <!-- SOCIAL LINKS -->
                    <div class="col flex-cr">

                        <!-- MENU ICON -->
                        <div class="menu-icon-wrp display-none" data-ckav-smd="display-flex margin-r-10">
                            <div class="menu-icon">
                                <div class="bar"></div>
                            </div>
                        </div>

                        <!-- SOCIAL ICONS -->
                        <div class="social-section margin-r-30 margin-t-30" data-ckav-smd="display-none">
                            <div class="inner-wrapper">
                                <a href="https://www.youtube.com/channel/UCGO53-mC4IK3W_iMvZh2juw" class="button button-icon radius-full margin-r-10 color-button-white border-glass"><i class="fab fa-youtube" style="color:black"></i></a>
                                <a href="https://instagram.com/bagianpbjap_jambikota?igshid=YmMyMTA2M2Y=" class="button button-icon radius-full margin-r-10 color-button-white border-glass"><i class="fab fa-instagram" style="color:black"></i></a>
                                <a href="tel:0741444914" class="button button-icon radius-full margin-r-10 color-button-white border-glass"><i class="fab fa-buromobelexperte" style="color:black"></i></a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </header>
</head>

<body style="background-image:(http://i54.tinypic.com/4zuxif.jpg)">


    <main class="py-4">
        @yield('content')
        </main>
    </div>
</body>
</html>
