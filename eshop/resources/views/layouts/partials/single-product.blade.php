<div class="col-lg-4 col-md-6 item-entry mb-4">
    <a href="{{ route('product-detail', $product->id ) }}" class="product-item md-height bg-gray d-block">
      <img src={{ $product->image }} alt="Image" class="img-fluid">
    </a>
    <h2 class="item-title"><a href="{{ route('homepage') }}">{{ $product->name }}</a></h2>
    <h4><strong class="item-price">$ {{ $product->price }}</strong></h4>
    {{-- <h6 class="item-caption">{{ $product->description }}</h6> --}}
</div>