<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pembayaran SPP</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="{{ asset('/') }}front/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('/') }}front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}front/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('/') }}front/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}front/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}front/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('/') }}front/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="{{ asset('/') }}front/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="/siswa"><img src="{{ asset('/') }}images/logo.png" alt="" style="max-width: 50px"><span class="ms-3">Pembayaran SPP</span></a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li>
                        <a class="nav-link scrollto @if(Route::is('viewSiswa')) active @endif" href="/siswa">Home</a></li>
                    <li>
                        <a class="nav-link @if(Route::is('profile')) active @endif" href="/siswa/profile/{{ Auth::user()->id }}">Profil Saya</a>
                    </li>
                    <li class="mx-4">
                        <div>
                            <span>Welcome, </span><span class="fw-bold">{{ Auth::user()->name }}</span>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link"title="Sign Out" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="btn btn-secondary">Logout</span></a>
                    </li>
            
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>
    
    @yield('content')
  
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <img src="{{ asset('/') }}images/logo.png" alt="" style="max-width: 100px">
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Pembayaran SPP</h3>
                        <p>
                            Website Ini Dibuat<br>
                            Untuk UKK SMK N 1 Bantul<br>
                            <strong>SRI CAHYA PUTRA</strong>
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Pembayaran Spp</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    by <a href="https://instagram.com/_yoxsz">Cahya Putra</a>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/') }}front/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('/') }}front/vendor/aos/aos.js"></script>
    <script src="{{ asset('/') }}front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}front/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('/') }}front/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('/') }}front/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('/') }}front/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/') }}front/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>
