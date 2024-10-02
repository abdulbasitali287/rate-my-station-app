@extends('layout.main')

@section('content')
<section>
    <div class="container py-4">
        <div class="row overflow-hidden" style="border-radius: 10px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
            <div class="col-md-6 px-0">
                <div class="d-flex align-items-center" style="height: 635px;background-image: url({{ asset('user/assets/ellipse/authentication/login-bg.png') }});background-size: cover;background-repeat: no-repeat;
                border-bottom-left-radius: 16px;
                ">
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
                            <a href="{{ url('employee-login') }}" class="fw-bold pb-3 active" style="color: #89C400;font-size: 24px;" id="employee-tab">Employee</a>
                        </div>
                        <div class="col-6 py-4 px-0">
                            <a href="{{ url('newsroom-login') }}" class="fw-light" style="color: #828282;font-size: 24px;" id="newsroom-tab">Newsroom</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 px-0">
                            <form action="#">

                                <x-user.form-group label="Username" placeholder="Type your usename here..."/>

                                <x-user.form-group-right-icon label="Password" type="password" placeholder="Type your usename here..." />

                                <div class="d-flex justify-content-between align-items-center pt-3">

                                    <x-user.button buttonText="Login" class="bg-white" color="#194D79" />

                                    <a href="#" class="fw-light" style="color: #828282;">Forgot password?</a>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <p class="fw-light pe-1">Don’t have any account? </p><a href="{{ url('employee-register') }}" class="fw-bold" style="color: #89C400;border-bottom: 2px solid #89C400;"> Register here</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
