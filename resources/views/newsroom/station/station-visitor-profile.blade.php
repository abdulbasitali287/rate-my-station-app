@extends('layout.main')
@section('content')

    <main id="station-visitor-prfile-main">
        {{-- banner section --}}
        <section class="banner-section"></section>


        <section class="station-profile-section">
            <div class="container">
                <div class="row station-profile-container">
                    <div class="col-md-9 station-profile-col station-profile-details">
                        <div class="d-flex">
                            <div class="text-center pe-4">
                                <div class="station-logo-wrapper">
                                    <img class="w-100 h-100" src="{{ asset('user/assets/img/Logo.jpg') }}" style="object-fit: cover;" alt="">
                                </div>
                                <a href="#" class="subscribed-button">Subscribed</a>
                            </div>
                            <div class="station-info">
                                <h2 class="station-name">KABC <span class="position-absolute" style="top: -4px;right: 92px;"><img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span></h2>
                                <p class="station-subtitle">TV News Station</p>
                                <p class="station-location"><span style="display: inline-block;padding-inline-end: 4px;"><img src="{{ asset('user/assets/vectors/map-vector.png') }}" alt=""></span>Los Angeles, CA | DMA: 2</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 station-actions">
                        <a href="#" class="ratings-button">See Station’s ratings</a>
                        <div class="contact-actions">
                            <a href="#" class="contact-info-button">
                                <span class="d-inline-block" style="background-color: #194D79;width: 22px;height: 22px;border-radius: 100%;">
                                    <img src="{{ asset('user/assets/vectors/chat-blue-icon.png') }}" style="margin-top: -5px;margin-left: 1px;" alt="">
                                </span>
                            </a>
                            <a href="#" class="contact-info-button flex-grow-1 fw-bold">Contact Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="container p-0">
                <div class="row">
                    <div class="col-md-8">

                        {{-- station visitor about --}}
                        <div class="bg-white p-5 mt-4 visitor-about-wrapper">
                            <div class="row align-items-center pb-3">
                                <div class="col-12">
                                    <h2 class="about-title">About</h2>
                                </div>
                            </div>
                            <div class="row about-border">
                                <div class="col-12">
                                    <p class="fw-light">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna, ut egestas vivamus proin. Velit leo scelerisque pulvinar vestibulum in nunc a tortor mollis. Fusce pretium est ipsum elementum parturient. Venenatis, ac nulla non varius dolor. Ornare consectetur mauris, adipiscing tristique a leo. Habitant pharetra tellus habitasse vestibulum nibh quisque. Sed vel condimentum enim leo tortor mi magna tincidunt. Egestas bibendum id eget quisque semper ultricies. Gravida viverra massa faucibus vestibulum condimentum.</p>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-md-4">
                                    <strong class="about-section-title">Industry</strong>
                                    <p class="about-section-text">TV Broadcasting</p>
                                </div>
                                <div class="col-md-8">
                                    <strong class="about-section-title">Station Address</strong>
                                    <p class="about-section-text">3891 Ranchview Dr. Richardson, California 62639</p>
                                </div>
                            </div>
                        </div>

                        {{-- station news directors --}}
                        <div class="bg-white p-5 mt-4 news-directors-wrapper">
                            <div class="row align-items-center pb-4">
                                <div class="col-12">
                                    <h2 class="fw-bold news-directors-title">News Directors</h2>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pb-4 mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="news-directors-image">
                                        <img src="{{ asset('user/assets/img/director-search-1.png') }}" class="w-100 h-100" alt="">
                                    </div>
                                    <div class="news-directors-text">
                                        <p style="font-size: 16px;">
                                            <span class="fw-semiBold" style="color: #777777;"> News Director </span>
                                            <span class="fw-semiBold news-directors-status current-status">current</span>
                                        </p>
                                        <strong style="font-size: 26px;">Brooklyn Simmons</strong>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <x-user.button buttonText="Send email" class="bg-white" color="#194D79" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pb-4 mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="news-directors-image">
                                        <img src="{{ asset('user/assets/img/station-rating-1.png') }}" class="w-100 h-100" alt="">
                                    </div>
                                    <div class="news-directors-text">
                                        <p style="font-size: 16px;">
                                            <span class="fw-semiBold" style="color: #777777;"> News Director </span>
                                            <span class="fw-semiBold news-directors-status past-status">Past</span>
                                        </p>
                                        <strong style="font-size: 26px;">Ronald Richards</strong>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <x-user.button buttonText="Send email" class="bg-white" color="#194D79" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pb-4 mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="news-directors-image">
                                        <img src="{{ asset('user/assets/img/review-1-img.png') }}" class="w-100 h-100" alt="">
                                    </div>
                                    <div class="news-directors-text">
                                        <p style="font-size: 16px;">
                                            <span class="fw-semiBold" style="color: #777777;"> News Director </span>
                                            <span class="fw-semiBold news-directors-status past-status">Past</span>
                                        </p>
                                        <strong style="font-size: 26px;">Sally Ramirez</strong>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <x-user.button buttonText="Send email" class="bg-white" color="#194D79" />
                                </div>
                            </div>
                        </div>

                        {{-- station visitor award --}}
                        <div class="bg-white p-5 mt-4 award-container">
                            <div class="row align-items-center pb-2">
                                <div class="col-12">
                                    <h2 class="fw-bold award-heading">Award</h2>
                                </div>
                            </div>
                            <div class="row py-4 award-item">
                                <div class="col-2">
                                    <div class="award-image">
                                        <img src="{{ asset('user/assets/img/silver-logo.png') }}" class="w-100 h-100" alt="">
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="ps-4">
                                        <strong class="fw-semiBold award-title">Award 2022</strong>
                                        <p class="fw-light award-description">
                                            Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-4 award-item">
                                <div class="col-2">
                                    <div class="award-image">
                                        <img src="{{ asset('user/assets/img/silver-logo.png') }}" class="w-100 h-100" alt="">
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="ps-4">
                                        <strong class="fw-semiBold award-title">Award 2022</strong>
                                        <p class="fw-light award-description">
                                            Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-4 award-item">
                                <div class="col-2">
                                    <div class="award-image">
                                        <img src="{{ asset('user/assets/img/silver-logo.png') }}" class="w-100 h-100" alt="">
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="ps-4">
                                        <strong class="fw-semiBold award-title">Award 2022</strong>
                                        <p class="fw-light award-description">
                                            Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Repeat for other items -->
                            <div class="row pt-4">
                                <div class="col-12 text-center">
                                    <a href="#" class="fw-semiBold award-more-link">3+ more</a>
                                </div>
                            </div>
                        </div>

                        {{-- station visitor job openings --}}
                        <div class="row">
                            <div class="col-12">
                                <div class="job-opening-container bg-white px-5 py-4 my-4">
                                    <div class="row align-items-center pb-4">
                                        <div class="col-md-8">
                                            <h2 class="job-opening-title fw-bold">Job Opening <span class="opening-count">(5)</span></h2>
                                        </div>
                                    </div>
                                    <div class="row py-4 job-details-row">
                                        <div class="col-12 d-flex">
                                            <div class="job-image-container">
                                                <img src="{{ asset('user/assets/img/7-abc-163.png') }}" class="job-image" alt="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex flex-column pb-3 flex-grow-1 ps-3">
                                                        <h6 class="job-position-title m-0">Assistant News Director</h6>
                                                        <p class="company-name fw-light">KCBA</p>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                                        </button>
                                                        <div class="dropdown-menu"></div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-around px-2 job-info-container">
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" class="icon-small" alt=""></span>
                                                        <span class="job-location">Los Angeles, CA</span>
                                                    </div>
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" class="icon-medium" alt=""></span>
                                                        <span class="job-salary">$100,000 - $130,000</span>
                                                    </div>
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/briefcase-30.png') }}" class="icon-small" alt=""></span>
                                                        <span class="job-type">Full time</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center pt-3">
                                                    <div>
                                                        <button class="hiring-status-btn">
                                                            <span class="hiring-status-icon"><img src="{{ asset('user/assets/vectors/tick-vector.png') }}" alt=""></span>
                                                            <span class="hiring-status-text">Actively Hiring</span>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <p class="updated-time"><span><img src="{{ asset('user/assets/vectors/timer-vector.png') }}" alt=""></span> <span>Updated 8 hours ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-4 job-details-row">
                                        <div class="col-12 d-flex">
                                            <div class="job-image-container">
                                                <img src="{{ asset('user/assets/img/7-abc-163.png') }}" class="job-image" alt="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex flex-column pb-3 flex-grow-1 ps-3">
                                                        <h6 class="job-position-title m-0">Assistant News Director</h6>
                                                        <p class="company-name fw-light">KCBA</p>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                                        </button>
                                                        <div class="dropdown-menu"></div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-around px-2 job-info-container">
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" class="icon-small" alt=""></span>
                                                        <span class="job-location">Los Angeles, CA</span>
                                                    </div>
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" class="icon-medium" alt=""></span>
                                                        <span class="job-salary">$100,000 - $130,000</span>
                                                    </div>
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/briefcase-30.png') }}" class="icon-small" alt=""></span>
                                                        <span class="job-type">Full time</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center pt-3">
                                                    <div>
                                                        <button class="hiring-status-btn">
                                                            <span class="hiring-status-icon"><img src="{{ asset('user/assets/vectors/tick-vector.png') }}" alt=""></span>
                                                            <span class="hiring-status-text">Actively Hiring</span>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <p class="updated-time"><span><img src="{{ asset('user/assets/vectors/timer-vector.png') }}" alt=""></span> <span>Updated 8 hours ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-4 job-details-row">
                                        <div class="col-12 d-flex">
                                            <div class="job-image-container">
                                                <img src="{{ asset('user/assets/img/7-abc-163.png') }}" class="job-image" alt="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex flex-column pb-3 flex-grow-1 ps-3">
                                                        <h6 class="job-position-title m-0">Assistant News Director</h6>
                                                        <p class="company-name fw-light">KCBA</p>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                                        </button>
                                                        <div class="dropdown-menu"></div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-around px-2 job-info-container">
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" class="icon-small" alt=""></span>
                                                        <span class="job-location">Los Angeles, CA</span>
                                                    </div>
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" class="icon-medium" alt=""></span>
                                                        <span class="job-salary">$100,000 - $130,000</span>
                                                    </div>
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/briefcase-30.png') }}" class="icon-small" alt=""></span>
                                                        <span class="job-type">Full time</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center pt-3">
                                                    <div>
                                                        <button class="hiring-status-btn">
                                                            <span class="hiring-status-icon"><img src="{{ asset('user/assets/vectors/tick-vector.png') }}" alt=""></span>
                                                            <span class="hiring-status-text">Actively Hiring</span>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <p class="updated-time"><span><img src="{{ asset('user/assets/vectors/timer-vector.png') }}" alt=""></span> <span>Updated 8 hours ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- More Job Details... -->
                                    <div class="row pt-4">
                                        <div class="col-12 text-center">
                                            <a href="#" class="fw-semiBold" style="color: #194D79;font-size: 18px;">
                                                3+ more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col col-md-4">
                        <div class="row align-items-center left-title-header">
                            <div class="col-md-8">
                                <h2 class="fw-bold right-col-title">Recommend</h2>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="{{ url('newsletter') }}" class="see-all-link">See all</a>
                            </div>
                        </div>
                        <div class="row latest-articles">
                            <div class="col-12">
                                {{-- latest posts --}}
                                {{-- loop div --}}
                                <x-user.latest-article />
                                <x-user.latest-article path="user/assets/img/2.png" title="Working Christmas and New Year's Eve doesn’t have to be depressing" />
                                <x-user.latest-article path="user/assets/img/3.png" title="Is Jumping from Journalism to PR and Communications a Good Idea?" />

                                {{-- newsletter subscribe --}}
                                <div class="newsletter-subscribe">
                                    <h6>Subscribe to our Newsletter, so you'll never miss one</h6>
                                    <input type="email" placeholder="Your email" class="form-control">
                                    <button class="subscribe-btn w-100 fw-bold">Subscribe</button>
                                </div>

                                {{-- rms follow --}}
                                <div class="rms-follow-section">
                                    <h2 class="fw-bold">Follow RMS</h2>
                                    <div class="rms-follow">
                                        <div class="rms-social-item">
                                            <img src="{{ asset('user/assets/vectors/facebook-vector.png') }}" class="social-icon" alt="Facebook">
                                            <span>@RateMyStation</span>
                                        </div>
                                        <div class="rms-social-item">
                                            <img src="{{ asset('user/assets/vectors/instagram-vector.png') }}" class="social-icon" alt="Instagram">
                                            <span>@RateMyStation</span>
                                        </div>
                                        <div class="rms-social-item">
                                            <img src="{{ asset('user/assets/vectors/twitter-vector.png') }}" class="social-icon" alt="Twitter">
                                            <span>@RateMyStation</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
