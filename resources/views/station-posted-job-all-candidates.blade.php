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
    <div class="container my-3">
        <div class="row bg-white p-4 align-items-center" style="border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
            <div class="col-md-8">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('user/assets/img/7-abc.png') }}" class="me-3" style="width: 114px;height: 110px;" alt="">
                    <div>
                        <strong class="fw-bold" style="font-size: 24px;">Assistant News Director</strong>
                        <p class="fw-light" style="color: #194D79;">Los Angeles, CA   •   $100,000  -  $130,000   •   Full time</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-end">
                    <a href="#">
                        <img src="{{ asset('user/assets/vectors/edit-vector-26.png') }}" class="mx-2" alt="#">
                    </a>
                    <a href="#">
                        <img src="{{ asset('user/assets/vectors/gray-eye.png') }}" class="mx-2" alt="#">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row py-4">
            <div class="col-md-8">
                <h2 style="font-size: 28px;">All candidates <span style="color: #828282;">(19)</span></h2>
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
            <div class="col-md-6">
                <div class="bg-white p-4 mb-3" style="border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                    <div class="row pb-3">
                        <div class="col-md-2">
                            <img src="{{ asset('user/assets/img/posted-job-img.png') }}" style="width: 73px;height: 70px;" alt="">
                        </div>
                        <div class="col-md-6">
                            <strong class="fw-bold" style="font-size: 26px;">Jacob Jones</strong>
                            <p class="fw-semiBold" style="color: #194D79;">News Director</p>
                        </div>
                        <div class="col-md-4 text-end">
                            <strong class="fw-bold" style="color: #89C400;">Why hire me?</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <a href="#" class="d-block fw-bold text-center" style="border: 2px solid #194D79;border-radius: 10px;color: #194D79;padding-block: 8px;">Decline</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="d-block fw-bold text-center text-white" style="border: 2px solid transparent;border-radius: 10px;background-color: #194D79;padding-block: 8px;">Request for interview</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-white p-4 mb-3" style="border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                    <div class="row pb-3">
                        <div class="col-md-2">
                            <img src="{{ asset('user/assets/img/Albert Flores.png') }}" style="width: 73px;height: 70px;" alt="">
                        </div>
                        <div class="col-md-6">
                            <strong class="fw-bold" style="font-size: 26px;">Albert Flores</strong>
                            <p class="fw-semiBold" style="color: #194D79;">News Director</p>
                        </div>
                        <div class="col-md-4 text-end">
                            <strong class="fw-bold" style="color: #89C400;">Why hire me?</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <a href="#" class="d-block fw-bold text-center" style="border: 2px solid #194D79;border-radius: 10px;color: #194D79;padding-block: 8px;">Decline</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="d-block fw-bold text-center text-white" style="border: 2px solid transparent;border-radius: 10px;background-color: #194D79;padding-block: 8px;">Request for interview</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-white p-4 mb-3" style="border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                    <div class="row pb-3">
                        <div class="col-md-2">
                            <img src="{{ asset('user/assets/img/Ronald Richards.png') }}" style="width: 73px;height: 70px;" alt="">
                        </div>
                        <div class="col-md-6">
                            <strong class="fw-bold" style="font-size: 26px;">Ronald Richards</strong>
                            <p class="fw-semiBold" style="color: #194D79;">News Director</p>
                        </div>
                        <div class="col-md-4 text-end">
                            <strong class="fw-bold" style="color: #89C400;">Why hire me?</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <a href="#" class="d-block fw-bold text-center" style="border: 2px solid #194D79;border-radius: 10px;color: #194D79;padding-block: 8px;">Decline</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="d-block fw-bold text-center text-white" style="border: 2px solid transparent;border-radius: 10px;background-color: #194D79;padding-block: 8px;">Request for interview</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-white p-4 mb-3" style="border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                    <div class="row pb-3">
                        <div class="col-md-2">
                            <img src="{{ asset('user/assets/img/Brooklyn Simmons.png') }}" style="width: 73px;height: 70px;" alt="">
                        </div>
                        <div class="col-md-6">
                            <strong class="fw-bold" style="font-size: 26px;">Brooklyn Simmons</strong>
                            <p class="fw-semiBold" style="color: #194D79;">News Director</p>
                        </div>
                        <div class="col-md-4 text-end">
                            <strong class="fw-bold" style="color: #89C400;">Why hire me?</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <a href="#" class="d-block fw-bold text-center" style="border: 2px solid #194D79;border-radius: 10px;color: #194D79;padding-block: 8px;">Decline</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="d-block fw-bold text-center text-white" style="border: 2px solid transparent;border-radius: 10px;background-color: #194D79;padding-block: 8px;">Request for interview</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-white p-4 mb-3" style="border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                    <div class="row pb-3">
                        <div class="col-md-2">
                            <img src="{{ asset('user/assets/img/Bessie Cooper.png') }}" style="width: 73px;height: 70px;" alt="">
                        </div>
                        <div class="col-md-6">
                            <strong class="fw-bold" style="font-size: 26px;">Bessie Cooper</strong>
                            <p class="fw-semiBold" style="color: #194D79;">News Director</p>
                        </div>
                        <div class="col-md-4 text-end">
                            <strong class="fw-bold" style="color: #89C400;">Why hire me?</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <a href="#" class="d-block fw-bold text-center" style="border: 2px solid #194D79;border-radius: 10px;color: #194D79;padding-block: 8px;">Decline</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="d-block fw-bold text-center text-white" style="border: 2px solid transparent;border-radius: 10px;background-color: #194D79;padding-block: 8px;">Request for interview</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-white p-4 mb-3" style="border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                    <div class="row pb-3">
                        <div class="col-md-2">
                            <img src="{{ asset('user/assets/img/Floyd Miles.png') }}" style="width: 73px;height: 70px;" alt="">
                        </div>
                        <div class="col-md-6">
                            <strong class="fw-bold" style="font-size: 26px;">Floyd Miles</strong>
                            <p class="fw-semiBold" style="color: #194D79;">News Director</p>
                        </div>
                        <div class="col-md-4 text-end">
                            <strong class="fw-bold" style="color: #89C400;">Why hire me?</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <a href="#" class="d-block fw-bold text-center" style="border: 2px solid #194D79;border-radius: 10px;color: #194D79;padding-block: 8px;">Decline</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="d-block fw-bold text-center text-white" style="border: 2px solid transparent;border-radius: 10px;background-color: #194D79;padding-block: 8px;">Request for interview</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-white p-4 mb-3" style="border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                    <div class="row pb-3">
                        <div class="col-md-2">
                            <img src="{{ asset('user/assets/img/Jenny Wilson.png') }}" style="width: 73px;height: 70px;" alt="">
                        </div>
                        <div class="col-md-6">
                            <strong class="fw-bold" style="font-size: 26px;">Jenny Wilson</strong>
                            <p class="fw-semiBold" style="color: #194D79;">News Director</p>
                        </div>
                        <div class="col-md-4 text-end">
                            <strong class="fw-bold" style="color: #89C400;">Why hire me?</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <a href="#" class="d-block fw-bold text-center" style="border: 2px solid #194D79;border-radius: 10px;color: #194D79;padding-block: 8px;">Decline</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="d-block fw-bold text-center text-white" style="border: 2px solid transparent;border-radius: 10px;background-color: #194D79;padding-block: 8px;">Request for interview</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-white p-4 mb-3" style="border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                    <div class="row pb-3">
                        <div class="col-md-2">
                            <img src="{{ asset('user/assets/img/Eleanor Pena.png') }}" style="width: 73px;height: 70px;" alt="">
                        </div>
                        <div class="col-md-6">
                            <strong class="fw-bold" style="font-size: 26px;">Eleanor Pena</strong>
                            <p class="fw-semiBold" style="color: #194D79;">News Director</p>
                        </div>
                        <div class="col-md-4 text-end">
                            <strong class="fw-bold" style="color: #89C400;">Why hire me?</strong>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2"></div>
                                <div class="col-md-5">
                                    <strong class="fw-semiBold" style="font-size: 18px;">Job Title</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">At Station’s names</p>
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="fw-light" style="color: #4F4F4F;">Oct 2021  -  Apr 2022</p>
                                    <span class="fw-light" style="color: #828282;font-size: 14px;">7 months</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <a href="#" class="d-block fw-bold text-center" style="border: 2px solid #194D79;border-radius: 10px;color: #194D79;padding-block: 8px;">Decline</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="d-block fw-bold text-center text-white" style="border: 2px solid transparent;border-radius: 10px;background-color: #194D79;padding-block: 8px;">Request for interview</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{-- pagination --}}
                <x-user.pagination />
            </div>
        </div>
    </div>
</section>

@endsection
