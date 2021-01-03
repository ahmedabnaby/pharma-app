<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Pharma - We Sell Medicines</title>
        <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('pharma/fonts/icomoon/style.css')}}">

        <link rel="stylesheet" href="{{ asset('pharma/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('pharma/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{ asset('pharma/css/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{ asset('pharma/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('pharma/css/owl.theme.default.min.css')}}">


        <link rel="stylesheet" href="{{ asset('pharma/css/aos.css')}}">

        <link rel="stylesheet" href="{{ asset('pharma/css/style.css')}}">
        <style>
          html{
            scroll-behavior: smooth;
          }
        </style>
        @yield('extracss')
    </head>
    @include('inc.navbar')
    <body>
        @yield('content')

        <footer class="site-footer">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
      
                  <div class="block-7">
                    <h3 class="footer-heading mb-4">About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
                      sed dolorum excepturi iure eaque, aut unde.</p>
                  </div>
      
                </div>
                <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
                  <h3 class="footer-heading mb-4">Quick Links</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Supplements</a></li>
                    <li><a href="#">Vitamins</a></li>
                    <li><a href="#">Diet &amp; Nutrition</a></li>
                    <li><a href="#">Tea &amp; Coffee</a></li>
                  </ul>
                </div>
      
                <div class="col-md-6 col-lg-3">
                  <div class="block-5 mb-5">
                    <h3 class="footer-heading mb-4">Contact Info</h3>
                    <ul class="list-unstyled">
                      <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                      <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                      <li class="email">emailaddress@domain.com</li>
                    </ul>
                  </div>
      
      
                </div>
              </div>
              <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                  <p>
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> All rights reserved
                  </p>
                </div>
      
              </div>
            </div>
          </footer>
    </body>

    <script src="{{ asset('pharma/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('pharma/js/jquery-ui.js')}}"></script>
    <script src="{{ asset('pharma/js/popper.min.js')}}"></script>
    <script src="{{ asset('pharma/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('pharma/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('pharma/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('pharma/js/aos.js')}}"></script>
  
    <script src="{{asset('pharma/js/main.js')}}"></script>
</html>
