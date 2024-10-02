@props(['path' => ''])
<div class="d-flex align-items-center bg-white p-4 my-4" style="border-radius: 10px;box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
    <div style="width: 326px;height: 160px;"><img src="{{ asset($path) }}" class="w-100 h-100" style="object-fit: cover;" alt=""></div>
    <div class="px-4"><h6 class="fw-bold" style="font-size: 20px;">America Needs Local News Sweatshirt - Red</h6></div>
    <div class="d-flex align-items-center px-4">
        <div class="d-flex" style="background-color: #F2F2F2;border-radius: 8px;padding-inline: 8px;">
            <button style="padding-inline: 5px;padding-block: 8px;">-</button>
            <input type="number" name="qty" value="3" disabled style="border: none;width: 80px;font-weight: bold;text-align: center;">
            <button style="padding-inline: 5px;padding-block: 8px;">+</button>
        </div>
    </div>
    <div class="px-4">
        <strong style="font-size: 24px;padding-inline-end: 24px;">$33.50</strong>
    </div>
    <div class="px-4" style="cursor: pointer;"><img src="{{ asset('user/assets/vectors/cart-cross.png') }}" alt=""></div>
</div>
