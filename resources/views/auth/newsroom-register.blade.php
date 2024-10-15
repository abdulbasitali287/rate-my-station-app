@extends('layout.main')

@section('content')

    <main id="newsroom-register-main">

        <section>
            <div class="container py-4">
                <div class="row overflow-hidden box-shadow-custom registration-box">
                    <div class="col-md-6 px-0">
                        <div class="d-flex align-items-center bg-login-image">
                            <div class="px-5 text-center">
                                <img src="{{ asset('user/assets/img/authentication/auth-logo.png') }}" alt="#">
                                <h1 class="fw-bold text-white" style="font-size: 48px;">Find thousands of Ratings from real Journalists</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 bg-white px-5 d-flex flex-column justify-content-between pt-4 pb-5">
                        <div>
                            <div class="row text-center">
                                <div class="col-6 py-4 px-0">
                                    <a href="{{ url('employee-register') }}" class="fw-light pb-3 employee-tab" style="color: #828282; font-size: 24px;">Employee</a>
                                </div>
                                <div class="col-6 py-4 px-0">
                                    <a href="{{ url('newsroom-register') }}" class="fw-bold active newsroom-tab" style="color: #89C400; font-size: 24px;">Newsroom</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 px-0">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <x-user.form-group label="Station’s name" placeholder="Type your username "/>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group py-2">
                                                    <x-user.label label="Station type" />
                                                    <div class="select-container">
                                                        <select name="" class="" style="width: 100%;background-color: #F2F2F2;color: #828282;border: none;border-radius: 10px;background-color: #F2F2F2;padding-inline-start: 10px;padding-block: 10px;">
                                                            <option value="" selected>Choose options</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <x-user.form-group type="email" label="Email" placeholder="Type your email"/>
                                            </div>
                                            <div class="col-md-6">
                                                <x-user.form-group-right-icon label="Password" placeholder="09saasd79a" />
                                            </div>
                                            <div class="col-md-6">
                                                <x-user.form-group-right-icon label="Confirm password" placeholder="Re-type your password " />
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col-12">
                                                <x-user.label label="Choose subscription" />
                                            </div>
                                            <div class="col-12 ps-4 d-flex justify-content-start flex-wrap">
                                                <label class="subscriptions me-2">
                                                    <input type="radio" name="options">
                                                    <div class="subscription-content">
                                                        <span class="subscription-label">Free</span>
                                                        <span class="subscription-note">Subscription</span>
                                                    </div>
                                                </label>
                                                <label class="subscriptions me-2">
                                                    <input type="radio" name="options">
                                                    <div class="subscription-content">
                                                        <div class="text-center pb-2">
                                                            <span class="subscription-label">1 Month</span>
                                                            <span class="subscription-note">Subscription</span>
                                                        </div>
                                                        <strong class="subscription-price">$34.95/m</strong>
                                                    </div>
                                                </label>
                                                <label class="subscriptions me-2">
                                                    <input type="radio" name="options">
                                                    <div class="subscription-content">
                                                        <div class="text-center pb-2">
                                                            <span class="subscription-label">2 Months</span>
                                                            <span class="subscription-note">Subscription</span>
                                                        </div>
                                                        <strong class="subscription-price">$19.95/m</strong>
                                                    </div>
                                                    <span class="save-badge">Save 30%</span>
                                                </label>
                                                <label class="subscriptions me-2">
                                                    <input type="radio" name="options">
                                                    <div class="subscription-content">
                                                        <div class="text-center pb-2">
                                                            <span class="subscription-label">6 Months</span>
                                                            <span class="subscription-note">Subscription</span>
                                                        </div>
                                                        <strong class="subscription-price">$9.95/m</strong>
                                                    </div>
                                                    <span class="save-badge">Save 30%</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12" style="padding-top: 35px;">
                                                <p class="fw-light subscription-note-text">This is a recurring subscription that you can cancel anytime. <a href="#" class="fw-semiBold learn-more">Learn more</a></p>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <button type="submit" class="register-btn">Register</button>
                                            </div>
                                            <div class="col-md-6">
                                                <x-user.checkbox label="Terms & conditions" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
