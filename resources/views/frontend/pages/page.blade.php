@extends ('frontend.layouts.master')

@section('title', "{$page->title} - GoSearchTravel.com")

@section ('content')
<style>
  #page-header {
    background-image: url('/images/backgrounds/page-bg-b.jpg');
  }

  @media (min-width: 1000px) {
		#page-header {
		min-height: 400px;
		background-position: 0px -100px;
		}
		}
	 @media (max-width: 768px) {
			.page-content {
				margin-top: 30px;
			}
		}
</style>
<section class="probootstrap-cover relative" id="page-header">
  <div class="container">
    <div class="row align-items-center text-center">
      <div class="col-md-12">
	
        <h1 class="mt-2 display-4 font-light probootstrap-animate">{{ $page->title }}</h1>

        <h2 class="probootstrap-animate">GoSearchTravel</h2>

      </div>
    </div>
  </div>
</section>

<section class="mt-lg-5 p-3">

	<div class="container">

				{{-- @if ( $page->image !== '')
				<div class="row">
					<img src="{{ Voyager::image( $page->image ) }}" style="width: 100%;">
				</div>
					
				@endif --}}
				
				<div class="row">
					<div class="page-content">{!! $page->body !!}</div>

		</div>

	</div>

</section>

@endsection