<p>
<i class="fas fa-utensils" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{$item->md_rm_basis}}"></i>

@if ($item->flights =="1")<i class="fa fa-plane" data-toggle="tooltip" data-placement="top" title="" data-original-title="Flights Included"></i>@endif

@if ($item->visa =="1")
<i class="fas fa-money-check" data-toggle="tooltip" data-placement="top" title="" data-original-title="Visa Included"></i>
@endif

<i class="fas fa-bus-alt" data-toggle="tooltip" data-placement="top" title="" data-original-title="Airport Transfers"></i>

<i class="fas fa-walking" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{$item->mk_distance}} from Haram"></i>
</p>