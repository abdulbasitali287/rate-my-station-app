@extends('layout.main')

@section('content')
    <main id="user-profile-main">
        <section>
            <div class="container py-5">
                <div class="row profile-card">
                    <div class="col-md-4 sidebar-column px-0">
                        <x-accounts.user-account-sidebar />
                    </div>
                    <div class="col-md-8 content-column px-0">
                        <div class="px-5 pt-4">
                            <div>
                                <h2 class="fw-bold profile-title">Profile</h2>
                            </div>
                            <div class="d-flex align-items-center py-3 profile-image-upload">
                                <div class="image-container">
                                    <img src="{{ asset('user/assets/img/account-profile.png') }}" alt="Profile Image">
                                </div>
                                <div class="ps-5">
                                    <p class="upload-info">Upload Image in <strong>jpg or png format</strong></p>
                                </div>
                            </div>
                            <x-user.form-group label="First name" placeholder="Type here..." />
                            <x-user.form-group label="Last name" placeholder="Type here..." />
                            <div class="form-group py-2">
                                <x-user.label label="Workplace" />
                                <div class="custom-select">
                                    <select name="" class="workplace-select">
                                        <option value="" selected>Choose options</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <x-user.form-group label="Job title" placeholder="Type here..." />
                            <x-user.form-group label="Your address" placeholder="Type here..." />
                            <div class="py-3 button-group">
                                <x-user.button buttonText="Save" />
                                <x-user.button buttonText="Cancel" class="bg-white" color="#194D79" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
