<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pemesanan Konfeksi')</title>
    <!-- Link ke file CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Link ke file CSS Bootstrap (jika ada) -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    @include('template.header')

    <div class="container">
        @yield('content')
    </div>

    @include('template.footer')

    <!-- Script file JS -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!-- Script file JS Bootstrap (jika ada) -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
