

<section class="probootstrap_section" id="hotdeals">

  <div class="container">

    <div class="row text-center mb-3">

      <div class="col-md-12">

        <h2 class="display-4 border-bottom probootstrap-section-heading">Hot Deals</h2>
        <p>Checkout the latest deals. Choose your next get away!</p>

      </div>

    </div>

    <div class="row mb-5">

      @foreach($hotdeals as $hotdeal)

      @if ($hotdeal->published !==0)      

      <div class="col-sm-4">

          <div class="package-wiget">

            <div class="grid">

              <figure class="effect-milo">

                <a href="{{ $hotdeal->link }}" data-agent="HotDeals - {{ $hotdeal->title }} - {{$hotdeal->agent_name}}">
                  @if($hotdeal->image=='')
                  <img class="img-responsive" src="../images/default.jpg" alt="{!!$hotdeal->heading!!}">
                  @else
                  <img class="img-responsive" src="{{ $hotdeal->image }}" alt="{!!$hotdeal->heading!!}">
                  @endif
                </a>

                <figcaption>

                  <div class="effect-block">

                    <h3>{!!$hotdeal->heading!!}</h3>
                    {{-- <div class="package-rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div> --}}
                    {{-- <div>
                      {!!$hotdeal->description!!}
                    </div> --}}
                     <a href="{{ $hotdeal->link }}" class="btn btn-primary" target="_blank" data-agent="HotDeals - {{ $hotdeal->title }} - {{$hotdeal->agent_name}}">{{ $hotdeal->button }}</a>
                  </div>

                </figcaption>

              </figure>

            </div>
            
            <div class="package-content">
              <a href="{{ $hotdeal->link }}" target="_blank" data-agent="HotDeals - {{ $hotdeal->title }} - {{$hotdeal->agent_name}}">
              <h5>{{ $hotdeal->title }}</h5>
              @if ($hotdeal->price != '')              
              <div class="package-price">from <span class="price"> <span class="amount">&pound;{{ $hotdeal->price }}</span> </span> /{{ $hotdeal->duration }} </div>

              @else 

              <div class="package-price"><span class="price"> <span class="amount">{{ $hotdeal->promo_text }}</span> </span> 

                 @if ($hotdeal->duration != '')
                  /{{ $hotdeal->duration }}
                 @endif  
             </div>
              @endif


              </a>
            </div>
          </div>
        </div>

        @endif

        @endforeach
    </div>
  </div>
</section>