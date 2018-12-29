<section class="bg-tabs" id="searchBox">
  <div class="container">
    <div class="row">
      <div class="col-md-3 mt-5 text-right">
        <h2 class="text-uppercase g-line-height-1_2 g-font-weight-700 g-font-size-22 g-font-secondary g-color-white mb-0 u-divider-right"> <span class="d-block g-font-style-normal g-font-size-16 g-color-primary g-mb-5">Search and Compare </span><span id="tab-heading">your flights</span></h2>
      </div>
      <div class="col-md-9">
        <div class="container">
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist"> 
              <a class="nav-item nav-link active" id="nav-flight-tab" data-toggle="tab" href="#nav-flight" role="tab" aria-controls="nav-flight" aria-selected="false" data-tabname="your flights" title="Flights"><img src="/images/tab-icons/flight.png" class="mr-2"><span class="d-none">Flights</span></a> 
              
              <a class="nav-item nav-link" id="nav-hotel-tab" data-toggle="tab" href="#nav-hotel" role="tab" aria-controls="nav-hotel" aria-selected="false" data-tabname="your hotel" title="Hotels"><img src="/images/tab-icons/hotel.png" class="mr-2"><span class="d-none">Hotels</span></a> 
              
              <a class="nav-item nav-link" id="nav-car-tab" data-toggle="tab" href="#nav-car" role="tab" aria-controls="nav-car" aria-selected="false" data-tabname="your car hire" title="Car Hire"><img src="/images/tab-icons/car.png" class="mr-2"><span class="d-none">Car Hire</span></a> 
              
              {{-- <a class="nav-item nav-link" id="nav-holiday-tab" data-toggle="tab" href="#nav-holiday" role="tab" aria-controls="nav-holiday" aria-selected="false" data-tabname="your holiday" title="Holidays"><img src="/images/tab-icons/holiday.png" class="mr-2"><span class="d-none">Holidays</span></a>  --}}
              {{-- <a class="nav-item nav-link" id="nav-hajj-tab" data-toggle="tab" href="#nav-hajj" role="tab" aria-controls="nav-hajj" aria-selected="false" data-tabname="hajj" title="Hajj"><img src="/images/tab-icons/hajj.png" class="mr-2"> <span class="d-none">Hajj</span></a>  --}}
              <a class="nav-item nav-link" id="nav-umrah-tab" data-toggle="tab" href="#nav-umrah" role="tab" aria-controls="nav-umrah" aria-selected="false" data-tabname="umrah" title="Umrah"><img src="/images/tab-icons/hand.png" class="mr-2"> <span class="d-none">Umrah</span></a> 
              
            {{--   <a class="nav-item nav-link" id="nav-cruises-tab" data-toggle="tab" href="#nav-cruises" role="tab" aria-controls="nav-cruises" aria-selected="false" data-tabname="your cruise" title="Cruises"><img src="/images/tab-icons/cruises.png" class="mr-2"><span class="d-none">Cruises</span></a> --}} 
            </div>
          </nav>
          <div class="tab-content bg-primary" id="nav-tabContent">
            <div class="tab-pane fade active show" id="nav-flight" role="tabpanel" aria-labelledby="nav-flight-tab"> 
              <script charset="utf-8" src="//www.travelpayouts.com/widgets/70d87b6b6129e9ad4befe1f25fe3e949.js?v=1016" async></script> 
            </div>
            <div class="tab-pane fade" id="nav-hotel" role="tabpanel" aria-labelledby="nav-hotel-tab"> 
              <script charset="utf-8" src="//www.travelpayouts.com/widgets/97b317f636806a09a2300defc208e489.js?v=1301" async></script> 
            </div>
            <div class="tab-pane fade" id="nav-car" role="tabpanel" aria-labelledby="nav-holiday-tab"> 
              <div id="rc-connect-container"></div> 

              <script id='rc-connect' src='https://www.rentalcars.com/partners/integrations/connect/connect.js' data-container='rc-connect-container' data-preflang='en' data-enable-return-checkbox='true' data-affiliate-code='gosearchtravel' data-primary='000' data-primary-text='ffffff' data-text='ffffff' data-hide-modules='manage,why,powered' data-form-text='ffffff' data-form-hollow='false' data-form-bg='ff9900' data-hero-image='02' data-hide-header='true' data-box-shadow='false'></script>
            </div>
            {{-- <div class="tab-pane fade" id="nav-holiday" role="tabpanel" aria-labelledby="nav-holiday-tab">
              <div style="position: relative;" class='custom_search'>
                <form accept-charset="utf-8"  method='get' action="/" target="_self">
                  <div class="row">
                    <div class="col-md-12">
                      <label>Search</label>
                      <input type="text" class="form-control" placeholder="Enter search text" aria-describedby="basic-addon21">
                      <a class="sortByPrice" href="#">Sort by Price</a> </div>
                  </div>
                  <div class="row"> 
                    <div class="col-md-6">
                    
                    <div class="form-group">
                      
                      <input type="text" class="form-control umrah_starting_date" name="starting_date" id="" placeholder="From Date">
                    </div>
                    
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control umrah_end_date" name="hajj_end_date" placeholder="To Date">
                    </div>
                  </div>
                    
                    <div class="col-md-12">
                      <div class="btn-group pull-right">
                        <div class="btn-group">
                          <button type="submit" class="btn btn-primary search_button">Search</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div> --}}
            <!----start for hajj tab---------->
            <div class="tab-pane fade" id="nav-hajj" role="tabpanel" aria-labelledby="nav-hajj-tab">
              <div style="position: relative;" class='custom_search'>
                <form  method='POST' action="/hajj/search" target="_self">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-md-6">
                      <select class="form-control" name="mk_rating">
                        <option value="">Makkah Room rating</option>
                        <option value="1">1 Star</option>
                        <option value="2">2 Star</option>
                        <option value="3">3 Star</option>
                        <option value="4">4 Star</option>
                        <option value="5">5 Star</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <select class="form-control" name="md_rating">
                        <option value="">Madina Room rating</option>
                        <option value="1">1 Star</option>
                        <option value="2">2 Star</option>
                        <option value="3">3 Star</option>
                        <option value="4">4 Star</option>
                        <option value="5">5 Star</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="btn-group pull-right">
                        <div class="btn-group">
                          <button type="submit" class="btn btn-primary search_button">Search</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-umrah" role="tabpanel" aria-labelledby="nav-umrah-tab">
              <div style="position: relative;" class="custom_search pt-2 pb-5">
                {{-- <form accept-charset="utf-8" method='get' action="/umrah" target="_self">
                  <div class="row">
                    <div class="col-md-6">
                      <select class="form-control" name="room_type">
                        <option value="">Room Type</option>
                        <option value="1">Quad (4)</option>
                        <option value="2">Triple (3)</option>
                        <option value="3">Double (2)</option>
                        <option value="4">Quin (5)</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <select class="form-control" name="room_rating">
                        <option value="">Room rating</option>
                        <option value="1">1 Star</option>
                        <option value="2">2 Star</option>
                        <option value="3">3 Star</option>
                        <option value="4">4 Star</option>
                        <option value="5">5 Star</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <select class="form-control" name="price">
                        <option value="">Price</option>
                        <option value="lese6000">£6000 or less</option>
                        <option value="more6000">£6000 or more</option>
                      </select>
                    </div>
                    
                    <div class="col-md-12">
                      <div class="btn-group pull-right">
                        <div class="btn-group">
                          <button type="submit" class="btn btn-primary search_button">Search</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form> --}}
                <a class="btn btn-info" href="/umrah">View Umrah Packages</a>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-cruises" role="tabpanel" aria-labelledby="nav-cruises-tab"> cruise </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- search tabs -->