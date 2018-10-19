<div class="row filter-row mb-5">

<div class="col-sm-9 col-md-9">
<div class="isotopeFilters probootstrap-animate">
<ul class="list-inline">
<li class="list-inline-item"><a href="#" data-filter="*" class="btn btn-primary reset">All</a> </li>
@foreach($postcategory as $category)
<li class="list-inline-item"><a href="#" data-filter=".{{ $category->id }}" class="btn btn-primary">{{ $category->name }}</a> </li>
@endforeach

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

</div>