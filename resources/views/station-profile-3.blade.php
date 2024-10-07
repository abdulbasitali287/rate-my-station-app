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
                    <li class="px-4 pt-4 pb-3 fw-bold" style="border-bottom: 4px solid #89C400;">
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
            <div class="col-md-8 pt-5">



                <div class="bg-white p-5 mt-4" style="padding: 20px;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                    <div class="row align-items-center pb-3">
                        <div class="col-md-8">
                            <h2 class="fw-bold" style="font-size: 24px;">About</h2>
                        </div>
                        <div class="col-md-4 text-end">
                            <a href="#" class="fw-thin d-inline-block" style="color: #194D79;width: 26px;height: 26px;">
                                <img src="{{ asset('user/assets/vectors/edit-vector-26.png') }}" class="w-100 h-100"  alt="">
                            </a>
                        </div>
                    </div>
                    <div class="row pb-4" style="border-bottom: 1px solid #E0E0E0;">
                        <div class="col-12">
                            <p class="fw-light">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna, ut egestas vivamus proin. Velit leo scelerisque pulvinar vestibulum in nunc a tortor mollis. Fusce pretium est ipsum elementum parturient. Venenatis, ac nulla non varius dolor. Ornare consectetur mauris, adipiscing tristique a leo. Habitant pharetra tellus habitasse vestibulum nibh quisque. Sed vel condimentum enim leo tortor mi magna tincidunt. Egestas bibendum id eget quisque semper ultricies. Gravida viverra massa faucibus vestibulum condimentum.</p>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-md-4">
                            <strong class="fw-semiBold" style="color: #194D79;font-size: 16px;">Industry</strong>
                            <p class="fw-light" style="color: #828282;">TV Broadcasting</p>
                        </div>
                        <div class="col-md-8">
                            <strong class="fw-semiBold" style="color: #194D79;font-size: 16px;">Station Address</strong>
                            <p class="fw-light" style="color: #828282;">3891 Ranchview Dr. Richardson, California 62639</p>
                        </div>
                    </div>
                </div>



                <div class="bg-white p-5 mt-4" style="padding: 20px;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                    <div class="row align-items-center pb-4">
                        <div class="col-md-8">
                            <h2 class="fw-bold" style="font-size: 24px;">News Directors</h2>
                        </div>
                        <div class="col-md-4 text-end">
                            <a href="#" class="fw-thin d-inline-block me-3" style="color: #194D79;width: 26px;height: 26px;">
                                <img src="{{ asset('user/assets/vectors/plus-vector-26.png') }}" class="w-100 h-100"  alt="">
                            </a>
                            <a href="#" class="fw-thin d-inline-block" style="color: #194D79;width: 26px;height: 26px;">
                                <img src="{{ asset('user/assets/vectors/edit-vector-26.png') }}" class="w-100 h-100"  alt="">
                            </a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between pb-4 mb-4">
                        <div class="d-flex align-items-center">
                            <div style="width: 73px;height: 73px;">
                                <img src="{{ asset('user/assets/img/director-search-1.png') }}" class="w-100 h-100" alt="">
                            </div>
                            <div style="padding-inline-start: 14px;">
                                <p style="font-size: 16px;">
                                    <span class="fw-semiBold" style="color: #777777;"> News Director </span>
                                    <span class="fw-semiBold" style="padding-block: 2px;background-color: #89C400;border-radius: 6px;color: #ffff;padding-inline: 10px;padding-top: 0px;font-size: 10px;">current</span>
                                </p>
                                <strong style="font-size: 26px;">Brooklyn Simmons</strong>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="#">
                                <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between pb-4 mb-4">
                        <div class="d-flex align-items-center">
                            <div style="width: 73px;height: 73px;">
                                <img src="{{ asset('user/assets/img/station-rating-1.png') }}" class="w-100 h-100" alt="">
                            </div>
                            <div style="padding-inline-start: 14px;">
                                <p style="font-size: 16px;">
                                    <span class="fw-semiBold" style="color: #777777;"> News Director </span>
                                    <span class="fw-semiBold" style="padding-block: 2px;background-color: #F2F2F2;border-radius: 6px;color: #828282;padding-inline: 10px;padding-top: 0px;font-size: 10px;">Past</span>
                                </p>
                                <strong style="font-size: 26px;">Ronald Richards</strong>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="#">
                                <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between pb-4 mb-4">
                        <div class="d-flex align-items-center">
                            <div style="width: 73px;height: 73px;">
                                <img src="{{ asset('user/assets/img/review-1-img.png') }}" class="w-100 h-100" alt="">
                            </div>
                            <div style="padding-inline-start: 14px;">
                                <p style="font-size: 16px;">
                                    <span class="fw-semiBold" style="color: #777777;"> News Director </span>
                                    <span class="fw-semiBold" style="padding-block: 2px;background-color: #F2F2F2;border-radius: 6px;color: #828282;padding-inline: 10px;padding-top: 0px;font-size: 10px;">Past</span>
                                </p>
                                <strong style="font-size: 26px;">Sally Ramirez</strong>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="#">
                                <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>



                <div class="bg-white p-5 mt-4" style="padding: 20px;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                    <div class="row align-items-center pb-2">
                        <div class="col-md-8">
                            <h2 class="fw-bold" style="font-size: 24px;">Award</h2>
                        </div>
                        <div class="col-md-4 text-end">
                            <a href="#" class="fw-thin d-inline-block me-3" style="color: #194D79;width: 26px;height: 26px;">
                                <img src="{{ asset('user/assets/vectors/plus-vector-26.png') }}" class="w-100 h-100"  alt="">
                            </a>
                            <a href="#" class="fw-thin d-inline-block" style="color: #194D79;width: 26px;height: 26px;">
                                <img src="{{ asset('user/assets/vectors/edit-vector-26.png') }}" class="w-100 h-100"  alt="">
                            </a>
                        </div>
                    </div>
                    <div class="row py-4" style="border-bottom: 1px solid #E0E0E0;">
                        <div class="col-2">
                            <div style="width: 125px;height: 125px;">
                                <img src="{{ asset('user/assets/img/silver-logo.png') }}" class="w-100 h-100" alt="">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="ps-4">
                                <strong class="fw-semiBold" style="color: #194D79;font-size: 18px;">Award 2022</strong>
                                <p class="fw-light" style="font-size: 16px;">
                                    Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.
                                </p>
                            </div>
                        </div>
                        <div class="col-2 d-flex justify-content-end align-items-center">
                            <div class="d-flex align-items-center">
                                <a href="#">
                                    <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="row py-4" style="border-bottom: 1px solid #E0E0E0;">
                        <div class="col-2">
                            <div style="width: 125px;height: 125px;">
                                <img src="{{ asset('user/assets/img/silver-logo.png') }}" class="w-100 h-100" alt="">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="ps-4">
                                <strong class="fw-semiBold" style="color: #194D79;font-size: 18px;">Award 2022</strong>
                                <p class="fw-light" style="font-size: 16px;">
                                    Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.
                                </p>
                            </div>
                        </div>
                        <div class="col-2 d-flex justify-content-end align-items-center">
                            <div class="d-flex align-items-center">
                                <a href="#">
                                    <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="row py-4" style="border-bottom: 1px solid #E0E0E0;">
                        <div class="col-2">
                            <div style="width: 125px;height: 125px;">
                                <img src="{{ asset('user/assets/img/silver-logo.png') }}" class="w-100 h-100" alt="">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="ps-4">
                                <strong class="fw-semiBold" style="color: #194D79;font-size: 18px;">Award 2022</strong>
                                <p class="fw-light" style="font-size: 16px;">
                                    Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.
                                </p>
                            </div>
                        </div>
                        <div class="col-2 d-flex justify-content-end align-items-center">
                            <div class="d-flex align-items-center">
                                <a href="#">
                                    <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-12 text-center">
                            <a href="#" class="fw-semiBold" style="color: #194D79;font-size: 18px;">
                                3+ more
                            </a>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="bg-white px-5 py-4 my-4" style="border-radius: 10px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                            <div class="row align-items-center pb-4">
                                <div class="col-md-8">
                                    <h2 class="fw-bold" style="font-size: 24px;">Job Opening <span style="color: #828282;">(5)</span></h2>
                                </div>
                            </div>
                            <div class="row py-4" style="border-bottom: 1px solid #E0E0E0;">
                                <div class="col-12 d-flex">
                                    <div style="width: 167px;height: 167px;margin-inline-end: 32px;">
                                        <img src="{{ asset('user/assets/img/7-abc-163.png') }}" style="width: 163px;height: 160px;" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-column pb-3 flex-grow-1 ps-3">
                                                <h6 class="m-0" style="font-size: 24px;font-weight: bold;">Assistant News Director</h6>
                                                <p class="fw-light" style="color: #194D79;font-size: 20px;">KCBA</p>
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
                                        <div class="d-flex justify-content-between align-items-center pt-3">
                                            <div>
                                                <button style="background-color: #9BDB08;border: none;color: #ffff;padding-top: 6px;padding-bottom: 8px;padding-inline: 14px;border-radius: 8px;"><span style="display: inline-block;padding-inline-end: 6px;"><img src="{{ asset('user/assets/vectors/tick-vector.png') }}" alt=""></span><span style="display: inline-block;padding-top: 1px;font-weight: 300;">Actively Hiring</span></button>
                                            </div>
                                            <div>
                                                <p style="color: #828282;"><span style="display: inline-block;padding-inline-end: 6px;"><img src="{{ asset('user/assets/vectors/timer-vector.png') }}" alt=""></span><span style="font-size: 12px;">Updated 8 hours ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-4" style="border-bottom: 1px solid #E0E0E0;">
                                <div class="col-12 d-flex">
                                    <div style="width: 167px;height: 167px;margin-inline-end: 32px;">
                                        <img src="{{ asset('user/assets/img/7-abc-163.png') }}" style="width: 163px;height: 160px;" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-column pb-3 flex-grow-1 ps-3">
                                                <h6 class="m-0" style="font-size: 24px;font-weight: bold;">Assistant News Director</h6>
                                                <p class="fw-light" style="color: #194D79;font-size: 20px;">KCBA</p>
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
                                        <div class="d-flex justify-content-between align-items-center pt-3">
                                            <div>
                                                <button style="background-color: #9BDB08;border: none;color: #ffff;padding-top: 6px;padding-bottom: 8px;padding-inline: 14px;border-radius: 8px;"><span style="display: inline-block;padding-inline-end: 6px;"><img src="{{ asset('user/assets/vectors/tick-vector.png') }}" alt=""></span><span style="display: inline-block;padding-top: 1px;font-weight: 300;">Actively Hiring</span></button>
                                            </div>
                                            <div>
                                                <p style="color: #828282;"><span style="display: inline-block;padding-inline-end: 6px;"><img src="{{ asset('user/assets/vectors/timer-vector.png') }}" alt=""></span><span style="font-size: 12px;">Updated 8 hours ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-4" style="border-bottom: 1px solid #E0E0E0;">
                                <div class="col-12 d-flex">
                                    <div style="width: 167px;height: 167px;margin-inline-end: 32px;">
                                        <img src="{{ asset('user/assets/img/7-abc-163.png') }}" style="width: 163px;height: 160px;" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-column pb-3 flex-grow-1 ps-3">
                                                <h6 class="m-0" style="font-size: 24px;font-weight: bold;">Assistant News Director</h6>
                                                <p class="fw-light" style="color: #194D79;font-size: 20px;">KCBA</p>
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
                                        <div class="d-flex justify-content-between align-items-center pt-3">
                                            <div>
                                                <button style="background-color: #9BDB08;border: none;color: #ffff;padding-top: 6px;padding-bottom: 8px;padding-inline: 14px;border-radius: 8px;"><span style="display: inline-block;padding-inline-end: 6px;"><img src="{{ asset('user/assets/vectors/tick-vector.png') }}" alt=""></span><span style="display: inline-block;padding-top: 1px;font-weight: 300;">Actively Hiring</span></button>
                                            </div>
                                            <div>
                                                <p style="color: #828282;"><span style="display: inline-block;padding-inline-end: 6px;"><img src="{{ asset('user/assets/vectors/timer-vector.png') }}" alt=""></span><span style="font-size: 12px;">Updated 8 hours ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-12 text-center">
                                    <a href="#" class="fw-semiBold" style="color: #194D79;font-size: 18px;">
                                        3+ more
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
            <div class="col col-md-4 pt-5" id="latest-articles">
                <div class="row align-items-center pb-4">
                    <div class="col-md-8">
                        <h2 class="fw-bold" style="font-size: 28px;">Recommended</h2>
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
