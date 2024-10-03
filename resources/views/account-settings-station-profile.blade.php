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
                    <div>
                        <h2 class="fw-bold" style="font-size: 24px;">Profile</h2>
                    </div>
                    <div class="d-flex align-items-center py-3">
                        <div class="px-2 pt-3" style="cursor: pointer;background-color: #F2F2F2;border-radius: 10px;">
                            <img src="{{ asset('user/assets/img/account-profile.png') }}" alt="">
                        </div>
                        <div class="ps-5">
                            <p style="font-size: 20px;color: #194D79;cursor: pointer;">Upload Image in <strong>jpg or png format</strong></p>
                        </div>
                    </div>
                    <x-user.form-group label="Stasion’s name" placeholder="Type here..." />
                    <div class="form-group py-2">
                        <x-user.label label="Station type" />
                        <div style="display: flex;background-color: #F2F2F2;padding-block: 11px;padding-inline-end: 10px;border-radius: 10px;">
                            <select name="" style="flex-grow: 1;padding-inline-start: 10px;margin-top: 3px;color: #828282;font-size: 14px;">
                                <option value="" selected>Choose options</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <x-user.form-group label="Stasion’s address" placeholder="Type here..." />
                    <div class="form-group py-2">
                        <x-user.label label="Stasion’s DMA" />
                        <div style="display: flex;background-color: #F2F2F2;padding-block: 11px;padding-inline-end: 10px;border-radius: 10px;">
                            <select name="" style="flex-grow: 1;padding-inline-start: 10px;margin-top: 3px;color: #828282;font-size: 14px;">
                                <option value="" selected>Choose options</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="py-3">
                        <x-user.button buttonText="Save" />
                        <x-user.button buttonText="Cancel" class="bg-white" color="#194D79" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
