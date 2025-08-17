@extends('app')

@section('content')

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp">
            <h4 class="text-primary">{{ __('home.blog_title') }}</h4>
            <h1 class="display-4 mb-4">{{ __('home.blog_sub_title') }}</h1>
            <p class="mb-0">
                {{ __('home.blog_description') }}
            </p>
        </div>
        <div class="row g-4 justify-content-center">
            <video class="w-100" controls>
                <source src="{{ asset('video/170868_hbd.mp4') }}" type="video/mp4">
            </video>
            @foreach($tripImages as $img)
            <div class="col-lg-6 col-xl-4 wow fadeInUp">
                <a href="{{ $img }}" data-lightbox="trip" data-title="{{ __('home.blog_description') }}">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ $img }}" class="img-fluid trip-img-fixed rounded-top w-100">
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
            <h4 class="text-primary">{{ __('home.feature_title') }}</h4>
            <h1 class="display-4 mb-4">{{ __('home.feature_sub_title') }}</h1>
            <p class="mb-0">{{ __('home.feature_description') }}</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon text-success p-4 mb-4">
                        <i class="fas fa-shuttle-van fa-3x"></i>
                    </div>
                    <h4 class="mb-4">{{ __('home.feature_item1_title') }}</h4>
                    <p class="mb-4">{{ __('home.feature_item1_description') }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon text-primary p-4 mb-4">
                        <i class="fas fa-user-tie fa-3x"></i>
                    </div>
                    <h4 class="mb-4">{{ __('home.feature_item2_title') }}</h4>
                    <p class="mb-4">{{ __('home.feature_item2_description') }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon text-warning p-4 mb-4">
                        <i class="fas fa-route fa-3x"></i>
                    </div>
                    <h4 class="mb-4">{{ __('home.feature_item3_title') }}</h4>
                    <p class="mb-4">{{ __('home.feature_item3_description') }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon text-info p-4 mb-4">
                        <i class="fa fa-headphones fa-3x"></i>
                    </div>
                    <h4 class="mb-4">{{ __('home.feature_item4_title') }}</h4>
                    <p class="mb-4">{{ __('home.feature_item4_description') }}</p>
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
            <h4 class="text-primary">{{ __('home.service_title') }}</h4>
            <h1 class="display-4 mb-4">{{ __('home.service_sub_title') }}</h1>
            <p class="mb-0">{{ __('home.service_description') }}</p>
        </div>
        <div class="row g-4 justify-content-center">
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
                            <a href="#" class="d-inline-block h4 mb-4">{{ __('home.service_item1_title') }}</a>
                            <p class="mb-4">{{ __('home.service_item1_description') }}</p>
                        </div>
                    </div>
                </div>
            </div>
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
                            <a href="#" class="d-inline-block h4 mb-4">{{ __('home.service_item2_title') }}</a>
                            <p class="mb-4">{{ __('home.service_item2_description') }}</p>
                        </div>
                    </div>
                </div>
            </div>
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
                            <a href="#" class="d-inline-block h4 mb-4">{{ __('home.service_item3_title') }}</a>
                            <p class="mb-4">{{ __('home.service_item3_description') }}</p>
                        </div>
                    </div>
                </div>
            </div>
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
                            <a href="#" class="d-inline-block h4 mb-4">{{ __('home.service_item4_title') }}</a>
                            <p class="mb-4">{{ __('home.service_item4_description') }}</p>
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