@extends ('frontend.layouts.master')

@section('title', 'GST - Flights')

@section ('content')

@include('frontend.flights.header')

<section class="probootstrap_section">

  <div class="row">

    <div class="col-sm-10 col-md-10 col-lg-10">

      <div class="container">

        <h2 class="heading text-center probootstrap-animate" title="Low Fare Calender - The best airfares for a year ahead">Low Fare Calendar</h2>

        <p class="text-center"> The best airfares for a year ahead</p>

        <div class="border"> <span class="border__inner"><i class="fas fa-calendar defcolour"></i></span> </div>

        <script charset="utf-8" src="//www.travelpayouts.com/calendar_widget/iframe.js?marker=129036.&origin=LON&destination=BKK&currency=gbp&searchUrl=flights.gosearchtravel.com%2Fflights&one_way=false&only_direct=false&locale=en&period=year&range=7%2C14&powered_by=false" async></script>

        {{-- banner ad  --}}

        <p align="center" class="mt-lg-5"><a href="https://scripts.affiliatefuture.com/AFClick.asp?affiliateID=343230&merchantID=2401&programmeID=6921&mediaID=155870&tracking=&afsource=10&url="" target="_blank"><img border="0" src="https://banners.affiliatefuture.com/2401/155870.gif"></a></p>

        {{-- end banner ad --}}


        <h2 class="heading text-center probootstrap-animate mt-5">Popular Destinations</h2>

        <div class="border"> <span class="border__inner"><i class="fas fa-plane defcolour"></i></span> </div>

        <div class="row mb-4">

          <div class="col-md-3">

          <script async src="//www.travelpayouts.com/weedle/widget.js?marker=129036&host=flights.gosearchtravel.com&locale=en&currency=gbp&destination=DXB&destination_name=Dubai" charset="UTF-8"></script>

          </div>

          <div class="col-md-3">

            <script async src="//www.travelpayouts.com/weedle/widget.js?marker=129036&host=flights.gosearchtravel.com&locale=en&currency=gbp&destination=LHE&destination_name=Lahore" charset="UTF-8"></script>

          </div>

          <div class="col-md-3">

            <script async src="//www.travelpayouts.com/weedle/widget.js?marker=129036&host=flights.gosearchtravel.com&locale=en&currency=gbp&destination=NYC&destination_name=NewYork" charset="UTF-8"></script>

          </div>

          <div class="col-md-3">

            <script async src="//www.travelpayouts.com/weedle/widget.js?marker=129036&host=flights.gosearchtravel.com&locale=en&currency=gbp&destination=SYD&destination_name=Australia" charset="UTF-8"></script>

          </div>

        </div>
        
        <div class="row mb-5">

          <div class="col-md-3">

            <script async src="//www.travelpayouts.com/weedle/widget.js?marker=129036&host=flights.gosearchtravel.com&locale=en&currency=gbp&destination=LAX&destination_name=LosAngeles" charset="UTF-8"></script>

          </div>

          <div class="col-md-3">

            <script async src="//www.travelpayouts.com/weedle/widget.js?marker=129036&host=flights.gosearchtravel.com&locale=en&currency=gbp&destination=BKK&destination_name=Bangkok" charset="UTF-8"></script>

          </div>

          <div class="col-md-3">

            <script async src="//www.travelpayouts.com/weedle/widget.js?marker=129036&host=flights.gosearchtravel.com&locale=en&currency=gbp&destination=ROM&destination_name=Rome" charset="UTF-8"></script>

          </div>

          <div class="col-md-3">

            <script async src="//www.travelpayouts.com/weedle/widget.js?marker=129036&host=flights.gosearchtravel.com&locale=en&currency=gbp&destination=tyo&destination_name=Tokyo" charset="UTF-8"></script>

          </div>

        </div>

      </div>

      
    {{-- ads by google  --}}

    <div class="mt-lg-5 mb-lg-5">

        {!!setting('site.google_adsense')!!}

    </div>

    {{-- end ads by google  --}}

    </div>

    <div class="col-sm-2 col-md-2 col-lg-2">

      @include('frontend.layouts.adblock')


    </div>

  </div>

</section>

@endsection