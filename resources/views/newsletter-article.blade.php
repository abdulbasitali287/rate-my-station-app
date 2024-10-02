@extends('layout.main')
@section('content')
<section class="py-4">
    {{-- latest ratings & newsletter --}}
    <div class="container px-0 pb-4" style="border-bottom: 1px solid #BDBDBD;">
        <div class="row">
            {{-- latest ratings --}}
            <div class="col col-md-8">
                <section id="latest-ratings">
                    <div>
                        {{-- loop div --}}
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
                            <div class="bg-white" style="padding: 25px;">
                                <div>
                                    <h6 style="font-weight: bold;font-size: 24px;">So you decided you want…no, you NEED…to be healthier.</h6>
                                    <p style="font-size: 16px;font-weight: 300;padding-bottom: 15px;">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. </p>
                                    <p style="font-size: 16px;font-weight: 300;padding-bottom: 15px;">Erat augue enim turpis risus urna, ut egestas vivamus proin. Velit leo scelerisque pulvinar vestibulum in nunc a tortor mollis. Fusce pretium est ipsum elementum parturient. Venenatis, ac nulla non varius dolor. Ornare consectetur mauris, adipiscing tristique a leo. </p>
                                    <p style="font-size: 16px;font-weight: 300;padding-bottom: 15px;">Habitant pharetra tellus habitasse vestibulum nibh quisque. Sed vel condimentum enim leo tortor mi magna tincidunt. Egestas bibendum id eget quisque semper ultricies. Gravida viverra massa faucibus vestibulum condimentum.</p>
                                    <p style="font-size: 16px;font-weight: 300;padding-bottom: 15px;">Pretium tortor venenatis, mattis lobortis. Sollicitudin non sed eu, augue. Morbi purus ipsum ipsum ante felis. Nisi, vulputate risus nisl, nulla amet morbi habitant vel. Condimentum egestas vestibulum habitant vitae. Faucibus bibendum lacinia volutpat nulla placerat semper elementum gravida. </p>
                                    <p style="font-size: 16px;font-weight: 300;padding-bottom: 15px;">Mi vulputate arcu, at tincidunt enim sit eu platea leo. Risus vitae in turpis elementum, viverra ultricies. Commodo sed eget at massa, integer. Porta id id nisl faucibus neque, purus. Fermentum enim, sed ut ultrices amet turpis pharetra faucibus blandit. Aenean proin at tortor tincidunt. Aenean sed ornare sit arcu mattis amet, eget. Id sed amet cras urna et malesuada.</p>
                                </div>
                                <div class="d-flex justify-content-center py-4">
                                    <img src="{{ asset('user/assets/svg/horizontal-three-dots.svg') }}" alt="">
                                </div>
                                <div class="d-flex justify-content-between pt-4 pb-5" style="border-bottom: 1px solid #E0E0E0;">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <img src="{{ asset('user/assets/vectors/newsletter-article-thumb.png') }}" alt="">
                                        </div>
                                        <div class="pe-4">
                                            <img src="{{ asset('user/assets/svg/newsletter-article-chat.svg') }}" alt="">
                                        </div>
                                        <div class="pe-4">
                                            <img src="{{ asset('user/assets/svg/newsletter-article-share.svg') }}" alt="">
                                        </div>
                                        <div class="pe-4">
                                            <img src="{{ asset('user/assets/vectors/newsletter-article-v-flag.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-end">
                                        <img src="{{ asset('user/assets/vectors/newsletter-flag.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="bg-white" style="border-bottom: 1px solid #E0E0E0;padding: 25px;">
                                <h2 style="font-size: 18px;font-weight: bold;">2 Comments</h2>
                                {{-- comment-01 --}}
                                <div class="py-4">
                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <div style="width: 94px;height: 48px;margin-inline-end: 10px;">
                                                <img src="{{ asset('user/assets/img/comment-1.png') }}" style="width: 100%;height: 100%;" alt="">
                                            </div>
                                            <div>
                                                <div style="background-color: #F2F2F2;padding: 20px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;border-top-right-radius: 10px;">
                                                    <div class="d-flex justify-content-between">
                                                        <strong style="font-size: 16px;">Cameron Williamson</strong>
                                                    </div>
                                                    <div class="py-3">
                                                        <p>Pretium tortor venenatis, mattis lobortis. Sollicitudin non sed eu, augue. Morbi purus ipsum ipsum ante felis. Nisi, vulputate risus nisl, nulla amet morbi habitant vel. Condimentum egestas vestibulum habitant.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between py-2" style="padding: 20px;">
                                                    <div class="d-flex">
                                                        <a href="#" style="font-size: 14px;color: #000000;padding-inline-end: 10px;">Like</a>
                                                        <a href="#" style="font-size: 14px;color: #000000;padding-inline-end: 10px;">Reply</a>
                                                        <a href="#" style="font-size: 14px;color: #000000;padding-inline-end: 10px;">Permalink</a>
                                                    </div>
                                                    <div class="flex-grow-1 text-end">
                                                        <p style="color: #828282;font-size: 14px;">2 hours ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                {{-- comment-02 --}}
                                <div class="pb-4">
                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <div style="width: 94px;height: 48px;margin-inline-end: 10px;">
                                                <img src="{{ asset('user/assets/img/comment-2.png') }}" style="width: 100%;height: 100%;" alt="">
                                            </div>
                                            <div>
                                                <div style="background-color: #F2F2F2;padding: 20px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;border-top-right-radius: 10px;">
                                                    <div class="d-flex justify-content-between">
                                                        <strong style="font-size: 16px;">Jenny Wilson</strong>
                                                    </div>
                                                    <div class="py-3">
                                                        <p>Pretium tortor venenatis, mattis lobortis. Sollicitudin non sed eu, augue. Morbi purus ipsum ipsum ante felis. Nisi, vulputate risus nisl, nulla amet morbi habitant vel. Condimentum egestas vestibulum habitant.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between py-2" style="padding: 20px;">
                                                    <div class="d-flex">
                                                        <a href="#" style="font-size: 14px;color: #000000;padding-inline-end: 10px;">Like</a>
                                                        <a href="#" style="font-size: 14px;color: #000000;padding-inline-end: 10px;">Reply</a>
                                                        <a href="#" style="font-size: 14px;color: #000000;padding-inline-end: 10px;">Permalink</a>
                                                    </div>
                                                    <div class="flex-grow-1 text-end">
                                                        <p style="color: #828282;font-size: 14px;">2 hours ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                {{-- send comment field --}}
                                <div class="pb-5" style="border-bottom: 1px solid #E0E0E0;">
                                    <div class="d-flex">
                                        <div style="width: 48px;height: 48px;margin-inline-end: 10px;">
                                            <img src="{{ asset('user/assets/img/comment-3.png') }}" style="width: 100%;height: 100%;" alt="">
                                        </div>
                                        {{-- <div class="flex-grow-1"> --}}
                                            <div class="d-flex flex-grow-1 position-relative" style="border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;border-top-right-radius: 10px;">
                                                <input class="ps-4" type="text" placeholder="Write comment..." style="width: 100%;height: 100%;border-radius: 10px;border: none;background-color: #F2F2F2;">
                                                <img src="{{ asset('user/assets/vectors/send-message.png') }}" style="width: 20px;height: 20px;position: absolute;right: 20px;bottom: 12px;" alt="">
                                            </div>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                                {{-- soul witness --}}
                                <div class="d-flex justify-content-between py-4">
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <img src="{{ asset('user/assets/img/soul-witness.png') }}" alt="">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <strong style="font-size: 20px;">Soul Witness</strong>
                                            <p style="color: #828282;">150 articles</p>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="subscribe-btn" style="width: max-content;margin-block: 6px;font-weight: bold;background-color: transparent;border: 2px solid #194D79;color: #194D79;padding-inline: 60px;padding-block: 8px;">Subscribe</button>
                                    </div>
                                </div>
                                {{-- more from soul witness --}}
                                <div style="padding: 25px;background-color: #F2F2F2;border-radius: 10px;">
                                    <div>
                                        <strong style="font-size: 18px;">More from Soul Witness</strong>
                                        <div class="d-flex flex-column">
                                            <div class="d-flex py-4">
                                                <div>
                                                    <img src="{{ asset('user/assets/img/soul-witness-1.png') }}" alt="">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center ps-4">
                                                    <h6 style="font-size: 24px;font-weight: bold;">So you decided you want…no, you NEED…to be healthier.</h6>
                                                    <p class="pt-2" style="color: #828282;display: flex;align-items: center;">
                                                        <span style="display: inline-block;padding-inline-end: 3px;">
                                                            <img src="{{ asset('user/assets/vectors/timer.png') }}" width="15px" alt="">
                                                        </span>
                                                        <span style="font-size: 12px;display: inline-block;padding-top: 5px;padding-inline-start: 3px;">May 24, 2022</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex pb-4">
                                                <div>
                                                    <img src="{{ asset('user/assets/img/soul-witness-2.png') }}" alt="">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center ps-4">
                                                    <h6 style="font-size: 24px;font-weight: bold;">So you decided you want…no, you NEED…to be healthier.</h6>
                                                    <p class="pt-2" style="color: #828282;display: flex;align-items: center;">
                                                        <span style="display: inline-block;padding-inline-end: 3px;">
                                                            <img src="{{ asset('user/assets/vectors/timer.png') }}" width="15px" alt="">
                                                        </span>
                                                        <span style="font-size: 12px;display: inline-block;padding-top: 5px;padding-inline-start: 3px;">May 24, 2022</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex pb-4">
                                                <div>
                                                    <img src="{{ asset('user/assets/img/soul-witness-3.png') }}" alt="">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center ps-4">
                                                    <h6 style="font-size: 24px;font-weight: bold;">So you decided you want…no, you NEED…to be healthier.</h6>
                                                    <p class="pt-2" style="color: #828282;display: flex;align-items: center;">
                                                        <span style="display: inline-block;padding-inline-end: 3px;">
                                                            <img src="{{ asset('user/assets/vectors/timer.png') }}" width="15px" alt="">
                                                        </span>
                                                        <span style="font-size: 12px;display: inline-block;padding-top: 5px;padding-inline-start: 3px;">May 24, 2022</span>
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col col-md-4">
                <section id="newsletter">
                    {{-- latest posts --}}
                    <div style="width: 384px;">
                        <div class="position-relative" style="border-radius: 10px;overflow: hidden;display: flex;align-items: center;padding-block: 3px;padding-inline-end: 10px;border: 1px solid #828282;">
                            <input type="text" placeholder="Search articles or writer" style="padding-inline-end: 252px;padding-inline-start: 10px;padding-block: 4px;border: none;background-color: transparent;">
                            <span style="position: absolute;top: 4px;right: 10px;"><img src="{{ asset('user/assets/vectors/search-30.png') }}" style="width: 19px;;display: inline-block;background-color: transparent;" alt=""></span>
                        </div>
                        {{-- loop div --}}
                        <div style="width: 100%;background: #ffff;border-radius: 13px;margin-top: 10px;margin-bottom: 25px;">
                            <div style="width: 100%;height: 211px;">
                                <img src="{{ asset('user/assets/img/1.png') }}" alt="" style="width: 100%;height: 100%;object-fit: conver;">
                            </div>
                            <div style="padding-inline: 20px;padding-top: 20px;padding-bottom: 40px;">
                                <p style="font-weight: 800;font-size: 16px;">
                                    20 Things Jurnalism Students Should Know Before Working in Local News Station
                                </p>
                            </div>
                        </div>
                        <div style="width: 100%;background: #ffff;border-radius: 13px;margin-top: 10px;margin-bottom: 25px;">
                            <div style="width: 100%;height: 211px;">
                                <img src="{{ asset('user/assets/img/2.png') }}" alt="" style="width: 100%;height: 100%;object-fit: conver;">
                            </div>
                            <div style="padding-inline: 20px;padding-top: 20px;padding-bottom: 40px;">
                                <p style="font-weight: 800;font-size: 16px;">
                                    20 Things Jurnalism Students Should Know Before Working in Local News Station
                                </p>
                            </div>
                        </div>
                        <div style="width: 100%;background: #ffff;border-radius: 13px;margin-top: 10px;margin-bottom: 25px;">
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
                        <div style="width: 100%;background: #ffff;border-radius: 13px;margin-top: 10px;margin-bottom: 25px;padding: 20px;">
                            <h6 style="font-weight: 800;line-height: 23px;">Subscribe to our Newsletter, so you'll never miss one</h6>
                            <input type="text" placeholder="Your email" class="form-control" style="background-color: #F2F2F2;font-size: 14px;padding-block: 12px;margin-block: 15px;">
                            <button class="subscribe-btn">Subscribe</button>
                        </div>
                    </div>
                    {{-- rms --}}
                    <div>
                        <div id="lr-main-heading" style="padding-block: 0px;">
                            <h2>Follow RMS</h2>
                        </div>
                        <div style="width: 100%;background: #ffff;border-radius: 13px;margin-top: 10px;margin-bottom: 25px;padding: 20px;">
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

{{-- Rate My Station section --}}
<x-user.product-carousel />

@endsection
