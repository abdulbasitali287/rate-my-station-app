@props(['description' => 'Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam?'])
<div class="col-12">
    <a href="{{ url('faqs-detail') }}" class="d-flex justify-content-between">
        <span class="d-inline-block">{{ $description }}</span>
        <span class="d-inline-block"><img src="{{ asset('user/assets/vectors/faqs-right-arrow.png') }}" alt=""></span>
    </a>
</div>
