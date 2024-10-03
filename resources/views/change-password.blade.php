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
                        <h2 class="fw-bold" style="font-size: 24px;">Security</h2>
                        <x-user.form-group label="Recovery email" type="email" placeholder="recovery@mail.com" />
                    </div>
                    <div class="pt-4">
                        <h2 class="fw-bold" style="font-size: 24px;">Change password</h2>
                        <x-user.form-group label="Current password" type="password" placeholder="Type here..." />
                        <x-user.form-group label="New password" type="password" placeholder="Type here..." />
                        <x-user.form-group label="Confirm new password" type="password" placeholder="Type here..." />
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
