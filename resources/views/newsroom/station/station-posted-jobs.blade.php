@extends('layout.main')
@section('content')
    <main id="station-posted-jobs-main">

        {{-- Banner Section --}}
        <section class="banner-section"></section>

        {{-- station tabs section --}}
        <section class="station-tabs-container">
            <div class="container">
                <div class="row station-profile-container">
                    <div class="col-md-9 pb-4 border-bottom">
                        <div class="d-flex">
                            <div class="text-center pe-4">
                                <div class="logo-container">
                                    <img class="logo-image" src="{{ asset('user/assets/img/Logo.jpg') }}" alt="">
                                </div>
                                <a href="#" class="subscribe-button">Subscribed</a>
                            </div>
                            <div class="station-info">
                                <h2 class="station-name">KABC
                                    <span class="station-icon">
                                        <img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span>
                                </h2>
                                <p class="station-tagline">TV News Station</p>
                                <p class="station-location pt-2">
                                    <span class="location-icon d-inline-block me-2"><img src="{{ asset('user/assets/vectors/map-vector.png') }}" alt=""></span>Los Angeles, CA | DMA: 2
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-4 d-flex justify-content-center align-items-center border-bottom">
                        <div class="account-actions">
                            <a href="{{ url('newsroom-profile') }}" class="account-settings-button">
                                <span class="d-inline-block me-2">
                                    <img src="{{ asset('user/assets/vectors/settings-vector.png') }}" alt=""></span>
                                Account settings
                            </a>
                            <a href="#" class="add-profile-section-button d-flex justify-content-center align-items-center fw-bold">
                                <span class="me-2 add-icon">
                                    <img src="{{ asset('user/assets/vectors/plus-vector.png') }}" alt=""></span>
                                Add profile section
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <ul class="navigation-menu d-flex">
                            <li class="menu-item">
                                <a href="{{ url('station-profile') }}" class="text-black">Profile</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('station-rating') }}" class="text-black">My ratings</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('station-statistic') }}" class="text-black">Statistic</a>
                            </li>
                            <li class="menu-item active">
                                <a href="{{ url('station-posted-jobs') }}" class="text-black">Posted job</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('station-contact-info') }}" class="text-black">Contact Info</a>
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
                        <div class="row py-4 all-jobs-title-header">
                            <div class="col-md-8">
                                <h2 class="job-title fw-bold">All job post <span class="filter-label">(19)</span></h2>
                            </div>
                            <div class="col-md-4 d-flex justify-content-end">
                                <div class="d-flex">
                                    <div class="d-flex align-items-center pe-3">
                                        <p class="filter-label pe-2">Filter</p>
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary dropdown-toggle dropdown-button" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Job type</button>
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
                                        <p class="filter-label pe-2">Short</p>
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary dropdown-toggle dropdown-button" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Newest</button>
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
                                <div class="bg-white px-4 py-4 mb-3 job-card">
                                    <div class="row py-4 job-card-header">
                                        <div class="col-12 d-flex">
                                            <div class="image-container">
                                                <img src="{{ asset('user/assets/img/7-abc-163.png') }}" class="w-100 h-100" alt="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex flex-column pb-3 flex-grow-1 ps-3">
                                                        <h6 class="m-0 job-title">Assistant News Director</h6>
                                                        <p class="company-name fw-light">KABC</p>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <!-- Dropdown menu items go here -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-around px-2 my-3 job-details">
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" style="width: 17px;" alt=""></span>
                                                        <span class="company-name info-label">Los Angeles, CA</span>
                                                    </div>
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" style="width: 28px;" alt=""></span>
                                                        <span class="company-name info-label">$100,000  -  $130,000</span>
                                                    </div>
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/briefcase-30.png') }}" style="width: 20px;" alt=""></span>
                                                        <span class="company-name info-label">Full time</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-4">
                                        <div class="col-md-2">
                                            <div>
                                                <p class="posted-info">
                                                    <span class="d-block fw-light info-label">Posted on</span>
                                                    <span class="d-block fw-light info-label">June 3, 2022</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="d-flex justify-content-evenly">
                                                <div class="px-4">
                                                    <strong class="fw-bold info-value">549</strong>
                                                    <p class="fw-light posted-info">Views</p>
                                                </div>
                                                <div class="px-4">
                                                    <strong class="fw-bold info-value">149</strong>
                                                    <p class="fw-light posted-info">Applied</p>
                                                </div>
                                                <div class="px-4">
                                                    <strong class="fw-bold info-value">3 days</strong>
                                                    <p class="fw-light posted-info">Remaining</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-end">
                                            <x-user.button href="station-applied-candidates" buttonText="See all candidates" class="bg-white" color="#194D79" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="bg-white px-4 py-4 mb-3 job-card">
                                    <div class="row py-4 job-card-header">
                                        <div class="col-12 d-flex">
                                            <div class="image-container">
                                                <img src="{{ asset('user/assets/img/7-abc-163.png') }}" class="w-100 h-100" alt="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex flex-column pb-3 flex-grow-1 ps-3">
                                                        <h6 class="m-0 job-title">Assistant News Director</h6>
                                                        <p class="company-name fw-light">KABC</p>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <!-- Dropdown menu items go here -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-around px-2 my-3 job-details">
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" style="width: 17px;" alt=""></span>
                                                        <span class="company-name info-label">Los Angeles, CA</span>
                                                    </div>
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" style="width: 28px;" alt=""></span>
                                                        <span class="company-name info-label">$100,000  -  $130,000</span>
                                                    </div>
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/briefcase-30.png') }}" style="width: 20px;" alt=""></span>
                                                        <span class="company-name info-label">Full time</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-4">
                                        <div class="col-md-2">
                                            <div>
                                                <p class="posted-info">
                                                    <span class="d-block fw-light info-label">Posted on</span>
                                                    <span class="d-block fw-light info-label">June 3, 2022</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="d-flex justify-content-evenly">
                                                <div class="px-4">
                                                    <strong class="fw-bold info-value">549</strong>
                                                    <p class="fw-light posted-info">Views</p>
                                                </div>
                                                <div class="px-4">
                                                    <strong class="fw-bold info-value">149</strong>
                                                    <p class="fw-light posted-info">Applied</p>
                                                </div>
                                                <div class="px-4">
                                                    <strong class="fw-bold info-value">3 days</strong>
                                                    <p class="fw-light posted-info">Remaining</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-end">
                                            <x-user.button href="station-applied-candidates" buttonText="See all candidates" class="bg-white" color="#194D79" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="bg-white px-4 py-4 mb-3 job-card">
                                    <div class="row py-4 job-card-header">
                                        <div class="col-12 d-flex">
                                            <div class="image-container">
                                                <img src="{{ asset('user/assets/img/7-abc-163.png') }}" class="w-100 h-100" alt="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex flex-column pb-3 flex-grow-1 ps-3">
                                                        <h6 class="m-0 job-title">Assistant News Director</h6>
                                                        <p class="company-name fw-light">KABC</p>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <!-- Dropdown menu items go here -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-around px-2 my-3 job-details">
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" style="width: 17px;" alt=""></span>
                                                        <span class="company-name info-label">Los Angeles, CA</span>
                                                    </div>
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" style="width: 28px;" alt=""></span>
                                                        <span class="company-name info-label">$100,000  -  $130,000</span>
                                                    </div>
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/briefcase-30.png') }}" style="width: 20px;" alt=""></span>
                                                        <span class="company-name info-label">Full time</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-4">
                                        <div class="col-md-2">
                                            <div>
                                                <p class="posted-info">
                                                    <span class="d-block fw-light info-label">Posted on</span>
                                                    <span class="d-block fw-light info-label">June 3, 2022</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="d-flex justify-content-evenly">
                                                <div class="px-4">
                                                    <strong class="fw-bold info-value">0</strong>
                                                    <p class="fw-light posted-info">Views</p>
                                                </div>
                                                <div class="px-4">
                                                    <strong class="fw-bold info-value">0</strong>
                                                    <p class="fw-light posted-info">Applied</p>
                                                </div>
                                                <div class="px-4">
                                                    <strong class="fw-bold info-value">-</strong>
                                                    <p class="fw-light posted-info">Remaining</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-end">
                                            {{-- <x-user.button buttonText="See all candidates" class="bg-white" color="#194D79" /> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="bg-white px-4 py-4 mb-3 job-card">
                                    <div class="row py-4 job-card-header">
                                        <div class="col-12 d-flex">
                                            <div class="image-container">
                                                <img src="{{ asset('user/assets/img/7-abc-163.png') }}" class="w-100 h-100" alt="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex flex-column pb-3 flex-grow-1 ps-3">
                                                        <h6 class="m-0 job-title">Assistant News Director</h6>
                                                        <p class="company-name fw-light">KABC</p>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <!-- Dropdown menu items go here -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-around px-2 my-3 job-details">
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" style="width: 17px;" alt=""></span>
                                                        <span class="company-name info-label">Los Angeles, CA</span>
                                                    </div>
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" style="width: 28px;" alt=""></span>
                                                        <span class="company-name info-label">$100,000  -  $130,000</span>
                                                    </div>
                                                    <div class="pe-4">
                                                        <span><img src="{{ asset('user/assets/vectors/briefcase-30.png') }}" style="width: 20px;" alt=""></span>
                                                        <span class="company-name info-label">Full time</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-4">
                                        <div class="col-md-2">
                                            <div>
                                                <p class="posted-info">
                                                    <span class="d-block fw-light info-label">Posted on</span>
                                                    <span class="d-block fw-light info-label">June 3, 2022</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="d-flex justify-content-evenly">
                                                <div class="px-4">
                                                    <strong class="fw-bold info-value">0</strong>
                                                    <p class="fw-light posted-info">Views</p>
                                                </div>
                                                <div class="px-4">
                                                    <strong class="fw-bold info-value">0</strong>
                                                    <p class="fw-light posted-info">Applied</p>
                                                </div>
                                                <div class="px-4">
                                                    <strong class="fw-bold info-value">-</strong>
                                                    <p class="fw-light posted-info">Remaining</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 text-end">
                                            {{-- <x-user.button buttonText="See all candidates" class="bg-white" color="#194D79" /> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="post-job-card">
                            <h2 class="job-title">Hire the right employee for your company now!</h2>
                            <p class="job-description">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam.</p>
                            <div>
                                <a href="#" class="post-job-button" data-bs-toggle="modal" data-bs-target="#addJobOpeningModal">Post job opening</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

@endsection


{{-- add job opening modal --}}
<div class="modal fade" id="addJobOpeningModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-3" style="border-radius: 16px;">
        <div class="modal-header py-0 pt-2" style="border-bottom: none;">
          <h1 class="modal-title fw-bold" style="font-size: 24px;">Job Opening</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="#" class="fw-light">Job title</label>
                        <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                      <label for="#" class="fw-light">Job description</label>
                      <textarea name="" class="w-100 p-3 mt-2" placeholder="Type here..." id="" cols="30" rows="6" style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group pt-3">
                        <label for="#" class="fw-light">Yearly salary</label>
                        <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="#" class="fw-light">Job type</label>
                        <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="#" class="fw-light">Qulification</label>
                        <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                    </div>
                </div>
                <div class="col-md-6" style="align-content: center;">
                    <div>
                       <a href="#" class="d-flex mt-2 text-black">
                            <img src="{{ asset('user/assets/vectors/rounded-plus-27.png') }}" class="me-2" style="width: 27px;height: 27px;" alt="">
                            <p class="fw-light">Add more qualification</p>
                       </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="#" class="fw-light">Career level</label>
                        <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group pt-3">
                        <label for="#" class="fw-light">Years of experiance</label>
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
                <div class="col-12">
                    <div class="form-group pt-3">
                        <label for="#" class="fw-light">Education level</label>
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
            <div class="row pt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="#" class="fw-light">Start date</label>
                        <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="mm/dd/yy" style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="#" class="fw-light">End date</label>
                        <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="mm/dd/yy" style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                    </div>
                </div>
            </div>
          </form>
        </div>
        <div class="modal-footer d-flex justify-content-start" style="border-top: none;">
          <x-user.button buttonText="Save" class="px-5" />
          <x-user.button buttonText="Cancel" class="bg-white px-5" color="#194D79" />
          <a href="#" class="d-inline-block bg-transparent fw-bold mx-2" style="color: #194D79;">Save as a draft</a>
        </div>
      </div>
    </div>
</div>
