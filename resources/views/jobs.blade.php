@extends('layout.main')

@section('content')
    <main id="jobs-main">

        {{-- Banner Section --}}
        <section class="banner-section">
            <div class="container-fluid d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col-12">
                        <h1 class="banner-title">Find the jobs that matter to you</h1>
                    </div>
                </div>
                <div class="row justify-content-around banner-inputs">
                    <div class="col-md-3">
                        <div class="input-group banner-input">
                            <span><img src="{{ asset('user/assets/vectors/briefcase.png') }}" class="input-icon" alt=""></span>
                            <input type="text" placeholder="Job title, or specialization" class="banner-text-input">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group banner-input">
                            <span><img src="{{ asset('user/assets/vectors/location-30.png') }}" class="input-icon" alt=""></span>
                            <input type="text" placeholder="Area, city, or town" class="banner-text-input">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group banner-input">
                            <span><img src="{{ asset('user/assets/vectors/radio-tower-30.png') }}" class="input-icon" alt=""></span>
                            <input type="text" placeholder="Station name or category" class="banner-text-input">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn search-btn">
                            <span><img src="{{ asset('user/assets/vectors/search-30-white.png') }}" class="search-icon" alt=""></span>
                            <span class="search-text">Search</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section id="view-job-main" class="border-bottom">
            <div class="container pb-3">
                <div class="row py-4">
                    <!-- Left side: Heading -->
                    <div class="col-md-8">
                        <h2>Recommended for you</h2>
                    </div>

                    <!-- Right side: Filter and Sort -->
                    <div class="col-md-4 d-flex justify-content-end">
                        <div class="d-flex">
                            <!-- Filter dropdown -->
                            <div class="d-flex align-items-center pe-3">
                                <p class="filter-label">Filter</p>
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary dropdown-toggle filter-button" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Job title</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Sort dropdown -->
                            <div class="d-flex align-items-center">
                                <p class="filter-label">Sort</p>
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary dropdown-toggle filter-button" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Newest</button>
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

                <!-- Job Cards Section -->
                <div class="row">
                    <!-- Reusable job card components (Blade components) -->
                    <x-user.view-job-card />
                    <x-user.view-job-card />
                    <x-user.view-job-card />
                    <x-user.view-job-card />
                    <x-user.view-job-card />
                    <x-user.view-job-card />
                    <x-user.view-job-card />
                    <x-user.view-job-card />
                </div>

                <!-- Pagination -->
                <x-user.pagination />
            </div>
        </section>

        {{-- product carousel --}}
        <x-user.product-carousel />
    </main>
@endsection
