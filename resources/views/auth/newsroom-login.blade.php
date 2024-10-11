@extends('layout.main')

@section('content')

    <main id="newsroom-login-main">

        <section>
            <div class="container py-4">
                <div class="row overflow-hidden custom-card">
                    <div class="col-md-6 px-0">
                        <div class="login-background d-flex align-items-center">
                            <div class="px-5 text-center">
                                <img src="{{ asset('user/assets/img/authentication/auth-logo.png') }}" alt="#">
                                <h1 class="fw-bold text-white title">Find thousands of Ratings from real Journalists</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 bg-white px-5 d-flex flex-column justify-content-between pt-4 pb-5">
                        <div>
                            <div class="row text-center">
                                <div class="col-6 py-4 px-0">
                                    <a href="{{ url('employee-login') }}" class="fw-light pb-3 employee-tab">Employee</a>
                                </div>
                                <div class="col-6 py-4 px-0">
                                    <a href="{{ url('newsroom-login') }}" class="fw-bold active newsroom-tab">Newsroom</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 px-0">
                                    <form action="#">
                                        <x-user.form-group label="Station’s name" placeholder="Type your username here..."/>
                                        <x-user.form-group-right-icon label="Password" type="password" placeholder="Type your password here..." />
                                        <div class="d-flex justify-content-between align-items-center pt-3">
                                            <x-user.button buttonText="Login" class="bg-white" color="#194D79" />
                                            <a href="#" class="fw-light forgot-password">Forgot password?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <p class="fw-light pe-1">Don’t have an account? </p>
                            <a href="{{ url('newsroom-register') }}" class="fw-bold register-link">Register here</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
