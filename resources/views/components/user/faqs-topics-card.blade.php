@props(['title' => '','description' => 'Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam?'])
<div class="col-md-6 ps-0">
    <div class="my-3 question-card">
        <a href="{{ url('faqs-detail') }}" class="d-flex flex-column justify-content-between mb-4">
            <h5 class="d-block fw-bold">{{ $title }}</h5>
            <div class="d-flex justify-content-between w-100">
                <span class="d-inline-block">{{ $description }}</span>
                <span class="d-inline-block"><img src="{{ asset('user/assets/vectors/faqs-right-arrow.png') }}" alt=""></span>
            </div>
        </a>
    </div>
</div>
