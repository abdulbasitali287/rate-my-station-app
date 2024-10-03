@extends('layout.main')

@section('content')
<section>
    <div class="container py-5">
        <div class="row bg-white" style="border-radius: 12px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
            <div class="col-md-4 px-0" style="border-inline-end: 1px solid #BDBDBD;">
                <x-accounts.sidebar />
            </div>
            <div class="col-md-8 px-0 pb-4">
                <div class="px-5 pt-4">
                    <div class="pt-4">
                        <h2 class="fw-bold" style="font-size: 24px;">Contact Info</h2>
                        <x-user.form-group label="Email" type="email" placeholder="Type here..." />
                        <x-user.form-group label="Phone" type="number" placeholder="Type here..." />
                        <x-user.form-group label="Website" placeholder="Type here..." />
                        <x-user.form-group label="Linkedin" placeholder="Type here..." />
                        <x-user.form-group label="Twitter" placeholder="Type here..." />
                        <x-user.form-group label="Facebook" placeholder="Type here..." />

                    </div>
                    <div>
                        <x-user.button buttonText="Save" />
                        <x-user.button buttonText="Cancel" class="bg-white" color="#194D79" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
