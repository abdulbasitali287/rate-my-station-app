@extends('layout.main')
@section('content')

<a href="#" data-bs-toggle="modal" data-bs-target="#addJobModal">
    <img src="{{ asset('user/assets/vectors/edit-vector.png') }}" style="width: 24px;height: 24px;" alt="">
</a>
@endsection

{{-- apply job modal --}}
<div class="modal fade" id="addJobModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content p-3" style="border-radius: 16px;">
        <div class="modal-header py-0 pt-2" style="border-bottom: 1px solid #BDBDBD;">
            <div class="bg-white my-4">
                <div class="d-flex">
                    <div class="d-flex flex-grow-1 pe-5">
                        <div style="width: 56px;height: 43px;margin-inline-end: 15px;">
                            <img src="{{ asset('user/assets/img/station-7-log.png') }}" class="w-100 h-100" alt="">
                        </div>
                        <div class="flex-grow-1">
                            <div>
                                <strong style="font-size: 24px;color: #194D79">KABC <span><img src="{{ asset('user/assets/vectors/gare-vector.png') }}" alt=""></span></strong>
                                <p class="fw-light" style="color: #828282;">TV News   |   Los Angeles, CA   |   DMA: 2</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="#" class="fw-light">Your email address</label>
                        <input type="email" class="w-100 px-3 mt-2 mb-3" placeholder="Type here..." style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;padding-block: 12px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="#" class="fw-light">What is/was your job position?</label>
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
                <div class="col-md-6" style="align-content: center;">
                    <div class="form-check pt-3" style="margin-top: 28px;">
                        <input class="form-check-input me-3" type="checkbox" value="" style="width: 22px;height: 22px;border-color: #BDBDBD;">
                        <label class="form-check-label d-inline-block mt-1 fw-light" for="flexCheckDefault">
                            I am currently working for this station
                            <span class="ms-1"><img src="{{ asset('user/assets/vectors/i-vector.png') }}" style="width: 20px;height: 20px;" alt=""></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group pt-3">
                        <label for="#" class="fw-light">In the market, where does this station rank in ratings?</label>
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
                        <label for="#" class="fw-light">(For reportesr only) Paired with a photog?</label>
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
                <div class="col-md-6">
                    <div class="pt-3">
                        <label for="#" class="fw-light">Does this station require you to sign a contract?</label>
                        <div class="d-flex pt-2">
                            <div class="form-check">
                                <input class="form-check-input me-3" type="checkbox" value="" style="width: 22px;height: 22px;border-color: #BDBDBD;">
                                <label class="form-check-label d-inline-block mt-1 fw-light" for="flexCheckDefault">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check ms-4">
                                <input class="form-check-input me-3" type="checkbox" value="" style="width: 22px;height: 22px;border-color: #BDBDBD;">
                                <label class="form-check-label d-inline-block mt-1 fw-light" for="flexCheckDefault">
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group pt-3">
                        <label for="#" class="fw-light">If so, for how long?</label>
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
                        <label for="#" class="fw-light">What is/was your yearly salary?</label>
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
                        <label for="#" class="fw-light">Who is the current news director?</label>
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
                        <label for="#" class="fw-light">Breifly describe your overall experience working for him/her?</label>
                        <textarea name="" class="w-100 p-3 my-3" placeholder="Type here..." id="" cols="30" rows="6" style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;"></textarea>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="#" class="fw-light">While working for this station have you experienced...</label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check pt-3">
                                <input class="form-check-input me-3" type="checkbox" value="" style="width: 22px;height: 22px;border-color: #BDBDBD;">
                                <label class="form-check-label d-inline-block mt-1 fw-light" for="flexCheckDefault">
                                    Sexual Harassment
                                </label>
                            </div>
                            <div class="form-check pt-3">
                                <input class="form-check-input me-3" type="checkbox" value="" style="width: 22px;height: 22px;border-color: #BDBDBD;">
                                <label class="form-check-label d-inline-block mt-1 fw-light" for="flexCheckDefault">
                                    Sexual Discrimination
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check pt-3">
                                <input class="form-check-input me-3" type="checkbox" value="" style="width: 22px;height: 22px;border-color: #BDBDBD;">
                                <label class="form-check-label d-inline-block mt-1 fw-light" for="flexCheckDefault">
                                    Racial Discrimination
                                </label>
                            </div>
                            <div class="form-check pt-3">
                                <input class="form-check-input me-3" type="checkbox" value="" style="width: 22px;height: 22px;border-color: #BDBDBD;">
                                <label class="form-check-label d-inline-block mt-1 fw-light" for="flexCheckDefault">
                                    An Overall Toxic Work Environment
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group pt-3">
                        <label for="#" class="fw-light">If you answered yes to any of the previous, please explain more.</label>
                        <textarea name="" class="w-100 p-3 my-3" placeholder="Type here..." id="" cols="30" rows="6" style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;"></textarea>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="#" class="fw-light">While working for this station have you experienced...</label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check pt-3">
                                <input class="form-check-input me-3" type="checkbox" value="" style="width: 22px;height: 22px;border-color: #BDBDBD;">
                                <label class="form-check-label d-inline-block mt-1 fw-light" for="flexCheckDefault">
                                    Organized
                                </label>
                            </div>
                            <div class="form-check pt-3">
                                <input class="form-check-input me-3" type="checkbox" value="" style="width: 22px;height: 22px;border-color: #BDBDBD;">
                                <label class="form-check-label d-inline-block mt-1 fw-light" for="flexCheckDefault">
                                    Educational
                                </label>
                            </div>
                            <div class="form-check pt-3">
                                <input class="form-check-input me-3" type="checkbox" value="" style="width: 22px;height: 22px;border-color: #BDBDBD;">
                                <label class="form-check-label d-inline-block mt-1 fw-light" for="flexCheckDefault">
                                    Positive, Fun
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check pt-3">
                                <input class="form-check-input me-3" type="checkbox" value="" style="width: 22px;height: 22px;border-color: #BDBDBD;">
                                <label class="form-check-label d-inline-block mt-1 fw-light" for="flexCheckDefault">
                                    Unorganized
                                </label>
                            </div>
                            <div class="form-check pt-3">
                                <input class="form-check-input me-3" type="checkbox" value="" style="width: 22px;height: 22px;border-color: #BDBDBD;">
                                <label class="form-check-label d-inline-block mt-1 fw-light" for="flexCheckDefault">
                                    Open to Creative Control
                                </label>
                            </div>
                            <div class="form-check pt-3">
                                <input class="form-check-input me-3" type="checkbox" value="" style="width: 22px;height: 22px;border-color: #BDBDBD;">
                                <label class="form-check-label d-inline-block mt-1 fw-light" for="flexCheckDefault">
                                    Negative, Toxic
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group pt-3">
                        <label for="#" class="fw-light">Is there anything else you think we should know about this station?</label>
                        <textarea name="" class="w-100 p-3 my-3" placeholder="Type here..." id="" cols="30" rows="6" style="color: #828282;background-color: #F2F2F2;border: none;border-radius: 10px;"></textarea>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div >
                        <strong class="fw-medium" style="font-size: 14px;">Newsroom rating</strong>
                        <div class="d-flex align-items-center pt-2">
                            <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #F2F2F2;"></span>
                            <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #F2F2F2;"></span>
                            <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #F2F2F2;"></span>
                            <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #F2F2F2;"></span>
                            <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #F2F2F2;"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div >
                        <strong class="fw-medium" style="font-size: 14px;">Coworker rating</strong>
                        <div class="d-flex align-items-center pt-2">
                            <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #F2F2F2;"></span>
                            <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #F2F2F2;"></span>
                            <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #F2F2F2;"></span>
                            <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #F2F2F2;"></span>
                            <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #F2F2F2;"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div >
                        <strong class="fw-medium" style="font-size: 14px;">Would recommend working here?</strong>
                        <div class="d-flex align-items-center pt-2">
                            <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #F2F2F2;"></span>
                            <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #F2F2F2;"></span>
                            <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #F2F2F2;"></span>
                            <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #F2F2F2;"></span>
                            <span style="border-radius: 20px;width: 22px;height: 8px;;margin-inline-end: 8px;display: inline-block;background-color: #F2F2F2;"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 pt-3">
                    <div class="row">
                        <div class="col-12">
                            <label for="#" class="fw-light">Please verified your rating</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex pt-3 align-items-center">
                                <div class="pe-2" style="cursor: pointer;">
                                    <img src="{{ asset('user/assets/img/small-upload-img.png') }}" style="width: 75px;height: 75px;" alt="">
                                </div>
                                <div class="ps-2">
                                    <p class="fw-light" style="color: #194D79;cursor: pointer;">Upload work document here</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="align-content: center;">
                            <div class="form-check pt-2">
                                <input class="form-check-input me-3" type="checkbox" value="" style="width: 22px;height: 22px;border-color: #BDBDBD;">
                                <label class="form-check-label d-inline-block mt-1 fw-light" for="flexCheckDefault">
                                    Link my profile experience information
                                    <span class="ms-1"><img src="{{ asset('user/assets/vectors/i-vector.png') }}" style="width: 20px;height: 20px;" alt=""></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </form>
        </div>
        <div class="modal-footer d-flex justify-content-start" style="border-top: none;">
          <x-user.button buttonText="Submit" class="px-5" />
          <x-user.button buttonText="Cancel" class="bg-white px-5" color="#194D79" />
        </div>
      </div>
    </div>
</div>

