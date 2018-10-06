@extends ('frontend.layouts.master')
@section('title', 'Cruise Search Results at GoSearchTravel.com')
@section ('content')

@include('frontend.cruise.header')
<section class="probootstrap_section" id="search-results">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center mb-3 probootstrap-animate fadeInUp probootstrap-animated">
        @if (count($cruiseItems) > 0)
        <h2>Records {{ $cruiseItems->firstItem() }} - {{ $cruiseItems->lastItem() }} of {{ $cruiseItems->total() }} for <em>{{$query}} in {{$operator}}</em></h2>
        @else 
          <p>no results found for {{$query}}</p>
        @endif
      </div>
    </div>
    @if (count($cruiseItems) > 0)
    <div class="card-deck">
      @foreach($cruiseItems as $item)
      <div class="col-md-4 mb-5">
        
        <div class="probootstrap-animate">
          <div class="card">
            <div class="card-img-top">
              <div>
                @if ($item->merchant_image_url !==null)
                <a href="{{$item->aw_deep_link}}" target="_blank" data-agent="{{$item->merchant_name}} - Cruises Section - {{$item->merchant_category}}"><img src="{{ $item->merchant_image_url }}" alt=""></a>
                @else
                <a href="{{$item->aw_deep_link}}" target="_blank"> <img src="/images/default.jpg" alt=""></a>
                @endif
              </div>
              
              <div class="img-layer">
                <p data-toggle="tooltip" data-placement="right" title="" data-original-title=""> <em>from</em> <strong>&pound{!!str_replace('GBP', '', $item->display_price )!!}</strong> <i class="fa fa-info"></i></p>
                
              </div>
            </div>
            <div class="card-body">
              @php
                $truncDesc = str_limit($item->description, 154);
              @endphp
              <h5 class="mb-3 name">{!!$item->product_name!!}</h5>
              <p class="mb-3 desc">{!!$truncDesc!!}</p>
              @if ($item->merchant_name !==null)
              <p class="agentinfo green">Operator: <a href="{{$item->aw_deep_link}}" class="info" target="_blank" data-agent="{{$item->merchant_name}} - Cruises - {{$item->merchant_category}}">{{$item->merchant_name}}</a></p>
              @endif
               <p><span class="agentinfo green">Type:</span> {{$item->merchant_category}}</p>
              <p class="card-text"></p>
              <p class="mt-3"> <a href="{{$item->aw_deep_link}}" class="btn btn-primary btn-block" target="_blank" data-agent="{{$item->merchant_name}} - Cruises - {{$item->merchant_category}}">Book with {{$item->merchant_name}}</a> </p>
            </div>
            <div class="card-footer">
              <p>
                <i class="fa fa-bed" data-toggle="tooltip" data-placement="top" title="" data-original-title=""></i>
                
                @if ($item->flights =="1")<i class="fa fa-plane" data-toggle="tooltip" data-placement="top" title="" data-original-title="Flights Included"></i>@endif
                
                <i class="fa fa-list showtooltip" ></i>
                <i class="fas fa-walking" data-toggle="tooltip" data-placement="top" title="" data-original-title="20 Meters from Haram"></i>
                <img src="/images/visa.png" width="30" style="margin:0 8px 8px 0;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Guaranteed Hajj Visa">
                <img src="/images/free.png" width="30" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free Ihram" style="margin:0 8px 8px 0;">
              </p>
              
            </div>
          </div>
        </div>
      </div>
      @endforeach
      
    </div>
    <div class="row text-center">
      <div class="col-md-12">{{ $cruiseItems->appends(request()->except(['page','_token']))}}</div>
    </div>
    @endif
  </div>
</section>
@endsection