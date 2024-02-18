<!doctype html>
<html lang="en">

  <head>
   @include('CarRental.includes.head')

  </head>

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



{{-- Main_page --}}
    
   @include('CarRental.includes.Main_page')

      {{-- How it works? --}}
      @include('CarRental.includes.How_it_works')
      


      {{-- Meet them now --}}
   @include('CarRental.includes.Meet_them_now')
      
      {{-- Car Listings --}}
  @include('CarRental.includes.CarListings')
    {{-- Features --}}
    @include('CarRental.includes.Features')

    {{-- Testimonials --}}
@include('CarRental.includes.Testimonials')


{{-- blueBar --}}
@include('CarRental.includes.blueBar')

       {{-- footer --}}
    @include('CarRental.includes.footer')
    </div>
{{-- js --}}
    @include('CarRental.includes.js')

  </body>

</html>

