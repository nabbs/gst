@extends ('frontend.layouts.master')

@section('title', setting('titles.hajj'))

@section ('content')

@include('frontend.hajj.header')

<section class="probootstrap_section" id="search-results">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center mb-3 probootstrap-animate">
        <h2 class="probootstrap-section-heading"><small class="text-muted"><em id="totalItems">{{count($hajjItems)}}</em> Packages Found</small></h2>
        @if (Request('mk_rating') !==null or Request('md_rating') !==null)
        
        <small>for {{Request('mk_rating')}} Star Makkah and {{Request('md_rating')}} Star Madinah</small>
        @endif
        <div class="border"> <span class="border__inner"><i class="fas fa-cube defcolour"></i></span> </div>
      </div>
    </div>
    
    <div class="row">
      @if (count($hajjItems)>3)
      <div class="col-md-12 mb-3">
        <div class="isotopeFilters text-center probootstrap-animate">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#" data-filter="*" class="btn btn-primary active">All Results</a> </li>
            <li class="list-inline-item"><a href="#" data-filter=".5star" class="btn btn-primary">5 Star</a> </li>
            <li class="list-inline-item"><a href="#" data-filter=".mk5star" class="btn btn-primary">Makkah 5 Star</a> </li>
            <li class="list-inline-item"><a href="#" data-filter=".md5star" class="btn btn-primary">Madina 5 Star</a> </li>
            <li class="list-inline-item"><a href="#" data-filter=".priceless6000" class="btn btn-primary">Price Upto 6000 </a> </li>
            <li class="list-inline-item"><a href="#" data-filter=".pricemore6000" class="btn btn-primary">Price Above 6000  </a></li>
          </ul>
        </div>
      </div>
      @else
      <div class="col-md-12 mb-3 text-center">
        <ul class="list-inline">
          <li class="list-inline-item"><a href="/hajj" class="btn btn-primary">View All Hajj Packages</a> </li>
        </ul>
      </div>
      @endif
    </div>
    <div class="card-deck isotopeContainer">
      @foreach($hajjItems as $item)
      <div class="col-md-4 mb-5 item isotopeSelector @if($item->price > '6000')pricemore6000 @elseif ($item->price < '6000') priceless6000 @endif @if($item->mk_rating =='5') mk5star @endif @if ($item->md_rating =='5') md5star @endif @if ($item->mk_rating =='5' AND $item->md_rating =='5')5star @endif">
        
        <div class="probootstrap-animate">
          <a href="{{$item->package_url}}" target="_blank" style="display: block;" data-agent="{{$item->agent_name}} - Hajj">
          <div class="card">
            
            <div class="card-img-top">
              @if ($item->mk_hotel_image !==null and $item->md_hotel_image !==null)
              <div class="owl-carousel search-slider">
                <img src="{{ $item->mk_hotel_image }}" alt="">
                <img src="{{ $item->md_hotel_image }}" alt="">
              </div>
              @elseif ($item->mk_hotel_image !==null and $item->md_hotel_image ==null)
              <img src="{{ $item->mk_hotel_image }}" alt="">
              @elseif ($item->mk_hotel_image ==null and $item->md_hotel_image !==null)
              <img src="{{ $item->md_hotel_image }}" alt="">
              @else
               <img src="/images/default.jpg" alt="">
              
              @endif
              
              <div class="img-layer">
                <p data-toggle="tooltip" data-placement="right" title="" data-original-title="Quad: £{{$item->mk_rm_quad_price}}, Triple: £{{$item->mk_rm_triple_price}}, Double £{{$item->mk_rm_double_price}}"> <em>from</em> <strong>&pound;{{ $item->price }}pp</strong> <i class="fa fa-info"></i></p>
                
              </div>
            </div>
            <div class="card-body">
              @if ($item->agent_logo =="")
              <p class="agentinfo green">Agent: {{$item->agent_name}}</p>
              @else
              <p class="agentinfo green">Agent: <img src="{{$item->agent_logo}}" alt="" width="200" height="30"></p>
              @endif
              
              <p class="card-text"></p>
              <p>
                <span class="green d-block">Makkah Hotel: </span><span class="red">{{ $item->mk_hotel }}</span>
                @if ($item->mk_rating =='5')
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                @elseif ($item->mk_rating =='4')
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                @elseif ($item->mk_rating =='3')
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                @elseif ($item->mk_rating =='2')
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                @elseif ($item->mk_rating =='1')
                <i class="fa fa-star" aria-hidden="true"></i>
                @endif
              </p>
              
              <p>
                <span class="green d-block">Madina Hotel: </span><span class="red"> {{ $item->md_hotel }}</span>
                
                @if ($item->md_rating =='5')
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                @elseif ($item->md_rating =='4')
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                @elseif ($item->md_rating =='3')
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                @elseif ($item->md_rating =='2')
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                @elseif ($item->md_rating =='1')
                <i class="fa fa-star" aria-hidden="true"></i>
                @endif
                
              </p>
              
              <p class="mt-3"> <a href="{{$item->package_url}}" class="btn btn-primary btn-block" data-agent="{{$item->agent_name}} - Hajj" target="_blank" >Book with {{$item->agent_name}}</a> </p>
            </div>
            <div class="card-footer">
              <p>
                <i class="fa fa-bed" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{$item->md_rm_basis}}"></i>
                
                @if ($item->flights =="1")<i class="fa fa-plane" data-toggle="tooltip" data-placement="top" title="" data-original-title="Flights Included"></i>@endif
                
                <i class="fa fa-list showtooltip" ></i>
                <i class="fas fa-walking" data-toggle="tooltip" data-placement="top" title="" data-original-title="20 Meters from Haram"></i>
                <img src="/images/visa.png" width="30" style="margin:0 8px 8px 0;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Guaranteed Hajj Visa">
                <img src="/images/free.png" width="30" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free Ihram" style="margin:0 8px 8px 0;">
              </p>
              
            </div>
            
          </div>
          </a>
        </div>
      </div>
      @endforeach
    </div>
    {{-- <div class="text-center">
      {!!$hajjItems!!}
    </div> --}}
  </div>
</section>
@endsection