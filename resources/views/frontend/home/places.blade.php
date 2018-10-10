<section class="probootstrap_section destination" id="section-city-guides">

	<div class="container">

		<div class="row text-center mb-3">

			<div class="col-md-12">

				<h2 class="display-4 border-bottom probootstrap-section-heading">Top Destinations</h2>

				<p>Popular destinations around the world. </p>

			</div>

		</div>

		<div class="row mb-5">

			@foreach($places as $place)

			<div class="col-md-3 col-sm-4 thm-padding">

				<div class="destination-grid"> 

					<a href="#" class="probootstrap-thumbnail"><img src="{{ $place->image }}" alt="" alt="{{ $place->city }}" class="img-fluid"></a>

				<div class="mask">

					<h2>{{ $place->country }}</h2>

					<p>{{ $place->description }}</p>

					<a href="#" class="thm-btn">Read More</a> 

				</div>

					<div class="dest-name">

						<h5>{{ $place->city }}</h5>

						<h4>{{ $place->country }}</h4>

					</div>

					<div class="dest-icon">
						
						@if ($place->flightlink != '')

							<a href="{{$place->flightlink}}"><i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="" data-original-title="Find Flights"></i></a>

						@endif

						@if ($place->hotellink != '')

							<a href="{{$place->hotellink}}"><i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="" data-original-title="Find Hotels"></i></a>

						@endif

						@if ($place->tourlink != '')	

							<a href="{{$place->tourlink}}"><i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="" data-original-title="Find Holidays"></i></a>

						@endif

						@if ($place->cruiselink != '')	

							<a href="{{$place->cruiselink}}"><i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="" data-original-title="Find Criuses"></i></a>

						@endif

					</div>

				</div>

			</div>

			@endforeach

		</div>

	</div>

</section>