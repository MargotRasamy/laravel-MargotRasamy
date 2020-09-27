<div class="site-wrap">
    <div class="site-navbar bg-white py-2">
      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>  
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="{{ route('homepage') }}" class="js-logo-clone">ShopMax</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li>
                  <a href="{{ route('homepage') }}">Home</a>
                </li>
                
                <li><a href="{{ route('products-list') }}">Shop</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="{{ url('/register') }}" class="icons-btn d-inline-block"><span class="icon-user"></span></a>
            <a href="cart.html" class="icons-btn d-inline-block bag">
              {{-- <span class="icon-shopping-bag"></span> --}}
              {{-- <span class="number">2</span> --}}
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>