<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#061948">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#061948">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#061948">
		<title>Vista PBJ</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="assets/halamandepan/images/fav-icon/icon.png">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="assets/halamandepan/css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="assets/halamandepan/css/responsive.css">

		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->	
	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>

			

			<!-- 
			=============================================
				Theme Header Two
			============================================== 
			-->
			<header class="header-two">
				<div class="top-header">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-8 col-12">
								<ul class="left-widget">
									<li>
										<div id="polyglotLanguageSwitcher">
											<form action="#">
												<select id="polyglot-language-options">
													<option id="en" value="en" selected>English</option>
													<!--<option id="" value="fr">Bahasa Indonesia</option>-->
												</select>
											</form>
										</div> <!-- End #polyglotLanguageSwitcher -->
									</li>
								</ul>
							</div>
							<div class="col-md-6 col-sm-4 col-12">
								<ul class="social-icon">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="bg-wrapper clearfix">
							<div class="logo float-left"><a href="index.html"><img src="assets/halamandepan/images/logo/logo.png" alt=""></a></div>
							<!-- ============== Menu Warpper ================ -->
					   		<div class="menu-wrapper float-right">
					   			<nav id="mega-menu-holder" class="clearfix">
								   <ul class="clearfix">
								   		<li><a href="#">Informasi Paket</a></li>
									    <li class="active"><a href="#">Pengguna</a>
									    	<ul class="dropdown">
											<li>
												<a href="#">Petunjuk Pengguna Akun</a></li>	
									        	<li><a href="{{route('register')}}">Pendaftaran Akun</a></li>
									        	<li><a href="{{route('login')}}">Login Akun</a></li>
									      </ul>
									    </li>
										<!--
									    <li><a href="#">PAGES</a>
									    	<ul class="dropdown">
									    		<li><a href="about.html">About us</a></li>
									    		<li><a href="team.html">Our team</a></li>
									    		<li><a href="faq.html">Faq's</a></li>
									    		<li><a href="404.html">404</a></li>
									    		<li><a href="shop.html">Shop</a></li>
									    		<li><a href="shop-details.html">Shop details</a></li>
									            <li><a href="#">Third Level menu</a>
									    			<ul>
									    				<li><a href="#">Demo one</a></li>
									    				<li><a href="#">Demo two</a></li>
									    			</ul>
									    		</li>
									       </ul>
									    </li>
									    <li><a href="#">Service</a>
									    	<ul class="dropdown">
									        	<li><a href="service.html">Service Version one</a></li>
									        	<li><a href="service-v2.html">Service version two</a></li>
									        	<li><a href="service-details.html">Service Details</a></li>
									       </ul>
									    </li>
									    <li><a href="#">Portfolio</a>
									    	<ul class="dropdown">
									        	<li><a href="project.html">project</a></li>
									        	<li><a href="project-details.html">Project details</a></li>
									       </ul>
									    </li>
									    <li><a href="#">Blog</a>
									    	<ul class="dropdown">
									        	<li><a href="blog.html">Blog List</a></li>
									        	<li><a href="blog-grid.html">Blog Grid</a></li>
									        	<li><a href="blog-details.html">Blog details</a></li>
									       </ul>
									    </li>
									    <li><a href="contact.html">contact</a></li>
								   </ul>
								</nav> <!-- /#mega-menu-holder -->
					   		</div> <!-- /.menu-wrapper -->
					   		<!--<div class="right-widget float-right">
					   			<ul>
					   				<li class="cart-icon">
					   					<a href="#"><i class="flaticon-tool"></i> <span>2</span></a>
					   				</li>
					   				<li class="search-option">
					   					<div class="dropdown">
					   						<button type="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i></button>
											<form action="#" class="dropdown-menu">
												<input type="text" Placeholder="Enter Your Search">
												<button><i class="fa fa-search"></i></button>
											</form>
					   					</div>
					   				</li>
					   			</ul>
					   		</div>
						--> <!-- /.right-widget -->
						</div> <!-- /.bg-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.theme-menu-wrapper -->
			</header> <!-- /.header-two -->

			
			<!-- 
			=============================================
				Theme Main Banner
			============================================== 
			-->
			<div id="theme-main-banner" class="banner-one">
				<div data-src="assets/halamandepan/images/home/slide-5.jpg">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated">The government they survive artical of fortune</p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">HIGH-QUALITY MARKET <br> EXPERIENCES</h1>
							<a href="about.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">ABOUT US</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
				<div data-src="assets/halamandepan/images/home/slide-3.jpg">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated">The government they survive artical of fortune</p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">HIGH-QUALITY MARKET <br> EXPERIENCES</h1>
							<a href="about.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">ABOUT US</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
				<div data-src="assets/halamandepan/images/home/slide-1.jpg">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated">The government they survive artical of fortune</p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">HIGH-QUALITY MARKET <br> EXPERIENCES</h1>
							<a href="about.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">ABOUT US</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
			</div> <!-- /#theme-main-banner -->
			
			<!-- 
			=============================================
				Our Solution
			============================================== 
			-->
			
		
			<!--
			=====================================================
				Google Map
			=====================================================
			-->
			<!-- Google Map -->
			<div class="map-canvas"></div>
			

			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer class="theme-footer-two">
				<div class="top-footer">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-sm-6 col-12 logo-widget">
								<div class="logo"><a href="index.html"><img src="assets/halamandepan/images/logo/logo2.png" alt=""></a></div>
								<p>Copyright &copy; 2022. PBJAP</p>
								
								<!--<ul class="social-icon">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							-->
							</div> <!-- /.logo-widget -->
							<!--
							<div class="col-lg-2 col-sm-6 col-12 footer-list">
								<h6 class="title">EXPLORE</h6>
								<ul>
									<li><a href="about.html">About us</a></li>
									<li><a href="service.html">Our Solutions</a></li>
									<li><a href="project.html">Case Studies</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="contact.html">Contact us</a></li>
								</ul>
							-->
							</div> <!-- /.footer-list -->
							<!--
							<div class="col-lg-3 col-sm-6 col-12 footer-gallery">
								<h6 class="title">Gallery</h6>
								<div class="wrapper">
									<div class="row">
										<div class="col-4">
											<a href="images/portfolio/7.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="images/portfolio/7.jpg" alt=""></a>
										</div>
										<div class="col-4">
											<a href="images/portfolio/8.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="images/portfolio/8.jpg" alt=""></a>
										</div>
										<div class="col-4">
											<a href="images/portfolio/9.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="images/portfolio/9.jpg" alt=""></a>
										</div>
										<div class="col-4">
											<a href="images/portfolio/10.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="images/portfolio/10.jpg" alt=""></a>
										</div>
										<div class="col-4">
											<a href="images/portfolio/11.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="images/portfolio/11.jpg" alt=""></a>
										</div>
										<div class="col-4">
											<a href="images/portfolio/12.jpg" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"><img src="images/portfolio/12.jpg" alt=""></a>
										</div>
									</div>
								</div>
							-->
							</div> <!-- /.footer-gallery -->
							
							<!--
							<div class="col-lg-3 col-sm-6 col-12 contact-widget">
								<h6 class="title">CONTACT</h6>
								<ul>
									<li>
										<i class="flaticon-direction-signs"></i>
										23A, Queenstown St, Log Vegas, United States.
									</li>
									<li>
										<i class="flaticon-multimedia-1"></i>
										<a href="#">mailhere@support.com</a>
									</li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<a href="#">(+2) 345  9808  000</a>
									</li>
								</ul>
							</div> <!-- /.contact-widget -->
						
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-footer -->
				<div class="bottom-footer">
					<!-- <div class="container">
						<p>&copy; Copyrights 2022. Vista PBJ.</p>
					</div> -->
				</div> <!-- /.bottom-footer -->
			</footer> <!-- /.theme-footer-two -->
			

	        

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="assets/halamandepan/vendor/jquery.2.2.3.min.js"></script>
		<!-- Popper js -->
		<script src="assets/halamandepan/vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="assets/halamandepan/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- Camera Slider -->
		<script src='assets/halamandepan/vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
	    <script src='assets/halamandepan/vendor/Camera-master/scripts/jquery.easing.1.3.js'></script> 
	    <script src='assets/halamandepan/vendor/Camera-master/scripts/camera.min.js'></script>
	    <!-- menu  -->
		<script src="assets/halamandepan/vendor/menu/src/js/jquery.slimmenu.js"></script>
		<!-- WOW js -->
		<script src="assets/halamandepan/vendor/WOW-master/dist/wow.min.js"></script>
		<!-- owl.carousel -->
		<script src="assets/halamandepan/vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- js count to -->
		<script src="assets/halamandepan/vendor/jquery.appear.js"></script>
		<script src="assets/halamandepan/vendor/jquery.countTo.js"></script>
		<!-- Fancybox -->
		<script src="assets/halamandepan/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
		<!-- Language Stitcher -->
		<script src="assets/halamandepan/vendor/language-switcher/jquery.polyglot.language.switcher.js"></script>
		<!-- Google map js -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjQLCCbRKFhsr8BY78g2PQ0_bTyrm_YXU"></script>
		<script src="assets/halamandepan/vendor/sanzzy-map/dist/snazzy-info-window.min.js"></script>

		<!-- Theme js -->
		<script src="assets/halamandepan/js/theme.js"></script>
		<script src="assets/halamandepan/js/map-script.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>