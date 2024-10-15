@extends('layout.main')
@section('content')
    <main id="station-rating-main">
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
                    <div class="col-md-3 pb-4 d-flex justify-content-center align-items-center border-bottom">
                        <div class="account-actions">
                            <a href="{{ url('newsroom-profile') }}" class="account-settings-button">
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
                            <li class="menu-item">
                                <a href="{{ url('station-profile') }}" class="text-black">Profile</a>
                            </li>
                            <li class="menu-item active">
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
            <div class="container pt-4 px-0">
                <div class="row">
                    <div class="col col-md-8 px-0 pt-3">
                        {{-- <div class="row">
                            <div class="col-12">
                                <div class="bg-white" style="padding: 20px;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                                    <h2 style="font-weight: bold;font-size: 24px;">Station’s Ratings</h2>
                                    <div class="d-flex pb-3" style="border-bottom: 1px solid  #F2F2F2;">
                                        <div class="text-center">
                                            <strong class="fw-medium" style="font-size: 96px;">4.8</strong><sub style="font-size: 24px;color: #828282;">/5.0</sub>
                                            <p style="font-size: 20px;color: #194D79;">From <span class="fw-bold">500 ratings</span></p>
                                        </div>
                                        <div class="pt-5 flex-grow-1">
                                            <div class="d-flex align-items-center pb-2">
                                                <div class="px-4"><strong>5</strong></div>
                                                <div class="flex-grow-1" style="height: 9px;background-color: #F2F2F2;border-radius: 20px;"><div style="width: calc(100% - 15%);height: 100%;background-color: #89C400;border-radius: 20px;"></div></div>
                                                <div class="px-4">35</div>
                                            </div>
                                            <div class="d-flex align-items-center pb-2">
                                                <div class="px-4"><strong>4</strong></div>
                                                <div class="flex-grow-1" style="height: 9px;background-color: #F2F2F2;border-radius: 20px;"><div style="width: calc(100% - 35%);height: 100%;background-color: #89C400;border-radius: 20px;"></div></div>
                                                <div class="px-4">5</div>
                                            </div>
                                            <div class="d-flex align-items-center pb-2">
                                                <div class="px-4"><strong>3</strong></div>
                                                <div class="flex-grow-1" style="height: 9px;background-color: #F2F2F2;border-radius: 20px;"><div style="width: calc(100% - 45%);height: 100%;background-color: #89C400;border-radius: 20px;"></div></div>
                                                <div class="px-4">2</div>
                                            </div>
                                            <div class="d-flex align-items-center pb-2">
                                                <div class="px-4"><strong>2</strong></div>
                                                <div class="flex-grow-1" style="height: 9px;background-color: #F2F2F2;border-radius: 20px;"><div style="width: calc(100% - 65%);height: 100%;background-color: #89C400;border-radius: 20px;"></div></div>
                                                <div class="px-4">2</div>
                                            </div>
                                            <div class="d-flex align-items-center pb-2">
                                                <div class="px-4"><strong>1</strong></div>
                                                <div class="flex-grow-1" style="height: 9px;background-color: #F2F2F2;border-radius: 20px;"><div style="width: calc(100% - 85%);height: 100%;background-color: #89C400;border-radius: 20px;"></div></div>
                                                <div class="px-4">1</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-4">
                                        <strong class="fw-semiBold" style="font-size: 18px;">Most Popular Tags:</strong>
                                        <div class="pt-2">
                                            <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2" style="color: #828282;background-color: #F2F2F2;">Broadcasting</span>
                                            <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2" style="color: #828282;background-color: #F2F2F2;">Organized</span>
                                            <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2" style="color: #828282;background-color: #F2F2F2;">High Pay</span>
                                            <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2" style="color: #828282;background-color: #F2F2F2;">Positive</span>
                                            <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2" style="color: #828282;background-color: #F2F2F2;">Fun</span>
                                            <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2" style="color: #828282;background-color: #F2F2F2;">Broadcasting</span>
                                            <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2" style="color: #828282;background-color: #F2F2F2;">Positive</span>
                                            <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2" style="color: #828282;background-color: #F2F2F2;">High Pay</span>
                                            <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2" style="color: #828282;background-color: #F2F2F2;">Positive</span>
                                            <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2" style="color: #828282;background-color: #F2F2F2;">Fun</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- station-rating-section --}}
                        <div class="row">
                            <div class="col-12">
                                <div class="bg-white station-ratings-container">
                                    <h2 class="station-ratings-heading">Station’s Ratings</h2>
                                    <div class="d-flex pb-3 ratings-section">
                                        <div class="text-center">
                                            <strong class="fw-medium rating-number">4.8</strong>
                                            <sub class="sub-rating">/5.0</sub>
                                            <p class="rating-description">From <span class="fw-bold">500 ratings</span></p>
                                        </div>
                                        <div class="pt-5 flex-grow-1">
                                            <div class="d-flex align-items-center pb-2">
                                                <div class="px-4"><strong>5</strong></div>
                                                <div class="flex-grow-1 rating-bar-bg">
                                                    <div class="rating-bar-fill" style="width: calc(100% - 15%);"></div>
                                                </div>
                                                <div class="px-4">35</div>
                                            </div>
                                            <div class="d-flex align-items-center pb-2">
                                                <div class="px-4"><strong>4</strong></div>
                                                <div class="flex-grow-1 rating-bar-bg">
                                                    <div class="rating-bar-fill" style="width: calc(100% - 35%);"></div>
                                                </div>
                                                <div class="px-4">5</div>
                                            </div>
                                            <div class="d-flex align-items-center pb-2">
                                                <div class="px-4"><strong>3</strong></div>
                                                <div class="flex-grow-1 rating-bar-bg">
                                                    <div class="rating-bar-fill" style="width: calc(100% - 45%);"></div>
                                                </div>
                                                <div class="px-4">2</div>
                                            </div>
                                            <div class="d-flex align-items-center pb-2">
                                                <div class="px-4"><strong>2</strong></div>
                                                <div class="flex-grow-1 rating-bar-bg">
                                                    <div class="rating-bar-fill" style="width: calc(100% - 65%);"></div>
                                                </div>
                                                <div class="px-4">2</div>
                                            </div>
                                            <div class="d-flex align-items-center pb-2">
                                                <div class="px-4"><strong>1</strong></div>
                                                <div class="flex-grow-1 rating-bar-bg">
                                                    <div class="rating-bar-fill" style="width: calc(100% - 85%);"></div>
                                                </div>
                                                <div class="px-4">1</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-4">
                                        <strong class="fw-semiBold popular-tags-title">Most Popular Tags:</strong>
                                        <div class="pt-2">
                                            <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2 tag">Broadcasting</span>
                                            <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2 tag">Organized</span>
                                            <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2 tag">High Pay</span>
                                            <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2 tag">Positive</span>
                                            <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2 tag">Fun</span>
                                            <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2 tag">Broadcasting</span>
                                            <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2 tag">Positive</span>
                                            <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2 tag">High Pay</span>
                                            <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2 tag">Positive</span>
                                            <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2 tag">Fun</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                {{-- <div class="row pt-4">
                                    <div class="col-md-8">
                                        <h2 class="fw-bold" style="font-size: 28px;">My Ratings <span style="color: #828282;">(19)</span></h2>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-end">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-center pe-3">
                                                <p class="pe-2" style="color: #828282;font-weight: 500;font-size: 14px;">Filter</p>
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary dropdown-toggle" style="color: #828282;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Job title</button>
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
                                </div> --}}
                                <div class="row pt-4">
                                    <div class="col-md-8">
                                        <h2 class="rating-title">My Ratings <span class="rating-filter">(19)</span></h2>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-end">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-center pe-3">
                                                <p class="pe-2 rating-filter">Filter</p>
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary dropdown-toggle dropdown-button" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Job title</button>
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
                                                <p class="pe-2 rating-filter">Short</p>
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary dropdown-toggle dropdown-button" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Newest</button>
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
                                    <div class="col-12">
                                        <div>
                                            <div class="mt-4 review-card">
                                                <div class="reporter-section">
                                                    <div class="reporter-header">
                                                        <div class="reporter-info">
                                                            <div class="reporter-img">
                                                                <img src="{{ asset('user/assets/img/dummy-img.png') }}" style="width: 100%;" alt="">
                                                            </div>
                                                            <div class="reporter-details">
                                                                <div>
                                                                    <p style="font-weight: 500;">Reporter | MMJ (OMB)</p>
                                                                </div>
                                                                <div>
                                                                    <a href="#" class="fw-semiBold" style="color: #194D79;">
                                                                        Job details
                                                                        <span><img src="{{ asset('user/assets/svg/Rectangle 60 (Stroke)-1.svg') }}" alt=""></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <p><span style="display: inline-block;padding-inline-end: 4px;"><img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span><span class="verified-rating">Verified Rating</span></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="review-block row">
                                                    <div class="col col-md-4 d-flex">
                                                        <div>
                                                            <img src="{{ asset('user/assets/img/Rectangle 56.png') }}" alt="">
                                                        </div>
                                                        <div class="padding-left">
                                                            <p class="review-title"><span class="d-inline-block pe-1">News Director</span><span class="current-label">current</span></p>
                                                            <h6 style="padding-top: 5px;font-weight: 700;">Brooklyn Simmons</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col col-md-8 padding-inline-20">
                                                        <p class="review-title">Review of News Director</p>
                                                        <p>
                                                            <strong> Nice guy, but lacks decisiveness, leadership, and aggressiveness.</strong>
                                                            Euelementum pellentesque nibh molestie. Tempor purus sed pellentesque integer non. Nec sed tortor nec quis tempor diam non turpis. Sed venenatis at montes, leo tellus egestas. Nulla pharetra.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div style="padding-block: 15px;">
                                                        <p class="review-title">While working here, this person experienced</p>
                                                        <p><strong>Sexual discrimination, Racial discrimination, Sexual harassment, An overall work environment</strong></p>
                                                    </div>
                                                    <div class="additional-comments">
                                                        <p class="review-title">Additional comments</p>
                                                        <p><strong>One of the best places you could ever work. Very relaxed environment.</strong> Everyone is the best at what they do. Management is great. No complaints. Eu pellentesque nibh... <span class="d-inline-block" style="color: #194D79;font-weight: 600;">see more</span></p>
                                                    </div>
                                                </div>

                                                <div class="row d-flex rating-section">
                                                    <div class="col col-md-4">
                                                        <p class="review-title">Newsroom rating</p>
                                                        <div style="padding-block: 10px;">
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #F2F2F2;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                        </div>
                                                        <p style="font-weight: bold;">This newsroom is friendly</p>
                                                    </div>
                                                    <div class="col col-md-4">
                                                        <p class="review-title">Coworkers rating</p>
                                                        <div style="padding-block: 10px;">
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                        </div>
                                                        <p style="font-weight: bold;">Super friendly</p>
                                                    </div>
                                                    <div class="col col-md-4">
                                                        <p class="review-title">Would recommend working here?</p>
                                                        <div style="padding-block: 10px;">
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #F2F2F2;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #F2F2F2;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                        </div>
                                                        <p style="font-weight: bold;">I'm not sure</p>
                                                    </div>
                                                </div>

                                                <div class="tag-section d-flex">
                                                    <p style="padding-inline-end: 10px;">Tags:</p>
                                                    <div>
                                                        <span class="tag">Organized</span>
                                                        <span class="tag">Positive</span>
                                                        <span class="tag">Fun</span>
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center py-4">
                                                    <div>
                                                        <button class="submit-review">
                                                            <span style="padding-inline-end: 7px;">
                                                                <img src="{{ asset('user/assets/vectors/like-vector.png') }}" style="width: 20px;height: 19px;" alt="">
                                                            </span>Liked
                                                        </button>
                                                        <button class="report-button"><span style="padding-inline-end: 7px;"><img src="{{ asset('user/assets/vectors/flag-vector.png') }}" style="width: 20px;height: 19px;" alt=""></span>Report</button>
                                                    </div>
                                                    <div>
                                                        <p style="color: #828282;">submitted: <span>03-24-21</span></p>
                                                    </div>
                                                </div>

                                                <div class="d-flex">
                                                    <div style="padding-inline-end: 15px;">
                                                        <img src="{{ asset('user/assets/img/Logo.png') }}" style="width: 56px;height: 43px;" alt="">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label for="#" class="w-100 d-flex px-4" style="background-color: #F2F2F2;border-radius: 10px;padding-block: 12px;">
                                                            <input type="text" class="w-100 bg-transparent border-0" placeholder="Write a review..." style="color: #828282;">
                                                            <img src="{{ asset('user/assets/vectors/send-message.png') }}" style="width: 20px;height: 20px;" alt="">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-4 review-card">
                                                <div class="reporter-section">
                                                    <div class="reporter-header">
                                                        <div class="reporter-info">
                                                            <div class="reporter-img">
                                                                <img src="{{ asset('user/assets/img/dummy-img.png') }}" style="width: 100%;" alt="">
                                                            </div>
                                                            <div class="reporter-details">
                                                                <div>
                                                                    <p style="font-weight: 500;">Reporter | MMJ (OMB)</p>
                                                                </div>
                                                                <div>
                                                                    <a href="#" class="fw-semiBold" style="color: #194D79;">
                                                                        Job details
                                                                        <span><img src="{{ asset('user/assets/svg/Rectangle 60 (Stroke)-1.svg') }}" alt=""></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <p><span style="display: inline-block;padding-inline-end: 4px;"><img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span><span class="verified-rating">Verified Rating</span></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="review-block row">
                                                    <div class="col col-md-4 d-flex">
                                                        <div>
                                                            <img src="{{ asset('user/assets/img/Rectangle 56.png') }}" alt="">
                                                        </div>
                                                        <div class="padding-left">
                                                            <p class="review-title"><span class="d-inline-block pe-1">News Director</span><span class="current-label">current</span></p>
                                                            <h6 style="padding-top: 5px;font-weight: 700;">Brooklyn Simmons</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col col-md-8 padding-inline-20">
                                                        <p class="review-title">Review of News Director</p>
                                                        <p>
                                                            <strong> Nice guy, but lacks decisiveness, leadership, and aggressiveness.</strong>
                                                            Euelementum pellentesque nibh molestie. Tempor purus sed pellentesque integer non. Nec sed tortor nec quis tempor diam non turpis. Sed venenatis at montes, leo tellus egestas. Nulla pharetra.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div style="padding-block: 15px;">
                                                        <p class="review-title">While working here, this person experienced</p>
                                                        <p><strong>Sexual discrimination, Racial discrimination, Sexual harassment, An overall work environment</strong></p>
                                                    </div>
                                                    <div class="additional-comments">
                                                        <p class="review-title">Additional comments</p>
                                                        <p><strong>One of the best places you could ever work. Very relaxed environment.</strong> Everyone is the best at what they do. Management is great. No complaints. Eu pellentesque nibh... <span class="d-inline-block" style="color: #194D79;font-weight: 600;">see more</span></p>
                                                    </div>
                                                </div>

                                                <div class="row d-flex rating-section">
                                                    <div class="col col-md-4">
                                                        <p class="review-title">Newsroom rating</p>
                                                        <div style="padding-block: 10px;">
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #F2F2F2;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                        </div>
                                                        <p style="font-weight: bold;">This newsroom is friendly</p>
                                                    </div>
                                                    <div class="col col-md-4">
                                                        <p class="review-title">Coworkers rating</p>
                                                        <div style="padding-block: 10px;">
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                        </div>
                                                        <p style="font-weight: bold;">Super friendly</p>
                                                    </div>
                                                    <div class="col col-md-4">
                                                        <p class="review-title">Would recommend working here?</p>
                                                        <div style="padding-block: 10px;">
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #89C400;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #F2F2F2;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                            <span class="d-inline-block" style="background-color: #F2F2F2;width: 34px;height: 12px;border-radius: 15px;"></span>
                                                        </div>
                                                        <p style="font-weight: bold;">I'm not sure</p>
                                                    </div>
                                                </div>

                                                <div class="tag-section d-flex">
                                                    <p style="padding-inline-end: 10px;">Tags:</p>
                                                    <div>
                                                        <span class="tag">Organized</span>
                                                        <span class="tag">Positive</span>
                                                        <span class="tag">Fun</span>
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center py-4">
                                                    <div>
                                                        <button class="submit-review">
                                                            <span style="padding-inline-end: 7px;">
                                                                <img src="{{ asset('user/assets/vectors/like-vector.png') }}" style="width: 20px;height: 19px;" alt="">
                                                            </span>Liked
                                                        </button>
                                                        <button class="report-button"><span style="padding-inline-end: 7px;"><img src="{{ asset('user/assets/vectors/flag-vector.png') }}" style="width: 20px;height: 19px;" alt=""></span>Report</button>
                                                    </div>
                                                    <div>
                                                        <p style="color: #828282;">submitted: <span>03-24-21</span></p>
                                                    </div>
                                                </div>

                                                <div class="d-flex">
                                                    <div style="padding-inline-end: 15px;">
                                                        <img src="{{ asset('user/assets/img/Logo.png') }}" style="width: 56px;height: 43px;" alt="">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <label for="#" class="w-100 d-flex px-4" style="background-color: #F2F2F2;border-radius: 10px;padding-block: 12px;">
                                                            <input type="text" class="w-100 bg-transparent border-0" placeholder="Write a review..." style="color: #828282;">
                                                            <img src="{{ asset('user/assets/vectors/send-message.png') }}" style="width: 20px;height: 20px;" alt="">
                                                        </label>
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
        </section>
    </main>
@endsection
