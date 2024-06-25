<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Contact</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{asset('assets')}}/images/rajawali.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset('assets')}}/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('assets')}}/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset('assets')}}/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('assets')}}/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset('assets')}}/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="{{asset('assets')}}/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="{{asset('assets')}}/images/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li ><a href="/">Home</a>
									<!-- <ul class="sub-menu">
										<li><a href="index.html">Static Home</a></li>
										<li><a href="index_2.html">Slider Home</a></li>
									</ul> -->
								</li>
								<li ><a href="/about">About</a></li>
								<!-- <li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="404.html">404 page</a></li>
										<li><a href="about.html">About</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Check Out</a></li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="news.html">News</a></li>
										<li><a href="shop.html">Shop</a></li>
									</ul>
								</li> -->
								<li ><a href="/product">Product</a>
									<!-- <ul class="sub-menu">
										<li><a href="product">Product</a></li>
										<li><a href="/deskripsi">Deskripsi</a></li>
									</ul> -->
								</li>
								<li class="current-list-item"><a href="/contact">Contact</a></li>
								<!-- <li><a href="shop.html">Shop</a>
									<ul class="sub-menu">
										<li><a href="shop.html">Shop</a></li>
										<li><a href="checkout.html">Check Out</a></li>
										<li><a href="single-product.html">Single Product</a></li>
										<li><a href="cart.html">Cart</a></li>
									</ul>
								</li> -->
								<li>
									<!-- <div class="header-icons">
										<a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div> -->
								</li>
							</ul>
						</nav>
						<!-- <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a> -->
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Ada Pertanyaan?</p>
						<h1>Kontak Kami</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Apakah Anda punya pertanyaan?</h2>
						<p>Jika anda kurang paham atau ada pertanyaan langsung saja tulis pesan anda di bawah ini!</p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
							<p>
								<input type="text" placeholder="Name" name="name" id="name">
								<input type="email" placeholder="Email" name="email" id="email">
							</p>
							<p>
								<input type="tel" placeholder="Phone" name="phone" id="phone">
								<input type="text" placeholder="Subject" name="subject" id="subject">
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							<p><input type="submit" value="Submit"></p>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Alamat Toko</h4>
							<p>GreenCrop <br> Ds.Randu Agung <br>Kec.Sumber Jambe <br> Kab.Jember</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Jam Belanja</h4>
							<p>Senin - Sabtu 07:00 - 21:00 <br> Minggu 10:00 - 19:00 </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Kontak</h4>
							<p>Phone: <a href="tel:+6285735998491" style="color: black;">+6285735998491</a> <br> 
							Email: <a href="mailto:gandiasdarma@gmail.com" style="color: black;">greencrop.com</a></p>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

	<!-- find our location -->
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> <i class="fas fa-map-marker-alt"></i> Temukan Lokasi Kami</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end find our location -->

	<!-- google map section -->
	<div class="embed-responsive embed-responsive-21by9">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63201.400986669934!2d113.80718022167973!3d-8.092552999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6b90286c989f3%3A0x6deea4a9c034a1df!2sTOKO%20PERTANIAN%20RAJAWALI!5e0!3m2!1sid!2sid!4v1699341541423!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
	</div>
	<!-- end google map section -->


	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">Tentang Kami</h2>
						<p>GroeenCrop adalah aplikasi inovatif yang dirancang khusus untuk para petani dan pemangku kepentingan di sektor pertanian.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Berhubungan</h2>
						<ul>
							<li>Desa.RanduAgung Kec.SumberJambe Kab.Jember</li>
							<li>rajawali.com</li>
							<li><a href="tel:+6285735998491">+6285735998491</a></li>

						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Halaman</h2>
						<ul>
							<li><a href="/home">Home</a></li>
							<li><a href="/about">About</a></li>
							<li><a href="/deskripsi">Deskripsi</a></li>
							<li><a href="/product">Product</a></li>
							<li><a href="/contact">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Berlangganan ke milis kami untuk mendapatkan pembaruan terkini.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<!-- <div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.<br>
						Distributed By - <a href="https://themewagon.com/">Themewagon</a>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="{{asset('assets')}}/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="{{asset('assets')}}/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="{{asset('assets')}}/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="{{asset('assets')}}/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="{{asset('assets')}}/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="{{asset('assets')}}/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="{{asset('assets')}}/js/sticker.js"></script>
	<!-- form validation js -->
	<script src="{{asset('assets')}}/js/form-validate.js"></script>
	<!-- main js -->
	<script src="{{asset('assets')}}/js/main.js"></script>
	
</body>
</html>