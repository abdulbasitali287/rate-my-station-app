@extends('layout.main')

@section('content')
    <main id="user-change-password-main">
        <section>
            <div class="container py-5">
                <div class="row change-password-card bg-white">
                    <div class="col-md-4 sidebar-column px-0">
                        <x-accounts.user-account-sidebar />
                    </div>
                    <div class="col-md-8 content-column px-0">
                        <div class="px-5 pt-4">
                            <div class="security-section">
                                <h2 class="fw-bold security-title">Security</h2>
                                <x-user.form-group label="Recovery email" type="email" placeholder="recovery@mail.com" />
                            </div>
                            <div class="pt-4 change-password-section">
                                <h2 class="fw-bold change-password-title">Change password</h2>
                                <x-user.form-group label="Current password" type="password" placeholder="Type here..." />
                                <x-user.form-group label="New password" type="password" placeholder="Type here..." />
                                <x-user.form-group label="Confirm new password" type="password"
                                    placeholder="Type here..." />
                            </div>
                            <div class="button-group">
                                <x-user.button buttonText="Save" />
                                <x-user.button buttonText="Cancel" class="bg-white" color="#194D79" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
