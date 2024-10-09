@extends('layout.main')
@section('content')

<a href="#" data-bs-toggle="modal" data-bs-target="#addJobOpeningModal">
    <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" style="width: 24px;height: 24px;" alt="">
</a>
@endsection

{{-- add job opening modal --}}
<div class="modal fade" id="addJobOpeningModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-3" style="border-radius: 16px;">
        <div class="modal-header py-0 pt-2" style="border-bottom: none;">
          <h1 class="modal-title fw-bold" style="font-size: 24px;">Job Opening</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="#" class="fw-light">Job title</label>
                        <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                      <label for="#" class="fw-light">Job description</label>
                      <textarea name="" class="w-100 p-3 mt-2" placeholder="Type here..." id="" cols="30" rows="6" style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group pt-3">
                        <label for="#" class="fw-light">Yearly salary</label>
                        <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="#" class="fw-light">Job type</label>
                        <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="#" class="fw-light">Qulification</label>
                        <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                    </div>
                </div>
                <div class="col-md-6" style="align-content: center;">
                    <div>
                       <a href="#" class="d-flex mt-2 text-black">
                            <img src="{{ asset('user/assets/vectors/rounded-plus-27.png') }}" class="me-2" style="width: 27px;height: 27px;" alt="">
                            <p class="fw-light">Add more qualification</p>
                       </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="#" class="fw-light">Career level</label>
                        <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group pt-3">
                        <label for="#" class="fw-light">Years of experiance</label>
                        <div class="mt-2" style="display: flex;background-color: #F2F2F2;padding-block: 10px;padding-inline-end: 10px;border-radius: 10px;">
                            <select name="" class="ps-3" style="flex-grow: 1;margin-top: 3px;color: #828282;font-size: 14px;">
                                <option value="" selected>Choose options</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group pt-3">
                        <label for="#" class="fw-light">Education level</label>
                        <div class="mt-2" style="display: flex;background-color: #F2F2F2;padding-block: 10px;padding-inline-end: 10px;border-radius: 10px;">
                            <select name="" class="ps-3" style="flex-grow: 1;margin-top: 3px;color: #828282;font-size: 14px;">
                                <option value="" selected>Choose options</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="#" class="fw-light">Start date</label>
                        <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="mm/dd/yy" style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="#" class="fw-light">End date</label>
                        <input type="text" class="w-100 px-3 mt-2 mb-3" placeholder="mm/dd/yy" style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                    </div>
                </div>
            </div>
          </form>
        </div>
        <div class="modal-footer d-flex justify-content-start" style="border-top: none;">
          <x-user.button buttonText="Save" class="px-5" />
          <x-user.button buttonText="Cancel" class="bg-white px-5" color="#194D79" />
          <a href="#" class="d-inline-block bg-transparent fw-bold mx-2" style="color: #194D79;">Save as a draft</a>
        </div>
      </div>
    </div>
</div>
