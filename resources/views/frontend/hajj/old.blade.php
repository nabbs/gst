@extends ('frontend.layouts.master')
@section('title', 'GST - Hajj')
@section ('content')
{{-- <section class="probootstrap-cover overflow-hidden relative" style="background-image: url('/images/hajj/bg_1.jpg');" data-stellar-background-ratio="0.5" id="section-home">
  <div class="overlay"></div>
  
  <div class="container">
    <div class="row align-items-center text-center">
      <div class="col-md">
        
      </div>
    </div>
  </div>
</section> --}}
<section class="probootstrap_section" id="hajj-results">
  <style type="text/css" media="screen">
  #hajj-results h2 {
  color: #ff9900;
  font-size: 20px;
  text-transform: uppercase;
  font-weight: 400!important;
  font-family: "Open Sans", Arial, sans-serif!important;
  }
  #hajj-results h2 span {
  color: #4c71b1;
  }
  #hajj-results p {
    padding: 0;
    margin: 0;
  }
  .refine-options {
  background-color:#f8f8f8;
  border: 1px solid #ccc;
  }
  li.odd {
  background-color: #f8f8f8;
  border: 1px solid #ccc;
  }
  li.even {
  background-color: #fff;
  border: 1px solid #ccc;
  }
  .yellow_star {
  color: #F90;
  }
  #hajj-results .map {
  border: 1px solid #ccc;
  }
  #hajj-results .close {
  cursor: pointer;
  }
  </style>
  <div class="container">
    <div class="row mb-3 mt-4">
      <div class="col-md-3">
        <h2><span>REFINE</span> OPTIONS</h2>
      </div>
      <div class="col-md-9">

        <h2>Hajj <small class="text-muted"> <em>- {{$totalResults}} Packages Found</em></small></h2>
      </div>
    </div>
    <div class="row">      
        <div class="col-md-3 refine-options">

          <div class="panel panel-default ">
    <div class="panel-body hajj_filter_body">
          <div class="panel-body resetFilter">
            <p class="reset_filters"> Reset all filters </p>        
          </div>
          <div class="panel-body range_price">
            <h5 class="gp_heading_5"><b>PRICE</b></h5>     
            <input class="simple-slider" type="hidden" value="0,6000" style="display: none;"><div class="slider-container theme-green" style="width: 220px;"><span class="price_value">£0-£6000</span>      <div class="back-bar">                <div class="selected-bar" style="width: 220px; left: 0px;"></div>                <div class="pointer low" style="left: -6px;"></div><div class="pointer-label low" style="left: 0px;">0</div>                <div class="pointer high" style="left: 214px;"></div><div class="pointer-label high" style="left: 202.203px;">6000</div>                <div class="clickable-dummy"></div>            </div>            <div class="scale"><span style="left: 0%"><ins style="margin-left: -2.50781px;">£0</ins></span><span style="left: 16.7%"><ins style="margin-left: -10.0156px;">£1000</ins></span><span style="left: 33.4%"><ins style="margin-left: -10.0156px;">£2000</ins></span><span style="left: 50.099999999999994%"><ins style="margin-left: -10.0156px;">£3000</ins></span><span style="left: 66.8%"><ins style="margin-left: -10.0156px;">£4000</ins></span><span style="left: 83.5%"><ins style="margin-left: -10.0156px;">£5000</ins></span><span style="left: 100.19999999999999%"><ins style="margin-left: -10.0156px;">£6000</ins></span></div>   </div>           
          </div>
          <h5 class="gp_heading_5"><b>Makkah (Room Rating)</b></h5>
          <ul class="list-inline">
            <li><input class="makkah_hotel_type" type="checkbox" name="room_rating" value="2">
              <i class="fa fa-star yellow_star" aria-hidden="true"></i>
              <i class="fa fa-star yellow_star" aria-hidden="true"></i>
              <i class="fa fa-star-o" aria-hidden="true"></i>
              <i class="fa fa-star-o" aria-hidden="true"></i>
              <i class="fa fa-star-o" aria-hidden="true"></i>
            </li>
            <li><input class="makkah_hotel_type" type="checkbox" name="room_rating" value="3">
              <i class="fa fa-star yellow_star" aria-hidden="true"></i>
              <i class="fa fa-star yellow_star" aria-hidden="true"></i>
              <i class="fa fa-star yellow_star" aria-hidden="true"></i>
              <i class="fa fa-star-o" aria-hidden="true"></i>
              <i class="fa fa-star-o" aria-hidden="true"></i>
            </li>
            <li><input class="makkah_hotel_type" type="checkbox" name="room_rating" value="4">
              <i class="fa fa-star yellow_star" aria-hidden="true"></i>
              <i class="fa fa-star yellow_star" aria-hidden="true"></i>
              <i class="fa fa-star yellow_star" aria-hidden="true"></i>
              <i class="fa fa-star yellow_star" aria-hidden="true"></i>
              <i class="fa fa-star-o" aria-hidden="true"></i>
            </li>
            <li><input class="makkah_hotel_type" type="checkbox" name="room_rating" value="5">
              <i class="fa fa-star yellow_star" aria-hidden="true"></i>
              <i class="fa fa-star yellow_star" aria-hidden="true"></i>
              <i class="fa fa-star yellow_star" aria-hidden="true"></i>
              <i class="fa fa-star yellow_star" aria-hidden="true"></i>
              <i class="fa fa-star yellow_star" aria-hidden="true"></i>
            </li> 
          </ul>

    </div>
    <div class="panel-body">
      <h5 class="gp_heading_5"><b>Medina (Room Rating)</b></h5>
      <ul class="list-inline">
        <li><input class="medina_hotel_type" type="checkbox" name="medina_hotel_type" value="2">
          <i class="fa fa-star yellow_star" aria-hidden="true"></i>
          <i class="fa fa-star yellow_star" aria-hidden="true"></i>
          <i class="fa fa-star-o" aria-hidden="true"></i>
          <i class="fa fa-star-o" aria-hidden="true"></i>
          <i class="fa fa-star-o" aria-hidden="true"></i>
        </li>
        <li><input class="medina_hotel_type" type="checkbox" name="medina_hotel_type" value="3">
          <i class="fa fa-star yellow_star" aria-hidden="true"></i>
          <i class="fa fa-star yellow_star" aria-hidden="true"></i>
          <i class="fa fa-star yellow_star" aria-hidden="true"></i>
          <i class="fa fa-star-o" aria-hidden="true"></i>
          <i class="fa fa-star-o" aria-hidden="true"></i>
        </li>
        <li><input class="medina_hotel_type" type="checkbox" name="medina_hotel_type" value="4">
          <i class="fa fa-star yellow_star" aria-hidden="true"></i>
          <i class="fa fa-star yellow_star" aria-hidden="true"></i>
          <i class="fa fa-star yellow_star" aria-hidden="true"></i>
          <i class="fa fa-star yellow_star" aria-hidden="true"></i>
          <i class="fa fa-star-o" aria-hidden="true"></i>
        </li>
        <li><input class="medina_hotel_type" type="checkbox" name="medina_hotel_type" value="5">
          <i class="fa fa-star yellow_star" aria-hidden="true"></i>
          <i class="fa fa-star yellow_star" aria-hidden="true"></i>
          <i class="fa fa-star yellow_star" aria-hidden="true"></i>
          <i class="fa fa-star yellow_star" aria-hidden="true"></i>
          <i class="fa fa-star yellow_star" aria-hidden="true"></i>
        </li>
      </ul>

    </div>
    <div class="panel-body">
      <h5 class="gp_heading_5"><b>Room type</b></h5>
      <ul class="list-inline">
        <li><input type="checkbox" name="room_type" class="room_type" value="quad(4)">Quad</li>
        <li><input type="checkbox" name="room_type" class="room_type" value="triple(3)">Triple</li>
        <li><input type="checkbox" name="room_type" class="room_type" value="double(2)">Double</li>
      </ul>
    </div>
    <div class="panel-body room_basis">
      <h5 class="gp_heading_5"><b>Room Basis</b></h5>
      <ul class="list-inline">
        <li><input type="checkbox" name="room_basis" class="room_basis" value="shifting"> Shifting</li>
        <li><input type="checkbox" name="room_basis" class="room_basis" value="full_board"> Full Board</li>
        <li><input type="checkbox" name="room_basis" class="room_basis" value="half_board"> Half Board</li>
        <li><input type="checkbox" name="room_basis" class="room_basis" value="room_only"> Room Only</li>      
      </ul>            
    </div>
    <div class="panel-body room_basis">
      <h5 class="gp_heading_5"><b>Flight Included</b></h5>
      <ul class="list-inline">
        <li><input type="checkbox" name="flight_included" class="flight_included" value="1"> Yes</li> 
        <li><input type="checkbox" name="flight_included" class="flight_included" value="0"> No</li>           
      </ul>            
    </div>
  <div class="clearfix"></div>
  </div>
      </div>
      <div class="col-md-9">
        <ul class="list-inline">
          @foreach($hajjItems as $item)
          <li class="p-3 mb-4 @if($loop->iteration % 2 == 0)even mt-3 @else odd @endif">
            <div class="row">
              <div class="col-md-4">
                <a href="{{ $item->package_url }}"><img src="../storage/{{ $item->agent_logo }}" width="100%"></a>
              </div>
              <div class="col-md-8 details">
                <p>Makkah Hotel </p>                
                <p>
                  <span><a href="#" class="showMap">{{ $item->mk_hotel }}</a></span>
                  @if ($item->mk_rating =='5')
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  @elseif ($item->mk_rating =='4')
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  @elseif ($item->mk_rating =='3')
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  @elseif ($item->mk_rating =='2')
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  @elseif ($item->mk_rating =='1')
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  @endif                  
                </p>

                <p>Madina Hotel</p>

                <p>
                  <span><a href="#" class="showMap">{{ $item->md_hotel }}</a></span>
                  @if ($item->md_rating =='5')
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  @elseif ($item->md_rating =='4')
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  @elseif ($item->md_rating =='3')
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  @elseif ($item->md_rating =='2')
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  @elseif ($item->md_rating =='1')
                  <i class="fa fa-star yellow_star" aria-hidden="true"></i>
                  @endif                  
                </p>

              </div>
            </div>
            <div class="row viewMap" style="display: none;">
              <div id="{{$item->id}}" class="col-md-12 pt-4">
                <div class="map">
                  <div class="row p-3">
                    <div class="col-md-8"><strong>Makkah Hotel Address</strong></div>
                    <div class="col-md-4">
                      <span class="close">x</span>
                    </div>
                  </div>
                  <div>
                    <iframe width="100%" height="270" frameborder="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=&amp;z=14&amp;output=embed"></iframe>
                  </div>                  
                </div>                
              </div>
            </div>

          </li>
          @endforeach
        </ul>
      </div>
    </div>    
  </div>
</section>
@endsection