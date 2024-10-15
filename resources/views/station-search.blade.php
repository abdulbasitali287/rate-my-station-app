@extends('layout.main')
@section('content')
<section>
    <div class="container px-0" style="border-bottom: 1px solid #BDBDBD;">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h1 class="fw-bold" style="font-size: 36px;">Here are your result for “Loream Ipsum”</h1>
                    <p style="font-size: 18px;">There are 12 Stations with <strong>“Loream Ipsum”</strong> on <strong>TV News Category</strong></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div>
                    <x-user.station-search-card />
                    <x-user.station-search-card />
                    <x-user.station-search-card />
                    <x-user.station-search-card />
                </div>
                {{-- load more button --}}
                <div class="load-more-btn-parent">
                    <button class="load-more-btn">Load More</button>
                </div>
            </div>
            <div class="col-md-4">
                <div style="display: flex;
    flex-direction: column;
    justify-content: center;width: 383px;height: 474px;padding-inline: 24px;margin-top: 23px;text-align: center;color: #ffff;background-image: url({{ asset('user/assets/ellipse/station-search-card-bg.png') }});background-size: cover;background-repeat: no-repeat;">
                    <h2 style="font-weight: bold;font-size: 36px;">Can't find Station you're looking for?</h2>
                    <p style="font-size: 20px;font-weight: 200;padding-block: 14px;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. </p>
                    <div>
                        <a href="{{ url('station-form') }}" class="submit-station-btn" >Submit a Station</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Rate My Station section --}}
<x-user.product-carousel />

{{-- looking for work --}}
<x-user.searching-queries title="Looking for Work?" paragraph="Subscribe to our Job Center for instant access to thousands of job opportunities in media." />

@endsection
