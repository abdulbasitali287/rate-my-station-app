@extends('layout.main')

@section('content')

    <main id="faqs-search">
        <section id="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs">
                            <a href="{{ url('faqs') }}" class="breadcrumb-item">FAQs</a>
                            <span class="d-inline-block me-2"><img src="{{ asset('/user/assets/vectors/right-arrow-breadcrumb.png') }}" alt=""></span>
                            <a href="{{ url('faqs-search') }}" class="breadcrumb-item">Search results</a>
                            <span class="d-inline-block me-2"><img src="{{ asset('/user/assets/vectors/right-arrow-breadcrumb.png') }}" alt=""></span>
                            <span class="breadcrumb-item">Payments</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header">
                            <h1>Here are your results for “Loream Ipsum”</h1>
                            <p>There are 12 Stations with <strong>“Loream Ipsum”</strong> on <strong>TV News Category</strong></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        @foreach(range(1, 5) as $item)
                        <div class="result-card d-flex align-items-center mb-3">
                            <div>
                                <strong class="result-title">Eget nec, faucibus rhoncus aliquam placerat varius praesent?</strong>
                                <p class="result-description">Habitasse integer gravida vitae fusce. Nec vitae ut sit ipsum orci tellus habitant diam velit. Semper tellus, turpis amet, tellus dui velit integer malesuada mattis. Laoreet facilisi ultrices nulla ac quam.</p>
                                <p class="result-date fw-light pt-2">Payment   •   June 13, 2020</p>
                            </div>
                            <div class="px-4">
                                <button type="button" class="result-button">
                                    <img src="{{ asset('/user/assets/vectors/right-arrow.png') }}" alt="">
                                </button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-md-4">
                        <div class="contact-card">
                            <h2>Can't find the question you're looking for?</h2>
                            <p>Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum.</p>
                            <div class="d-flex justify-content-center">
                                <a href="{{ url('contact-us') }}" class="contact-button">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
