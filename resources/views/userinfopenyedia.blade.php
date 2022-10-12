<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Admin | Informasi Akun Pengguna</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/admin/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
        
    <link rel="stylesheet" href="{{url('css/admin/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/admin/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/admin/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('css/admin/owl.theme.css')}}">
    <link rel="stylesheet" href="{{url('css/admin/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/admin/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/admin/normalize.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/admin/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/admin/main.css')}}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/admin/educate-custon-icon.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/admin/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/admin/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/admin/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{url('css/admin/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/admin/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{url('css/admin/calendar/fullcalendar.print.min.css')}}">
     <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/admin/editor/select2.css')}}">
    <link rel="stylesheet" href="{{url('css/admin/editor/datetimepicker.css')}}">
    <link rel="stylesheet" href="{{url('css/admin/editor/bootstrap-editable.css')}}">
    <link rel="stylesheet" href="{{url('css/admin/editor/x-editor-style.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/admin/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{url('css/admin/data-table/bootstrap-editable.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
     <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('css/admin/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{url('js/admin/vendor/modernizr-283.min.js')}}"></script>

    <script src="{{url('js/jquery.dataTables.min.js')}}" type="text/javascript"></script>


    </head>
<body>

<style>
.heading:hover {
color: red;
}
.a{
    background-color: red;
}
</style>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="{{url('img/admin/logo/logovista.png')}}" alt="" /></a>
                <strong><a href="index.html"><img src="{{url('img/admin/logo/logokecil.png')}}" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="index.html">
								   <!--<span class="educate-icon educate-home icon-wrap"></span>-->

								   <span class="mini-click-non">Home</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <!-- <li><a title="Dashboard v.1" href="index.html"><span class="mini-sub-pro">Dashboard</span></a></li> -->
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false">
                                <!--<span class="educate-icon educate-library icon-wrap"></span>-->
                                <span class="mini-click-non">Info Paket  </span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Library" href="{{route('userpaketberjalan')}}"><span class="mini-sub-pro">Data Info Paket </span></a></li>
                                <li><a title="Add Library" href="{{route('dashboardpaket')}}"><span class="mini-sub-pro">Chart</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false">
                                <!--<span class="educate-icon educate-data-table icon-wrap"></span>-->
                                <span class="mini-click-non">Info Penyedia</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Data Table" href="{{route('userinfopenyedia')}}"><span class="mini-sub-pro">Data Info Penyedia</span></a></li>
                            </ul>
                        </li>    
                        <!--
                        <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Pages</span></a>
                            <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                                <li><a title="Login" href="login.html"><span class="mini-sub-pro">Login</span></a></li>
                                <li><a title="Register" href="register.html"><span class="mini-sub-pro">Register</span></a></li>
                        </ul>
                    -->
                </nav>
            </div>
        </nav>
    </div>
        <!-- Static Table End -->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2022. PBJAP</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- jquery
		============================================ -->
        <script src="{{url('js/admin/vendor/jquery-1.12.4.min.js')}}"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="{{url('js/admin/bootstrap.min.js')}}"></script>
        <!-- wow JS
            ============================================ -->
        <script src="{{url('js/admin/wow.min.js')}}"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="{{url('js/admin/jquery-price-slider.js')}}"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="{{url('js/admin/jquery.meanmenu.js')}}"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="{{url('js/admin/owl.carousel.min.js')}}"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="{{url('js/admin/jquery.sticky.js')}}"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="{{url('js/admin/jquery.scrollUp.min.js')}}"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="{{url('js/admin/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{url('js/admin/scrollbar/mCustomScrollbar-active.js')}}"></script>
        <!-- metisMenu JS
            ============================================ -->
        <script src="{{url('js/admin/metisMenu/metisMenu.min.js')}}"></script>
        <script src="{{url('js/admin/metisMenu/metisMenu-active.js')}}"></script>
        <!-- data table JS
            ============================================ -->
        <script src="{{url('js/admin/data-table/bootstrap-table.js')}}"></script>
        <script src="{{url('js/admin/data-table/tableExport.js')}}"></script>
        <script src="{{url('js/admin/data-table/data-table-active.js')}}"></script>
        <script src="{{url('js/admin/data-table/bootstrap-table-editable.js')}}"></script>
        <script src="{{url('js/admin/data-table/bootstrap-editable.js')}}"></script>
        <script src="{{url('js/admin/data-table/bootstrap-table-resizable.js')}}"></script>
        <script src="{{url('js/admin/data-table/colResizable-1.5.source.js')}}"></script>
        <script src="{{url('js/admin/data-table/bootstrap-table-export.js')}}"></script>
        <!--  editable JS
            ============================================ -->
        <script src="{{url('js/admin/editable/jquery.mockjax.js')}}"></script>
        <script src="{{url('js/admin/editable/mock-active.js')}}"></script>
        <script src="{{url('js/admin/editable/select2.js')}}"></script>
        <script src="{{url('js/admin/editable/moment.min.js')}}"></script>
        <script src="{{url('js/admin/editable/bootstrap-datetimepicker.js')}}"></script>
        <script src="{{url('js/admin/editable/bootstrap-editable.js')}}"></script>
        <script src="{{url('js/admin/editable/xediable-active.js')}}"></script>
        <!-- Chart JS
            ============================================ -->
        <script src="{{url('js/admin/chart/jquery.peity.min.js')}}"></script>
        <script src="{{url('js/admin/peity/peity-active.js')}}"></script>
        <!-- tab JS
            ============================================ -->
        <script src="{{url('js/admin/tab.js')}}"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="{{url('js/admin/plugins.js')}}"></script>
        <!-- main JS
            ============================================ -->
        <script src="{{url('js/admin/main.js')}}"></script>
        <!-- tawk chat JS
            ============================================ -->
        <!--<script src="{{url('js/admin/tawk-chat.js')}}"></script>-->
</body>

</html>