@extends('layout.main')

@section('content')

    <main id="home-main">
        {{-- banner Section --}}
        <section class="banner-section">
            <div id="hero-center-div">
                <div id="hero-heading" class="hero-heading mb-4 text-center" style="width: 100%;display: flex;justify-content: center;">
                    <h1 style="width: 100%;">Find thousands of Ratings from real Journalists</h1>
                </div>
                <div id="hero-search" class="hero-search">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend hero-search-prepend">
                            <span class="input-group-text">
                                <img src="{{ asset('user/assets/vectors/radio-icon.png') }}" alt="Icon" class="small-icon">
                            </span>
                        </div>
                        <button class="btn dropdown-toggle text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">TV News</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                            <li><a class="dropdown-item" href="#">Option 2</a></li>
                        </ul>
                        <input type="text" class="form-control" placeholder="Search for News Directors" aria-label="Search">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <img src="{{ asset('user/assets/vectors/search-icon.png') }}" alt="Search Icon" class="search-icon">
                            </span>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="#" class="hero-link">Find a News Director by name</a>
                </div>
            </div>
        </section>

        {{-- latest ratings & newsletter --}}
        <div class="container">
            <div class="row">
                <div class="col col-md-8">
                    <div class="row">
                        <div class="col-12" style="border-bottom: 1px solid #BDBDBD;">
                            <div class="row right-title-header">
                                <div class="col-12">
                                    <h2 class="fw-bold left-col-title">Latest Ratings</h2>

                                </div>
                            </div>
                            <div>
                                {{-- loop div --}}
                                <div class="review-container">
                                    {{-- lr header --}}
                                    <div class="review-header">
                                        <div class="review-header-content">
                                            <div class="d-flex">
                                                <div class="review-image me-2">
                                                    <img src="{{ asset('user/assets/img/dummy-img.png') }}" alt="">
                                                </div>
                                                <div class="review-details">
                                                    <p class="review-title">Reporter | MMJ (OMB)</p>
                                                    <a href="#" class="job-details-link">
                                                        Job details
                                                        <span><img src="{{ asset('user/assets/svg/Rectangle 60 (Stroke)-1.svg') }}" alt=""></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="review-verification">
                                                <p>
                                                    <span class="gare-icon"><img src="{{ asset('user/assets/vectors/gare-vector.png') }}" style="width: 18px;height: 18px;" alt=""></span>
                                                    <span class="verified-rating">Verified Rating</span>
                                                    <span class="rating-of">of</span>
                                                    <span class="rating-logo"><img src="{{ asset('user/assets/img/Logo.png') }}" style="width: 46px;height: 35px;" alt=""></span>
                                                    <span class="news-channel-name">KABC</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Review Block --}}
                                    <div class="review-block">
                                        {{-- lr 2 --}}
                                        <div class="row review-content-block">
                                            <div class="col-md-4 d-flex">
                                                <div>
                                                    <img src="{{ asset('user/assets/img/Rectangle 56.png') }}" alt="">
                                                </div>
                                                <div class="news-director-info">
                                                    <p class="news-director">
                                                        <span class="director-title">News Director</span>
                                                        <span class="current-badge">current</span>
                                                    </p>
                                                    <h6 class="news-director-name">Brooklyn Simmons</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <p class="review-director-label">Review of News Director</p>
                                                <p><strong>Nice guy, but lacks decisiveness, leadership, and aggressiveness.</strong> Eu elementum pellentesque nibh molestie. Tempor purus sed pellentesque integer non. Nec sed tortor nec quis tempor diam non turpis. Sed venenatis at montes, leo tellus egestas. Nulla pharetra.</p>
                                            </div>
                                        </div>
                                        {{-- Additional Comments --}}
                                        <div class="additional-comments pt-3">
                                            <p class="work-experience-label">While working here, this person experienced</p>
                                            <p><strong>Sexual discrimination, Racial discrimination, Sexual harassment...</strong></p>
                                        </div>
                                        <div class="comments-section pt-3">
                                            <p class="additional-comments-label">Additional comments</p>
                                            <p><strong>One of the best places you could ever work. Very relaxed environment...</strong> <span class="see-more-link">see more</span></p>
                                        </div>
                                        {{-- Ratings Section --}}
                                        <div class="row d-flex ratings-section pt-3">
                                            <div class="col-md-4">
                                                <p class="rating-label">Newsroom rating</p>
                                                <div class="rating-bars">
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar inactive"></span>
                                                </div>
                                                <p class="rating-description fw-bold">This newsroom is friendly</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="rating-label">Coworkers rating</p>
                                                <div class="rating-bars">
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar active"></span>
                                                </div>
                                                <p class="rating-description fw-bold">Super friendly</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="rating-label">Would recommend working here?</p>
                                                <div class="rating-bars">
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar inactive"></span>
                                                    <span class="rating-bar inactive"></span>
                                                </div>
                                                <p class="rating-description fw-bold">I'm not sure</p>
                                            </div>
                                        </div>
                                        {{-- Tags and Footer --}}
                                        <div class="review-tags pt-3">
                                            <p class="me-3">Tags:</p>
                                            <div>
                                                <span class="tag fw-light">Organized</span>
                                                <span class="tag fw-light">Positive</span>
                                                <span class="tag fw-light">Fun</span>
                                            </div>
                                        </div>
                                        <div class="review-footer d-flex justify-content-between align-items-center pt-4">
                                            <div>
                                                <button class="like-button">
                                                    <span><img src="{{ asset('user/assets/vectors/like-vector.png') }}" alt=""></span>Liked
                                                </button>
                                                <button class="report-button">
                                                    <span><img src="{{ asset('user/assets/vectors/flag-vector.png') }}" alt=""></span>Report
                                                </button>
                                            </div>
                                            <p class="submitted-date fw-light">submitted: <span>03-24-21</span></p>
                                        </div>
                                        {{-- Response --}}
                                        <div class="review-response d-flex pt-3">
                                            <div class="review-response-logo me-3">
                                                <img src="{{ asset('user/assets/img/Logo.png') }}" alt="">
                                            </div>
                                            <div class="response-message flex-grow-1">
                                                <p>Thank you for the review, we really appreciate it and we will try to be even better. Thank you!</p>
                                                <p class="response-date">2 weeks ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="review-container mt-4">
                                    {{-- lr header --}}
                                    <div class="review-header">
                                        <div class="review-header-content">
                                            <div class="d-flex">
                                                <div class="review-image me-2">
                                                    <img src="{{ asset('user/assets/img/dummy-img.png') }}" alt="">
                                                </div>
                                                <div class="review-details">
                                                    <p class="review-title">Reporter | MMJ (OMB)</p>
                                                    <a href="#" class="job-details-link">
                                                        Job details
                                                        <span><img src="{{ asset('user/assets/svg/Rectangle 60 (Stroke)-1.svg') }}" alt=""></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="review-verification">
                                                <p>
                                                    <span class="gare-icon"><img src="{{ asset('user/assets/vectors/gare-vector.png') }}" style="width: 18px;height: 18px;" alt=""></span>
                                                    <span class="verified-rating">Verified Rating</span>
                                                    <span class="rating-of">of</span>
                                                    <span class="rating-logo"><img src="{{ asset('user/assets/img/Logo.png') }}" style="width: 46px;height: 35px;" alt=""></span>
                                                    <span class="news-channel-name">KABC</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Review Block --}}
                                    <div class="review-block">
                                        {{-- lr 2 --}}
                                        <div class="row review-content-block">
                                            <div class="col-md-4 d-flex">
                                                <div>
                                                    <img src="{{ asset('user/assets/img/Rectangle 56.png') }}" alt="">
                                                </div>
                                                <div class="news-director-info">
                                                    <p class="news-director">
                                                        <span class="director-title">News Director</span>
                                                        <span class="current-badge">current</span>
                                                    </p>
                                                    <h6 class="news-director-name">Brooklyn Simmons</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <p class="review-director-label">Review of News Director</p>
                                                <p><strong>Nice guy, but lacks decisiveness, leadership, and aggressiveness.</strong> Eu elementum pellentesque nibh molestie. Tempor purus sed pellentesque integer non. Nec sed tortor nec quis tempor diam non turpis. Sed venenatis at montes, leo tellus egestas. Nulla pharetra.</p>
                                            </div>
                                        </div>
                                        {{-- Additional Comments --}}
                                        <div class="additional-comments pt-3">
                                            <p class="work-experience-label">While working here, this person experienced</p>
                                            <p><strong>Sexual discrimination, Racial discrimination, Sexual harassment...</strong></p>
                                        </div>
                                        <div class="comments-section pt-3">
                                            <p class="additional-comments-label">Additional comments</p>
                                            <p><strong>One of the best places you could ever work. Very relaxed environment...</strong> <span class="see-more-link">see more</span></p>
                                        </div>
                                        {{-- Ratings Section --}}
                                        <div class="row d-flex ratings-section pt-3">
                                            <div class="col-md-4">
                                                <p class="rating-label">Newsroom rating</p>
                                                <div class="rating-bars">
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar inactive"></span>
                                                </div>
                                                <p class="rating-description fw-bold">This newsroom is friendly</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="rating-label">Coworkers rating</p>
                                                <div class="rating-bars">
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar active"></span>
                                                </div>
                                                <p class="rating-description fw-bold">Super friendly</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p class="rating-label">Would recommend working here?</p>
                                                <div class="rating-bars">
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar active"></span>
                                                    <span class="rating-bar inactive"></span>
                                                    <span class="rating-bar inactive"></span>
                                                </div>
                                                <p class="rating-description fw-bold">I'm not sure</p>
                                            </div>
                                        </div>
                                        {{-- Tags and Footer --}}
                                        <div class="review-tags pt-3">
                                            <p class="me-3">Tags:</p>
                                            <div>
                                                <span class="tag fw-light">Organized</span>
                                                <span class="tag fw-light">Positive</span>
                                                <span class="tag fw-light">Fun</span>
                                            </div>
                                        </div>
                                        <div class="review-footer d-flex justify-content-between align-items-center pt-4">
                                            <div>
                                                <button class="like-button">
                                                    <span><img src="{{ asset('user/assets/vectors/like-vector.png') }}" alt=""></span>Liked
                                                </button>
                                                <button class="report-button">
                                                    <span><img src="{{ asset('user/assets/vectors/flag-vector.png') }}" alt=""></span>Report
                                                </button>
                                            </div>
                                            <p class="submitted-date fw-light">submitted: <span>03-24-21</span></p>
                                        </div>
                                        {{-- Response --}}
                                        <div class="review-response d-flex pt-3">
                                            <div class="review-response-logo me-3">
                                                <img src="{{ asset('user/assets/img/Logo.png') }}" alt="">
                                            </div>
                                            <div class="response-message flex-grow-1">
                                                <p>Thank you for the review, we really appreciate it and we will try to be even better. Thank you!</p>
                                                <p class="response-date">2 weeks ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- load more button --}}
                                <div class="load-more-btn-parent">
                                    <button class="load-more-btn">Load More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="row align-items-center left-title-header">
                        <div class="col-md-8">
                            <h2 class="fw-bold right-col-title">Newsletter</h2>
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

                    <x-user.product-card image="user/assets/img/image-5.png" title="#NewsBae Engraved Heart Necklace"
                        amount="35.00" />

                    <x-user.product-card visibility="visible" image="user/assets/img/image-6.png"
                        title="America Needs Local News Bar Chain Bracelet" amount="30.50 – $33.50" />

                    <x-user.product-card visibility="visible" image="user/assets/img/image-7.png"
                        title="America Needs Local News Mug" amount="11.00 – $15.50" />

                    <x-user.product-card image="user/assets/img/image-8.png" title="Anchor Woman Pom-Pom Beanie" amount="19.50" />

                </div>

                <div class="row pt-5">
                    <div class="col text-center">
                        <a href="{{ url('shop') }}" class="see-all-products-btn">See all Products</a>
                    </div>
                </div>
            </div>
        </section>

        {{-- looking for work --}}
        <x-user.searching-queries />
    </main>

@endsection
