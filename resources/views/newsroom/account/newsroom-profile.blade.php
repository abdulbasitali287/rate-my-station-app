@extends('layout.main')

@section('content')
    <main id="newsroom-profile">
        <section>
            <div class="container py-5">
                <div class="row profile-card">
                    <div class="col-md-4 sidebar-column px-0">
                        <x-accounts.sidebar />
                    </div>
                    <div class="col-md-8 profile-content">
                        <div class="px-5 pt-4">
                            <h2 class="profile-title">Profile</h2>
                            <div class="d-flex align-items-center py-3">
                                <div class="profile-image-upload">
                                    <img src="{{ asset('user/assets/img/account-profile.png') }}" alt="">
                                </div>
                                <div class="upload-info ps-5">
                                    <p>Upload Image in <strong>jpg or png format</strong></p>
                                </div>
                            </div>
                            <x-user.form-group label="Stasion’s name" placeholder="Type here..." />
                            <div class="form-group py-2">
                                <x-user.label label="Station type" />
                                <div class="custom-select-container">
                                    <select name="" class="custom-select">
                                        <option value="" selected>Choose options</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <x-user.form-group label="Stasion’s address" placeholder="Type here..." />
                            <div class="form-group py-2">
                                <x-user.label label="Stasion’s DMA" />
                                <div class="custom-select-container">
                                    <select name="" class="custom-select">
                                        <option value="" selected>Choose options</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="py-3">
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
