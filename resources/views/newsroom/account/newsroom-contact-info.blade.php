@extends('layout.main')

@section('content')
<main id="newsroom-contact-info-main">
    <section>
        <div class="container py-5">
            <div class="row contact-info-card">
                <div class="col-md-4 sidebar-column px-0">
                    <x-accounts.sidebar />
                </div>
                <div class="col-md-8 content-column pb-4">
                    <div class="px-5 pt-4">
                        <div class="pt-4">
                            <h2 class="fw-bold contact-title">Contact Info</h2>
                            <x-user.form-group label="Email" type="email" placeholder="Type here..." />
                            <x-user.form-group label="Phone" type="number" placeholder="Type here..." />
                            <x-user.form-group label="Website" placeholder="Type here..." />
                            <x-user.form-group label="Linkedin" placeholder="Type here..." />
                            <x-user.form-group label="Twitter" placeholder="Type here..." />
                            <x-user.form-group label="Facebook" placeholder="Type here..." />
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
