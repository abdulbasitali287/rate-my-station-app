@extends('layout.main')
@push('style')
    <style>
        label.subscriptions{
            width: 126px;
            height: 120px;
            position: relative;
        }
        label.subscriptions input[type="radio"] {
            width: 100%;
            height: 100%;
            border-radius: 15px;
            border: 2px solid #E0E0E0;
            background-color: white;
            -webkit-appearance: none;
            z-index: 1000;
        }
    </style>
@endpush
@section('content')
<section>
    <div class="container py-4">
        <div class="row overflow-hidden" style="border-radius: 10px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
            <div class="col-md-6 px-0">
                <div class="d-flex align-items-center" style="height: 100%;background-image: url({{ asset('user/assets/ellipse/authentication/login-bg.png') }});background-size: cover;background-repeat: no-repeat;border-bottom-left-radius: 16px;">
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
                            <a href="{{ url('employee-register') }}" class="fw-light pb-3" style="color: #828282;font-size: 24px;" id="employee-tab">Employee</a>
                        </div>
                        <div class="col-6 py-4 px-0">
                            <a href="{{ url('newsroom-register') }}" class="fw-bold active" style="color: #89C400;font-size: 24px;" id="newsroom-tab">Newsroom</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 px-0">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <x-user.form-group label="Station’s name" placeholder="Type your usename "/>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group py-2">
                                            <x-user.label label="Station type" />
                                            <div style="display: flex;background-color: #F2F2F2;padding-block: 11px;padding-inline-end: 10px;border-radius: 10px;">
                                                <select name="" style="flex-grow: 1;padding-inline-start: 10px;margin-top: 3px;color: #828282;font-size: 14px;">
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
                                        <x-user.label label="Choose subcription" />
                                    </div>
                                    <div class="col-12 ps-4" style="display: flex;justify-content: start;flex-wrap: wrap;">
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
                                </div>
                                <div class="row">
                                    <div class="col-12" style="padding-top: 35px;">
                                        <p class="fw-light" style="color: #828282;">This is recurring subcription that you can cancel anytime. <a href="#" class="fw-semiBold" style="font-size: 14px;color: #89C400;border-bottom: 2px solid #89C400;">Learn more</a></p>
                                    </div>
                                </div>
                                <div class="row align-items-center">
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
@endsection
