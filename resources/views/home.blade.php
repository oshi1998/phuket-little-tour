<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Phuket Little Tour | รถตู้เช่าภูเก็ต พร้อมคนขับ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="รถตู้เช่าภูเก็ต, เช่ารถตู้พร้อมคนขับ, รถตู้ VIP ภูเก็ต, Phuket van rental, ทัวร์ส่วนตัวภูเก็ต, ท่องเที่ยวภูเก็ต">
    <meta name="description" content="Phuket Little Tour บริการรถตู้เช่าภูเก็ต VIP พร้อมคนขับ บริการเป็นกันเอง ปลอดภัย ราคายุติธรรม จองง่าย เที่ยวได้ทั่วภูเก็ตและใกล้เคียง">
    <link rel="icon" href="{{ asset('img/van.png') }}" type="image/png">

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

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">กำลังโหลด...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block">
        <div class="container">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <div class="border-end border-primary pe-3">
                            <a href="#" class="text-muted small"><i class="fas fa-map-marker-alt text-primary me-2"></i>ตำแหน่งที่ตั้ง</a>
                        </div>
                        <div class="ps-3">
                            <a href="mailto:Zee17094@gmail.com" class="text-muted small"><i class="fas fa-envelope text-primary me-2"></i>Zee170940@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex justify-content-end">
                        <div class="d-flex border-end border-primary pe-3">
                            <a class="btn p-0 text-primary me-3" target="_blank" href="https://web.facebook.com/profile.php?id=100094720734879"><i class="fab fa-facebook-f"></i></a>
                            <!-- <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn p-0 text-primary me-0" href="#"><i class="fab fa-linkedin-in"></i></a> -->
                        </div>
                        <div class="dropdown ms-3">
                            <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i class="fas fa-globe-europe text-primary me-2"></i> ไทย</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="#" class="dropdown-item">ไทย</a>
                                <!-- <a href="#" class="dropdown-item">English</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="#" class="navbar-brand p-0">
                    <h1 class="text-primary mb-0"><img src="{{ asset('img/van.png') }}" alt=""> Phuket Little Tour</h1>
                </a>
                <small class="ms-3 fw-semibold text-dark">
                    ยินดีต้อนรับสู่ Phuket Little Tour ทุกวินาทีที่เข้ามา คุณจะได้รับแต่ความสุข ความรัก ความสดใส
                </small>
                <div class="d-flex flex-shrink-0 ps-4">
                    <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada" data-wow-delay=".9s">
                        <i class="fa fa-phone-alt fa-2x"></i>
                        <div class="position-absolute" style="top: 7px; right: 12px;">
                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                        </div>
                    </a>
                    <div class="d-flex flex-column ms-3">
                        <span>ติดต่อสอบถาม</span>
                        <span class="text-dark">Call: <a href="tel:062 482 9114">062 482 9114</a></span>
                        <span class="text-dark">Line: Zee276</span>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item bg-info">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h1 class="display-1 text-white mb-4">เช่ารถตู้ภูเก็ต VIP พร้อมคนขับ</h1>
                                <p class="mb-5 fs-5">
                                    สะดวก ปลอดภัย บริการด้วยใจ เราพาคุณเที่ยวรอบเกาะภูเก็ตในแบบที่คุณเลือกได้เอง
                                </p>
                                <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="https://web.facebook.com/profile.php?id=100094720734879&sk=videos" target="_blank"><i class="fas fa-play-circle me-2"></i> ดูวิดีโอบริการ</a>
                                    <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="tel:062 482 9114"> <i class="fas fa-phone"></i> 062 482 9114</a>
                                    <a class="btn btn-success rounded-pill py-3 px-4 px-md-5 ms-2" href="#"><i class="fa-brands fa-line"></i> Zee276</a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-5 animated fadeInRight">
                            <div class="calrousel-img" style="object-fit: cover;">
                                <img src="{{ asset('img/carousel-1.jpg') }}" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item bg-info">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                        <div class="col-lg-5 animated fadeInLeft">
                            <div class="calrousel-img">
                                <img src="{{ asset('img/carousel-1.jpg') }}" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 animated fadeInRight">
                            <div class="text-sm-center text-md-end">
                                <h1 class="display-1 text-white mb-4">บริการระดับมืออาชีพ</h1>
                                <p class="mb-5 fs-5">
                                    คนขับประสบการณ์สูง บริการสุภาพ พร้อมแนะนำสถานที่ท่องเที่ยวแบบคนในพื้นที่ให้คุณ
                                </p>
                                <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                    <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="tel:062 482 9114"> <i class="fas fa-phone"></i> 062 482 9114</a>
                                    <a class="btn btn-success rounded-pill py-3 px-4 px-md-5 ms-2" href="#"><i class="fa-brands fa-line"></i> Zee276</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Feature Start -->
    <div class="container-fluid feature bg-white py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s">
                <h4 class="text-primary">จุดเด่นของเรา</h4>
                <h1 class="display-4 mb-4">บริการรถตู้ภูเก็ต ที่คุณวางใจได้</h1>
                <p class="mb-0">
                    เราใส่ใจทุกการเดินทางของคุณ ด้วยรถตู้ VIP สะอาด ปลอดภัย คนขับมืออาชีพ พร้อมดูแลคุณตลอดทริปในแบบที่คุณเลือกเองได้
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon text-success p-4 mb-4">
                            <i class="fas fa-shuttle-van fa-3x"></i>
                        </div>
                        <h4 class="mb-4">รถตู้ใหม่ สะอาดทุกคัน</h4>
                        <p class="mb-4">
                            รถตู้ VIP แอร์เย็น เบาะกว้าง ทำความสะอาดก่อน-หลังทุกทริป เดินทางได้อย่างมั่นใจทุกเส้นทาง
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon text-primary p-4 mb-4">
                            <i class="fas fa-user-tie fa-3x"></i>
                        </div>
                        <h4 class="mb-4">คนขับเป็นกันเอง ประสบการณ์สูง</h4>
                        <p class="mb-4">
                            รู้จักเส้นทางในภูเก็ตและใกล้เคียง พร้อมแนะนำสถานที่ท่องเที่ยวแบบคนในพื้นที่ ให้คุณได้ทุกเมื่อ
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s" style="max-height: 100px;">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon text-warning p-4 mb-4">
                            <i class="fas fa-route fa-3x"></i>
                        </div>
                        <h4 class="mb-4">วางแผนเส้นทางได้เอง</h4>
                        <p class="mb-4">
                            อยากไปจุดชมวิว คาเฟ่ ตลาด หรือหาด แจ้งเราได้เลย ปรับแผนเที่ยวได้ตามใจคุณ ไม่ต้องยึดตามโปรแกรม
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon text-info p-4 mb-4">
                            <i class="fa fa-headphones fa-3x"></i>
                        </div>
                        <h4 class="mb-4">ติดต่อสะดวก 24 ชั่วโมง</h4>
                        <p class="mb-4">
                            ไม่ว่าจะจองรถ หรือสอบถามข้อมูล เราพร้อมให้บริการผ่านโทรศัพท์ ไลน์ หรือ Facebook ได้ตลอดทั้งวัน
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Service Start -->
    <div class="container-fluid service bg-white py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">บริการของเรา</h4>
                <h1 class="display-4 mb-4">ให้บริการเพื่อการเดินทางของคุณ</h1>
                <p class="mb-0">เราพร้อมอำนวยความสะดวกในการเดินทางของคุณ ทั้งรับส่งสนามบิน เช่าเหมารถ และบริการอื่น ๆ ที่คุณต้องการ</p>
            </div>
            <div class="row g-4 justify-content-center">

                <!-- บริการ: รับส่งสนามบิน -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/airplane.png') }}" class="img-fluid rounded-top w-100" alt="Airport Transfer">
                            <div class="service-icon p-3">
                                <i class="fa fa-plane fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">รับส่งสนามบิน</a>
                                <p class="mb-4">บริการรับ-ส่งสนามบินตรงเวลา สะดวกสบาย พร้อมคนขับมืออาชีพ</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- บริการ: เช่าเหมารถ -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/driver.png') }}" class="img-fluid rounded-top w-100" alt="Car Rental">
                            <div class="service-icon p-3">
                                <i class="fa fa-van-shuttle fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">เช่าเหมารถพร้อมคนขับ</a>
                                <p class="mb-4">บริการเช่ารถแบบส่วนตัว คนขับสุภาพ รู้เส้นทาง ปลอดภัยทุกเส้นทาง</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- บริการ: ไกด์ทัวร์ -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/guide.png') }}" class="img-fluid rounded-top w-100" alt="Tour Guide">
                            <div class="service-icon p-3">
                                <i class="fa fa-map-signs fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">ไกด์ทัวร์ส่วนตัว</a>
                                <p class="mb-4">ท่องเที่ยวอย่างมั่นใจ มีไกด์ท้องถิ่นแนะนำสถานที่และวัฒนธรรม</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- บริการ: จองโรงแรม -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('img/hotel.png') }}" class="img-fluid rounded-top w-100" alt="Hotel Booking">
                            <div class="service-icon p-3">
                                <i class="fa fa-bed fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">จองโรงแรม</a>
                                <p class="mb-4">บริการแนะนำที่พัก และจองโรงแรมคุณภาพดี ราคาพิเศษ</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">บรรยากาศจากทริป</h4>
                <h1 class="display-4 mb-4">ลูกค้าเดินทางกับเราประทับใจ</h1>
                <p class="mb-0">
                    ขอบคุณลูกค้าทุกท่านที่ไว้ใจ Phuket Little Tour นี่คือตัวอย่างบางส่วนจากทริปที่เราได้ให้บริการ ทั้งเที่ยวครอบครัว กลุ่มเพื่อน และงานอีเวนต์
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                @php
                $delay = 0.2;
                @endphp
                @foreach($tripGallery as $gallery)
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="{{ $delay }}s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ $gallery }}" class="img-fluid trip-img-fixed rounded-top w-100">
                        </div>
                    </div>
                </div>
                @php $delay = $delay + 0.2; @endphp
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-end mb-md-0">
                    <span class="text-body"><a target="_blank" href="https://web.facebook.com/profile.php?id=100094720734879" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Phuket Little Tour</a>, All right reserved.</span>
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
</body>

</html>