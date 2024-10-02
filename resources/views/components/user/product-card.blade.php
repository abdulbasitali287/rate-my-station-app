@props(['image' => '','altText' => 'Product Image','title','amount','visibility' => 'invisible'])
<div class="col col-md-3 px-2 my-3">
    <div class="card rounded-4 overflow-hidden">
        <div class="position-relative">
            <img src="{{ asset($image) }}" alt="{{ $altText }}" class="card-img-top">
            <div class="position-absolute top-0  {{ $visibility }}">
                <img src="{{ asset('user/assets/vectors/w-vector.png') }}"  alt="">
                <p class="d-flex flex-column" style="transform: translate(6px, -70px);">
                    <span class="d-inline-block text-white" style="font-size: 20px;font-weight: 500;">Best</span>
                    <span class="d-inline-block text-white">Seller</span>
                </p>
            </div>
        </div>
        <div class="card-body">
            <h4 class="card-title fw-bold">{{ $title }}</h4>
            <p class="card-price pb-3">${{ $amount }}</p>
            <div class="row">
                <div class="col-md-6">
                    <button class="view-details-btn btn btn-view-details w-100">View Details</button>
                </div>
                <div class="col-md-6">
                    <button class="add-to-cart-btn btn btn-add-to-cart w-100">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
</div>
