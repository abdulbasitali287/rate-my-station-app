@extends('layout.main')
@section('content')

    <main id="user-subscribed-main">

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
                            <li class="p-4 tab-item">
                                <a href="{{ url('station-user-ratings') }}" class="text-black">My ratings</a>
                            </li>
                            <li class="p-4 tab-item">
                                <a href="{{ url('station-user-applied-jobs') }}" class="text-black">Applied Jobs</a>
                            </li>
                            <li class="p-4 tab-item">
                                <a href="{{ url('station-user-contact-info') }}" class="text-black">Contact Info</a>
                            </li>
                            <li class="p-4 tab-item active-tab">
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
                    <div class="col col-md-8 px-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="row subscription-header">
                                    <div class="col-md-8">
                                        <h2 class="fw-bold">Subscription <span>(3)</span></h2>
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
                                        <div>
                                            <div class="d-flex overflow-hidden mb-3" style="border-radius: 18px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                                                <div style="width: 360px;">
                                                    <img src="{{ asset('user/assets/img/taking-picture.png') }}" class="w-100 h-100" style="object-fit: cover;" alt="">
                                                </div>
                                                <div class="bg-white" style="padding: 25px;">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <p style="color: #828282;display: flex;align-items: center;">
                                                                <span style="display: inline-block;padding-inline-end: 3px;">
                                                                    <img src="{{ asset('user/assets/vectors/timer.png') }}" width="15px" alt="">
                                                                </span>
                                                                <span style="font-size: 12px;display: inline-block;padding-top: 5px;padding-inline-start: 3px;">May 24, 2022</span>
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                                            </button>
                                                            <div class="dropdown-menu">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="padding-inline-end: 22px;">
                                                        <h3 style="font-weight: bold;line-height: 41px;">10 Ways To Stay Healthy While Working A Crazy News Schedule</h3>
                                                    </div>
                                                    <div class="d-flex justify-content-between pt-3">
                                                        <p><span>Written by </span><span style="color: #194D79;font-weight: 500">Soul Witness</span></p>
                                                        <div>
                                                            <ul class="d-flex">
                                                                <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-thumb.png') }}" style="margin-top: -6px;" alt=""></span><span>35</span></li>
                                                                <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-message.png') }}" style="margin-top: -6px;" alt=""></span><span>25</span></li>
                                                                <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-share.png') }}" style="margin-top: -6px;" alt=""></span><span>15</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-hidden mb-3" style="border-radius: 18px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                                                <div style="width: 360px;">
                                                    <img src="{{ asset('user/assets/img/news-printer.png') }}" class="w-100 h-100" style="object-fit: cover;" alt="">
                                                </div>
                                                <div class="bg-white" style="padding: 25px;">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <p style="color: #828282;display: flex;align-items: center;">
                                                                <span style="display: inline-block;padding-inline-end: 3px;">
                                                                    <img src="{{ asset('user/assets/vectors/timer.png') }}" width="15px" alt="">
                                                                </span>
                                                                <span style="font-size: 12px;display: inline-block;padding-top: 5px;padding-inline-start: 3px;">May 24, 2022</span>
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                                            </button>
                                                            <div class="dropdown-menu">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="padding-inline-end: 22px;">
                                                        <h3 style="font-weight: bold;line-height: 41px;">10 Ways To Stay Healthy While Working A Crazy News Schedule</h3>
                                                    </div>
                                                    <div class="d-flex justify-content-between pt-3">
                                                        <p><span>Written by </span><span style="color: #194D79;font-weight: 500">Soul Witness</span></p>
                                                        <div>
                                                            <ul class="d-flex">
                                                                <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-thumb.png') }}" style="margin-top: -6px;" alt=""></span><span>35</span></li>
                                                                <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-message.png') }}" style="margin-top: -6px;" alt=""></span><span>25</span></li>
                                                                <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-share.png') }}" style="margin-top: -6px;" alt=""></span><span>15</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-hidden mb-3" style="border-radius: 18px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                                                <div style="width: 360px;">
                                                    <img src="{{ asset('user/assets/img/preparing-camera.png') }}" class="w-100 h-100" style="object-fit: cover;" alt="">
                                                </div>
                                                <div class="bg-white" style="padding: 25px;">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <p style="color: #828282;display: flex;align-items: center;">
                                                                <span style="display: inline-block;padding-inline-end: 3px;">
                                                                    <img src="{{ asset('user/assets/vectors/timer.png') }}" width="15px" alt="">
                                                                </span>
                                                                <span style="font-size: 12px;display: inline-block;padding-top: 5px;padding-inline-start: 3px;">May 24, 2022</span>
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                                            </button>
                                                            <div class="dropdown-menu">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="padding-inline-end: 22px;">
                                                        <h3 style="font-weight: bold;line-height: 41px;">10 Ways To Stay Healthy While Working A Crazy News Schedule</h3>
                                                    </div>
                                                    <div class="d-flex justify-content-between pt-3">
                                                        <p><span>Written by </span><span style="color: #194D79;font-weight: 500">Soul Witness</span></p>
                                                        <div>
                                                            <div>
                                                                <ul class="d-flex">
                                                                    <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-thumb.png') }}" style="margin-top: -6px;" alt=""></span><span>35</span></li>
                                                                    <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-message.png') }}" style="margin-top: -6px;" alt=""></span><span>25</span></li>
                                                                    <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-share.png') }}" style="margin-top: -6px;" alt=""></span><span>15</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-hidden mb-3" style="border-radius: 18px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                                                <div style="width: 360px;">
                                                    <img src="{{ asset('user/assets/img/taking-picture.png') }}" class="w-100 h-100" style="object-fit: cover;" alt="">
                                                </div>
                                                <div class="bg-white" style="padding: 25px;">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <p style="color: #828282;display: flex;align-items: center;">
                                                                <span style="display: inline-block;padding-inline-end: 3px;">
                                                                    <img src="{{ asset('user/assets/vectors/timer.png') }}" width="15px" alt="">
                                                                </span>
                                                                <span style="font-size: 12px;display: inline-block;padding-top: 5px;padding-inline-start: 3px;">May 24, 2022</span>
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                                            </button>
                                                            <div class="dropdown-menu">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="padding-inline-end: 22px;">
                                                        <h3 style="font-weight: bold;line-height: 41px;">10 Ways To Stay Healthy While Working A Crazy News Schedule</h3>
                                                    </div>
                                                    <div class="d-flex justify-content-between pt-3">
                                                        <p><span>Written by </span><span style="color: #194D79;font-weight: 500">Soul Witness</span></p>
                                                        <div>
                                                            <ul class="d-flex">
                                                                <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-thumb.png') }}" style="margin-top: -6px;" alt=""></span><span>35</span></li>
                                                                <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-message.png') }}" style="margin-top: -6px;" alt=""></span><span>25</span></li>
                                                                <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-share.png') }}" style="margin-top: -6px;" alt=""></span><span>15</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-hidden mb-3" style="border-radius: 18px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                                                <div style="width: 360px;">
                                                    <img src="{{ asset('user/assets/img/news-printer.png') }}" class="w-100 h-100" style="object-fit: cover;" alt="">
                                                </div>
                                                <div class="bg-white" style="padding: 25px;">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <p style="color: #828282;display: flex;align-items: center;">
                                                                <span style="display: inline-block;padding-inline-end: 3px;">
                                                                    <img src="{{ asset('user/assets/vectors/timer.png') }}" width="15px" alt="">
                                                                </span>
                                                                <span style="font-size: 12px;display: inline-block;padding-top: 5px;padding-inline-start: 3px;">May 24, 2022</span>
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                                            </button>
                                                            <div class="dropdown-menu">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="padding-inline-end: 22px;">
                                                        <h3 style="font-weight: bold;line-height: 41px;">10 Ways To Stay Healthy While Working A Crazy News Schedule</h3>
                                                    </div>
                                                    <div class="d-flex justify-content-between pt-3">
                                                        <p><span>Written by </span><span style="color: #194D79;font-weight: 500">Soul Witness</span></p>
                                                        <div>
                                                            <ul class="d-flex">
                                                                <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-thumb.png') }}" style="margin-top: -6px;" alt=""></span><span>35</span></li>
                                                                <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-message.png') }}" style="margin-top: -6px;" alt=""></span><span>25</span></li>
                                                                <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-share.png') }}" style="margin-top: -6px;" alt=""></span><span>15</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-hidden mb-3" style="border-radius: 18px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                                                <div style="width: 360px;">
                                                    <img src="{{ asset('user/assets/img/preparing-camera.png') }}" class="w-100 h-100" style="object-fit: cover;" alt="">
                                                </div>
                                                <div class="bg-white" style="padding: 25px;">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <p style="color: #828282;display: flex;align-items: center;">
                                                                <span style="display: inline-block;padding-inline-end: 3px;">
                                                                    <img src="{{ asset('user/assets/vectors/timer.png') }}" width="15px" alt="">
                                                                </span>
                                                                <span style="font-size: 12px;display: inline-block;padding-top: 5px;padding-inline-start: 3px;">May 24, 2022</span>
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                                            </button>
                                                            <div class="dropdown-menu">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="padding-inline-end: 22px;">
                                                        <h3 style="font-weight: bold;line-height: 41px;">10 Ways To Stay Healthy While Working A Crazy News Schedule</h3>
                                                    </div>
                                                    <div class="d-flex justify-content-between pt-3">
                                                        <p><span>Written by </span><span style="color: #194D79;font-weight: 500">Soul Witness</span></p>
                                                        <div>
                                                            <div>
                                                                <ul class="d-flex">
                                                                    <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-thumb.png') }}" style="margin-top: -6px;" alt=""></span><span>35</span></li>
                                                                    <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-message.png') }}" style="margin-top: -6px;" alt=""></span><span>25</span></li>
                                                                    <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-share.png') }}" style="margin-top: -6px;" alt=""></span><span>15</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{-- pagination --}}
                        <x-user.pagination />
                    </div>
                    <div class="col col-md-4">
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
