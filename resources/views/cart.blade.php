@extends('layout.main')
@push('style')
    <style>
        .checkout-btn{
            margin-block: 6px;
            font-weight: bold;
            background-color: transparent;
            border: 2px solid #194D79;
            color: #194D79;
            padding-block: 8px;
            transition: all 0.5s;
            border-radius: 10px;
        }
        .checkout-btn:hover{
            background-color: #194D79;
            color: #F2F2F2;
        }
    </style>
@endpush
@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold py-4" style="font-size: 36px;">My Cart</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-6 ps-3">
                        <p style="color: #828282;">Product</p>
                    </div>
                    <div class="col-3 text-center pe-5">
                        <p style="color: #828282;">Quantity</p>
                    </div>
                    <div class="col-3">
                        <p style="color: #828282;">Total</p>
                    </div>
                </div>
                <x-user.cart-list-card path="user/assets/img/cart-1.png" />
                <x-user.cart-list-card path="user/assets/img/cart-2.png" />
                <x-user.cart-list-card path="user/assets/img/cart-3.png" />
            </div>
            <div class="col-md-4 pt-4">
                <div class="bg-white p-4 my-4" style="width: 383px;border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                    <h6 class="fw-bold" style="font-size: 24px;">Order Summary</h6>
                    <div class="d-flex justify-content-between py-2">
                        <label style="font-size: 16px;color: #828282;">Subtotal</label>
                        <strong style="font-size: 16px;font-weight: 700;">$33.50</strong>
                    </div>
                    <div class="d-flex justify-content-between py-2">
                        <label style="font-size: 16px;color: #828282;">Shipping</label>
                        <strong style="font-size: 16px;font-weight: 700;">Free</strong>
                    </div>
                    <div class="py-2">
                        <input type="text" placeholder="Add cupon code here..." style="width: 100%;padding-block: 8px;padding-inline-start: 10px;border-radius: 10px;background-color: #F2F2F2;border-color: transparent;">
                    </div>
                    <div class="d-flex justify-content-between py-2">
                        <strong style="font-size: 20px;">Total</strong>
                        <strong style="font-size: 20px;">$33.50</strong>
                    </div>
                    <div class="py-2">
                        <a href="#" class="checkout-btn d-block text-center" style="">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
