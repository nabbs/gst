@extends ('frontend.layouts.master')
@section('title', 'GoSearchTravel Blog - latest inspirations, city guides and family holidays')
@section ('content')
<style>
#page-header {

background-image: url('/images/backgrounds/flights-1.jpg');

}
@media (min-width: 1000px) {
#page-header {
min-height: 400px;
background-position: 0px -170px;
}
}
</style>

<section class="probootstrap-cover relative" id="page-header">
	<div class="container">
		<div class="row align-items-center text-center">
			<div class="col-md-12">
				<h1 class="display-4 probootstrap-section-heading probootstrap-animate">Travel tips and inspirations</h1>
				<h3 class="probootstrap-animate">GoSearchTravel Blog</h3>
			</div>
		</div>
	</div>
</section>
<section class="probootstrap_section" id="blog">
	<div class="container">

		<div class="row">
			<div class="col-lg-8 mb-5">
				@if (session()->has('success'))
				<div class="alert alert-success">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Success!</strong> Your post is awaiting moderation!
				</div>
				@endif
				@foreach($posts as $post)
				@if ($post->status =='PUBLISHED')
				@php
				$truncated = str_limit($post->body, 310);
				@endphp
				<div class="mb-5 probootstrap-animate">
					
					<a href="/blog/{{ $post->slug }}"><img src="{{ Voyager::image( $post->image ) }}" class="img-fluid rounded" title="{{ $post->title }}">
					</a>
					<h2 class="mt-4 mb-4"><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
					<p>{!! $truncated !!} <a href="/blog/{{ $post->slug }}"> Continue Reading →</a></p>


					<div class="border mb-lg-5"> <span class="border__inner"><i class="fas fa-rss-square defcolour"></i></span> </div>
				</div>
				@endif
				@endforeach
			</div>
			<div class="col-md-4">

				<h5 class="card-header">@if (Request::segment(2) === 'category') Posts in Category @else Recent Posts @endif  </h5>
				<ul class="list-group mb-lg-5">

					@foreach($posts as $post)
						@if ($post->status =='PUBLISHED')
						<li class="list-group-item">
							<a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
						</li>
						@endif
					@endforeach

					@if (Request::segment(2) === 'category')
						<li class="list-group-item text-right"><a href="/blog"><i>View All Posts</i></a></li>
					@endif
				</ul>

			<h5 class="card-header">Categories</h5>
				<ul class="list-group mb-lg-5">
					@foreach($postcategory as $category)
					@php
						$uri = Request::segment(3);
					@endphp

					<li class="@if ($uri === "$category->id")active @endif list-group-item"><a href="/blog/category/{{ $category->id }}">{{ $category->name }}</a>

					</li>
					@endforeach
				</ul>

					@include('frontend.layouts.adblock')
				
			</div>
		</div>
	</div>
</section>
@endsection