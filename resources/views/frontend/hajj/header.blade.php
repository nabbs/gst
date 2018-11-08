<style>
#page-header {
background-image: url('/images/backgrounds/mecca-3.jpg');
}
</style>
<section class="probootstrap-cover relative" id="page-header">
  <div class="container">
    <div class="row align-items-center text-center">
      <div class="col-md">
        <h2 class="mb-2 probootstrap-animate">Search from the UK's best Hajj Agents</h2>
        <h3 class="mb-5 probootstrap-animate">Get the best price for your special journey!</h3>
        <div class="srchForm mx-auto col-lg-8">
          <form  method='POST' action="/hajj/search" target="_self" class="form-inline">
            {{csrf_field()}}
            <div class="mt-3 mb-3 mx-auto">
              <select class="custom-select mr-4" name="mk_rating">
                <option value="">Makkah Room rating</option>
                <option value="1">1 Star</option>
                <option value="2">2 Star</option>
                <option value="3">3 Star</option>
                <option value="4">4 Star</option>
                <option value="5">5 Star</option>
              </select>
              <select class="custom-select mr-4" name="md_rating">
                <option value="">Madina Room rating</option>
                <option value="1">1 Star</option>
                <option value="2">2 Star</option>
                <option value="3">3 Star</option>
                <option value="4">4 Star</option>
                <option value="5">5 Star</option>
              </select>
              <button type="submit" class="btn btn-primary">Search</button>
            </div>
          </form>
        </div>
        <div class="mt-5">
          <h5 class="mb-3 probootstrap-animate">We search all the best hajj and umrah providers</h5>
          <ul class="list-inline probootstrap-animate">
            <li class="list-inline-item mr-4 mb-4"><img src="/images/logos/agoda.png" width="100"></li>
            <li class="list-inline-item mr-4 mb-4"><img src="/images/logos/booking.com.png" width="130"></li>
            <li class="list-inline-item mr-4 mb-4"><img height="25" src="/images/logos/easy.svg" alt=""></li>
            <li class="list-inline-item mr-4 mb-4"><img src="/images/logos/happy.svg" alt="" height="30"></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>