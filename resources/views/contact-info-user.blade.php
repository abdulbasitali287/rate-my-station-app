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
                        <h2 class="position-relative" style="font-size: 30px;font-weight: bold;">KABC <span class="position-absolute" style="top: -4px;right: 92px;"><img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span></h2>
                        <p class="pb-2" style="color: #828282;">TV News Station</p>
                        <p class="fw-light" style="color: #194D79;font-size: 18px;"><span style="display: inline-block;padding-inline-end: 4px;"><img src="{{ asset('user/assets/vectors/map-vector.png') }}" alt=""></span>Los Angeles, CA | DMA: 2</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pb-4" style="border-bottom: 1px solid #E0E0E0;">
                <div style="width: 100%;height: 100%;display: flex;flex-direction: column;justify-content: center;">
                    <a href="#" class="text-white fw-bold border-0" style="margin-block: 6px;background-color: var(--darkCerulean);padding-block: 11px;border-radius: 12px;letter-spacing: 0.5px;transition: all 0.5s;text-align: center;">
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
                    <li class="p-4">
                        <a href="{{ url('station-rating-user') }}" class="text-black">My ratings</a>
                    </li>
                    <li class="p-4">
                        <a href="#" class="text-black">Statistic</a>
                    </li>
                    <li class="p-4">
                        <a href="{{ url('station-posted-job') }}" class="text-black">Posted job</a>
                    </li>
                    <li class="px-4 pt-4 pb-3 fw-bold" style="border-bottom: 4px solid #89C400;">
                        <a href="{{ url('contact-info-user') }}" class="text-black">Contact Info</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            {{-- latest ratings --}}
            <div class="col col-md-8">
                <div class="bg-white p-5 mt-4" style="padding: 20px;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                    <div class="row align-items-center pb-4">
                        <div class="col-md-8">
                            <h2 class="fw-bold" style="font-size: 24px;">Brooklyn Simmons</h2>
                        </div>
                        <div class="col-md-4 text-end">
                            <a href="#" class="fw-thin d-inline-block me-3" style="color: #194D79;width: 22px;height: 22px;">
                                <img src="{{ asset('user/assets/vectors/plus-vector-26.png') }}" class="w-100 h-100"  alt="">
                            </a>
                            <a href="#" class="fw-thin d-inline-block" style="color: #194D79;width: 26px;height: 26px;">
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
                <div class="row align-items-center py-4">
                    <div class="col-md-8">
                        <h2 class="fw-bold" style="font-size: 28px;">Recommend</h2>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
