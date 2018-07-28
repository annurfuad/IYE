<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>IYE | Indonesian Young Enterpreneurship</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="assets/css/bootstrap1.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="assets/css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="assets/css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="assets/css/style1.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<?php
	// fungsi untuk menampilkan pesan
	// jika alert = "" (kosong)
	// tampilkan pesan "" (kosong)
	if (empty($_GET['alert'])) {
		echo "";
	}
	// jika alert = 1
	// tampilkan pesan Sukses "paket baru berhasil disimpan"
	elseif ($_GET['alert'] == 1) {
		echo "<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
					Registrasi baru berhasil, silahkan login.
					</div>";
	}
	// jika alert = 2
	// tampilkan pesan Sukses "Paket berhasil diubah"
	elseif ($_GET['alert'] == 2) {
		echo "<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<h4>  <i class='icon fa fa-check-circle'></i> Gagal!</h4>
					Registrasi baru gagal , Silahkan ulangi .
					</div>";
	}
	?>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('assets/img/background1.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="#">
							<img class="logo" src="assets/img/logoiye.png" alt="logo">
							<img class="logo-alt" src="assets/img/logo-alt.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#team">Team</a></li>

				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">We Are Indonesian Young Enterpreneur</h1>
							<p class="white-text">A platform for young people to learn entrepreneurship
							</p>

							 <a class="btn btn-primary btn-lg" href="#signup">Start Learning Now!</a></p> <a class="btn btn-primary btn-lg" href="login.php">Login</a></p>


						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Welcome to Website</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-cogs"></i>
						<h3>Learning</h3>
						<p></p>

					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-magic"></i>
						<h3>Partnership</h3>
						<p></p>

					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-mobile"></i>
						<h3>Investor</h3>
						<p></p>

					</div>
				</div>
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->


	<!-- Testimonial -->
	<div id="testimonial" class="section md-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('assets/img/background3.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Testimonial slider -->
				<div class="col-md-10 col-md-offset-1">
					<div id="testimonial-slider" class="owl-carousel owl-theme">

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="assets/img/alfi.jpeg" alt="">
								<h3 class="white-text">Alfi Ramdhani</h3>
								<span>Mahasiswa UHAMKA</span>
							</div>
							<p class="white-text">Molestie at elementum eu facilisis sed odio. Scelerisque in dictum non consectetur a erat. Aliquam id diam maecenas ultricies mi eget mauris.</p>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="assets/img/zein.jpeg" alt="">
								<h3 class="white-text">Rizky Zein Adam</h3>
								<span>Mahasiswa UHAMKA</span>
							</div>
							<p class="white-text">Molestie at elementum eu facilisis sed odio. Scelerisque in dictum non consectetur a erat. Aliquam id diam maecenas ultricies mi eget mauris.</p>
						</div>
						<!-- /testimonial -->

					</div>
				</div>
				<!-- /Testimonial slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Testimonial -->

	<!-- Team -->
	<div id="team" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Our Team</h2>
				</div>
				<!-- /Section header -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="assets/img/kolip.jpeg" alt="">
							<div class="overlay">

							</div>
						</div>
						<div class="team-content">
							<h3>Kholifa Muhasim</h3>
							<span>Vice Project Officer</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="assets/img/fuad.jpeg" alt="">
							<div class="overlay">

							</div>
						</div>
						<div class="team-content">
							<h3>Annur Fuad</h3>
							<span>Project Officer</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="assets/img/rizal.jpeg" alt="">
							<div class="overlay">

							</div>
						</div>
						<div class="team-content">
							<h3>Muhammad Rizal Fahmi</h3>
							<span>Vice Project Officer</span>
						</div>
					</div>
				</div>
				<!-- /team -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Team -->

	<!--Sign up Code -->

	<div id="signup" class="section md-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 animate-box">
						<h3 class="text-center">Let's get started!</h3>
						<p class="text-center">Fill out the form to become a part of us.&nbsp;All fields are mandatory unless indicated as optional.</p> <br>
	<!-- Registration Form Begins -->
	     <form action="register.php" method="post" id="register-form" autocomplete="off" enctype="multipart/form-data">

				<div class="row">
					<div class="col-md-6 form-group">
						<i class="fa fa-user"></i>&nbsp;&nbsp;Name
						<input type="text" name="nama_user" id="nama_user" class="form-control" placeholder="Enter your name" />
						<span class="help-block" id="error"></span>
					</div>


						<div class="col-md-6 form-group">
							<i class="fa fa-user"></i>&nbsp;&nbsp;Username
							<input type="text" name="username" id="username" class="form-control" placeholder="Enter your username" />
							<span class="help-block" id="error"></span>
						</div>
					</div>


				<div class="row">
					<div class="form-group col-md-6">
						<i class="fa fa-key"></i>&nbsp;&nbsp;Password
						<input type="password" name="password" id="password" class="form-control" placeholder="Enter your password (Must be at least 6 characters long)" />
						<span class="help-block" id="error"></span>
					</div>

					<div class="form-group col-md-6">
						<i class="fa fa-key"></i>&nbsp;&nbsp;Repeat Password
						<input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Repeat password" />
						<span class="help-block" id="error"></span>
					</div>
				</div>

	     <input type="hidden" name="hak_akses" id="hak_akses" value='user'/>

				<div class="row form-check form-group">
					<div class="col-md-12">
					<input class="form-check-input" name="agree" id="agree" type="checkbox" value="agree">
					&nbsp;&nbsp;I agree to the <a href="#">terms and conditions</a>.
					<span class="help-block" id="error"></span>
					</div>
				</div>


				<div class="form-group">
					<div class="text-center">
						<button type="submit" name="register" id="btn-signup" class="btn btn-primary">Register</button>
					</div>
				</div>
			</div>
		</div>

				<div id="errorDiv2"></div>

	</form>
</div>
</div>

</div>
</div>
<!--Sign up Code ends -->

	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.html"><img src="assets\img\logoiye.png" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2018. All Rights Reserved. Designed by <a href="#" target="_blank">IYE</a></p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap1.min.js"></script>
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>

</body>

</html>
