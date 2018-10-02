<div class="row filter-row mb-5">
@if (count($umrahItems)>3)
<div class="col-sm-9 col-md-9">
<div class="isotopeFilters probootstrap-animate">
<ul class="list-inline">
<li class="list-inline-item"><a href="#" data-filter="*" class="btn btn-primary reset">All Results</a> </li>
{{-- <li class="list-inline-item"><a href="#" data-filter=".7night" class="btn btn-primary">7 Nights</a> </li>
<li class="list-inline-item"><a href="#" data-filter=".10night" class="btn btn-primary">10 Nights</a> </li>
<li class="list-inline-item"><a href="#" data-filter=".14night" class="btn btn-primary">14 Nights</a> </li>
<li class="list-inline-item"><a href="#" data-filter=".october" class="btn btn-primary">October Umrah</a> </li>
<li class="list-inline-item"><a href="#" data-filter=".easter" class="btn btn-primary">Easter Umrah</a> </li>
<li class="list-inline-item"><a href="#" data-filter=".xmas" class="btn btn-primary">Xmas Umrah </a> </li>
<li class="list-inline-item"><a href="#" data-filter=".ramadhan" class="btn btn-primary">Ramadhan Umrah</a> </li>
<li class="list-inline-item"><a href="#" data-filter=".outofseason" class="btn btn-primary">Out Of Season</a></li> --}}
<li class="list-inline-item">
<select name="nights" class="filter-select">
<option value="">Filter by Nights</option>
<option value=".7night">7 Nights</option>
<option value=".10night">10 Nights</option>
<option value=".14night">14 Nights</option>
</select>
</li>

<li class="list-inline-item">
<select name="season" class="filter-select">
<option value="">Filter by Season</option>
<option value=".october">October Umrah</option>
<option value=".easter">Easter Umrah</option>
<option value=".xmas">Xmas Umrah</option>
<option value=".ramadhan">Ramadhan Umrah</option>
<option value=".outofseason">Out Of Season</option>
</select>
</li>

{{--   <div class="btn-group" style="z-index: 1000!important;">
<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter By Nights:<span class="selection"></span><span class="caret"></span></button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#" data-filter=".7night">7 Nights</a>
<a class="dropdown-item" href="#" data-filter=".10night">10 Nights</a>
<a class="dropdown-item" href="#" data-filter=".14night">14 Nights</a>
</div>
</div> 

<div class="btn-group" style="z-index: 1000!important;">
<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter By Season</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#" data-filter=".october" class=" btn-primary">October Umrah</a>
<a class="dropdown-item" href="#" data-filter=".easter" class=" btn-primary">Easter Umrah</a>
<a class="dropdown-item" href="#" data-filter=".xmas" class=" btn-primary">Xmas Umrah</a>
<a class="dropdown-item" href="#" data-filter=".ramadhan" class=" btn-primary">Ramadhan Umrah</a>
<a class="dropdown-item" href="#" data-filter=".outofseason" class=" btn-primary">Out Of Season</a>
</div>
</div>
--}}


{{-- <div class="btn-group" style="z-index: 1000!important;">
<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
Filter By Nights:<span class="selection"></span><span class="caret"></span>
</button>
<ul class="dropdown-menu" role="menu">
<li><a class="dropdown-item" href="#" data-filter=".7night">7 Nights</a></li>
<li><a class="dropdown-item" href="#" data-filter=".10night">10 Nights</a></li>
<li><a class="dropdown-item" href="#" data-filter=".14night">14 Nights</a></li>
</ul>
</div>

<div class="btn-group" style="z-index: 1000!important;">
<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
Filter By Season:<span class="selection"> </span><span class="caret"></span>
</button>
<ul class="dropdown-menu" role="menu">
<li><a class="dropdown-item" href="#" data-filter=".october" class=" btn-primary">October Umrah</a></li>
<li><a class="dropdown-item" href="#" data-filter=".easter" class=" btn-primary">Easter Umrah</a></li>
<li><a class="dropdown-item" href="#" data-filter=".xmas" class=" btn-primary">Xmas Umrah</a></li>
<li><a class="dropdown-item" href="#" data-filter=".ramadhan" class=" btn-primary">Ramadhan Umrah</a></li>
<li><a class="dropdown-item" href="#" data-filter=".outofseason" class=" btn-primary">Out Of Season</a></li>
</ul>
</div> --}}
{{--  <li id="list" class="list-inline-item">
<i class="fas fa-list-ul" data-toggle="tooltip" data-placement="top" title="" data-original-title="List View"></i>
</li>
<li id="grid" class="list-inline-item active">
<i class="fas fa-th-large" data-toggle="tooltip" data-placement="top" title="" data-original-title="Grid View"></i>
</li> --}}

</ul>
</div>
</div>
<div class="col-sm-3 col-md-3 probootstrap-animate viewbtns">

<div class="well well-sm">
<strong>Display:</strong>
<div class="btn-group">
<a id="list" class="btn btn-default btn-sm"><span class="fas fa-list-ul"></span>List</a> 
<a id="grid" class="btn btn-default btn-sm"><span class="fas fa-th-large"></span>Grid</a>
</div>
</div>
</div>
@else
<div class="col-md-12 mb-3 text-center">
<ul class="list-inline">
<li class="list-inline-item"><a href="/umrah" class="btn btn-primary">View All Umrah Packages</a> </li>
</ul>
</div>
@endif
</div>