@extends('layout.main')
@section('content')
{{-- Hero Section --}}
<section id="hero-section" style="height: 294px;background-image: url({{ asset('user/assets/ellipse/job-opening.png') }});"></section>

<section style="margin-top: -164px;">
    <div class="container">
        <div class="row" style="padding-top: 40px;padding-inline: 40px;background-color: #FFFFFF;border-radius: 12px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
            <div class="col-md-9 pb-4" style="border-bottom: 1px solid #E0E0E0;">
                <div class="d-flex align-items-center">
                    <div class="text-center pe-4 position-relative">
                        <div style="width: 157px;height: 157px; margin-bottom: 16px;">
                            <img class="w-100 h-100" src="{{ asset('user/assets/img/profile-1.png') }}" style="object-fit: cover;" alt="">
                        </div>
                        <a href="#" class="text-white fw-semiBold px-3 py-1 position-absolute" style="background-color: #89C400;border-radius: 10px;font-size: 14px;bottom: 3px;right: 52px;">Subscibed</a>
                    </div>
                    <div style="padding-inline-start: 14px;">
                        <h2 class="position-relative" style="font-size: 30px;font-weight: bold;">Brooklyn Simmons <span><img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span></h2>
                        <p class="pb-2 fw-light" style="font-size: 22px;color: #828282;">TV News Station <span class="fw-bold text-black" style="font-size: 22px;">KABC</span></p>
                        <p class="fw-light" style="color: #194D79;font-size: 18px;">
                            <span style="display: inline-block;padding-inline-end: 4px;margin-inline-end: 2px;">
                                <img src="{{ asset('user/assets/vectors/map-vector.png') }}" alt="">
                            </span>
                            Los Angeles, CA | DMA: 2</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pb-4" style="border-bottom: 1px solid #E0E0E0;">
                <div style="width: 100%;height: 100%;display: flex;flex-direction: column;justify-content: center;">
                    <a href="{{ url('account-settings-user-profile') }}" class="text-white fw-bold border-0" style="margin-block: 6px;background-color: var(--darkCerulean);padding-block: 11px;border-radius: 12px;letter-spacing: 0.5px;transition: all 0.5s;text-align: center;">
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
                        <a href="{{ url('station-user-profile') }}" class="text-black">Profile</a>
                    </li>
                    <li class="p-4">
                        <a href="{{ url('station-user-ratings') }}" class="text-black">My ratings</a>
                    </li>
                    <li class="p-4">
                        <a href="{{ url('station-user-applied-jobs') }}" class="text-black">Applied Jobs</a>
                    </li>
                    <li class="px-4 pt-4 pb-3 fw-bold" style="border-bottom: 4px solid #89C400;">
                        <a href="{{ url('station-user-contact-info') }}" class="text-black">Contact Info</a>
                    </li>
                    <li class="p-4">
                        <a href="{{ url('station-user-suscribed') }}" class="text-black">Subscribed News</a>
                    </li>
                    <li class="p-4">
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
                <div class="bg-white p-5 mt-4" style="padding: 20px;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
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
            <div class="col col-md-4" id="latest-articles">

                <div class="row">
                    <div class="col-12">
                        <div class="row align-items-center py-4 px-3" style="margin-bottom: 10px;">
                            <div class="col-12 d-flex justify-content-between align-items-center">
                                <h2 class="fw-bold" style="font-size: 28px;">Job Openings</h2>
                                <a href="#" class="see-all-link">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <div class="bg-white px-4 py-4 mb-4" style="width: 384px;border-radius: 10px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="width: 46px;height: 45px;"><img src="{{ asset('user/assets/img/7-abc.png') }}" class="w-100 h-100" alt=""></div>
                                <div class="d-flex flex-column py-3 flex-grow-1 ps-3">
                                    <h6 class="m-0 fw-semiBold" style="font-size: 18px;">Assistant News Director</h6>
                                    <p class="fw-light" style="color: #194D79;font-size: 14px;">KABC</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around my-3" style="background-color: #F2F2F2;border-radius: 10px;padding-block: 10px;">
                                <div class="">
                                    <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" style="width: 13px;height: 14px;" alt=""></span>
                                    <span style="color: #194D79;font-size: 14px;">Los Angeles, CA</span>
                                </div>
                                <div class="">
                                    <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" style="width: 16px;height: 16px;" alt=""></span>
                                    <span style="color: #194D79;font-size: 14px;">$100,000  -  $130,000</span>
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3">
                                <div>
                                    <button class="fw-light" style="font-size: 12px;background-color: #9BDB08;border: none;color: #ffff;padding-top: 6px;padding-bottom: 8px;padding-inline: 14px;border-radius: 8px;">
                                        <span style="display: inline-block;padding-inline-end: 4px;">
                                            <img src="{{ asset('user/assets/vectors/tick-vector.png') }}" style="width: 11px;height: 11px;" alt=""></span>
                                            <span style="display: inline-block;padding-top: 1px;">Actively Hiring</span></button>
                                </div>
                                <div>
                                    <p style="color: #828282;"><span style="display: inline-block;padding-inline-end: 6px;"><img src="{{ asset('user/assets/vectors/timer-vector.png') }}" alt=""></span><span class="fw-light" style="font-size: 12px;">Updated 8 hours ago</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <div class="bg-white px-4 py-4 mb-4" style="width: 384px;border-radius: 10px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="width: 46px;height: 45px;"><img src="{{ asset('user/assets/img/7-abc.png') }}" class="w-100 h-100" alt=""></div>
                                <div class="d-flex flex-column py-3 flex-grow-1 ps-3">
                                    <h6 class="m-0 fw-semiBold" style="font-size: 18px;">Assistant News Director</h6>
                                    <p class="fw-light" style="color: #194D79;font-size: 14px;">KABC</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around my-3" style="background-color: #F2F2F2;border-radius: 10px;padding-block: 10px;">
                                <div class="">
                                    <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" style="width: 13px;height: 14px;" alt=""></span>
                                    <span style="color: #194D79;font-size: 14px;">Los Angeles, CA</span>
                                </div>
                                <div class="">
                                    <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" style="width: 16px;height: 16px;" alt=""></span>
                                    <span style="color: #194D79;font-size: 14px;">$100,000  -  $130,000</span>
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3">
                                <div>
                                    <button class="fw-light" style="font-size: 12px;background-color: #9BDB08;border: none;color: #ffff;padding-top: 6px;padding-bottom: 8px;padding-inline: 14px;border-radius: 8px;">
                                        <span style="display: inline-block;padding-inline-end: 4px;">
                                            <img src="{{ asset('user/assets/vectors/tick-vector.png') }}" style="width: 11px;height: 11px;" alt=""></span>
                                            <span style="display: inline-block;padding-top: 1px;">Actively Hiring</span></button>
                                </div>
                                <div>
                                    <p style="color: #828282;"><span style="display: inline-block;padding-inline-end: 6px;"><img src="{{ asset('user/assets/vectors/timer-vector.png') }}" alt=""></span><span class="fw-light" style="font-size: 12px;">Updated 8 hours ago</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <div class="bg-white px-4 py-4 mb-4" style="width: 384px;border-radius: 10px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="width: 46px;height: 45px;"><img src="{{ asset('user/assets/img/7-abc.png') }}" class="w-100 h-100" alt=""></div>
                                <div class="d-flex flex-column py-3 flex-grow-1 ps-3">
                                    <h6 class="m-0 fw-semiBold" style="font-size: 18px;">Assistant News Director</h6>
                                    <p class="fw-light" style="color: #194D79;font-size: 14px;">KABC</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around my-3" style="background-color: #F2F2F2;border-radius: 10px;padding-block: 10px;">
                                <div class="">
                                    <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" style="width: 13px;height: 14px;" alt=""></span>
                                    <span style="color: #194D79;font-size: 14px;">Los Angeles, CA</span>
                                </div>
                                <div class="">
                                    <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" style="width: 16px;height: 16px;" alt=""></span>
                                    <span style="color: #194D79;font-size: 14px;">$100,000  -  $130,000</span>
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3">
                                <div>
                                    <button class="fw-light" style="font-size: 12px;background-color: #9BDB08;border: none;color: #ffff;padding-top: 6px;padding-bottom: 8px;padding-inline: 14px;border-radius: 8px;">
                                        <span style="display: inline-block;padding-inline-end: 4px;">
                                            <img src="{{ asset('user/assets/vectors/tick-vector.png') }}" style="width: 11px;height: 11px;" alt=""></span>
                                            <span style="display: inline-block;padding-top: 1px;">Actively Hiring</span></button>
                                </div>
                                <div>
                                    <p style="color: #828282;"><span style="display: inline-block;padding-inline-end: 6px;"><img src="{{ asset('user/assets/vectors/timer-vector.png') }}" alt=""></span><span class="fw-light" style="font-size: 12px;">Updated 8 hours ago</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



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
