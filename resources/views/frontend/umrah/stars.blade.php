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
@if ($item->mk_nights !==null)
<span>({{$item->mk_nights}} Nights)</span>
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
@if ($item->md_nights !==null)
<span>({{$item->md_nights}} Nights)</span>
@endif
</p>
