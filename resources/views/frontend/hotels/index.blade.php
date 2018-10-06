@extends ('frontend.layouts.master')

@section('title', 'Search and Compare Hotels for the best deals at GoSearchTravel.com | GST ')

@section ('content')

@include('frontend.hotels.header')

<section class="probootstrap_section">

  <div class="row">

    <div class="col-sm-9 col-md-9 col-lg-9">

      <div class="container">

      <h2 class="heading text-center probootstrap-animate" title="Popular Destinations - hotels from around the world">Popular Destinations</h2>

      <div class="border"> <span class="border__inner"><i class="fas fa-globe-asia defcolour"></i></span></div>

      <div class="hotel-select probootstrap-animate" title="5 Star Hotels in Thailand, SeaView Hotels, Luxury Hotels">

        <h3>Thailand</h3>

        <script async src="//www.travelpayouts.com/blissey/scripts_en.js?categories=5stars%2Csea_view%2Cluxury&id=30553&type=compact&currency=gbp&host=hotels.gosearchtravel.com%2Fhotels&marker=129036.&limit=4&powered_by=false&powered_by=false&powered_by=false&powered_by=false&powered_by=false&powered_by=false" charset="UTF-8"></script>

      </div>

      {{-- banner ad  --}}

      <div id="topBanner" class="mt-5 mb-5 text-center"></div>

      {{-- end banner ad --}}

      <div class="hotel-select probootstrap-animate" title="5 Star Hotels in Dubai, Lake View Hotels, Hotels in the City Centre">

        <h3>Dubai</h3>

        <script async src="//www.travelpayouts.com/blissey/scripts_en.js?categories=5stars%2Clake_view%2Ccenter&id=25495&type=compact&currency=gbp&host=hotels.gosearchtravel.com%2Fhotels&marker=129036.&limit=4&powered_by=false&powered_by=false&powered_by=false&powered_by=false&powered_by=false" charset="UTF-8"></script>

      </div>

      <h2 class="heading text-center probootstrap-animate" title="Recommended Hotels at GoSearchTravel in Turkey, Las Vegas, Osaka, Sydney and many more.">Recommended Hotels</h2>

      <div class="border"> <span class="border__inner"><i class="fas fa-hotel defcolour"></i></span> </div>

      <div class="row probootstrap-animate fadeInUp">

        <div class="mb-3 col-md-6" title="Hilton Bomonti - Istanbul Turkey, Luxurious Vibe, Service Professionalism">
          <script charset="utf-8" async src="//www.travelpayouts.com/chansey/iframe.js?hotel_id=3915276&locale=en&host=hotels.gosearchtravel.com%2Fhotels&marker=129036.&currency=gbp&powered_by=false&powered_by=false&powered_by=false&powered_by=false"></script>
        </div>

        <div class="mb-3 col-md-6" title="New York New York - Las Vegas, United States, Friendly Atmosphere, Shopping">

          <script charset="utf-8" async src="//www.travelpayouts.com/chansey/iframe.js?hotel_id=345838&locale=en&host=hotels.gosearchtravel.com%2Fhotels&marker=129036.&currency=gbp&powered_by=false&powered_by=false&powered_by=false"></script>

        </div>
      </div>
      <div class="row probootstrap-animate fadeInUp">

        <div class="mb-3 col-md-6" title="Hotel New Hankyu - Osaka, Japan - Close to Airport, Accessibility by car, Shopping, Close to Public Transport">

          <script charset="utf-8" async src="//www.travelpayouts.com/chansey/iframe.js?hotel_id=359956&locale=en&host=hotels.gosearchtravel.com%2Fhotels&marker=129036.&currency=gbp&powered_by=false&powered_by=false"></script>

        </div>

        <div class="mb-3 col-md-6" title="Sydney Harbour Marriott Hotel at Circular Quay - Sydney, Australia - Sightseeing, Service Friendliness, Good View, Room Cleanliness">

          <script charset="utf-8" async src="//www.travelpayouts.com/chansey/iframe.js?hotel_id=29143&locale=en&host=hotels.gosearchtravel.com%2Fhotels&marker=129036.&currency=gbp&powered_by=false"></script>

        </div>

      </div>

    </div>

    {{-- ads by google  --}}

    <div class="mt-lg-5 mb-lg-5">

        <div class="ad-block"></div>

    </div>

    {{-- end ads by google  --}}

    </div>
    <div class="col-sm-3 col-md-3 col-lg-3">

      @include('frontend.layouts.adblock')

    </div>

  </div>

</section>

@endsection