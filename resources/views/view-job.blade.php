@extends('layout.main')

@section('content')

    {{-- Hero Section --}}
    <section id="hero-section" style="height: 312px;background-image: url({{ asset('user/assets/ellipse/view-job-banner-bg.png') }});">
        <div class="container">
            <h1 style="color: #ffff;padding-block-end: 40px;padding-inline-start: 30px;">Find the jobs that matter to you</h1>
            <div class="row" style="justify-content: space-between;padding-inline: 30px;">
                <div class="col-md-3">
                    <div class="input-group" style="width: max-content;border-radius: 10px;overflow: hidden;display: flex;align-items: center;padding-block: 8px;padding-inline-end: 10px;background-color: #ffff;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                        <span style="display: inline-block;padding-inline-start: 10px"><img src="{{ asset('user/assets/vectors/briefcase.png') }}" style="width: 18px;margin-top: -5px;display: inline-block;background-color: transparent;" alt=""></span>
                        <input type="text" placeholder="Job title, or specialization" style="padding-inline-end: 100px;padding-inline-start: 10px;padding-block: 4px;border: none;background-color: transparent;">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group" style="width: max-content;border-radius: 10px;overflow: hidden;display: flex;align-items: center;padding-block: 8px;padding-inline-end: 10px;background-color: #ffff;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                        <span style="display: inline-block;padding-inline-start: 10px"><img src="{{ asset('user/assets/vectors/location-30.png') }}" style="width: 18px;margin-top: -5px;display: inline-block;background-color: transparent;" alt=""></span>
                        <input type="text" placeholder="Area, city, or town" style="padding-inline-end: 100px;padding-inline-start: 10px;padding-block: 4px;border: none;background-color: transparent;">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group" style="width: max-content;border-radius: 10px;overflow: hidden;display: flex;align-items: center;padding-block: 8px;padding-inline-end: 10px;background-color: #ffff;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                        <span style="display: inline-block;padding-inline-start: 10px"><img src="{{ asset('user/assets/vectors/radio-tower-30.png') }}" style="width: 18px;margin-top: -5px;display: inline-block;background-color: transparent;" alt=""></span>
                        <input type="text" placeholder="Station name or category" style="padding-inline-end: 100px;padding-inline-start: 10px;padding-block: 4px;border: none;background-color: transparent;">
                    </div>
                </div>
                <div class="col-md-2">
                    <div>
                        <button style="background-color: #89C400;border: none;padding-block: 8px;padding-inline-end: 42px;border-radius: 10px;">
                            <span style="display: inline-block;padding-inline-start: 16px;padding-inline-end: 12px;">
                                <img src="{{ asset('user/assets/vectors/search-30-white.png') }}" style="color: #ffff;" alt="">
                            </span>
                            <span style="color: #ffff;font-weight: 500;letter-spacing: 0.5px;">Search</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="view-job-main">
        <div class="container pb-3">
            <div class="row py-4">
                <div class="col-md-8">
                    <h2>Recommend for you </h2>
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

            {{-- pagination --}}
            <x-user.pagination />
        </div>
    </section>

    <section>
        {{-- shop container --}}
        <div id="shop-container" class="container">
            <div class="row justify-content-center">
                <div id="lr-main-heading" class="text-center">
                    <h2>RateMyStation's Shop</h2>
                </div>
            </div>

            <div class="row">

                <x-user.product-card visibility="visible" image="user/assets/img/image-1.png" title="Don’t Make Me Use My News Voice Face Mask" amount="18.00" />

                <x-user.product-card visibility="visible" image="user/assets/img/image-2.png" title="America Needs Local News Sweatshirt" amount="25.00 – $33.50" />

                <x-user.product-card image="user/assets/img/image-3.png" title="Anonymous Source Onesie" amount="18.00" />

                <x-user.product-card image="user/assets/img/image-4.png" title="You Are A PKG Framed Poster" amount="26.00 – $105.00" />

            </div>
        </div>

    </section>

@endsection
