@props(['path' => ''])

<div class="cart-card">
    <div class="cart-image">
        <img src="{{ asset($path) }}" class="w-100 h-100" alt="">
    </div>
    <div class="cart-product-info">
        <h6 class="cart-product-name">America Needs Local News Sweatshirt - Red</h6>
    </div>
    <div class="cart-quantity-control">
        <div class="quantity-input">
            <button class="quantity-btn">-</button>
            <input type="number" name="qty" value="3" disabled class="quantity-display">
            <button class="quantity-btn">+</button>
        </div>
    </div>
    <div class="cart-total-price">
        <strong>$33.50</strong>
    </div>
    <div class="cart-remove">
        <img src="{{ asset('user/assets/vectors/cart-cross.png') }}" alt="">
    </div>
</div>
