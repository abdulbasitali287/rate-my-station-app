@extends('layout.main')
@section('content')

<a href="#" data-bs-toggle="modal" data-bs-target="#directorDetailsModal">
    <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" style="width: 24px;height: 24px;" alt="">
</a>
@endsection

{{-- director details modal --}}
<div class="modal fade" id="directorDetailsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-3" style="border-radius: 16px;">
        <div class="modal-header d-flex align-items-start pt-2 pb-3" style="border-bottom: 1px solid #F2F2F2;">
            <div class="row w-100 align-items-center">
                <div class="col-md-8">
                    <div class="d-flex">
                        <img src="{{ asset('user/assets/img/popup-img-1.png') }}" class="me-2" alt="">
                        <div>
                            <strong class="fw-bold" style="font-size: 26px;">Brooklyn Simmons</strong>
                            <p class="fw-light" style="color: #828282;">News Director</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-4">
                    <a href="#" class="fw-bold text-white px-5" style="background-color: #194D79;border-radius: 10px;padding-block: 10px;">See Profile</a>
                </div>
            </div>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row" style="border-bottom: 1px solid #F2F2F2;">
            <div class="row">
                <div class="col-12 pb-4">
                    <strong class="fw-medium" style="font-size: 26px;">Contact Info</strong>
                </div>
            </div>
            <div class="col-12 px-0">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-center align-items-center" style="width: 56px;height: 56px;background-color: #F2F2F2;border-radius: 10px;">
                                <img src="{{ asset('user/assets/img/contact-call.png') }}" style="width: 24px;height: 24px;" alt="">
                            </div>
                            <div style="padding-inline-start: 14px;">
                                <strong style="font-size: 22px;">Email</strong>
                                <p class="fw-light" style="color: #9BDB08;font-size: 20px;margin-top: -2px;">email@address.com </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-center align-items-center" style="width: 56px;height: 56px;background-color: #F2F2F2;border-radius: 10px;">
                                <img src="{{ asset('user/assets/img/contact-mail.png') }}" style="width: 29px;height: 22px;" alt="">
                            </div>
                            <div style="padding-inline-start: 14px;">
                                <strong style="font-size: 22px;">Phone</strong>
                                <p class="fw-light" style="color: #9BDB08;font-size: 20px;margin-top: -2px;">1234 - 33341413</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-center align-items-center" style="width: 56px;height: 56px;background-color: #F2F2F2;border-radius: 10px;">
                                <img src="{{ asset('user/assets/img/contact-web.png') }}" style="width: 27px;height: 27px;" alt="">
                            </div>
                            <div style="padding-inline-start: 14px;">
                                <strong style="font-size: 22px;">Website</strong>
                                <p class="fw-light" style="color: #9BDB08;font-size: 20px;margin-top: -2px;">socialmedialink.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-center align-items-center" style="width: 56px;height: 56px;background-color: #F2F2F2;border-radius: 10px;">
                                <img src="{{ asset('user/assets/img/contact-linkedin.png') }}" style="width: 24px;height: 24px;" alt="">
                            </div>
                            <div style="padding-inline-start: 14px;">
                                <strong style="font-size: 22px;">Linkedin</strong>
                                <p class="fw-light" style="color: #9BDB08;font-size: 20px;margin-top: -2px;">socialmedialink.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-center align-items-center" style="width: 56px;height: 56px;background-color: #F2F2F2;border-radius: 10px;">
                                <img src="{{ asset('user/assets/img/contact-twitter.png') }}" style="width: 26px;height: 22px;" alt="">
                            </div>
                            <div style="padding-inline-start: 14px;">
                                <strong style="font-size: 22px;">Twitter</strong>
                                <p class="fw-light" style="color: #9BDB08;font-size: 20px;margin-top: -2px;">socialmedialink.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-center align-items-center" style="width: 56px;height: 56px;background-color: #F2F2F2;border-radius: 10px;">
                                <img src="{{ asset('user/assets/img/contact-facebook.png') }}" style="width: 11px;height: 26px;" alt="">
                            </div>
                            <div style="padding-inline-start: 14px;">
                                <strong style="font-size: 22px;">Facebook</strong>
                                <p class="fw-light" style="color: #9BDB08;font-size: 20px;margin-top: -2px;">socialmedialink.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 py-4">
                        <strong class="fw-medium" style="font-size: 26px;">Work History</strong>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex align-items-center pb-3">
                                    <div class="me-3">
                                        <img src="{{ asset('user/assets/img/7-logo-46.png') }}" style="width: 46px;height: 35px;" alt="">
                                    </div>
                                    <div>
                                        <strong class="fw-semiBold" style="font-size: 18px;">Office Name</strong>
                                        <p class="fw-light" style="font-size: 14px;color: #82828;">14 months</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex flex-column pb-3">
                                    <div class="d-flex justify-content-between pb-2">
                                        <div>
                                            <strong class="fw-semiBold" style="font-size: 16px;">Job Title (Current)</strong>
                                            <p class="fw-light" style="font-size: 14px;color: #828282;">Fulltime</p>
                                        </div>
                                        <div class="text-end">
                                            <strong class="fw-medium" style="font-size: 16px;color: #89C400;">Oct 2021  -  Apr 2022</strong>
                                            <p class="fw-light" style="font-size: 14px;color: #828282;">7 months</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex flex-column pb-3">
                                    <div class="d-flex justify-content-between pb-2">
                                        <div>
                                            <strong class="fw-semiBold" style="font-size: 16px;">Job Title (Past)</strong>
                                            <p class="fw-light" style="font-size: 14px;color: #828282;">Fulltime</p>
                                        </div>
                                        <div class="text-end">
                                            <strong class="fw-medium" style="font-size: 16px;color: #89C400;">Oct 2021  -  Apr 2022</strong>
                                            <p class="fw-light" style="font-size: 14px;color: #828282;">7 months</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

