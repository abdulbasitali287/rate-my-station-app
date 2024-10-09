@extends('layout.main')
@section('content')

<a href="#" data-bs-toggle="modal" data-bs-target="#addDirector2Modal">
    <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" style="width: 24px;height: 24px;" alt="">
</a>
@endsection

{{-- add news director modal --}}
<div class="modal fade" id="addDirector2Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <x-user.button buttonText="Save" class="px-5" />
          <x-user.button buttonText="Cancel" class="bg-white px-5" color="#194D79" />
        </div>
      </div>
    </div>
</div>

