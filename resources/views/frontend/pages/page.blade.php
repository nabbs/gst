@extends ('frontend.layouts.master')

@section('title', "GoSearchTravel.com - {$page->title}")

@section ('content')

<section class="probootstrap_section mt-lg-5">

	<div class="container">

		<h2 class="mt-2 text-center display-4 font-light probootstrap-animate">{{ $page->title }}</h2>

		<div class="border mb-lg-5"> <span class="border__inner"><i class="{{$page->icon}} defcolour"></i></span> </div>

			<div class="row">
					
					<img src="{{ Voyager::image( $page->image ) }}" style="width:100%">
				
					<div>{!! $page->body !!}</div>

		</div>

	</div>

</section>

@endsection