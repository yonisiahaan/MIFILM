<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>{{ $title }} - {{ $film->title }}</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="/assets/img/mifilm-logo.jpg" rel="icon" />
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href='https://fonts.googleapis.com/css?family=Oswald:300,400,500,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->

 
    <link rel="stylesheet" type="text/css" href="/css/theme.css">
    <style>
        .entity-title, .entity-list-title, .section-title{
            color: #ffffff;
        }
        a {
            color: #e01238;
        }
    </style>
  </head>

  <body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
          <h1 class="logo me-auto me-lg-0"><a href="/">MiFilm</a></h1>
  
          <nav id="navbar" class="navbar order-last order-lg-0">
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
          @auth
        <div class="d-flex">
          <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <a href="" class="text-white">Halooo, {{ auth()->user()->name }}</a>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard/films">Dashboard</a></li>
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
             
            </ul>
          </div>
          
        </div>
        @else
        <div class="d-flex">
          <a href="/login" class="suggestion-btn scrollto d-none d-lg-flex">Masuk</a>
          <a href="/registration" class="suggestion-btn scrollto d-none d-lg-flex">Daftar</a>
        </div>
        @endauth
        </div>
      </header>
    
      <!-- ======= Hero Section ======= -->
      <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-8">
                <h1 class="section-title">Movies info</h1>
                <div class="page-breadcrumbs">
                    <a class="content-link" href="#">Home</a>
                    <span class="text-theme mx-2"><i class="fas fa-chevron-right"></i></span>
                    <a class="content-link" href="#">Movies</a>
            </div>
            <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
              <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="glightbox play-btn"></a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Hero -->
  

        
          <div class="container">
            <div class="sidebar-container">
                <div class="content">
                    <section class="section-long">
                        <div class="section-line">
                            <div class="movie-info-entity">
                                <div class="entity-poster" data-role="hover-wrap">
                                    <div class="embed-responsive embed-responsive-poster">
                                        @if($film->image)
                                        
                                        <img src="{{ asset('storage/' . $film->image) }}" alt="{{ $film->category->name }}" class="embed-responsive-item card-img-top img-fluid">
                                  
                                    
                                        @else
                                        <img class="embed-responsive-item" src="https://source.unsplash.com/500x800?{{ $film->category->name }}" class="card-img-top img-fluid" alt="{{ $film->category->name }}" alt="" width="370px" height="450" />
                                        @endif
                                        
                                    </div>
                                    <div class="d-over bg-theme-lighted collapse animated faster" data-show-class="fadeIn show" data-hide-class="fadeOut show">
                                        
                                        <div class="entity-play">
                                            <a class="action-icon-theme action-icon-bordered rounded-circle" href="https://www.youtube.com/watch?v=d96cjJhvlMA" data-magnific-popup="iframe">
                                                <span class="icon-content"><i class="fas fa-play"></i></span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="entity-content ">
                                    <h2 class="entity-title">{{ $film->title }}</h2>
                                    <div class="entity-category">
                                        <a class="content-link" href="">{{ $film->category->name }}</a>
                        
                                    </div>
                                   
                                    <div class="entity-info">
                                        
                                    </div>
            
                                          
                                    <ul class="entity-list">
                                        <li>
                                            <span class="entity-list-title">Studio:</span>{{ $film->studio }}</li>
                                        <li>
                                            <span class="entity-list-title">Penulis:</span>
                                            <a class="content-link" href="#">{{ $film->author }}</a>
                                            
                                        </li>
                                        <li>
                                            <span class="entity-list-title">Tahun Rilis:</span>
                                            <a class="content-link" href="#">{{ $film->year }}</a>,
                                           
                                        </li>
                                        <li>
                                            <span class="entity-list-title">Negara:</span>
                                            <a class="content-link" href="#">{{ $film->country }}</a>,
                                    
                                        </li>
                                        <li>
                                            <span class="entity-list-title">Durasi:</span>
                                            <a class="content-link" href="#">{{ $film->duration }} menit</a>,
                                        </li>
                                    
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="section-line">
                            <div class="section-head">
                                <h2 class="section-title text-uppercase mb-3">Sinopsis</h2>
                            </div>
                            <div class="section-description">
                                <p class="lead">{!! $film->synopsis !!}</p>
                                
                               
                            </div>
                            
                        </div>
                       
                  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>