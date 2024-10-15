@extends('layout.main')
@section('content')

    <main id="user-profile-main">

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
                            <li class="px-4 pt-4 pb-3 active-tab">
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

        <section class="user-information">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 pt-5">
                        {{-- about --}}
                        <div class="row mb-3 about">
                            <div class="col-12">
                                <div class="bg-white px-5 py-4 bg-custom">
                                    <div class="row align-items-center pb-3">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-between">
                                                <h2 class="fw-bold h2-custom">About</h2>
                                                <div>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editAboutModal">
                                                        <img src="{{ asset('user/assets/vectors/plus-vector-26.png') }}" class="img-custom" alt="">
                                                    </a>
                                                </div>
                                            </div>
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
                                            <div class="d-flex justify-content-between">
                                                <h2 class="fw-bold h2-custom">Experience</h2>
                                                <div class="d-flex">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#addExperienceModal" class="me-4">
                                                        <img src="{{ asset('user/assets/vectors/plus-vector-26.png') }}" class="img-small" alt="">
                                                    </a>
                                                    <a href="{{ url('edit-experience') }}">
                                                        <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" class="img-small" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-4">
                                        <div class="col-12">
                                            <div class="d-flex align-items-center pb-3">
                                                <div class="me-3">
                                                    <img src="{{ asset('user/assets/img/7-logo-46.png') }}" class="img-logo" alt="">
                                                </div>
                                                <div>
                                                    <strong class="fw-semiBold title-large">Office Name</strong>
                                                    <p class="fw-light text-light">14 months</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex flex-column pb-3">
                                                <div class="d-flex justify-content-between pb-2">
                                                    <div>
                                                        <strong class="fw-semiBold title-medium">Job Title (Current)</strong>
                                                        <p class="fw-light text-light">Fulltime</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong class="fw-medium title-medium date-range">Oct 2021 - Apr 2022</strong>
                                                        <p class="fw-light text-light">7 months</p>
                                                    </div>
                                                </div>
                                                <div class="pb-2">
                                                    <p class="fw-light">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-column pb-3">
                                                <div class="d-flex justify-content-between pb-2">
                                                    <div>
                                                        <strong class="fw-semiBold title-medium">Job Title (Current)</strong>
                                                        <p class="fw-light text-light">Fulltime</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <strong class="fw-medium title-medium date-range">Oct 2021 - Apr 2022</strong>
                                                        <p class="fw-light text-light">7 months</p>
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
                        <div class="row skills">
                            <div class="col-12">
                                <div class="bg-white px-5 py-4">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-between">
                                                <h2 class="fw-bold">Skills</h2>
                                                <div class="d-flex">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#addSkillsModal" class="me-4">
                                                        <img src="{{ asset('user/assets/vectors/plus-vector-26.png') }}" class="icon" alt="Add Skill">
                                                    </a>
                                                    <a href="{{ url('edit-skills') }}">
                                                        <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" class="icon" alt="Edit Skills">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 divider">
                                            <div class="py-4">
                                                <strong class="skill-title">Skill 1</strong>
                                                <p class="skill-description">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
                                            </div>
                                        </div>
                                        <div class="col-12 divider">
                                            <div class="py-4">
                                                <strong class="skill-title">Skill 2</strong>
                                                <p class="skill-description">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="py-4">
                                                <strong class="skill-title">Skill 3</strong>
                                                <p class="skill-description">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- education --}}
                        <div class="row education">
                            <div class="col-12">
                                <div class="bg-white px-5 py-4">
                                    <div class="row align-items-center pb-3">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-between">
                                                <h2 class="fw-bold">Education</h2>
                                                <div class="d-flex">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#addEducationModal" class="me-4">
                                                        <img src="{{ asset('user/assets/vectors/plus-vector-26.png') }}" class="icon" alt="Add Education">
                                                    </a>
                                                    <a href="{{ url('edit-education') }}">
                                                        <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" class="icon" alt="Edit Education">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-4">
                                        <div class="col-12 divider">
                                            <div class="d-flex pb-4">
                                                <div class="me-3">
                                                    <img src="{{ asset('user/assets/img/education-img.png') }}" class="education-img" alt="Education Image">
                                                </div>
                                                <div>
                                                    <strong class="education-title d-block">Magister of Loream ipsum</strong>
                                                    <strong class="university-name d-block">University of Illinois</strong>
                                                    <p class="date-range fw-light">Oct 2021 - Apr 2022</p>
                                                    <p class="description fw-light">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex pt-4">
                                                <div class="me-3">
                                                    <img src="{{ asset('user/assets/img/education-img.png') }}" class="education-img" alt="Education Image">
                                                </div>
                                                <div>
                                                    <strong class="education-title d-block">Bachelor of Loream ipsum</strong>
                                                    <strong class="university-name d-block">University of Illinois</strong>
                                                    <p class="date-range fw-light">Oct 2021 - Apr 2022</p>
                                                    <p class="description fw-light">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
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
    {{-- about modal --}}
    <div class="modal fade" id="editAboutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content p-3" style="border-radius: 16px;">
          <div class="modal-header py-0 pt-2" style="border-bottom: none;">
            <h1 class="modal-title fw-bold" style="font-size: 24px;">About</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="#" class="fw-light">You can write about your years of experience, industry, or skills.</label>
                <textarea name="" class="w-100 p-3 my-3" placeholder="Type here..." id="" cols="30" rows="6" style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer d-flex justify-content-start" style="border-top: none;">
            <button type="button" class="profile-modal-submit-btn">Save</button>
            <button type="button" class="profile-modal-cancel-btn close-modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>

    {{-- experience modal --}}
    <div class="modal fade" id="addExperienceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content p-3" style="border-radius: 16px;">
          <div class="modal-header py-0 pt-2" style="border-bottom: none;">
            <h1 class="modal-title fw-bold" style="font-size: 24px;">Experiance</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="#" class="fw-light">Title</label>
                            <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                        </div>
                    </div>
                    <div class="col-md-6" style="align-content: center;">
                        <div class="form-check pt-3">
                            <input class="form-check-input me-3" type="checkbox" value="" style="width: 22px;height: 22px;border-color: #BDBDBD;">
                            <label class="form-check-label d-inline-block mt-1 fw-light" for="flexCheckDefault">
                                I am currently working in this role
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="#" class="fw-light">Company name</label>
                            <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="#" class="fw-light">Job type</label>
                            <div class="mt-2" style="display: flex;background-color: #F2F2F2;padding-block: 10px;padding-inline-end: 10px;border-radius: 10px;">
                                <select name="" class="ps-3" style="flex-grow: 1;margin-top: 3px;color: #828282;font-size: 14px;">
                                    <option value="" selected>Choose options</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pt-3">
                        <label for="#" class="fw-light">Start date</label>
                    </div>
                    <div class="col-12">
                        <div class="row pt-2">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div style="display: flex;background-color: #F2F2F2;padding-block: 10px;padding-inline-end: 10px;border-radius: 10px;">
                                        <select name="" class="ps-3" style="flex-grow: 1;margin-top: 3px;color: #828282;font-size: 14px;">
                                            <option value="" selected>Month</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div style="display: flex;background-color: #F2F2F2;padding-block: 10px;padding-inline-end: 10px;border-radius: 10px;">
                                        <select name="" class="ps-3" style="flex-grow: 1;margin-top: 3px;color: #828282;font-size: 14px;">
                                            <option value="" selected>Year</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pt-3">
                        <label for="#" class="fw-light">End date</label>
                    </div>
                    <div class="col-12">
                        <div class="row pt-2">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div style="display: flex;background-color: #F2F2F2;padding-block: 10px;padding-inline-end: 10px;border-radius: 10px;">
                                        <select name="" class="ps-3" style="flex-grow: 1;margin-top: 3px;color: #828282;font-size: 14px;">
                                            <option value="" selected>Month</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div style="display: flex;background-color: #F2F2F2;padding-block: 10px;padding-inline-end: 10px;border-radius: 10px;">
                                        <select name="" class="ps-3" style="flex-grow: 1;margin-top: 3px;color: #828282;font-size: 14px;">
                                            <option value="" selected>Year</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="#" class="fw-light">Description</label>
                            <textarea name="" class="w-100 p-3 my-3" placeholder="Type here..." id="" cols="30" rows="6" style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;"></textarea>
                          </div>
                    </div>
                </div>
            </form>
          </div>
          <div class="modal-footer d-flex justify-content-start" style="border-top: none;">
            <button type="button" class="profile-modal-submit-btn">Save</button>
            <button type="button" class="profile-modal-cancel-btn close-modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>

    {{-- skills modal --}}
    <div class="modal fade" id="addSkillsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content p-3" style="border-radius: 16px;">
            <div class="modal-header py-0 pt-2" style="border-bottom: none;">
              <h1 class="modal-title fw-bold" style="font-size: 24px;">Skills</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="#" class="fw-light">Your skills</label>
                            <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                          <label for="#" class="fw-light">Description</label>
                          <textarea name="" class="w-100 p-3 my-3" placeholder="Type here..." id="" cols="30" rows="6" style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;"></textarea>
                        </div>
                    </div>
                </div>
              </form>
            </div>
            <div class="modal-footer d-flex justify-content-start" style="border-top: none;">
                <button type="button" class="profile-modal-submit-btn">Save</button>
                <button type="button" class="profile-modal-cancel-btn close-modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>

    {{-- education modal --}}
    <div class="modal fade" id="addEducationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content p-3" style="border-radius: 16px;">
            <div class="modal-header py-0 pt-2" style="border-bottom: none;">
              <h1 class="modal-title fw-bold" style="font-size: 24px;">Education</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="#" class="fw-light">School</label>
                              <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                          </div>
                      </div>
                      <div class="col-md-6" style="align-content: center;">
                        <div class="form-group">
                            <label for="#" class="fw-light">Degree</label>
                            <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12">
                          <div class="form-group">
                              <label for="#" class="fw-light">Field of study</label>
                              <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12 pt-3">
                          <label for="#" class="fw-light">Start date</label>
                      </div>
                      <div class="col-12">
                          <div class="row pt-2">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <div style="display: flex;background-color: #F2F2F2;padding-block: 10px;padding-inline-end: 10px;border-radius: 10px;">
                                          <select name="" class="ps-3" style="flex-grow: 1;margin-top: 3px;color: #828282;font-size: 14px;">
                                              <option value="" selected>Month</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <div style="display: flex;background-color: #F2F2F2;padding-block: 10px;padding-inline-end: 10px;border-radius: 10px;">
                                          <select name="" class="ps-3" style="flex-grow: 1;margin-top: 3px;color: #828282;font-size: 14px;">
                                              <option value="" selected>Year</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12 pt-3">
                          <label for="#" class="fw-light">End date</label>
                      </div>
                      <div class="col-12">
                          <div class="row pt-2">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <div style="display: flex;background-color: #F2F2F2;padding-block: 10px;padding-inline-end: 10px;border-radius: 10px;">
                                          <select name="" class="ps-3" style="flex-grow: 1;margin-top: 3px;color: #828282;font-size: 14px;">
                                              <option value="" selected>Month</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <div style="display: flex;background-color: #F2F2F2;padding-block: 10px;padding-inline-end: 10px;border-radius: 10px;">
                                          <select name="" class="ps-3" style="flex-grow: 1;margin-top: 3px;color: #828282;font-size: 14px;">
                                              <option value="" selected>Year</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12">
                          <div class="form-group">
                              <label for="#" class="fw-light">Description</label>
                              <textarea name="" class="w-100 p-3 my-3" placeholder="Type here..." id="" cols="30" rows="6" style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;"></textarea>
                            </div>
                      </div>
                  </div>
              </form>
            </div>
            <div class="modal-footer d-flex justify-content-start" style="border-top: none;">
                <button type="button" class="profile-modal-submit-btn">Save</button>
                <button type="button" class="profile-modal-cancel-btn close-modal">Cancel</button>
            </div>
          </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $(document).on('click', '.close-modal', function () {
            // Wrap the closest modal in jQuery object
            let modal = $(this).closest('.modal');
            console.log(modal);  // For debugging purposes
            modal.modal('hide'); // Close the modal
        });
    });
</script>

@endpush
