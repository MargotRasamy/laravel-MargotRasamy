<!DOCTYPE html>
<html lang="en">
    @include('layouts.partials.head')
  <body>
  @if(isset($isLoggedIn))
      @include('navigation-dropdown')
    @else
      @include('layouts.partials.header')
    @endif
  <div class="site-wrap">
    
    
   

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{ route('homepage') }}">Home</a> <span class="mx-2 mb-0">/</span> <a href="{{ route('products-list') }}">Shop</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{ $productDetail->name }}</strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="item-entry">
              <a href="#" class="product-item md-height bg-gray d-block">
                <img src={{ $productDetail->image }} alt="Image" class="img-fluid">
              </a>
              
            </div>

          </div>
          <div class="col-md-6">
            <h2 class="text-black">{{ $productDetail->name }}</h2>
            @if(isset($categories))
              <h5><strong>{{ $categories[0]->name }}</strong></h5>
            @endif
            <h3><strong class="text-primary">$ {{ $productDetail->price }}</strong></h3>
            <p>{{ $productDetail->description }}</p>



            <form action="{{url('/add-cart')}}" method="POST">
              @csrf
              <div class="mb-5">
              
                <div class="input-group mb-3" style="max-width: 120px;">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                </div>
                <input type="text" class="form-control text-center" id="quantity" name="quantity" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                
                <div class="input-group-append">
                  <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                </div>
              </div>
              <input type="hidden" class="form-control text-center" id="product_name" name="product_name" value={{ $productDetail->name }}>
              <input type="hidden" class="form-control text-center" id="product_price" name="product_price" value={{ $productDetail->price }}>
              <input type="hidden" class="form-control text-center" id="product_image" name="product_image" value={{ $productDetail->image }}>
              </div>
              <p><input type="submit" name="submit" id="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" value="Add to cart"></a></p>

            </form>
            
          </div>

        </div>
      </div>
    </div>

    <div class="site-section block-3 site-blocks-2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Featured Products</h2>
          </div>
        </div>
        <div class="row">
          
              @if(isset($products)) 
                @foreach ($products as $product)
                    @include('layouts.partials.single-product', ['product' => $product, 'category' => $categories[0] ])
                @endforeach
              @else
              <p>Aucun produits pour le moment.</p>
              @endif

            
         
      
      </div>
    </div>

    @include('layouts.partials.footer')
    
  </body>
</html>