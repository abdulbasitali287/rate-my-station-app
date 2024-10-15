@extends('layout.main')
@section('content')

    <main id="jobs-opening-main">

        {{-- banner Section --}}
        <section class="banner-section"></section>

        <section class="station-section">
            <div class="container">
                <div class="row station-card">
                    <div class="col-md-9">
                        <div class="d-flex">
                            <div>
                                <img class="station-logo" src="{{ asset('user/assets/img/Logo.jpg') }}" alt="">
                            </div>
                            <div class="station-info">
                                <h2>KABC <span><img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span></h2>
                                <p>TV News Station</p>
                                <p class="station-location">
                                    <span><img src="{{ asset('user/assets/vectors/map-vector.png') }}" alt=""></span>Los Angeles, CA | DMA: 2
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-4 d-flex justify-content-center align-items-center">
                        <div class="account-actions">
                            <a href="{{ url('station-rating') }}" class="see-station-rating-btn">See Station’s ratings</a>
                            <a href="{{ url('station-profile') }}" class="see-station-profile-btn">See Station’s profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- job cards --}}
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
                                    <button class="btn btn-outline-secondary dropdown-toggle filter-dropdown" style="color: #828282;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Job title</button>
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
                                    <button class="btn btn-outline-secondary dropdown-toggle sort-dropdown" style="color: #828282;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Newest</button>
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

        {{-- product cards section --}}
        <section class="product-cards-section">
            <div class="container product-cards-container">
                <div class="row justify-content-center py-4">
                    <div class="text-center">
                        <h2 class="fw-bold product-section-title">RateMyStation's Shop</h2>
                    </div>
                </div>

                <div class="row">

                    <x-user.product-card visibility="visible" image="user/assets/img/image-1.png"
                        title="Don’t Make Me Use My News Voice Face Mask" amount="18.00" />

                    <x-user.product-card visibility="visible" image="user/assets/img/image-2.png"
                        title="America Needs Local News Sweatshirt" amount="25.00 – $33.50" />

                    <x-user.product-card image="user/assets/img/image-3.png" title="Anonymous Source Onesie" amount="18.00" />

                    <x-user.product-card image="user/assets/img/image-4.png" title="You Are A PKG Framed Poster"
                        amount="26.00 – $105.00" />

                </div>
                <div class="d-flex justify-content-between position-absolute" style="top: 50%;right: -26px;left: -26px;opacity: 0.8">
                    <button type="button" style="background-color: #FFFFFF;padding-inline: 15px;padding-block: 7px;border-radius: 100%;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);border: none;"><img src="{{ asset('user/assets/vectors/left-arrow-gray.png') }}" alt=""></button>
                    <button type="button" style="background-color: #FFFFFF;padding-inline: 15px;padding-block: 7px;border-radius: 100%;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);border: none;"><img src="{{ asset('user/assets/vectors/right-arrow-gray.png') }}" alt=""></button>
                </div>
            </div>
        </section>

    </main>

@endsection
