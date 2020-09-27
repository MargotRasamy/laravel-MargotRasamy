@include('layouts.partials.head')

@if(isset($isLoggedIn))
      @include('navigation-dropdown')
  @else
      @include('layouts.partials.header')
  @endif

<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href={{ route('homepage') }}>Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <form class="col-md-12" method="post">
          <div class="site-blocks-table">

        @if(isset($productName) && $quantityProducts >= 1)
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="product-thumbnail">Image</th>
                  <th class="product-name">Product</th>
                  <th class="product-price">Price</th>
                  <th class="product-quantity">Quantity</th>
                  <th class="product-remove">Remove</th>
                </tr>
              </thead>
              <tbody>


             
                  @include('layouts.partials.product-added', ['productImage' => $productImage,'productName' => $productName,'productPrice' => $productPrice ])
             
                  
                
              
              </tbody>
            </table>
            @else
              <h6>You have no products added to the cart yet.</h6>
            @endif

          </div>
        </form>
      </div>

      <div class="row">
        <div class="col-md-6">
          
          
        </div>
        <div class="col-md-6 pl-5">
          <div class="row justify-content-end">
            <div class="col-md-7">
          
              

              <div class="row">
                <div class="col-md-12">
                  <button class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout.html'">Buy now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('layouts.partials.footer')