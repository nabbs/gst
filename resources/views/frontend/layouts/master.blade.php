  <!DOCTYPE html>
  <html lang="en">
    @include('frontend.layouts.header')
    <body>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5HD9GKX"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      @include('frontend.layouts.nav')

          @yield ('content')
 
          
       @include('frontend.layouts.footer')

       @include('frontend.layouts.scripts')
    </body>

  </html>