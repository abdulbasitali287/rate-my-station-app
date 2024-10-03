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
                    <h2 class="fw-bold pb-4" style="font-size: 24px;">Your account subcription</h2>
                    <div class="d-flex overflow-hidden" style="border-radius: 10px;">
                        <div class="d-flex" style="background-color: #9BDB08;border: 2px solid transparent;">
                            <div class="d-inline-block px-2" style="background-color: #89C400;"></div>
                            <div class="p-4">
                                <h1 class="fw-bold text-white m-0" style="font-size: 36px;">1 Month</h1>
                                <p class="fw-light text-white" style="font-size: 24px;margin-top: -10px;">subcription</p>
                            </div>
                        </div>
                        <div class="py-4 pe-4 text-end" style="border: 2px solid #E0E0E0;border-top-right-radius: 10px;border-bottom-right-radius: 10px;padding-inline-start: 110px;">
                            <strong class="fw-semiBold" style="font-size: 28px;color: #194D79;">$34.95/m</strong>
                            <p class="fw-light" style="color: #828282;">Active until Dec 21, 2022</p>
                        </div>
                    </div>
                    <a href="#" class="fw-bold mt-4 d-block" style="color: #194D79;">Change Plan or Cancel Subcription</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
