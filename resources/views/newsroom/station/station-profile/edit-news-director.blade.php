@extends('layout.main')
@section('content')
{{-- Hero Section --}}
<section id="hero-section" style="height: 294px;background-image: url({{ asset('user/assets/ellipse/job-opening.png') }});"></section>

<section style="margin-top: -164px;">
    <div class="container">
        <div class="row" style="padding-top: 40px;padding-inline: 40px;background-color: #FFFFFF;border-radius: 12px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
            <div class="col-md-9 pb-4" style="border-bottom: 1px solid #E0E0E0;">
                <div class="d-flex">
                    <div class="text-center pe-4">
                        <div style="width: 137px;height: 106px; margin-bottom: 16px;">
                            <img class="w-100 h-100" src="{{ asset('user/assets/img/Logo.jpg') }}" style="object-fit: cover;" alt="">
                        </div>
                        <a href="#" class="text-white fw-semiBold px-3 py-1" style="background-color: #89C400;border-radius: 10px;font-size: 14px;">Subscibed</a>
                    </div>
                    <div style="padding-inline-start: 14px;">
                        <h2 class="position-relative" style="font-size: 30px;font-weight: bold;">KABC <span class="position-absolute" style="top: -4px;right: 92px;"><img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span></h2>
                        <p class="pb-2" style="color: #828282;">TV News Station</p>
                        <p class="fw-light" style="color: #194D79;font-size: 18px;"><span style="display: inline-block;padding-inline-end: 4px;"><img src="{{ asset('user/assets/vectors/map-vector.png') }}" alt=""></span>Los Angeles, CA | DMA: 2</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pb-4" style="border-bottom: 1px solid #E0E0E0;">
                <div style="width: 100%;height: 100%;display: flex;flex-direction: column;justify-content: center;">
                    <a href="#" class="text-white fw-bold border-0" style="margin-block: 6px;background-color: var(--darkCerulean);padding-block: 11px;border-radius: 12px;letter-spacing: 0.5px;transition: all 0.5s;text-align: center;">
                        <span class="d-inline-block me-2">
                        <img src="{{ asset('user/assets/vectors/settings-vector.png') }}" alt=""></span>
                        Account settings
                    </a>
                    <a href="#" class="fw-bold bg-transparent" style="margin-block: 6px;border: 2px solid #194D79;color: #194D79;padding-block: 11px;border-radius: 12px;letter-spacing: 0.5px;transition: all 0.5s;text-align: center;">
                        <span class="d-inline-block me-2" style="background-color: #194D79;width: 22px;height: 22px;border-radius: 100%;">
                        <img src="{{ asset('user/assets/vectors/plus-vector.png') }}" style="margin-top: -5px;margin-left: 1px;" alt=""></span>
                        Add profile section
                    </a>
                </div>
            </div>
            <div class="col-12">
                <ul class="d-flex">
                    <li class="px-4 pt-4 pb-3 fw-bold" style="border-bottom: 4px solid #89C400;">
                        <a href="{{ url('station-profile') }}" class="text-black">Profile</a>
                    </li>
                    <li class="p-4">
                        <a href="{{ url('station-rating') }}" class="text-black">My ratings</a>
                    </li>
                    <li class="p-4">
                        <a href="{{ url('station-statistic') }}" class="text-black">Statistic</a>
                    </li>
                    <li class="p-4">
                        <a href="{{ url('station-posted-jobs') }}" class="text-black">Posted job</a>
                    </li>
                    <li class="p-4">
                        <a href="{{ url('station-contact-info') }}" class="text-black">Contact Info</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 pt-5">
                <div class="row align-items-center pb-2">
                    <div class="col-md-8">
                        <h2 class="fw-bold" style="font-size: 28px;">Edit News Director</h2>
                    </div>
                    <div class="col-md-4 text-end">
                        <a href="#" class="fw-thin" style="color: #194D79;">Back</a>
                    </div>
                </div>
                <div class="bg-white mt-4" style="padding: 20px;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                    <div class="d-flex justify-content-between p-4 mb-4">
                        <div class="d-flex align-items-center">
                            <div style="width: 73px;height: 73px;">
                                <img src="{{ asset('user/assets/img/director-search-1.png') }}" class="w-100 h-100" alt="">
                            </div>
                            <div style="padding-inline-start: 14px;">
                                <p style="font-size: 16px;">
                                    <span class="fw-semiBold" style="color: #777777;"> News Director </span>
                                    <span class="fw-semiBold" style="padding-block: 2px;background-color: #89C400;border-radius: 6px;color: #ffff;padding-inline: 10px;padding-top: 0px;font-size: 10px;">current</span>
                                </p>
                                <strong style="font-size: 26px;">Brooklyn Simmons</strong>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#addDirectorModal">
                                <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between p-4 mb-4">
                        <div class="d-flex align-items-center">
                            <div style="width: 73px;height: 73px;">
                                <img src="{{ asset('user/assets/img/station-rating-1.png') }}" class="w-100 h-100" alt="">
                            </div>
                            <div style="padding-inline-start: 14px;">
                                <p style="font-size: 16px;">
                                    <span class="fw-semiBold" style="color: #777777;"> News Director </span>
                                    <span class="fw-semiBold" style="padding-block: 2px;background-color: #F2F2F2;border-radius: 6px;color: #828282;padding-inline: 10px;padding-top: 0px;font-size: 10px;">Past</span>
                                </p>
                                <strong style="font-size: 26px;">Ronald Richards</strong>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#addDirectorModal">
                                <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between p-4 mb-4">
                        <div class="d-flex align-items-center">
                            <div style="width: 73px;height: 73px;">
                                <img src="{{ asset('user/assets/img/review-1-img.png') }}" class="w-100 h-100" alt="">
                            </div>
                            <div style="padding-inline-start: 14px;">
                                <p style="font-size: 16px;">
                                    <span class="fw-semiBold" style="color: #777777;"> News Director </span>
                                    <span class="fw-semiBold" style="padding-block: 2px;background-color: #F2F2F2;border-radius: 6px;color: #828282;padding-inline: 10px;padding-top: 0px;font-size: 10px;">Past</span>
                                </p>
                                <strong style="font-size: 26px;">Sally Ramirez</strong>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#addDirectorModal">
                                <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 pt-5" id="latest-articles">
                <div class="row align-items-center pb-4">
                    <div class="col-md-8">
                        <h2 class="fw-bold" style="font-size: 28px;">Recommended</h2>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="#" class="see-all-link">See all</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        {{-- latest posts --}}
                        {{-- loop div --}}
                        <x-user.latest-article />
                        <x-user.latest-article path="user/assets/img/2.png" title="Working chrismast and new year’s eve doesn’t have to be depressing" />
                        <x-user.latest-article path="user/assets/img/3.png" title="Is Jumping from Journalism to PR and communications a good idea?" />
                        {{-- newsletter subscribe --}}
                        <div class="newsletter-subscribe">
                            <h6>Subscribe to our Newsletter, so you'll never miss one</h6>
                            <input type="text" placeholder="Your email" class="form-control">
                            <button class="subscribe-btn">Subscribe</button>
                        </div>
                        {{-- rms --}}
                        <div>
                            <div id="lr-main-heading">
                                <h2>Follow RMS</h2>
                            </div>
                            <div class="rms-follow">
                                <div class="rms-social-item">
                                    <img src="{{ asset('user/assets/vectors/facebook-vector.png') }}" class="social-icon" alt="">
                                    <span>@RateMyStation</span>
                                </div>
                                <div class="rms-social-item">
                                    <img src="{{ asset('user/assets/vectors/instagram-vector.png') }}" class="social-icon" alt="">
                                    <span>@RateMyStation</span>
                                </div>
                                <div class="rms-social-item">
                                    <img src="{{ asset('user/assets/vectors/twitter-vector.png') }}" class="social-icon" alt="">
                                    <span>@RateMyStation</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    {{-- add director modal --}}
    <div class="modal fade" id="addDirectorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content p-3" style="border-radius: 16px;">
            <div class="modal-header py-0 pt-2" style="border-bottom: none;">
              <h1 class="modal-title fw-bold" style="font-size: 24px;">News Director</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center pb-3">
                            <div class="d-flex justify-content-center align-items-end me-3" style="width: 89px;height: 89px;background-color: #F2F2F2;border-radius: 10px;">
                                <img src="{{ asset('user/assets/img/account-profile.png') }}" style="width: 70px;height: 71px;" alt="">
                            </div>
                            <p style="color: #194D79;">Upload Image in <span class="fw-bold"> jpg or png format</span></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="#" class="fw-light">Director’s name</label>
                            <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                        </div>
                    </div>
                    <div class="col-md-6" style="align-content: center;">
                        <div class="form-check pt-3">
                            <input class="form-check-input me-3" type="checkbox" value="" style="width: 22px;height: 22px;border-color: #BDBDBD;">
                            <label class="form-check-label d-inline-block mt-1 fw-light" for="flexCheckDefault">
                                Current news director
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="#" class="fw-light">Director’s  email</label>
                            <input type="email" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                        </div>
                    </div>
                </div>
              </form>
            </div>
            <div class="modal-footer d-flex justify-content-start" style="border-top: none;">
                <button type="button" class="profile-modal-submit-btn">Save</button>
                <button type="button" class="profile-modal-cancel-btn close-modal">Cancel</button>
            </div>
          </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $(document).on('click', '.close-modal', function () {
            // Wrap the closest modal in jQuery object
            let modal = $(this).closest('.modal');
            console.log(modal);  // For debugging purposes
            modal.modal('hide'); // Close the modal
        });
    });
</script>

@endpush
