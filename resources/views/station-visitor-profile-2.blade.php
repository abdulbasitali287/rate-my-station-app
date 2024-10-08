@extends('layout.main')
@section('content')
{{-- Hero Section --}}
<section id="hero-section" style="height: 294px;background-image: url({{ asset('user/assets/ellipse/job-opening.png') }});"></section>

<section style="margin-top: -164px;">
    <div class="container">
        <div class="row" style="padding: 40px;background-color: #FFFFFF;border-radius: 12px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
            <div class="col-md-9">
                <div class="d-flex align-items-center">
                    <div style="width: 157px;height: 157px;margin-inline-end: 24px;">
                        <img class="w-100 h-100" src="{{ asset('user/assets/img/profile-1.png') }}" style="object-fit: cover;" alt="">
                    </div>
                    <div>
                        <h2 class="position-relative" style="font-size: 30px;font-weight: bold;">Brooklyn Simmons <span><img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span></h2>
                        <p class="fw-light" style="color: #828282;font-size: 22px;">News Director at <span class="fw-semiBold" style="color: #194D79;">KABC</span></p>
                        <p class="fw-light" style="color: #194D79;font-size: 18px;"><span style="display: inline-block;padding-inline-end: 4px;">
                            <img src="{{ asset('user/assets/vectors/map-vector.png') }}" alt=""></span>Los Angeles, CA | DMA: 2</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div style="width: 100%;height: 100%;display: flex;flex-direction: column;justify-content: center;">
                    <button class="subscribe-btn" style="margin-block: 6px;">Message</button>
                    <button class="subscribe-btn" style="margin-block: 6px;background-color: transparent;border: 2px solid #194D79;color: #194D79;">Contact Info</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 pt-5">
                {{-- about --}}
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="bg-white px-5 py-4" style="padding: 20px;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                            <div class="row align-items-center pb-3">
                                <div class="col-12">
                                    <h2 class="fw-bold" style="font-size: 24px;">About</h2>
                                </div>
                            </div>
                            <div class="row pb-4">
                                <div class="col-12">
                                    <p class="fw-light">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna, ut egestas vivamus proin. Velit leo scelerisque pulvinar vestibulum in nunc a tortor mollis. Fusce pretium est ipsum elementum parturient. Venenatis, ac nulla non varius dolor. Ornare consectetur mauris, adipiscing tristique a leo. Habitant pharetra tellus habitasse vestibulum nibh quisque. Sed vel condimentum enim leo tortor mi magna tincidunt. Egestas bibendum id eget quisque semper ultricies. Gravida viverra massa faucibus vestibulum condimentum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- experience --}}
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="bg-white px-5 py-4" style="padding: 20px;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                            <div class="row align-items-center pb-3">
                                <div class="col-12">
                                    <h2 class="fw-bold" style="font-size: 24px;">Experiance</h2>
                                </div>
                            </div>
                            <div class="row pb-4">
                                <div class="col-12">
                                    <div class="d-flex align-items-center pb-3">
                                        <div class="me-3">
                                            <img src="{{ asset('user/assets/img/7-logo-46.png') }}" style="width: 46px;height: 35px;" alt="">
                                        </div>
                                        <div>
                                            <strong class="fw-semiBold" style="font-size: 18px;">Office Name</strong>
                                            <p class="fw-light" style="font-size: 14px;color: #82828;">14 months</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex flex-column pb-3">
                                        <div class="d-flex justify-content-between pb-2">
                                            <div>
                                                <strong class="fw-semiBold" style="font-size: 16px;color: #194D79;">Job Title (Current)</strong>
                                                <p class="fw-light" style="font-size: 14px;color: #828282;">Fulltime</p>
                                            </div>
                                            <div class="text-end">
                                                <strong class="fw-medium" style="font-size: 16px;color: #89C400;">Oct 2021  -  Apr 2022</strong>
                                                <p class="fw-light" style="font-size: 14px;color: #828282;">7 months</p>
                                            </div>
                                        </div>
                                        <div class="pb-2">
                                            <p class="fw-light">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column pb-3">
                                        <div class="d-flex justify-content-between pb-2">
                                            <div>
                                                <strong class="fw-semiBold" style="font-size: 16px;color: #194D79;">Job Title (Current)</strong>
                                                <p class="fw-light" style="font-size: 14px;color: #828282;">Fulltime</p>
                                            </div>
                                            <div class="text-end">
                                                <strong class="fw-medium" style="font-size: 16px;color: #89C400;">Oct 2021  -  Apr 2022</strong>
                                                <p class="fw-light" style="font-size: 14px;color: #828282;">7 months</p>
                                            </div>
                                        </div>
                                        <div class="pb-2">
                                            <p class="fw-light">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- skills --}}
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="bg-white px-5 py-4" style="padding: 20px;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                            <div class="row align-items-center pb-3">
                                <div class="col-12">
                                    <h2 class="fw-bold" style="font-size: 24px;">Skills</h2>
                                </div>
                            </div>
                            <div class="row pb-4">
                                <div class="col-12">
                                    <div class="pb-4">
                                        <strong class="fw-semiBold" style="font-size: 18px;color: #194D79;">Skill 1</strong>
                                        <p class="fw-light pt-2">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="pb-4">
                                        <strong class="fw-semiBold" style="font-size: 18px;color: #194D79;">Skill 2</strong>
                                        <p class="fw-light pt-2">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="pb-4">
                                        <strong class="fw-semiBold" style="font-size: 18px;color: #194D79;">Skill 3</strong>
                                        <p class="fw-light pt-2">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- education --}}
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="bg-white px-5 py-4" style="padding: 20px;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                            <div class="row align-items-center pb-3">
                                <div class="col-12">
                                    <h2 class="fw-bold" style="font-size: 24px;">Education</h2>
                                </div>
                            </div>
                            <div class="row pb-4">
                                <div class="col-12">
                                    <div class="d-flex pb-4">
                                        <div class="me-3">
                                            <img src="{{ asset('user/assets/img/education-img.png') }}" style="width: 58px;height: 58px;" alt="">
                                        </div>
                                        <div>
                                            <strong class="fw-semiBold d-block" style="font-size: 18px;">Magister of Loream ipsum</strong>
                                            <strong class="fw-semiBold d-block" style="color: #194D79;">University of Illinois</strong>
                                            <p class="fw-light" style="font-size: 14px;color: #828282;">Oct 2021  -  Apr 2022</p>
                                            <p class="fw-light pt-2">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex pb-4">
                                        <div class="me-3">
                                            <img src="{{ asset('user/assets/img/education-img.png') }}" style="width: 58px;height: 58px;" alt="">
                                        </div>
                                        <div>
                                            <strong class="fw-semiBold d-block" style="font-size: 18px;">Bachelor of Loream ipsum</strong>
                                            <strong class="fw-semiBold d-block" style="color: #194D79;">University of Illinois</strong>
                                            <p class="fw-light" style="font-size: 14px;color: #828282;">Oct 2021  -  Apr 2022</p>
                                            <p class="fw-light pt-2">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 pt-5" id="latest-articles">

                <div class="row">
                    <div class="col-12">
                        <div class="row align-items-center pb-2 px-3 mb-3">
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

                <div class="row">
                    <div class="col-12">
                        <div class="row px-3 mb-3">
                            <div class="col-12 d-flex justify-content-between align-items-center">
                                <h2 class="fw-bold" style="font-size: 28px;">Newsletter</h2>
                                <a href="#" class="see-all-link">See all</a>
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
</section>

@endsection
