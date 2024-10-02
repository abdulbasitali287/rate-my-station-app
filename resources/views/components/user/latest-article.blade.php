@props(['path' => 'user/assets/img/1.png','alt' => '','title' => '20 Things Jurnalism Students Should Know Before Working in Local News Station'])

<div class="latest-article">
    <div>
        <img src="{{ asset($path) }}" alt="{{ $alt }}" class="w-100 h-100">
    </div>
    <div>
        <p style="font-weight: 800;">
            {{ $title }}
        </p>
    </div>
</div>
