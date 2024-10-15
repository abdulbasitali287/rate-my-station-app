@extends('layout.main')
@section('content')

    <main id="station-statistic-main">

        {{-- banner Section --}}
        <section class="banner-section"></section>

        {{-- station tabs section --}}
        <section class="station-tabs-container">
            <div class="container">
                <div class="row station-profile-container">
                    <div class="col-md-9 pb-4 border-bottom">
                        <div class="d-flex">
                            <div class="text-center pe-4">
                                <div class="logo-container">
                                    <img class="logo-image" src="{{ asset('user/assets/img/Logo.jpg') }}" alt="">
                                </div>
                                <a href="#" class="subscribe-button">Subscribed</a>
                            </div>
                            <div class="station-info">
                                <h2 class="station-name">KABC
                                    <span class="station-icon">
                                        <img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span>
                                </h2>
                                <p class="station-tagline">TV News Station</p>
                                <p class="station-location pt-2">
                                    <span class="location-icon d-inline-block me-2"><img src="{{ asset('user/assets/vectors/map-vector.png') }}" alt=""></span>Los Angeles, CA | DMA: 2
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center align-items-center pb-4 border-bottom">
                        <div class="account-actions">
                            <a href="{{ url('newsroom-profile') }}" class="account-settings-button">
                                <span class="d-inline-block me-2">
                                    <img src="{{ asset('user/assets/vectors/settings-vector.png') }}" alt=""></span>
                                Account settings
                            </a>
                            <a href="#" class="add-profile-section-button d-flex justify-content-center align-items-center fw-bold">
                                <span class="me-2 add-icon">
                                    <img src="{{ asset('user/assets/vectors/plus-vector.png') }}" alt=""></span>
                                Add profile section
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <ul class="navigation-menu d-flex">
                            <li class="menu-item">
                                <a href="{{ url('station-profile') }}" class="text-black">Profile</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('station-rating') }}" class="text-black">My ratings</a>
                            </li>
                            <li class="menu-item active">
                                <a href="{{ url('station-statistic') }}" class="text-black">Statistic</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('station-posted-jobs') }}" class="text-black">Posted job</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('station-contact-info') }}" class="text-black">Contact Info</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section style="margin-top: -164px;">
            <div class="container">
                <div class="row" style="padding-top: 40px;padding-inline: 40px;background-color: #FFFFFF;border-radius: 12px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                    <div class="col-md-9 pb-4" style="border-bottom: 1px solid #E0E0E0;">
                        <div class="d-flex">
                            <div class="text-center pe-4">
                                <div style="width: 137px;height: 106px; margin-bottom: 16px;">
                                    <img class="w-100 h-100" src="{{ asset('user/assets/img/Logo.jpg') }}" style="object-fit: cover;" alt="">
                                </div>
                                <a href="#" class="text-white fw-semiBold px-3 py-1" style="background-color: #89C400;border-radius: 10px;font-size: 14px;">Subscibed</a>
                            </div>
                            <div style="padding-inline-start: 14px;">
                                <h2 class="position-relative" style="font-size: 30px;font-weight: bold;">KABC <span class="position-absolute" style="top: -2px;right: 104px;"><img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span></h2>
                                <p class="pb-2" style="color: #828282;">TV News Station</p>
                                <p class="fw-light" style="color: #194D79;font-size: 18px;"><span style="display: inline-block;padding-inline-end: 4px;"><img src="{{ asset('user/assets/vectors/map-vector.png') }}" alt=""></span>Los Angeles, CA | DMA: 2</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-4" style="border-bottom: 1px solid #E0E0E0;">
                        <div style="width: 100%;height: 100%;display: flex;flex-direction: column;justify-content: center;">
                            <a href="{{ url('account-settings-station-profile') }}" class="text-white fw-bold border-0" style="margin-block: 6px;background-color: var(--darkCerulean);padding-block: 11px;border-radius: 12px;letter-spacing: 0.5px;transition: all 0.5s;text-align: center;">
                                <span class="d-inline-block me-2">
                                <img src="{{ asset('user/assets/vectors/settings-vector.png') }}" alt=""></span>
                                Account settings
                            </a>
                            <a href="#" class="d-flex justify-content-center align-items-center fw-bold bg-transparent" style="margin-block: 6px;border: 2px solid #194D79;color: #194D79;padding-block: 11px;border-radius: 12px;letter-spacing: 0.5px;transition: all 0.5s;text-align: center;">
                                <span class="d-inline-block me-2" style="background-color: #194D79;width: 22px;height: 22px;border-radius: 100%;">
                                <img src="{{ asset('user/assets/vectors/plus-vector.png') }}" style="margin-top: -5px;margin-left: 1px;" alt=""></span>
                                Add profile section
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <ul class="d-flex">
                            <li class="p-4">
                                <a href="{{ url('station-profile-3') }}" class="text-black">Profile</a>
                            </li>
                            <li class="p-4">
                                <a href="{{ url('station-rating-user') }}" class="text-black">My ratings</a>
                            </li>
                            <li class="px-4 pt-4 pb-3 fw-bold" style="border-bottom: 4px solid #89C400;">
                                <a href="{{ url('station-user-statistic') }}" class="text-black">Statistic</a>
                            </li>
                            <li class="p-4">
                                <a href="{{ url('station-posted-job') }}" class="text-black">Posted job</a>
                            </li>
                            <li class="p-4">
                                <a href="{{ url('contact-info-user') }}" class="text-black">Contact Info</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> --}}

        <section>
            <div class="container pt-4">
                <div class="row">
                    <div class="col-12 px-0">
                        <img src="{{ asset('user/assets/img/overall-newsroom-rating.png') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 px-0">
                        <img src="{{ asset('user/assets/img/overall-newsroom-rating-2.png') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 px-0">
                        <img src="{{ asset('user/assets/img/overall-newsroom-rating-3.png') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 px-0">
                        <img src="{{ asset('user/assets/img/work-environment.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
