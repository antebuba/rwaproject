<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    #section2 {
      background-color: #333;
      color: white;
      text-align: center;
    }
    #section3{
      background-color: white;
      color: black;
      text-align: center;
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>E-zdravstvo</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +387 63 112 221</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> ezdravstvo@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">E</span>-zdravstvo</a>

        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Početna</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#onam">O nama</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('#doc')}}">Doktori</a>
            </li>
            
            @if(Route::has('login'))

            @auth

            <li class="nav-item">
              <a class="nav-link" style="background-color: greenyellow; color:white;" 
              href="{{url('myappointment')}}">Ugovoreni sastanak</a>
            </li>
            
            <x-app-layout>
            </x-app-layout>
        

            @else 
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Prijava</a>
            </li>

            <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Registracija</a>
              </li>
            
            @endauth

            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  @if(session()->has('message'))
  <div class = "alert alert-success">
      <button type="button" class = "close" data-dismiss="alert">X</button>
      {{session()->get('message')}}
  </div>
@endif

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">UČINIMO VAŠ ŽIVOT SRETNIJIM</span>
        <h1 class="display-4">Zdrav život</h1>
      </div>
    </div>
  </div>


  

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1 id="onam">Dobro došli u Vaš<br> Center za zdravlje</h1>
            <p class="text-grey mb-4">Kako bi unaprijedili način zakazivanja termina kod doktora
              razvili smo ovaj moderan način prijave na sustav i 
              naručivanja kod željenog doktora. Naš cilj je da smanjimo
              redove čekanja u našim bolnicama, kako bi Vaš odlazak
              kod lječnika bio što lakši!</p>
          
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  @include('user.doctor')

  
  
  

  @if(Route::has('login'))

            @auth

            @include('user.appointment')
            
           
        

            @else 
            <h1 style="text-align:center">Autori ovog projekta</h1>
            <div id="section2">
              <h1>Ante Bubalo</h1>
              <p>Dolazim iz Širokog Brijega. Rođen sam 21.siječnja 2002 godine. U svibnju 2020. godine sam završio 
                srednju školu u Širokom Brijegu. Nakon toga odlučujem se da upišem fakultet Računarstva u Mostaru.
            </p>
            <br>
            <h1>Tea Rozić</h1>
            <p>Dolazim iz Mostara. Rođena sam 06.listopada 2001 godine. U svibnju 2020. sam završila
              gimnaziju u Mostaru. Nakon toga odlučujem upisujem <br>fakultet Računarstva u Mostaru.</p>
            </div>
          <div id="section3">
           <h1>Kontakt</h1>
            <h3>Naši profili na GitHub: </h3>
           <p><a href="https://github.com/antebuba">GitHub profil od Ante</a></p>
           <p><a href="https://github.com/teaarozic">GitHub profil od Tea</a></p>
          </div>
            @endauth

            @endif
  <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    
  </div> <!-- .banner-home -->
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>