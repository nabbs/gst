<style>
  #page-header {
    background-image: url('/images/backgrounds/cruise-1.jpg');
  }
</style>
<section class="probootstrap-cover relative" id="page-header">
  <div class="container">
    <div class="row align-items-center text-center">
      <div class="col-md-12">
        <h2 class="mb-2 probootstrap-animate">We search top cruise websites to get you the best deals.</h2>
        <h3 class="mb-5 probootstrap-animate">Search and compare cruises</h3>

        <div class="srchForm mx-auto col-lg-8">
          <form action="/cruise/search" method="get" class="form-inline">
            <div class="mt-3 mb-3 mx-auto">
              <input id="query" type="text" name="query" placeholder="search for cruises" required="required">
              <select name="operator" class="custom-select mr-4">
                <option value="any">Any</option>
                <option value="fred olsen">Fred Olsen</option>
                <option value="titan">Titan</option>
                <option value="365 tickets">365 Tickets</option>
              </select>
              <button type="submit" class="btn btn-primary">Search</button>
            </div>
          </form>
        </div>
        <div class="mt-5">
          <ul class="list-inline probootstrap-animate">
            <li class="list-inline-item mr-5 mb-4"><i class="fas fa-plane mr-2"></i> <strong>728</strong> airlines</li>
            <li class="list-inline-item mr-5 mb-4"><i class="fas fa-handshake mr-2"></i> <strong>200</strong> agencies</li>
            <li class="list-inline-item mr-5 mb-4"><i class="fas fa-server mr-2"></i> <strong>5</strong> booking systems</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>