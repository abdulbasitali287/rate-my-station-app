@extends('layout.main')
@section('content')

    <main id="user-contact-info-main">

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
                            <li class="p-4 tab-item active-tab">
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
                        <div class="bg-white p-5" style="padding: 20px;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                            <div class="row align-items-center pb-4">
                                <div class="col-md-8">
                                    <h2 class="fw-bold" style="font-size: 24px;">Brooklyn Simmons</h2>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="#" class="fw-thin d-inline-block me-3" style="color: #194D79;width: 22px;height: 22px;">
                                        <img src="{{ asset('user/assets/vectors/plus-vector-26.png') }}" class="w-100 h-100"  alt="">
                                    </a>
                                    <a href="#" class="fw-thin d-inline-block" data-bs-toggle="modal" data-bs-target="#editContactInfoModal" style="color: #194D79;width: 26px;height: 26px;">
                                        <img src="{{ asset('user/assets/vectors/edit-vector-26.png') }}" class="w-100 h-100"  alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-center align-items-center" style="width: 56px;height: 56px;background-color: #F2F2F2;border-radius: 10px;">
                                            <img src="{{ asset('user/assets/img/contact-call.png') }}" style="width: 24px;height: 24px;" alt="">
                                        </div>
                                        <div style="padding-inline-start: 14px;">
                                            <strong style="font-size: 22px;">Email</strong>
                                            <p class="fw-light" style="color: #9BDB08;font-size: 20px;margin-top: -2px;">email@address.com </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-center align-items-center" style="width: 56px;height: 56px;background-color: #F2F2F2;border-radius: 10px;">
                                            <img src="{{ asset('user/assets/img/contact-mail.png') }}" style="width: 29px;height: 22px;" alt="">
                                        </div>
                                        <div style="padding-inline-start: 14px;">
                                            <strong style="font-size: 22px;">Phone</strong>
                                            <p class="fw-light" style="color: #9BDB08;font-size: 20px;margin-top: -2px;">1234 - 33341413</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-center align-items-center" style="width: 56px;height: 56px;background-color: #F2F2F2;border-radius: 10px;">
                                            <img src="{{ asset('user/assets/img/contact-web.png') }}" style="width: 27px;height: 27px;" alt="">
                                        </div>
                                        <div style="padding-inline-start: 14px;">
                                            <strong style="font-size: 22px;">Website</strong>
                                            <p class="fw-light" style="color: #9BDB08;font-size: 20px;margin-top: -2px;">socialmedialink.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-center align-items-center" style="width: 56px;height: 56px;background-color: #F2F2F2;border-radius: 10px;">
                                            <img src="{{ asset('user/assets/img/contact-linkedin.png') }}" style="width: 24px;height: 24px;" alt="">
                                        </div>
                                        <div style="padding-inline-start: 14px;">
                                            <strong style="font-size: 22px;">Linkedin</strong>
                                            <p class="fw-light" style="color: #9BDB08;font-size: 20px;margin-top: -2px;">socialmedialink.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-center align-items-center" style="width: 56px;height: 56px;background-color: #F2F2F2;border-radius: 10px;">
                                            <img src="{{ asset('user/assets/img/contact-twitter.png') }}" style="width: 26px;height: 22px;" alt="">
                                        </div>
                                        <div style="padding-inline-start: 14px;">
                                            <strong style="font-size: 22px;">Twitter</strong>
                                            <p class="fw-light" style="color: #9BDB08;font-size: 20px;margin-top: -2px;">socialmedialink.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-center align-items-center" style="width: 56px;height: 56px;background-color: #F2F2F2;border-radius: 10px;">
                                            <img src="{{ asset('user/assets/img/contact-facebook.png') }}" style="width: 11px;height: 26px;" alt="">
                                        </div>
                                        <div style="padding-inline-start: 14px;">
                                            <strong style="font-size: 22px;">Facebook</strong>
                                            <p class="fw-light" style="color: #9BDB08;font-size: 20px;margin-top: -2px;">socialmedialink.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

{{-- contact info modal --}}
<div class="modal fade" id="editContactInfoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-3" style="border-radius: 16px;">
        <div class="modal-header d-flex align-items-start py-0 pt-2" style="border-bottom: none;">
          <div class="d-flex">
            <img src="{{ asset('user/assets/img/popup-img-1.png') }}" class="me-2" alt="">
            <div>
                <strong class="fw-bold" style="font-size: 26px;">Brooklyn Simmons</strong>
                <p class="fw-light" style="color: #828282;">News Director</p>
            </div>
          </div>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12 px-0">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-center align-items-center" style="width: 56px;height: 56px;background-color: #F2F2F2;border-radius: 10px;">
                                <img src="{{ asset('user/assets/img/contact-call.png') }}" style="width: 24px;height: 24px;" alt="">
                            </div>
                            <div style="padding-inline-start: 14px;">
                                <strong style="font-size: 22px;">Email</strong>
                                <p class="fw-light" style="color: #9BDB08;font-size: 20px;margin-top: -2px;">email@address.com </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-center align-items-center" style="width: 56px;height: 56px;background-color: #F2F2F2;border-radius: 10px;">
                                <img src="{{ asset('user/assets/img/contact-mail.png') }}" style="width: 29px;height: 22px;" alt="">
                            </div>
                            <div style="padding-inline-start: 14px;">
                                <strong style="font-size: 22px;">Phone</strong>
                                <p class="fw-light" style="color: #9BDB08;font-size: 20px;margin-top: -2px;">1234 - 33341413</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-center align-items-center" style="width: 56px;height: 56px;background-color: #F2F2F2;border-radius: 10px;">
                                <img src="{{ asset('user/assets/img/contact-web.png') }}" style="width: 27px;height: 27px;" alt="">
                            </div>
                            <div style="padding-inline-start: 14px;">
                                <strong style="font-size: 22px;">Website</strong>
                                <p class="fw-light" style="color: #9BDB08;font-size: 20px;margin-top: -2px;">socialmedialink.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-center align-items-center" style="width: 56px;height: 56px;background-color: #F2F2F2;border-radius: 10px;">
                                <img src="{{ asset('user/assets/img/contact-linkedin.png') }}" style="width: 24px;height: 24px;" alt="">
                            </div>
                            <div style="padding-inline-start: 14px;">
                                <strong style="font-size: 22px;">Linkedin</strong>
                                <p class="fw-light" style="color: #9BDB08;font-size: 20px;margin-top: -2px;">socialmedialink.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-center align-items-center" style="width: 56px;height: 56px;background-color: #F2F2F2;border-radius: 10px;">
                                <img src="{{ asset('user/assets/img/contact-twitter.png') }}" style="width: 26px;height: 22px;" alt="">
                            </div>
                            <div style="padding-inline-start: 14px;">
                                <strong style="font-size: 22px;">Twitter</strong>
                                <p class="fw-light" style="color: #9BDB08;font-size: 20px;margin-top: -2px;">socialmedialink.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-center align-items-center" style="width: 56px;height: 56px;background-color: #F2F2F2;border-radius: 10px;">
                                <img src="{{ asset('user/assets/img/contact-facebook.png') }}" style="width: 11px;height: 26px;" alt="">
                            </div>
                            <div style="padding-inline-start: 14px;">
                                <strong style="font-size: 22px;">Facebook</strong>
                                <p class="fw-light" style="color: #9BDB08;font-size: 20px;margin-top: -2px;">socialmedialink.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
  </div>


@endsection
