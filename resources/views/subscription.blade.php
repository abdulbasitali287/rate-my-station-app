@extends('layout.main')

@section('content')
{{-- Hero Section --}}
<section style="height: 456px;background-image: url({{ asset('user/assets/ellipse/subscription-bg.png') }});background-size: cover;background-repeat: no-repeat;"></section>

<section style="margin-top: -340px;">
    <div class="container py-5 px-5 bg-white" style="border-radius: 10px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
        <div class="row pb-5" style="border-bottom: 1px solid #E0E0E0;">
            <div class="col-md-4">
                <div>
                    <h1 class="fw-bold" style="font-size: 48px;">Subscribe Now!</h1>
                    <p class="fw-light mt-3 pe-5" style="font-size: 16px;">
                        Subscribe today to get instant access to all the latest television newsroom job openings, exclusively from our most highly rated stations.
                        <span class="d-block py-4">As a subscriber, you will also have access to:</span>
                    </p>
                    <ul>
                        <li class="fw-medium lh-lg d-flex" style="font-size: 18px;">
                            <div class="me-2" style="width: 15px;height: 15px;">
                                <img src="{{ asset('user/assets/ellipse/round-tick.png') }}" class="w-100 h-100" alt="#">
                            </div>
                            <div>
                                Station Ratings
                            </div>
                        </li>
                        <li class="fw-medium lh-lg d-flex" style="font-size: 18px;">
                            <div class="me-2" style="width: 15px;height: 15px;">
                            <img src="{{ asset('user/assets/ellipse/round-tick.png') }}" class="w-100 h-100" alt="#">
                            </div>
                            <div>
                                Email updates when new jobs become available
                            </div>
                        </li>
                        <li class="fw-medium lh-lg d-flex" style="font-size: 18px;">
                            <div class="me-2" style="width: 15px;height: 15px;">
                            <img src="{{ asset('user/assets/ellipse/round-tick.png') }}" class="w-100 h-100" alt="#">
                            </div>
                            <div>
                                Application tips for individual stations
                            </div>
                        </li>
                        <li class="fw-medium lh-lg d-flex" style="font-size: 18px;">
                            <div class="me-2" style="width: 15px;height: 15px;">
                            <img src="{{ asset('user/assets/ellipse/round-tick.png') }}" class="w-100 h-100" alt="#">
                            </div>
                            <div>
                                News Director’s emails
                            </div>
                        </li>
                        <li class="fw-medium lh-lg d-flex" style="font-size: 18px;">
                            <div class="me-2" style="width: 15px;height: 15px;">
                            <img src="{{ asset('user/assets/ellipse/round-tick.png') }}" class="w-100 h-100" alt="#">
                            </div>
                            <div>
                                Weekly Newsletter updates
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="w-100 d-flex flex-column align-items-center" style="border: 1px solid #E0E0E0;width: 243px;height: 386px;border-radius: 10px;">
                            <button class="fw-semiBold border-0 m-0 d-flex justify-content-center" style="width: 175px;height: 42px;background-color: #E0E0E0;font-size: 20px;color: #828282;border-top-right-radius: 0px;border-top-left-radius: 0px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;">Starter</button>

                            <div class="d-flex flex-column justify-content-between align-items-center flex-grow-1 pb-4">
                                <div class="text-center" style="padding-top: 44px;">
                                    <h2 class="fw-bold m-0" style="color: #194D79;;font-size: 36px;">1 Month</h2>
                                    <p class="fw-light" style="color: #828282;font-size: 24px;">subcription</p>
                                </div>
                                <strong class="fw-semiBold" style="font-size: 28px;">$34.95/m</strong>
                                <div class="d-flex justify-content-center">
                                    <x-user.button buttonText="Subscribe" class="bg-white m-0" color="#194D79" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="w-100 d-flex flex-column align-items-center" style="border: 1px solid #E0E0E0;width: 243px;height: 386px;border-radius: 10px;">
                            <button class="fw-semiBold border-0 m-0 d-flex justify-content-center" style="width: 175px;height: 42px;background-color: #E0E0E0;font-size: 20px;color: #828282;border-top-right-radius: 0px;border-top-left-radius: 0px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;">Recomendation</button>

                            <div class="d-flex flex-column justify-content-between align-items-center flex-grow-1 pb-4">
                                <div class="text-center" style="padding-top: 44px;">
                                    <h2 class="fw-bold m-0" style="color: #194D79;;font-size: 36px;">2 Months</h2>
                                    <p class="fw-light" style="color: #828282;font-size: 24px;">subcription</p>
                                </div>
                                <div class="d-flex flex-column align-items-center justify-content-center pt-4">
                                    <strong class="fw-semiBold" style="font-size: 28px;">$19.95/m</strong>
                                    <span class="d-inline-block fw-semiBold px-3 pb-1 mt-1 text-white" style="font-size: 14px;background-color: #89C400;border-radius: 10px;">Save more than 30%</span>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <x-user.button buttonText="Subscribe" class="bg-white m-0" color="#194D79" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="w-100 d-flex flex-column align-items-center" style="border: 1px solid #E0E0E0;width: 243px;height: 386px;border-radius: 10px;">
                            <button class="fw-semiBold border-0 m-0 d-flex justify-content-center align-items-center" style="width: 175px;height: 42px;background-color: #E0E0E0;font-size: 20px;color: #828282;border-top-right-radius: 0px;border-top-left-radius: 0px;border-bottom-right-radius: 10px;padding: 0px;border-bottom-left-radius: 10px;">Best Value</button>

                            <div class="d-flex flex-column justify-content-between align-items-center flex-grow-1 pb-4">
                                <div class="text-center" style="padding-top: 44px;">
                                    <h2 class="fw-bold m-0" style="color: #194D79;font-size: 36px;">6 Months</h2>
                                    <p class="fw-light" style="color: #828282;font-size: 24px;">subcription</p>
                                </div>
                                <div class="d-flex flex-column align-items-center justify-content-center pt-4">
                                    <strong class="fw-semiBold" style="font-size: 28px;">$9.95/m</strong>
                                    <span class="d-inline-block fw-semiBold px-3 pb-1 text-white" style="font-size: 14px;background-color: #89C400;border-radius: 10px;">Save more than 30%</span>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <x-user.button buttonText="Subscribe" class="bg-white m-0" color="#194D79" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="py-3 px-4 mt-3 d-flex justify-content-between align-items-center" style="background-color: #89C400;border-radius: 10px;">
                            <p class="text-white" style="">New Subscribers! <span class="fw-bold">Get 50% off your first payment!</span> Use this Discount Code:</p>
                            <a href="#" class="text-white p-2" style="border: 1px dashed #ffff;">MYSTATION</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-4">
            <div class="col-md-8">
                <div class="d-flex">
                    <img src="{{ asset('user/assets/img/lock-img.png') }}" class="me-3" style="width: 28px;height: 38px;" alt="">
                    <p class="fw-light" style="font-size: 16px;color: #828282;">Rate My Station is a secured website that never captures or stores credit card information. All credit card transactions are handled by a 3rd party merchant processor (Stripe.com).</p>
                </div>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-end">
                <div class="">
                    <p class="fw-light pb-2" style="font-size: 14px;color: #828282;">We accept all major credit cards.  </p>
                    <img src="{{ asset('user/assets/img/payment-cards.jpg') }}" style="width: 260px;height: 40px;" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
