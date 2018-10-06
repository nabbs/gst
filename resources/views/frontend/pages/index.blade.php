@extends ('frontend.layouts.master')
@section('title', 'Pages at GoSearchTravel.com')
@section ('content')
<section class="probootstrap_section">
	<div class="container">
		<h2 class="mt-2 text-center display-4 font-light probootstrap-animate fadeInUp probootstrap-animated">Pages</h2>
		<div class="row">
		@foreach($pages as $page)
			<div class="col-md-3">
				<a href="/{{ $page->slug }}">
					<img src="{{ Voyager::image( $page->image ) }}" style="width:100%">
					<span>{{ $page->title }}</span>
				</a>
			</div>
		@endforeach
	</div>
</section>
@endsection