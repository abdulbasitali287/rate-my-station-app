@extends('layout.main')
@section('content')
    <main id="station-profile-main">
        {{-- banner Section --}}
        <section class="banner-section"></section>

        {{-- station profile section --}}
        <section class="station-profile-section">
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
                            <a href="{{ url('newsroom-profile') }}" class="account-settings-button d-flex justify-content-center align-items-center">
                                <span class="d-inline-block me-2">
                                    <img src="{{ asset('user/assets/vectors/settings-vector.png') }}" alt=""></span>
                                Account settings
                            </a>
                            <a href="#" class="add-profile-section-button d-flex justify-content-center align-items-center">
                                <span class="me-2 add-icon">
                                    <img src="{{ asset('user/assets/vectors/plus-vector.png') }}" alt=""></span>
                                Add profile section
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <ul class="navigation-menu d-flex">
                            <li class="menu-item active">
                                <a href="{{ url('station-profile') }}" class="text-black">Profile</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('station-rating') }}" class="text-black">My ratings</a>
                            </li>
                            <li class="menu-item">
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

        <section>
            <div class="container px-0">
                <div class="row">
                    <div class="col-md-8">

                        {{-- about section --}}
                        <div class="bg-white p-5 mt-4 about-card">
                            <div class="row align-items-center pb-3">
                                <div class="col-md-8">
                                    <h2 class="fw-bold custom-title">About</h2>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="#" class="fw-thin d-inline-block edit-icon" data-bs-toggle="modal" data-bs-target="#addAboutModal">
                                        <img src="{{ asset('user/assets/vectors/edit-vector-26.png') }}" class="w-100 h-100" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="row pb-4 bottom-border">
                                <div class="col-12">
                                    <p class="fw-light">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna, ut egestas vivamus proin. Velit leo scelerisque pulvinar vestibulum in nunc a tortor mollis. Fusce pretium est ipsum elementum parturient. Venenatis, ac nulla non varius dolor. Ornare consectetur mauris, adipiscing tristique a leo. Habitant pharetra tellus habitasse vestibulum nibh quisque. Sed vel condimentum enim leo tortor mi magna tincidunt. Egestas bibendum id eget quisque semper ultricies. Gravida viverra massa faucibus vestibulum condimentum.</p>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-md-4">
                                    <strong class="fw-semiBold custom-strong">Industry</strong>
                                    <p class="fw-light custom-light">TV Broadcasting</p>
                                </div>
                                <div class="col-md-8">
                                    <strong class="fw-semiBold custom-strong">Station Address</strong>
                                    <p class="fw-light custom-light">3891 Ranchview Dr. Richardson, California 62639</p>
                                </div>
                            </div>
                        </div>

                        {{-- news directors section --}}
                        <div class="bg-white p-5 mt-4 news-directors">
                            <div class="row align-items-center pb-4">
                                <div class="col-md-8">
                                    <h2 class="fw-bold news-directors-title">News Directors</h2>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="#" class="fw-thin d-inline-block me-3 icon-link" data-bs-toggle="modal" data-bs-target="#addDirectorModal">
                                        <img src="{{ asset('user/assets/vectors/plus-vector-26.png') }}" class="w-100 h-100" alt="">
                                    </a>
                                    <a href="{{ url('edit-news-director') }}" class="fw-thin d-inline-block icon-link">
                                        <img src="{{ asset('user/assets/vectors/edit-vector-26.png') }}" class="w-100 h-100" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pb-4 mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="image-container">
                                        <img src="{{ asset('user/assets/img/director-search-1.png') }}" class="w-100 h-100" alt="">
                                    </div>
                                    <div class="text-padding">
                                        <p class="paragraph-text">
                                            <span class="fw-semiBold" style="color: #777777;"> News Director </span>
                                            <span class="fw-semiBold status-current">current</span>
                                        </p>
                                        <strong class="name-text">Brooklyn Simmons</strong>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#addDirectorModal">
                                        <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pb-4 mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="image-container">
                                        <img src="{{ asset('user/assets/img/station-rating-1.png') }}" class="w-100 h-100" alt="">
                                    </div>
                                    <div class="text-padding">
                                        <p class="paragraph-text">
                                            <span class="fw-semiBold" style="color: #777777;"> News Director </span>
                                            <span class="fw-semiBold status-past">Past</span>
                                        </p>
                                        <strong class="name-text">Ronald Richards</strong>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#addDirectorModal">
                                        <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between pb-4 mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="image-container">
                                        <img src="{{ asset('user/assets/img/review-1-img.png') }}" class="w-100 h-100" alt="">
                                    </div>
                                    <div class="text-padding">
                                        <p class="paragraph-text">
                                            <span class="fw-semiBold" style="color: #777777;"> News Director </span>
                                            <span class="fw-semiBold status-past">Past</span>
                                        </p>
                                        <strong class="name-text">Sally Ramirez</strong>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#addDirectorModal">
                                        <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>

                        {{-- award section --}}
                        <div class="bg-white p-5 mt-4 award-container">
                            <div class="row align-items-center pb-2">
                                <div class="col-md-8">
                                    <h2 class="fw-bold award-title">Award</h2>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="#" class="fw-thin d-inline-block me-3" data-bs-toggle="modal" data-bs-target="#addAwardModal" style="color: #194D79;width: 26px;height: 26px;">
                                        <img src="{{ asset('user/assets/vectors/plus-vector-26.png') }}" class="w-100 h-100" alt="">
                                    </a>
                                    <a href="{{ url('edit-award') }}" class="fw-thin d-inline-block" style="color: #194D79;width: 26px;height: 26px;">
                                        <img src="{{ asset('user/assets/vectors/edit-vector-26.png') }}" class="w-100 h-100" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="row py-4 award-row">
                                <div class="col-2">
                                    <div style="width: 125px;height: 125px;">
                                        <img src="{{ asset('user/assets/img/silver-logo.png') }}" class="w-100 h-100" alt="">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="ps-4">
                                        <strong class="fw-semiBold award-strong">Award 2022</strong>
                                        <p class="fw-light award-paragraph">
                                            Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-2 d-flex justify-content-end align-items-center">
                                    <div class="d-flex align-items-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#addAwardModal">
                                            <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-4 award-row">
                                <div class="col-2">
                                    <div style="width: 125px;height: 125px;">
                                        <img src="{{ asset('user/assets/img/silver-logo.png') }}" class="w-100 h-100" alt="">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="ps-4">
                                        <strong class="fw-semiBold award-strong">Award 2022</strong>
                                        <p class="fw-light award-paragraph">
                                            Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-2 d-flex justify-content-end align-items-center">
                                    <div class="d-flex align-items-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#addAwardModal">
                                            <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-4 award-row">
                                <div class="col-2">
                                    <div style="width: 125px;height: 125px;">
                                        <img src="{{ asset('user/assets/img/silver-logo.png') }}" class="w-100 h-100" alt="">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="ps-4">
                                        <strong class="fw-semiBold award-strong">Award 2022</strong>
                                        <p class="fw-light award-paragraph">
                                            Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-2 d-flex justify-content-end align-items-center">
                                    <div class="d-flex align-items-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#addAwardModal">
                                            <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-12 text-center">
                                    <a href="#" class="fw-semiBold award-more-link">
                                        3+ more
                                    </a>
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
    {{-- add director modal --}}
    <div class="modal fade" id="addDirectorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content p-3" style="border-radius: 16px;">
            <div class="modal-header py-0 pt-2" style="border-bottom: none;">
              <h1 class="modal-title fw-bold" style="font-size: 24px;">News Director</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center pb-3">
                            <div class="d-flex justify-content-center align-items-end me-3" style="width: 89px;height: 89px;background-color: #F2F2F2;border-radius: 10px;">
                                <img src="{{ asset('user/assets/img/account-profile.png') }}" style="width: 70px;height: 71px;" alt="">
                            </div>
                            <p style="color: #194D79;">Upload Image in <span class="fw-bold"> jpg or png format</span></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="#" class="fw-light">Director’s name</label>
                            <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                        </div>
                    </div>
                    <div class="col-md-6" style="align-content: center;">
                        <div class="form-check pt-3">
                            <input class="form-check-input me-3" type="checkbox" value="" style="width: 22px;height: 22px;border-color: #BDBDBD;">
                            <label class="form-check-label d-inline-block mt-1 fw-light" for="flexCheckDefault">
                                Current news director
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="#" class="fw-light">Director’s  email</label>
                            <input type="email" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                        </div>
                    </div>
                </div>
              </form>
            </div>
            <div class="modal-footer d-flex justify-content-start" style="border-top: none;">
                <button type="button" class="profile-modal-submit-btn">Save</button>
                <button type="button" class="profile-modal-cancel-btn close-modal">Cancel</button>
            </div>
          </div>
        </div>
    </div>


    {{-- add about modal --}}
    <div class="modal fade" id="addAboutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content p-3" style="border-radius: 16px;">
            <div class="modal-header py-0 pt-2" style="border-bottom: none;">
              <h1 class="modal-title fw-bold" style="font-size: 24px;">About</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                          <label for="#" class="fw-light">You can write about your years of experience, industry, or skills.</label>
                          <textarea name="" class="w-100 p-3 mt-2" placeholder="Type here..." id="" cols="30" rows="6" style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group pt-3">
                            <label for="#" class="fw-light">Industry</label>
                            <div class="mt-2" style="display: flex;background-color: #F2F2F2;padding-block: 10px;padding-inline-end: 10px;border-radius: 10px;">
                                <select name="" class="ps-3" style="flex-grow: 1;margin-top: 3px;color: #828282;font-size: 14px;">
                                    <option value="" selected>Choose options</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group pt-3">
                            <label for="#" class="fw-light">Station Address</label>
                            <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                        </div>
                    </div>
                </div>

              </form>
            </div>
            <div class="modal-footer d-flex justify-content-start" style="border-top: none;">
                <button type="button" class="profile-modal-submit-btn">Save</button>
                <button type="button" class="profile-modal-cancel-btn close-modal">Cancel</button>
            </div>
          </div>
        </div>
    </div>

    {{-- add award modal --}}
    <div class="modal fade" id="addAwardModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content p-3" style="border-radius: 16px;">
            <div class="modal-header py-0 pt-2" style="border-bottom: none;">
              <h1 class="modal-title fw-bold" style="font-size: 24px;">Award</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="#" class="fw-light">Award title</label>
                            <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                          <label for="#" class="fw-light">Description</label>
                          <textarea name="" class="w-100 p-3 mt-2" placeholder="Type here..." id="" cols="30" rows="6" style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center py-3">
                            <div class="d-flex justify-content-center align-items-center me-3" style="width: 89px;height: 89px;background-color: #F2F2F2;border-radius: 10px;">
                                <img src="{{ asset('user/assets/vectors/dummy-img.png') }}" style="width: 30px;height: 28px;" alt="">
                            </div>
                            <p style="color: #194D79;">Upload Image in <span class="fw-bold"> jpg or png format</span></p>
                        </div>
                    </div>
                </div>
              </form>
            </div>
            <div class="modal-footer d-flex justify-content-start" style="border-top: none;">
                <button type="button" class="profile-modal-submit-btn">Save</button>
                <button type="button" class="profile-modal-cancel-btn close-modal">Cancel</button>
            </div>
          </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $(document).on('click', '.close-modal', function () {
            // Wrap the closest modal in jQuery object
            let modal = $(this).closest('.modal');
            console.log(modal);  // For debugging purposes
            modal.modal('hide'); // Close the modal
        });
    });
</script>

@endpush
