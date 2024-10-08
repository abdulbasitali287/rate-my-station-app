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
                    <li class="px-4 pt-4 pb-3 fw-bold" style="border-bottom: 4px solid #89C400;">
                        <a href="{{ url('station-posted-job') }}" class="text-black">Posted job</a>
                    </li>
                    <li class="p-4">
                        <a href="#" class="text-black">Contact Info</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row py-4">
                    <div class="col-md-8">
                        <h2 style="font-size: 28px;">All job post <span style="color: #828282;">(19)</span></h2>
                    </div>
                    <div class="col-md-4 d-flex justify-content-end">
                        <div class="d-flex">
                            <div class="d-flex align-items-center pe-3">
                                <p class="pe-2" style="color: #828282;font-weight: 500;font-size: 14px;">Filter</p>
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary dropdown-toggle" style="color: #828282;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Job type</button>
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
                        <div class="bg-white px-4 py-4 mb-3" style="border-radius: 10px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                            <div class="row py-4" style="border-bottom: 1px solid #E0E0E0;">
                                <div class="col-12 d-flex">
                                    <div style="width: 114px;height: 112px;margin-inline-end: 20px;">
                                        <img src="{{ asset('user/assets/img/7-abc-163.png') }}" class="w-100 h-100" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-column pb-3 flex-grow-1 ps-3">
                                                <h6 class="m-0" style="font-size: 28px;font-weight: bold;">Assistant News Director</h6>
                                                <p class="fw-light" style="color: #194D79;font-size: 20px;">KABC</p>
                                            </div>
                                            <div>
                                                <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                                </button>
                                                <div class="dropdown-menu">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-around px-2 my-3" style="background-color: #F2F2F2;border-radius: 10px;padding-block: 10px;">
                                            <div class="pe-4">
                                                <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" style="width: 17px;" alt=""></span>
                                                <span style="color: #194D79;font-size: 14px;">Los Angeles, CA</span>
                                            </div>
                                            <div class="pe-4">
                                                <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" style="width: 28px;" alt=""></span>
                                                <span style="color: #194D79;font-size: 14px;">$100,000  -  $130,000</span>
                                            </div>
                                            <div class="pe-4">
                                                <span><img src="{{ asset('user/assets/vectors/briefcase-30.png') }}" style="width: 20px;" alt=""></span>
                                                <span style="color: #194D79;font-size: 14px;">Full time</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-md-2">
                                    <div>
                                        <p style="color: #828282;">
                                            <span class="d-block fw-light" style="font-size: 14px;">Posted on</span>
                                            <span class="d-block fw-light" style="font-size: 14px;">June 3, 2022</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="d-flex justify-content-evenly">
                                        <div class="px-4">
                                            <strong class="fw-bold" style="font-size: 24px;">549</strong>
                                            <p class="fw-light" style="color: #828282;">Views</p>
                                        </div>
                                        <div class="px-4">
                                            <strong class="fw-bold" style="font-size: 24px;">149</strong>
                                            <p class="fw-light" style="color: #828282;">Applied</p>
                                        </div>
                                        <div class="px-4">
                                            <strong class="fw-bold" style="font-size: 24px;">3 days</strong>
                                            <p class="fw-light" style="color: #828282;">Remaining</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 text-end">
                                    <x-user.button buttonText="See all candidates" class="bg-white" color="#194D79" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-white px-4 py-4 mb-3" style="border-radius: 10px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                            <div class="row py-4" style="border-bottom: 1px solid #E0E0E0;">
                                <div class="col-12 d-flex">
                                    <div style="width: 114px;height: 112px;margin-inline-end: 20px;">
                                        <img src="{{ asset('user/assets/img/7-abc-163.png') }}" class="w-100 h-100" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-column pb-3 flex-grow-1 ps-3">
                                                <h6 class="m-0" style="font-size: 28px;font-weight: bold;">Assistant News Director</h6>
                                                <p class="fw-light" style="color: #194D79;font-size: 20px;">KABC</p>
                                            </div>
                                            <div>
                                                <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                                </button>
                                                <div class="dropdown-menu">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-around px-2 my-3" style="background-color: #F2F2F2;border-radius: 10px;padding-block: 10px;">
                                            <div class="pe-4">
                                                <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" style="width: 17px;" alt=""></span>
                                                <span style="color: #194D79;font-size: 14px;">Los Angeles, CA</span>
                                            </div>
                                            <div class="pe-4">
                                                <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" style="width: 28px;" alt=""></span>
                                                <span style="color: #194D79;font-size: 14px;">$100,000  -  $130,000</span>
                                            </div>
                                            <div class="pe-4">
                                                <span><img src="{{ asset('user/assets/vectors/briefcase-30.png') }}" style="width: 20px;" alt=""></span>
                                                <span style="color: #194D79;font-size: 14px;">Full time</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-md-2">
                                    <div>
                                        <p style="color: #828282;">
                                            <span class="d-block fw-light" style="font-size: 14px;">Posted on</span>
                                            <span class="d-block fw-light" style="font-size: 14px;">June 3, 2022</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="d-flex justify-content-evenly">
                                        <div class="px-4">
                                            <strong class="fw-bold" style="font-size: 24px;">549</strong>
                                            <p class="fw-light" style="color: #828282;">Views</p>
                                        </div>
                                        <div class="px-4">
                                            <strong class="fw-bold" style="font-size: 24px;">149</strong>
                                            <p class="fw-light" style="color: #828282;">Applied</p>
                                        </div>
                                        <div class="px-4">
                                            <strong class="fw-bold" style="font-size: 24px;">3 days</strong>
                                            <p class="fw-light" style="color: #828282;">Remaining</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 text-end">
                                    <x-user.button buttonText="See all candidates" class="bg-white" color="#194D79" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-white px-4 py-4 mb-3" style="border-radius: 10px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                            <div class="row py-4" style="border-bottom: 1px solid #E0E0E0;">
                                <div class="col-12 d-flex">
                                    <div style="width: 114px;height: 112px;margin-inline-end: 20px;">
                                        <img src="{{ asset('user/assets/img/7-abc-163.png') }}" class="w-100 h-100" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-column pb-3 flex-grow-1 ps-3">
                                                <h6 class="m-0" style="font-size: 28px;font-weight: bold;">Assistant News Director</h6>
                                                <p class="fw-light" style="color: #194D79;font-size: 20px;">KABC</p>
                                            </div>
                                            <div>
                                                <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                                </button>
                                                <div class="dropdown-menu">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-around px-2 my-3" style="background-color: #F2F2F2;border-radius: 10px;padding-block: 10px;">
                                            <div class="pe-4">
                                                <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" style="width: 17px;" alt=""></span>
                                                <span style="color: #194D79;font-size: 14px;">Los Angeles, CA</span>
                                            </div>
                                            <div class="pe-4">
                                                <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" style="width: 28px;" alt=""></span>
                                                <span style="color: #194D79;font-size: 14px;">$100,000  -  $130,000</span>
                                            </div>
                                            <div class="pe-4">
                                                <span><img src="{{ asset('user/assets/vectors/briefcase-30.png') }}" style="width: 20px;" alt=""></span>
                                                <span style="color: #194D79;font-size: 14px;">Full time</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4 align-items-center">
                                <div class="col-md-2">
                                    <div class="w-100">
                                        <button class="fw-bold w-100 d-flex justify-content-center" style="border: 2px solid #828282;border-radius: 10px;color: #828282;">
                                            Draft
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="d-flex justify-content-evenly">
                                        <div class="px-4">
                                            <strong class="fw-bold" style="font-size: 24px;">0</strong>
                                            <p class="fw-light" style="color: #828282;">Views</p>
                                        </div>
                                        <div class="px-4">
                                            <strong class="fw-bold" style="font-size: 24px;">0</strong>
                                            <p class="fw-light" style="color: #828282;">Applied</p>
                                        </div>
                                        <div class="px-4">
                                            <strong class="fw-bold" style="font-size: 24px;">-</strong>
                                            <p class="fw-light" style="color: #828282;">Remaining</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 text-end">
                                    <x-user.button buttonText="See all candidates" class="bg-white" color="#194D79" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-white px-4 py-4 mb-3" style="border-radius: 10px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                            <div class="row py-4" style="border-bottom: 1px solid #E0E0E0;">
                                <div class="col-12 d-flex">
                                    <div style="width: 114px;height: 112px;margin-inline-end: 20px;">
                                        <img src="{{ asset('user/assets/img/7-abc-163.png') }}" class="w-100 h-100" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-column pb-3 flex-grow-1 ps-3">
                                                <h6 class="m-0" style="font-size: 28px;font-weight: bold;">Assistant News Director</h6>
                                                <p class="fw-light" style="color: #194D79;font-size: 20px;">KABC</p>
                                            </div>
                                            <div>
                                                <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                                </button>
                                                <div class="dropdown-menu">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-around px-2 my-3" style="background-color: #F2F2F2;border-radius: 10px;padding-block: 10px;">
                                            <div class="pe-4">
                                                <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" style="width: 17px;" alt=""></span>
                                                <span style="color: #194D79;font-size: 14px;">Los Angeles, CA</span>
                                            </div>
                                            <div class="pe-4">
                                                <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" style="width: 28px;" alt=""></span>
                                                <span style="color: #194D79;font-size: 14px;">$100,000  -  $130,000</span>
                                            </div>
                                            <div class="pe-4">
                                                <span><img src="{{ asset('user/assets/vectors/briefcase-30.png') }}" style="width: 20px;" alt=""></span>
                                                <span style="color: #194D79;font-size: 14px;">Full time</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4 align-items-center">
                                <div class="col-md-2">
                                    <div class="w-100">
                                        <button class="fw-bold w-100 d-flex justify-content-center" style="border: 2px solid #828282;border-radius: 10px;color: #828282;">
                                            Draft
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="d-flex justify-content-evenly">
                                        <div class="px-4">
                                            <strong class="fw-bold" style="font-size: 24px;">0</strong>
                                            <p class="fw-light" style="color: #828282;">Views</p>
                                        </div>
                                        <div class="px-4">
                                            <strong class="fw-bold" style="font-size: 24px;">0</strong>
                                            <p class="fw-light" style="color: #828282;">Applied</p>
                                        </div>
                                        <div class="px-4">
                                            <strong class="fw-bold" style="font-size: 24px;">-</strong>
                                            <p class="fw-light" style="color: #828282;">Remaining</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 text-end">
                                    <x-user.button buttonText="See all candidates" class="bg-white" color="#194D79" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div style="display: flex;flex-direction: column;justify-content: center;width: 383px;height: 474px;padding-inline: 24px;margin-top: 23px;text-align: center;color: #ffff;background-image: url({{ asset('user/assets/ellipse/posted-job-bg.png') }});background-size: cover;background-repeat: no-repeat;">
                    <h2 style="font-weight: bold;font-size: 36px;">Hire the right employee for your company now!</h2>
                    <p style="font-size: 20px;font-weight: 200;padding-block: 14px;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam.</p>
                    <div>
                        <a href="#" style="color: #000;display: inline-block;background-color: #ffff;padding-inline: 24px;padding-block: 14px;margin-top: 20px;font-weight: bold;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">Post job opening</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
