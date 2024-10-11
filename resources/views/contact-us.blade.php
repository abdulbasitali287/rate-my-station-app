@extends('layout.main')
@section('content')

    <main id="contact-us-main">

        {{-- Banner Section --}}
        <section class="banner-section"></section>

        {{-- form card --}}
        <section class="contact-card">
            <div class="container">
                <div class="row pb-5">
                    <div class="col-md-6 position-relative">
                        <div>
                            <div class="heading-section">
                                <h1 class="heading">Contact Us</h1>
                                <p class="sub-heading">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. </p>
                            </div>
                            <div class="position-absolute bottom-0 left-0 address-section">
                                <div class="d-flex py-3">
                                    <div class="pe-3 pt-1">
                                        <img src="{{ asset('user/assets/vectors/contact-location-vector.png') }}" alt="">
                                    </div>
                                    <div>
                                        <p class="fw-medium">
                                            <span class="d-block">2972 Westheimer Rd.</span>
                                            <span class="d-inline-block">Santa Ana, Illinois 85486</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex py-3">
                                    <div class="pe-3">
                                        <img src="{{ asset('user/assets/vectors/contact-phone-vector.png') }}" alt="">
                                    </div>
                                    <div>
                                        <p class="fw-medium"><span>1234-0293913</span></p>
                                    </div>
                                </div>
                                <div class="d-flex py-3">
                                    <div class="pe-3">
                                        <img src="{{ asset('user/assets/vectors/contact-envelope-vector.png') }}" alt="">
                                    </div>
                                    <div>
                                        <p class="fw-medium">
                                            <span>info@form.com</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-form">
                            <form>
                                <div class="form-group pb-2">
                                    <label for="#" class="py-2">Name</label>
                                    <input type="text" name="name" placeholder="Type your name here...">
                                </div>
                                <div class="form-group pb-2">
                                    <label for="#" class="py-2">Email</label>
                                    <input type="email" name="email" placeholder="Type your email here...">
                                </div>
                                <div class="form-group pb-2">
                                    <label for="#" class="py-2">Messages</label>
                                    <textarea name="message" cols="30" rows="10" placeholder="Type your Messages here..."></textarea>
                                </div>
                                <div class="form-group pt-3">
                                    <button type="submit">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row pt-4 contact-footer">
                    <div class="col-md-4 d-flex align-items-center">
                        <p class="fw-bold">For all the latest updates and more:</p>
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex justify-content-evenly">
                            <a href="#" class="facebook-btn">
                                <img src="{{ asset('user/assets/vectors/contact-like-us-vector.png') }}" alt="">
                                <span>Like us</span>
                            </a>
                            <a href="#" class="instagram-btn">
                                <img src="{{ asset('user/assets/vectors/contact-instagram-vector.png') }}" alt="">
                                <span>Follow us</span>
                            </a>
                            <a href="#" class="twitter-btn">
                                <img src="{{ asset('user/assets/vectors/contact-twitter-vector.png') }}" alt="">
                                <span>Follow us</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>
@endsection
