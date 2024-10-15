@extends('layout.main')
@section('content')

    <main id="station-contact-info-main">

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
                            <li class="menu-item">
                                <a href="{{ url('station-posted-jobs') }}" class="text-black">Posted job</a>
                            </li>
                            <li class="menu-item active">
                                <a href="{{ url('station-contact-info') }}" class="text-black">Contact Info</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- contact info section --}}
        <section class="contact-info-section">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8">
                        <div class="bg-white contact-info-box p-5 mt-4">
                            <div class="row align-items-center pb-4">
                                <div class="col-md-8">
                                    <h2 class="fw-bold contact-info-heading">Brooklyn Simmons</h2>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="#" class="fw-thin d-inline-block me-3 anchor-icon-small">
                                        <img src="{{ asset('user/assets/vectors/plus-vector-26.png') }}" class="w-100 h-100" alt="">
                                    </a>
                                    <a href="#" class="fw-thin d-inline-block anchor-icon-large">
                                        <img src="{{ asset('user/assets/vectors/edit-vector-26.png') }}" class="w-100 h-100" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="contact-icon-container">
                                            <img src="{{ asset('user/assets/img/contact-call.png') }}" style="width: 24px;height: 24px;" alt="">
                                        </div>
                                        <div style="padding-inline-start: 14px;">
                                            <strong class="contact-label">Email</strong>
                                            <p class="fw-light contact-info-text">email@address.com </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="contact-icon-container">
                                            <img src="{{ asset('user/assets/img/contact-mail.png') }}" style="width: 24px;height: 24px;" alt="">
                                        </div>
                                        <div style="padding-inline-start: 14px;">
                                            <strong class="contact-label">Phone</strong>
                                            <p class="fw-light contact-info-text">1234 - 33341413</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="contact-icon-container">
                                            <img src="{{ asset('user/assets/img/contact-web.png') }}" style="width: 24px;height: 24px;" alt="">
                                        </div>
                                        <div style="padding-inline-start: 14px;">
                                            <strong class="contact-label">Website</strong>
                                            <p class="fw-light contact-info-text">socialmedialink.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="contact-icon-container">
                                            <img src="{{ asset('user/assets/img/contact-linkedin.png') }}" style="width: 24px;height: 24px;" alt="">
                                        </div>
                                        <div style="padding-inline-start: 14px;">
                                            <strong class="contact-label">Linkedin</strong>
                                            <p class="fw-light contact-info-text">socialmedialink.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="contact-icon-container">
                                            <img src="{{ asset('user/assets/img/contact-twitter.png') }}" style="width: 24px;height: 24px;" alt="">
                                        </div>
                                        <div style="padding-inline-start: 14px;">
                                            <strong class="contact-label">Twitter</strong>
                                            <p class="fw-light contact-info-text">socialmedialink.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="contact-icon-container">
                                            <img src="{{ asset('user/assets/img/contact-facebook.png') }}" style="width: 24px;height: 24px;" alt="">
                                        </div>
                                        <div style="padding-inline-start: 14px;">
                                            <strong class="contact-label">Facebook</strong>
                                            <p class="fw-light contact-info-text">socialmedialink.com</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Repeat for other sections -->
                            </div>
                        </div>
                    </div>
                    <!-- The rest of your HTML -->
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
