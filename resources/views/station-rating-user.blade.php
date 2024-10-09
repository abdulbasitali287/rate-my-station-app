@extends('layout.main')
@section('content')
    {{-- Hero Section --}}
<section id="hero-section" style="height: 294px;background-image: url({{ asset('user/assets/ellipse/job-opening.png') }});"></section>

<section style="margin-top: -164px;">
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
                    <a href="#" class="fw-bold bg-transparent" style="margin-block: 6px;border: 2px solid #194D79;color: #194D79;padding-block: 11px;border-radius: 12px;letter-spacing: 0.5px;transition: all 0.5s;text-align: center;">
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
                    <li class="px-4 pt-4 pb-3 fw-bold" style="border-bottom: 4px solid #89C400;">
                        <a href="{{ url('station-rating-user') }}" class="text-black">My ratings</a>
                    </li>
                    <li class="p-4">
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
</section>

<section>
    <div class="container pt-4">
        <div class="row">
            <div class="col col-md-8 px-0">
                <div class="row">
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
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="row pt-4">
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
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <div class="mt-4" style="background-color: #FFFFFF;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);padding: 30px;">
                                        <div style="padding-top: 5px;padding-bottom: 20px;border-bottom: 1px solid #F2F2F2;margin-bottom: 20px;">
                                            <div style="display: flex;justify-content: space-between;">
                                                <div class="d-flex">
                                                    <div style="width: 52px;height: 52px;margin-inline-end: 10px;">
                                                        <img src="{{ asset('user/assets/img/dummy-img.png') }}" style="width: 100%;" alt="">
                                                    </div>
                                                    <div class="">
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
                                                    <p><span style="display: inline-block;padding-inline-end: 4px;"><img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span><span style="color: #89C400">Verified Rating</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- for block border --}}
                                        <div>
                                            {{-- lr 2 --}}
                                            <div class="row" style="background-color: #F2F2F2;border-radius: 10px;padding-block: 15px;">
                                                <div class="col col-md-4 d-flex">
                                                    <div>
                                                        <img src="{{ asset('user/assets/img/Rectangle 56.png') }}" alt="">
                                                    </div>
                                                    <div style="padding-inline-start: 10px;">
                                                        <p style="color: #828282;"><span class="d-inline-block pe-1">News Director </span><span class="fw-semiBold" style="padding-block: 2px;background-color: #89C400;border-radius: 6px;color: #ffff;padding-inline: 10px;padding-top: 0px;font-size: 10px;">current</span></p>
                                                        <h6 style="padding-top: 5px;font-weight: 700;">Brooklyn Simmons</h6>
                                                    </div>
                                                </div>
                                                <div class="col col-md-8" style="padding-inline: 20px;">
                                                    <p style="color: #828282;">Review of News Director</p>
                                                    <p>
                                                        <strong> Nice guy, but lacks decisiveness, leadership, and aggressiveness.</strong>
                                                        Euelementum
                                                        pellentesque nibh molestie. Tempor purus sed pellentesque integer non.
                                                        Nec sed
                                                        tortor nec quis tempor diam non turpis. Sed venenatis at montes, leo
                                                        tellus
                                                        egestas. Nulla pharetra.
                                                    </p>
                                                </div>
                                            </div>
                                            {{-- lr 3 --}}
                                            <div>
                                                <div style="padding-block: 15px;">
                                                    <p style="color: #828282;">While working here, this person experienced</p>
                                                    <p><strong>Sexual discrimination, Racial discrimination, Sexual harassment, An
                                                        overall work
                                                        environment</strong></p>
                                                </div>
                                                <div style="padding-block: 7px;">
                                                    <p style="color: #828282;">Additional comments</p>
                                                    <p><strong>One of the best places you could ever work. Very relaxed environment.</strong>
                                                        Everyone is
                                                        the best at what they do. Management is great. No complaints. Eu
                                                        pellentesque
                                                        nibh... <span class="d-inline-block" style="color: #194D79;font-weight: 600;">see more</span></p>
                                                </div>
                                            </div>
                                            {{-- lr 4 --}}
                                            <div class="row d-flex">
                                                <div class="col col-md-4" style="padding-block: 10px;">
                                                    <p style="color: #828282;">Newsroom rating</p>
                                                    <div style="padding-block: 10px;">
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #F2F2F2;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                    </div>
                                                    <p style="font-weight: bold;">This newsroom is friendly</p>
                                                </div>
                                                <div class="col col-md-4" style="padding-block: 10px;padding-inline-start: 10px;">
                                                    <p style="color: #828282;">Coworkers rating</p>
                                                    <div style="padding-block: 10px;">
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                    </div>
                                                    <p style="font-weight: bold;">Super friendly</p>
                                                </div>
                                                <div class="col col-md-4" style="padding-block: 10px;padding-inline-start: 10px;">
                                                    <p style="color: #828282;">Would recommend working here?</p>
                                                    <div style="padding-block: 10px;">
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #F2F2F2;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #F2F2F2;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                    </div>
                                                    <p style="font-weight: bold;">I'm not sure</p>
                                                </div>
                                            </div>
                                            {{-- lr 5 --}}
                                            <div class="d-flex" style="color: #828282;padding-top: 16px;padding-bottom: 30px;border-bottom: 1px solid #E0E0E0;">
                                                <p style="padding-inline-end: 10px;">Tags:</p>
                                                <div>
                                                    <span style="display: inline-block;padding-inline: 10px;padding-block: 1px;background-color: #F2F2F2;border-radius: 6px;">Organized</span>
                                                    <span style="display: inline-block;padding-inline: 10px;padding-block: 1px;background-color: #F2F2F2;border-radius: 6px;">Positive</span>
                                                    <span style="display: inline-block;padding-inline: 10px;padding-block: 1px;background-color: #F2F2F2;border-radius: 6px;">Fun</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- lr 6 --}}
                                        <div>
                                            <div class="d-flex justify-content-between align-items-center py-4">
                                                <div>
                                                    <button style="background-color: #F2F2F2;border: none;padding-block: 6px;padding-inline: 10px;border-radius: 8px;color: #89C400;margin-inline-end: 5px;"><span style="padding-inline-end: 7px;"><img src="{{ asset('user/assets/vectors/like-vector.png') }}" style="width: 20px;height: 19px;" alt=""></span>Liked</button>
                                                    <button style="background-color: #F2F2F2;border: none;padding-block: 6px;padding-inline: 10px;border-radius: 8px;color: #828282;"><span style="padding-inline-end: 7px;"><img src="{{ asset('user/assets/vectors/flag-vector.png') }}" style="width: 20px;height: 19px;" alt=""></span>Report</button>
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
                                    </div>
                                    <div class="mt-4" style="background-color: #FFFFFF;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);padding: 30px;">
                                        <div style="padding-top: 5px;padding-bottom: 20px;border-bottom: 1px solid #F2F2F2;margin-bottom: 20px;">
                                            <div style="display: flex;justify-content: space-between;">
                                                <div class="d-flex">
                                                    <div style="width: 52px;height: 52px;margin-inline-end: 10px;">
                                                        <img src="{{ asset('user/assets/img/dummy-img.png') }}" style="width: 100%;" alt="">
                                                    </div>
                                                    <div class="">
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
                                                    <p><span style="display: inline-block;padding-inline-end: 4px;"><img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span><span style="color: #89C400">Verified Rating</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- for block border --}}
                                        <div>
                                            {{-- lr 2 --}}
                                            <div class="row" style="background-color: #F2F2F2;border-radius: 10px;padding-block: 15px;">
                                                <div class="col col-md-4 d-flex">
                                                    <div>
                                                        <img src="{{ asset('user/assets/img/Rectangle 56.png') }}" alt="">
                                                    </div>
                                                    <div style="padding-inline-start: 10px;">
                                                        <p style="color: #828282;"><span class="d-inline-block pe-1">News Director </span><span class="fw-semiBold" style="padding-block: 2px;background-color: #89C400;border-radius: 6px;color: #ffff;padding-inline: 10px;padding-top: 0px;font-size: 10px;">current</span></p>
                                                        <h6 style="padding-top: 5px;font-weight: 700;">Brooklyn Simmons</h6>
                                                    </div>
                                                </div>
                                                <div class="col col-md-8" style="padding-inline: 20px;">
                                                    <p style="color: #828282;">Review of News Director</p>
                                                    <p>
                                                        <strong> Nice guy, but lacks decisiveness, leadership, and aggressiveness.</strong>
                                                        Euelementum
                                                        pellentesque nibh molestie. Tempor purus sed pellentesque integer non.
                                                        Nec sed
                                                        tortor nec quis tempor diam non turpis. Sed venenatis at montes, leo
                                                        tellus
                                                        egestas. Nulla pharetra.
                                                    </p>
                                                </div>
                                            </div>
                                            {{-- lr 3 --}}
                                            <div>
                                                <div style="padding-block: 15px;">
                                                    <p style="color: #828282;">While working here, this person experienced</p>
                                                    <p><strong>Sexual discrimination, Racial discrimination, Sexual harassment, An
                                                        overall work
                                                        environment</strong></p>
                                                </div>
                                                <div style="padding-block: 7px;">
                                                    <p style="color: #828282;">Additional comments</p>
                                                    <p><strong>One of the best places you could ever work. Very relaxed environment.</strong>
                                                        Everyone is
                                                        the best at what they do. Management is great. No complaints. Eu
                                                        pellentesque
                                                        nibh... <span class="d-inline-block" style="color: #194D79;font-weight: 600;">see more</span></p>
                                                </div>
                                            </div>
                                            {{-- lr 4 --}}
                                            <div class="row d-flex">
                                                <div class="col col-md-4" style="padding-block: 10px;">
                                                    <p style="color: #828282;">Newsroom rating</p>
                                                    <div style="padding-block: 10px;">
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #F2F2F2;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                    </div>
                                                    <p style="font-weight: bold;">This newsroom is friendly</p>
                                                </div>
                                                <div class="col col-md-4" style="padding-block: 10px;padding-inline-start: 10px;">
                                                    <p style="color: #828282;">Coworkers rating</p>
                                                    <div style="padding-block: 10px;">
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                    </div>
                                                    <p style="font-weight: bold;">Super friendly</p>
                                                </div>
                                                <div class="col col-md-4" style="padding-block: 10px;padding-inline-start: 10px;">
                                                    <p style="color: #828282;">Would recommend working here?</p>
                                                    <div style="padding-block: 10px;">
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #F2F2F2;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                        <span style="display: inline-block;background-color: #F2F2F2;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                                    </div>
                                                    <p style="font-weight: bold;">I'm not sure</p>
                                                </div>
                                            </div>
                                            {{-- lr 5 --}}
                                            <div class="d-flex" style="color: #828282;padding-top: 16px;padding-bottom: 30px;border-bottom: 1px solid #E0E0E0;">
                                                <p style="padding-inline-end: 10px;">Tags:</p>
                                                <div>
                                                    <span style="display: inline-block;padding-inline: 10px;padding-block: 1px;background-color: #F2F2F2;border-radius: 6px;">Organized</span>
                                                    <span style="display: inline-block;padding-inline: 10px;padding-block: 1px;background-color: #F2F2F2;border-radius: 6px;">Positive</span>
                                                    <span style="display: inline-block;padding-inline: 10px;padding-block: 1px;background-color: #F2F2F2;border-radius: 6px;">Fun</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- lr 6 --}}
                                        <div>
                                            <div class="d-flex justify-content-between align-items-center py-4">
                                                <div>
                                                    <button style="background-color: #F2F2F2;border: none;padding-block: 6px;padding-inline: 10px;border-radius: 8px;color: #89C400;margin-inline-end: 5px;"><span style="padding-inline-end: 7px;"><img src="{{ asset('user/assets/vectors/like-vector.png') }}" style="width: 20px;height: 19px;" alt=""></span>Liked</button>
                                                    <button style="background-color: #F2F2F2;border: none;padding-block: 6px;padding-inline: 10px;border-radius: 8px;color: #828282;"><span style="padding-inline-end: 7px;"><img src="{{ asset('user/assets/vectors/flag-vector.png') }}" style="width: 20px;height: 19px;" alt=""></span>Report</button>
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
            <div class="col col-md-4 px-4" id="latest-articles">
                <div class="row align-items-center pb-4">
                    <div class="col-md-8">
                        <h2 class="fw-bold" style="font-size: 28px;">Newsletter</h2>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="#" class="see-all-link">See all</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        {{-- latest posts --}}
                        {{-- loop div --}}
                        <x-user.latest-article />
                        <x-user.latest-article path="user/assets/img/2.png" title="Working chrismast and new year’s eve doesn’t have to be depressing" />
                        <x-user.latest-article path="user/assets/img/3.png" title="Is Jumping from Journalism to PR and communications a good idea?" />
                        {{-- newsletter subscribe --}}
                        <div class="newsletter-subscribe">
                            <h6>Subscribe to our Newsletter, so you'll never miss one</h6>
                            <input type="text" placeholder="Your email" class="form-control">
                            <button class="subscribe-btn">Subscribe</button>
                        </div>
                        {{-- rms --}}
                        <div>
                            <div id="lr-main-heading">
                                <h2>Follow RMS</h2>
                            </div>
                            <div class="rms-follow">
                                <div class="rms-social-item">
                                    <img src="{{ asset('user/assets/vectors/facebook-vector.png') }}" class="social-icon" alt="">
                                    <span>@RateMyStation</span>
                                </div>
                                <div class="rms-social-item">
                                    <img src="{{ asset('user/assets/vectors/instagram-vector.png') }}" class="social-icon" alt="">
                                    <span>@RateMyStation</span>
                                </div>
                                <div class="rms-social-item">
                                    <img src="{{ asset('user/assets/vectors/twitter-vector.png') }}" class="social-icon" alt="">
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

@endsection
