@extends('app')

@section('content')

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp">
            <h4 class="text-primary">บรรยากาศจากทริป</h4>
            <h1 class="display-4 mb-4">ลูกค้าเดินทางกับเราประทับใจ</h1>
            <p class="mb-0">
                ขอบคุณลูกค้าทุกท่านที่ไว้ใจ Phuket Little Tour นี่คือตัวอย่างบางส่วนจากทริปที่เราได้ให้บริการ ทั้งเที่ยวครอบครัว กลุ่มเพื่อน และงานอีเวนต์
            </p>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($tripGallery as $gallery)
            <div class="col-lg-6 col-xl-4 wow fadeInUp">
                <a href="{{ $gallery }}" data-lightbox="trip" data-title="ขอบคุณลูกค้าทุกท่านที่ไว้ใจ Phuket Little Tour นี่คือตัวอย่างบางส่วนจากทริปที่เราได้ให้บริการ ทั้งเที่ยวครอบครัว กลุ่มเพื่อน และงานอีเวนต์">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ $gallery }}" class="img-fluid trip-img-fixed rounded-top w-100">
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog End -->

<!-- Feature Start -->
<div class="container-fluid feature bg-white py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp">
            <h4 class="text-primary">จุดเด่นของเรา</h4>
            <h1 class="display-4 mb-4">บริการรถตู้ภูเก็ต ที่คุณวางใจได้</h1>
            <p class="mb-0">
                เราใส่ใจทุกการเดินทางของคุณ ด้วยรถตู้ VIP สะอาด ปลอดภัย คนขับมืออาชีพ พร้อมดูแลคุณตลอดทริปในแบบที่คุณเลือกเองได้
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp">
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
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp">
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
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp">
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
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp">
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
        <div class="text-center mx-auto pb-5 wow fadeInUp">
            <h4 class="text-primary">บริการของเรา</h4>
            <h1 class="display-4 mb-4">ให้บริการเพื่อการเดินทางของคุณ</h1>
            <p class="mb-0">เราพร้อมอำนวยความสะดวกในการเดินทางของคุณ ทั้งรับส่งสนามบิน เช่าเหมารถ และบริการอื่น ๆ ที่คุณต้องการ</p>
        </div>
        <div class="row g-4 justify-content-center">

            <!-- บริการ: รับส่งสนามบิน -->
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp">
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
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp">
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
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp">
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
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp">
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

@endsection


@section('scripts')
<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'albumLabel': "ดูภาพ %1 จาก %2",
        'disableScrolling': true
    });
</script>
@endsection