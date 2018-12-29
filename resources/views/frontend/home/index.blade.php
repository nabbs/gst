@extends ('frontend.layouts.master')

@section('title', setting('titles.home'))

@section ('content')

	@include('frontend.home.slider')

	@include('frontend.home.search')

	@include('frontend.home.hotdeals')

	@include('frontend.home.places')

	@include('frontend.home.latestblog')

@endsection