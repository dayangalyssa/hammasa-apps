<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CV. Hammasa Prima Abadi</title>
  <link rel="icon" href="https://cdn.builder.io/api/v1/image/assets%2Fe1b0f1af05bf402d8f412ea632827f3f%2Fec104d47b33748eb8705a6bc0c221398" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

  <!-- JavaScript -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var cekPesananButton = document.getElementById("cekPesananButton");
      var cekPesananForm = document.getElementById("cekPesananForm");

      cekPesananButton.addEventListener("click", function() {
        if (cekPesananForm.style.display === "none") {
          cekPesananForm.style.display = "block";
        } else {
          cekPesananForm.style.display = "none";
        }
      });
    });
  </script>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
    <a class="logo img"><img src="https://cdn.builder.io/api/v1/image/assets%2Fe1b0f1af05bf402d8f412ea632827f3f%2Fec104d47b33748eb8705a6bc0c221398"></a>
    <h1 class="logo">CV. Hammasa Prima Abadi</h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Katalog</a></li>
          <li>
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#cekPesananForm">
  Cek Pesanan
  </a>
          </li>
          <li><a class="getstarted scrollto" href="{{ route('order.index') }}">Pesan Sekarang!</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url('https://cdn.builder.io/api/v1/image/assets%2Fe1b0f1af05bf402d8f412ea632827f3f%2Fa0a5f2e60654422ca50846e45e4b484f');">
        <div class="carousel-container">
          <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>CV. Hammasa Prima Abadi</span></h2>
              <p class="animate__animated animate__fadeInUp">CV Hammasa Prima Abadi mulai merintis usahanya sejak tahun 2005 dengan mengerjakan berbagai macam pesanan dari berbagai macam instansi maupun perorangan. Berbagai macam produk konfeksi telah diciptakan seperti seragam pabrik, sekolah , kantor, jaket, kaos, rompi, topi, dan lain-lain.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url('https://cdn.builder.io/api/v1/image/assets%2Fe1b0f1af05bf402d8f412ea632827f3f%2F5fbf55ee8de14b2d9a4efe595883fbb4')">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Pemesanan yang Mudah</h2>
              <p class="animate__animated animate__fadeInUp">Kami menyediakan sistem pemesanan yang mudah dan cepat. Dalam beberapa langkah, pesanan Anda langsung diproses oleh tim kami.</p>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url('https://cdn.builder.io/api/v1/image/assets%2Fe1b0f1af05bf402d8f412ea632827f3f%2F301d377b71e64ff3a13d76296c6304de')">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"><em>Update</em> Pemesanan Secara Berkala</h2>
              <p class="animate__animated animate__fadeInUp">Website CV. Hammasa Prima Abadi memberikan <em>update real-time</em> pada setiap tahap pesanan Anda. Mulai dari konfirmasi hingga pengiriman, Anda akan selalu mendapat informasi terbaru secara akurat dan transparan.</p>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">
    
  <!--- ===Cek pesanan form==== -->
  
  <div class="modal fade" id="cekPesananForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cek Pesanan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="{{ route('order.status') }}" method="GET" class="form-inline">
              <input type="text" name="order_code" class="form-control form-control-sm btn-sumbit" placeholder="Masukkan Kode Pesanan!" required>
              </div>
      <div class="modal-footer">
      <button id="cekPesananButton" type="submit" class="btn btn-primary btn-sm">Cek</button>
      </div>
            </form>
    </div>
  </div>
</div>


    <!-- ======= Tentang Kami Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang</h2>
          <p>Tentang Kami</p>
        </div>

        <div class="row content">
          <div class="">
            <p>
            <strong>Visi</strong> <br>
            Menjadi perusahaan berstandar nasional dengan fokus utama pada memberikan pelayanan terbaik kepada konsumen baik dalam jaminan kualitas, ketepatan waktu dan harga yang bersaing.<br>
            <br><strong>Misi</strong>
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Memberikan layanan unggulan dengan fokus pada kualitas produk, keakuratan pengiriman, dan harga yang kompetitif.</li>
              <li><i class="ri-check-double-line"></i> Mengembangkan dan mendukung tim kerja yang profesional untuk mencapai visi perusahaan.</li>
              <li><i class="ri-check-double-line"></i> Menjamin ketersediaan peralatan produksi untuk operasional yang efisien.</li>
              <li><i class="ri-check-double-line"></i> Meningkatkan standar operasional dan kualitas produk melalui inovasi terus-menerus.</li>
              <li><i class="ri-check-double-line"></i> Komitmen penuh untuk memenuhi kebutuhan pelanggan dan membangun hubungan yang saling menguntungkan.</li>
            </ul>
            <p>
            <strong>Tujuan</strong><br>
            Menjadi perusahaan konfeksi dengan layanan unggulan yang didasarkan pada kualitas, ketepatan waktu, dan harga yang bersaing.
            </p>
            <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Katalog Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Katalog</h2>
          <p>Lihat Katalog Kami</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-atasan">Atasan</li>
              <li data-filter=".filter-seragam">Seragam</li>
              <li data-filter=".filter-aksesoris">Aksesoris</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-atasan">
            <img src="https://cdn.builder.io/api/v1/image/assets%2Fe1b0f1af05bf402d8f412ea632827f3f%2Fdcb9f01a573842e2be02d81889828efc" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Kemeja Kerja 1</h4>
              <p>Rp 120.000,-</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-seragam">
            <img src="https://cdn.builder.io/api/v1/image/assets%2Fe1b0f1af05bf402d8f412ea632827f3f%2F1dc6ff70c9db44cf80e0f98ed4157542" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Seragam Sekolah Anak Laki-Laki</h4>
              <p>Rp 120.000,-</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-atasan">
            <img src="https://cdn.builder.io/api/v1/image/assets%2Fe1b0f1af05bf402d8f412ea632827f3f%2F52a8a44b8730453a9591c1ea2732424b" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Rompi</h4>
              <p>Rp 100.000,-</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-atasan">
            <img src="https://cdn.builder.io/api/v1/image/assets%2Fe1b0f1af05bf402d8f412ea632827f3f%2Fee78e2eab47849d8a8f8efa855aa5efc" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Kemeja Kerja 2</h4>
              <p>Rp. 130.000,-</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-seragam">
            <img src="https://cdn.builder.io/api/v1/image/assets%2Fe1b0f1af05bf402d8f412ea632827f3f%2Facc4046fece54909915576b29cebd1d4" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Seragam Sekolah Anak Laki-Laki</h4>
              <p>Rp 120.000,-</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-seragam">
            <img src="https://cdn.builder.io/api/v1/image/assets%2Fe1b0f1af05bf402d8f412ea632827f3f%2Ff097ec8908b04e64a5ebac4bd9605164" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Seragam Sekolah Anak Perempuan</h4>
              <p>Rp 150.000,-</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-atasan">
            <img src="https://cdn.builder.io/api/v1/image/assets%2Fe1b0f1af05bf402d8f412ea632827f3f%2F5c927093590c4d50b4483d4b4fd1eafe" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jaket</h4>
              <p>Rp 130.000,-</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-aksesoris">
            <img src="https://cdn.builder.io/api/v1/image/assets%2Fe1b0f1af05bf402d8f412ea632827f3f%2F74978b20623c4130837782b60afd4c0c" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Topi Sekolah</h4>
              <p>Rp 20.000,-</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-aksesoris">
            <img src="https://cdn.builder.io/api/v1/image/assets%2Fe1b0f1af05bf402d8f412ea632827f3f%2F0e9d9ea9555b43a28daefd766b8a7b66" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Dasi</h4>
              <p>Rp 10.000,-</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-md-12">
            <div class="footer-info">
                <h3>CV. Hammasa Prima Abadi</h3>
                <p class="pb-3"><em>Kualitas Prima, Tepat Waktu, Harga Terjangkau</em></p>
                <p>
                    Perumahan Bumi Suko Indah DD16 dan CC47 <br>
                    Suko, Sidoarjo, Jawa Timur<br><br>
                    <strong>Phone:</strong> +62 818 0321 4499<br>
                    <strong>Email:</strong> hammasacollection@yahoo.com<br>
                </p>
                <div class="social-links mt-3">
                    <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                </div>
            </div>
        </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CV. Hammasa Prima Abadi</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by Kelompok 7 A+</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>