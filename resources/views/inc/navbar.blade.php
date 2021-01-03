<div class="site-navbar py-2">
  <div class="search-wrap">
    <div class="container">
      <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
      <form action="/search" class="search-job" method="POST">
        @csrf
        <input type="text" name="name" class="form-control" placeholder="Search keyword and hit enter...">
      </form>
    </div>
  </div>

    <div class="container">
      <div class="d-flex align-items-center justify-content-between">
        <div class="logo">
          <div class="site-logo">
            <a href="index.html" class="js-logo-clone">Pharma</a>
          </div>
        </div>
        <div class="main-nav d-none d-lg-block">
          <nav class="site-navigation text-right text-md-center" role="navigation">
            <ul class="site-menu js-clone-nav d-none d-lg-block">
              <li class="active"><a href="{{route('home')}}">Home</a></li>
              <li class="has-children">
                <a href="#">Store</a>
                <ul class="dropdown">
                  <li><a href="#">Supplements</a></li>
                  <li class="has-children">
                    <a href="#">Vitamins</a>
                    <ul class="dropdown">
                      <li><a href="#">Supplements</a></li>
                      <li><a href="#">Vitamins</a></li>
                      <li><a href="#">Diet &amp; Nutrition</a></li>
                      <li><a href="#">Tea &amp; Coffee</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Diet &amp; Nutrition</a></li>
                  <li><a href="#">Tea &amp; Coffee</a></li>
                  
                </ul>
              </li>
              @guest
              <li><a href="{{route('login')}}">Login</a></li>
              <li><a href="{{route('register')}}">Register</a></li>
              @endguest
              @auth
              <li><a href="{{route('logout')}}">Logout</a></li>
              @if (auth()->user()->type=="admin")
              <li style="background-color:black;"><a href="{{route('products.create')}}" style="color:white;">Add Medicine</a></li>
              <li style="background-color:red;"><a href="{{route('products.delete')}}" style="color:white;">Remove Medicine</a></li>
              @endif
              @endauth
            </ul>
          </nav>
        </div>
        <div class="icons">
          <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
          <a href="{{route('cart')}}" class="icons-btn d-inline-block bag">
            <span class="icon-shopping-bag"></span>
            <span class="number"> 
              @auth
              {{Cart::session(auth()->id())->getContent()->count()}}
          @endauth
          @guest
              {{'0'}}
          @endguest</span>
          </a>
          <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
              class="icon-menu"></span></a>
        </div>
      </div>
    </div>
  </div>