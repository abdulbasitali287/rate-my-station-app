@extends('layout.main')

@section('content')

    <main id="cart-main">

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="cart-title">My Cart</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="row pb-4">
                            <div class="col-6 ps-3">
                                <p class="cart-label">Product</p>
                            </div>
                            <div class="col-3 text-center pe-5">
                                <p class="cart-label">Quantity</p>
                            </div>
                            <div class="col-3">
                                <p class="cart-label">Total</p>
                            </div>
                        </div>
                        <x-user.cart-list-card path="user/assets/img/cart-1.png" />
                        <x-user.cart-list-card path="user/assets/img/cart-2.png" />
                        <x-user.cart-list-card path="user/assets/img/cart-3.png" />
                    </div>
                    <div class="col-md-4 pt-4">
                        <div class="order-summary">
                            <h6>Order Summary</h6>
                            <div class="d-flex justify-content-between py-2">
                                <label>Subtotal</label>
                                <strong>$33.50</strong>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <label>Shipping</label>
                                <strong>Free</strong>
                            </div>
                            <div class="py-3">
                                <input type="text" class="coupon-input" placeholder="Add coupon code here...">
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <strong class="order-total">Total</strong>
                                <strong class="order-total">$33.50</strong>
                            </div>
                            <div class="py-2">
                                <a href="#" class="checkout-btn d-block text-center">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
