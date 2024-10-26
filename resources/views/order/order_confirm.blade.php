<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<!--  <link rel="stylesheet" href="/resources/views/Css/general.css"> -->
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

</head>
<header id="header"class="header-class" class="fixed-top">
    <!-- Back Button -->
    <div class="container">
      <a href="{{ route('home.index') }}" class="btn btn-primary">Kembali</a>
    </div>
  </header><!-- End Header -->
<body>


  <!-- ======= Main Section ======= -->
  <main id="main">
    <div class="container mt-5">
      <div class="card text-center">
        <div class="card-body">
          <br>
          <div class="card-body">
            <h1 >Pesanan Anda akan diproses</h1>
            <p>Terima kasih telah memesan jasa kami! Dimohon untuk segera menghubungi admin kami untuk konfirmasi.<br>
            Silahkan salin kode ini untuk memeriksa status pesanan anda:  <span id="order-code" style="cursor: pointer;">{{ $order->order_code }}</span></p>
            <br><br>
            <a href="https://wa.me/+6281803214499?text=Order%20Code:%20{{ $order->order_code }}" target="_blank" class="btn btn-custom">Hubungi Kami di WhatsApp</a>
          </div>
        </div>
      </div>
    </div>
  </main><!-- End #main -->
  </body>
  <!-- ======= Footer ======= -->
  <footer id="footer"  style="margin-top: 150px;">
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
  <script src="resources/js/confirm.js"></script>


</html>
