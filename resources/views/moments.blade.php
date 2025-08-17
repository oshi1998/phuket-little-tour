@extends('app')

@section('content')
<div class="container blog py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="text-center mb-4">
                <h2 class="fw-bold">{{ __('app.moments_page_title') }}</h2>
            </div>
            <div class="row g-4">
                @foreach($momentImages as $img)
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
</div>
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