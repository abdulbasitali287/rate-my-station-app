<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-center">
                <h2 class="fw-bold pt-4" style="font-size: 36px;">RateMyStation's Shop</h2>
            </div>
        </div>
        <div id="shop-container" class="position-relative">
            <div class="row">

                <x-user.product-card visibility="visible" image="user/assets/img/image-1.png" title="Don’t Make Me Use My News Voice Face Mask" amount="18.00" />

                <x-user.product-card visibility="visible" image="user/assets/img/image-2.png" title="America Needs Local News Sweatshirt" amount="25.00 – $33.50" />

                <x-user.product-card image="user/assets/img/image-3.png" title="Anonymous Source Onesie" amount="18.00" />

                <x-user.product-card image="user/assets/img/image-4.png" title="You Are A PKG Framed Poster" amount="26.00 – $105.00" />

            </div>
            <div class="d-flex justify-content-between position-absolute" style="top: 0;right: 0;left: 0;transform: translate()">
                <button type="button" style="background-color: #FFFFFF;padding-inline: 15px;padding-block: 7px;border-radius: 100%;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);border: none;transform: translate(-20px, 235px);"><img src="{{ asset('user/assets/vectors/left-arrow-gray.png') }}" alt=""></button>
                <button type="button" style="background-color: #FFFFFF;padding-inline: 15px;padding-block: 7px;border-radius: 100%;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);border: none;transform: translate(20px, 235px);"><img src="{{ asset('user/assets/vectors/right-arrow-gray.png') }}" alt=""></button>
            </div>
        </div>
    </div>
</section>
