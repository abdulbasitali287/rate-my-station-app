@extends('layout.main')
@section('content')
{{-- Hero Section --}}
<section id="hero-section" style="height: 294px;background-image: url({{ asset('user/assets/ellipse/job-opening.png') }});"></section>

<section style="margin-top: -164px;">
    <div class="container">
        <div class="row" style="padding: 40px;background-color: #FFFFFF;border-radius: 12px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
            <div class="col-md-9">
                <div class="d-flex">
                    <div style="width: 137px;height: 106px;">
                        <img class="w-100 h-100" src="{{ asset('user/assets/img/Logo.jpg') }}" style="object-fit: cover;" alt="">
                    </div>
                    <div style="padding-inline-start: 14px;">
                        <h2 class="position-relative" style="color: #194D79;font-size: 30px;font-weight: bold;">KABC <span class="position-absolute" style="top: -4px;right: 92px;"><img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span></h2>
                        <p style="color: #828282;">TV News Station</p>
                        <p style="color: #194D79;"><span style="display: inline-block;padding-inline-end: 4px;"><img src="{{ asset('user/assets/vectors/map-vector.png') }}" alt=""></span>Los Angeles, CA | DMA: 2</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div style="width: 100%;height: 100%;display: flex;flex-direction: column;justify-content: center;">
                    <button class="subscribe-btn" style="margin-block: 6px;">See Station’s ratings</button>
                    <button class="subscribe-btn" style="margin-block: 6px;background-color: transparent;border: 2px solid #194D79;color: #194D79;">See Station’s profile</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container pb-3" style="border-bottom: 1px solid #BDBDBD;">
        <div class="row py-4">
            <div class="col-md-8">
                <h2>Available job opening <span style="color: #828282;font-size: 22px;">(6)</span></h2>
            </div>
            <div class="col-md-4 d-flex justify-content-end">
                <div class="d-flex">
                    <div class="d-flex align-items-center pe-3">
                        <p class="pe-2" style="color: #828282;font-weight: 500;font-size: 14px;">Filter</p>
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary dropdown-toggle" style="color: #828282;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Job title</button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                          </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <p class="pe-2" style="color: #828282;font-weight: 500;font-size: 14px;">Short</p>
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary dropdown-toggle" style="color: #828282;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Newest</button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <x-user.view-job-card />
            <x-user.view-job-card />
            <x-user.view-job-card />
            <x-user.view-job-card />
            <x-user.view-job-card />
            <x-user.view-job-card />
            <x-user.view-job-card />
            <x-user.view-job-card />
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div id="lr-main-heading" class="text-center">
                <h2>RateMyStation's Shop</h2>
            </div>
        </div>
        <div id="shop-container" class="position-relative">
            <div class="row">

                <x-user.product-card visibility="visible" image="user/assets/img/image-1.png" title="Don’t Make Me Use My News Voice Face Mask" amount="18.00" />

                <x-user.product-card visibility="visible" image="user/assets/img/image-2.png" title="America Needs Local News Sweatshirt" amount="25.00 – $33.50" />

                <x-user.product-card image="user/assets/img/image-3.png" title="Anonymous Source Onesie" amount="18.00" />

                <x-user.product-card image="user/assets/img/image-4.png" title="You Are A PKG Framed Poster" amount="26.00 – $105.00" />

            </div>
            <div class="d-flex justify-content-between position-absolute" style="top: 0;right: 0;left: 0;transform: translate()">
                <button type="button" style="background-color: #FFFFFF;padding-inline: 15px;padding-block: 7px;border-radius: 100%;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);border: none;transform: translate(-20px, 235px);"><img src="{{ asset('user/assets/vectors/left-arrow-gray.png') }}" alt=""></button>
                <button type="button" style="background-color: #FFFFFF;padding-inline: 15px;padding-block: 7px;border-radius: 100%;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);border: none;transform: translate(20px, 235px);"><img src="{{ asset('user/assets/vectors/right-arrow-gray.png') }}" alt=""></button>
            </div>
        </div>
    </div>
</section>
@endsection
