@props(['path' => 'user/assets/img/notification-card-abc-7-logo.png','alt' => '','date' => 'May 24, 2022','bgColor' => '#CEE3F5','heading' => 'You received an interview request from','boldText' => 'KABC','paragraph' => 'In magna ipsum suscipit quam aenean lectus id aenean. Ac adipiscing tellus, laoreet sem in mattis euismod aliquam. Pharetra vitae dui tortor ut porta pretium.'])
<div class="d-flex align-items-center p-3 mb-3 notification-list-card" style="background-color: {{ $bgColor }};">
    <div class="pe-4">
        <img src="{{ asset($path) }}" alt="{{ $alt }}">
    </div>
    <div>
        <strong class="fw-semibold d-inline-block pb-1">{{ $heading }} <span class="fw-bold">{{ $boldText }}</span></strong>
        <p class="fw-light paragraph">{{ $paragraph }}</p>
        <p class="fw-light pt-1">
            <span class="d-inline-block pe-1">
                <img src="{{ asset('user/assets/vectors/timer-blue-vector.png') }}" alt="">
            </span>
            <span class="d-inline-block pt-1">{{ $date }}</span>
        </p>
    </div>
</div>
