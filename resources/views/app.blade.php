<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Phuket Little Tour | รถตู้เช่าภูเก็ต พร้อมคนขับ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="รถตู้เช่าภูเก็ต, เช่ารถตู้พร้อมคนขับ, รถตู้ VIP ภูเก็ต, Phuket van rental, ทัวร์ส่วนตัวภูเก็ต, ท่องเที่ยวภูเก็ต">
    <meta name="description" content="Phuket Little Tour บริการรถตู้เช่าภูเก็ต VIP พร้อมคนขับ บริการเป็นกันเอง ปลอดภัย ราคายุติธรรม จองง่าย เที่ยวได้ทั่วภูเก็ตและใกล้เคียง">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}" />

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css') }}" />
    <link href="{{  asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="container">
    <!-- Top Bar -->
    <div class="top-bar py-2">
        <div class="container d-flex flex-column flex-lg-row justify-content-between align-items-center">
            <!-- Left: Contact -->
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="#" class="me-3">
                    <i class="fas fa-map-marker-alt text-primary me-1"></i> ตำแหน่งที่ตั้ง
                </a>
                <a href="mailto:Zee17094@gmail.com" class="me-3">
                    <i class="fas fa-envelope text-primary me-1"></i> Zee170940@gmail.com
                </a>
                <a href="tel:0624829114">
                    <i class="fas fa-phone text-primary me-1"></i> 062-482-9114
                </a>
            </div>

            <!-- Right: Social + Language -->
            <div class="d-flex align-items-center justify-content-center justify-content-lg-end mt-2 mt-lg-0">
                <div class="social-icons border-end pe-3">
                    <a href="https://web.facebook.com/profile.php?id=100094720734879" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="line://ti/p/@953tmupy"><i class="fab fa-line"></i></a>
                    <a href="https://wa.me/66981028904" target="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
                <div class="dropdown ms-3">
                    <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown">
                        <small><i class="fas fa-globe-europe text-primary me-1"></i> ไทย</small>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">ไทย</a>
                        <a class="dropdown-item" href="#">English (Under Development)</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top shadow-sm py-3">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('home.view') }}">
                <img src="{{ asset('img/logo.png') }}" alt="phuketlittletour">
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item {{ Route::is('home.view') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home.view') }}">หน้าหลัก</a>
                    </li>
                    <li class="nav-item {{ Route::is('about.view') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('about.view') }}">เกี่ยวกับเรา</a>
                    </li>
                    <li class="nav-item {{ Route::is('review.view') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('review.view') }}">รีวิวลูกค้า</a>
                    </li>
                    <li class="nav-item {{ Route::is('contact.view') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contact.view') }}">ติดต่อเรา</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-end mb-md-0">
                    <span class="text-body"><a href="{{ route('home.view') }}" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Phuket Little Tour</a>, All right reserved.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js')}}"></script>


    @yield('scripts')

</body>

</html>