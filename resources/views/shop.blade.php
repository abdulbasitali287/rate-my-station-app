@extends('layout.main')

@section('content')

    {{-- banner Section
    <section class="banner-section" style="height: 500px;background-image: url('/user/assets/ellipse/banner-bg.png');background-size: cover;background-repeat: no-repeat;display: flex;align-items: center;justify-content: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 450px;background-color: #ffff;padding-block: 20px;padding-inline: 20px;border-radius: 10px;">
                        <div style="width: calc(100% - 275px);height: 100%;padding-inline-start: 20px;padding-inline-end: 10px;display: flex;flex-direction: column;justify-content: space-around;">
                            <div>
                                <p style="color: #89C400;">New Arrival</p>
                                <h1 style="font-weight: bold;padding-block: 8px;font-size: 34px;">America Needs Local News Hoodie</h1>
                                <p style="line-height: 25px;padding-block: 6px;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum.</p>
                            </div>
                            <div style="padding-block: 8px;">
                                <button style="background: transparent;border-color: #194D79;padding-block: 6px;padding-inline: 16px;border-radius: 10px;color: #194D79;font-weight: 500;">Discover now</button>
                            </div>
                        </div>
                        <div class="position-absolute top-0" style="width: 275px;height: 100%;right: 0;">
                            <img src="{{ asset('user/assets/img/test.png') }}" class="w-100 h-100 overflow-visible" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="ms-2">
                        <div class="position-relative overflow-hidden" style="height: calc(450px - 230px);background-color: #ffff;padding-block: 20px;padding-inline: 20px;border-radius: 10px;margin-bottom: 10px;">
                            <div style="width: calc(100% - 275px);height: 100%;padding-inline-start: 20px;padding-inline-end: 10px;display: flex;flex-direction: column;justify-content: space-between;">
                                <h1 style="font-weight: bold;padding-block: 8px;font-size: 25px;">FRIENDS Themed Anchor Bucket Hat</h1>
                                <div style="padding-block: 8px;">
                                    <button style="background: transparent;border: none;border-bottom: 1px solid #194D79;padding-block: 2px;color: #194D79;font-weight: 700;">Shop Now</button>
                                </div>
                            </div>
                            <div class="position-absolute top-0" style="height: 100%;right: 0;">
                                <img src="{{ asset('user/assets/img/anchor-hat.png') }}" class="w-100 h-100 overflow-visible" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                        <div class="position-relative overflow-hidden" style="height: calc(450px - 230px);background-color: #ffff;padding-block: 20px;padding-inline: 20px;border-radius: 10px;">
                            <div style="width: calc(100% - 275px);height: 100%;padding-inline-start: 20px;padding-inline-end: 10px;display: flex;flex-direction: column;justify-content: space-between;">
                                <h1 style="font-weight: bold;padding-block: 8px;font-size: 25px;">New Dope Mug Design</h1>
                                <div style="padding-block: 8px;">
                                    <button style="background: transparent;border: none;border-bottom: 1px solid #194D79;padding-block: 2px;color: #194D79;font-weight: 700;">Shop Now</button>
                                </div>
                            </div>
                            <div class="position-absolute top-0" style="height: 100%;right: 0;">
                                <img src="{{ asset('user/assets/img/dope-anchor.png') }}" class="w-100 h-100 overflow-visible" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
{{-- banner Section --}}
<section class="banner-section d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6 px-0">
                <div class="banner-item">
                    <div class="banner-content">
                        <div>
                            <p class="new-arrival">New Arrival</p>
                            <h1 class="banner-title">America Needs Local News Hoodie</h1>
                            <p class="banner-description">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum.</p>
                        </div>
                        <div>
                            <button class="btn discover-btn">Discover now</button>
                        </div>
                    </div>
                    <div class="banner-image">
                        <img src="{{ asset('user/assets/img/test.png') }}" class="img-fluid" alt="America Needs Local News Hoodie">
                    </div>
                </div>
            </div>

            <div class="col-md-6 px-0">
                <div class="ms-2">
                    <div class="banner-item-small mb-2">
                        <div class="banner-content">
                            <h1 class="banner-title-small">FRIENDS Themed Anchor Bucket Hat</h1>
                            <button class="btn shop-now-btn">Shop Now</button>
                        </div>
                        <div class="banner-image">
                            <img src="{{ asset('user/assets/img/anchor-hat.png') }}" class="img-fluid" alt="Anchor Bucket Hat">
                        </div>
                    </div>

                    <div class="banner-item-small">
                        <div class="banner-content">
                            <h1 class="banner-title-small">New Dope Mug Design</h1>
                            <button class="btn shop-now-btn">Shop Now</button>
                        </div>
                        <div class="banner-image">
                            <img src="{{ asset('user/assets/img/dope-anchor.png') }}" class="img-fluid" alt="Dope Mug Design">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section>
        <div class="container">
            <div class="row py-4">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-8">
                            <div class="input-group" style="width: max-content;border-radius: 10px;overflow: hidden;display: flex;align-items: center;padding-block: 3px;padding-inline-end: 10px;border: 1px solid #4F4F4F;">
                                <input type="text" placeholder="Search articles or writer" style="padding-inline-end: 252px;padding-inline-start: 10px;padding-block: 4px;border: none;background-color: transparent;">
                                <span><img src="{{ asset('user/assets/vectors/search-30.png') }}" style="display: inline-block;background-color: transparent;" alt=""></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-end">
                    <div class="d-flex">
                        <div class="d-flex align-items-center pe-3">
                            <p class="pe-2" style="color: #828282;font-weight: 500;font-size: 14px;">Filter</p>
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary dropdown-toggle" style="color: #828282;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Writer</button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                  <div role="separator" class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                              </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="pe-2" style="color: #828282;font-weight: 500;font-size: 14px;">Short</p>
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary dropdown-toggle" style="color: #828282;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Newest</button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                  <div role="separator" class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- best sellers --}}
    <section class="product-cards-section">
        <div class="container">
            <div class="d-flex justify-content-between pt-4">
                <h2 class="fw-bold">Best Sellers</h2>
                <a href="#" class="fw-normal" style="color: #194D79;">See all</a>
            </div>
        </div>
        <div class="container product-cards-container">
            <div class="row">
                <x-user.product-card visibility="visible" image="user/assets/img/image-1.png"
                    title="Don’t Make Me Use My News Voice Face Mask" amount="18.00" />

                <x-user.product-card visibility="visible" image="user/assets/img/image-2.png"
                    title="America Needs Local News Sweatshirt" amount="25.00 – $33.50" />

                <x-user.product-card image="user/assets/img/image-3.png" title="Anonymous Source Onesie" amount="18.00" />

                <x-user.product-card image="user/assets/img/image-4.png" title="You Are A PKG Framed Poster"
                    amount="26.00 – $105.00" />

                <x-user.product-card image="user/assets/img/image-5.png" title="#NewsBae Engraved Heart Necklace"
                    amount="35.00" />

                <x-user.product-card visibility="visible" image="user/assets/img/image-6.png"
                    title="America Needs Local News Bar Chain Bracelet" amount="30.50 – $33.50" />

                <x-user.product-card visibility="visible" image="user/assets/img/image-7.png"
                    title="America Needs Local News Mug" amount="11.00 – $15.50" />

                <x-user.product-card image="user/assets/img/image-8.png" title="Anchor Woman Pom-Pom Beanie" amount="19.50" />

            </div>
        </div>
    </section>

    {{-- new arrivals --}}
    <section class="product-cards-section">
        <div class="container product-cards-container">
            <div class="row py-4">
                <div class="col-6">
                    <h2 class="fw-bold">New Arrivals</h2>
                </div>
                <div class="col-6 text-end">
                    <a href="#" style="font-weight: normal;color: #194D79;">See all</a>
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
            <div class="d-flex justify-content-between position-absolute" style="top: 50%;right: -26px;left: -26px;opacity: 0.8">
                <button type="button" style="background-color: #FFFFFF;padding-inline: 15px;padding-block: 7px;border-radius: 100%;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);border: none;"><img src="{{ asset('user/assets/vectors/left-arrow-gray.png') }}" alt=""></button>
                <button type="button" style="background-color: #FFFFFF;padding-inline: 15px;padding-block: 7px;border-radius: 100%;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);border: none;"><img src="{{ asset('user/assets/vectors/right-arrow-gray.png') }}" alt=""></button>
            </div>
        </div>
    </section>

    {{-- category --}}
    <section class="product-cards-section">
        <div class="container">
            <div class="d-flex pt-4">
                <h2 class="fw-bold">Category:</h2>
                <ul class="d-flex justify-content-around align-items-center flex-grow-1">
                    <li>
                        <a href="#" class="fw-normal" style="color: #828282;">T-shirt</a>
                    </li>
                    <li>
                        <a href="#" class="fw-normal" style="color: #828282;">Hoodie/Sweater</a>
                    </li>
                    <li>
                        <a href="#" class="fw-normal" style="color: #828282;">Hat</a>
                    </li>
                    <li>
                        <a href="#" class="fw-normal" style="color: #828282;">Baby</a>
                    </li>
                    <li>
                        <a href="#" class="fw-normal" style="color: #828282;">Accesories</a>
                    </li>
                    <li>
                        <a href="#" class="fw-normal" style="color: #828282;">Poster</a>
                    </li>
                    <li>
                        <a href="#" class="fw-normal" style="color: #828282;">Sticker</a>
                    </li>
                    <li>
                        <a href="#" class="fw-normal" style="color: #828282;">Bag</a>
                    </li>
                    <li>
                        <a href="#" class="fw-normal" style="color: #828282;">Mug</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container product-cards-container">
            <div class="row">
                <x-user.product-card visibility="visible" image="user/assets/img/image-1.png"
                    title="Don’t Make Me Use My News Voice Face Mask" amount="18.00" />

                <x-user.product-card visibility="visible" image="user/assets/img/image-2.png"
                    title="America Needs Local News Sweatshirt" amount="25.00 – $33.50" />

                <x-user.product-card image="user/assets/img/image-3.png" title="Anonymous Source Onesie" amount="18.00" />

                <x-user.product-card image="user/assets/img/image-4.png" title="You Are A PKG Framed Poster"
                    amount="26.00 – $105.00" />

                <x-user.product-card image="user/assets/img/image-5.png" title="#NewsBae Engraved Heart Necklace"
                    amount="35.00" />

                <x-user.product-card visibility="visible" image="user/assets/img/image-6.png"
                    title="America Needs Local News Bar Chain Bracelet" amount="30.50 – $33.50" />

                <x-user.product-card visibility="visible" image="user/assets/img/image-7.png"
                    title="America Needs Local News Mug" amount="11.00 – $15.50" />

                <x-user.product-card image="user/assets/img/image-8.png" title="Anchor Woman Pom-Pom Beanie" amount="19.50" />

            </div>

            <div class="row pt-5">
                <div class="col text-center">
                    <button class="see-all-products-btn">See all Products</button>
                </div>
            </div>
        </div>
    </section>

@endsection
