@extends('layout.main')

@section('content')
        {{-- Hero Section --}}
        <section id="hero-section" class="hero-section">
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
                {{-- latest ratings --}}
                <div class="col col-md-8">
                    <section id="latest-ratings" style="border-bottom: 1px solid #BDBDBD;">
                        <div id="lr-main-heading">
                            <h2>Latest Ratings</h2>
                        </div>
                        <div>
                            {{-- loop div --}}
                            <div style="background-color: #FFFFFF;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);padding: 30px;">
                                {{-- lr header --}}
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
                                                    <a href="#" style="color: #194D79;font-weight: 500;">
                                                        Job details
                                                        <span><img src="{{ asset('user/assets/svg/Rectangle 60 (Stroke)-1.svg') }}" alt=""></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p><span style="display: inline-block;padding-inline-end: 4px;"><img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span><span style="color: #89C400">Verified Rating</span> <span style="color: #828282;display: inline-block;padding-inline-end: 5px;">of</span><span style="display: inline-block;width: 47px;height: 47px;margin-inline-end: 5px;"><img src="{{ asset('user/assets/img/Logo.png') }}" style="width: 100%;" alt=""></span><span style="font-weight: 700;">KABC</span></p>
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
                                        <div>
                                            <div style="background-color: #F2F2F2;padding-block: 15px;padding-inline: 20px;border-radius: 10px;">
                                                <p style="font-weight: 500;">Thank you for the review, we really appreciate it and we will try to
                                                    be even better. Thank you!</p>
                                                <p style="color: #828282;padding-top: 10px;">2 weeks ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="background-color: #FFFFFF;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);padding: 30px;margin-top: 10px;">
                                {{-- lr header --}}
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
                                                    <a href="#" style="color: #194D79;font-weight: 500;">
                                                        Job details
                                                        <span><img src="{{ asset('user/assets/svg/Rectangle 60 (Stroke)-1.svg') }}" alt=""></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p><span style="display: inline-block;padding-inline-end: 4px;"><img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span><span style="color: #89C400">Verified Rating</span> <span style="color: #828282;display: inline-block;padding-inline-end: 5px;">of</span><span style="display: inline-block;width: 47px;height: 47px;margin-inline-end: 5px;"><img src="{{ asset('user/assets/img/Logo.png') }}" style="width: 100%;" alt=""></span><span style="font-weight: 700;">KABC</span></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1" style="padding-inline: 0px;"></div>
                                        <div class="col-11" style="background-color: #F2F2F2;border-radius: 10px;padding-inline: 15px;padding-block: 15px;margin-block: 10px;">
                                            <div class="row">
                                                <div class="col-3">
                                                    <p style="color: #828282;font-weight:500;font-size: 12px;">Yearly salary</p>
                                                    <p style="font-weight: 600;font-size: 16px;">+$100,000</p>
                                                </div>
                                                <div class="col-3">
                                                    <p style="color: #828282;font-weight:500;font-size: 12px;">Contract</p>
                                                    <p style="font-weight: 600;font-size: 16px;">3 years</p>
                                                </div>
                                                <div class="col-3">
                                                    <p style="color: #828282;font-weight:500;font-size: 12px;">Paired with a photog</p>
                                                    <p style="font-weight: 600;font-size: 16px;">When Necessary</p>
                                                </div>
                                                <div class="col-3">
                                                    <p style="color: #828282;font-weight:500;font-size: 12px;">Station market rank</p>
                                                    <p style="font-weight: 600;font-size: 16px;">Between #1-2</p>
                                                </div>
                                            </div>
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
                                                Nice guy, but lacks decisiveness, leadership, and aggressiveness. Eu
                                                elementum
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
                                            <p>Sexual discrimination, Racial discrimination, Sexual harassment, An
                                                overall work
                                                environment</p>
                                        </div>
                                        <div style="padding-block: 7px;">
                                            <p style="color: #828282;">Additional comments</p>
                                            <p>One of the best places you could ever work. Very relaxed environment.
                                                Everyone is
                                                the best at what they do. Management is great. No complaints. Eu
                                                pellentesque
                                                nibh... see more</p>
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
                                        <div>
                                            <div style="background-color: #F2F2F2;padding-block: 15px;padding-inline: 20px;border-radius: 10px;">
                                                <p style="font-weight: 500;">Thank you for the review, we really appreciate it and we will try to
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
                    </section>
                </div>
                <div class="col col-md-4" id="latest-articles">
                    <div class="row align-items-center py-4">
                        <div class="col-md-8">
                            <h2 class="fw-bold" style="font-size: 28px;">Newsletter</h2>
                        </div>
                        <div class="col-md-4 text-center">
                            <a href="{{ url('newsletter') }}" class="see-all-link">See all</a>
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

        {{-- shop container --}}
        <div id="shop-container" class="container">
            <div class="row justify-content-center">
                <div id="lr-main-heading" class="text-center">
                    <h2>RateMyStation's Shop</h2>
                </div>
            </div>

            <div class="row">

                <x-user.product-card visibility="visible" image="user/assets/img/image-1.png" title="Don’t Make Me Use My News Voice Face Mask" amount="18.00" />

                <x-user.product-card visibility="visible" image="user/assets/img/image-2.png" title="America Needs Local News Sweatshirt" amount="25.00 – $33.50" />

                <x-user.product-card image="user/assets/img/image-3.png" title="Anonymous Source Onesie" amount="18.00" />

                <x-user.product-card image="user/assets/img/image-4.png" title="You Are A PKG Framed Poster" amount="26.00 – $105.00" />

                <x-user.product-card image="user/assets/img/image-5.png" title="#NewsBae Engraved Heart Necklace" amount="35.00" />

                <x-user.product-card image="user/assets/img/image-6.png" title="America Needs Local News Bar Chain Bracelet" amount="30.50 – $33.50" />

                <x-user.product-card image="user/assets/img/image-7.png" title="America Needs Local News Mug" amount="11.00 – $15.50" />

                <x-user.product-card image="user/assets/img/image-8.png" title="Anchor Woman Pom-Pom Beanie" amount="19.50" />

            </div>

            <div class="row pt-5">
                <div class="col text-center">
                    <a href="{{ url('shop') }}" class="see-all-products-btn">See all Products</a>
                </div>
            </div>
        </div>

        {{-- looking for work --}}
        <x-user.looking-for-work title="Looking for Work?" paragraph="Subscribe to our Job Center for instant access to thousands of job opportunities in media." />

@endsection
