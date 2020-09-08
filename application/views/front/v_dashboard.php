<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets2/css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets2/css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets2/css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets2/css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets2/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets2/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('<?php echo base_url();?>assets2/img/bgsd.png');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.html">
							<img class="logo" src="<?php echo base_url();?>assets2/img/logosobat.png" alt="logo" >
							<img class="logo-alt" src="<?php echo base_url();?>assets2/img/logo-trans.png" alt="logo">
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
					<li><a href="#about">Tentang Kami</a></li>
					<li><a href="#team">Struktur Organisasi</a></li>
					<li><a href="#portfolio">Galeri</a></li>
					<li><a href="#service">Layanan</a></li>
					<li class="has-dropdown"><a href="#blog">Blog</a>
						<ul class="dropdown">
							<li><a href="blog-single.html">blog post</a></li>
						</ul>
					</li>
					<li><a href="#contact">Contact</a></li>
					<li class="has-dropdown"><a href="#"><b>Join Us</b></a>
						<ul class="dropdown">
							<li><a href="<?php echo base_url('dashboard/login');?>">Login</a></li>
							<li><a href="<?php echo base_url('dashboard/register');?>">Register</a></li>
						</ul>
					</li>
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
							<h1 class="white-text">SOBAT</h1>
							<p>Platform teknologi bagi individu, komunitas, organisasi, perusahaan, maupun instansi negeri/swasta untuk membantu difabel mengakses aktivitas publik demi mewujudkan lingkungan yang ramah difabel menuju inklusi yang berkelanjutan</p>
							
							<a href=""></a><button class="white-btn">Pinjam Alat Bantu <i class="fa fa-smile-o" aria-hidden="true"></i></button>
							<a href=""></a><button class="main-btn">Ini Web apa sih?</button>
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
					<h2 class="title">Tentang Kami</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-6">
					<div class="about">
						<i class="fa fa-users"></i>
						<h3>Profil</h3>
						<p>SOBAT DIFABEL (Semua Orang BAnTu Difabel/Different Ability People) merupakan platform penyedia berbagai layanan yang menghubungkan difabel dan non difabel. Tujuan hadirnya Sobat Difabel yakni mewujudkan lingkungan yang inklusi melalui program-program yang mempermudah difabel untuk mengakses aktivitas publik.</p>
						<a href="#">Read more</a>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-6">
					<div class="about">
						<i class="fa fa-rocket"></i>
						<h3>Visi</h3>
						<p>Platform teknologi bagi individu, komunitas, organisasi, perusahaan, maupun instansi negeri/swasta untuk membantu difabel mengakses aktivitas publik demi mewujudkan lingkungan yang ramah difabel menuju inklusi yang berkelanjutan.</p>
						<br><br> 
						<a href="#">Read more</a>
					</div>
				</div>

				<!-- /about -->

			</div>
			<!-- /Row -->

			<!-- Row -->
			<div class="row">

				<!-- about -->
				<div class="col-md-6">
					<div class="about">
						<i class="fa fa-bullseye"></i>
						<h3>Misi</h3>
						<ul>
							<li>Menciptakan dan menyinambungkan sebuah lingkungan inklusi bagi difabel</li>
							<li>Menyediakan layanan fisik maupun non fisik bagi difabel</li>
							<li>Memastikan aksesibilitas yang sesuai dengan kebutuhan</li>
							<li>Menyebarluaskan pemahaman hak asasi manusia bagi difabel dalam masyarakat</li>
						</ul>
						<a href="#">Read more</a>
					</div>
				</div>
				<!-- /about -->
				<!-- about -->
				<div class="col-md-6">
					<div class="about">
						<i class="fa fa-quote-left"></i>
						<h3>Moto</h3>
						<p>Solutif Optimis Berani Aksesibel Teruji</p><br><br><br><br>
						<a href="#">Read more</a>
					</div>
				</div>
				<!-- /about -->

			</div>

			<!-- /Row -->

			<!-- Team -->
			<div id="team" class="section md-padding">

				<!-- Container -->
				<div class="container">

					<!-- Row 1 -->
					<div class="row">

						<!-- Section header -->
						<div class="section-header text-center">
							<h2 class="title">Struktur Organisasi</h2>
						</div>
						<!-- /Section header -->

						<!-- team -->
						<div class="col-sm-3">
							<div class="team">
								<div class="team-img">
									<img style="width: 300px; height: 300px;" class="img-responsive" src="<?php echo base_url();?>assets2/img/dendy.png" alt="">
									<div class="overlay">
										<div class="team-social">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-google-plus"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
										</div>
									</div>
								</div>
								<div class="team-content">
									<h3>Dendy Arifianto S.H</h3>
									<span><b>Founder & CEO</b> </span><br>
									<span>(Chief Executive Officer)</span><br>
									<span>Sobat Netra</span><br>
									<span><b>Jakarta</b></span>
								</div>
							</div>
						</div>
						<!-- /team -->

						<!-- team -->
						<div class="col-sm-3">
							<div class="team">
								<div class="team-img">
									<img style="width: 300px; height: 300px;" class="img-responsive" src="<?php echo base_url();?>assets2/img/nanda2.png" alt="">
									<div class="overlay">
										<div class="team-social">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-google-plus"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
										</div>
									</div>
								</div>
								<div class="team-content">
									<h3>Inanda Rima Pinuri</h3>
									<span><b>Founder & COO </b></span><br>
									<span>(Chief Operating Officer)</span><br>
									<span>Sobat Pendamping</span><br>
									<span><b>Bekasi</b></span><br>
								</div>
							</div>
						</div>
						<!-- /team -->

						<!-- team -->
						<div class="col-sm-3">
							<div class="team">
								<div class="team-img">
									<img style="width: 300px; height: 300px; align-items: center;" class="img-responsive" src="<?php echo base_url();?>assets2/img/nolina2.png" alt="">
									<div class="overlay">
										<div class="team-social">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-google-plus"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
										</div>
									</div>
								</div>
								<div class="team-content">
									<h4>Nolina Utuh Panguji S.T</h4>
									<span><b>Founder & CTO</b> </span><br>
									<span>(Chief Technology Officer)</span><br>
									<span> Sobat Daksa </span><br>
									<span><b>Lumajang</b></span>
								</div>
							</div>
						</div>
						<!-- team -->
						<div class="col-sm-3">
							<div class="team">
								<div class="team-img">
									<img style="width: 300px; height: 300px;" class="img-responsive" src="<?php echo base_url();?>assets2/img/nurul.png" alt="">
									<div class="overlay">
										<div class="team-social">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-google-plus"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
										</div>
									</div>
								</div>
								<div class="team-content">
									<h4>Andi Nurul Istiana A.</h4>
									<span><b>CFO</b></span><br>
									<span>(Chief Financial Officer)</span><br>
									<span>Sobat Tuli</span><br>
									<span><b>Makassar</b></span>
								</div>
							</div>
						</div>
						<!-- /team -->
						<!-- /team -->

					</div>
					<!-- /Row -->

					<!-- Row 2-->
					<div class="row">

						<!-- team -->
						<div class="col-sm-3">
							<div class="team">
								<div class="team-img">
									<img style="width: 300px; height: 300px; align-items: center;" class="img-responsive" src="<?php echo base_url();?>assets2/img/mamat.png" alt="">
									<div class="overlay">
										<div class="team-social">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-google-plus"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
										</div>
									</div>
								</div>
								<div class="team-content">
									<h4>M. Agus Rohmatulloh, S.Kom</h4>
									<span><b>CSO</b><br>
										<span>(Chief Security Officer)</span><br>
										<span> Sobat Daksa </span><br>
										<span><b>Jombang</b></span>
									</div>
								</div>
							</div>
							<!-- /team -->

							<!-- team -->
							<div class="col-sm-3">
								<div class="team">
									<div class="team-img">
										<img style="width: 300px; height: 300px; align-items: center;" class="img-responsive" src="<?php echo base_url();?>assets2/img/wikan.png" alt="">
										<div class="overlay">
											<div class="team-social">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-google-plus"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</div>
										</div>
									</div>
									<div class="team-content">
										<h3>I Made Wikandana S.HI</h3>
										<span><b>CCO</b><br>
											<span>(Chief Compliance Officer</span><br>
											<span> Sobat Netra </span><br>
											<span><b>Bali</b></span>
										</div>
									</div>
								</div>
								<!-- /team -->


								<!-- team -->
								<div class="col-sm-3">
									<div class="team">
										<div class="team-img">
											<img style="width: 300px; height: 300px; align-items: center;" class="img-responsive" src="<?php echo base_url();?>assets2/img/ello1.png" alt="">
											<div class="overlay">
												<div class="team-social">
													<a href="#"><i class="fa fa-facebook"></i></a>
													<a href="#"><i class="fa fa-google-plus"></i></a>
													<a href="#"><i class="fa fa-twitter"></i></a>
												</div>
											</div>
										</div>
										<div class="team-content">
											<h3>Ello Kusuma Alfred M.</h3>
											<span><b>CKO</b><br>
												<span>(Chief Knowledge Officer)</span><br>
												<span> Sobat Daksa </span><br>
												<span><b>Bali</b></span>
											</div>
										</div>
									</div>
									<!-- /team -->

									<!-- team -->
									<div class="col-sm-3">
										<div class="team">
											<div class="team-img">
												<img style="width: 300px; height: 300px; align-items: center;" class="img-responsive" src="<?php echo base_url();?>assets2/img/miftah2.png" alt="">
												<div class="overlay">
													<div class="team-social">
														<a href="#"><i class="fa fa-facebook"></i></a>
														<a href="#"><i class="fa fa-google-plus"></i></a>
														<a href="#"><i class="fa fa-twitter"></i></a>
													</div>
												</div>
											</div>
											<div class="team-content">
												<h3>Miftha</h3><br>
												<span><b>Redaktur</b><br><br>
													<span>Sobat Volunteer</span><br>
													<span><b>Malang</b></span>
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
						</div>
						<!-- /Container -->

					</div>
					<!-- /About -->


					<!-- Portfolio -->
					<div id="portfolio" class="section md-padding bg-grey">

						<!-- Container -->
						<div class="container">

							<!-- Row -->
							<div class="row">

								<!-- Section header -->
								<div class="section-header text-center">
									<h2 class="title">Galeri</h2>
								</div>
								<!-- /Section header -->

								<!-- Work -->
								<div class="col-md-4 col-xs-6 work">
									<img class="img-responsive" src="<?php echo base_url();?>assets2/img/work1.jpg" alt="">
									<div class="overlay"></div>
									<div class="work-content">
										<span>Category</span>
										<h3>Lorem ipsum dolor</h3>
										<div class="work-link">
											<a href="#"><i class="fa fa-external-link"></i></a>
											<a class="lightbox" href="<?php echo base_url();?>assets2/img/work1.jpg"><i class="fa fa-search"></i></a>
										</div>
									</div>
								</div>
								<!-- /Work -->

								<!-- Work -->
								<div class="col-md-4 col-xs-6 work">
									<img class="img-responsive" src="<?php echo base_url();?>assets2/img/work2.jpg" alt="">
									<div class="overlay"></div>
									<div class="work-content">
										<span>Category</span>
										<h3>Lorem ipsum dolor</h3>
										<div class="work-link">
											<a href="#"><i class="fa fa-external-link"></i></a>
											<a class="lightbox" href="<?php echo base_url();?>assets2/img/work2.jpg"><i class="fa fa-search"></i></a>
										</div>
									</div>
								</div>
								<!-- /Work -->

								<!-- Work -->
								<div class="col-md-4 col-xs-6 work">
									<img class="img-responsive" src="<?php echo base_url();?>assets2/img/work3.jpg" alt="">
									<div class="overlay"></div>
									<div class="work-content">
										<span>Category</span>
										<h3>Lorem ipsum dolor</h3>
										<div class="work-link">
											<a href="#"><i class="fa fa-external-link"></i></a>
											<a class="lightbox" href="<?php echo base_url();?>assets2/img/work3.jpg"><i class="fa fa-search"></i></a>
										</div>
									</div>
								</div>
								<!-- /Work -->

								<!-- Work -->
								<div class="col-md-4 col-xs-6 work">
									<img class="img-responsive" src="<?php echo base_url();?>assets2/img/work4.jpg" alt="">
									<div class="overlay"></div>
									<div class="work-content">
										<span>Category</span>
										<h3>Lorem ipsum dolor</h3>
										<div class="work-link">
											<a href="#"><i class="fa fa-external-link"></i></a>
											<a class="lightbox" href="<?php echo base_url();?>assets2/img/work4.jpg"><i class="fa fa-search"></i></a>
										</div>
									</div>
								</div>
								<!-- /Work -->

								<!-- Work -->
								<div class="col-md-4 col-xs-6 work">
									<img class="img-responsive" src="<?php echo base_url();?>assets2/img/work5.jpg" alt="">
									<div class="overlay"></div>
									<div class="work-content">
										<span>Category</span>
										<h3>Lorem ipsum dolor</h3>
										<div class="work-link">
											<a href="#"><i class="fa fa-external-link"></i></a>
											<a class="lightbox" href="<?php echo base_url();?>assets2/img/work5.jpg"><i class="fa fa-search"></i></a>
										</div>
									</div>
								</div>
								<!-- /Work -->

								<!-- Work -->
								<div class="col-md-4 col-xs-6 work">
									<img class="img-responsive" src="<?php echo base_url();?>assets2/img/work6.jpg" alt="">
									<div class="overlay"></div>
									<div class="work-content">
										<span>Category</span>
										<h3>Lorem ipsum dolor</h3>
										<div class="work-link">
											<a href="#"><i class="fa fa-external-link"></i></a>
											<a class="lightbox" href="<?php echo base_url();?>assets2/img/work6.jpg"><i class="fa fa-search"></i></a>
										</div>
									</div>
								</div>
								<!-- /Work -->

							</div>
							<!-- /Row -->

						</div>
						<!-- /Container -->

					</div>
					<!-- /Portfolio -->

					<!-- Service -->
					<div id="service" class="section md-padding">

						<!-- Container -->
						<div class="container">

							<!-- Row -->
							<div class="row">

								<!-- Section header -->
								<div class="section-header text-center">
									<h2 class="title">Layanan</h2>
								</div>
								<!-- /Section header -->

								<!-- service -->
								<div class="col-md-4 col-sm-6">
									<div class="service">
										<i class="fa fa-handshake-o"></i>
										<h3>Pendampingan</h3>
										<p>Layanan yang disediakan untuk mengupayakan perlakuan fasilitas bagi difabel agar tercapainya partisipasi penuh dalam masyarakat disegala aspek kehidupan.</p> <br>
										<a href="#" class="btn-lg btn-danger">Tolong !</a>
									</div>

								</div>
								<!-- /service -->

								<!-- service -->
								<div class="col-md-4 col-sm-6">
									<div class="service">
										<i class="fa fa-headphones"></i>
										<h3>Layanan Konsultasi</h3>
										<p>Layanan yang disediakan oleh sobat difabel dengan memberikan saran atau rekomendasi kepada user atau pihak pihak terkait mengenai hak-hak dasar yang dibutuhkan dan pengetahuan lebih mendalam terkait inklusifitas.</p>
										<a href="#" class="btn-lg btn-danger">Tolong !</a>
									</div>

								</div>
								<!-- /service -->

								<!-- service -->
								<div class="col-md-4 col-sm-6">
									<div class="service">
										<i class="fa fa-wheelchair" aria-hidden="true"></i>
										<h3>Layanan Alat Bantu</h3>
										<p>Layanan yang menyediakan peminjaman alat bantu difabel untuk mempermudah mobilitas difabel serta menjamin akomodasi yang layak untuk difabel dalam mengikuti kegiatan tertentu</p><br>
										<a href="#" class="btn-lg btn-danger">Tolong !</a>
									</div>

								</div>
								<!-- /service -->

							</div>
							<!-- /Row -->

						</div>
						<!-- /Container -->

					</div>
					<!-- /Service -->


					<!-- Why Choose Us -->
					<div id="features" class="section md-padding bg-grey">

						<!-- Container -->
						<div class="container">

							<!-- Row -->
							<div class="row">

								<!-- why choose us content -->
								<div class="col-md-6">
									<div class="section-header">
										<h2 class="title">Layanan Terealisasi</h2>
									</div>
									<p>Layanan yang kami sediakan bersumber dari donatur, relawan, dan pemerintah </p>
									<div class="feature">
										<i class="fa fa-check"></i>
										<p>Kursi Roda Elektrik sejumlah <b>30</b> unit</p>
									</div>
									<div class="feature">
										<i class="fa fa-check"></i>
										<p>Fasilitator pelatihan bahasa isyarat <b>50</b> orang</p>
									</div>
									<div class="feature">
										<i class="fa fa-check"></i>
										<p>Kursi Roda Elektrik sejumlah <b>30</b> unit</p>
									</div>
									<div class="feature">
										<i class="fa fa-check"></i>
										<p>Fasilitator pelatihan bahasa isyarat <b>50</b> orang</p>
									</div>

								</div>
								<!-- /why choose us content -->

								<!-- About slider -->
								<div class="col-md-6">
									<div id="about-slider" class="owl-carousel owl-theme">
										<img class="img-responsive" src="<?php echo base_url();?>assets2/img/about1.jpg" alt="">
										<img class="img-responsive" src="<?php echo base_url();?>assets2/img/about2.jpg" alt="">
										<img class="img-responsive" src="<?php echo base_url();?>assets2/img/about1.jpg" alt="">
										<img class="img-responsive" src="<?php echo base_url();?>assets2/img/about2.jpg" alt="">
									</div>
								</div>
								<!-- /About slider -->

							</div>
							<!-- /Row -->

						</div>
						<!-- /Container -->

					</div>
					<!-- /Why Choose Us -->


					<!-- Numbers -->
					<div id="numbers" class="section sm-padding">

						<!-- Background Image -->
						<div class="bg-img" style="background-image: url('<?php echo base_url();?>assets2/img/bgsd.png');">
							<div class="overlay"></div>
						</div>
						<!-- /Background Image -->

						<!-- Container -->
						<div class="container">

							<!-- Row -->
							<div class="row">

								<!-- number -->
								<div class="col-sm-3 col-xs-6">
									<div class="number">
										<i class="fa fa-users"></i>
										<h3 class="white-text"><span class="counter">451</span></h3>
										<span class="white-text">Happy clients</span>
									</div>
								</div>
								<!-- /number -->

								<!-- number -->
								<div class="col-sm-3 col-xs-6">
									<div class="number">
										<i class="fa fa-trophy"></i>
										<h3 class="white-text"><span class="counter">12</span></h3>
										<span class="white-text">Awards won</span>
									</div>
								</div>
								<!-- /number -->

								<!-- number -->
								<div class="col-sm-3 col-xs-6">
									<div class="number">
										<i class="fa fa-coffee"></i>
										<h3 class="white-text"><span class="counter">154</span>K</h3>
										<span class="white-text">Cups of Coffee</span>
									</div>
								</div>
								<!-- /number -->

								<!-- number -->
								<div class="col-sm-3 col-xs-6">
									<div class="number">
										<i class="fa fa-file"></i>
										<h3 class="white-text"><span class="counter">45</span></h3>
										<span class="white-text">Projects completed</span>
									</div>
								</div>
								<!-- /number -->

							</div>
							<!-- /Row -->

						</div>
						<!-- /Container -->

					</div>
					<!-- /Numbers -->



					<!-- Testimonial -->
					
					<!-- /Testimonial -->



					<!-- Blog -->
					<div id="blog" class="section md-padding bg-grey">

						<!-- Container -->
						<div class="container">

							<!-- Row -->
							<div class="row">

								<!-- Section header -->
								<div class="section-header text-center">
									<h2 class="title">Recents news</h2>
								</div>
								<!-- /Section header -->

								<!-- blog -->
								<div class="col-md-4">
									<div class="blog">
										<div class="blog-img">
											<img class="img-responsive" src="<?php echo base_url();?>assets2/img/blog1.jpg" alt="">
										</div>
										<div class="blog-content">
											<ul class="blog-meta">
												<li><i class="fa fa-user"></i>John doe</li>
												<li><i class="fa fa-clock-o"></i>18 Oct</li>
												<li><i class="fa fa-comments"></i>57</li>
											</ul>
											<h3>Molestie at elementum eu facilisis sed odio</h3>
											<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
											<a href="blog-single.html">Read more</a>
										</div>
									</div>
								</div>
								<!-- /blog -->

								<!-- blog -->
								<div class="col-md-4">
									<div class="blog">
										<div class="blog-img">
											<img class="img-responsive" src="<?php echo base_url();?>assets2/img/blog2.jpg" alt="">
										</div>
										<div class="blog-content">
											<ul class="blog-meta">
												<li><i class="fa fa-user"></i>John doe</li>
												<li><i class="fa fa-clock-o"></i>18 Oct</li>
												<li><i class="fa fa-comments"></i>57</li>
											</ul>
											<h3>Molestie at elementum eu facilisis sed odio</h3>
											<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
											<a href="blog-single.html">Read more</a>
										</div>
									</div>
								</div>
								<!-- /blog -->

								<!-- blog -->
								<div class="col-md-4">
									<div class="blog">
										<div class="blog-img">
											<img class="img-responsive"  src="<?php echo base_url();?>assets2/img/blog3.jpg" alt="">
										</div>
										<div class="blog-content">
											<ul class="blog-meta">
												<li><i class="fa fa-user"></i>John doe</li>
												<li><i class="fa fa-clock-o"></i>18 Oct</li>
												<li><i class="fa fa-comments"></i>57</li>
											</ul>
											<h3>Molestie at elementum eu facilisis sed odio</h3>
											<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
											<a href="blog-single.html">Read more</a>
										</div>
									</div>
								</div>
								<!-- /blog -->

							</div>
							<!-- /Row -->

						</div>
						<!-- /Container -->

					</div>
					<!-- /Blog -->

					<!-- Contact -->
					<div id="contact" class="section md-padding">

						<!-- Container -->
						<div class="container">

							<!-- Row -->
							<div class="row">

								<!-- Section-header -->
								<div class="section-header text-center">
									<h2 class="title">Hubungi Kami</h2>
								</div>
								<!-- /Section-header -->

								<!-- contact -->
								<div class="col-sm-4">
									<div class="contact">
										<i class="fa fa-whatsapp"></i>
										<h3>Whatsapp</h3>
										<small>Call/Message</small>
										<p>+6289606769465</p>
									</div>
								</div>
								<!-- /contact -->

								<!-- contact -->
								<div class="col-sm-4">
									<div class="contact">
										<i class="fa fa-envelope"></i>
										<h3>Email</h3>
										<p>sobatdifabel@gmail.com</p>
									</div>
								</div>
								<!-- /contact -->

								<!-- contact -->
								<div class="col-sm-4">
									<div class="contact">
										<i class="fa fa-map-marker"></i>
										<h3>Alamat</h3>
										<p>Jl Pemuda No.1 - Surabaya</p>
									</div>
								</div>
								<!-- /contact -->

								<!-- contact form -->
								<div class="col-md-8 col-md-offset-2">
									<form class="contact-form">
										<input type="text" class="input" placeholder="Name">
										<input type="email" class="input" placeholder="Email">
										<input type="text" class="input" placeholder="Subject">
										<textarea class="input" placeholder="Message"></textarea>
										<button class="main-btn">Send message</button>
									</form>
								</div>
								<!-- /contact form -->

							</div>
							<!-- /Row -->

						</div>
						<!-- /Container -->

					</div>
					<!-- /Contact -->


					<!-- Footer -->
					<footer id="footer" class="sm-padding" style="background-color: #0b0f0e;">

						<!-- Container -->
						<div class="container">

							<!-- Row -->
							<div class="row">

								<div class="col-md-12">

									<!-- footer logo -->
									<div class="footer-logo">
										<a href="index.html"><img src="<?php echo base_url();?>assets2/img/logosobatf.png" alt="logo"></a>
									</div>
									<!-- /footer logo -->

									<!-- footer follow -->
									<ul class="footer-follow">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube"></i></a></li>
									</ul>
									<!-- /footer follow -->

									<!-- footer copyright -->
									<div class="footer-copyright">
										<p>Copyright © <?php echo date("Y") ?>. All Rights Reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
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
					<script type="text/javascript" src="<?php echo base_url();?>assets2/js/jquery.min.js"></script>
					<script type="text/javascript" src="<?php echo base_url();?>assets2/js/bootstrap.min.js"></script>
					<script type="text/javascript" src="<?php echo base_url();?>assets2/js/owl.carousel.min.js"></script>
					<script type="text/javascript" src="<?php echo base_url();?>assets2/js/jquery.magnific-popup.js"></script>
					<script type="text/javascript" src="<?php echo base_url();?>assets2/js/main.js"></script>
					<script data-account="7KDD9cRL1J" src="https://cdn.userway.org/widget.js"></script>

				</body>

				</html>
