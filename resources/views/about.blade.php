@extends('layout.main')

@section('content')
    <main id="about-main">
        <section class="banner-section"></section>

        {{-- About Section --}}
        <section id="about-us-section">
            <div class="container">
                {{-- About Us --}}
                <div class="row">
                    <div class="col-12">
                        <div class="about-card">
                            <h6>ABOUT US</h6>
                            <p>We offer a safe place for people in TV news to anonymously review a news station they work for, or have
                                worked for in the past, without fear of retribution.</p>
                            <p>Plus, you can subscribe to our job center for access to job applications, hand-picked from the most
                                highly rated stations.</p>
                            <p>Rate My Station also offers a newsletter written by two women who still work in the business, and a Vlog
                                produced by the website’s creator, Valeria.</p>
                        </div>
                    </div>
                </div>

                {{-- From the Creator --}}
                <div class="row">
                    <div class="col-12">
                        <div class="about-creator-card">
                            <h6>FROM THE CREATOR</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>I want to start off by saying if you’ve contributed to my website by submitting a review,
                                        subscribing to the job center, purchasing apparel, or sharing an article THANK YOU!!!</p>
                                    <div class="position-relative creator-image-container overflow-visible">
                                        <img src="{{ asset('user/assets/img/Rectangle 93-2.png') }}" alt="Creator Image">
                                        <div class="position-absolute bottom-0 creator-details">
                                            <span class="d-inline-block creator-highlight"></span>
                                            <div class="creator-info">
                                                <h6 class="creator-name">Valeria Sistrunk</h6>
                                                <p class="creator-title">RateMyStation.com Creator</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p class="fw-normal">I decided to create Rate My Station in November 2017, almost a year
                                        after I left the newsroom forever.</p>
                                    <p class="fw-normal">For years I worked as a Reporter/MMJ/Anchor, and spent time at two
                                        news stations that just weren’t right for me. In fact, my last News Director created such a
                                        toxic work environment I eventually lost my passion for local news. So I left.</p>
                                    <p class="fw-normal">A few months later, I decided to do something to help prevent others
                                        from being trapped in a toxic newsroom.</p>
                                    <p class="fw-normal">If you’ve ever worked for a bad news station, then you know how
                                        difficult and risky it can be to try and warn new hires about what’s really going on in the
                                        newsroom.</p>
                                    <p class="fw-normal">So I created this website to shine a light on the newsrooms you
                                        should avoid, while highlighting the news stations you’ll want to apply to.</p>
                                    <p class="fw-normal">Today, Rate My Station has helped thousands find the best news
                                        station to work for, and with your support, we can help thousands more in the future!</p>
                                </div>
                            </div>

                            {{-- Creator Messages --}}
                            <div class="row pt-4">
                                <div class="col-1">
                                    <img src="{{ asset('user/assets/img/quotation.png') }}" class="img-fluid" alt="Quotation">
                                </div>
                                <div class="col-11">
                                    <div class="creator-message-block">
                                        <h6>CREATOR MESSAGES</h6>
                                        <p>Last, but not least, we sell newsroom-specific apparel you won’t find anywhere else!</p>
                                        <p>So take a look around, and help the website grow by submitting a review, sharing an article
                                            from our newsletter, or making a purchase from our store!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

        {{-- looking for work --}}
        <x-user.searching-queries />
    </main>
@endsection
