@extends('layout.main')
@section('content')
{{-- Hero Section --}}
<section id="hero-section" style="height: 312px;background-image: url({{ asset('user/assets/ellipse/faq-banner-bg.png') }});">
    <div class="container">
        <h1 class="fw-bold" style="color: #ffff;padding-block-end: 40px;padding-inline-start: 30px;">How can we help?</h1>
        <div class="row" style="justify-content: space-between;padding-inline: 30px;">
            <div class="col-md-10">
                <div class="input-group" style="border-radius: 10px;overflow: hidden;display: flex;align-items: center;padding-block: 8px;padding-inline-end: 10px;background-color: #ffff;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                    <input type="text" placeholder="Search question or topic..." style="width: 100%;padding-inline-end: 100px;padding-inline-start: 16px;padding-block: 4px;border: none;background-color: transparent;">
                </div>
            </div>
            <div class="col-md-2">
                <div>
                    <button style="background-color: #194D79;border: none;padding-block: 8px;padding-inline-end: 42px;border-radius: 10px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                        <span style="display: inline-block;padding-inline-start: 20px;padding-inline-end: 8px;">
                            <img src="{{ asset('user/assets/vectors/search-30-white.png') }}" style="color: #ffff;" alt="">
                        </span>
                        <span style="color: #ffff;font-weight: 500;letter-spacing: 0.5px;">Search</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container pt-5">
        <div class="row" style="padding: 40px;background-color: #FFFFFF;border-radius: 12px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
            <div class="col-12">
                <h2 style="font-size: 24px;font-weight: bold;">Top 10 question</h2>
            </div>
            <div class="col-md-6">
                <div>
                    <button class="d-flex justify-content-between" style="border: none;background-color: transparent;padding-block: 16px;">
                        <span class="d-inline-block" style="width: 80%;padding-inline: 8px;text-align: start;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam?</span>
                        <span class="d-inline-block" style="width: 20%;padding-inline-start: 20px;"><img src="{{ asset('user/assets/vectors/faqs-right-arrow.png') }}" alt="" style="width: 10px;height: 16px;"></span>
                    </button>
                    <button class="d-flex justify-content-between" style="border: none;background-color: transparent;padding-block: 16px;">
                        <span class="d-inline-block" style="width: 80%;padding-inline: 8px;text-align: start;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam?</span>
                        <span class="d-inline-block" style="width: 20%;padding-inline-start: 20px;"><img src="{{ asset('user/assets/vectors/faqs-right-arrow.png') }}" alt="" style="width: 10px;height: 16px;"></span>
                    </button>
                    <button class="d-flex justify-content-between" style="border: none;background-color: transparent;padding-block: 16px;">
                        <span class="d-inline-block" style="width: 80%;padding-inline: 8px;text-align: start;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam?</span>
                        <span class="d-inline-block" style="width: 20%;padding-inline-start: 20px;"><img src="{{ asset('user/assets/vectors/faqs-right-arrow.png') }}" alt="" style="width: 10px;height: 16px;"></span>
                    </button>
                    <button class="d-flex justify-content-between" style="border: none;background-color: transparent;padding-block: 16px;">
                        <span class="d-inline-block" style="width: 80%;padding-inline: 8px;text-align: start;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam?</span>
                        <span class="d-inline-block" style="width: 20%;padding-inline-start: 20px;"><img src="{{ asset('user/assets/vectors/faqs-right-arrow.png') }}" alt="" style="width: 10px;height: 16px;"></span>
                    </button>
                    <button class="d-flex justify-content-between" style="border: none;background-color: transparent;padding-block: 16px;">
                        <span class="d-inline-block" style="width: 80%;padding-inline: 8px;text-align: start;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam?</span>
                        <span class="d-inline-block" style="width: 20%;padding-inline-start: 20px;"><img src="{{ asset('user/assets/vectors/faqs-right-arrow.png') }}" alt="" style="width: 10px;height: 16px;"></span>
                    </button>

                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <button class="d-flex justify-content-between" style="border: none;background-color: transparent;padding-block: 16px;">
                        <span class="d-inline-block" style="width: 80%;padding-inline: 8px;text-align: start;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam?</span>
                        <span class="d-inline-block" style="width: 20%;padding-inline-start: 20px;"><img src="{{ asset('user/assets/vectors/faqs-right-arrow.png') }}" alt="" style="width: 10px;height: 16px;"></span>
                    </button>
                    <button class="d-flex justify-content-between" style="border: none;background-color: transparent;padding-block: 16px;">
                        <span class="d-inline-block" style="width: 80%;padding-inline: 8px;text-align: start;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam?</span>
                        <span class="d-inline-block" style="width: 20%;padding-inline-start: 20px;"><img src="{{ asset('user/assets/vectors/faqs-right-arrow.png') }}" alt="" style="width: 10px;height: 16px;"></span>
                    </button>
                    <button class="d-flex justify-content-between" style="border: none;background-color: transparent;padding-block: 16px;">
                        <span class="d-inline-block" style="width: 80%;padding-inline: 8px;text-align: start;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam?</span>
                        <span class="d-inline-block" style="width: 20%;padding-inline-start: 20px;"><img src="{{ asset('user/assets/vectors/faqs-right-arrow.png') }}" alt="" style="width: 10px;height: 16px;"></span>
                    </button>
                    <button class="d-flex justify-content-between" style="border: none;background-color: transparent;padding-block: 16px;">
                        <span class="d-inline-block" style="width: 80%;padding-inline: 8px;text-align: start;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam?</span>
                        <span class="d-inline-block" style="width: 20%;padding-inline-start: 20px;"><img src="{{ asset('user/assets/vectors/faqs-right-arrow.png') }}" alt="" style="width: 10px;height: 16px;"></span>
                    </button>
                    <button class="d-flex justify-content-between" style="border: none;background-color: transparent;padding-block: 16px;">
                        <span class="d-inline-block" style="width: 80%;padding-inline: 8px;text-align: start;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam?</span>
                        <span class="d-inline-block" style="width: 20%;padding-inline-start: 20px;"><img src="{{ asset('user/assets/vectors/faqs-right-arrow.png') }}" alt="" style="width: 10px;height: 16px;"></span>
                    </button>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row pt-5 pb-3">
            <div class="col-12">
                <h2 style="font-size: 24px;font-weight: bold;">Topics</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 ps-0">
                <div class="my-3" style="border: none;padding-block: 16px;padding-inline: 10px;background-color: #FFFFFF;border-radius: 12px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                    <button class="d-flex flex-column justify-content-between mb-4" style="border: none;background-color: #FFFFFF;">
                        <h5 class="d-block fw-bold" style="color: #194D79;padding-inline-start: 8px;">Corporate Policies</h5>
                        <div class="d-flex justify-content-between" style="width: 100%;">
                            <span class="d-inline-block" style="width: 90%;padding-inline: 8px;text-align: start;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam?</span>
                            <span class="d-inline-block" style="width: 10%;padding-inline-start: 20px;"><img src="{{ asset('user/assets/vectors/faqs-right-arrow.png') }}" alt="" style="width: 10px;height: 16px;"></span>
                        </div>
                    </button>
                </div>
                <div class="my-3" style="border: none;padding-block: 16px;padding-inline: 10px;background-color: #FFFFFF;border-radius: 12px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                    <button class="d-flex flex-column justify-content-between mb-4" style="border: none;background-color: #FFFFFF;">
                        <h5 class="d-block fw-bold" style="color: #194D79;padding-inline-start: 8px;">Privacy</h5>
                        <div class="d-flex justify-content-between" style="width: 100%;">
                            <span class="d-inline-block" style="width: 90%;padding-inline: 8px;text-align: start;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam?</span>
                            <span class="d-inline-block" style="width: 10%;padding-inline-start: 20px;"><img src="{{ asset('user/assets/vectors/faqs-right-arrow.png') }}" alt="" style="width: 10px;height: 16px;"></span>
                        </div>
                    </button>
                </div>
            </div>
            <div class="col-md-6 ps-0">
                <div class="my-3" style="border: none;padding-block: 16px;padding-inline: 10px;background-color: #FFFFFF;border-radius: 12px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                    <button class="d-flex flex-column justify-content-between mb-4" style="border: none;background-color: #FFFFFF;">
                        <h5 class="d-block fw-bold" style="color: #194D79;padding-inline-start: 8px;">Subcription</h5>
                        <div class="d-flex justify-content-between" style="width: 100%;">
                            <span class="d-inline-block" style="width: 90%;padding-inline: 8px;text-align: start;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam?</span>
                            <span class="d-inline-block" style="width: 10%;padding-inline-start: 20px;"><img src="{{ asset('user/assets/vectors/faqs-right-arrow.png') }}" alt="" style="width: 10px;height: 16px;"></span>
                        </div>
                    </button>
                </div>
                <div class="my-3" style="border: none;padding-block: 16px;padding-inline: 10px;background-color: #FFFFFF;border-radius: 12px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                    <button class="d-flex flex-column justify-content-between mb-4" style="border: none;background-color: #FFFFFF;">
                        <h5 class="d-block fw-bold" style="color: #194D79;padding-inline-start: 8px;">Payment</h5>
                        <div class="d-flex justify-content-between" style="width: 100%;">
                            <span class="d-inline-block" style="width: 90%;padding-inline: 8px;text-align: start;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam?</span>
                            <span class="d-inline-block" style="width: 10%;padding-inline-start: 20px;"><img src="{{ asset('user/assets/vectors/faqs-right-arrow.png') }}" alt="" style="width: 10px;height: 16px;"></span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- looking for work --}}
<x-user.searching-queries title="Stil have question?" buttonText="Contact us" paragraph="Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. " />
@endsection
