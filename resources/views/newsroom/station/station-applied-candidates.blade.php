@extends('layout.main')
@section('content')

    <main id="station-applied-candidates-main">

        {{-- Banner Section --}}
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
                    <div class="col-md-3 pb-4 d-flex justify-content-center align-items-center border-bottom">
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
                            <li class="menu-item">
                                <a href="{{ url('station-statistic') }}" class="text-black">Statistic</a>
                            </li>
                            <li class="menu-item active">
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

        {{-- specific job details card --}}
        <section class="specific-job-detail-card">
            <div class="container my-3">
                <div class="row bg-white p-4 align-items-center custom-row">
                    <div class="col-md-8">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('user/assets/img/7-abc.png') }}" class="me-3 company-logo" alt="">
                            <div>
                                <strong class="job-title">Assistant News Director</strong>
                                <p class="job-info">Los Angeles, CA • $100,000 - $130,000 • Full time</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-end">
                            <a href="#">
                                <img src="{{ asset('user/assets/vectors/edit-vector-26.png') }}" class="mx-2" alt="#">
                            </a>
                            <a href="#">
                                <img src="{{ asset('user/assets/vectors/gray-eye.png') }}" class="mx-2" alt="#">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- all applied candidates list section --}}
        <section>
            <div class="container">
                <div class="row py-4">
                    <div class="col-md-8">
                        <h2 style="font-size: 28px;">All candidates <span style="color: #828282;">(19)</span></h2>
                    </div>
                    <div class="col-md-4 d-flex justify-content-end">
                        <div class="d-flex">
                            <div class="d-flex align-items-center pe-3">
                                <p class="pe-2" style="color: #828282;font-weight: 500;font-size: 14px;">Filter</p>
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary dropdown-toggle" style="color: #828282;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Job type</button>
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

                    <x-user.station-applied-job-card img="user/assets/img/posted-job-img.png" name="Jacob Jones" />
                    <x-user.station-applied-job-card img="user/assets/img/Albert Flores.png" name="Albert Flores" />
                    <x-user.station-applied-job-card img="user/assets/img/Ronald Richards.png" name="Ronald Richards" />
                    <x-user.station-applied-job-card img="user/assets/img/Brooklyn Simmons.png" name="Brooklyn Simmons" />
                    <x-user.station-applied-job-card img="user/assets/img/Bessie Cooper.png" name="Bessie Cooper" />
                    <x-user.station-applied-job-card img="user/assets/img/Floyd Miles.png" name="Floyd Miles" />
                    <x-user.station-applied-job-card img="user/assets/img/Jenny Wilson.png" name="Jenny Wilson" />
                    <x-user.station-applied-job-card img="user/assets/img/Eleanor Pena.png" name="Eleanor Pena" />

                </div>
                <div class="row">
                    <div class="col-12">
                        {{-- pagination --}}
                        <x-user.pagination />
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
