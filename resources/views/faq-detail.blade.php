@extends('layout.main')

@section('content')
<section style="height: 194px;background-image: url({{ asset('user/assets/ellipse/faq-detail-banner-bg.png') }});background-size: cover;background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <span class="text-white" style="display: inline-block;font-size: 16px;font-weight: 200;color: #828282;padding-inline-end: 20px;">FAQs</span>
                    <span><img src="{{ asset('user/assets/vectors/right-arrow-white.png') }}" alt=""></span>
                    <span class="text-white" style="display: inline-block;font-size: 16px;font-weight: 200;color: #828282;padding-inline: 20px;">Search results</span>
                    <span><img src="{{ asset('user/assets/vectors/right-arrow-white.png') }}" alt=""></span>
                    <span class="text-white" style="display: inline-block;font-size: 16px;font-weight: 200;color: #828282;padding-inline: 20px;">FAQ detail</span>
                </div>
                <div>
                    <h1 class="text-white" style="font-size: 48px;font-weight: bold;">Pellentesque vel tristique ultrices feugiat?</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container pt-4">
        <div class="row">
            <div class="col-12">
                <div class="bg-white p-4" style="border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                    <div class="pb-4" style="border-bottom: 1px solid #E0E0E0;">
                        <strong class="d-inline-block pb-3" style="font-size: 20;font-weight: 600;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. </strong>
                        <p class="py-2" style="font-size: 16px;font-weight: 300;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna, ut egestas vivamus proin. Velit leo scelerisque pulvinar vestibulum in nunc a tortor mollis. Fusce pretium est ipsum elementum parturient. Venenatis, ac nulla non varius dolor. Ornare consectetur mauris, adipiscing tristique a leo. Habitant pharetra tellus habitasse vestibulum nibh quisque. Sed vel condimentum enim leo tortor mi magna tincidunt. Egestas bibendum id eget quisque semper ultricies. Gravida viverra massa faucibus vestibulum condimentum.</p>
                        <p class="py-2" style="font-size: 16px;font-weight: 300;">Pretium tortor venenatis, mattis lobortis. Sollicitudin non sed eu, augue. Morbi purus ipsum ipsum ante felis. Nisi, vulputate risus nisl, nulla amet morbi habitant vel. Condimentum egestas vestibulum habitant vitae. Faucibus bibendum lacinia volutpat nulla placerat semper elementum gravida. Mi vulputate arcu, at tincidunt enim sit eu platea leo. Risus vitae in turpis elementum, viverra ultricies. Commodo sed eget at massa, integer. Porta id id nisl faucibus neque, purus. Fermentum enim, sed ut ultrices amet turpis pharetra faucibus blandit. Aenean proin at tortor tincidunt. Aenean sed ornare sit arcu mattis amet, eget. Id sed amet cras urna et malesuada.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <h2 class="fw-bold pe-4" style="font-size: 24px;">Did you find it helpful?</h2>
                        <div class="d-flex pt-3 pb-4">
                            <x-user.button buttonText="Yes" />
                            <x-user.button buttonText="No" class="bg-white" color="#194D79" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container pt-4">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold" style="font-size: 24px;">Related articles</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex align-items-center py-4 mb-3" style="border-radius: 10px;">
                    <div class="pe-2">
                        <p class="py-1" style="font-size: 16px;font-weight: 300;">Pellentesque vel tristique ultrices habitasse feugiatnulla tempor quam?</p>
                    </div>
                    <div class="px-4">
                        <div>
                            <img src="{{ asset('user/assets/vectors/faq-detail-right-arrow.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center py-4 mb-3" style="border-radius: 10px;">
                    <div class="pe-2">
                        <p class="py-1" style="font-size: 16px;font-weight: 300;">Pellentesque vel tristique ultrices habitasse feugiatnulla tempor quam?</p>
                    </div>
                    <div class="px-4">
                        <div>
                            <img src="{{ asset('user/assets/vectors/faq-detail-right-arrow.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-center py-4 mb-3" style="border-radius: 10px;">
                    <div class="pe-2">
                        <p class="py-1" style="font-size: 16px;font-weight: 300;">Pellentesque vel tristique ultrices habitasse feugiatnulla tempor quam?</p>
                    </div>
                    <div class="px-4">
                        <div>
                            <img src="{{ asset('user/assets/vectors/faq-detail-right-arrow.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center py-4 mb-3" style="border-radius: 10px;">
                    <div class="pe-2">
                        <p class="py-1" style="font-size: 16px;font-weight: 300;">Pellentesque vel tristique ultrices habitasse feugiatnulla tempor quam?</p>
                    </div>
                    <div class="px-4">
                        <div>
                            <img src="{{ asset('user/assets/vectors/faq-detail-right-arrow.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- looking for work --}}
<x-user.searching-queries path="user/assets/ellipse/still-question-bg.png" title="Stil have question?" buttonText="Contact us" paragraph="Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. " />
@endsection
