@extends('layout.main')
@section('content')
    <main id="faqs-main">
        {{-- banner Section --}}
        <section class="banner-section">
            <div class="container pt-5">
                <h1 class="fw-bold">How can we help?</h1>
                <div class="row justify-content-between">
                    <div class="col-md-10">
                        <div class="input-group">
                            <input type="text" placeholder="Search question or topic...">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div>
                            <button class="search-btn">
                                <span class="d-inline-block">
                                    <img src="{{ asset('user/assets/vectors/search-30-white.png') }}" style="color: #ffff;" alt="">
                                </span>
                                <span>Search</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="top-10-questions">
            <div class="container pt-5">
                <div class="row parent-div">
                    <div class="col-12">
                        <div class="row heading-row">
                            <div class="col-12">
                                <h2>Top 10 question</h2>
                            </div>
                        </div>
                        <div class="row top-10-card-row">
                            <div class="col-md-6">
                                <div class="row">

                                    <x-user.faqs-top-question-card />

                                    <x-user.faqs-top-question-card />

                                    <x-user.faqs-top-question-card />

                                    <x-user.faqs-top-question-card />

                                    <x-user.faqs-top-question-card />

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">

                                    <x-user.faqs-top-question-card />

                                    <x-user.faqs-top-question-card />

                                    <x-user.faqs-top-question-card />

                                    <x-user.faqs-top-question-card />

                                    <x-user.faqs-top-question-card />

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <section class="topics">
            <div class="container">
                <div class="row pt-5 pb-3 heading-row">
                    <div class="col-12">
                        <h2 class="fw-bold">Topics</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">

                            <x-user.faqs-topics-card title="Corporate Policies" />

                            <x-user.faqs-topics-card title="Subcription" />

                            <x-user.faqs-topics-card title="Privacy" />

                            <x-user.faqs-topics-card title="Payment" />

                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- looking for work --}}
        <x-user.searching-queries title="Stil have question?" buttonText="Contact us" paragraph="Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. " />
    </main>
@endsection
