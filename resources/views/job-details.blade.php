@extends('layout.main')
@section('content')
{{-- Hero Section --}}
<section id="hero-section" style="height: 294px;background-image: url({{ asset('user/assets/ellipse/job-opening.png') }});"></section>

<section style="margin-top: -164px;">
    <div class="container">
        <div class="row" style="padding: 40px;background-color: #FFFFFF;border-radius: 12px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
            <div class="col-md-9">
                <div class="d-flex">
                    <div style="width: 137px;height: 106px;">
                        <img class="w-100 h-100" src="{{ asset('user/assets/img/Logo.jpg') }}" style="object-fit: cover;" alt="">
                    </div>
                    <div style="padding-inline-start: 14px;">
                        <h2 class="position-relative" style="font-size: 30px;font-weight: bold;">Assistant News Director</h2>
                        <p style="color: #828282;">KABC</p>
                        <div class="d-flex justify-content-around px-2 my-3" style="background-color: #F2F2F2;border-radius: 10px;padding-block: 10px;">
                            <div class="pe-4">
                                <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" style="width: 20px;" alt=""></span>
                                <span style="color: #194D79;font-size: 14px;">Los Angeles, CA</span>
                            </div>
                            <div class="pe-4">
                                <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" style="width: 28px;" alt=""></span>
                                <span style="color: #194D79;font-size: 14px;">$100,000  -  $130,000</span>
                            </div>
                            <div class="pe-4">
                                <span><img src="{{ asset('user/assets/vectors/briefcase-30.png') }}" style="width: 20px;" alt=""></span>
                                <span style="color: #194D79;font-size: 14px;">Full time</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div style="width: 100%;height: 100%;display: flex;flex-direction: column;justify-content: center;">
                    <button class="subscribe-btn" style="margin-block: 6px;">Apply Now</button>
                    <div class="d-flex justify-content-between">
                        <button class="" style="border: 2px solid #828282;border-radius: 10px;font-weight: 600;padding: 10px 28px;background-color: transparent;" type="button">
                            <span style="display: inline-block;padding-inline-end: 10px;">
                                <img src="{{ asset('user/assets/vectors/save-vector.png') }}" alt="">
                            </span> Save
                        </button>
                        <button class="" style="border: 2px solid #828282;border-radius: 10px;font-weight: 600;padding: 10px 28px;background-color: transparent;" type="button">
                            <span style="display: inline-block;padding-inline-end: 10px;">
                                <img src="{{ asset('user/assets/vectors/share-24.png') }}"  alt="">
                            </span> Share
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="margin-top: 30px;">
    <div class="container" style="border-bottom: 1px solid #BDBDBD;padding-bottom: 30px;">
        <div class="row">
            <div style="padding: 40px;background-color: #FFFFFF;border-radius: 12px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                {{-- first div --}}
                <div style="border-bottom: 1px solid #E0E0E0;padding-bottom: 10px;">
                    <h3 style="font-size: 24px;font-weight: bold;padding-block: 10px;">Job Description</h3>
                    <p class="py-2" style="font-weight: 300">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna, ut egestas vivamus proin. Velit leo scelerisque pulvinar vestibulum in nunc a tortor mollis. Fusce pretium est ipsum elementum parturient. Venenatis, ac nulla non varius dolor. Ornare consectetur mauris, adipiscing tristique a leo. Habitant pharetra tellus habitasse vestibulum nibh quisque. Sed vel condimentum enim leo tortor mi magna tincidunt. Egestas bibendum id eget quisque semper ultricies. Gravida viverra massa faucibus vestibulum condimentum.</p>
                    <p class="py-2" style="font-weight: 300">Pretium tortor venenatis, mattis lobortis. Sollicitudin non sed eu, augue. Morbi purus ipsum ipsum ante felis. Nisi, vulputate risus nisl, nulla amet morbi habitant vel. Condimentum egestas vestibulum habitant vitae. Faucibus bibendum lacinia volutpat nulla placerat semper elementum gravida. Mi vulputate arcu, at tincidunt enim sit eu platea leo. Risus vitae in turpis elementum, viverra ultricies. Commodo sed eget at massa, integer. Porta id id nisl faucibus neque, purus. Fermentum enim, sed ut ultrices amet turpis pharetra faucibus blandit. Aenean proin at tortor tincidunt. Aenean sed ornare sit arcu mattis amet, eget. Id sed amet cras urna et malesuada.</p>
                </div>
                {{-- second div --}}
                <div style="border-bottom: 1px solid #E0E0E0;padding-bottom: 30px;">
                    <div class="row">
                        <div class="col-12">
                            <h3 style="font-size: 24px;font-weight: bold;padding-bottom: 10px;padding-top: 20px;">Qualification</h3>
                        </div>
                        <div class="col-6">
                            <ul class="ps-1">
                                <li style="list-style: inside;font-weight: 300;">Pellentesque vel tristique ultrices habitasse feugiat nulla</li>
                                <li style="list-style: inside;font-weight: 300;">tempor quam. Et risus commodo natoque pulvinar eu, interdum.</li>
                                <li style="list-style: inside;font-weight: 300;"> Viverra tortor hac sollicitudin dictum sit. Condimentum eget et</li>
                                <li style="list-style: inside;font-weight: 300;">commodo sapien porta felis amet pellentesque</li>
                                <li style="list-style: inside;font-weight: 300;">Erat augue enim turpis risus urna, ut egestas vivamus proin.</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="ps-1">
                                <li style="list-style: inside;font-weight: 300;">Pellentesque vel tristique ultrices habitasse feugiat nulla</li>
                                <li style="list-style: inside;font-weight: 300;">tempor quam. Et risus commodo natoque pulvinar eu, interdum.</li>
                                <li style="list-style: inside;font-weight: 300;"> Viverra tortor hac sollicitudin dictum sit. Condimentum eget et</li>
                                <li style="list-style: inside;font-weight: 300;">commodo sapien porta felis amet pellentesque</li>
                                <li style="list-style: inside;font-weight: 300;">Erat augue enim turpis risus urna, ut egestas vivamus proin.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- third div --}}
                <div style="border-bottom: 1px solid #E0E0E0;padding-bottom: 30px;">
                    <div class="row pt-5">
                        <div class="col-4">
                            <div class="py-2">
                                <p style="color: #828282;">Career Level</p>
                                <p style="font-weight: bold;">Staff (non-management & non-supervisor)</p>
                            </div>
                            <div class="py-2">
                                <p style="color: #828282;">Years of Experience</p>
                                <p style="font-weight: bold;">1 year</p>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="py-2">
                                <p style="color: #828282;">Education level</p>
                                <p style="font-weight: bold;">Bachelor Degree</p>
                            </div>
                            <div class="py-2">
                                <p style="color: #828282;">Job Type</p>
                                <p style="font-weight: bold;">Full-Time</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- fourth div --}}
                <div class="row pt-4">
                    <div class="col-12">
                        <button class="" style="border: none;font-weight: 600;background-color: transparent;" type="button">
                            <span style="display: inline-block;padding-inline-end: 10px;">
                                <img src="{{ asset('user/assets/vectors/save-vector.png') }}" alt="">
                            </span> Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div id="lr-main-heading" class="text-center">
                <h2 class="fw-bold pt-4">RateMyStation's Shop</h2>
            </div>
        </div>
        <div id="shop-container" class="position-relative">
            <div class="row">

                <x-user.product-card visibility="visible" image="user/assets/img/image-1.png" title="Don’t Make Me Use My News Voice Face Mask" amount="18.00" />

                <x-user.product-card visibility="visible" image="user/assets/img/image-2.png" title="America Needs Local News Sweatshirt" amount="25.00 – $33.50" />

                <x-user.product-card image="user/assets/img/image-3.png" title="Anonymous Source Onesie" amount="18.00" />

                <x-user.product-card image="user/assets/img/image-4.png" title="You Are A PKG Framed Poster" amount="26.00 – $105.00" />

            </div>
            <div class="d-flex justify-content-between position-absolute" style="top: 0;right: 0;left: 0;transform: translate()">
                <button type="button" style="background-color: #FFFFFF;padding-inline: 15px;padding-block: 7px;border-radius: 100%;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);border: none;transform: translate(-20px, 235px);"><img src="{{ asset('user/assets/vectors/left-arrow-gray.png') }}" alt=""></button>
                <button type="button" style="background-color: #FFFFFF;padding-inline: 15px;padding-block: 7px;border-radius: 100%;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);border: none;transform: translate(20px, 235px);"><img src="{{ asset('user/assets/vectors/right-arrow-gray.png') }}" alt=""></button>
            </div>
        </div>
    </div>
</section>
@endsection
