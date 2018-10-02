<ul class="navbar-nav ml-auto">

@php

    if (Voyager::translatable($items)) {
        $items = $items->load('translations');
    }

@endphp

@foreach ($items as $item)

    @php
    
        $originalItem = $item;
        if (Voyager::translatable($item)) {
            $item = $item->translate($options->locale);
        }

        $isActive = null;
        $styles = null;
        $icon = null;

        // Background Color or Color
        if (isset($options->color) && $options->color == true) {
            $styles = 'color:'.$item->color;
        }
        if (isset($options->background) && $options->background == true) {
            $styles = 'background-color:'.$item->color;
        }

        // Check if link is current
        if(url($item->link()) == url()->current()){
            $isActive = 'active';
        }

        // Set Icon
        if($item->icon_class !== null){
            $icon = '<i class="' . $item->icon_class . '"></i>';
        }

    @endphp

    @if ($item->title !== 'Holidays' and $item->title !== 'Hajj' and $item->title !== 'Cruise')    
        <li class="{{ $isActive }} nav-item">
            <a href="{{ url($item->link()) }}" target="{{ $item->target }}" class="nav-link">
                {!! $icon !!}
                <span>{{ $item->title }}</span>
            </a>
            @if(!$originalItem->children->isEmpty())
                @include('voyager::menu.default', ['items' => $originalItem->children, 'options' => $options])
            @endif
        </li>
    @endif

@endforeach

</ul>
