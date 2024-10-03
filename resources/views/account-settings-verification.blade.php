@extends('layout.main')

@section('content')
<section>
    <div class="container py-5">
        <div class="row bg-white" style="border-radius: 12px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
            <div class="col-md-4 px-0" style="border-inline-end: 1px solid #BDBDBD;">
                <x-accounts.sidebar />
            </div>
            <div class="col-md-8 px-0">
                <div class="px-5 pt-4">
                    <h2 class="fw-bold pb-4" style="font-size: 24px;">Request to verify account</h2>
                    <p class="fw-light" style="">Please upload your paperwork so we can review your request.</p>
                    <div class="d-flex pt-3 align-items-center">
                        <div class="pe-2" style="cursor: pointer;">
                            <img src="{{ asset('user/assets/img/small-upload-img.png') }}" alt="">
                        </div>
                        <div class="pe-2" style="cursor: pointer;">
                            <img src="{{ asset('user/assets/img/small-upload-img.png') }}" alt="">
                        </div>
                        <div class="pe-2" style="cursor: pointer;">
                            <img src="{{ asset('user/assets/img/small-upload-img.png') }}" alt="">
                        </div>
                        <div class="ps-2">
                            <p style="font-size: 20px;color: #194D79;cursor: pointer;">Upload Image in <strong>jpg or png format</strong></p>
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
@endsection
