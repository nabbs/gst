<meta property="og:title" content="@yield('title')" />
<meta property="og:type" content="article" />
<meta property="og:description" content="{{$description}}" />
<meta property="og:image" content="{{Request::getSchemeAndHttpHost()}}/{{$image}}" />
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:site_name" content="GoSearchTravel" />
<meta property="article:author" content="https://facebook.com/gosearchtravel" />
<meta property="article:publisher" content="https://www.facebook.com/gosearchtravel" />
<meta property="article:published_time" content="{{$created}}" />
<meta property="article:modified_time" content="{{$updated}}" />
<meta property="og:updated_time" content="{{$updated}}" />
<meta property="fb:admins" content="nabiarshad"/>
<meta name="twitter:card" content="{{Request::getSchemeAndHttpHost()}}/{{$image}}">
<meta name="twitter:title" content="{{$title}}">
<meta name="twitter:description" content="{{$description}}">
<meta name="twitter:image" content="{{Request::getSchemeAndHttpHost()}}/{{$image}}">
<meta name="twitter:site" content="@gosearchtravel">