@extends('layout.main')
@section('content')

<section id="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <span style="display: inline-block;font-size: 16px;font-weight: 300;color: #828282;padding-inline-end: 20px;padding-block: 25px;">Shop</span>
                    <span><img src="{{ asset('user/assets/vectors/right-arrow-breadcrumb.png') }}" alt=""></span>
                    <span style="display: inline-block;font-size: 16px;font-weight: 300;color: #828282;padding-inline: 20px;padding-block: 25px;">Sweatshirt</span>
                    <span><img src="{{ asset('user/assets/vectors/right-arrow-breadcrumb.png') }}" alt=""></span>
                    <span style="display: inline-block;font-size: 16px;font-weight: 300;color: #828282;padding-inline: 20px;padding-block: 25px;">America Needs Local News Sweatshirt</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="div">
            <div class="row" style="padding: 40px;background-color: #FFFFFF;border-radius: 12px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                <div class="col-md-6 px-0">
                    <div id="main-img" style="width: 560px;height: 556px;">
                        <img src="{{ asset('user/assets/img/product-detail-main.jpg') }}" style="width: 100%;height: 100%;object-fit: cover;" alt="">
                    </div>
                    <div class="row justify-content-evenly pt-3">
                        <div class="col-3 px-0" style="width: 124px;height: 124px;"><img src="{{ asset('user/assets/img/image 4.jpg') }}" alt="" style="width: 100%;height: 100%;object-fit: cover;"></div>
                        <div class="col-3 px-0" style="width: 124px;height: 124px;"><img src="{{ asset('user/assets/img/image 5.jpg') }}" alt="" style="width: 100%;height: 100%;object-fit: cover;"></div>
                        <div class="col-3 px-0" style="width: 124px;height: 124px;"><img src="{{ asset('user/assets/img/image 6.jpg') }}" alt="" style="width: 100%;height: 100%;object-fit: cover;"></div>
                        <div class="col-3 px-0" style="width: 124px;height: 124px;"><img src="{{ asset('user/assets/img/image 6.jpg') }}" alt="" style="width: 100%;height: 100%;object-fit: cover;"></div>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="pb-2" style="border-bottom: 1px solid #E0E0E0;">
                        <h1 style="font-size: 36px;font-weight: bold;">America Needs Local News Sweatshirt</h1>
                        <div class="d-flex justify-content-between py-4">
                            <div class="d-flex align-items-center">
                                <label for="#" style="padding-inline-end: 10px;font-weight: 600;">Color</label>
                                <select name="color" style="background-color: #F2F2F2;border-radius: 8px;padding-inline-start: 10px;padding-inline-end: 50px;padding-block: 8px;">
                                    <option value="black">black</option>
                                    <option value="red">red</option>
                                    <option value="yellow">yellow</option>
                                    <option value="blue">blue</option>
                                </select>
                            </div>
                            <div class="d-flex align-items-center">
                                <label for="#" style="padding-inline-end: 10px;font-weight: 600;">Size</label>
                                <select name="size" style="background-color: #F2F2F2;border-radius: 8px;padding-inline-start: 10px;padding-inline-end: 50px;padding-block: 8px;">
                                    <option value="XL">XL</option>
                                    <option value="LG">LG</option>
                                    <option value="MD">MD</option>
                                    <option value="SM">SM</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between py-4">
                            <div class="d-flex align-items-center">
                                <label for="#" style="padding-inline-end: 22px;font-weight: 600;">Qty</label>
                                <div class="d-flex" style="background-color: #F2F2F2;border-radius: 8px;padding-inline: 8px;">
                                    <button style="padding-inline: 5px;padding-block: 8px;border: none;">-</button>
                                    <input type="number" name="qty" value="3" disabled style="border: none;width: 80px;font-weight: bold;text-align: center;">
                                    <button style="padding-inline: 5px;padding-block: 8px;border: none;">+</button>
                                </div>
                            </div>
                            <div>
                                <strong style="font-size: 24px;padding-inline-end: 24px;">$33.50</strong>
                                <a href="#" class="subscribe-btn" style="margin-block: 6px;padding-inline: 20px;background-color: transparent;border: 2px solid #194D79;color: #194D79;">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <strong class="d-inline-block" style="font-size: 20px;color: #194D79;padding-block: 12px;">Description</strong>
                        <p style="padding-block: 15px;">Our #AMNewser Sweatshirt is perfect to wear in the freezing newsroom. Don’t wait, this style is a limited edition, so place your order today!</p>
                        <p style="padding-block: 15px;">A sturdy and warm sweatshirt bound to keep you warm in the colder months. A pre-shrunk, classic fit sweater that’s made with air-jet spun yarn for a soft feel and reduced pilling.</p>
                        <p style="padding-block: 15px;">Above all, it feels soft and lightweight, with the right amount of stretch. It’s comfortable and flattering for both men and women, and you can choose from a large variety of different colors.</p>
                        <a href="#" class="d-inline-block" style="color: #89C400;font-weight: 600;padding-block: 12px;">See more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div style="background-color: #FFFFFF;padding: 20px;border-radius: 10px;">
                    <div style="border-bottom: 1px solid #E0E0E0;">
                        <h2 style="font-size: 24px;">Review <span style="color: #828282;">(5)</span></h2>
                        <div class="py-4">
                            <div class="d-flex">
                                <div style="width: 104px;height: 48px;padding-inline-end: 10px;">
                                    <img src="{{ asset('user/assets/img/review-1-img.png') }}" style="width: 100%;height: 100%;object-fit: cover;" alt="">
                                </div>
                                <div style="background-color: #F2F2F2;padding: 20px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;border-top-right-radius: 10px;">
                                    <div class="d-flex justify-content-between">
                                        <strong style="font-size: 16px;">Jane Cooper</strong>
                                        <div class="d-flex flex-grow-1 justify-content-end">
                                            <p class="pe-2" style="font-weight: 600;">5.0</p>
                                            <div class="d-flex align-items-center">
                                                <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #89C400;"></span>
                                                <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #89C400;"></span>
                                                <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #89C400;"></span>
                                                <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #89C400;"></span>
                                                <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #89C400;"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-3">
                                        <p>Pretium tortor venenatis, mattis lobortis. Sollicitudin non sed eu, augue. Morbi purus ipsum ipsum ante felis. Nisi, vulputate risus nisl, nulla amet morbi habitant vel. Condimentum egestas vestibulum habitant.</p>
                                        <p style="color: #828282;padding-block: 10px;font-size: 14px;">2 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-4">
                            <div class="d-flex">
                                <div style="width: 104px;height: 48px;padding-inline-end: 10px;">
                                    <img src="{{ asset('user/assets/img/review-2-img.png') }}" style="width: 100%;height: 100%;object-fit: cover;" alt="">
                                </div>
                                <div style="background-color: #F2F2F2;padding: 20px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;border-top-right-radius: 10px;">
                                    <div class="d-flex justify-content-between">
                                        <strong style="font-size: 16px;">Ralph Edwards</strong>
                                        <div class="d-flex flex-grow-1 justify-content-end">
                                            <p class="pe-2" style="font-weight: 600;">4.0</p>
                                            <div class="d-flex align-items-center">
                                                <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #89C400;"></span>
                                                <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #89C400;"></span>
                                                <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #89C400;"></span>
                                                <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #89C400;"></span>
                                                <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #BDBDBD;"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-3">
                                        <p>Pretium tortor venenatis, mattis lobortis. Sollicitudin non sed eu, augue. Morbi purus ipsum ipsum ante felis. Nisi, vulputate risus nisl, nulla amet morbi habitant vel. Condimentum egestas vestibulum habitant.</p>
                                        <p style="color: #828282;padding-block: 10px;font-size: 14px;">2 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-3 text-center">
                        <a href="#" style="color: #194D79;font-size: 18px;font-weight: 600">3+ more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div style="background-color: #FFFFFF;padding: 20px;border-radius: 10px;">
                    <h2 style="font-weight: bold;font-size: 24px;">Buyer ratings</h2>
                    <div class="text-center">
                        <strong style="font-size: 96px;">4.8</strong><sub style="font-size: 24px;color: #828282;">/5.0</sub>
                        <p style="font-size: 20px;color: #194D79;">98% satisfied buyers</p>
                        <p style="color: #828282;font-size: 16px;">500 ratings</p>
                    </div>
                    <div class="pt-5">
                        <div class="d-flex align-items-center pb-2">
                            <div class="px-4"><strong>5</strong></div>
                            <div class="flex-grow-1" style="height: 9px;background-color: #F2F2F2;border-radius: 20px;"><div style="width: calc(100% - 15%);height: 100%;background-color: #89C400;border-radius: 20px;"></div></div>
                            <div class="px-4">35</div>
                        </div>
                        <div class="d-flex align-items-center pb-2">
                            <div class="px-4"><strong>4</strong></div>
                            <div class="flex-grow-1" style="height: 9px;background-color: #F2F2F2;border-radius: 20px;"><div style="width: calc(100% - 35%);height: 100%;background-color: #89C400;border-radius: 20px;"></div></div>
                            <div class="px-4">5</div>
                        </div>
                        <div class="d-flex align-items-center pb-2">
                            <div class="px-4"><strong>3</strong></div>
                            <div class="flex-grow-1" style="height: 9px;background-color: #F2F2F2;border-radius: 20px;"><div style="width: calc(100% - 45%);height: 100%;background-color: #89C400;border-radius: 20px;"></div></div>
                            <div class="px-4">2</div>
                        </div>
                        <div class="d-flex align-items-center pb-2">
                            <div class="px-4"><strong>2</strong></div>
                            <div class="flex-grow-1" style="height: 9px;background-color: #F2F2F2;border-radius: 20px;"><div style="width: calc(100% - 65%);height: 100%;background-color: #89C400;border-radius: 20px;"></div></div>
                            <div class="px-4">2</div>
                        </div>
                        <div class="d-flex align-items-center pb-2">
                            <div class="px-4"><strong>1</strong></div>
                            <div class="flex-grow-1" style="height: 9px;background-color: #F2F2F2;border-radius: 20px;"><div style="width: calc(100% - 85%);height: 100%;background-color: #89C400;border-radius: 20px;"></div></div>
                            <div class="px-4">1</div>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a href="#" class="subscribe-btn" style="margin-block: 6px;padding-inline: 20px;background-color: transparent;border: 2px solid #194D79;color: #194D79;" data-bs-toggle="modal" data-bs-target="#exampleModal">Rate this product</a>
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

            <x-user.product-card image="user/assets/img/image-3.png" title="Anonymous Source Onesie" amount="18.00" />

            <x-user.product-card image="user/assets/img/image-4.png" title="You Are A PKG Framed Poster"
                amount="26.00 – $105.00" />

        </div>
        <div class="d-flex justify-content-between position-absolute" style="top: 50%;right: -26px;left: -26px;opacity: 0.8">
            <button type="button" style="background-color: #FFFFFF;padding-inline: 15px;padding-block: 10px;border-radius: 100%;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);border: none;"><img src="{{ asset('user/assets/vectors/left-arrow-gray.png') }}" alt=""></button>
            <button type="button" style="background-color: #FFFFFF;padding-inline: 15px;padding-block: 10px;border-radius: 100%;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);border: none;"><img src="{{ asset('user/assets/vectors/right-arrow-gray.png') }}" alt=""></button>
        </div>
    </div>
</section>

@endsection

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="container p-4">
            <div class="row">
                <div class="col-12 d-flex justify-content-between py-3">
                    <strong class="fw-bold" style="font-size: 24px;">Rate this product</strong>
                    <div><img src="{{ asset('user/assets/vectors/popup-cross-icon.png') }}" alt=""></div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-6">
                    <div class="d-flex align-items-center" style="padding-inline-end: 30px;">
                        <div>
                            <img src="{{ asset('user/assets/img/image 4.jpg') }}" alt="">
                        </div>
                        <strong class="fw-bold" style="font-size: 20px;">America Needs Local News Sweatshirt - Blue</strong>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pt-4">
                        <p style="font-size: 14px;">How is the overall product quality?</p>
                        <div class="d-flex align-items-center pt-2">
                            <span style="border-radius: 20px;width: 34px;height: 12px;;margin-inline-end: 8px;display: inline-block;background-color: #F2F2F2;"></span>
                            <span style="border-radius: 20px;width: 34px;height: 12px;;margin-inline-end: 8px;display: inline-block;background-color: #F2F2F2;"></span>
                            <span style="border-radius: 20px;width: 34px;height: 12px;;margin-inline-end: 8px;display: inline-block;background-color: #F2F2F2;"></span>
                            <span style="border-radius: 20px;width: 34px;height: 12px;;margin-inline-end: 8px;display: inline-block;background-color: #F2F2F2;"></span>
                            <span style="border-radius: 20px;width: 34px;height: 12px;;margin-inline-end: 8px;display: inline-block;background-color: #F2F2F2;"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group py-3">
                        <label for="#" class="fw-light pb-2">Leave a review for this product</label>
                        <textarea name="" id="" cols="30" rows="6" class="form-control" style="background-color: #F2F2F2;border: none;padding: 10px;" placeholder="Type here..."></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 py-3">
                    <x-user.button type="submit" buttonText="Submit" />
                    <x-user.button type="button" buttonText="Cancel" class="bg-white" color="#194D79" />
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
