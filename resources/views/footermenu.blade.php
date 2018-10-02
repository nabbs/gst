<ul class="list-inline">
@foreach ($items as $item)
	@php
		$icon = null;
		if($item->icon_class !== null){
			$icon = '<i class="' . $item->icon_class . '"></i>';
		}
	@endphp
   <li class="list-inline-item">
      <a href="{{ url($item->link()) }}" target="{{ $item->target }}">{!! $icon !!}
      <span>{{ $item->title }}</span></a>
  </li>
@endforeach
</ul>