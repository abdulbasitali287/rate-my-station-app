@extends('layout.main')

@section('content')

    <main id="faqs-detail-main">
        <section class="faq-detail-banner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="py-4 breadcrumb">
                            <span class="text-white breadcrumb-item">FAQs</span>
                            <span><img src="{{ asset('user/assets/vectors/right-arrow-white.png') }}" alt=""></span>
                            <span class="text-white breadcrumb-item">Search results</span>
                            <span><img src="{{ asset('user/assets/vectors/right-arrow-white.png') }}" alt=""></span>
                            <span class="text-white breadcrumb-item">FAQ detail</span>
                        </div>
                        <div>
                            <h1 class="text-white faq-title">Pellentesque vel tristique ultrices feugiat?</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container pt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="faq-detail-card">
                            <div class="pb-4 faq-detail-header">
                                <strong class="d-inline-block faq-detail-question">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum.</strong>
                                <p class="py-2 faq-detail-answer">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna, ut egestas vivamus proin. Velit leo scelerisque pulvinar vestibulum in nunc a tortor mollis. Fusce pretium est ipsum elementum parturient. Venenatis, ac nulla non varius dolor. Ornare consectetur mauris, adipiscing tristique a leo. Habitant pharetra tellus habitasse vestibulum nibh quisque. Sed vel condimentum enim leo tortor mi magna tincidunt. Egestas bibendum id eget quisque semper ultricies. Gravida viverra massa faucibus vestibulum condimentum.</p>
                                <p class="py-2 faq-detail-answer">Pretium tortor venenatis, mattis lobortis. Sollicitudin non sed eu, augue. Morbi purus ipsum ipsum ante felis. Nisi, vulputate risus nisl, nulla amet morbi habitant vel. Condimentum egestas vestibulum habitant vitae. Faucibus bibendum lacinia volutpat nulla placerat semper elementum gravida. Mi vulputate arcu, at tincidunt enim sit eu platea leo. Risus vitae in turpis elementum, viverra ultricies. Commodo sed eget at massa, integer. Porta id id nisl faucibus neque, purus. Fermentum enim, sed ut ultrices amet turpis pharetra faucibus blandit. Aenean proin at tortor tincidunt. Aenean sed ornare sit arcu mattis amet, eget. Id sed amet cras urna et malesuada.</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <h2 class="fw-bold pe-4 question-feedback">Did you find it helpful?</h2>
                                <div class="d-flex pt-3 pb-4 feedback-buttons">
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
                        <h1 class="fw-bold related-articles-title">Related articles</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="related-article d-flex align-items-center py-4 mb-3">
                            <div class="pe-2">
                                <p class="py-1 related-article-text">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam?</p>
                            </div>
                            <div class="px-4">
                                <div>
                                    <img src="{{ asset('user/assets/vectors/faq-detail-right-arrow.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="related-article d-flex align-items-center py-4 mb-3">
                            <div class="pe-2">
                                <p class="py-1 related-article-text">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam?</p>
                            </div>
                            <div class="px-4">
                                <div>
                                    <img src="{{ asset('user/assets/vectors/faq-detail-right-arrow.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="related-article d-flex align-items-center py-4 mb-3">
                            <div class="pe-2">
                                <p class="py-1 related-article-text">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam?</p>
                            </div>
                            <div class="px-4">
                                <div>
                                    <img src="{{ asset('user/assets/vectors/faq-detail-right-arrow.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="related-article d-flex align-items-center py-4 mb-3">
                            <div class="pe-2">
                                <p class="py-1 related-article-text">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam?</p>
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
        <x-user.searching-queries path="user/assets/ellipse/still-question-bg.png" title="Still have a question?" buttonText="Contact us" paragraph="Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum." />

    </main>

@endsection
