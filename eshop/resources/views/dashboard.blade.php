<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @include('layouts.partials.head')
    <div class="site-section">
        <div class="container">
  
          <div class="row mb-5">
            <div class="col-md-12 order-1">
  
              <div class="row align">
                <div class="col-md-12 mb-5">
                  <div class="float-md-left"><h2 class="text-black h5">Shop All</h2></div>
                  <div class="d-flex">
                    <div class="dropdown mr-1 ml-md-auto">
                      <button type="button" class="btn btn-white btn-sm dropdown-toggle px-4" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Latest
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                        <a class="dropdown-item" href="#">Men</a>
                        <a class="dropdown-item" href="#">Women</a>
                        <a class="dropdown-item" href="#">Children</a>
                      </div>
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-sm dropdown-toggle px-4" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                        <a class="dropdown-item" href="#">Relevance</a>
                        <a class="dropdown-item" href="#">Name, A to Z</a>
                        <a class="dropdown-item" href="#">Name, Z to A</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Price, low to high</a>
                        <a class="dropdown-item" href="#">Price, high to low</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-5">
  
                <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="{{ route('product-detail') }}" class="product-item md-height bg-gray d-block">
                    <img src="images/prod_2.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="{{ route('product-detail') }}">Gray Shoe</a></h2>
                  <strong class="item-price">$20.00</strong>
                </div>
                <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="{{ route('product-detail') }}" class="product-item md-height bg-gray d-block">
                    <img src="images/prod_3.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="{{ route('product-detail') }}">Blue Shoe High Heels</a></h2>
                  <strong class="item-price"><del>$46.00</del> $28.00</strong>
                </div>
  
                <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="{{ route('product-detail') }}" class="product-item md-height bg-gray d-block">
                    <img src="images/model_5.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="{{ route('product-detail') }}">Denim Jacket</a></h2>
                  <strong class="item-price"><del>$46.00</del> $28.00</strong>
  
                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
  
                </div>
                <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="{{ route('product-detail') }}" class="product-item md-height bg-gray d-block">
                    <img src="images/prod_1.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="{{ route('product-detail') }}">Leather Green Bag</a></h2>
                  <strong class="item-price"><del>$46.00</del> $28.00</strong>
                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
  
                <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="{{ route('product-detail') }}" class="product-item md-height bg-gray d-block">
                    <img src="images/model_1.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="{{ route('product-detail') }}">Smooth Cloth</a></h2>
                  <strong class="item-price"><del>$46.00</del> $28.00</strong>
                </div>
                <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="{{ route('product-detail') }}" class="product-item md-height bg-gray d-block">
                    <img src="images/model_7.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="{{ route('product-detail') }}">Yellow Jacket</a></h2>
                  <strong class="item-price">$58.00</strong>
                </div>
                <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="{{ route('product-detail') }}" class="product-item md-height bg-gray d-block">
                    <img src="images/prod_2.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="{{ route('product-detail') }}">Gray Shoe</a></h2>
                  <strong class="item-price">$20.00</strong>
                </div>
                <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="{{ route('product-detail') }}" class="product-item md-height bg-gray d-block">
                    <img src="images/prod_3.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="{{ route('product-detail') }}">Blue Shoe High Heels</a></h2>
                  <strong class="item-price"><del>$46.00</del> $28.00</strong>
                </div>
  
                <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="{{ route('product-detail') }}" class="product-item md-height bg-gray d-block">
                    <img src="images/model_5.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="{{ route('product-detail') }}">Denim Jacket</a></h2>
                  <strong class="item-price"><del>$46.00</del> $28.00</strong>
  
                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
  
                </div>
                <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="{{ route('product-detail') }}" class="product-item md-height bg-gray d-block">
                    <img src="images/prod_1.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="{{ route('product-detail') }}">Leather Green Bag</a></h2>
                  <strong class="item-price"><del>$46.00</del> $28.00</strong>
                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
  
                <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="{{ route('product-detail') }}" class="product-item md-height bg-gray d-block">
                    <img src="images/model_1.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="{{ route('product-detail') }}">Smooth Cloth</a></h2>
                  <strong class="item-price"><del>$46.00</del> $28.00</strong>
                </div>
                <div class="col-lg-6 col-md-6 item-entry mb-4">
                  <a href="{{ route('product-detail') }}" class="product-item md-height bg-gray d-block">
                    <img src="images/model_7.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="{{ route('product-detail') }}">Yellow Jacket</a></h2>
                  <strong class="item-price">$58.00</strong>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">
                  <div class="site-block-27">
                    <ul>
                      <li><a href="{{ route('product-detail') }}">&lt;</a></li>
                      <li class="active"><span>1</span></li>
                      <li><a href="{{ route('product-detail') }}">2</a></li>
                      <li><a href="{{ route('product-detail') }}">3</a></li>
                      <li><a href="{{ route('product-detail') }}">4</a></li>
                      <li><a href="{{ route('product-detail') }}">5</a></li>
                      <li><a href="{{ route('product-detail') }}">&gt;</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
  
            
          </div>
  
        </div>
      </div>
      
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
  
</x-app-layout>

