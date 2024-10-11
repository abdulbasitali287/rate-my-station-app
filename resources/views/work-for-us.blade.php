@extends('layout.main')
@section('content')
    <main id="work-for-us-main">

        <section class="work-for-us-banner d-flex align-items-center" style="height: 194px;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <h1 class="banner-title">Work for Us</h1>
                            <p class="banner-subtitle">See our latest vacancies below.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <x-user.view-job-card logoImgPath="/user/assets/img/rms-logo.jpg" iconOne="/user/assets/vectors/work-for-us-vector.png" textOne="Remote working" subHeading="RateMyStation.com" title="Freelance Writer" />
                    <x-user.view-job-card logoImgPath="/user/assets/img/rms-logo.jpg" iconOne="/user/assets/vectors/work-for-us-vector.png" textOne="Remote working" subHeading="RateMyStation.com" title="Social Media Manager" />
                    <x-user.view-job-card logoImgPath="/user/assets/img/rms-logo.jpg" iconOne="/user/assets/vectors/work-for-us-vector.png" textOne="Remote working" subHeading="RateMyStation.com" title="Freelance Writer" />
                    <x-user.view-job-card logoImgPath="/user/assets/img/rms-logo.jpg" iconOne="/user/assets/vectors/work-for-us-vector.png" textOne="Remote working" subHeading="RateMyStation.com" title="Social Media Manager" />
                </div>
            </div>
        </section>

    </main>

@endsection


