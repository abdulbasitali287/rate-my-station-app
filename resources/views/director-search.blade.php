@extends('layout.main')
@section('content')
<section>
    <div class="container px-0" style="border-bottom: 1px solid #BDBDBD;">
        <div class="row">
            <div class="col-12">
                <div class="py-4">
                    <h1 style="font-size: 36px;font-weight: bold;">Here are your result for “Loream Ipsum”</h1>
                    <p style="font-size: 18px;">There are 12 Stations with <strong>“Loream Ipsum”</strong> on <strong>TV News Category</strong></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <x-user.director-search-card path="user/assets/img/director-search-1.png" title="Brooklyn Simmons"/>
                <x-user.director-search-card path="user/assets/img/director-search-2.png" title="Devon Lane"/>
                <x-user.director-search-card path="user/assets/img/director-search-3.png" title="Darlene Robertson"/>
                <x-user.director-search-card path="user/assets/img/director-search-4.png" title="Esther Howard"/>
                <x-user.director-search-card path="user/assets/img/director-search-5.png" title="Jacob Jones"/>
                <x-user.director-search-card path="user/assets/img/director-search-6.png" title="Albert Flores"/>
                {{-- load more button --}}
                <div class="load-more-btn-parent">
                    <button class="load-more-btn">Load More</button>
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
