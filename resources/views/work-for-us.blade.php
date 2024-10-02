@extends('layout.main')
@section('content')
<section class="d-flex align-items-center" style="height: 194px;background-image: url({{ asset('user/assets/ellipse/work-for-us-banner-bg.png') }});background-size: cover;background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <h1 class="text-white fw-bold m-0" style="font-size: 48px;">Work for Us</h1>
                    <p class="text-white" style="font-weight: 300;font-size: 18px;">See our latest vacancies below.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <x-user.view-job-card logoImgPath="user/assets/img/rms-logo.jpg" iconOne="user/assets/vectors/work-for-us-vector.png" textOne="Remote working" subHeading="RateMyStation.com" title="Freelance Writer" />
            <x-user.view-job-card logoImgPath="user/assets/img/rms-logo.jpg" iconOne="user/assets/vectors/work-for-us-vector.png" textOne="Remote working" subHeading="RateMyStation.com" title="Social Media Manager" />
            <x-user.view-job-card logoImgPath="user/assets/img/rms-logo.jpg" iconOne="user/assets/vectors/work-for-us-vector.png" textOne="Remote working" subHeading="RateMyStation.com" title="Freelance Writer" />
            <x-user.view-job-card logoImgPath="user/assets/img/rms-logo.jpg" iconOne="user/assets/vectors/work-for-us-vector.png" textOne="Remote working" subHeading="RateMyStation.com" title="Social Media Manager" />
        </div>
    </div>
</section>
@endsection
