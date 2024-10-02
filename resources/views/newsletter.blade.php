@extends('layout.main')

@section('content')

    {{-- Hero Section --}}
    <section id="hero-section" class="hero-section"></section>

    <section style="margin-top: -412px;">
        <div class="container">
            <div class="row overflow-hidden" style="border-radius: 18px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                <div class="col-md-6 p-0">
                    <div class="">
                        <img src="{{ asset('user/assets/img/newsletter-banner.png') }}" style="width: 100%;" alt="">
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-white">
                    <div style="padding-inline: 80px;padding-block: 40px;">
                        <h1 class="fw-bold">Can Starting In A Top 50 Market Really Ruin Your Journalism Career?</h1>
                        <div class="d-flex justify-content-between py-4">
                            <p style="color: #828282;"><span style="display: inline-block;padding-inline-end: 6px;"><img src="{{ asset('user/assets/vectors/timer-vector.png') }}" alt=""></span><span style="font-size: 12px;">Updated 8 hours ago</span></p>
                            <p><span>Written by </span><span style="color: #194D79;font-weight: 500;">Soul Witness</span></p>
                        </div>
                        <p>
                            Feugiat sagittis, turpis et a fermentum blandit amet in phasellus. Nibh nunc ultrices ac at at sit purus pellentesque a. Urna, eget elit at risus tempus, fames amet. Nulla cursus diam vel amet lacus, sem id. Cursus auctor pulvinar dignissim mauris non ultrices. Sed.
                        </p>
                        <div style="padding-block: 10px;">
                            <span class="d-inline-block p-1 me-1" style="background-color: #194D79;border-radius: 100%;"></span>
                            <span class="d-inline-block p-1 me-1" style="background-color: #E0E0E0;border-radius: 100%;"></span>
                            <span class="d-inline-block p-1 me-1" style="background-color: #E0E0E0;border-radius: 100%;"></span>
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

        {{-- latest articles & recommended --}}
        <div class="container" style="border-bottom: 1px solid #BDBDBD;padding-bottom: 30px;">
            <div class="row">
                {{-- latest ratings --}}
                <div class="col col-md-8">
                    <div id="lr-main-heading">
                        <h2>Latest Articles</h2>
                    </div>
                    {{-- large image card --}}
                    <div>
                        <div id="large-img-article" class="overflow-hidden mb-3" style="border-radius: 18px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                            <div>
                                <div>
                                    <img src="{{ asset('user/assets/img/time-watch.png') }}" width="100%" alt="">
                                </div>
                                <div class="bg-white" style="padding: 25px;">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p style="color: #828282;display: flex;align-items: center;">
                                                <span style="display: inline-block;padding-inline-end: 3px;">
                                                    <img src="{{ asset('user/assets/vectors/timer.png') }}" width="15px" alt="">
                                                </span>
                                                <span style="font-size: 12px;display: inline-block;padding-top: 5px;padding-inline-start: 3px;">May 24, 2022</span>
                                            </p>
                                        </div>
                                        <div>
                                            <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                            </button>
                                            <div class="dropdown-menu">

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 style="font-weight: 800;line-height: 41px;">10 Ways To Stay Healthy While Working A Crazy News Schedule</h3>
                                    </div>
                                    <div class="d-flex justify-content-between pt-3">
                                        <p><span>Written by </span><span style="color: #194D79;font-weight: 500">Soul Witness</span></p>
                                        <div>
                                            <div>
                                                <ul class="d-flex">
                                                    <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-thumb.png') }}" style="margin-top: -6px;" alt=""></span><span>35</span></li>
                                                    <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-message.png') }}" style="margin-top: -6px;" alt=""></span><span>25</span></li>
                                                    <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-share.png') }}" style="margin-top: -6px;" alt=""></span><span>15</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="small-img-articles">
                            <div class="d-flex overflow-hidden mb-3" style="border-radius: 18px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                                <div style="width: 360px;">
                                    <img src="{{ asset('user/assets/img/taking-picture.png') }}" class="w-100 h-100" style="object-fit: cover;" alt="">
                                </div>
                                <div class="bg-white" style="padding: 25px;">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p style="color: #828282;display: flex;align-items: center;">
                                                <span style="display: inline-block;padding-inline-end: 3px;">
                                                    <img src="{{ asset('user/assets/vectors/timer.png') }}" width="15px" alt="">
                                                </span>
                                                <span style="font-size: 12px;display: inline-block;padding-top: 5px;padding-inline-start: 3px;">May 24, 2022</span>
                                            </p>
                                        </div>
                                        <div>
                                            <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                            </button>
                                            <div class="dropdown-menu">

                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding-inline-end: 22px;">
                                        <h3 style="font-weight: bold;line-height: 41px;">10 Ways To Stay Healthy While Working A Crazy News Schedule</h3>
                                    </div>
                                    <div class="d-flex justify-content-between pt-3">
                                        <p><span>Written by </span><span style="color: #194D79;font-weight: 500">Soul Witness</span></p>
                                        <div>
                                            <ul class="d-flex">
                                                <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-thumb.png') }}" style="margin-top: -6px;" alt=""></span><span>35</span></li>
                                                <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-message.png') }}" style="margin-top: -6px;" alt=""></span><span>25</span></li>
                                                <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-share.png') }}" style="margin-top: -6px;" alt=""></span><span>15</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex overflow-hidden mb-3" style="border-radius: 18px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                                <div style="width: 360px;">
                                    <img src="{{ asset('user/assets/img/news-printer.png') }}" class="w-100 h-100" style="object-fit: cover;" alt="">
                                </div>
                                <div class="bg-white" style="padding: 25px;">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p style="color: #828282;display: flex;align-items: center;">
                                                <span style="display: inline-block;padding-inline-end: 3px;">
                                                    <img src="{{ asset('user/assets/vectors/timer.png') }}" width="15px" alt="">
                                                </span>
                                                <span style="font-size: 12px;display: inline-block;padding-top: 5px;padding-inline-start: 3px;">May 24, 2022</span>
                                            </p>
                                        </div>
                                        <div>
                                            <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                            </button>
                                            <div class="dropdown-menu">

                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding-inline-end: 22px;">
                                        <h3 style="font-weight: bold;line-height: 41px;">10 Ways To Stay Healthy While Working A Crazy News Schedule</h3>
                                    </div>
                                    <div class="d-flex justify-content-between pt-3">
                                        <p><span>Written by </span><span style="color: #194D79;font-weight: 500">Soul Witness</span></p>
                                        <div>
                                            <ul class="d-flex">
                                                <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-thumb.png') }}" style="margin-top: -6px;" alt=""></span><span>35</span></li>
                                                <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-message.png') }}" style="margin-top: -6px;" alt=""></span><span>25</span></li>
                                                <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-share.png') }}" style="margin-top: -6px;" alt=""></span><span>15</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex overflow-hidden mb-3" style="border-radius: 18px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                                <div style="width: 360px;">
                                    <img src="{{ asset('user/assets/img/preparing-camera.png') }}" class="w-100 h-100" style="object-fit: cover;" alt="">
                                </div>
                                <div class="bg-white" style="padding: 25px;">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p style="color: #828282;display: flex;align-items: center;">
                                                <span style="display: inline-block;padding-inline-end: 3px;">
                                                    <img src="{{ asset('user/assets/vectors/timer.png') }}" width="15px" alt="">
                                                </span>
                                                <span style="font-size: 12px;display: inline-block;padding-top: 5px;padding-inline-start: 3px;">May 24, 2022</span>
                                            </p>
                                        </div>
                                        <div>
                                            <button class="btn btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="{{ asset('user/assets/img/three-dots-2.png') }}" alt="">
                                            </button>
                                            <div class="dropdown-menu">

                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding-inline-end: 22px;">
                                        <h3 style="font-weight: bold;line-height: 41px;">10 Ways To Stay Healthy While Working A Crazy News Schedule</h3>
                                    </div>
                                    <div class="d-flex justify-content-between pt-3">
                                        <p><span>Written by </span><span style="color: #194D79;font-weight: 500">Soul Witness</span></p>
                                        <div>
                                            <div>
                                                <ul class="d-flex">
                                                    <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-thumb.png') }}" style="margin-top: -6px;" alt=""></span><span>35</span></li>
                                                    <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-message.png') }}" style="margin-top: -6px;" alt=""></span><span>25</span></li>
                                                    <li class="px-2"><span class="d-inline-block" style="margin-inline-end: 10px;width: 18px;"><img class="w-100 h-100" src="{{ asset('user/assets/vectors/figma-share.png') }}" style="margin-top: -6px;" alt=""></span><span>15</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- pagination --}}
                    <x-user.pagination />

                </div>
                <div class="col col-md-4">
                    <section id="newsletter">
                        {{-- heading --}}
                        <div id="lr-main-heading" class="d-flex justify-content-between align-items-center">
                            <h2>Recommend</h2>
                            <a href="#" style="font-weight: normal;color: #194D79;">See all</a>
                        </div>
                        {{-- latest posts --}}
                        <div>
                            {{-- loop div --}}
                            <div style="width: 384px;background: #ffff;border-radius: 13px;margin-top: 10px;margin-bottom: 25px;">
                                <div style="width: 100%;height: 211px;">
                                    <img src="{{ asset('user/assets/img/1.png') }}" alt="" style="width: 100%;height: 100%;object-fit: conver;">
                                </div>
                                <div style="padding-inline: 20px;padding-top: 20px;padding-bottom: 40px;">
                                    <p style="font-weight: 800;font-size: 16px;">
                                        20 Things Jurnalism Students Should Know Before Working in Local News Station
                                    </p>
                                </div>
                            </div>
                            <div style="width: 384px;background: #ffff;border-radius: 13px;margin-top: 10px;margin-bottom: 25px;">
                                <div style="width: 100%;height: 211px;">
                                    <img src="{{ asset('user/assets/img/2.png') }}" alt="" style="width: 100%;height: 100%;object-fit: conver;">
                                </div>
                                <div style="padding-inline: 20px;padding-top: 20px;padding-bottom: 40px;">
                                    <p style="font-weight: 800;font-size: 16px;">
                                        20 Things Jurnalism Students Should Know Before Working in Local News Station
                                    </p>
                                </div>
                            </div>
                            <div style="width: 384px;background: #ffff;border-radius: 13px;margin-top: 10px;margin-bottom: 25px;">
                                <div style="width: 100%;height: 211px;">
                                    <img src="{{ asset('user/assets/img/3.png') }}" alt="" style="width: 100%;height: 100%;object-fit: conver;">
                                </div>
                                <div style="padding-inline: 20px;padding-top: 20px;padding-bottom: 40px;">
                                    <p style="font-weight: 800;font-size: 16px;">
                                        20 Things Jurnalism Students Should Know Before Working in Local News Station
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{-- newsletter subscribe --}}
                        <div>
                            <div style="width: 384px;background: #ffff;border-radius: 13px;margin-top: 10px;margin-bottom: 25px;padding: 20px;">
                                <h6 style="font-weight: 800;line-height: 23px;">Subscribe to our Newsletter, so you'll never miss one</h6>
                                <input type="text" placeholder="Your email" class="form-control" style="background-color: #F2F2F2;font-size: 14px;padding-block: 12px;margin-block: 15px;">
                                <button style="background-color: #194D79;color: #ffff;font-weight: 500;width: 100%;padding-block: 11px;border-radius: 12px;border: none;letter-spacing: 0.5px;">Subscribe</button>
                            </div>
                        </div>
                        {{-- rms --}}
                        <div>
                            <div id="lr-main-heading" style="padding-block: 0px;">
                                <h2>Follow RMS</h2>
                            </div>
                            <div style="width: 384px;background: #ffff;border-radius: 13px;margin-top: 10px;margin-bottom: 25px;padding: 20px;">
                                <div style="padding-block: 5px;">
                                    <span style="display: inline-block;padding-inline-end: 10px;"><img src="{{ asset('user/assets/vectors/facebook-vector.png') }}" style="width: 18px;height: 22px;object-fit: contain;" alt=""></span>
                                    <span style="font-weight: bold;">@RateMyStation</span>
                                </div>
                                <div style="padding-block: 5px;">
                                    <span style="display: inline-block;padding-inline-end: 10px;"><img src="{{ asset('user/assets/vectors/instagram-vector.png') }}" style="width: 18px;height: 22px;object-fit: contain;" alt=""></span>
                                    <span style="font-weight: bold;">@RateMyStation</span>
                                </div>
                                <div style="padding-block: 5px;">
                                    <span style="display: inline-block;padding-inline-end: 10px;"><img src="{{ asset('user/assets/vectors/twitter-vector.png') }}" style="width: 18px;height: 22px;object-fit: contain;" alt=""></span>
                                    <span style="font-weight: bold;">@RateMyStation</span>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>
    </section>

    <section>
        {{-- shop container --}}
        <div id="shop-container" class="container">
            <div class="row justify-content-center">
                <div id="lr-main-heading" class="text-center">
                    <h2>RateMyStation's Shop</h2>
                </div>
            </div>

            <div class="row">

                <x-user.product-card visibility="visible" image="user/assets/img/image-1.png" title="Don’t Make Me Use My News Voice Face Mask" amount="18.00" />

                <x-user.product-card visibility="visible" image="user/assets/img/image-2.png" title="America Needs Local News Sweatshirt" amount="25.00 – $33.50" />

                <x-user.product-card image="user/assets/img/image-3.png" title="Anonymous Source Onesie" amount="18.00" />

                <x-user.product-card image="user/assets/img/image-4.png" title="You Are A PKG Framed Poster" amount="26.00 – $105.00" />

            </div>
        </div>

    </section>

@endsection
