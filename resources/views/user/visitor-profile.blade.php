@extends('layout.main')
@section('content')

    <main id="user-visitor-profile-main">

        {{-- Banner Section --}}
        <section class="banner-section"></section>

        {{-- user profile header --}}
        <section class="visitor-profile-header">
            <div class="container">
                <div class="row content-box">
                    <div class="col-md-9">
                        <div class="d-flex align-items-center">
                            <div class="image-box">
                                <img class="w-100 h-100 img-cover" src="{{ asset('user/assets/img/profile-1.png') }}" alt="">
                            </div>
                            <div>
                                <h2 class="position-relative profile-name">
                                    Brooklyn Simmons <span><img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span>
                                </h2>
                                <p class="fw-light profile-title">News Director at <span class="fw-semiBold" style="color: #194D79;">KABC</span></p>
                                <p class="fw-light location-info">
                                    <span class="map-icon">
                                        <img src="{{ asset('user/assets/vectors/map-vector.png') }}" alt="">
                                    </span>Los Angeles, CA | DMA: 2
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="btn-container">
                            <a href="#" class="message-btn">Message</a>
                            <a href="#" class="contact-info-btn">Contact Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 pt-5 visitor-data">
                        {{-- about --}}
                        <div class="row mb-3 about">
                            <div class="col-12">
                                <div class="bg-white px-5 py-4 bg-custom">
                                    <div class="row align-items-center pb-3">
                                        <div class="col-12">
                                            <h2 class="fw-bold h2-custom">About</h2>
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
                        <div class="row mb-3 experience">
                            <div class="col-12">
                                <div class="bg-white px-5 py-4 bg-custom">
                                    <div class="row align-items-center pb-3">
                                        <div class="col-12">
                                            <h2 class="fw-bold h2-custom">Experience</h2>
                                        </div>
                                    </div>
                                    <div class="row pb-4">
                                        <div class="col-12">
                                            <div class="d-flex align-items-center pb-3">
                                                <div class="me-3">
                                                    <img src="{{ asset('user/assets/img/7-logo-46.png') }}" class="experience-img" alt="">
                                                </div>
                                                <div>
                                                    <strong class="fw-semiBold experience-title">Office Name</strong>
                                                    <p class="fw-light experience-duration">14 months</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex flex-column pb-3">
                                                <div class="d-flex justify-content-between pb-2">
                                                    <div>
                                                        <strong class="fw-semiBold job-title">Job Title (Current)</strong>
                                                        <p class="fw-light fulltime-text">Fulltime</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong class="fw-medium date-text">Oct 2021 - Apr 2022</strong>
                                                        <p class="fw-light date-duration">7 months</p>
                                                    </div>
                                                </div>
                                                <div class="pb-2">
                                                    <p class="fw-light">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-column pb-3">
                                                <div class="d-flex justify-content-between pb-2">
                                                    <div>
                                                        <strong class="fw-semiBold job-title">Job Title (Past)</strong>
                                                        <p class="fw-light fulltime-text">Fulltime</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong class="fw-medium date-text">Oct 2021 - Apr 2022</strong>
                                                        <p class="fw-light date-duration">7 months</p>
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
                        <div class="row mb-3 skills">
                            <div class="col-12">
                                <div class="bg-white px-5 py-4 bg-custom">
                                    <div class="row align-items-center pb-3">
                                        <div class="col-12">
                                            <h2 class="fw-bold h2-custom">Skills</h2>
                                        </div>
                                    </div>
                                    <div class="row pb-4">
                                        <div class="col-12">
                                            <div class="pb-4">
                                                <strong class="fw-semiBold skill-title">Skill 1</strong>
                                                <p class="fw-light skill-description">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="pb-4">
                                                <strong class="fw-semiBold skill-title">Skill 2</strong>
                                                <p class="fw-light skill-description">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="pb-4">
                                                <strong class="fw-semiBold skill-title">Skill 3</strong>
                                                <p class="fw-light skill-description">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- education --}}
                        <div class="row mb-3 education">
                            <div class="col-12">
                                <div class="bg-white px-5 py-4 bg-custom">
                                    <div class="row align-items-center pb-3">
                                        <div class="col-12">
                                            <h2 class="fw-bold h2-custom">Education</h2>
                                        </div>
                                    </div>
                                    <div class="row pb-4">
                                        <div class="col-12">
                                            <div class="d-flex pb-4">
                                                <div class="me-3">
                                                    <img src="{{ asset('user/assets/img/education-img.png') }}" class="education-img" alt="">
                                                </div>
                                                <div>
                                                    <strong class="fw-semiBold d-block education-degree">Magister of Loream ipsum</strong>
                                                    <strong class="fw-semiBold d-block education-university">University of Illinois</strong>
                                                    <p class="fw-light education-date">Oct 2021 - Apr 2022</p>
                                                    <p class="fw-light pt-2">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex pb-4">
                                                <div class="me-3">
                                                    <img src="{{ asset('user/assets/img/education-img.png') }}" class="education-img" alt="">
                                                </div>
                                                <div>
                                                    <strong class="fw-semiBold d-block education-degree">Bachelor of Loream ipsum</strong>
                                                    <strong class="fw-semiBold d-block education-university">University of Illinois</strong>
                                                    <p class="fw-light education-date">Oct 2021 - Apr 2022</p>
                                                    <p class="fw-light pt-2">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
                                                </div>
                                            </div>
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
                                        <a href="#" class="see-all-link">See all</a>
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
            </div>
        </section>

    </main>

@endsection
