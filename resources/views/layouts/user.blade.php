@php
	$profil = App\profil::find(1);
	$jurusan = App\jurusan::all();
@endphp
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>sistem</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<header role="banner" id="fh5co-header">
		<div class="fluid-container">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
					<a class="navbar-brand" href="index.html">Twist</a> 
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#" data-nav-section="services"><span>PROFIL</span></a></li>
						<li><a href="#" data-nav-section="explore"><span>JURUSAN</span></a></li>
						<li><a href="#" data-nav-section="testimony"><span>BERITA</span></a></li>
						<li><a href="#" data-nav-section="team"><span></span>EKSTRAKULIKULER</a></li>						
						<li><a href="#" data-nav-section="faq"><span>FASILITAS</span></a></li>

						<!-- <li><a href="{{url('/login')}}"><span>LOGIN</span></a></li> -->
					</ul>
				</div>
			</nav>
	  </div>
	</header>

	<section id="fh5co-home" data-section="home" style="background-image: url(user/images/SEKUL.jpg);" data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h1 class="to-animate">SELAMAT DATANG</h1>
							<h12 class="to-animate">Smkn 10 bandung</h12>



							<h2 class="to-animate">SEKOLAH NOMOR 1 DI BANDUNG<br>  </h2>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="fh5co-services" data-section="services">
		<div class="fh5co-services">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate"><span>PROFILE</span></h2>
						<div class="row">

							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate">{{$profil->sejarah}}</h3>
							</div>
						</div>
					</div>
				</div>

SMK Negeri 10 Bandung merupakan Sekolah Menengah Kejuruan Negeri Rumpun Seni Pertunjukan pertama di Provinsi Jawa Barat, Indonesia dan terletak di Kota Bandung. Berlokasi di Jalan Cijawura Hilir No. 339, Kelurahan Cijawura, Kecamatan Buahbatu, Kota Bandung[1]
SMK Negeri 10 Bandung berdiri diatas lahan tanah seluas 55.000 m² (5,5 Ha).
Masa pendidikan di SMK Negeri 10 Bandung ditempuh dalam waktu tiga tahun pelajaran, mulai dari kelas X hingga kelas XII, seperti pada umumnya masa pendidikan Sekolah Menengah Kejuruan di Indonesia.

		
	<section id="fh5co-explore" data-section="explore">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate"><span>JURUSAN</span></h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>Disekolah ini memiliki beberapa jurusan yang sangat banyak diminati</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fh5co-project">
			<div class="container-fluid">
				<div class="row">
					@foreach($jurusan as $data)
					<div class="col-md-4 text-center">
						<div class="project-grid to-animate-2" style="background-image:  url({{asset('img/'.$data->foto)}});">
							<div class="desc">
								<h3><a href="#">{{$data->nama}}</a></h3>
								<span>Web Design</span>

								<p class="download"><a href="#"><i class="icon-download"></i></a></p>
								
							</div>
						</div>
						
						<div class="project-grid to-animate-2" style="background-image:  url(images/ilkom.jpg);">
							<div class="desc">
								<h3><a href="#">Work Title Here</a></h3>
								<span>Web Design</span>

								<p class="download"><a href="#"><i class="icon-download"></i></a></p>
								
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>	
		</div>
		<div id="fh5co-counter-section" class="fh5co-counters">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate"><span>Some Fun Facts</span></h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove. </h3>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
	</section>
	<section id="fh5co-testimony" class="fh5co-bg-color" data-section="testimony">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate"><span>BERITA</span></h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 to-animate">
					<div class="wrap-testimony">
						<div class="owl-carousel-fullwidth">
							@foreach($berita as $beritas)
							<div class="item">
								<div class="testimony-slide active text-center">
									<span>{{$beritas->judul}}</span>
									<blockquote>
										<p>{!!$beritas->isi!!}</p>
									</blockquote>
								</div>
							</div>
							@endforeach
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	

	<section id="fh5co-team" class="fh5co-bg-color" data-section="team">
		<div class="fh5co-team">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate"><span>ekstrakulikuler</span></h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<div class="row">
					<div class="col-md-6">
						<div class="box-faq to-animate-2">
							<i class="icon-check2"></i>
							<div class="desc">
								<h3>remaja masjid islam</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
						<div class="box-faq to-animate-2">
							<i class="icon-check2"></i>
							<div class="desc">
								<h3>palang merah remaja </h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
						<div class="box-faq to-animate-2">
							<i class="icon-check2"></i>
							<div class="desc">
								<h3>pramuka</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="box-faq to-animate-2">
							<i class="icon-check2"></i>
							<div class="desc">
								<h3>basket</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
						<div class="box-faq to-animate-2">
							<i class="icon-check2"></i>
							<div class="desc">
								<h3>futsal</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
						<div class="box-faq to-animate-2">
							<i class="icon-check2"></i>
							<div class="desc">
								<h3>karawitan</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	

	<section id="fh5co-faq" class="fh5co-bg-color" data-section="faq">
		<div class="fh5co-faq">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate"><span>FASILITAS</span></h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate">beberapa fasilitas di smkn10 bandung</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="box-faq to-animate-2">
							<i class="icon-check2"></i>
							<div class="desc">
								<h3>masjid</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
						<div class="box-faq to-animate-2">
							<i class="icon-check2"></i>
							<div class="desc">
								<h3>perpustakaan </h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
						<div class="box-faq to-animate-2">
							<i class="icon-check2"></i>
							<div class="desc">
								<h3>ruang kelas</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="box-faq to-animate-2">
							<i class="icon-check2"></i>
							<div class="desc">
								<h3>laboratorium bahasa</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
						<div class="box-faq to-animate-2">
							<i class="icon-check2"></i>
							<div class="desc">
								<h3>laboratorium komputer</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
						<div class="box-faq to-animate-2">
							<i class="icon-check2"></i>
							<div class="desc">
								<h3>laboratorium ipa</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	

	<div id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-4 to-animate">
					<h3 class="section-title">About Us</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
					<p class="copy-right">&copy; 2015 Twist Free Template. <br>All Rights Reserved. <br>
						Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a>
						Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a>
					</p>
				</div>

				<div class="col-md-4 to-animate">
					<h3 class="section-title">Our Address</h3>
					<ul class="contact-info">
						<li><i class="icon-map-marker"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
						<li><i class="icon-phone"></i>+ 1235 2355 98</li>
						<li><i class="icon-envelope"></i><a href="#">info@yoursite.com</a></li>
						<li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li>
					</ul>
					<h3 class="section-title">Connect with Us</h3>
					<ul class="social-media">
						<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
						<li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
						<li><a href="#" class="dribbble"><i class="icon-dribbble"></i></a></li>
						<li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4 to-animate">
					<h3 class="section-title">Drop us a line</h3>
					<form class="contact-form">
						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<input type="name" class="form-control" id="name" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="email" class="form-control" id="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="message" class="sr-only">Message</label>
							<textarea class="form-control" id="message" rows="7" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Send Message">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div id="map" class="fh5co-map"></div>

	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

