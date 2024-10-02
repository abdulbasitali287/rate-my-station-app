@extends('layout.main')

@section('content')
    <section id="notifications-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row py-4">
                        <div class="col-md-8">
                            <h2 class="fw-bold" style="font-size: 28px;">Notifications <span style="color: #828282;">(3)</span></h2>
                        </div>
                        <div class="col-md-4 d-flex justify-content-end">
                            <div class="d-flex">
                                <div class="d-flex align-items-center pe-3">
                                    <p class="pe-2" style="color: #828282;font-weight: 500;font-size: 14px;">Filter</p>
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary dropdown-toggle" style="color: #828282;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unread</button>
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
                                    <p class="pe-2" style="color: #828282;font-weight: 500;font-size: 14px;">Short</p>
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary dropdown-toggle" style="color: #828282;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Newest</button>
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
                            <div id="notifications-list-card-parent" class="bg-white px-5 p-4 mt-2">
                                <x-user.notifications-list-card/>
                                <x-user.notifications-list-card/>
                                <x-user.notifications-list-card/>
                                <x-user.notifications-list-card bgColor="#fff"/>
                                <x-user.notifications-list-card bgColor="#fff"/>
                                <x-user.notifications-list-card bgColor="#fff"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4" id="latest-articles">
                    <div class="row align-items-center py-4">
                        <div class="col-md-8">
                            <h2 class="fw-bold" style="font-size: 28px;">Newsletter</h2>
                        </div>
                        <div class="col-md-4 text-center">
                            <a href="#" class="see-all-link">See all</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            {{-- latest posts --}}
                            {{-- loop div --}}
                            <x-user.latest-article />
                            <x-user.latest-article path="user/assets/img/2.png" title="Working chrismast and new year’s eve doesn’t have to be depressing" />
                            <x-user.latest-article path="user/assets/img/3.png" title="Is Jumping from Journalism to PR and communications a good idea?" />
                            {{-- newsletter subscribe --}}
                            <div class="newsletter-subscribe">
                                <h6>Subscribe to our Newsletter, so you'll never miss one</h6>
                                <input type="text" placeholder="Your email" class="form-control">
                                <button class="subscribe-btn">Subscribe</button>
                            </div>
                            {{-- rms --}}
                            <div>
                                <div id="lr-main-heading">
                                    <h2>Follow RMS</h2>
                                </div>
                                <div class="rms-follow">
                                    <div class="rms-social-item">
                                        <img src="{{ asset('user/assets/vectors/facebook-vector.png') }}" class="social-icon" alt="">
                                        <span>@RateMyStation</span>
                                    </div>
                                    <div class="rms-social-item">
                                        <img src="{{ asset('user/assets/vectors/instagram-vector.png') }}" class="social-icon" alt="">
                                        <span>@RateMyStation</span>
                                    </div>
                                    <div class="rms-social-item">
                                        <img src="{{ asset('user/assets/vectors/twitter-vector.png') }}" class="social-icon" alt="">
                                        <span>@RateMyStation</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
