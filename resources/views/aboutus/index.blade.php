<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Homepage MIFILM</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/mifilm-logo.jpg" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

   

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet" />
     <!-- Google Fonts -->
     <link
     href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
     rel="stylesheet"
   />
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
        <h1 class="logo me-auto me-lg-0"><a href="/">MiFilm</a></h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
        @auth
        <div class="d-flex">
          <a href="/films" class="suggestion-btn scrollto d-none d-lg-flex">Film</a>
          <div class="btn-group ">
            <button type="button" class="suggestion-btn btn-danger dropdown-toggle ml-3" data-bs-toggle="dropdown" aria-expanded="false">
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
    <!-- End Header -->


    <main id="main">
     
      <!-- ======= Rekomendasi Populer Section ======= -->
      <section id="recommended" class="recommended section-bg mt-5">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Our Profile</h2>
            <p>Kelompok 8 Pabwe 2021</p>
          </div>

          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="100">
                
                <img src="/assets/img/recommended/film-1.jpeg" class="img-fluid" alt="" />
              
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Albet Matthew Best Nainggolan</h4>
                    <span
                      >love what u do..</span
                    >
                  </div>
                  <div class="social">
                    <a href="https://www.instagram.com/ma_tbst/" target="_blank"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="200">
               
                <img src="assets/img/recommended/film-2.jpg" class="img-fluid" alt="" />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Rewina Pakpahan</h4>
                    <span
                      ></span
                    >
                  </div>
                  <div class="social">
                    <a href="https://www.instagram.com/rewinapakpahan_/" target="_blank"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="300">
              
                <img src="assets/img/recommended/film-3.jpg" class="img-fluid" alt="" />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Josua Gaolus Nainggolan</h4>
                    <span
                      >penyanyi papan atas..</span
                    >
                  </div>
                  <div class="social">
                    <a href="https://www.instagram.com/josua.py/" target="_blank"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="300">
               
                <img src="assets/img/recommended/film-4.jpg" class="img-fluid" alt="" />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Hana Maria Siahaan</h4>
                    <span
                      >
                      </span
                    >
                  </div>
                  <div class="social">
                    <a href="https://www.instagram.com/hanamaria.s/" target="_blank"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="300">
               
                <img src="assets/img/recommended/film-5.jpeg" class="img-fluid" alt="" />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Theresia Mega Rumapea</h4>
                    <span
                      ></span
                    >
                  </div>
                  <div class="social">
                    <a href="https://www.instagram.com/megarmp/"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="300">
                <img src="assets/img/recommended/film-6.jpeg" class="img-fluid" alt="" />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Kristina Tampubolon</h4>
                    <span
                      ></span
                    >
                  </div>
                  <div class="social">
                    <a href="https://www.instagram.com/kristina_tampubolon19/" target="_blank"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="300">
                <img src="assets/img/recommended/film-9.png" class="img-fluid" alt="" />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Yoni Siahaan</h4>
                    <span
                      ></span
                    >
                  </div>
                  <div class="social">
                
                    <a href="https://www.instagram.com/yonisiahaan/" target="_blank"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="text-center">
            <a href="/">
          
              <button type="submit">Beranda</button></div>
          </a>
        </div>
      </section>
      <!-- End Rekomendasi Populer Section -->

  
      <!-- End Events Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-6">
              <div class="footer-info">
                <h3>MIFILM</h3>
                <p>
                  Setia Budi Medan<br />
                  Sumatera Utara, Indonesia<br /><br />
                  <strong>Phone:</strong> +628 5589 5488<br />
                  <strong>Email:</strong> kelompok8pabwe@gmail.com<br />
                </p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-5 col-md-6 footer-newsletter">
              <h4>Informasi MIFILM</h4>
              <p>Dapat informasi terbaru film kesukaanmu dari notifikasi MIFILM</p>
              <form action="" method="post"><input type="email" name="email" /><input type="submit" value="Subscribe" /></form>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>MIFILM</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">Designed by <a href="">Kelompok8_Pawbe</a></div>
      </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
