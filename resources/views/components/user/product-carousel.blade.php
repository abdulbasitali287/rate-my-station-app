{{-- product cards section --}}
<section class="product-cards-section">
    <div class="container product-cards-container">
        <div class="row justify-content-center py-4">
            <div class="text-center">
                <h2 class="fw-bold product-section-title">RateMyStation's Shop</h2>
            </div>
        </div>

        <div class="row">

            <x-user.product-card visibility="visible" image="user/assets/img/image-1.png"
                title="Don’t Make Me Use My News Voice Face Mask" amount="18.00" />

            <x-user.product-card visibility="visible" image="user/assets/img/image-2.png"
                title="America Needs Local News Sweatshirt" amount="25.00 – $33.50" />

            <x-user.product-card image="user/assets/img/image-3.png" title="Anonymous Source Onesie" amount="18.00" />

            <x-user.product-card image="user/assets/img/image-4.png" title="You Are A PKG Framed Poster"
                amount="26.00 – $105.00" />

        </div>
        <div class="d-flex justify-content-between position-absolute slider-btns">
            <button type="button" class="bg-white border-0" style=""><img src="{{ asset('user/assets/vectors/left-arrow-gray.png') }}" alt=""></button>
            <button type="button" class="bg-white border-0" style=""><img src="{{ asset('user/assets/vectors/right-arrow-gray.png') }}" alt=""></button>
        </div>
    </div>
</section>
