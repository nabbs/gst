@extends ('frontend.layouts.master')
@section('title', 'GST - Dream, Explore, Compare - GO!')
@section ('content')

	@include('frontend.home.slider')

	@include('frontend.home.search')

	@include('frontend.home.hotdeals')

	@include('frontend.home.places')

	@include('frontend.home.latestblog')

@endsection