<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>MANDA &mdash; Teman Mendaki</title>
        <link rel="icon" type="image/png" href="assets/images/favicon.png">    
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

		<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    
    <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/select2.css">
    

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">

	</head>
	<body>
  

    <nav class="navbar navbar-expand-lg navbar-dark probootstrap_navbar" id="probootstrap-navbar">
      <div class="container">
        <a class="navbar-brand" href="/">MANDA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    

    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5"  id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate" style="text-align: center !important;">Selamat Datang <br> di Toko Teman Mendaki!</h2>
            <p class="lead mb-5 probootstrap-animate">
          </div> 
        </div>
      </div>
    
    </section>
    <!-- END section -->

    <section class="probootstrap_section bg-light">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Toko</h2>
            <h5><em>Temukan perlengkapan pendakian gunung disini!</em></h5>
            <br>
            <div class="col-md probootstrap-animate">
            <form action="/tokosearch" method="get" class="probootstrap-form">
              <div class="form-group">
                <div class="row mb-3">
                  <div class="col-md">
                    <div class="form-group">
                      <label for="id_label_single">Pencarian</label>
                      <label for="id_label_single" style="width: 100%;">
                        <input type="text" class="form-control" id="search" name="search" placeholder="Masukkan kata kunci disini...">
                      </label>
                    </div>
                  </div>
                </div>
                <!-- END row -->
                <div class="row">
                  <div class="col-md">
                    <input type="submit" value="Submit" class="btn btn-primary btn-block">
                  </div>
                </div>
              </div>
            </form>
          </div>
          </div>
        </div>
          @foreach($barang as $b)
          <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate">
              <div class="probootstrap-media-image" style="background-image: url(barangtoko/{{ $b->file }}); background-size: 325px 220px; background-repeat: no-repeat; background-position: center;">
              </div>
              <div class="media-body">
                <span class="text-uppercase">{{ $b->nama }}</span>
                <h5 class="mb-3">{{ $b->harga }}</h5>
                <p>{{ $b->detail }}</p>
                <p><a href="https://api.whatsapp.com/send?phone=6281999000099&text=Saya%20tertarik%20untuk%20membeli%20produk%20anda">Beli sekarang!</a></p>
              </div>
            </div>
          @endforeach
      </div>
    </section>
    <!-- END section -->

    <section class="probootstrap_section bg-light" id="section-contact">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Hubungi Kami</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 probootstrap-animate">
            <div class="row">
              <div class="col-md-6">
                <ul class="probootstrap-contact-details">
                  <li>
                    <span class="text-uppercase"><span class="ion-paper-airplane"></span> Email</span>
                    temanMendaki@mail.manda.com
                  </li>
                  <li>
                    <span class="text-uppercase"><span class="ion-ios-telephone"></span>Telepon</span>
                    +6251-1400041
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="probootstrap-contact-details">
                  <li>
                    <span class="text-uppercase"><span class="ion-ios-telephone"></span>Whatsapp</span>
                    +62819-9900-0099
                  </li>
                  <li>
                    <span class="text-uppercase"><span class="ion-location"></span>Alamat</span>
                    Bogor, Jawa Barat <br>
                    Dramaga Pasar Cibereum Petir  <br>
                    No. 15A
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <script src="assets/js/jquery.min.js"></script>
    
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <script src="assets/js/select2.min.js"></script>

    <script src="assets/js/main.js"></script>
	</body>
</html>