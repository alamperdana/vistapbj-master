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
    
    <!-- icon glykon pagination-->
    <link rel="stylesheet" href="{{url('assets/depan/plugins/bootstrap/css/bootstrap.css')}}">

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                            <a class="has-arrow" href="{{route('admin')}}">
								   <!--<span class="educate-icon educate-home icon-wrap"></span>-->
                                   <span class="mini-click-non"><i class="fa fa-address-card" aria-hidden="true"></i></i> Akun Pengguna</span>
								</a>
                            {{-- <ul class="submenu-angle" aria-expanded="true">
                                <!-- <li><a title="Dashboard v.1" href="index.html"><span class="mini-sub-pro">Dashboard</span></a></li> -->
                            </ul> --}}

                            <a class="has-arrow" href="{{route('caripenyedia')}}">
                                <!--<span class="educate-icon educate-home icon-wrap"></span>-->
                                <span class="mini-click-non"><i class="fa fa-search" aria-hidden="true"></i>  <i class="fa fa-file-text" aria-hidden="true"></i> Cari Penyedia</span>
                             </a>

                             <a class="has-arrow" href="{{route('cariskaskt')}}">
                                <!--<span class="educate-icon educate-home icon-wrap"></span>-->
                                <span class="mini-click-non"><i class="fa fa-search" aria-hidden="true"></i>  <i class="fa fa-file" aria-hidden="true"></i> Akun SKA/SKT</span>
                             </a>
                        </li>

                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false">
                                <!--<span class="educate-icon educate-library icon-wrap"></span>-->
                                <span class="mini-click-non"><i class="fa fa-file-text" aria-hidden="true"></i> Info Paket  </span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Add Library" href="{{route('tambahadminpaketberjalan')}}"><span class="mini-sub-pro"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data Info Paket Berjalan Manual</span></a></li>
                                <li><a title="All Library" href="{{route('adminpaketberjalan')}}"><span class="mini-sub-pro"><i class="fa fa-folder-open" aria-hidden="true"></i> Data Semua Info Paket </span></a></li>
                                <li><a title="Add Library" href="{{route('dashboardpaket')}}"><span class="mini-sub-pro"><i class="fa fa-pie-chart" aria-hidden="true"></i> Chart</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false">
                                <!--<span class="educate-icon educate-data-table icon-wrap"></span>-->
                                <span class="mini-click-non"><i class="fa fa-file" aria-hidden="true"></i>Info Penyedia</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Data Table" href="{{route('adminpenyedia')}}"><span class="mini-sub-pro"><i class="fa fa-users" aria-hidden="true"></i>Data Semua Info Penyedia</span></a></li>
                                <li><a title="Data Table" href="{{route('tambahadmininfopenyedia')}}"><span class="mini-sub-pro"><i class="fa fa-keyboard-o" aria-hidden="true"></i>Tambah Data Info Penyedia Manual</span></a></li>
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

    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/admin/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <!---<li class="nav-item"><a href="#" class="nav-link">About</a>
                                                </li>
                                                -->
                                                <!--
                                                <li class="nav-item dropdown res-dis-nn">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Project <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                    <div role="menu" class="dropdown-menu animated zoomIn">
                                                        <a href="#" class="dropdown-item">Documentation</a>
                                                        <a href="#" class="dropdown-item">Expert Backend</a>
                                                        <a href="#" class="dropdown-item">Expert FrontEnd</a>
                                                        <a href="#" class="dropdown-item">Contact Support</a>
                                                    </div>
                                                -->
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="img/admin/product/pro4.jpg" alt="" />
															<span class="admin-name">{{ Auth::user()->name }}</span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        {{-- //nambah dari sini --}}
                                                        <li>
                                                            <a href="{{ route('profil', Auth::user()->id) }}">Profil</a></li>
                                                        </li>  
                                                        <li><span class="edu-icon edu-home-admin author-log-ic"></span>
                                                            @guest
                                                            @if (Route::has('login'))
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                                </li>
                                                            @endif
                                
                                                            @if (Route::has('register'))
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                                </li>
                                                            @endif
                                                            @else

                                                            <li class="nav-item dropdown">

                                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                                       onclick="event.preventDefault();
                                                                                     document.getElementById('logout-form').submit();">
                                                                        {{ __('Logout') }}
                                                                    </a>
                                
                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                        @csrf
                                                                    </form>
                                                                </div>
                                                            </li>
                                                        @endguest</a>
                                                    </ul>
                                                </li>
                                            </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.html">Dashboard v.1</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Info Paket <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="library-assets.html">Data Info Paket 
                                                </li>
                                                <li><a href="add-library-assets.html">Tambah Data Info Paket Berjalan Manual</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="password-recovery.html">Password Recovery</a>
                                                </li>
                                            </ul>
                                        </li>
                                    -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                        <!-- PALING ATAS
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Data Table</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Tabel <span class="table-project-n">Paket</span> Penyedia</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    {{-- <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div> --}}

                                    <!--Pencarian -->
                                    <div id="toolbar">
                                        <p>Cari: </p>
                                        <form>
                                            @csrf
                                            <input type="text" name="cari" placeholder="Cari Penyedia" value="{{ request('cari') }}">
                                            <button type="submit">Cari</button>
                                        </form>
                                    </div>
                                    <!--Sampe Sini-->

                                    <div id="toolbar">
                                    @if(!$data->isEmpty())
                                    <table id="table-data" data-toggle="table" data-pagination="true">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Edit</th>
                                                <th>Hapus</th>
                                                <th>Nama </th>
                                                <th>NPWP </th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>Pengurus</th>
                                                <th>Keuangan</th>
                                                <th>Kapasitas</th>
                                                <th>Sarana Prasarana</th>
                                        </thead>
                                        <tbody>
                                            @php $no = 1 @endphp
                                            @foreach($data as $datas)
                                                <tr>
                                                    <td valign="top" class="text-center">{{$no++ . "."}}</td>
                                                    <td>
                                                        <button type="button" class="edit" value="{{$datas->id}}">Edit</button>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="hapus" value="{{$datas->id}}">Hapus</button>
                                                    </td>
                                                    <td valign="top" class="text-center">{{ $datas->nama_perusahaan }}</td>
                                                    <td valign="top" class="text-center">{{ $datas->npwp_perusahaan }}</td>
                                                    <td valign="top" class="text-center">{{ $datas->alamat_penyedia }}</td>
                                                    <td valign="top" class="text-center">{{ $datas->email_penyedia }}</td>
                                                    <td valign="top" class="text-center">{{ $datas->pengurus_penyedia }}</td>
                                                    <td valign="top" class="text-center">{{ $datas->keuangan_penyedia }}</td>
                                                    <td valign="top" class="text-center">{{ $datas->kapasitas_penyedia }}</td>
                                                    <td valign="top" class="text-center">{{ $datas->saranaprasarana_penyedia }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @else
                                    <p class="text-center fs-4">Tidak ada Data yang Anda cari.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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