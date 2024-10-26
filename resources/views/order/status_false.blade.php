<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CV. Hammasa Prima Abadi</title>

  <link rel="icon" href="https://cdn.builder.io/api/v1/image/assets%2Fe1b0f1af05bf402d8f412ea632827f3f%2Fec104d47b33748eb8705a6bc0c221398" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

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
  </script>

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <!-- Back Button -->
    <div class="container">
      <a href="{{ route('home.index') }}" class="btn btn-primary">Kembali</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Main Section ======= -->
  <main id="main">
    <br>
    <div class="container mt-5 container-extended">
    <h1 class="status-pesanan">Status Pesanan</h1>
      <div class="alert alert-danger">
        Kode pesanan tidak ditemukan.
      </div>
      <div class="additional-message">
       <p> Mohon maaf kode yang anda masukkan tidak valid. <br> Mohon untuk segera lakukan pemesanan untuk mendapatkan kode pesanan atau hubungi admin kami!
</p>
    </div>
    </div>
    <br>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="margin-top: 150px;">>
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
        Designed by Kelompok 7 A+
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
