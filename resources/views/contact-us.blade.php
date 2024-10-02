@extends('layout.main')
@section('content')
{{-- Hero Section --}}
<section id="hero-section" style="height: 564px;background-image: url({{ asset('user/assets/ellipse/contact-banner-bg.png') }});"></section>

{{-- form card --}}
<section style="margin-top: -465px;">
    <div class="container" style="padding: 40px;background-color: #FFFFFF;border-radius: 12px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
        <div class="row pb-5" style="border-bottom: 1px solid #E0E0E0;">
            <div class="col-md-6 position-relative">
                <div>
                    <div style="padding-bottom: 100px;">
                        <h1 style="font-weight: bold;font-size: 48px;padding-block: 10px;">Contact Us</h1>
                        <p style="font-weight: 300;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. </p>
                    </div>
                    <div class="position-absolute bottom-0 left-0">
                        <div class="d-flex py-3">
                            <div class="pe-3 pt-1">
                                <img src="{{ asset('user/assets/vectors/contact-location-vector.png') }}" alt="">
                            </div>
                            <div>
                                <p style="font-weight: 500;"><span class="d-block">2972 Westheimer Rd.</span><span class="d-inline-block">Santa Ana, Illinois 85486</span></p>
                            </div>
                        </div>
                        <div class="d-flex py-3">
                            <div class="pe-3">
                                <img src="{{ asset('user/assets/vectors/contact-phone-vector.png') }}" alt="">
                            </div>
                            <div>
                                <p style="font-weight: 500;"><span>1234-0293913</span></p>
                            </div>
                        </div>
                        <div class="d-flex py-3">
                            <div class="pe-3">
                                <img src="{{ asset('user/assets/vectors/contact-envelope-vector.png') }}" alt="">
                            </div>
                            <div>
                                <p style="font-weight: 500;"><span>info@form.com</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <form>
                        <div class="form-group pb-2">
                            <label for="#" class="py-2">Name</label>
                            <input type="text" name="name" placeholder="Type your name here..." style="display: block;width: 100%;color: #828282;background-color: #F2F2F2;border: 1px solid transparent;border-radius: 10px;padding-inline: 10px;padding-block: 8px;">
                        </div>
                        <div class="form-group pb-2">
                            <label for="#" class="py-2">Email</label>
                            <input type="email" name="email" placeholder="Type your email here..." style="display: block;width: 100%;color: #828282;background-color: #F2F2F2;border: 1px solid transparent;border-radius: 10px;padding-inline: 10px;padding-block: 8px;">
                        </div>
                        <div class="form-group pb-2">
                            <label for="#" class="py-2">Messages</label>
                            <textarea name="message" cols="30" rows="10" placeholder="Type your Messages here..." style="display: block;width: 100%;color: #828282;background-color: #F2F2F2;border: 1px solid transparent;border-radius: 10px;padding-inline: 10px;padding-block: 8px;"></textarea>
                        </div>
                        <div class="form-group pt-3">
                            <button style="width: max-content;margin-block: 6px;font-weight: bold;background-color: transparent;border: 2px solid #194D79;border-radius: 10px;color: #194D79;padding-inline: 70px;padding-block: 8px;">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-md-4 d-flex align-items-center">
                <p class="fw-bold">For all the latest updates and more:</p>
            </div>
            <div class="col-md-8">
                <div class="d-flex justify-content-evenly">
                    <a href="#" style="background-color: #1877F2;color: #FFFFFF;padding-inline: 24px;padding-block: 12px;font-weight: 300;border-radius: 10px;">
                        <img src="{{ asset('user/assets/vectors/contact-like-us-vector.png') }}" style="height: 20px;padding-inline-end: 10px;" alt="">
                        <span style="font-size: 15px;">Like us</span>
                    </a>
                    <a href="#" style="background-color: #EE2987;color: #FFFFFF;padding-inline: 24px;padding-block: 12px;font-weight: 300;border-radius: 10px;">
                        <img src="{{ asset('user/assets/vectors/contact-instagram-vector.png') }}" style="height: 20px;padding-inline-end: 10px;" alt="">
                        <span style="font-size: 15px;">Follow us</span>
                    </a>
                    <a href="#" style="background-color: #55ACEE;color: #FFFFFF;padding-inline: 24px;padding-block: 12px;font-weight: 300;border-radius: 10px;">
                        <img src="{{ asset('user/assets/vectors/contact-twitter-vector.png') }}" style="height: 20px;padding-inline-end: 10px;" alt="">
                        <span style="font-size: 15px;">Follow us</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
