<!doctype html>
<html lang="en">
  <head>
    @include('CarRental.includes.head')

  </head>
{{--  --}}
  <body>
  
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

@include('CarRental.includes.header')

     

 @include('CarRental.includes.container')



 @yield('content')
      @include('CarRental.includes.footer')

    </div>

@include('CarRental.includes.js')

  </body>

</html>

