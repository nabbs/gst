@extends ('frontend.layouts.master')
@section('title', "{$post->title} at GoSearchTravel Blog")
@section ('content')

@include('frontend.blog.header')

@php

$title = "$post->title";
$image = "$post->thumb_image";
$description = str_limit(strip_tags($post->body, 150));
$author = "$post->author";
$created = "$post->created_at";
$updated = "$post->updated_at";

@endphp

<section id="blog">

	<div class="container">

		<div class="row mt-lg-5">

			<div class="col-lg-8">

				@if (session()->has('success'))

				<div class="alert alert-success">

					 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

  				<strong>Thanks for Posting!</strong> Your post is awaiting moderation!

				</div>
				
				@endif

				@if ($post->status =='PUBLISHED')

				<div class="row mb-2">

					<div class="col-md-6"><p> <span>{{$post->created_at->toFormattedDateString()}} </span> .
						<br><span>by: {!!$post->author!!}</span> {{-- <br> <span>{{$d7}} {{$d14}}</span> --}}</div>
					<div class="col-md-6"><div class="sharethis-inline-share-buttons text-lg-right"></div></div>

				</div>

				<div class="border"> <span class="border__inner"><i class="fas fa-rss-square defcolour"></i></span> </div>

				<div class="post-body">
					
				{!! $post->body !!}

				</div>

				<div class="border"> <span class="border__inner"><i class="fas fa-rss-square defcolour"></i></span> </div>

				<div class="comments mb-5 mt-5">
					<ul class="list-group">
						@foreach ($post->comments as $comment)
							@if ($comment->status =='PUBLISHED' && $comment->body !=='')						
								<li class="list-group-item">
									<p><strong>{{ $comment->name }}</strong> <em>{{ $comment->created_at->diffForHumans() }}</em></p>
									<div>{{ $comment->body }}	</div>
								</li>
							@endif
						@endforeach
					</ul>
				</div>
				<div class="border"> <span class="border__inner"><i class="fas fa-rss-square defcolour"></i></span> </div>

				<div class="mb-3">
					<h2>Leave Comments</h2>
					<form method="POST" action="/blog/{{ $post->id }}/comments">

						{{csrf_field()}}
						
						<div class="form-group">
							<label for="name">Your Name*</label>
							<input type="text" class="form-control" name="name" placeholder="Your Name" required="">
						</div>
						<div class="form-group">
							<label for="email">Email*</label>
							<input type="text" class="form-control" name="email" placeholder="Email" required="">
						</div>
						
						<div class="form-group">
							<label for="body">Comment*</label>
							<textarea class="form-control" name="body" required="" placeholder="Enter your Comments"></textarea>
						</div>

						{{-- <div class="g-recaptcha form-group" data-sitekey="6Lckd3EUAAAAAK6PS4YcF4B1zNo_zKoDn51sHrRm"></div> --}}

						<div class="form-group">
							<button type="submit" class="btn btn-primary">Submit Your Comment</button>
						</div>
						
					</form>
				</div>
			</div>
			<div class="col-md-4" style="position: relative">

				<h5 class="card-header">Recent Posts</h5>
				<ul class="list-group mb-lg-5">

					@foreach($posts as $post)
						@if ($post->status =='PUBLISHED')

					@php
						$uri = Request::segment(2);
					@endphp

						<li class="@if ($uri === "$post->slug")active @endif list-group-item">
							<a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
						</li>
						@endif
					@endforeach
				</ul>

				<h5 class="card-header">Topics</h5>
				<ul class="list-group mb-lg-5">
					@foreach($category as $category)
					<li class="list-group-item"><a href="/blog/category/{{ $category->id }}">{{ $category->name }}</a></li>
					@endforeach
				</ul>

				
				@include('frontend.layouts.adblock')
						
					{{-- <div class="blog-ads">
						
					<div>
						<ins data-revive-zoneid="4" data-revive-id="0064f69d264db279eacc24377b18f474"></ins>
						<script async src="//ads.gosearchtravel.com/www/delivery/asyncjs.php"></script>
					</div>
						
						<div>
							<ins data-revive-zoneid="3" data-revive-id="0064f69d264db279eacc24377b18f474"></ins>
						<script async src="//ads.gosearchtravel.com/www/delivery/asyncjs.php"></script>
						</div>
						
					</div> --}}

				</div>
			</div>
		</div>

		@else 
		<p>Post not available. <a href="/blog">Go to Blog </a></p>

		@endif

	</div>
</section>
{{-- <script type="text/javascript">
	var cd = new Date();
	var d = cd.getDay()+8;
	var m = cd.getMonth();

	var setdate = d+m;

	console.log(m);
</script> --}}

@endsection