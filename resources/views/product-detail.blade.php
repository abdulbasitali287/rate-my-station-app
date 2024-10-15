@extends('layout.main')
@section('content')
    <main id="product-detail-main">

        {{-- breadcrumbs --}}
        <section class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="menus">
                            <span class="shop">Shop</span>
                            <span class="next-arrow"><img src="{{ asset('user/assets/vectors/right-arrow-breadcrumb.png') }}"
                                    alt=""></span>
                            <span class="category">Sweatshirt</span>
                            <span class="next-arrow"><img
                                    src="{{ asset('user/assets/vectors/right-arrow-breadcrumb.png') }}"
                                    alt=""></span>
                            <span class="product-name">America Needs Local News Sweatshirt</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- product-detail-section --}}
        <section class="product-deatil-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row main-row">
                            <div class="col-md-6 px-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="main-img">
                                            <img src="{{ asset('user/assets/img/product-detail-main.jpg') }}"
                                                class="w-100 h-100" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-evenly pt-3 small-img-row">
                                    <div class="col-3 px-0 small-img-parent">
                                        <img src="{{ asset('user/assets/img/image 4.jpg') }}" class="w-100 h-100"
                                            alt="">
                                    </div>
                                    <div class="col-3 px-0 small-img-parent">
                                        <img src="{{ asset('user/assets/img/image 5.jpg') }}" class="w-100 h-100"
                                            alt="">
                                    </div>
                                    <div class="col-3 px-0 small-img-parent">
                                        <img src="{{ asset('user/assets/img/image 6.jpg') }}" class="w-100 h-100"
                                            alt="">
                                    </div>
                                    <div class="col-3 px-0 small-img-parent">
                                        <img src="{{ asset('user/assets/img/image 6.jpg') }}" class="w-100 h-100"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 px-0 product-desc-col">
                                <div class="pb-2 product-specifications">
                                    <h1>America Needs Local News Sweatshirt</h1>
                                    <div class="d-flex justify-content-between py-4 color-size-section">
                                        <div class="d-flex align-items-center">
                                            <label class="color-label" for="#">Color</label>
                                            <select name="color">
                                                <option value="black">black</option>
                                                <option value="red">red</option>
                                                <option value="yellow">yellow</option>
                                                <option value="blue">blue</option>
                                            </select>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <label class="size-label" for="#">Size</label>
                                            <select name="size">
                                                <option value="XL">XL</option>
                                                <option value="LG">LG</option>
                                                <option value="MD">MD</option>
                                                <option value="SM">SM</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between py-4 qty-cart-section">
                                        <div class="d-flex align-items-center">
                                            <label for="#">Qty</label>
                                            <div class="d-flex qty-div">
                                                <button class="decrement">-</button>
                                                <input type="number" name="qty" value="3" disabled>
                                                <button class="increment">+</button>
                                            </div>
                                        </div>
                                        <div>
                                            <strong>$33.50</strong>
                                            <a href="{{ url('cart') }}" class="add-to-cart-btn">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-description">
                                    <strong class="d-inline-block">Description</strong>
                                    <p>Our #AMNewser Sweatshirt is perfect to wear in the freezing newsroom. Don’t wait,
                                        this style is a limited edition, so place your order today!</p>
                                    <p>A sturdy and warm sweatshirt bound to keep you warm in the colder months. A
                                        pre-shrunk, classic fit sweater that’s made with air-jet spun yarn for a soft feel
                                        and reduced pilling.</p>
                                    <p>Above all, it feels soft and lightweight, with the right amount of stretch. It’s
                                        comfortable and flattering for both men and women, and you can choose from a large
                                        variety of different colors.</p>
                                    <a href="#" class="d-inline-block see-more-btn">See more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-5 reviews-rating-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="review-box">
                            <div class="review-header">
                                <h2 class="review-title">Review <span class="review-count">(5)</span></h2>
                            </div>
                            <div class="all-reviews">
                                <div class="py-4">
                                    <div class="d-flex">
                                        <div class="review-image">
                                            <img src="{{ asset('user/assets/img/review-1-img.png') }}" class="image-fit"
                                                alt="">
                                        </div>
                                        <div class="review-content">
                                            <div class="d-flex justify-content-between">
                                                <strong class="reviewer-name">Jane Cooper</strong>
                                                <div class="d-flex flex-grow-1 justify-content-end">
                                                    <p class="rating-text">5.0</p>
                                                    <div class="d-flex align-items-center rating-stars">
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star last-star"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-3">
                                                <p>Pretium tortor venenatis, mattis lobortis. Sollicitudin non sed eu,
                                                    augue. Morbi purus ipsum ipsum ante felis. Nisi, vulputate risus nisl,
                                                    nulla amet morbi habitant vel. Condimentum egestas vestibulum habitant.
                                                </p>
                                                <p class="review-time">2 hours ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pb-4">
                                    <div class="d-flex">
                                        <div class="review-image">
                                            <img src="{{ asset('user/assets/img/review-2-img.png') }}" class="image-fit"
                                                alt="">
                                        </div>
                                        <div class="review-content">
                                            <div class="d-flex justify-content-between">
                                                <strong class="reviewer-name">Ralph Edwards</strong>
                                                <div class="d-flex flex-grow-1 justify-content-end">
                                                    <p class="rating-text">4.0</p>
                                                    <div class="d-flex align-items-center rating-stars">
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star empty-star"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-3">
                                                <p>Pretium tortor venenatis, mattis lobortis. Sollicitudin non sed eu,
                                                    augue. Morbi purus ipsum ipsum ante felis. Nisi, vulputate risus nisl,
                                                    nulla amet morbi habitant vel. Condimentum egestas vestibulum habitant.
                                                </p>
                                                <p class="review-time">2 hours ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-3 text-center">
                                <a href="#" class="more-reviews">3+ more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ratings-box">
                            <h2 class="ratings-title">Buyer ratings</h2>
                            <div class="text-center">
                                <strong class="average-rating">4.8</strong><sub class="total-rating">/5.0</sub>
                                <p class="satisfaction-text">98% satisfied buyers</p>
                                <p class="total-reviews">500 ratings</p>
                            </div>
                            <div class="pt-5">
                                <div class="d-flex align-items-center pb-2">
                                    <div class="px-4"><strong>5</strong></div>
                                    <div class="progress-bar-container">
                                        <div class="progress-bar" style="width: calc(100% - 15%);"></div>
                                    </div>
                                    <div class="px-4">35</div>
                                </div>
                                <div class="d-flex align-items-center pb-2">
                                    <div class="px-4"><strong>4</strong></div>
                                    <div class="progress-bar-container">
                                        <div class="progress-bar" style="width: calc(100% - 35%);"></div>
                                    </div>
                                    <div class="px-4">5</div>
                                </div>
                                <div class="d-flex align-items-center pb-2">
                                    <div class="px-4"><strong>3</strong></div>
                                    <div class="progress-bar-container">
                                        <div class="progress-bar" style="width: calc(100% - 45%);"></div>
                                    </div>
                                    <div class="px-4">2</div>
                                </div>
                                <div class="d-flex align-items-center pb-2">
                                    <div class="px-4"><strong>2</strong></div>
                                    <div class="progress-bar-container">
                                        <div class="progress-bar" style="width: calc(100% - 65%);"></div>
                                    </div>
                                    <div class="px-4">2</div>
                                </div>
                                <div class="d-flex align-items-center pb-2">
                                    <div class="px-4"><strong>1</strong></div>
                                    <div class="progress-bar-container">
                                        <div class="progress-bar" style="width: calc(100% - 85%);"></div>
                                    </div>
                                    <div class="px-4">1</div>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <a href="#" class="rate-product-btn d-block w-100" data-bs-toggle="modal"
                                    data-bs-target="#addRatingModal">Rate this product</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- new arrivals --}}
        <section class="product-cards-section">
            <div class="container">
                <div class="d-flex justify-content-between pt-4">
                    <h2 class="fw-bold">Similar products</h2>
                    <a href="#" style="font-weight: normal;color: #194D79;">See all</a>
                </div>
            </div>
            <div class="container product-cards-container">
                <div class="row">

                    <x-user.product-card visibility="visible" image="user/assets/img/image-1.png"
                        title="Don’t Make Me Use My News Voice Face Mask" amount="18.00" />

                    <x-user.product-card visibility="visible" image="user/assets/img/image-2.png"
                        title="America Needs Local News Sweatshirt" amount="25.00 – $33.50" />

                    <x-user.product-card image="user/assets/img/image-3.png" title="Anonymous Source Onesie"
                        amount="18.00" />

                    <x-user.product-card image="user/assets/img/image-4.png" title="You Are A PKG Framed Poster"
                        amount="26.00 – $105.00" />

                </div>
                <div class="d-flex justify-content-between position-absolute"
                    style="top: 50%;right: -26px;left: -26px;opacity: 0.8">
                    <button type="button"
                        style="background-color: #FFFFFF;padding-inline: 15px;padding-block: 10px;border-radius: 100%;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);border: none;">
                        <img src="{{ asset('user/assets/vectors/left-arrow-gray.png') }}" alt="">
                    </button>
                    <button type="button" style="background-color: #FFFFFF;padding-inline: 15px;padding-block: 10px;border-radius: 100%;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);border: none;">
                        <img src="{{ asset('user/assets/vectors/right-arrow-gray.png') }}" alt="">
                    </button>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <!-- Modal -->
<div class="modal fade add-review" id="addRatingModal" tabindex="-1" aria-labelledby="addRatingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="container p-4">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between modal-header-content py-3">
                        <strong class="modal-title">Rate this product</strong>
                        <div class="close-icon">
                            <img src="{{ asset('user/assets/vectors/popup-cross-icon.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-6">
                        <div class="d-flex product-info pe-4">
                            <div class="product-image">
                                <img src="{{ asset('user/assets/img/image 4.jpg') }}" alt="">
                            </div>
                            <strong class="product-name">America Needs Local News Sweatshirt - Blue</strong>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="quality-rating">
                            <p class="rating-text">How is the overall product quality?</p>
                            <div class="d-flex align-items-center rating-stars pt-2">
                                <span class="rating-star"></span>
                                <span class="rating-star"></span>
                                <span class="rating-star"></span>
                                <span class="rating-star"></span>
                                <span class="rating-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group py-3">
                            <label for="#" class="review-label">Leave a review for this product</label>
                            <textarea name="" id="" cols="30" rows="6" class="form-control review-textarea" placeholder="Type here..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 py-3">
                        <button type="button" class="modal-submit-btn">Submit</button>
                        <button type="button" class="modal-close-btn">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </main>
@endsection

@push('scripts')
    <script>
        // When the custom button is clicked
        $('.modal-close-btn, .close-icon').click(function() {
            // Hide the modal
            $('#addRatingModal').modal('hide');
        });
    </script>
@endpush
