@extends('layout.main')

@section('content')
    <main id="newsletter-main">

        {{-- banner Section --}}
        <section class="banner-section"></section>

        <section class="newsletter-banner mt-minus-412">
            <div class="container">
                <div class="row overflow-hidden rounded-lg shadow">
                    <div class="col-md-6 p-0">
                        <img src="{{ asset('user/assets/img/newsletter-banner.png') }}" class="w-100" alt="Newsletter Banner">
                    </div>
                    <div class="col-md-6 p-0 bg-white">
                        <div class="newsletter-content h-100">
                            <h1 class="fw-bold">Can Starting In A Top 50 Market Really Ruin Your Journalism Career?</h1>
                            <div class="d-flex justify-content-between py-4">
                                <p class="text-muted">
                                    <span class="me-1"><img src="{{ asset('user/assets/vectors/timer-vector.png') }}"
                                            alt="Timer"></span>
                                    <span class="text-small">Updated 8 hours ago</span>
                                </p>
                                <p><span>Written by </span><span class="author-name">Soul Witness</span></p>
                            </div>
                            <p class="article-excerpt fw-light">
                                Feugiat sagittis, turpis et a fermentum blandit amet in phasellus. Nibh nunc ultrices ac at
                                at sit purus pellentesque a. Urna, eget elit at risus tempus, fames amet. Nulla cursus diam
                                vel amet lacus, sem id. Cursus auctor pulvinar dignissim mauris non ultrices. Sed.
                            </p>
                            <div class="dot-indicators pt-5">
                                <span class="dot active"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="filter-header">

            <div class="container py-4">
                <div class="row">
                    <!-- Search Input -->
                    <div class="col-md-8">
                        <div class="input-group d-flex justify-content-center align-items-center search-bar">
                            <input type="text" class="fw-light border-0 ps-3 flex-grow-1"
                                placeholder="Search articles or writer">
                            <span class="input-group-text bg-transparent border-0 pe-3">
                                <img src="{{ asset('user/assets/vectors/search-30.png') }}" width="19" height="19"
                                    alt="Search Icon">
                            </span>
                        </div>
                    </div>

                    <!-- Filter & Sort Options -->
                    <div class="col-md-4 d-flex justify-content-end">
                        <div class="d-flex align-items-center pe-3">
                            <p class="mb-0 pe-2 text-muted fw-medium">Filter</p>
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Writer
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <p class="mb-0 pe-2 text-muted fw-medium">Sort</p>
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Newest
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- latest articles & recommended --}}
            <div class="container latest-articles" style="border-bottom: 1px solid #BDBDBD;padding-bottom: 30px;">
                <div class="row">
                    {{-- latest ratings --}}
                    <div class="col col-md-8">
                        <div class="row">
                            <div class="col-12 right-title-header">
                                <h2>Latest Articles</h2>
                            </div>
                        </div>
                        {{-- large image card --}}
                        <div class="row">
                            <div class="col-12">
                                <div class="overflow-hidden mb-3 shadow-sm rounded-3 main-img-article">
                                    <div>
                                        <div>
                                            <img src="{{ asset('user/assets/img/time-watch.png') }}" class="img-fluid"
                                                alt="Article Image">
                                        </div>
                                        <div class="bg-white p-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="text-muted d-flex align-items-center mb-0 header-date">
                                                    <span class="me-2">
                                                        <img src="{{ asset('user/assets/vectors/timer.png') }}"
                                                            width="13" height="14" alt="Timer Icon">
                                                    </span>
                                                    <span class="small">May 24, 2022</span>
                                                </p>
                                                <button class="btn btn-sm" type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <img src="{{ asset('user/assets/img/three-dots-2.png') }}"
                                                        alt="More Options">
                                                </button>
                                                <div class="dropdown-menu">
                                                    <!-- Dropdown content goes here -->
                                                </div>
                                            </div>

                                            <h3 class="fw-bold lh-base mt-3">10 Ways To Stay Healthy While Working A Crazy
                                                News Schedule</h3>

                                            <div
                                                class="d-flex justify-content-between align-items-center pt-3 large-article-footer">
                                                <p class="mb-0 lg-footer-left-side">
                                                    <span>Written by </span>
                                                    <span class="fw-bold bold-span">Soul Witness</span>
                                                </p>
                                                <ul class="d-flex list-unstyled mb-0 lg-footer-right-side">
                                                    <li class="px-2 d-flex align-items-center">
                                                        <img src="{{ asset('user/assets/vectors/figma-thumb.png') }}"
                                                            class="img-fluid me-2" width="21" height="19"
                                                            alt="Thumbs Up">
                                                        <span>35</span>
                                                    </li>
                                                    <li class="px-2 d-flex align-items-center">
                                                        <img src="{{ asset('user/assets/vectors/figma-message.png') }}"
                                                            class="img-fluid me-2" width="18px" alt="Comments">
                                                        <span>25</span>
                                                    </li>
                                                    <li class="px-2 d-flex align-items-center">
                                                        <img src="{{ asset('user/assets/vectors/figma-share.png') }}"
                                                            class="img-fluid me-2" width="18px" alt="Share">
                                                        <span>15</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- small image card --}}
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex overflow-hidden mb-3 shadow-sm rounded-3 small-img-article">
                                    <div class="img-container">
                                        <img src="{{ asset('user/assets/img/taking-picture.png') }}"
                                            class="img-fluid h-100" alt="Taking Picture">
                                    </div>
                                    <div class="bg-white p-4">
                                        <div
                                            class="d-flex justify-content-between align-items-center small-card-article-header">
                                            <p class="text-muted d-flex align-items-center mb-0">
                                                <span class="me-2">
                                                    <img src="{{ asset('user/assets/vectors/timer.png') }}"
                                                        width="13" height="14" alt="Timer">
                                                </span>
                                                <span>May 24, 2022</span>
                                            </p>
                                            <button class="btn btn-sm" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <img src="{{ asset('user/assets/img/three-dots-2.png') }}"
                                                    alt="More Options">
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown content goes here -->
                                            </div>
                                        </div>
                                        <h3 class="fw-bold mt-3 lh-base pe-3">10 Ways To Stay Healthy While Working A Crazy
                                            News Schedule</h3>
                                        <div
                                            class="d-flex justify-content-between align-items-center pt-3 small-card-article-footer">
                                            <p class="mb-0">
                                                <span>Written by </span>
                                                <span class="fw-bold">Soul Witness</span>
                                            </p>
                                            <ul class="d-flex list-unstyled mb-0">
                                                <li class="px-2 d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/vectors/figma-thumb.png') }}"
                                                        class="img-fluid me-2" width="18px" alt="Thumbs Up">
                                                    <span>35</span>
                                                </li>
                                                <li class="px-2 d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/vectors/figma-message.png') }}"
                                                        class="img-fluid me-2" width="18px" alt="Comments">
                                                    <span>25</span>
                                                </li>
                                                <li class="px-2 d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/vectors/figma-share.png') }}"
                                                        class="img-fluid me-2" width="18px" alt="Share">
                                                    <span>15</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex overflow-hidden mb-3 shadow-sm rounded-3 small-img-article">
                                    <div class="img-container">
                                        <img src="{{ asset('user/assets/img/news-printer.png') }}"
                                            class="img-fluid h-100" alt="Taking Picture">
                                    </div>
                                    <div class="bg-white p-4">
                                        <div
                                            class="d-flex justify-content-between align-items-center small-card-article-header">
                                            <p class="text-muted d-flex align-items-center mb-0">
                                                <span class="me-2">
                                                    <img src="{{ asset('user/assets/vectors/timer.png') }}"
                                                        width="13" height="14" alt="Timer">
                                                </span>
                                                <span>May 24, 2022</span>
                                            </p>
                                            <button class="btn btn-sm" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <img src="{{ asset('user/assets/img/three-dots-2.png') }}"
                                                    alt="More Options">
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown content goes here -->
                                            </div>
                                        </div>
                                        <h3 class="fw-bold mt-3 lh-base pe-3">10 Ways To Stay Healthy While Working A Crazy
                                            News Schedule</h3>
                                        <div
                                            class="d-flex justify-content-between align-items-center pt-3 small-card-article-footer">
                                            <p class="mb-0">
                                                <span>Written by </span>
                                                <span class="fw-bold">Soul Witness</span>
                                            </p>
                                            <ul class="d-flex list-unstyled mb-0">
                                                <li class="px-2 d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/vectors/figma-thumb.png') }}"
                                                        class="img-fluid me-2" width="18px" alt="Thumbs Up">
                                                    <span>35</span>
                                                </li>
                                                <li class="px-2 d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/vectors/figma-message.png') }}"
                                                        class="img-fluid me-2" width="18px" alt="Comments">
                                                    <span>25</span>
                                                </li>
                                                <li class="px-2 d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/vectors/figma-share.png') }}"
                                                        class="img-fluid me-2" width="18px" alt="Share">
                                                    <span>15</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex overflow-hidden mb-3 shadow-sm rounded-3 small-img-article">
                                    <div class="img-container">
                                        <img src="{{ asset('user/assets/img/preparing-camera.png') }}"
                                            class="img-fluid h-100" alt="Taking Picture">
                                    </div>
                                    <div class="bg-white p-4">
                                        <div
                                            class="d-flex justify-content-between align-items-center small-card-article-header">
                                            <p class="text-muted d-flex align-items-center mb-0">
                                                <span class="me-2">
                                                    <img src="{{ asset('user/assets/vectors/timer.png') }}"
                                                        width="13" height="14" alt="Timer">
                                                </span>
                                                <span>May 24, 2022</span>
                                            </p>
                                            <button class="btn btn-sm" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <img src="{{ asset('user/assets/img/three-dots-2.png') }}"
                                                    alt="More Options">
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown content goes here -->
                                            </div>
                                        </div>
                                        <h3 class="fw-bold mt-3 lh-base pe-3">10 Ways To Stay Healthy While Working A Crazy
                                            News Schedule</h3>
                                        <div
                                            class="d-flex justify-content-between align-items-center pt-3 small-card-article-footer">
                                            <p class="mb-0">
                                                <span>Written by </span>
                                                <span class="fw-bold">Soul Witness</span>
                                            </p>
                                            <ul class="d-flex list-unstyled mb-0">
                                                <li class="px-2 d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/vectors/figma-thumb.png') }}"
                                                        class="img-fluid me-2" width="18px" alt="Thumbs Up">
                                                    <span>35</span>
                                                </li>
                                                <li class="px-2 d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/vectors/figma-message.png') }}"
                                                        class="img-fluid me-2" width="18px" alt="Comments">
                                                    <span>25</span>
                                                </li>
                                                <li class="px-2 d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/vectors/figma-share.png') }}"
                                                        class="img-fluid me-2" width="18px" alt="Share">
                                                    <span>15</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- pagination --}}
                        <x-user.pagination />

                    </div>
                    <div class="col col-md-4">
                        <div class="row align-items-center left-title-header">
                            <div class="col-md-8">
                                <h2 class="fw-bold right-col-title">Recommended</h2>
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
                                <x-user.latest-article path="user/assets/img/2.png"
                                    title="Working Christmas and New Year's Eve doesn’t have to be depressing" />
                                <x-user.latest-article path="user/assets/img/3.png"
                                    title="Is Jumping from Journalism to PR and Communications a Good Idea?" />

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
                                            <img src="{{ asset('user/assets/vectors/facebook-vector.png') }}"
                                                class="social-icon" alt="Facebook">
                                            <span>@RateMyStation</span>
                                        </div>
                                        <div class="rms-social-item">
                                            <img src="{{ asset('user/assets/vectors/instagram-vector.png') }}"
                                                class="social-icon" alt="Instagram">
                                            <span>@RateMyStation</span>
                                        </div>
                                        <div class="rms-social-item">
                                            <img src="{{ asset('user/assets/vectors/twitter-vector.png') }}"
                                                class="social-icon" alt="Twitter">
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

                    <x-user.product-card image="user/assets/img/image-3.png" title="Anonymous Source Onesie"
                        amount="18.00" />

                    <x-user.product-card image="user/assets/img/image-4.png" title="You Are A PKG Framed Poster"
                        amount="26.00 – $105.00" />

                </div>
                <div class="d-flex justify-content-between position-absolute"
                    style="top: 50%;right: -26px;left: -26px;opacity: 0.8">
                    <button type="button"
                        style="background-color: #FFFFFF;padding-inline: 15px;padding-block: 7px;border-radius: 100%;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);border: none;"><img
                            src="{{ asset('user/assets/vectors/left-arrow-gray.png') }}" alt=""></button>
                    <button type="button"
                        style="background-color: #FFFFFF;padding-inline: 15px;padding-block: 7px;border-radius: 100%;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);border: none;"><img
                            src="{{ asset('user/assets/vectors/right-arrow-gray.png') }}" alt=""></button>
                </div>
            </div>
        </section>

    </main>
@endsection
