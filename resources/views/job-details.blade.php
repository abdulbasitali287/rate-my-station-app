@extends('layout.main')
@section('content')
    <main id="job-details-main">
        {{-- Banner Section --}}
        <section class="banner-section d-flex align-items-center justify-content-center"></section>

        <section class="job-details-section">
            <div class="container">
                <div class="row py-5 px-4 bg-white shadow main">
                    <div class="col-md-9 first-col">
                        <div class="d-flex align-items-center">
                            <div class="logo-container me-4">
                                <img class="w-100 h-100" src="{{ asset('user/assets/img/Logo.jpg') }}" alt="Logo">
                            </div>
                            <div class="ps-3">
                                <h2 class="fw-bold fs-2 position-relative">Assistant News Director</h2>
                                <p class="text-secondary">KABC</p>
                                <div class="d-flex justify-content-around px-2 my-3 p-2 icons-text">
                                    <div class="pe-4 d-flex align-items-center">
                                        <img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" class="me-2" style="width: 20px;" alt="">
                                        <span class="fs-6">Los Angeles, CA</span>
                                    </div>
                                    <div class="pe-4 d-flex align-items-center">
                                        <img src="{{ asset('user/assets/vectors/dollar-50.png') }}" class="me-2" style="width: 28px;" alt="">
                                        <span class="fs-6">$100,000 - $130,000</span>
                                    </div>
                                    <div class="pe-4 d-flex align-items-center">
                                        <img src="{{ asset('user/assets/vectors/briefcase-30.png') }}" class="me-2" style="width: 20px;" alt="">
                                        <span class="fs-6">Full time</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex flex-column justify-content-center second-col">
                        <button class="subscribe-btn mb-2">Apply Now</button>
                        <div class="row">
                            <div class="col-6">
                                <a href="#" class="w-100 fw-bold py-2 px-3 bg-transparent text-black text-center" type="button">
                                    <img src="{{ asset('user/assets/vectors/save-vector.png') }}" class="me-2" alt=""> Save
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="w-100 fw-bold py-2 px-3 bg-transparent text-black text-center" type="button">
                                    <img src="{{ asset('user/assets/vectors/share-24.png') }}" class="me-2" alt=""> Share
                                </a>
                            </div>
                        </div>
                        {{-- <div class="d-flex justify-content-between">
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>

        <section class="job-description-section">
            <div class="container">
                <div class="row">
                    <div class="job-content">
                        {{-- first div --}}
                        <div class="job-details">
                            <h3 class="job-title">Job Description</h3>
                            <p class="job-description-text">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna, ut egestas vivamus proin. Velit leo scelerisque pulvinar vestibulum in nunc a tortor mollis. Fusce pretium est ipsum elementum parturient. Venenatis, ac nulla non varius dolor. Ornare consectetur mauris, adipiscing tristique a leo. Habitant pharetra tellus habitasse vestibulum nibh quisque. Sed vel condimentum enim leo tortor mi magna tincidunt. Egestas bibendum id eget quisque semper ultricies. Gravida viverra massa faucibus vestibulum condimentum.</p>
                            <p class="job-description-text">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna, ut egestas vivamus proin. Velit leo scelerisque pulvinar vestibulum in nunc a tortor mollis. Fusce pretium est ipsum elementum parturient. Venenatis, ac nulla non varius dolor. Ornare consectetur mauris, adipiscing tristique a leo. Habitant pharetra tellus habitasse vestibulum nibh quisque. Sed vel condimentum enim leo tortor mi magna tincidunt. Egestas bibendum id eget quisque semper ultricies. Gravida viverra massa faucibus vestibulum condimentum.</p>
                        </div>
                        {{-- second div --}}
                        <div class="qualifications">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="qualification-title">Qualification</h3>
                                </div>
                                <div class="col-6">
                                    <ul class="qualification-list">
                                        <li>Pellentesque vel tristique ultrices habitasse feugiat nulla</li>
                                        <li>Tempor quam. Et risus commodo natoque pulvinar eu...</li>
                                        <li>Viverra tortor hac sollicitudin dictum sit. Condimentum eget...</li>
                                        <li>Commodo sapien porta felis amet pellentesque...</li>
                                        <li>Erat augue enim turpis risus urna, ut egestas vivamus...</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="qualification-list">
                                        <li>Pellentesque vel tristique ultrices habitasse feugiat nulla</li>
                                        <li>Tempor quam. Et risus commodo natoque pulvinar eu...</li>
                                        <li>Viverra tortor hac sollicitudin dictum sit. Condimentum eget...</li>
                                        <li>Commodo sapien porta felis amet pellentesque...</li>
                                        <li>Erat augue enim turpis risus urna, ut egestas vivamus...</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- third div --}}
                        <div class="additional-info">
                            <div class="row">
                                <div class="col-4">
                                    <div class="info-item">
                                        <p class="info-label">Career Level</p>
                                        <p class="info-value">Staff (non-management & non-supervisor)</p>
                                    </div>
                                    <div class="info-item">
                                        <p class="info-label">Years of Experience</p>
                                        <p class="info-value">1 year</p>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="info-item">
                                        <p class="info-label">Education Level</p>
                                        <p class="info-value">Bachelor Degree</p>
                                    </div>
                                    <div class="info-item">
                                        <p class="info-label">Job Type</p>
                                        <p class="info-value">Full-Time</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- fourth div --}}
                        <div class="row save-btn-container">
                            <div class="col-12">
                                <button class="save-btn" type="button">
                                    <span class="icon-wrapper">
                                        <img src="{{ asset('user/assets/vectors/save-vector.png') }}" alt="Save Icon">
                                    </span> Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- product carousel --}}
        <x-user.product-carousel />
    </main>
@endsection
