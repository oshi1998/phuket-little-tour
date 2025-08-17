@extends('app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="text-center mb-4">
                <h2 class="fw-bold">{{ __('app.contact_page_title') }}</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-5">
                    <div class="bg-light p-4 rounded shadow-sm h-100">
                        <h5 class="fw-bold mb-3">{{ __('contact.contact_info_title') }}</h5>
                        <p class="mb-1"><strong>{{ __('contact.company_info_title') }}:</strong> Phuket Little Tour</p>
                        <p class="mb-1"><strong>{{ __('contact.tel_info_title') }}:</strong> <a href="tel:0624829114">062-482-9114</a></p>
                        <p class="mb-1"><strong>{{ __('contact.email_info_title') }}:</strong> <a href="mailto:Zee17094@gmail.com" class="me-3">Zee170940@gmail.com</a></p>
                        <p class="mb-3"><strong>{{ __('contact.address_info_title') }}:</strong> -</p>
                        
                        <div class="mt-2">
                            <h6 class="fw-bold">{{ __('contact.other_contact_title') }}:</h6>
                            <a href="https://web.facebook.com/profile.php?id=100094720734879" target="_blank" class="btn btn-outline-primary btn-sm me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="line://ti/p/@953tmupy" class="btn btn-outline-success btn-sm me-2"><i class="fab fa-line"></i></a>
                            <a href="https://wa.me/66981028904" target="_blank" class="btn btn-outline-success btn-sm"><i class="fab fa-whatsapp"></i></a>
                        </div>

                    </div>
                </div>

                <div class="col-md-7">
                    <img src="{{ asset('img/contact.jpg') }}" class="img-fluid rounded shadow-sm">
                </div>

            </div>
        </div>
    </div>
</div>

@endsection