@extends('layout.main')

@section('content')
    <main id="notifications">

        <section class="notifications-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row notifications-header">
                            <div class="col-md-8">
                                <h2 class="fw-bold">Notifications <span style="color: #828282;">(3)</span></h2>
                            </div>
                            <div class="col-md-4 d-flex justify-content-end">
                                <div class="d-flex">
                                    <div class="d-flex align-items-center pe-3">
                                        <p class="filter-label">Filter</p>
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unread</button>
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
                                        <p class="sort-label">Short</p>
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Newest</button>
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

                        {{-- <div class="row notifications-card">
                            <div class="col-12">
                                <div class="bg-white px-5 p-4 mt-2 notifications-list-card-parent">
                                    <x-user.notifications-list-card/>
                                    <x-user.notifications-list-card/>
                                    <x-user.notifications-list-card/>
                                    <x-user.notifications-list-card bgColor="#fff"/>
                                    <x-user.notifications-list-card bgColor="#fff"/>
                                    <x-user.notifications-list-card bgColor="#fff"/>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row notifications-card">
                            <div class="col-12">
                                <div class="bg-white px-2 p-4 mt-2 notifications-list-card-parent">
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

                    <div class="col col-md-4">
                        <div class="row align-items-center left-title-header">
                            <div class="col-md-8">
                                <h2 class="fw-bold right-col-title">Newsletter</h2>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="{{ url('newsletter') }}" class="see-all-link">See all</a>
                            </div>
                        </div>
                        <div class="row latest-articles">
                            <div class="col-12">
                                {{-- latest posts --}}
                                {{-- loop div --}}
                                <x-user.latest-article />
                                <x-user.latest-article path="user/assets/img/2.png" title="Working Christmas and New Year's Eve doesn’t have to be depressing" />
                                <x-user.latest-article path="user/assets/img/3.png" title="Is Jumping from Journalism to PR and Communications a Good Idea?" />

                                {{-- newsletter subscribe --}}
                                <div class="newsletter-subscribe">
                                    <h6>Subscribe to our Newsletter, so you'll never miss one</h6>
                                    <input type="email" placeholder="Your email" class="form-control">
                                    <button class="subscribe-btn w-100 fw-bold">Subscribe</button>
                                </div>

                                {{-- rms follow --}}
                                <div class="rms-follow-section">
                                    <h2 class="fw-bold">Follow RMS</h2>
                                    <div class="rms-follow">
                                        <div class="rms-social-item">
                                            <img src="{{ asset('user/assets/vectors/facebook-vector.png') }}" class="social-icon" alt="Facebook">
                                            <span>@RateMyStation</span>
                                        </div>
                                        <div class="rms-social-item">
                                            <img src="{{ asset('user/assets/vectors/instagram-vector.png') }}" class="social-icon" alt="Instagram">
                                            <span>@RateMyStation</span>
                                        </div>
                                        <div class="rms-social-item">
                                            <img src="{{ asset('user/assets/vectors/twitter-vector.png') }}" class="social-icon" alt="Twitter">
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

    </main>

@endsection
