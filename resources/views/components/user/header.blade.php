{{-- header --}}
<header class="shadow-sm">
    <div class="container d-flex justify-content-between py-4">
         <div style="width: 186px;">
             <a href="{{ url('/') }}" style="width: 100%;display: block;">
                <img src="{{ asset('user/assets/img/logo-2.png') }}" class="w-100 h-100" alt="">
             </a>
         </div>
         <div class="flex-grow-1">
             <ul class="d-flex justify-content-start pt-1 px-5">
                 <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                 <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('about') }}">About</a></li>
                 <li class="{{ Request::is('newsletter') ? 'active' : '' }}"><a href="{{ url('newsletter') }}">Newsletter</a></li>
                 <li class="{{ Request::is('view-jobs') ? 'active' : '' }}"><a href="{{ url('view-jobs') }}">Jobs</a></li>
                 <li class="{{ Request::is('shop') ? 'active' : '' }}"><a href="{{ url('shop') }}">Shop</a></li>
                 <li class="{{ Request::is('contact-us') ? 'active' : '' }}"><a href="{{ url('contact-us') }}">Contact</a></li>
                 <li class="{{ Request::is('faqs') ? 'active' : '' }}"><a href="{{ url('faqs') }}">FAQ</a></li>
             </ul>
         </div>
         <div class="d-flex">
             <div class="position-relative">
                 <img src="{{ asset('user/assets/vectors/cart.png') }}" width="24" height="24" alt="">
                 <span>2</span>
             </div>
             <div>
                 <a href="{{ url('employee-login') }}">Login</a>
             </div>
         </div>
    </div>
 </header>
