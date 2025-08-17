@extends('app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="text-center mb-4">
                <h2 class="fw-bold">{{ __('app.about_page_title') }}</h2>
            </div>
            <div class="row g-4 align-items-start">
                <div class="col-md-7">
                    <div class="bg-light p-4 rounded shadow-sm h-100">
                        <p>
                            <strong>Phuket Little Tour</strong> {{ __('about.p1') }}
                        </p>
                        <p>
                            {{ __('about.p2') }}
                        </p>
                        <h5 class="mt-4">{{ __('about.service_title') }}:</h5>
                        <ul>
                            <li>{{ __('about.service_list1') }}</li>
                            <li>{{ __('about.service_list2') }}</li>
                            <li>{{ __('about.service_list3') }}</li>
                            <li>{{ __('about.service_list4') }}</li>
                            <li>{{ __('about.service_list5') }}</li>
                        </ul>
                        <p>
                            <strong>Phuket Little Tour</strong> {{ __('about.p3') }}
                        </p>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="d-flex flex-column gap-3">
                        <img src="{{ asset('img/welcome.jpg') }}" alt="Welcome to Phuket Little Tour" class="img-fluid rounded shadow-sm">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection