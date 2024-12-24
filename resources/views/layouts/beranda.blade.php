<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dokumentasi Tugas Akhir</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/UIN.png" rel="icon">
  <link href="/assets/img/UIN.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  {{-- icon --}}
  <script src="https://kit.fontawesome.com/ab5b63a1cc.js" crossorigin="anonymous"></script>

  {{-- select2 --}}
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  
  {{-- ribbon card --}}
  <style>
    .ribbon {
      position: absolute;
      top: -3px; /* Posisi dari atas */
      right: -3px; /* Posisi dari kanan (negatif untuk menyembunyikan sebagian) */
      z-index: 2; /* Pastikan pita selalu di atas elemen lain */
      overflow: hidden;
      width: 120px; /* Lebar pita */
      height: 120px; /* Tinggi pita */
      text-align: center;
    }

    .ribbon span {
      font-size: 14px;
      font-weight: bold;
      color: white;
      text-transform: uppercase;
      text-align: center;
      line-height: 20px;
      transform: rotate(45deg); /* Rotasi untuk pita di kanan */
      -webkit-transform: rotate(45deg);
      width: 160px;
      display: block;
      background: #00DFAA; /* Warna pita */
      box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
      position: absolute;
      top: 38px; /* Posisi teks dari atas */
      right: -40px; /* Posisi teks dari kanan (negatif untuk menyembunyikan sebagian) */
    }
    .card {
      position: relative; /* Agar pita bisa diposisikan absolut */
      border: none; /* Hilangkan border bawaan card */
    }
    
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <img src="/assets/img/UIN.png" alt="">
        <span>DOKUMENTASI TUGAS AKHIR</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
          <li><a class="nav-link" href="{{ url('/panduan') }}">Panduan</a></li>
          <li><a class="nav-link" href="{{ url('/contact') }}">Kontak</a></li>
          <!-- <li><a class="getstarted" href="/login">Masuk dan Daftar</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1>Pencarian</h1>
          <h2>Universitas Islam Negeri Ar-Raniry Banda Aceh</h2>
          <h2>Fakultas Sains dan Teknologi</h2>
          <h2>Prodi Teknologi Informasi</h2>
          <form action="{{ route('index') }}">
            <div class="form-group">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Pencarian Berdasarkan judul, penulis dan kata kunci ..." name="search">
                <button type="submit" class="input-group-text btn btn-primary btn-lg fw-bolder" id="basic-addon1">Pencarian</button>
              </div>
            </div>
          </form>
        </div>
    </div>

  </section><!-- End Hero -->

  <main id="main" class="text-dark">
    <!-- ======= About Section ======= -->

    @yield('main-content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer" style="background-color: #051D4D">

    <div class="footer-top" style="background-color: #051D4D">
      <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
          <div class="col-lg-5 col-md-12 footer-info text-light">
            <h4>Hubungi Kami</h4>
            <hr class="border">
            <p>
              Jln. Syeikh Abdul Rauf Kopelma Darussalam<br>
              Banda Aceh, 23111<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +651-7557321, +651-7557317<br>
              <strong>Email:</strong> fst.ti@ar-raniry.ac.id<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>

          <div class="col-lg-5 col-6 footer-links">
            <h4>Links Terkait</h4>
            <hr class="border">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">- - -</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">- - -</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">- - -</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">- - -</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">- - -</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>2024</span></strong>. Prodi Teknologi Informasi
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="#">--</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

  {{-- jquery --}}
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

  {{-- select2 --}}
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>
    $(document).ready(function() {
        $('.tahun_terbit').select2();
    });

    $('body').on('click', '#btn-download', function () {
        //open modal
        $('#modal-download').modal('show');
    });

  </script>
  @yield('script')

</body>

</html>