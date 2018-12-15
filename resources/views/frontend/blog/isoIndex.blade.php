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
				<h2 class="probootstrap-animate">GoSearchTravel Blog</h2>
			</div>
		</div>
	</div>
</section>
<section class="probootstrap_section" id="blog">
	<div class="container">
		@include('frontend.blog.filters')
		<div id="grid-view">
			
			<div class="card-deck isotopeContainer">
				@foreach($posts as $post)
				@if ($post->status =='PUBLISHED')
				@php
				$truncated = str_limit($post->body, 101);
				@endphp
				
				<div class="col-md-4 mb-5 item isotopeSelector {{$post->category_id}} ">
					
					<div class="probootstrap-animate">
						<div class="package-wiget" style="position: relative">
							
							<div class="grid">
								<figure class="effect-milo" style="position: relative">
									<a href="/blog/{{ $post->slug }}"><img src="{{$post->image}}" title="{{ $post->title }}" class="img-fluid">
									</a>
									<div style="position: absolute; bottom: 0; right: 0; padding: 1em; background: rgba(248, 249, 250, 0.8); font-weight: bold; color: #4b4b4b;">
										{{$post->created_at->diffForHumans()}}
									</div>
									
								</figure>
							</div>
							<div class="package-content">
								<h5>{{ $post->title }}</h5>
								<h6>By: {!!$post->author !!} </h6>
								<p>{!! $truncated !!} </p>
								<div align="right">
									
								</div>
							</div>

							<a href="/blog/{{ $post->slug }}" class="link-mask">
								<span style="position: absolute; right:10px; bottom: 10px;">Continue Reading →</span>
							</a>
						</div>
					</div>
				</div>
				@endif
				@endforeach
			</div>
			
		</div>


		  <div id="list-view" class="isotopeContainer">
		  	
		  	@foreach($posts as $post)
				@if ($post->status =='PUBLISHED')
				@php
				$truncated = str_limit($post->body, 101);
				@endphp

				<div class="row item isotopeSelector mb-5 package-wiget {{$post->category_id}}">

					<div class="col-md-3">
						<a href="/blog/{{ $post->slug }}"><img src="{{$post->image}}" title="{{ $post->title }}" class="img-fluid"></a>
					</div>
					<div class="col-md-9">
						<h5>{{ $post->title }}</h5>
								<h6>By: {{ $post->author }} </h6>
								<p>{!! $truncated !!} </p>
					</div>

					<a href="/blog/{{ $post->slug }}" class="link-mask">
								<span style="position: absolute; right:10px; bottom: 10px;">Continue Reading →</span>
							</a>
				</div>
				@endif
			@endforeach
		  </div>

		<div class="ad-block"></div>
	</div>
</section>
@endsection