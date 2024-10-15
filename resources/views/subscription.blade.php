@extends('layout.main')

@section('content')
    <main id="subscription-main">

        {{-- Banner Section --}}
        <section class="banner-section"></section>

        <section class="subscription-section">
            <div class="container subscription-container">
                <div class="row subscription-header">
                    <div class="col-md-4">
                        <div>
                            <h1 class="fw-bold subscription-title">Subscribe Now!</h1>
                            <p class="fw-light subscription-description">
                                Subscribe today to get instant access to all the latest television newsroom job openings, exclusively from our most highly rated stations.
                                <span class="d-block py-4">As a subscriber, you will also have access to:</span>
                            </p>
                            <ul>
                                <li class="subscription-list-item">
                                    <div class="icon-wrap">
                                        <img src="{{ asset('user/assets/ellipse/round-tick.png') }}" class="icon" alt="#">
                                    </div>
                                    <div>Station Ratings</div>
                                </li>
                                <li class="subscription-list-item">
                                    <div class="icon-wrap">
                                        <img src="{{ asset('user/assets/ellipse/round-tick.png') }}" class="icon" alt="#">
                                    </div>
                                    <div>Email updates when new jobs become available</div>
                                </li>
                                <li class="subscription-list-item">
                                    <div class="icon-wrap">
                                        <img src="{{ asset('user/assets/ellipse/round-tick.png') }}" class="icon" alt="#">
                                    </div>
                                    <div>Application tips for individual stations</div>
                                </li>
                                <li class="subscription-list-item">
                                    <div class="icon-wrap">
                                        <img src="{{ asset('user/assets/ellipse/round-tick.png') }}" class="icon" alt="#">
                                    </div>
                                    <div>News Director’s emails</div>
                                </li>
                                <li class="subscription-list-item">
                                    <div class="icon-wrap">
                                        <img src="{{ asset('user/assets/ellipse/round-tick.png') }}" class="icon" alt="#">
                                    </div>
                                    <div>Weekly Newsletter updates</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="plan-card">
                                    <button class="plan-button starter">Starter</button>
                                    <div class="plan-content">
                                        <div class="text-center">
                                            <h2 class="plan-title">1 Month</h2>
                                            <p class="plan-subscription">subscription</p>
                                        </div>
                                        <strong class="plan-price">$34.95/m</strong>
                                        <div class="d-flex justify-content-center">
                                            {{-- <x-user.button buttonText="Subscribe" class="bg-white m-0" color="#194D79" /> --}}
                                            <button type="submit" class="subscribe-btn">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="plan-card">
                                    <button class="plan-button recommendation">Recommendation</button>
                                    <div class="plan-content">
                                        <div class="text-center">
                                            <h2 class="plan-title">2 Months</h2>
                                            <p class="plan-subscription">subscription</p>
                                        </div>
                                        <div class="d-flex flex-column align-items-center justify-content-center save-more-section">
                                            <strong class="plan-price">$19.95/m</strong>
                                            <span class="plan-discount">Save more than 30%</span>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="subscribe-btn">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="plan-card">
                                    <button class="plan-button best-value">Best Value</button>
                                    <div class="plan-content">
                                        <div class="text-center">
                                            <h2 class="plan-title">6 Months</h2>
                                            <p class="plan-subscription">subscription</p>
                                        </div>
                                        <div class="d-flex flex-column align-items-center justify-content-center save-more-section">
                                            <strong class="plan-price">$9.95/m</strong>
                                            <span class="plan-discount">Save more than 30%</span>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="subscribe-btn">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 pt-4">
                                <div class="discount-banner">
                                    <p class="discount-text">New Subscribers! <span class="fw-bold">Get 50% off your first payment!</span> Use this Discount Code:</p>
                                    <a href="#" class="discount-code">MYSTATION</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row subscription-footer">
                    <div class="col-md-8">
                        <div class="d-flex">
                            <img src="{{ asset('user/assets/img/lock-img.png') }}" class="lock-img" alt="">
                            <p class="subscription-info">Rate My Station is a secured website that never captures or stores credit card information. All credit card transactions are handled by a 3rd party merchant processor (Stripe.com).</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex flex-column align-items-end">
                        <div class="">
                            <p class="payment-info">We accept all major credit cards.</p>
                            <img src="{{ asset('user/assets/img/payment-cards.jpg') }}" class="payment-cards" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
