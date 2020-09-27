<x-app-layout>
    
        <x-slot name="header">
          
    
            </x-slot> 
            
      @include('layouts.partials.head')
     
      <div class="site-blocks-cover" data-aos="fade">
            <div class="container">
              <div class="row">
                <div class="col-md-6 ml-auto order-md-2 align-self-start">
                  <div class="site-block-cover-content">
                  <h2 class="sub-title">#New Summer Collection 2019</h2>
                  <h1>Arrivals Sales</h1>
                  <p><a href="{{ route('products-list') }}" class="btn btn-black rounded-0">Shop Now</a></p>
                  </div>
                </div>
                <div class="col-md-6 order-1 align-self-end">
                  <img src="/images/model_3.png" alt="Image" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
      
          <div class="site-section">
            <div class="container">
              <div class="title-section mb-5">
                <h2 class="text-uppercase"><span class="d-block">Discover</span> The Collections</h2>
              </div>
              <div class="row align-items-stretch">
      
                @if(isset($categories))
                  @for ($i = 0; $i < count($categories); $i++)
                    @include('layouts.partials.single-category', ['category' => $categories[$i]])
                  @endfor
                @else
                <p>Aucune catégorie pour le moment.</p>
      
                @endif
              </div>
            </div>
            {{-- <p><a href="{{ route('products-list') }}" class="btn btn-black rounded-0 col-2 offset-5 mt-3">SEE ALL CATEGORIES</a></p> --}}
          </div>
      
          
          <div class="site-section">
            <div class="container">
              <div class="row">
                <div class="title-section mb-5 col-12">
                  <h2 class="text-uppercase">Popular Products</h2>
                </div>
              </div>
      
              
              <div class="row">
                @if(isset($products))
                  @for ($i = 0; $i < 6; $i++)
                    @include('layouts.partials.single-product', ['product' => $products[$i], 'category' => $categoriesBind[$i]])
                  @endfor
                @else
                <p>Aucun produits pour le moment.</p>
                @endif
                
              </div>
              <p><a href="{{ route('products-list') }}" class="btn btn-black rounded-0 col-4 offset-4 mt-3">SEE ALL PRODUCTS</a></p>
            </div>
          </div>
      
          <div class="site-blocks-cover inner-page py-5" data-aos="fade">
            <div class="container">
              <div class="row">
                <div class="col-md-6 ml-auto order-md-2 align-self-start">
                  <div class="site-block-cover-content">
                  <h2 class="sub-title">#New Summer Collection 2019</h2>
                  <h1>New Shoes</h1>
                  <p><a href="{{ route('products-list') }}" class="btn btn-black rounded-0">Shop Now</a></p>
                  </div>
                </div>
                <div class="col-md-6 order-1 align-self-end">
                  <img src="/images/model_6.png" alt="Image" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
      
  
</x-app-layout>

