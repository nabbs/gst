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
<p> {{ $item->package_type }} - {{ $item->total_nights }} Nights <em>from</em> <span class="font-weight-bold price defcolour">&pound;{{ $item->price }}</span>pp</p>

{{--  <p class="text-right"> {{$item->season}} Umrah</p> --}}

</div>