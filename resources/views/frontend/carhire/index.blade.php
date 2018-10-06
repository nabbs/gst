@extends ('frontend.layouts.master')
@section('title', 'GST - Car Hire')
@section ('content')

@include('frontend.carhire.header')

<section class="probootstrap_section mb-5">

	<div class="container">
		<div id="transBlock">
    <h2 class="transHeading text-center" style="display: none;">Looking for transfers from Airport to Hotel? <a href="javascript:void(0);" class="showTrans">Click here</a></h2>
  </div>
  <div id="trans" style="display: none;">
    <script src="//c1.travelpayouts.com/content?promo_id=691&shmarker=129036&form_title=Pickup%20and%20Drop-Off&from=Heathrow&language=en&display_currency=GBP&transfer_type=any&hide_form_extras=false&hide_external_links=true&disable_currency_selector=true&powered_by=false" charset="utf-8" async></script> 
  </div>

	  	<div class="mt-lg-5 mb-lg-5">

	        <div class="ad-block"></div>

	    </div>

	</div>

</section>

@endsection