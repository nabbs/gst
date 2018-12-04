<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta name="_token" content="{{csrf_token()}}" />
  <meta name="description" content="{{setting('site.meta_description')}}" />
{{--   <meta name="owner" content="GoSearchTravel.com" /> <meta name="author" content="@GoSearchTravel" /> --}}
  @php
    $uri = Request::path();
  @endphp
  @if ($uri == 'flights' or $uri == 'hotels' or $uri == 'carhire' or $uri == 'holidays' or $uri == 'hajj' or $uri == 'umrah' or $uri == 'cruise') 
  <meta name="keywords" content="{{setting('site.meta_keywords_'.$uri)}}" />
  @else 
  <meta name="keywords" content="{{setting('site.meta_keywords')}}" />
  @endif

  @if (\Request::is('blog/*'))
  
    @include('frontend.blog.socialtags')

  @else

    @include('frontend.layouts.sw-socialtags')

  @endif
  {{--   @switch($uri)
    @case( 'flights' )
       <meta name="keywords" content="{{setting('site.meta_keywords_flights')}}">
      @break
    @case( 'hotels')
        <meta name="keywords" content="{{setting('site.meta_keywords_hotels')}}">
        @break
    @case( 'carhire')
        <meta name="keywords" content="{{setting('site.meta_keywords_carhire')}}">
        @break
    @case( 'holidays')
        <meta name="keywords" content="{{setting('site.meta_keywords_holidays')}}">
        @break
    @case( 'hajj')
        <meta name="keywords" content="{{setting('site.meta_keywords_hajj')}}">
        @break
    @case( 'umrah')
        <meta name="keywords" content="{{setting('site.meta_keywords_umrah')}}">
        @break
    @case( 'cruise')
        <meta name="keywords" content="{{setting('site.meta_keywords_cruise')}}">
        @break
    @default
        <meta name="keywords" content="{{ setting('site.meta_keywords')}}">

  @endswitch --}}
  <title>@yield('title')</title>
  <link rel="canonical" href="https://www.gosearchtravel.com/">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="/css/base.css" />
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90058788-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-90058788-1');
  </script>
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5HD9GKX');</script>
</head>