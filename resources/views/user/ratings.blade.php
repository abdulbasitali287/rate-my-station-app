@extends('layout.main')
@section('content')

    <main id="user-ratings-main">

        {{-- banner Section --}}
        <section class="banner-section"></section>

        {{-- user tabs header --}}
        <section class="tabs-header-section">
            <div class="container">
                <div class="row tabs-header-row">
                    <div class="col-md-9 pb-4" style="border-bottom: 1px solid #E0E0E0;">
                        <div class="d-flex align-items-center">
                            <div class="text-center pe-4 position-relative">
                                <div class="image-container">
                                    <img class="w-100 h-100 img-cover" src="{{ asset('user/assets/img/profile-1.png') }}" alt="">
                                </div>
                                <a href="#" class="subscribed-btn d-flex justify-content-center align-items-center">Subscribed</a>
                            </div>
                            <div class="profile-info-container">
                                <h2 class="profile-name-heading">Brooklyn Simmons <span><img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span></h2>
                                <p class="pb-2 fw-light profile-title">TV News Station <span class="fw-bold">KABC</span></p>
                                <p class="fw-light location-info">
                                    <span style="display: inline-block;padding-inline-end: 4px;margin-inline-end: 2px;">
                                        <img src="{{ asset('user/assets/vectors/map-vector.png') }}" alt="">
                                    </span>
                                    Los Angeles, CA | DMA: 2
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-4 d-flex justify-content-center align-items-center" style="border-bottom: 1px solid #E0E0E0;">
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
                        <ul class="d-flex">
                            <li class="px-4 pt-4 pb-3">
                                <a href="{{ url('station-user-profile') }}" class="text-black">Profile</a>
                            </li>
                            <li class="p-4 tab-item active-tab">
                                <a href="{{ url('station-user-ratings') }}" class="text-black">My ratings</a>
                            </li>
                            <li class="p-4 tab-item">
                                <a href="{{ url('station-user-applied-jobs') }}" class="text-black">Applied Jobs</a>
                            </li>
                            <li class="p-4 tab-item">
                                <a href="{{ url('station-user-contact-info') }}" class="text-black">Contact Info</a>
                            </li>
                            <li class="p-4 tab-item">
                                <a href="{{ url('station-user-suscribed') }}" class="text-black">Subscribed News</a>
                            </li>
                            <li class="p-4 tab-item">
                                <a href="{{ url('station-user-saved') }}" class="text-black">Saved</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 px-0 pt-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="row ratings-header">
                                    <div class="col-md-8">
                                        <h2 class="fw-bold">My Ratings <span>(3)</span></h2>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-end">
                                        <div class="d-flex">
                                            <div class="input-group-prepend d-flex align-items-center pe-3">
                                                <p class="filter-text pe-2">Filter</p>
                                                <button class="btn btn-outline-secondary dropdown-toggle filter-dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Job title</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                            <div class="input-group-prepend d-flex align-items-center">
                                                <p class="sort-text pe-2">Short</p>
                                                <button class="btn btn-outline-secondary dropdown-toggle sort-dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Newest</button>
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

                                <div class="row">
                                    <div class="col-12">
                                        <div style="background-color: #FFFFFF;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);padding: 30px;margin-top: 10px;">
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
                                                        <p>
                                                            <span style="display: inline-block;padding-inline-end: 4px;">
                                                                <img src="{{ asset('user/assets/svg/time-vector-blue.svg') }}" alt="">
                                                            </span>
                                                            <span class="fw-medium" style="color: #194D79;">Verified Rating</span>
                                                            <span style="color: #828282;display: inline-block;padding-inline-end: 5px;">of</span>
                                                            <span style="display: inline-block;width: 47px;height: 47px;margin-inline-end: 5px;">
                                                                <img src="{{ asset('user/assets/img/Logo.png') }}" style="width: 100%;" alt="">
                                                            </span>
                                                            <span style="font-weight: 700;">KABC</span>
                                                            <sup class="d-inline-block ps-3">
                                                                <a href="#"><img src="{{ asset('user/assets/img/three-dots-2.png') }}" style="width: 6px;height: 26px;" alt=""></a>
                                                            </sup>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1" style="padding-inline: 0px;"></div>
                                                    <div class="col-11" style="background-color: #F2F2F2;border-radius: 10px;padding-inline: 15px;padding-block: 15px;margin-block: 10px;">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <p class="fw-semiBold" style="color: #194D79;font-size: 14px;">Yearly salary</p>
                                                                <p style="font-weight: 600;font-size: 16px;">+$100,000</p>
                                                            </div>
                                                            <div class="col-3">
                                                                <p class="fw-semiBold" style="color: #194D79;font-size: 14px;">Contract</p>
                                                                <p style="font-weight: 600;font-size: 16px;">3 years</p>
                                                            </div>
                                                            <div class="col-3">
                                                                <p class="fw-semiBold" style="color: #194D79;font-size: 14px;">Paired with a photog</p>
                                                                <p style="font-weight: 600;font-size: 16px;">When Necessary</p>
                                                            </div>
                                                            <div class="col-3">
                                                                <p class="fw-semiBold" style="color: #194D79;font-size: 14px;">Station market rank</p>
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
                                                            <p style="color: #194D79;"><span class="d-inline-block pe-1">News Director </span><span class="fw-semiBold" style="padding-block: 2px;background-color: #89C400;border-radius: 6px;color: #ffff;padding-inline: 10px;padding-top: 0px;font-size: 10px;">current</span></p>
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
                                                        <button style="background-color: transparent;border: none;padding-inline: 10px;color: #828282;margin-inline-end: 5px;">
                                                            <span style="padding-inline-end: 7px;">
                                                                <img src="{{ asset('user/assets/vectors/like-24.png') }}" style="width: 20px;height: 19px;" alt="">
                                                            </span>
                                                            Like
                                                        </button>
                                                        <button style="background-color: transparent;border: none;padding-inline: 10px;color: #828282;">
                                                            <span style="padding-inline-end: 7px;">
                                                                <img src="{{ asset('user/assets/vectors/flag-vector.png') }}" style="width: 15px;height: 19px;" alt="">
                                                            </span>
                                                            Report
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <p class="fw-light" style="color: #828282;font-size: 14px;">submitted: <span>03-24-21</span></p>
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
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div style="background-color: #FFFFFF;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);padding: 30px;margin-top: 10px;">
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
                                                        <p>
                                                            <span style="display: inline-block;padding-inline-end: 4px;">
                                                                <img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt="">
                                                            </span>
                                                            <span class="fw-medium" style="color: #89C400;">Verified Rating</span>
                                                            <span style="color: #828282;display: inline-block;padding-inline-end: 5px;">of</span>
                                                            <span style="display: inline-block;width: 47px;height: 47px;margin-inline-end: 5px;">
                                                                <img src="{{ asset('user/assets/img/Logo.png') }}" style="width: 100%;" alt="">
                                                            </span>
                                                            <span style="font-weight: 700;">KABC</span>
                                                            <sup class="d-inline-block ps-3">
                                                                <a href="#"><img src="{{ asset('user/assets/img/three-dots-2.png') }}" style="width: 6px;height: 26px;" alt=""></a>
                                                            </sup>
                                                        </p>
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
                                                            <p style="color: #194D79;"><span class="d-inline-block pe-1">News Director </span><span class="fw-semiBold" style="padding-block: 2px;background-color: #89C400;border-radius: 6px;color: #ffff;padding-inline: 10px;padding-top: 0px;font-size: 10px;">current</span></p>
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
                                                        <button style="background-color: transparent;border: none;padding-inline: 10px;color: #828282;margin-inline-end: 5px;">
                                                            <span style="padding-inline-end: 7px;">
                                                                <img src="{{ asset('user/assets/vectors/like-24.png') }}" style="width: 20px;height: 19px;" alt="">
                                                            </span>
                                                            Like
                                                        </button>
                                                        <button style="background-color: transparent;border: none;padding-inline: 10px;color: #828282;">
                                                            <span style="padding-inline-end: 7px;">
                                                                <img src="{{ asset('user/assets/vectors/flag-vector.png') }}" style="width: 15px;height: 19px;" alt="">
                                                            </span>
                                                            Report
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <p class="fw-light" style="color: #828282;font-size: 14px;">submitted: <span>03-24-21</span></p>
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
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{-- load more button --}}
                        <div class="load-more-btn-parent">
                            <button class="load-more-btn">Load More</button>
                        </div>
                    </div>

                    <div class="col col-md-4 pt-5">
                        <div class="row latest-posts">
                            <div class="col-12">
                                <div class="row align-items-center pb-2 px-3 mb-3 ps-0">
                                    <div class="col-12 d-flex justify-content-between align-items-center">
                                        <h2 class="fw-bold job-openings-heading">Job Openings</h2>
                                        <a href="{{ url('jobs-opening') }}" class="see-all-link">See all</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="job-card">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="company-logo"><img src="{{ asset('user/assets/img/7-abc.png') }}" class="w-100 h-100" alt=""></div>
                                        <div class="job-info">
                                            <h6 class="m-0 fw-semiBold job-title">Assistant News Director</h6>
                                            <p class="fw-light company-name">KABC</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-around my-3 job-details">
                                        <div class="location-info">
                                            <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" class="location-icon" alt=""></span>
                                            <span class="location-text">Los Angeles, CA</span>
                                        </div>
                                        <div class="salary-info">
                                            <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" class="salary-icon" alt=""></span>
                                            <span class="salary-text">$100,000 - $130,000</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center pt-3">
                                        <div>
                                            <a href="{{ url('jobs-opening') }}" class="actively-hiring-btn">
                                                <span><img src="{{ asset('user/assets/vectors/tick-vector.png') }}" class="tick-icon" alt=""></span>
                                                <span class="hiring-text">Actively Hiring</span>
                                            </a>
                                        </div>
                                        <div>
                                            <p class="update-info"><span><img src="{{ asset('user/assets/vectors/timer-vector.png') }}" alt=""></span><span class="update-text">Updated 8 hours ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="job-card">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="company-logo"><img src="{{ asset('user/assets/img/7-abc.png') }}" class="w-100 h-100" alt=""></div>
                                        <div class="job-info">
                                            <h6 class="m-0 fw-semiBold job-title">Assistant News Director</h6>
                                            <p class="fw-light company-name">KABC</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-around my-3 job-details">
                                        <div class="location-info">
                                            <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" class="location-icon" alt=""></span>
                                            <span class="location-text">Los Angeles, CA</span>
                                        </div>
                                        <div class="salary-info">
                                            <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" class="salary-icon" alt=""></span>
                                            <span class="salary-text">$100,000 - $130,000</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center pt-3">
                                        <div>
                                            <button class="actively-hiring-btn">
                                                <span><img src="{{ asset('user/assets/vectors/tick-vector.png') }}" class="tick-icon" alt=""></span>
                                                <span class="hiring-text">Actively Hiring</span>
                                            </button>
                                        </div>
                                        <div>
                                            <p class="update-info"><span><img src="{{ asset('user/assets/vectors/timer-vector.png') }}" alt=""></span><span class="update-text">Updated 8 hours ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="job-card">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="company-logo"><img src="{{ asset('user/assets/img/7-abc.png') }}" class="w-100 h-100" alt=""></div>
                                        <div class="job-info">
                                            <h6 class="m-0 fw-semiBold job-title">Assistant News Director</h6>
                                            <p class="fw-light company-name">KABC</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-around my-3 job-details">
                                        <div class="location-info">
                                            <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" class="location-icon" alt=""></span>
                                            <span class="location-text">Los Angeles, CA</span>
                                        </div>
                                        <div class="salary-info">
                                            <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" class="salary-icon" alt=""></span>
                                            <span class="salary-text">$100,000 - $130,000</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center pt-3">
                                        <div>
                                            <button class="actively-hiring-btn">
                                                <span><img src="{{ asset('user/assets/vectors/tick-vector.png') }}" class="tick-icon" alt=""></span>
                                                <span class="hiring-text">Actively Hiring</span>
                                            </button>
                                        </div>
                                        <div>
                                            <p class="update-info"><span><img src="{{ asset('user/assets/vectors/timer-vector.png') }}" alt=""></span><span class="update-text">Updated 8 hours ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Repeat job-card blocks for other job listings -->
                            <div class="row pt-4">
                                <div class="col-12">
                                    <div class="row px-3 mb-3 ps-0">
                                        <div class="col-12 d-flex justify-content-between align-items-center">
                                            <h2 class="fw-bold newsletter-heading">Newsletter</h2>
                                            <a href="{{ url('newsletter') }}" class="see-all-link">See all</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <x-user.latest-article />
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <x-user.latest-article path="user/assets/img/2.png" title="Working chrismast and new year’s eve doesn’t have to be depressing" />
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <x-user.latest-article path="user/assets/img/3.png" title="Is Jumping from Journalism to PR and communications a good idea?" />
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
