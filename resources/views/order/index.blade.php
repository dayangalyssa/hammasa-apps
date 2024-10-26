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

  <div class="container">
    <a href="{{ route('home.index') }}" class="back-button">
        <i class="bi bi-arrow-left">Kembali</i>
    </a>
</div>

<body>
  <!-- ======= Main Section ======= -->
  <main id="main-form-order">
    <!-- Order Section -->
    <section id="section-order-form">
      <div class="div-form" data-aos="fade-up">
        <div class="section-title center-text">
          <br>
          <p>Form Pemesanan</p>
          
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6">
          <form action="{{ route('order.store') }}" method="POST">
            @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Nama" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No. Telepon" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="alamat" id="alamat" rows="5" placeholder="Alamat" required></textarea>
              </div>
              <div class="form-group mt-3">
                <input type="number" class="form-control" id="kuantitas" name="kuantitas" placeholder="Kuantitas" required min="1">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="catatan" id="catatan" rows="5" placeholder="Catatan" required></textarea>
              </div>
              <div class="form-group mt-3">
              <label for="tipe_baju" style="font-size: 12px; margin-bottom: 10px; text-align: left;  display: block; width: 100%;">Tipe Baju:</label>
              <select name="tipe_baju" id="tipe_baju" class="form-control" required>
                <option value="kaos">Kaos</option>
                <option value="kemeja">Kemeja</option>
                <option value="seragam">Seragam</option>
                <option value="almamater">Almamater</option>
                <option value="pdh">PDH</option>
                <option value="jaket">Jaket</option>
                <option value="jaket_varsity">Jaket Varsity</option>
                <option value="topi">Topi</option>
              </select>
              </div>
              <div class="form-group mt-3">
              
              <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Pesan</button>
              </div>
              <br>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Form -->

  </main><!-- End #main -->
</body>
</html>

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