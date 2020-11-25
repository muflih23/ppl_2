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

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/select2.css">
    

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">

  </head>
  <body data-spy="scroll" data-target="#probootstrap-navbar" data-offset="200">
  

    <nav class="navbar navbar-expand-lg navbar-dark probootstrap_navbar" id="probootstrap-navbar">
      <div class="container">
        <a class="navbar-brand" href="/">Manda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#section-home">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-mendaki-sekarang">Mulai Mendaki</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-services">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-contact">Contact</a></li>
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
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Jelajahi Keindahan Alam</h2>
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Pegunungan di Indonesia</h2>
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Dengan Mudah!</h2>
            <p class="lead mb-5 probootstrap-animate"></p>
            <br>
            <br>
              <a href="#section-mendaki-sekarang" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">Jelajahi Sekarang!</a> 
            </p>
          </div>
        </div>
      </div>
    
    </section>
    <!-- END section -->
    

    <section class="probootstrap_section" id="section-feature-testimonial">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center mb-5 probootstrap-animate">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Tentang Manda</h2>
            <blockquote class="">
              <p class="lead mb-4"><em>Indonesia memiliki keindahan alam yang sangat menarik untuk dijelajahi bak serpihan surga yang jatuh ke bumi, salah satu mutiara keindahan tersebut adalah pegunungan yang tersebar di seluruh bagian Indonesia. Dengan MANDA, masyarakat akan lebih mudah untuk menjelajahi salah satu keindahan alam negeri ini</em></p>
              <p class="probootstrap-author">
                  <img src="assets/images/founder.jpg" alt=" " class="rounded-circle"><br>
                  <span class="probootstrap-name">Arya Pasha Gunawan</span><br>
                  <span class="probootstrap-title">Founder Teman Mendaki "MANDA"</span>
              </p>
            </blockquote>

          </div>
        </div>
        
      </div>
    </section>
    <!-- END section -->


    <section class="probootstrap_section" id="section-mendaki-sekarang">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Mulai Mendaki</h2>
            <h5><em>Pilih salah satu gunung yang akan jadi tujuan anda!</em></h5>
          </div>
        </div>
        <div class="row">
          @foreach($pegunungan as $p)
          <div class="col-lg-3 col-md-6 probootstrap-animate mb-3">
            <a href="https://api.whatsapp.com/send?phone=6281999000099&text=Saya%20tertarik%20untuk%20melakukan%20perjalanan%20bersama%20guide%20Teman%20Mendaki" class="probootstrap-thumbnail">
              <img src="pegunungan/{{ $p->foto }}" alt=" {{ $p->gunung }} " class="img-fluid">
              <div class="probootstrap-text">
                <h3>{{ $p->gunung }}</h3>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    
  

    <section class="probootstrap_section" id="section-services">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Layanan Kami</h2>
          </div>
        </div>
      </div>
    </section>
        

    <section class="probootstrap-section-half d-md-flex" id="section-about">
      <div class="probootstrap-image probootstrap-animate" data-animate-effect="fadeIn" style="background-image: url(assets/images/guidethumb.jpg)"></div>
      <div class="probootstrap-text">
        <div class="probootstrap-inner probootstrap-animate" data-animate-effect="fadeInRight">
          <h2 class="heading mb-4">Pemandu Pendakian Gunung</h2>
          <p>Mendaki gunung merupakan aktifitas yang sangat menarik untuk dilakukan sekaligus menantang karena resiko dan bahaya yang mengancam. Namun sekarang teman teman hiking tidak perlu takut lagi karena Teman Mendaki menawarkan 
            layanan pemandu pendakian. Sehingga teman teman dapat lebih aman pada saat melakukan pendakian karena dibimbing oleh ahli yang professional di bidangnya. </p>
          <p><a href="#section-mendaki-sekarang" class="btn btn-primary">Book Sekarang!</a></p>
        </div>
      </div>
    </section>

    <section class="probootstrap-section-half d-md-flex">
      <div class="probootstrap-image order-2 probootstrap-animate" data-animate-effect="fadeIn" style="background-image: url(assets/images/tokothumb.jpg)"></div>
      <div class="probootstrap-text order-1">
        <div class="probootstrap-inner probootstrap-animate" data-animate-effect="fadeInLeft">
          <h2 class="heading mb-4">Toko MANDA</h2>
          <p>Perlengkapan pendakian gunung juga menjadi salah satu hal yang penting untuk temen temen persiapkan sebelum mulai mendaki gunung, apakah perlengkapan temen temen sudah lengkap untuk mendaki? Eits tenang aja, Teman Mendaki juga
            punya toko nih untuk melengkapi keperluan mendaki temen temen, Yuk langsung kita cek aja!</p>
          <p><a href="/toko" class="btn btn-primary">Kunjungi Toko</a></p>
        </div>
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