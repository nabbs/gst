@extends ('frontend.layouts.master')
@section('title', 'GST - Hajj')
@section ('content')
{{-- <section class="probootstrap-cover overflow-hidden relative" style="background-image: url('/images/hajj/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  
  <div class="container">
    <div class="row align-items-center text-center">
      <div class="col-md">
        
      </div>
    </div>
  </div>
</section> --}}

{{--       @if (count($hajjItems) === 0)
      no results
      @elseif (count($hajjItems) >= 1)
          @foreach($hajjItems as $item)
          {{$item}}
          @endforeach
      @endif --}}
<section class="probootstrap_section" id="hajj-results">
  
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center mb-3 probootstrap-animate fadeInUp probootstrap-animated">
        <h2 class="display-4 border-bottom probootstrap-section-heading"> <small class="text-muted"> <em>{{count($hajjItems)}} Hajj Packages Found</em></small></h2>
      </div>
    </div>
    <div class="row">
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
    </div>
    <div class="card-deck isotopeContainer">

    @foreach($hajjItems as $item)

      <div class="col-md-4 mb-5 item isotopeSelector @if($item->price > '6000')pricemore6000 @elseif ($item->price < '6000') priceless6000 @endif @if($item->mk_rating =='5') mk5star @endif @if ($item->md_rating =='5') md5star @endif @if ($item->mk_rating =='5' AND $item->md_rating =='5') 5star @endif">
        
        <div class="probootstrap-animate">
          <div class="card">
            <div class="card-img-top">        
                @if ($item->mk_hotel_image !==null and $item->md_hotel_image !==null)
                  <div class="owl-carousel hajj-slider">
                    <a href="{{$item->package_url}}"><img src="{{ $item->mk_hotel_image }}" alt=""></a>
                    <a href="{{$item->package_url}}"><img src="{{ $item->md_hotel_image }}" alt=""></a>
                  </div>
                  @elseif ($item->mk_hotel_image !==null and $item->md_hotel_image ==null)
                      <a href="{{$item->package_url}}"><img src="{{ $item->mk_hotel_image }}" alt=""></a>
                  @elseif ($item->mk_hotel_image ==null and $item->md_hotel_image !==null)
                      <a href="{{$item->package_url}}"><img src="{{ $item->md_hotel_image }}" alt=""></a>


                  @else
                      <a href="{{$item->package_url}}"> <img src="/images/default.jpg" alt=""></a>
                    
                @endif       
              
              <div class="img-layer">
                <p data-toggle="tooltip" data-placement="right" title="" data-original-title="Quad: £{{$item->mk_rm_quad_price}}, Triple: £{{$item->mk_rm_triple_price}}, Double £{{$item->mk_rm_double_price}}"> <em>from</em> <strong>&pound;{{ $item->price }}pp</strong> <i class="fa fa-info"></i></p>
                
              </div>
            </div>



            <div class="card-body">
              @if ($item->agent_logo =="")
              <p class="agentinfo green">Agent: <a href="{{$item->package_url}}" class="info">{{$item->agent_name}}</a></p>
              @else
              <p class="agentinfo green">Agent: <a href="{{$item->package_url}}"><img src="{{$item->agent_logo}}" alt="" width="200" height="30"></a></p>
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
              
              <p class="mt-3"> <a href="{{$item->package_url}}" class="btn btn-primary btn-block">Book with {{$item->agent_name}}</a> </p>
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