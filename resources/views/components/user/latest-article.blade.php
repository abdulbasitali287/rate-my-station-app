@props(['path' => 'user/assets/img/1.png', 'alt' => '', 'title' => '20 Things Journalism Students Should Know Before Working in Local News Stations'])

<div class="latest-article">
    <div class="latest-article-image">
        <img src="{{ asset($path) }}" alt="{{ $alt }}" class="w-100 h-100">
    </div>
    <div class="latest-article-title">
        <p>{{ $title }}</p>
    </div>
</div>
