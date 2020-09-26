<div class="col-lg-4 col-md-6 item-entry mb-4">
    <a href="{{ route('product-detail', $product->id ) }}" class="product-item md-height bg-gray d-block">
      <img src={{ $product->image }} alt="Image" class="img-fluid">
    </a>
    
    <h3 class="h4"><a href="{{ route('homepage') }}">{{ $product->name }}</a></h3>
    @if(isset($category))
      <h5>{{ $category->name }}</h5>
    {{-- @else 
    <p>{{ $category->name }}</p> --}}
    @endif
    <h4><strong class="item-price">$ {{ $product->price }}</strong></h4>
    
    
    
    {{-- <h6 class="item-caption">{{ $product->description }}</h6> --}}
</div>