{{-- footer --}}
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-9 px-0 footer-links">
                <ul class="d-flex justify-content-start px-4">
                    <li><a href="{{ url('employee-login') }}">Account Information</a></li>
                    <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                    <li><a href="{{ url('work-for-us') }}">Work for Us</a></li>
                    <li><a href="{{ url('subscription') }}">Subscribe</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="{{ url('terms-and-conditions') }}">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="col-md-3 social-icons">
                <ul class="d-flex justify-content-end">
                    <li><img src="{{ asset('user/assets/vectors/facebook-footer.png') }}" alt="Facebook"></li>
                    <li><img src="{{ asset('user/assets/vectors/instagram-footer.png') }}" alt="Instagram"></li>
                    <li><img src="{{ asset('user/assets/vectors/twitter-footer.png') }}" alt="Twitter"></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
