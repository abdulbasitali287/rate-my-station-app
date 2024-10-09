{{-- header --}}
<header class="shadow-sm w-100 bg-white">
    <div class="container d-flex justify-content-between align-items-center py-2">
        <div class="h-100" style="width: 186px;margin-top: 12px;">
            <a href="{{ url('/') }}" style="width: 100%;display: block;">
                <img src="{{ asset('user/assets/img/logo-2.png') }}" class="w-100 h-100" alt="">
            </a>
        </div>
        <div class="flex-grow-1">
            <ul class="d-flex justify-content-start pt-1 px-5">
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('about') }}">About</a></li>
                <li class="{{ Request::is('newsletter') ? 'active' : '' }}"><a
                        href="{{ url('newsletter') }}">Newsletter</a></li>
                <li class="{{ Request::is('view-jobs') ? 'active' : '' }}"><a href="{{ url('view-jobs') }}">Jobs</a>
                </li>
                <li class="{{ Request::is('shop') ? 'active' : '' }}"><a href="{{ url('shop') }}">Shop</a></li>
                <li class="{{ Request::is('contact-us') ? 'active' : '' }}"><a
                        href="{{ url('contact-us') }}">Contact</a></li>
                <li class="{{ Request::is('faqs') ? 'active' : '' }}"><a href="{{ url('faqs') }}">FAQ</a></li>
            </ul>
        </div>
        <div class="d-flex pe-3">
            <div class="position-relative" style="padding-inline: 10px;display: flex;margin-inline-end: 4px;margin-top: -2px;">
                <a href="{{ url('private-messages') }}">
                    <img src="{{ asset('user/assets/vectors/header-chat-icon.png') }}" style="width: 22px;height: 22px;" alt="">
                    <span style="width: 18px;height: 18px;background-color: #9BDB08;position: absolute;top: -6px;right: 0;border-radius: 10px;display: flex;justify-content: center;align-items: center;color: #ffff;font-size: 12px;">2</span>
                </a>
             </div>
             <div class="position-relative" style="padding-inline: 10px;display: flex;margin-inline-end: 4px;">
                <a href="{{ url('notifications') }}">
                    <img src="{{ asset('user/assets/vectors/header-bell-icon.png') }}" alt="" style="width: 21px;height: 21px;">
                    <span style="width: 18px;height: 18px;background-color: #9BDB08;position: absolute;top: -6px;right: 0;border-radius: 10px;display: flex;justify-content: center;align-items: center;color: #ffff;font-size: 12px;">2</span>
                </a>
             </div>
            <div class="position-relative" style="padding-inline: 10px;display: flex;margin-inline-end: 4px;">
                <a href="{{ url('cart') }}">
                    <img src="{{ asset('user/assets/vectors/cart.png') }}" style="width: 24px;height: 24px;"
                        alt="">
                    <span
                        style="width: 18px;height: 18px;background-color: #9BDB08;position: absolute;top: -6px;right: 0;border-radius: 10px;display: flex;justify-content: center;align-items: center;color: #ffff;font-size: 12px;">2</span>
                </a>
            </div>
            {{-- <div class="ps-1">
                <a href="{{ url('employee-login') }}">Login</a>
            </div> --}}
        </div>
        <div class="ps-1 d-flex justify-content-center align-items-center">
               <div class="me-2">
                   <img src="{{ asset('user/assets/img/logged-in-img.png') }}" style="width: 43px;height: 43px;" alt="">
               </div>
               <div class="d-flex justify-content-center align-items-center">
                   <strong class="fw-bold d-inline-block me-2">Brooklyn</strong>
                   <img src="{{ asset('user/assets/vectors/down-arrow-black.png') }}" style="width: 7px;height: 7px;" alt="">
               </div>
            </div>
    </div>
</header>
