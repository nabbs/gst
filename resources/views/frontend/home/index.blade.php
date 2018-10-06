@extends ('frontend.layouts.master')
@section('title', 'Dream, Explore, Compare - GO!, GoSearchTravel.com')
@section ('content')

	@include('frontend.home.slider')

	@include('frontend.home.search')

	@include('frontend.home.hotdeals')

	@include('frontend.home.places')

	@include('frontend.home.latestblog')

@endsection