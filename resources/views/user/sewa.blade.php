<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Sewa Mobil - K.15.A</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('user/images/favicon.ico')}}" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{asset('user/plugins/bootstrap/css/bootstrap.min.css')}}">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="{{asset('user/plugins/icofont/icofont.min.css')}}">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="{{asset('user/plugins/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('user/plugins/slick-carousel/slick/slick-theme.css')}}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset('user/css/style.css')}}">

</head>

<body id="top">

<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>k15a@gmail.com</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Alamat : Kp. Cilebak Ds. Rancamanyar RT. 002/002</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="index.html">
			  	<img src="images/logo.png" alt="" class="img-fluid">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="index">Beranda</a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="tentang">Tentang</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('login') }}" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sewa<i class="icofont-thin-down"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown02">
                        <li><a class="dropdown-item" href="lihat">Lihat Mobil</a></li>
                        <li><a class="dropdown-item" href="sewa">Sewa Online</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="{{ route('login') }}" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Masuk<i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown02">
						<li><a class="dropdown-item" href="{{ route('login') }}">Masuk Sebagai Admin</a></li>
					</ul>
			  	</li>
			</ul>
		  </div>
		</div>
	</nav>
</header>
	


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Sewa Disini</span>
          <h1 class="text-capitalize mb-5 text-lg">Sewa Online</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="appoinment section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
          <div class="mt-3">
            <div class="feature-icon mb-3">
              <i class="icofont-support text-lg"></i>
            </div>
             <span class="h3">Pesan Via WhatsApp!</span>
              <h2 class="text-color mt-3">+62 81292690547</h2>
          </div>
      </div>

      <div class="col-lg-8">
           <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
            <h2 class="mb-2 title-color">Lengkapi data berikut!</h2>
            <p class="mb-4">Hati-hati dalam mengisi data terutama saat mengisi alamat dan nomor telepon. Jikalau ada kesalahan bisa langsung hubungi pada nomor yang sudah tertera.</p>
            <form action="{{route('pelanggan.store')}}" method="post">
              @csrf
              <div class="row">
                  <div class="col">
                      <div class="form-group">
                          <label for="">Masukan NIK</label>
                          <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror">
                          @error('nik')
                              <span class="invalid-feedback" role="alert"></span>
                              <strong>{{ $message }}</strong>
                          @enderror
                      </div>
                  </div>
                  <div class="col">
                      <div class="form-group">
                          <label for="">Masukan Nama Pelanggan</label>
                          <input type="text" name="nama_pelanggan" class="form-control @error('nama_pelanggan') is-invalid @enderror">
                          @error('nama_pelanggan')
                              <span class="invalid-feedback" role="alert"></span>
                              <strong>{{ $message }}</strong>
                          @enderror
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col">
                      <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <select name="jenis_kelamin" class="form-control">
                              <option value="Laki-Laki">Laki-Laki</option>
                              <option value="Perempuan">Perempuan</option>
                          </select>
                          @error('jenis_kelamin')
                              <span class="invalid-feedback" role="alert"></span>
                              <strong>{{ $message }}</strong>
                          @enderror
                      </div>
                  </div>
                  <div class="col">
                      <div class="form-group">
                          <label for="">Masukan Alamat Lengkap</label>
                          <textarea type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror"></textarea>
                          @error('alamat')
                              <span class="invalid-feedback" role="alert"></span>
                              <strong>{{ $message }}</strong>
                          @enderror
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col">
                      <div class="form-group">
                          <label for="">Masukan Nomor Telepon</label>
                          <input type="text" name="nomor_hp" class="form-control @error('nomor_hp') is-invalid @enderror">
                          @error('nomor_hp')
                              <span class="invalid-feedback" role="alert"></span>
                              <strong>{{ $message }}</strong>
                          @enderror
                      </div>
                  </div>
                  <div class="col">
                      <div class="form-group">
                          <label for="">Masukan Email</label>
                          <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                          @error('email')
                              <span class="invalid-feedback" role="alert"></span>
                              <strong>{{ $message }}</strong>
                          @enderror
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <button type="reset" class="btn btn-outline-warning">Reset</button>
                  <button type="submit" class="btn btn-outline-info">Simpan</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="images/logo.png" alt="" class="img-fluid">
					</div>
					<p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="icofont-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="icofont-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="icofont-linkedin"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Department</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Surgery </a></li>
						<li><a href="#">Wome's Health</a></li>
						<li><a href="#">Radiology</a></li>
						<li><a href="#">Cardioc</a></li>
						<li><a href="#">Medicine</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Support</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Company Support </a></li>
						<li><a href="#">FAQuestions</a></li>
						<li><a href="#">Company Licence</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Get in Touch</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">Support Available for 24/7</span>
						</div>
						<h4 class="mt-2"><a href="tel:+23-345-67890">Support@email.com</a></h4>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
						</div>
						<h4 class="mt-2"><a href="tel:+23-345-67890">+23-456-6588</a></h4>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						Copyright © <script> document.write(new Date().getFullYear()) </script> Sewa Mobil K.15.A
					</div>
				</div>
				{{-- <div class="col-lg-6">
					<div class="subscribe-form text-lg-right mt-5 mt-lg-0">
						<form action="#" class="subscribe">
							<input type="text" class="form-control" placeholder="Your Email address">
							<a href="#" class="btn btn-main-2 btn-round-full">Subscribe</a>
						</form>
					</div>
				</div> --}}
			</div>

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop js-scroll-trigger" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>
   

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>

  </body>
  </html>