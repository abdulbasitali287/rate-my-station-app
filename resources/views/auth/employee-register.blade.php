@extends('layout.main')

@section('content')

    <main id="employee-register-main">

        <section>
            <div class="container py-4">
                <div class="row overflow-hidden border-radius-custom box-shadow-custom">
                    <div class="col-md-6 px-0 bg-image d-flex align-items-center">
                        <div class="px-5 text-center">
                            <img src="{{ asset('user/assets/img/authentication/auth-logo.png') }}" alt="#">
                            <h1 class="fw-bold text-white" style="font-size: 48px;">Find thousands of Ratings from real Journalists</h1>
                        </div>
                    </div>
                    <div class="col-md-6 bg-white px-5 d-flex flex-column justify-content-between pt-4 pb-5">
                        <div>
                            <div class="row text-center">
                                <div class="col-6 py-4 px-0">
                                    <a href="{{ url('employee-register') }}" class="fw-bold pb-3 button-link active employee-tab">Employee</a>
                                </div>
                                <div class="col-6 py-4 px-0">
                                    <a href="{{ url('newsroom-register') }}" class="fw-light button-link newsroom-tab">Newsroom</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 px-0">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <x-user.form-group label="Username" placeholder="Type your username here..." />
                                                <x-user.form-group-right-icon label="Password" type="password" placeholder="09saasd79a" />
                                            </div>
                                            <div class="col-md-6">
                                                <x-user.form-group label="Email" placeholder="Type your email" />
                                                <x-user.form-group-right-icon label="Confirm password" type="password" placeholder="Re-type your password" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <x-user.label label="Choose subscription" />
                                            </div>
                                            <div class="col-12 ps-4 d-flex justify-content-start flex-wrap">
                                                <label class="subscriptions me-2">
                                                    <input type="radio" name="options">
                                                    <div class="subscription-content">
                                                        <span class="subscription-title">Free</span>
                                                        <span class="subscription-description">Subscription</span>
                                                    </div>
                                                </label>
                                                <label class="subscriptions me-2">
                                                    <input type="radio" name="options">
                                                    <div class="subscription-content">
                                                        <div class="text-center pb-2">
                                                            <span class="subscription-title">1 Month</span>
                                                            <span class="subscription-description">Subscription</span>
                                                        </div>
                                                        <strong class="subscription-price">$34.95/m</strong>
                                                    </div>
                                                </label>
                                                <label class="subscriptions me-2">
                                                    <input type="radio" name="options">
                                                    <div class="subscription-content">
                                                        <div class="text-center pb-2">
                                                            <span class="subscription-title">2 Months</span>
                                                            <span class="subscription-description">Subscription</span>
                                                        </div>
                                                        <strong class="subscription-price">$19.95/m</strong>
                                                    </div>
                                                    <span class="subscription-discount">Save 30%</span>
                                                </label>
                                                <label class="subscriptions me-2">
                                                    <input type="radio" name="options">
                                                    <div class="subscription-content">
                                                        <div class="text-center pb-2">
                                                            <span class="subscription-title">6 Months</span>
                                                            <span class="subscription-description">Subscription</span>
                                                        </div>
                                                        <strong class="subscription-price">$9.95/m</strong>
                                                    </div>
                                                    <span class="subscription-discount">Save 30%</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="form-description">This is a recurring subscription that you can cancel anytime. <a href="#" class="fw-semiBold learn-more">Learn more</a></p>
                                            </div>
                                        </div>
                                        <div class="row align-items-center pt-4">
                                            <div class="col-md-6">
                                                <x-user.button buttonText="Register" class="bg-white" color="#194D79" />
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









{{-- <div class="row">
                                    <div class="col-12">
                                        <x-user.label label="Choose subcription" />
                                    </div>
                                    <div class="col-12 ps-4" style="display: flex;justify-content: start;flex-wrap: wrap;">
                                        <label class="subscriptions me-2">
                                            <input type="radio" name="options">
                                            <div style="position: absolute;top: 0;width: 100%;height: 100%;display: flex;flex-direction: column;justify-content: center;align-items: center;">
                                                <span style="font-size: 32px;font-weight: bold;color: #194D79;">Free</span>
                                                <span style="font-weight: 300;color: #828282;display: inline-block;margin-top: -10px;">Subscription</span>
                                            </div>
                                        </label>
                                        <label class="subscriptions me-2">
                                            <input type="radio" name="options">
                                            <div style="position: absolute;top: 0;width: 100%;height: 100%;display: flex;flex-direction: column;justify-content: center;align-items: center;">
                                                <div class="text-center pb-2">
                                                    <span style="font-size: 20px;font-weight: bold;color: #194D79;">1 Month</span>
                                                    <span style="font-weight: 300;color: #828282;display: block;margin-top: -10px;">Subscription</span>
                                                </div>
                                                <strong style="font-size: 18px;">$34.95/m</strong>
                                            </div>
                                        </label>
                                        <label class="subscriptions me-2">
                                            <input type="radio" name="options">
                                            <div style="position: absolute;top: 0;width: 100%;height: 100%;display: flex;flex-direction: column;justify-content: center;align-items: center;">
                                                <div class="text-center pb-2">
                                                    <span style="font-size: 20px;font-weight: bold;color: #194D79;">2 Months</span>
                                                    <span style="font-weight: 300;color: #828282;display: block;margin-top: -10px;">Subscription</span>
                                                </div>
                                                <strong style="font-size: 18px;">$19.95/m</strong>
                                            </div>
                                            <span class="position-absolute d-inline-block text-white" style="left: 26px;bottom: -12px;background-color: #194D79;padding-block: 4px;padding-inline: 10px;border-radius: 10px;font-size: 12px;">Save 30%</span>
                                        </label>
                                        <label class="subscriptions me-2">
                                            <input type="radio" name="options">
                                            <div style="position: absolute;top: 0;width: 100%;height: 100%;display: flex;flex-direction: column;justify-content: center;align-items: center;">
                                                <div class="text-center pb-2">
                                                    <span style="font-size: 20px;font-weight: bold;color: #194D79;">6 Months</span>
                                                    <span style="font-weight: 300;color: #828282;display: block;margin-top: -10px;">Subscription</span>
                                                </div>
                                                <strong style="font-size: 18px;">$9.95/m</strong>
                                            </div>
                                            <span class="position-absolute d-inline-block text-white" style="left: 26px;bottom: -12px;background-color: #194D79;padding-block: 4px;padding-inline: 10px;border-radius: 10px;font-size: 12px;">Save 30%</span>
                                        </label>
                                    </div>
                                </div> --}}
