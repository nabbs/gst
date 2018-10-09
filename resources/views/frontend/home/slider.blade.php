<section id="home-slider">
<h1 class="text-hide" style="text-indent: -10000px; padding: 0; margin: 0;">Hero Promo Slider. Flights and Hotels to cities around the world. </h1>
<div class="master-slider" id="masterslider">
  @foreach($sliders as $slider)

    <div class="ms-slide" data-url="{{$slider->main_url}}">

     <img class="main-image" src="/images/blank.gif" data-src="{{$slider->main_image}}" alt="{{ $slider->title}}">

    <h3 class="ms-layer text-uppercase g-pos-rel g-line-height-1 g-font-weight-700 g-font-size-35 g-font-secondary g-color-white g-mb-10" data-type="text" data-delay="10" data-effect="skewright(50, 340)" data-ease="easeOutExpo" data-duration="2200">{{ $slider->title}}</h3>

   {{--  <div class="ms-layer u-ribbon-v1 text-uppercase g-pos-rel g-line-height-1_2 g-font-weight-700 g-font-size-16 g-font-size-18--md g-color-white g-theme-bg-black-v1 g-pa-10 g-mb-10" data-type="text" data-delay="10" data-effect="skewleft(50, 340)" data-ease="easeOutExpo" data-duration="2200">From <span class="g-color-primary">&pound;{{ $slider->price}}</span> </div> --}}

    <div class="ms-layer g-pos-rel g-line-height-1_2 g-max-width-550 ms-desc ms-hover-active" style="margin: 0px; padding: 0px; font-size: 13.49px; line-height: 15.4171px; display: none;" data-type="text" data-delay="10" data-effect="skewleft(50, 340)" data-ease="easeOutExpo" data-duration="2200">
      <p class="g-mb-20 g-font-size-18 g-color-white-opacity-0_8">{{ $slider->description}}</p>
    </div>
    <div class="ms-layer g-pos-rel g-line-height-1_2 ms-hover-active">

      <p class="g-mb-20 g-font-size-18 g-color-white-opacity-0_8">
      @if ($slider->button_one !==null and $slider->button_one_url !==null)
      <a class="btn btn-md text-uppercase btn-primary" href="{{ $slider->button_one_url}}" title="{{ $slider->button_one}} to {{ $slider->title}}">{{ $slider->button_one}}</a>
      @endif

      @if ($slider->button_two !==null and $slider->button_two_url !==null)
      <a class="btn btn-md text-uppercase btn-primary" href="{{ $slider->button_two_url}}" title="{{ $slider->button_two}} in {{ $slider->title}}">{{ $slider->button_two}}</a>
      @endif

      @if ($slider->button_three !==null and $slider->button_three_url !==null)
      <a class="btn btn-md text-uppercase btn-primary" href="{{ $slider->button_three_url}}" title="{{ $slider->title}} - {{ $slider->button_three}}">{{ $slider->button_three}}</a>
      @endif

      @if ($slider->button_four !==null and $slider->button_four_url !==null)
      <a class="btn btn-md text-uppercase btn-primary" href="{{ $slider->button_four_url}}" title="{{ $slider->title}} - {{ $slider->button_four}}">{{ $slider->button_four}}</a>
      @endif
      </p>

      </div>
      {{-- <img class="ms-thumb" src="{{ $slider->thumb_image}}"  alt="Image description"> --}} </div>

  @endforeach

  </div>

{{--   <video width="1500" height="300" muted="true" preload="auto" poster="" controls>
    <source src="https://ads.gosearchtravel.com/www/delivery/avw.php?zoneid=2" type="video/mp4">

  </video> --}}

</section>