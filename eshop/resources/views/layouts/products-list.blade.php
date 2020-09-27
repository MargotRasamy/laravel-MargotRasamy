<!DOCTYPE html>
<html lang="en">
  @include('layouts.partials.head')

  <body>
  
    @include('layouts.partials.header')
    
    <div class="site-blocks-cover inner-page" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Summer Collection 2019</h2>
            <h1>Arrivals Sales</h1>
            <p><a href=# class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="/../images/model_4.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{ route('homepage') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-12 order-1">

            <div class="row align">
              <div class="col-md-12 mb-5">
                <div class="float-md-left"><h2 class="text-black h5">Shop All</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    <button type="button" class="btn btn-black btn-sm dropdown-toggle px-4" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Sort price
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      @if (isset($category)) 
                        <a class="dropdown-item" href="{{ route('categories-products-listed', [ 'id' => $category->id, 'request' =>  'lowtohigh']) }}">Low to high</a>
                        <a class="dropdown-item" href="{{ route('categories-products-listed', [ 'id' => $category->id, 'request' =>  'hightolow']) }}">High to low</a>
                      @else
                        <a class="dropdown-item" href="{{ route('products-listed', ['request' =>  'lowtohigh']) }}">Low to high</a>
                        <a class="dropdown-item" href="{{ route('products-listed', ['request' =>  'hightolow']) }}">High to low</a>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-5">

{{-- 
              @for ($i = 0; $i < 24; $i++)
                 @include('layouts.partials.single-product', ['product' => $products]) 
              @endfor --}}

              @if(isset($category)) 
                @foreach ($products as $product)
                    @include('layouts.partials.single-product', ['product' => $product, 'category' => $category])
                @endforeach
              @elseif(isset($products) && !isset($category) && isset($categories)) 
                @foreach ($products as $i=>$product)
                  @include('layouts.partials.single-product', ['product' => $product, 'category' => $categories[$i]])
                @endforeach
              @else
              <p>Aucun produits pour le moment.</p>
              @endif
              

            </div>
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  {{-- <ul>
                    <li><a href='{{ route('product-detail', $product->id ) }}'>&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href='{{ route('product-detail', $product->id ) }}'>2</a></li>
                    <li><a href='{{ route('product-detail', $product->id ) }}'>3</a></li>
                    <li><a href='{{ route('product-detail', $product->id ) }}'>4</a></li>
                    <li><a href='{{ route('product-detail', $product->id ) }}'>5</a></li>
                    <li><a href='{{ route('product-detail', $product->id ) }}'>&gt;</a></li>
                  </ul> --}}
                </div>
              </div>
            </div>
          </div>

          
        </div>

      </div>
    </div>

    

    @include('layouts.partials.footer')

  
  </body>
</html>