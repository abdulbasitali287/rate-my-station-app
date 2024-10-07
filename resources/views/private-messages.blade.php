@extends('layout.main')

@section('content')
<div id="private-message-main" class="position-relative">
    <section>
        <div class="container py-5">
            <div class="row bg-white" style="border-radius: 12px;box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);">
                <div class="col-md-4 px-0" style="border-inline-end: 1px solid #E0E0E0;">
                    <aside style="min-height: 650px;">
                        <div class="row p-4">
                            <div class="col-12">
                                <h1 class="fw-bold mb-4" style="font-size: 36px;">My Messages</h1>
                                <label class="w-100 d-flex justify-content-between align-items-center ps-2 pe-3 py-2" style="background-color: #F2F2F2;border-radius: 10px;padding-block: 3px;padding-inline-end: 10px;border: transparent;">
                                    <input type="text" class="flex-grow-1" placeholder="Search messages" style="padding-inline-start: 10px;padding-block: 4px;border: none;background-color: transparent;">
                                    <span style="width: 21px;height: 22px;"><img src="{{ asset('user/assets/vectors/search-30.png') }}" class="w-100 h-100" style="display: inline-block;background-color: transparent;" alt=""></span>
                                </label>
                            </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-12">
                                <ul class="">
                                    <li class="d-flex py-2 {{ Request::is('account-settings-station-profile') ? 'active' : '' }}">
                                        <div class="me-3" style="width: 53px;height: 53px;">
                                            <img src="{{ asset('user/assets/img/private-message-img.png') }}" class="w-100 h-100" alt="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <strong class="fw-semiBold" style="font-size: 18px;">Darlene Robertson</strong>
                                                <span class="fw-light" style="font-size: 12px;color: #828282;">30 min ago</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="fw-light" style="font-size: 14px;color: #828282;">Lectus urna congue elementumam ent...</p>
                                                <span class="fw-medium text-white" style="    background-color: #89C400;font-size: 12px;width: 19px;height: 19px;text-align: center;border-radius: 100%;padding-top: 1px;">2</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex py-4 {{ Request::is('account-settings-station-profile') ? 'active' : '' }}">
                                        <div class="me-3" style="width: 53px;height: 53px;">
                                            <img src="{{ asset('user/assets/img/private-message-img.png') }}" class="w-100 h-100" alt="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <strong class="fw-semiBold" style="font-size: 18px;">Darlene Robertson</strong>
                                                <span class="fw-light" style="font-size: 12px;color: #828282;">30 min ago</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="fw-light" style="font-size: 14px;color: #828282;">Lectus urna congue elementumam ent...</p>
                                                <span class="fw-medium text-white" style="    background-color: #89C400;font-size: 12px;width: 19px;height: 19px;text-align: center;border-radius: 100%;padding-top: 1px;">2</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex py-4 {{ Request::is('account-settings-station-profile') ? 'active' : '' }}">
                                        <div class="me-3" style="width: 53px;height: 53px;">
                                            <img src="{{ asset('user/assets/img/private-message-img.png') }}" class="w-100 h-100" alt="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <strong class="fw-semiBold" style="font-size: 18px;">Darlene Robertson</strong>
                                                <span class="fw-light" style="font-size: 12px;color: #828282;">30 min ago</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="fw-light" style="font-size: 14px;color: #828282;">Lectus urna congue elementumam ent...</p>
                                                <span class="fw-medium text-white" style="    background-color: #89C400;font-size: 12px;width: 19px;height: 19px;text-align: center;border-radius: 100%;padding-top: 1px;">2</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex py-4 {{ Request::is('account-settings-station-profile') ? 'active' : '' }}">
                                        <div class="me-3" style="width: 53px;height: 53px;">
                                            <img src="{{ asset('user/assets/img/private-message-img.png') }}" class="w-100 h-100" alt="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <strong class="fw-semiBold" style="font-size: 18px;">Darlene Robertson</strong>
                                                <span class="fw-light" style="font-size: 12px;color: #828282;">30 min ago</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="fw-light" style="font-size: 14px;color: #828282;">Lectus urna congue elementumam ent...</p>
                                                <span class="fw-medium text-white" style="    background-color: #89C400;font-size: 12px;width: 19px;height: 19px;text-align: center;border-radius: 100%;padding-top: 1px;">2</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex py-4 {{ Request::is('account-settings-station-profile') ? 'active' : '' }}">
                                        <div class="me-3" style="width: 53px;height: 53px;">
                                            <img src="{{ asset('user/assets/img/private-message-img.png') }}" class="w-100 h-100" alt="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <strong class="fw-semiBold" style="font-size: 18px;">Darlene Robertson</strong>
                                                <span class="fw-light" style="font-size: 12px;color: #828282;">30 min ago</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="fw-light" style="font-size: 14px;color: #828282;">Lectus urna congue elementumam ent...</p>
                                                <span class="fw-medium text-white" style="    background-color: #89C400;font-size: 12px;width: 19px;height: 19px;text-align: center;border-radius: 100%;padding-top: 1px;">2</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex py-4 {{ Request::is('account-settings-station-profile') ? 'active' : '' }}">
                                        <div class="me-3" style="width: 53px;height: 53px;">
                                            <img src="{{ asset('user/assets/img/private-message-img.png') }}" class="w-100 h-100" alt="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <strong class="fw-semiBold" style="font-size: 18px;">Darlene Robertson</strong>
                                                <span class="fw-light" style="font-size: 12px;color: #828282;">30 min ago</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="fw-light" style="font-size: 14px;color: #828282;">Lectus urna congue elementumam ent...</p>
                                                <span class="fw-medium text-white" style="    background-color: #89C400;font-size: 12px;width: 19px;height: 19px;text-align: center;border-radius: 100%;padding-top: 1px;">2</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex py-4 {{ Request::is('account-settings-station-profile') ? 'active' : '' }}">
                                        <div class="me-3" style="width: 53px;height: 53px;">
                                            <img src="{{ asset('user/assets/img/private-message-img.png') }}" class="w-100 h-100" alt="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <strong class="fw-semiBold" style="font-size: 18px;">Darlene Robertson</strong>
                                                <span class="fw-light" style="font-size: 12px;color: #828282;">30 min ago</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p class="fw-light" style="font-size: 14px;color: #828282;">Lectus urna congue elementumam ent...</p>
                                                <span class="fw-medium text-white" style="    background-color: #89C400;font-size: 12px;width: 19px;height: 19px;text-align: center;border-radius: 100%;padding-top: 1px;">2</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-md-8 px-0 pb-4">
                    <div class="row mx-0 p-4" style="border-bottom: 1px solid #E0E0E0;">
                        <div class="col-md-8">
                            <div class="d-flex">
                                <div class="me-2" style="width: 58px;height: 58px;">
                                    <img src="{{ asset('user/assets/img/jacob-jones.png') }}" class="w-100 h-100" alt="">
                                </div>
                                <div>
                                    <strong class="fw-bold" style="font-size: 20px;">Jacob Jones</strong>
                                    <p class="fw-light" style="font-size: 14px;color: #828282;">online 5 minutes ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex justify-content-end align-items-center">
                            <div class="d-flex">
                                <a href="#" class="me-4">
                                    <img src="{{ asset('user/assets/vectors/redirect-icon.png') }}" alt="">
                                </a>
                                <a href="#" class="d-flex">
                                    <div class="me-2" style="width: 15px;height: 22px;">
                                        <img src="{{ asset('user/assets/vectors/newsletter-flag.png') }}" class="w-100 h-100" alt="">
                                    </div>
                                    <span class="fw-medium" style="color: #828282;font-size: 16px;">Report</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-0 pt-2">
                        <div class="col-12">
                            <div class="row mx-0">
                                <div class="col-md-6"></div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="py-2" style="width: max-content;">
                                        <button class="fw-light px-3 py-2 text-white overflow-hidden" style="background-color: #194D79;font-size: 16px;border-top-right-radius: 10px;border-top-left-radius: 10px;border-bottom-left-radius: 10px;">
                                            Lectus urna congue elementumam ent...
                                        </button>
                                        <span class="fw-light d-block text-end pt-1" style="font-size: 12px;color: #828282;">2 min ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-0">
                                <div class="col-12 d-flex align-items-center">
                                    <div class="flex-grow-1" style="border-top: 1px solid #E0E0E0;"></div>
                                    <span class="fw-light px-4" style="color: #828282;font-size: 14px;">Today</span>
                                    <div class="flex-grow-1" style="border-top: 1px solid #E0E0E0;"></div>
                                </div>
                            </div>
                            <div class="row mx-0">
                                <div class="col-md-6 d-flex">
                                    <div class="py-2" style="width: max-content;">
                                        <button class="fw-light px-3 py-2 text-black overflow-hidden" style="background-color: #F2F2F2;font-size: 16px;border-top-right-radius: 10px;border-top-left-radius: 10px;border-bottom-left-radius: 10px;">
                                            Lectus urna congue elementumam ent...
                                        </button>
                                        <span class="fw-light d-block text-end pt-1" style="font-size: 12px;color: #828282;">2 min ago</span>
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                            <div class="row mx-0">
                                <div class="col-md-6"></div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="py-2" style="width: max-content;">
                                        <button class="fw-light px-3 py-2 text-white overflow-hidden" style="background-color: #194D79;font-size: 16px;border-top-right-radius: 10px;border-top-left-radius: 10px;border-bottom-left-radius: 10px;">
                                            Lectus urna congue elementumam ent...
                                        </button>
                                        <span class="fw-light d-block text-end pt-1" style="font-size: 12px;color: #828282;">2 min ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-0">
                                <div class="col-md-6 d-flex">
                                    <div class="py-2" style="width: max-content;">
                                        <button class="fw-light px-3 py-2 text-black overflow-hidden" style="background-color: #F2F2F2;font-size: 16px;border-top-right-radius: 10px;border-top-left-radius: 10px;border-bottom-left-radius: 10px;">
                                            Lectus urna congue elementumam ent...
                                        </button>
                                        <span class="fw-light d-block text-end pt-1" style="font-size: 12px;color: #828282;">2 min ago</span>
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                            <div class="row mx-0">
                                <div class="col-md-6"></div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="py-2" style="width: max-content;">
                                        <button class="fw-light px-3 py-2 text-white overflow-hidden" style="background-color: #194D79;font-size: 16px;border-top-right-radius: 10px;border-top-left-radius: 10px;border-bottom-left-radius: 10px;">
                                            Lectus urna congue elementumam ent...
                                        </button>
                                        <span class="fw-light d-block text-end pt-1" style="font-size: 12px;color: #828282;">2 min ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-0">
                                <div class="col-md-6 d-flex">
                                    <div class="py-2" style="width: max-content;">
                                        <button class="fw-light px-3 py-2 text-black overflow-hidden" style="background-color: #F2F2F2;font-size: 16px;border-top-right-radius: 10px;border-top-left-radius: 10px;border-bottom-left-radius: 10px;">
                                            Lectus urna congue elementumam ent...
                                        </button>
                                        <span class="fw-light d-block text-end pt-1" style="font-size: 12px;color: #828282;">2 min ago</span>
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                            <div class="row mx-0">
                                <div class="col-md-6"></div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="py-2" style="width: max-content;">
                                        <button class="fw-light px-3 py-2 text-white overflow-hidden" style="background-color: #194D79;font-size: 16px;border-top-right-radius: 10px;border-top-left-radius: 10px;border-bottom-left-radius: 10px;">
                                            Lectus urna congue elementumam ent...
                                        </button>
                                        <span class="fw-light d-block text-end pt-1" style="font-size: 12px;color: #828282;">2 min ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-0">
                                <div class="col-md-6 d-flex">
                                    <div class="py-2" style="width: max-content;">
                                        <button class="fw-light px-3 py-2 text-black overflow-hidden" style="background-color: #F2F2F2;font-size: 16px;border-top-right-radius: 10px;border-top-left-radius: 10px;border-bottom-left-radius: 10px;">
                                            Lectus urna congue elementumam ent...
                                        </button>
                                        <span class="fw-light d-block text-end pt-1" style="font-size: 12px;color: #828282;">2 min ago</span>
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                            <div class="row mx-0">
                                <div class="col-md-6"></div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="py-2" style="width: max-content;">
                                        <button class="fw-light px-3 py-2 text-white overflow-hidden" style="background-color: #194D79;font-size: 16px;border-top-right-radius: 10px;border-top-left-radius: 10px;border-bottom-left-radius: 10px;">
                                            Lectus urna congue elementumam ent...
                                        </button>
                                        <span class="fw-light d-block text-end pt-1" style="font-size: 12px;color: #828282;">2 min ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-0 p-4">
                        <div class="col-12 px-0">
                            <label for="#" class="d-flex align-items-center px-3" style="background-color: #F2F2F2;border-radius: 10px;">
                                <input type="text" placeholder="Type here..." class="fw-light pe-3 py-2 w-100 border-0" style="background-color: #F2F2F2;color: #828282;">
                                <div class="d-flex">
                                    <span class="d-inline-block px-2"><img src="{{ asset('user/assets/vectors/link-icon.png') }}" alt=""></span>
                                    <span class="d-inline-block px-2"><img src="{{ asset('user/assets/vectors/send-vector.png') }}" alt=""></span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex justify-content-end position-absolute" style="right: 0;padding-inline: 30px;">
        <div class="d-flex justify-content-between align-items-center px-2 mx-2" style="background-color: #194D79;width: 389px;height: 64px;border-top-right-radius: 10px;border-top-left-radius: 10px;">
            <div class="px-2 d-flex align-items-center">
                <div class="position-relative me-2" style="width: 39px;height: 39px;">
                    <img src="{{ asset('user/assets/img/chat-img.png') }}" class="w-100 h-100" alt="">
                    <span class="d-inline-block" style="background-color: #89C400;width: 11px;height: 11px;border-radius: 100%;position: absolute;right: 0;bottom: -2px;"></span>
                </div>
                <strong class="fw-bold text-white" style="font-size: 18px;">Jacob Jones</strong>
            </div>
            <div class="px-2">
                <img src="{{ asset('user/assets/vectors/chat-redirect.png') }}" style="width: 18px;height: 18px;" class="me-2" alt="">
                <img src="{{ asset('user/assets/vectors/chat-cross.png') }}" style="width: 13px;height: 13px;" alt="">
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center px-2 mx-2" style="background-color: #194D79;width: 389px;height: 64px;border-top-right-radius: 10px;border-top-left-radius: 10px;">
            <div class="px-2 d-flex align-items-center">
                <div class="position-relative me-2" style="width: 24px;height: 23px;">
                    <img src="{{ asset('user/assets/vectors/chat-icon.png') }}" class="w-100 h-100" alt="">
                </div>
                <strong class="fw-bold text-white" style="font-size: 18px;">Messaging</strong>
            </div>
            <div class="px-2">
                <img src="{{ asset('user/assets/vectors/chat-redirect.png') }}" style="width: 18px;height: 18px;" class="me-2" alt="">
                <img src="{{ asset('user/assets/vectors/chat-up-arrow.png') }}" style="width: 12px;height: 7px;" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
