@extends('layout.main')
@section('content')
{{-- Hero Section --}}
<section id="hero-section" style="height: 294px;background-image: url({{ asset('user/assets/ellipse/job-opening.png') }});"></section>

<section style="margin-top: -164px;">
    <div class="container">
        <div class="row" style="padding-top: 40px;padding-inline: 40px;background-color: #FFFFFF;border-radius: 12px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
            <div class="col-md-9 pb-4" style="border-bottom: 1px solid #E0E0E0;">
                <div class="d-flex align-items-center">
                    <div class="text-center pe-4 position-relative">
                        <div style="width: 157px;height: 157px; margin-bottom: 16px;">
                            <img class="w-100 h-100" src="{{ asset('user/assets/img/profile-1.png') }}" style="object-fit: cover;" alt="">
                        </div>
                        <a href="#" class="text-white fw-semiBold px-3 py-1 position-absolute" style="background-color: #89C400;border-radius: 10px;font-size: 14px;bottom: 3px;right: 52px;">Subscibed</a>
                    </div>
                    <div style="padding-inline-start: 14px;">
                        <h2 class="position-relative" style="font-size: 30px;font-weight: bold;">Brooklyn Simmons <span><img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span></h2>
                        <p class="pb-2 fw-light" style="font-size: 22px;color: #828282;">TV News Station <span class="fw-bold text-black" style="font-size: 22px;">KABC</span></p>
                        <p class="fw-light" style="color: #194D79;font-size: 18px;">
                            <span style="display: inline-block;padding-inline-end: 4px;margin-inline-end: 2px;">
                                <img src="{{ asset('user/assets/vectors/map-vector.png') }}" alt="">
                            </span>
                            Los Angeles, CA | DMA: 2</p>
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
                        <a href="{{ url('station-user-profile') }}" class="text-black">Profile</a>
                    </li>
                    <li class="p-4">
                        <a href="{{ url('station-user-ratings') }}" class="text-black">My ratings</a>
                    </li>
                    <li class="p-4">
                        <a href="{{ url('station-user-applied-jobs') }}" class="text-black">Applied Jobs</a>
                    </li>
                    <li class="p-4">
                        <a href="{{ url('station-user-contact-info') }}" class="text-black">Contact Info</a>
                    </li>
                    <li class="p-4">
                        <a href="{{ url('station-user-suscribed') }}" class="text-black">Subscribed News</a>
                    </li>
                    <li class="p-4">
                        <a href="{{ url('station-user-saved') }}" class="text-black">Saved</a>
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
                {{-- education --}}
                <div class="row align-items-center pb-3">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="fw-bold" style="font-size: 28px;">Edit Educations</h2>
                            <a href="#" class="fw-light" style="color: #194D79;font-size: 18px;">Back</a>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="bg-white px-5 py-4" style="padding: 20px;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                            <div class="row pb-4">
                                <div class="col-11" style="border-bottom: 1px solid #BDBDBD;">
                                    <div class="d-flex pb-4">
                                        <div class="me-3">
                                            <img src="{{ asset('user/assets/img/education-img.png') }}" style="width: 58px;height: 58px;" alt="">
                                        </div>
                                        <div>
                                            <strong class="fw-semiBold d-block" style="font-size: 18px;">Magister of Loream ipsum</strong>
                                            <strong class="fw-semiBold d-block" style="color: #194D79;">University of Illinois</strong>
                                            <p class="fw-light" style="font-size: 14px;color: #828282;">Oct 2021  -  Apr 2022</p>
                                            <p class="fw-light pt-2">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 pt-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#editEducationModal">
                                            <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" style="width: 24px;height: 24px;" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-11">
                                    <div class="d-flex pb-4">
                                        <div class="me-3">
                                            <img src="{{ asset('user/assets/img/education-img.png') }}" style="width: 58px;height: 58px;" alt="">
                                        </div>
                                        <div>
                                            <strong class="fw-semiBold d-block" style="font-size: 18px;">Bachelor of Loream ipsum</strong>
                                            <strong class="fw-semiBold d-block" style="color: #194D79;">University of Illinois</strong>
                                            <p class="fw-light" style="font-size: 14px;color: #828282;">Oct 2021  -  Apr 2022</p>
                                            <p class="fw-light pt-2">Pellentesque vel tristique ultrices habitasse feugiat nulla tempor quam. Et risus commodo natoque pulvinar eu, interdum. Viverra tortor hac sollicitudin dictum sit. Condimentum eget et commodo sapien porta felis amet pellentesque. Erat augue enim turpis risus urna.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 pt-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#editEducationModal">
                                            <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" style="width: 24px;height: 24px;" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-md-4 pt-5" id="latest-articles">
                <div class="row">
                    <div class="col-12">
                        <div class="row align-items-center pb-2 px-3 mb-3">
                            <div class="col-12 d-flex justify-content-between align-items-center">
                                <h2 class="fw-bold" style="font-size: 28px;">Job Openings</h2>
                                <a href="#" class="see-all-link">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <div class="bg-white px-4 py-4 mb-4" style="width: 384px;border-radius: 10px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="width: 46px;height: 45px;"><img src="{{ asset('user/assets/img/7-abc.png') }}" class="w-100 h-100" alt=""></div>
                                <div class="d-flex flex-column py-3 flex-grow-1 ps-3">
                                    <h6 class="m-0 fw-semiBold" style="font-size: 18px;">Assistant News Director</h6>
                                    <p class="fw-light" style="color: #194D79;font-size: 14px;">KABC</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around my-3" style="background-color: #F2F2F2;border-radius: 10px;padding-block: 10px;">
                                <div class="">
                                    <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" style="width: 13px;height: 14px;" alt=""></span>
                                    <span style="color: #194D79;font-size: 14px;">Los Angeles, CA</span>
                                </div>
                                <div class="">
                                    <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" style="width: 16px;height: 16px;" alt=""></span>
                                    <span style="color: #194D79;font-size: 14px;">$100,000  -  $130,000</span>
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3">
                                <div>
                                    <button class="fw-light" style="font-size: 12px;background-color: #9BDB08;border: none;color: #ffff;padding-top: 6px;padding-bottom: 8px;padding-inline: 14px;border-radius: 8px;">
                                        <span style="display: inline-block;padding-inline-end: 4px;">
                                            <img src="{{ asset('user/assets/vectors/tick-vector.png') }}" style="width: 11px;height: 11px;" alt=""></span>
                                            <span style="display: inline-block;padding-top: 1px;">Actively Hiring</span></button>
                                </div>
                                <div>
                                    <p style="color: #828282;"><span style="display: inline-block;padding-inline-end: 6px;"><img src="{{ asset('user/assets/vectors/timer-vector.png') }}" alt=""></span><span class="fw-light" style="font-size: 12px;">Updated 8 hours ago</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <div class="bg-white px-4 py-4 mb-4" style="width: 384px;border-radius: 10px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="width: 46px;height: 45px;"><img src="{{ asset('user/assets/img/7-abc.png') }}" class="w-100 h-100" alt=""></div>
                                <div class="d-flex flex-column py-3 flex-grow-1 ps-3">
                                    <h6 class="m-0 fw-semiBold" style="font-size: 18px;">Assistant News Director</h6>
                                    <p class="fw-light" style="color: #194D79;font-size: 14px;">KABC</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around my-3" style="background-color: #F2F2F2;border-radius: 10px;padding-block: 10px;">
                                <div class="">
                                    <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" style="width: 13px;height: 14px;" alt=""></span>
                                    <span style="color: #194D79;font-size: 14px;">Los Angeles, CA</span>
                                </div>
                                <div class="">
                                    <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" style="width: 16px;height: 16px;" alt=""></span>
                                    <span style="color: #194D79;font-size: 14px;">$100,000  -  $130,000</span>
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3">
                                <div>
                                    <button class="fw-light" style="font-size: 12px;background-color: #9BDB08;border: none;color: #ffff;padding-top: 6px;padding-bottom: 8px;padding-inline: 14px;border-radius: 8px;">
                                        <span style="display: inline-block;padding-inline-end: 4px;">
                                            <img src="{{ asset('user/assets/vectors/tick-vector.png') }}" style="width: 11px;height: 11px;" alt=""></span>
                                            <span style="display: inline-block;padding-top: 1px;">Actively Hiring</span></button>
                                </div>
                                <div>
                                    <p style="color: #828282;"><span style="display: inline-block;padding-inline-end: 6px;"><img src="{{ asset('user/assets/vectors/timer-vector.png') }}" alt=""></span><span class="fw-light" style="font-size: 12px;">Updated 8 hours ago</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <div class="bg-white px-4 py-4 mb-4" style="width: 384px;border-radius: 10px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="width: 46px;height: 45px;"><img src="{{ asset('user/assets/img/7-abc.png') }}" class="w-100 h-100" alt=""></div>
                                <div class="d-flex flex-column py-3 flex-grow-1 ps-3">
                                    <h6 class="m-0 fw-semiBold" style="font-size: 18px;">Assistant News Director</h6>
                                    <p class="fw-light" style="color: #194D79;font-size: 14px;">KABC</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around my-3" style="background-color: #F2F2F2;border-radius: 10px;padding-block: 10px;">
                                <div class="">
                                    <span><img src="{{ asset('user/assets/vectors/map-icon-30x30.png') }}" style="width: 13px;height: 14px;" alt=""></span>
                                    <span style="color: #194D79;font-size: 14px;">Los Angeles, CA</span>
                                </div>
                                <div class="">
                                    <span><img src="{{ asset('user/assets/vectors/dollar-50.png') }}" style="width: 16px;height: 16px;" alt=""></span>
                                    <span style="color: #194D79;font-size: 14px;">$100,000  -  $130,000</span>
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3">
                                <div>
                                    <button class="fw-light" style="font-size: 12px;background-color: #9BDB08;border: none;color: #ffff;padding-top: 6px;padding-bottom: 8px;padding-inline: 14px;border-radius: 8px;">
                                        <span style="display: inline-block;padding-inline-end: 4px;">
                                            <img src="{{ asset('user/assets/vectors/tick-vector.png') }}" style="width: 11px;height: 11px;" alt=""></span>
                                            <span style="display: inline-block;padding-top: 1px;">Actively Hiring</span></button>
                                </div>
                                <div>
                                    <p style="color: #828282;"><span style="display: inline-block;padding-inline-end: 6px;"><img src="{{ asset('user/assets/vectors/timer-vector.png') }}" alt=""></span><span class="fw-light" style="font-size: 12px;">Updated 8 hours ago</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

@endsection

{{-- education modal --}}
<div class="modal fade" id="editEducationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-3" style="border-radius: 16px;">
        <div class="modal-header py-0 pt-2" style="border-bottom: none;">
          <h1 class="modal-title fw-bold" style="font-size: 24px;">Education</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="#" class="fw-light">School</label>
                          <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                      </div>
                  </div>
                  <div class="col-md-6" style="align-content: center;">
                    <div class="form-group">
                        <label for="#" class="fw-light">Degree</label>
                        <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                      <div class="form-group">
                          <label for="#" class="fw-light">Field of study</label>
                          <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12 pt-3">
                      <label for="#" class="fw-light">Start date</label>
                  </div>
                  <div class="col-12">
                      <div class="row pt-2">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <div style="display: flex;background-color: #F2F2F2;padding-block: 10px;padding-inline-end: 10px;border-radius: 10px;">
                                      <select name="" class="ps-3" style="flex-grow: 1;margin-top: 3px;color: #828282;font-size: 14px;">
                                          <option value="" selected>Month</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <div style="display: flex;background-color: #F2F2F2;padding-block: 10px;padding-inline-end: 10px;border-radius: 10px;">
                                      <select name="" class="ps-3" style="flex-grow: 1;margin-top: 3px;color: #828282;font-size: 14px;">
                                          <option value="" selected>Year</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12 pt-3">
                      <label for="#" class="fw-light">End date</label>
                  </div>
                  <div class="col-12">
                      <div class="row pt-2">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <div style="display: flex;background-color: #F2F2F2;padding-block: 10px;padding-inline-end: 10px;border-radius: 10px;">
                                      <select name="" class="ps-3" style="flex-grow: 1;margin-top: 3px;color: #828282;font-size: 14px;">
                                          <option value="" selected>Month</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <div style="display: flex;background-color: #F2F2F2;padding-block: 10px;padding-inline-end: 10px;border-radius: 10px;">
                                      <select name="" class="ps-3" style="flex-grow: 1;margin-top: 3px;color: #828282;font-size: 14px;">
                                          <option value="" selected>Year</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                      <div class="form-group">
                          <label for="#" class="fw-light">Description</label>
                          <textarea name="" class="w-100 p-3 my-3" placeholder="Type here..." id="" cols="30" rows="6" style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;"></textarea>
                        </div>
                  </div>
              </div>
          </form>
        </div>
        <div class="modal-footer d-flex justify-content-start" style="border-top: none;">
          <x-user.button buttonText="Save" class="px-5" />
          <x-user.button buttonText="Cancel" class="bg-white px-5" color="#194D79" />
        </div>
      </div>
    </div>
  </div>
