@push('style')
    <style>
        li.active {
            background-color: #F2F2F2;
        }
    </style>
@endpush
<aside style="min-height: 650px;">
    <h1 class="fw-bold p-4 m-0" style="font-size: 36px;">Account settings</h1>
    <ul class="">
        <li class="py-4 {{ Request::is('newsroom-profile') ? 'active' : '' }}">
            <a href="{{ url('newsroom-profile') }}" class="fw-medium text-black px-4" style="font-size: 20px;">
                <span class="d-inline-block me-3" style="width: 27px;height: 27px;">
                    <img src="{{ asset('user/assets/vectors/account/profile-img.png') }}" class="w-100 h-100" alt="">
                </span>
                Profile
            </a>
        </li>
        <li class="py-4 {{ Request::is('newsroom-contact-info') ? 'active' : '' }}">
            <a href="{{ url('newsroom-contact-info') }}" class="fw-medium text-black px-4" style="font-size: 20px;">
                <span class="d-inline-block me-3" style="width: 21px;height: 21px;">
                    <img src="{{ asset('user/assets/vectors/account/contact-info.png') }}" class="w-100 h-100" alt="">
                </span>
                Contact Info
            </a>
        </li>
        <li class="py-4 {{ Request::is('newsroom-subscription') ? 'active' : '' }}">
            <a href="{{ url('newsroom-subscription') }}" class="fw-medium text-black px-4" style="font-size: 20px;">
                <span class="d-inline-block me-3" style="width: 28px;height: 27px;">
                    <img src="{{ asset('user/assets/vectors/account/subscription.png') }}" class="w-100 h-100" alt="">
                </span>
                Subcription
            </a>
        </li>
        <li class="py-4 {{ Request::is('newsroom-verification') ? 'active' : '' }}">
            <a href="{{ url('newsroom-verification') }}" class="fw-medium text-black px-4" style="font-size: 20px;">
                <span class="d-inline-block me-3" style="width: 26px;height: 26px;">
                    <img src="{{ asset('user/assets/vectors/account/verification.png') }}" class="w-100 h-100" alt="">
                </span>
                Verification
            </a>
        </li>
        <li class="py-4 {{ Request::is('newsroom-change-password') ? 'active' : '' }}">
            <a href="{{ url('newsroom-change-password') }}" class="fw-medium text-black px-4" style="font-size: 20px;">
                <span class="d-inline-block me-3" style="width: 19px;height: 26px;">
                    <img src="{{ asset('user/assets/vectors/account/change-password.png') }}" class="w-100 h-100" alt="">
                </span>
                Change password
            </a>
        </li>
    </ul>
</aside>
