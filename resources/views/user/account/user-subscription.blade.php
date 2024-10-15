@extends('layout.main')

@section('content')
    <main id="user-subscription-main">

        <section>
            <div class="container py-5">
                <div class="row account-subscription-card">
                    <div class="col-md-4 sidebar-column px-0">
                        <x-accounts.user-account-sidebar />
                    </div>
                    <div class="col-md-8 content-column px-0">
                        <div class="px-5 pt-4">
                            <h2 class="fw-bold pb-4 account-subscription-title">Your account subscription</h2>
                            <div class="d-flex overflow-hidden subscription-container">
                                <div class="d-flex subscription-details">
                                    <div class="subscription-indicator"></div>
                                    <div class="subscription-info p-4">
                                        <h1 class="fw-bold text-white m-0 subscription-duration">1 Month</h1>
                                        <p class="fw-light text-white subscription-label">subscription</p>
                                    </div>
                                </div>
                                <div class="subscription-price-container py-4 pe-4 text-end">
                                    <strong class="fw-semiBold subscription-price">$34.95/m</strong>
                                    <p class="fw-light subscription-active-status">Active until Dec 21, 2022</p>
                                </div>
                            </div>
                            <a href="#" class="fw-bold mt-4 d-block change-plan-link">Change Plan or Cancel Subscription</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
