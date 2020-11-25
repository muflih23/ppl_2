<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MANDA &mdash;Administrator</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    
    <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/select2.css">
    

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">

  </head>
  <body data-spy="scroll" data-target="#probootstrap-navbar" data-offset="200">
  

    <nav class="navbar navbar-expand-lg navbar-dark probootstrap_navbar" id="probootstrap-navbar">
      <div class="container">
        <a class="navbar-brand" href="/admin">Manda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="/admin">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-mendaki-sekarang">Edit Dest.</a></li>
            <li class="nav-item"><a class="nav-link" href="/admintoko">Edit Toko</a></li>
            <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    

    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('assets/images/bg_1.jpg');"  id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Selamat Datang</h2>
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Administrator!</h2>
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Selamat Berkontribusi</h2>
            <p class="lead mb-5 probootstrap-animate"></p>
            <br>
            <br>
          </div>
        </div>
      </div>
    
    </section>
    <!-- END section -->

    <section class="probootstrap_section" id="section-mendaki-sekarang">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Edit Destinasi</h2>
            <a href="/tambahdest" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">Tambah Destinasi</a> 
          </div>
        </div>
        <div class="row">
          @foreach($pegunungan as $p)
          <div class="col-lg-3 col-md-6 probootstrap-animate mb-3">
            <a href="/{{ $p->id }}/deletedest" class="probootstrap-thumbnail">
              <img src="pegunungan/{{ $p->foto }}" alt=" {{ $p->gunung }} " class="img-fluid">
              <div class="probootstrap-text">
                <h3>{{ $p->gunung }}</h3>
                <h3 style="color:red;"><em>hapus?</em><h3>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!--END section-->

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