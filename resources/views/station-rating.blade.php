@extends('layout.main')
@section('content')
    {{-- Hero Section --}}
    <section id="hero-section"
        style="height: 294px;background-image: url({{ asset('user/assets/ellipse/job-opening.png') }});"></section>

    <section style="margin-top: -164px;">
        <div class="container">
            <div class="row"
                style="padding: 40px;background-color: #FFFFFF;border-radius: 12px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                <div class="col-md-9">
                    <div class="d-flex">
                        <div style="width: 137px;height: 106px;">
                            <img class="w-100 h-100" src="{{ asset('user/assets/img/Logo.jpg') }}" alt="">
                        </div>
                        <div style="padding-inline-start: 14px;">
                            <h2 class="position-relative" style="color: #194D79;font-size: 30px;font-weight: bold;">KABC
                                <span class="position-absolute" style="top: -4px;right: 92px;"><img
                                        src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span></h2>
                            <p style="color: #828282;">TV News Station</p>
                            <p style="color: #194D79;"><span style="display: inline-block;padding-inline-end: 4px;"><img
                                        src="{{ asset('user/assets/vectors/map-vector.png') }}" alt=""></span>Los
                                Angeles, CA | DMA: 2</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div style="width: 100%;height: 100%;display: flex;flex-direction: column;justify-content: center;">
                        <button class="subscribe-btn" style="margin-block: 6px;">Rate This Station</button>
                        <div class="d-flex justify-content-between align-items-center">
                            <button class="fw-bold bg-transparent"
                                style="padding-inline: 70px;padding-block: 11px;border-radius: 12px;letter-spacing: 0.5px;transition: all 0.5s;border:2px solid #194D79;color: #194D79;">Job
                                Openings</button>
                            <img src="{{ asset('user/assets/vectors/v-flag-station-rating.png') }}"
                                style="width: 15px;height: 20px;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container pt-4" style="border-bottom: 1px solid #BDBDBD;">
            <div class="row">
                <div class="col col-md-8 px-0">

                    <div class="bg-white"
                        style="padding: 20px;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                        <h2 style="font-weight: bold;font-size: 24px;">Station’s Ratings</h2>
                        <div class="d-flex pb-3" style="border-bottom: 1px solid  #F2F2F2;">
                            <div class="text-center">
                                <strong class="fw-medium" style="font-size: 96px;">4.8</strong><sub
                                    style="font-size: 24px;color: #828282;">/5.0</sub>
                                <p style="font-size: 20px;">From <span class="fw-bold">500 ratings</span></p>
                            </div>
                            <div class="pt-5 flex-grow-1">
                                <div class="d-flex align-items-center pb-2">
                                    <div class="px-4"><strong>5</strong></div>
                                    <div class="flex-grow-1"
                                        style="height: 9px;background-color: #F2F2F2;border-radius: 20px;">
                                        <div
                                            style="width: calc(100% - 15%);height: 100%;background-color: #89C400;border-radius: 20px;">
                                        </div>
                                    </div>
                                    <div class="px-4">35</div>
                                </div>
                                <div class="d-flex align-items-center pb-2">
                                    <div class="px-4"><strong>4</strong></div>
                                    <div class="flex-grow-1"
                                        style="height: 9px;background-color: #F2F2F2;border-radius: 20px;">
                                        <div
                                            style="width: calc(100% - 35%);height: 100%;background-color: #89C400;border-radius: 20px;">
                                        </div>
                                    </div>
                                    <div class="px-4">5</div>
                                </div>
                                <div class="d-flex align-items-center pb-2">
                                    <div class="px-4"><strong>3</strong></div>
                                    <div class="flex-grow-1"
                                        style="height: 9px;background-color: #F2F2F2;border-radius: 20px;">
                                        <div
                                            style="width: calc(100% - 45%);height: 100%;background-color: #89C400;border-radius: 20px;">
                                        </div>
                                    </div>
                                    <div class="px-4">2</div>
                                </div>
                                <div class="d-flex align-items-center pb-2">
                                    <div class="px-4"><strong>2</strong></div>
                                    <div class="flex-grow-1"
                                        style="height: 9px;background-color: #F2F2F2;border-radius: 20px;">
                                        <div
                                            style="width: calc(100% - 65%);height: 100%;background-color: #89C400;border-radius: 20px;">
                                        </div>
                                    </div>
                                    <div class="px-4">2</div>
                                </div>
                                <div class="d-flex align-items-center pb-2">
                                    <div class="px-4"><strong>1</strong></div>
                                    <div class="flex-grow-1"
                                        style="height: 9px;background-color: #F2F2F2;border-radius: 20px;">
                                        <div
                                            style="width: calc(100% - 85%);height: 100%;background-color: #89C400;border-radius: 20px;">
                                        </div>
                                    </div>
                                    <div class="px-4">1</div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4">
                            <strong class="fw-medium" style="font-size: 18px;">Most Popular Tags:</strong>
                            <div class="pt-2">
                                <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2"
                                    style="color: #828282;background-color: #F2F2F2;">Broadcasting</span>
                                <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2"
                                    style="color: #828282;background-color: #F2F2F2;">Organized</span>
                                <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2"
                                    style="color: #828282;background-color: #F2F2F2;">High Pay</span>
                                <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2"
                                    style="color: #828282;background-color: #F2F2F2;">Positive</span>
                                <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2"
                                    style="color: #828282;background-color: #F2F2F2;">Fun</span>
                                <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2"
                                    style="color: #828282;background-color: #F2F2F2;">Broadcasting</span>
                                <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2"
                                    style="color: #828282;background-color: #F2F2F2;">Positive</span>
                                <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2"
                                    style="color: #828282;background-color: #F2F2F2;">High Pay</span>
                                <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2"
                                    style="color: #828282;background-color: #F2F2F2;">Positive</span>
                                <span class="d-inline-block fw-light py-1 px-3 rounded-4 me-2 mb-2"
                                    style="color: #828282;background-color: #F2F2F2;">Fun</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white mt-4"
                        style="padding: 20px;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                        <strong class="fw-bold" style="font-size: 24px;">News Dirctors</strong>
                        <div class="d-flex justify-content-between p-4 mb-4">
                            <div class="d-flex align-items-center">
                                <div style="width: 73px;height: 73px;">
                                    <img src="{{ asset('user/assets/img/director-search-1.png') }}" class="w-100 h-100"
                                        alt="">
                                </div>
                                <div style="padding-inline-start: 14px;">
                                    <p style="font-size: 16px;">
                                        <span class="fw-semiBold" style="color: #777777;"> News Director </span>
                                        <span class="fw-semiBold"
                                            style="padding-block: 2px;background-color: #89C400;border-radius: 6px;color: #ffff;padding-inline: 10px;padding-top: 0px;font-size: 10px;">current</span>
                                    </p>
                                    <strong style="font-size: 26px;">Brooklyn Simmons</strong>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div>
                                    <a href="#" class="subscribe-btn px-5 fw-bold me-3"
                                        style="background-color: transparent;border: 2px solid #194D79;color: #194D79;">Contact
                                        Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between p-4 mb-4">
                            <div class="d-flex align-items-center">
                                <div style="width: 73px;height: 73px;">
                                    <img src="{{ asset('user/assets/img/station-rating-1.png') }}" class="w-100 h-100"
                                        alt="">
                                </div>
                                <div style="padding-inline-start: 14px;">
                                    <p style="font-size: 16px;">
                                        <span class="fw-semiBold" style="color: #777777;"> News Director </span>
                                    </p>
                                    <strong style="font-size: 26px;">Ronald Richards</strong>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div>
                                    <a href="#" class="subscribe-btn px-5 fw-bold me-3"
                                        style="background-color: transparent;border: 2px solid #194D79;color: #194D79;">Contact
                                        Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between p-4 mb-4">
                            <div class="d-flex align-items-center">
                                <div style="width: 73px;height: 73px;">
                                    <img src="{{ asset('user/assets/img/review-1-img.png') }}" class="w-100 h-100"
                                        alt="">
                                </div>
                                <div style="padding-inline-start: 14px;">
                                    <p style="font-size: 16px;">
                                        <span class="fw-semiBold" style="color: #777777;"> News Director </span>
                                    </p>
                                    <strong style="font-size: 26px;">Sally Ramirez</strong>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div>
                                    <a href="#" class="subscribe-btn px-5 fw-bold me-3"
                                        style="background-color: transparent;border: 2px solid #194D79;color: #194D79;">Contact
                                        Info</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="mt-4"
                            style="background-color: #FFFFFF;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);padding: 30px;">
                            <div
                                style="padding-top: 5px;padding-bottom: 20px;border-bottom: 1px solid #F2F2F2;margin-bottom: 20px;">
                                <div style="display: flex;justify-content: space-between;">
                                    <div class="d-flex">
                                        <div style="width: 52px;height: 52px;margin-inline-end: 10px;">
                                            <img src="{{ asset('user/assets/img/dummy-img.png') }}" style="width: 100%;"
                                                alt="">
                                        </div>
                                        <div class="">
                                            <div>
                                                <p style="font-weight: 500;">Reporter | MMJ (OMB)</p>
                                            </div>
                                            <div>
                                                <a href="#" class="fw-semiBold" style="color: #194D79;">
                                                    Job details
                                                    <span><img
                                                            src="{{ asset('user/assets/svg/Rectangle 60 (Stroke)-1.svg') }}"
                                                            alt=""></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p><span style="display: inline-block;padding-inline-end: 4px;"><img
                                                    src="{{ asset('user/assets/vectors/gare-vector.png') }}"
                                                    alt=""></span><span style="color: #89C400">Verified
                                                Rating</span></p>
                                    </div>
                                </div>
                            </div>
                            {{-- for block border --}}
                            <div>
                                {{-- lr 2 --}}
                                <div class="row"
                                    style="background-color: #F2F2F2;border-radius: 10px;padding-block: 15px;">
                                    <div class="col col-md-4 d-flex">
                                        <div>
                                            <img src="{{ asset('user/assets/img/Rectangle 56.png') }}" alt="">
                                        </div>
                                        <div style="padding-inline-start: 10px;">
                                            <p style="color: #828282;"><span class="d-inline-block pe-1">News Director
                                                </span><span class="fw-semiBold"
                                                    style="padding-block: 2px;background-color: #89C400;border-radius: 6px;color: #ffff;padding-inline: 10px;padding-top: 0px;font-size: 10px;">current</span>
                                            </p>
                                            <h6 style="padding-top: 5px;font-weight: 700;">Brooklyn Simmons</h6>
                                        </div>
                                    </div>
                                    <div class="col col-md-8" style="padding-inline: 20px;">
                                        <p style="color: #828282;">Review of News Director</p>
                                        <p>
                                            <strong> Nice guy, but lacks decisiveness, leadership, and
                                                aggressiveness.</strong>
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
                                        <p><strong>One of the best places you could ever work. Very relaxed
                                                environment.</strong>
                                            Everyone is
                                            the best at what they do. Management is great. No complaints. Eu
                                            pellentesque
                                            nibh... <span class="d-inline-block"
                                                style="color: #194D79;font-weight: 600;">see more</span></p>
                                    </div>
                                </div>
                                {{-- lr 4 --}}
                                <div class="row d-flex">
                                    <div class="col col-md-4" style="padding-block: 10px;">
                                        <p style="color: #828282;">Newsroom rating</p>
                                        <div style="padding-block: 10px;">
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #F2F2F2;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                        </div>
                                        <p style="font-weight: bold;">This newsroom is friendly</p>
                                    </div>
                                    <div class="col col-md-4" style="padding-block: 10px;padding-inline-start: 10px;">
                                        <p style="color: #828282;">Coworkers rating</p>
                                        <div style="padding-block: 10px;">
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                        </div>
                                        <p style="font-weight: bold;">Super friendly</p>
                                    </div>
                                    <div class="col col-md-4" style="padding-block: 10px;padding-inline-start: 10px;">
                                        <p style="color: #828282;">Would recommend working here?</p>
                                        <div style="padding-block: 10px;">
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #F2F2F2;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #F2F2F2;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                        </div>
                                        <p style="font-weight: bold;">I'm not sure</p>
                                    </div>
                                </div>
                                {{-- lr 5 --}}
                                <div class="d-flex"
                                    style="color: #828282;padding-top: 16px;padding-bottom: 30px;border-bottom: 1px solid #E0E0E0;">
                                    <p style="padding-inline-end: 10px;">Tags:</p>
                                    <div>
                                        <span
                                            style="display: inline-block;padding-inline: 10px;padding-block: 1px;background-color: #F2F2F2;border-radius: 6px;">Organized</span>
                                        <span
                                            style="display: inline-block;padding-inline: 10px;padding-block: 1px;background-color: #F2F2F2;border-radius: 6px;">Positive</span>
                                        <span
                                            style="display: inline-block;padding-inline: 10px;padding-block: 1px;background-color: #F2F2F2;border-radius: 6px;">Fun</span>
                                    </div>
                                </div>
                            </div>
                            {{-- lr 6 --}}
                            <div>
                                <div class="d-flex justify-content-between align-items-center py-4">
                                    <div>
                                        <button
                                            style="background-color: #F2F2F2;border: none;padding-block: 6px;padding-inline: 10px;border-radius: 8px;color: #89C400;margin-inline-end: 5px;"><span
                                                style="padding-inline-end: 7px;"><img
                                                    src="{{ asset('user/assets/vectors/like-vector.png') }}"
                                                    style="width: 20px;height: 19px;" alt=""></span>Liked</button>
                                        <button
                                            style="background-color: #F2F2F2;border: none;padding-block: 6px;padding-inline: 10px;border-radius: 8px;color: #828282;"><span
                                                style="padding-inline-end: 7px;"><img
                                                    src="{{ asset('user/assets/vectors/flag-vector.png') }}"
                                                    style="width: 20px;height: 19px;"
                                                    alt=""></span>Report</button>
                                    </div>
                                    <div>
                                        <p style="color: #828282;">submitted: <span>03-24-21</span></p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div style="padding-inline-end: 15px;">
                                        <img src="{{ asset('user/assets/img/Logo.png') }}"
                                            style="width: 56px;height: 43px;" alt="">
                                    </div>
                                    <div>
                                        <div
                                            style="background-color: #F2F2F2;padding-block: 15px;padding-inline: 20px;border-radius: 10px;">
                                            <p style="font-weight: 500;">Thank you for the review, we really appreciate it
                                                and we will try to
                                                be even better. Thank you!</p>
                                            <p style="color: #828282;padding-top: 10px;">2 weeks ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4"
                            style="background-color: #FFFFFF;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);padding: 30px;">
                            <div
                                style="padding-top: 5px;padding-bottom: 20px;border-bottom: 1px solid #F2F2F2;margin-bottom: 20px;">
                                <div style="display: flex;justify-content: space-between;">
                                    <div class="d-flex">
                                        <div style="width: 52px;height: 52px;margin-inline-end: 10px;">
                                            <img src="{{ asset('user/assets/img/dummy-img.png') }}" style="width: 100%;"
                                                alt="">
                                        </div>
                                        <div class="">
                                            <div>
                                                <p style="font-weight: 500;">Reporter | MMJ (OMB)</p>
                                            </div>
                                            <div>
                                                <a href="#" class="fw-semiBold" style="color: #194D79;">
                                                    Job details
                                                    <span><img
                                                            src="{{ asset('user/assets/svg/Rectangle 60 (Stroke)-1.svg') }}"
                                                            alt=""></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p><span style="display: inline-block;padding-inline-end: 4px;"><img
                                                    src="{{ asset('user/assets/vectors/gare-vector.png') }}"
                                                    alt=""></span><span style="color: #89C400">Verified
                                                Rating</span></p>
                                    </div>
                                </div>
                            </div>
                            {{-- for block border --}}
                            <div>
                                {{-- lr 2 --}}
                                <div class="row"
                                    style="background-color: #F2F2F2;border-radius: 10px;padding-block: 15px;">
                                    <div class="col col-md-4 d-flex">
                                        <div>
                                            <img src="{{ asset('user/assets/img/Rectangle 56.png') }}" alt="">
                                        </div>
                                        <div style="padding-inline-start: 10px;">
                                            <p style="color: #828282;"><span class="d-inline-block pe-1">News Director
                                                </span><span class="fw-semiBold"
                                                    style="padding-block: 2px;background-color: #89C400;border-radius: 6px;color: #ffff;padding-inline: 10px;padding-top: 0px;font-size: 10px;">current</span>
                                            </p>
                                            <h6 style="padding-top: 5px;font-weight: 700;">Brooklyn Simmons</h6>
                                        </div>
                                    </div>
                                    <div class="col col-md-8" style="padding-inline: 20px;">
                                        <p style="color: #828282;">Review of News Director</p>
                                        <p>
                                            <strong> Nice guy, but lacks decisiveness, leadership, and
                                                aggressiveness.</strong>
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
                                        <p><strong>One of the best places you could ever work. Very relaxed
                                                environment.</strong>
                                            Everyone is
                                            the best at what they do. Management is great. No complaints. Eu
                                            pellentesque
                                            nibh... <span class="d-inline-block"
                                                style="color: #194D79;font-weight: 600;">see more</span></p>
                                    </div>
                                </div>
                                {{-- lr 4 --}}
                                <div class="row d-flex">
                                    <div class="col col-md-4" style="padding-block: 10px;">
                                        <p style="color: #828282;">Newsroom rating</p>
                                        <div style="padding-block: 10px;">
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #F2F2F2;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                        </div>
                                        <p style="font-weight: bold;">This newsroom is friendly</p>
                                    </div>
                                    <div class="col col-md-4" style="padding-block: 10px;padding-inline-start: 10px;">
                                        <p style="color: #828282;">Coworkers rating</p>
                                        <div style="padding-block: 10px;">
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                        </div>
                                        <p style="font-weight: bold;">Super friendly</p>
                                    </div>
                                    <div class="col col-md-4" style="padding-block: 10px;padding-inline-start: 10px;">
                                        <p style="color: #828282;">Would recommend working here?</p>
                                        <div style="padding-block: 10px;">
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #89C400;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #F2F2F2;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                            <span
                                                style="display: inline-block;background-color: #F2F2F2;width: 34px;height: 12px;padding-inline: 15px;border-radius: 15px;"></span>
                                        </div>
                                        <p style="font-weight: bold;">I'm not sure</p>
                                    </div>
                                </div>
                                {{-- lr 5 --}}
                                <div class="d-flex"
                                    style="color: #828282;padding-top: 16px;padding-bottom: 30px;border-bottom: 1px solid #E0E0E0;">
                                    <p style="padding-inline-end: 10px;">Tags:</p>
                                    <div>
                                        <span
                                            style="display: inline-block;padding-inline: 10px;padding-block: 1px;background-color: #F2F2F2;border-radius: 6px;">Organized</span>
                                        <span
                                            style="display: inline-block;padding-inline: 10px;padding-block: 1px;background-color: #F2F2F2;border-radius: 6px;">Positive</span>
                                        <span
                                            style="display: inline-block;padding-inline: 10px;padding-block: 1px;background-color: #F2F2F2;border-radius: 6px;">Fun</span>
                                    </div>
                                </div>
                            </div>
                            {{-- lr 6 --}}
                            <div>
                                <div class="d-flex justify-content-between align-items-center py-4">
                                    <div>
                                        <button
                                            style="background-color: #F2F2F2;border: none;padding-block: 6px;padding-inline: 10px;border-radius: 8px;color: #89C400;margin-inline-end: 5px;"><span
                                                style="padding-inline-end: 7px;"><img
                                                    src="{{ asset('user/assets/vectors/like-vector.png') }}"
                                                    style="width: 20px;height: 19px;" alt=""></span>Liked</button>
                                        <button
                                            style="background-color: #F2F2F2;border: none;padding-block: 6px;padding-inline: 10px;border-radius: 8px;color: #828282;"><span
                                                style="padding-inline-end: 7px;"><img
                                                    src="{{ asset('user/assets/vectors/flag-vector.png') }}"
                                                    style="width: 20px;height: 19px;"
                                                    alt=""></span>Report</button>
                                    </div>
                                    <div>
                                        <p style="color: #828282;">submitted: <span>03-24-21</span></p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div style="padding-inline-end: 15px;">
                                        <img src="{{ asset('user/assets/img/Logo.png') }}"
                                            style="width: 56px;height: 43px;" alt="">
                                    </div>
                                    <div>
                                        <div
                                            style="background-color: #F2F2F2;padding-block: 15px;padding-inline: 20px;border-radius: 10px;">
                                            <p style="font-weight: 500;">Thank you for the review, we really appreciate it
                                                and we will try to
                                                be even better. Thank you!</p>
                                            <p style="color: #828282;padding-top: 10px;">2 weeks ago</p>
                                        </div>
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
                <div class="col col-md-4" id="latest-articles">
                    <div class="row align-items-center py-4">
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
                            <x-user.latest-article path="user/assets/img/2.png"
                                title="Working chrismast and new year’s eve doesn’t have to be depressing" />
                            <x-user.latest-article path="user/assets/img/3.png"
                                title="Is Jumping from Journalism to PR and communications a good idea?" />
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
                                        <img src="{{ asset('user/assets/vectors/facebook-vector.png') }}"
                                            class="social-icon" alt="">
                                        <span>@RateMyStation</span>
                                    </div>
                                    <div class="rms-social-item">
                                        <img src="{{ asset('user/assets/vectors/instagram-vector.png') }}"
                                            class="social-icon" alt="">
                                        <span>@RateMyStation</span>
                                    </div>
                                    <div class="rms-social-item">
                                        <img src="{{ asset('user/assets/vectors/twitter-vector.png') }}"
                                            class="social-icon" alt="">
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

                <x-user.product-card image="user/assets/img/image-5.png" title="#NewsBae Engraved Heart Necklace"
                    amount="35.00" />

                <x-user.product-card visibility="visible" image="user/assets/img/image-6.png"
                    title="America Needs Local News Bar Chain Bracelet" amount="30.50 – $33.50" />

                <x-user.product-card visibility="visible" image="user/assets/img/image-7.png"
                    title="America Needs Local News Mug" amount="11.00 – $15.50" />

                <x-user.product-card image="user/assets/img/image-8.png" title="Anchor Woman Pom-Pom Beanie"
                    amount="19.50" />

            </div>

            <div class="row pt-5">
                <div class="col text-center">
                    <button class="see-all-products-btn">See all Products</button>
                </div>
            </div>
        </div>
    </section>
@endsection
