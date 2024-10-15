@extends('layout.main')

@section('content')
    <main id="user-verification-main">
        <section>
            <div class="container py-5">
                <div class="row request-verification-card">
                    <div class="col-md-4 sidebar-column px-0">
                        <x-accounts.user-account-sidebar />
                    </div>
                    <div class="col-md-8 content-column px-0">
                        <div class="px-5 pt-4">
                            <h2 class="fw-bold pb-4 request-verification-title">Request to verify account</h2>
                            <p class="fw-light request-verification-text">Please upload your paperwork so we can review your request.</p>
                            <div class="d-flex pt-3 align-items-center upload-container">
                                <div class="upload-icon pe-2" style="cursor: pointer;">
                                    <img src="{{ asset('user/assets/img/small-upload-img.png') }}" alt="Upload Image">
                                </div>
                                <div class="upload-icon pe-2" style="cursor: pointer;">
                                    <img src="{{ asset('user/assets/img/small-upload-img.png') }}" alt="Upload Image">
                                </div>
                                <div class="upload-icon pe-2" style="cursor: pointer;">
                                    <img src="{{ asset('user/assets/img/small-upload-img.png') }}" alt="Upload Image">
                                </div>
                                <div class="upload-text ps-2">
                                    <p class="upload-instruction-text">Upload Image in <strong>jpg or png format</strong></p>
                                </div>
                            </div>
                            <div class="pt-3">
                                <x-user.button buttonText="Send request" class="bg-white" color="#194D79" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
