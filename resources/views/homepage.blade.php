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

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-8">
            <h1>Welcome to <span>MIFILM</span></h1>
            <h2>Cari Film, acara TV yang cocok untuk mu.</h2>

            <a href="/films" class="btns btn-menu animated fadeInUp scrollto">Ketahui lebih banyak jenis film > </a>
          </div>
          <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
            {{-- <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="glightbox play-btn"></a> --}}
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
              <div class="about-img">
                <img src="assets/img/about.jpg" alt="" />
              </div>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
              <h1>Jelajahi informasi mengenai film yang ingin kamu tonton bersama MIFILM</h1>
              <p class="fst-italic">Rekomendasi film disertai informasi berikut</p>
              <ul>
                <li><i class="bi bi-check-circle"></i>Penulis</li>
                <li><i class="bi bi-check-circle"></i>Genre</li>
                <li><i class="bi bi-check-circle"></i>Sinopsis</li>
              </ul>
              <p>dan masih banyak lagi !!!</p>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Rekomendasi Populer Section ======= -->
      <section id="recommended" class="recommended section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>It's Yours</h2>
            <p>Rekomendasi Populer</p>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="100">
                <a href="/films/{{ $films[0]->slug }}"> 
                <img src="{{ asset('storage/' . $films[0]->image) }}" class="img-fluid" alt="" />
                </a>
                {{-- <div class="member-info">
                  <div class="member-info-content">
                    <h4>Tomb Raider</h4>
                    <span
                      >Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, tenetur perferendis eum officiis repudiandae in unde deleniti quasi corrupti quos earum numquam dolor autem commodi quia quam temporibus. Praesentium
                      veniam eius nostrum odio esse sequi, dignissimos eum beatae, quod culpa perferendis! Nisi voluptatum fugiat rem aliquid iusto esse dolorem officiis...</span
                    >
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                  </div>
                </div> --}}
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="200">
                <a href="/films/{{ $films[1]->slug }}"> 
                  <img src="{{ asset('storage/' . $films[1]->image) }}" class="img-fluid" alt="" />
                </a>
                {{-- <div class="member-info">
                  <div class="member-info-content">
                    <h4>Bad Boys for Life</h4>
                    <span
                      >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias nemo nihil iste impedit magni in maiores eos accusamus amet ducimus. Libero, quibusdam optio consequuntur at obcaecati dolor dignissimos! Praesentium
                      harum nobis quibusdam vero, ex voluptatem assumenda quam maiores ipsam nemo consequatur pariatur et magnam nihil perferendis ab inventore nam dignissimos...</span
                    >
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                  </div>
                </div> --}}
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="300">
                <a href="/films/{{ $films[2]->slug }}"> 
                  <img src="{{ asset('storage/' . $films[2]->image) }}" class="img-fluid" alt="" />
                </a>
                {{-- <div class="member-info">
                  <div class="member-info-content">
                    <h4>The Avengers</h4>
                    <span
                      >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis iste sequi repellendus sunt? Autem sequi dolor delectus illo aut, deserunt minus iure aliquid, praesentium vitae quos earum impedit dolorem fugiat
                      expedita tenetur? Ex ea omnis accusamus officiis modi! Quae tenetur blanditiis eius explicabo adipisci, iusto nostrum ipsa ea minima porro...</span
                    >
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                  </div>
                </div> --}}
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="300">
                <a href="/films/{{ $films[3]->slug }}"> 
                  <img src="{{ asset('storage/' . $films[3]->image) }}" class="img-fluid" alt="" />
                </a>
                {{-- <div class="member-info">
                  <div class="member-info-content">
                    <h4>Dua Garis Biru</h4>
                    <span
                      >Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis adipisci est porro amet! Fugit atque quos unde distinctio tempore officia facere, deleniti temporibus est tenetur adipisci et optio provident quam iusto
                      fugiat pariatur numquam veritatis, repudiandae placeat! Ea eos voluptate exercitationem officiis doloribus minus, fugit nam placeat dolor ex nulla...</span
                    >
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                  </div>
                </div> --}}
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="300">
                <a href="/films/{{ $films[4]->slug }}"> 
                  <img src="{{ asset('storage/' . $films[4]->image) }}" class="img-fluid" alt="" />
                </a>
                {{-- <div class="member-info">
                  <div class="member-info-content">
                    <h4>The Perfect Husband</h4>
                    <span
                      >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis perferendis exercitationem minus iste, maiores amet repellat asperiores quam modi sapiente quos, maxime repellendus itaque, voluptate molestiae deleniti
                      ad sequi blanditiis sint fuga fugiat corrupti odio dolorum! Cupiditate, vel. Autem molestias vero vel, ducimus distinctio nihil nam sint. Excepturi, ex provident...</span
                    >
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                  </div>
                </div> --}}
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="300">
                <a href="/films/{{ $films[5]->slug }}"> 
                <img src="{{ asset('storage/' . $films[5]->image) }}" class="img-fluid" alt="" />
              </a>
                {{-- <div class="member-info">
                  <div class="member-info-content">
                    <h4>Brave</h4>
                    <span
                      >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, excepturi aperiam quod dolorum, hic, natus ipsam vitae pariatur soluta cumque facilis repellendus corporis perferendis! Minus similique, officiis
                      veritatis rem nostrum illo, magni magnam nisi ullam amet nam dolorem asperiores unde voluptatum facere consequuntur? Iusto fuga autem, dolorem maiores temporibus et...</span
                    >
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                  </div>
                </div> --}}
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="300">
                <a href="/films/{{ $films[6]->slug }}"> 
                <img src="{{ asset('storage/' . $films[6]->image) }}" class="img-fluid" alt="" />
              </a>
                {{-- <div class="member-info">
                  <div class="member-info-content">
                    <h4>Frozen II</h4>
                    <span
                      >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus corporis voluptate maxime, quo cum reprehenderit illo eos id minima in illum error reiciendis eum itaque nesciunt, doloremque excepturi rem! Quasi
                      amet excepturi illum unde non? Minus modi ea, dolores placeat provident, pariatur rem nihil quos illum fuga, rerum doloremque id...</span
                    >
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                  </div>
                </div> --}}
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="300">
                <a href="/films/{{ $films[7]->slug }}"> 
                <img src="{{ asset('storage/' . $films[7]->image) }}" class="img-fluid" alt="" />
              </a>
                {{-- <div class="member-info">
                  <div class="member-info-content">
                    <h4>Up</h4>
                    <span
                      >Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nisi sunt ullam, dolorem iste deserunt quos autem repudiandae quisquam aliquam saepe nihil ad, atque eius, iure cum assumenda. Facilis itaque quidem
                      optio est possimus quod, distinctio deleniti quos beatae saepe totam similique fugiat culpa assumenda tenetur aspernatur? Molestiae, optio quaerat...</span
                    >
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                  </div>
                </div> --}}
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="300">
                <a href="/films/{{ $films[8]->slug }}"> 
                <img src="{{ asset('storage/' . $films[8]->image) }}" class="img-fluid" alt="" />
              </a>
                {{-- <div class="member-info">
                  <div class="member-info-content">
                    <h4>The Croods</h4>
                    <span
                      >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident vel, voluptatibus laudantium quis quam cum aspernatur dolore expedita natus tempore? Doloremque ipsum provident recusandae nulla accusantium pariatur
                      numquam. Modi voluptates sed ab earum quasi, aliquam quibusdam minus ratione fuga blanditiis quo ipsa facilis cumque dolorem omnis non consequatur veritatis tenetur...</span
                    >
                  </div>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                  </div>
                </div> --}}
              </div>
            </div>
          </div>

          <div class="text-center">
            <a href="/films">
          
              <button type="submit">Lihat lebih banyak</button></div>
          </a>
        </div>
      </section>
      <!-- End Rekomendasi Populer Section -->

      <!-- ======= Specials MIFILM Section ======= -->
      <section id="specials" class="specials">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Hi Everyone ?</h2>
            <p>Tanya MIFILM</p>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Apa itu MIFILM ?</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-2">MIFILM harus berlangganan ?</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Di mana saya dapat buka MIFILM ?</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Manfaat buka MIFILM ?</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-5">MIFILM tersedia cerita untuk anak-anak ?</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
              <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>MIFILM ?</h3>
                      <p class="fst-italic">Website berisi informasi-informasi film</p>
                      <p>
                        MIFILM adalah layanan yang menawarkan berbagai informasi dari film, anime, dokumenter, dan banyak lagi di ribuan perangkat yang terhubung ke Internet. Kamu bisa membaca sepuasnya, kapan pun kamu mau, tanpa satu
                        iklan pun. Selalu ada bacaan baru dan film baru yang ditambahkan setiap minggu!
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/tab1_mifilm.jpg" alt="" class="img-fluid" />
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-2">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Berbayar ?</h3>
                      <p class="fst-italic">MIFILM tidak berbayar</p>
                      <p>MIFILM hanya ingin membagikan sekadar informasi dari berbagai film yang ada dengan harapan pengunjung website mendapatkan film yang disukai sebelum menonton.</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/tab2_money.jpg" alt="" class="img-fluid" />
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-3">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Buka MIFILM ?</h3>
                      <p class="fst-italic">Tentu dapat dimana saja.</p>
                      <p>
                        Baca dan cari tahu di mana pun, kapan pun. Masuk ke akun MIFILM-mu untuk membaca dan mencari langsung film yang kamu ingin nonton di mifilm.com dari komputer pribadi atau di perangkat yang terhubung ke Internet dan
                        mendukung aplikasi MIFILM, termasuk smartphone, tablet. Kamu juga bisa men-download bacaan cerita yang sudah kamu tentuka akan menontonnya dengan aplikasi iOS, Android, atau Windows 10. Gunakan download untuk baca
                        saat kamu di perjalanan dan tidak punya koneksi Internet. Bawa MFILM ke mana saja.
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/tab3_everywhere.jpg" alt="" class="img-fluid" />
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-4">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Untuk apa lihat MIFILM ?</h3>
                      <p class="fst-italic">Referensi Film yang terbaru dan recommended</p>
                      <p>MIFILM memiliki pustaka lengkap yang berisi cerita film panjang, film dokumenter, acara TV, anime dan lebih banyak lagi. Baca dan cari film sepuasnya, kapan pun kamu mau.</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/tab4_manfaat.jpg" alt="" class="img-fluid" />
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-5">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>MIFILM untuk anak-anak ?</h3>
                      <p class="fst-italic">Tentu saja bukan.</p>
                      <p>
                        MIFILM berisi informasi-informasi mengenai berbagai film baik itu film untuk setiap kalangan, termasuk dewasa, remaja bahkan anak-anak. Oleh karena itu, orangtua lah yang hendak menggunakan MIFILM untuk mencari film
                        yang cocok untuk umur anak.
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/tab5_child.jpg" alt="" class="img-fluid" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Specials MIFILM Section -->

      <!-- ======= Events Section Event 3 Film ======= -->
      <section id="events" class="events">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>It's to you MIFILMers</h2>
            <p>3 Film Recommended Bulan ini</p>
          </div>

          <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="col-lg-6 text-center">
                    <a href="/films/{{ $films[0]->slug }}">
                    <img src="{{ asset('storage/' . $films[0]->image) }}" class="img-fluid" alt="" style="height: 400px"/>
                   </a>
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>{{ $films[0]->title }}</h3>
                     
                    <p class="fst-italic">{{ $films[0]->excerpt }}</p>
                    
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="col-lg-6 text-center">
                    <a href="/films/{{ $films[1]->slug }}">
                    <img src="{{ asset('storage/' . $films[1]->image) }}" class="img-fluid" alt="" style="height: 400px"/>
                  </a>
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>{{ $films[1]->title }}</h3>
                    <p class="fst-italic">{{ $films[1]->excerpt }}</p>
                   
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="col-lg-6 text-center">
                    <a href="/films/{{ $films[1]->slug }}">
                    <img src="{{ asset('storage/' . $films[2]->image) }}" class="img-fluid" alt="" style="height: 400px"/>
                    </a>
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>{{ $films[2]->title }}</h3>
                    <p class="fst-italic">{{ $films[2]->excerpt }}</p>
              
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
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
        <div class="credits">Designed by <a href="/aboutus">Kelompok8_Pawbe</a></div>
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
