@extends ('frontend.layouts.master')

@section('title', 'GST - Umrah')

@section ('content')

@include('frontend.umrah.header')


<section class="probootstrap_section" id="search-results">

<div class="container">

  <div class="row justify-content-center">

    <div class="col-md-12 text-center mb-3 probootstrap-animate">

      <h2 class="probootstrap-section-heading"><small class="text-muted"><em id="totalItems"></em> Packages</small></h2>

      <div class="border"> <span class="border__inner"><i class="fas fa-hands defcolour"></i></span> </div>

    </div>

  </div>
  
  @include('frontend.umrah.filters')

    <div id="grid-view">
      
      <div class="card-deck isotopeContainer">

        @foreach($umrahItems as $item)

          @if ($item->publish =="1")
           
          <div class="col-md-4 mb-5 item isotopeSelector {{$item->total_nights}}night {!!str_replace(' ', '', $item->season)!!}">
          
            <div class="probootstrap-animate">

              <div class="card">
                
                <div class="card-img-top">

                  @include('frontend.umrah.images')

                </div>

                <div class="card-body"{{-- data-toggle="modal" data-target="#moreInfo" --}}>
                  
                  @include('frontend.umrah.body')

                </div>

                <div class="card-footer">
                  
                  @include('frontend.umrah.footer')
                  
                </div>
                
              </div>

            </div>

          </div>

        @endif

      @endforeach

    </div>

  </div>

  <div id="list-view" class="isotopeContainer">
    
         @foreach($umrahItems as $item)

          @if ($item->publish =="1")
        <div class="col-md-12 mb-5 item isotopeSelector {{$item->total_nights}}night {!!str_replace(' ', '', $item->season)!!}">

            <div class="probootstrap-animate">

            <div class="card">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <div style="width: 307px; height: 200px;">
                          @include('frontend.umrah.images')
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-block px-2">
                            @include('frontend.umrah.body')
                        </div>
                    </div>
                </div>
                <div class="card-footer w-100 text-muted">
                  @include('frontend.umrah.footer')
                </div>
            </div>

          </div>
         </div>

        @endif

      @endforeach
     
  </div>

</div>

@include('frontend.umrah.modal')

</section>

@endsection