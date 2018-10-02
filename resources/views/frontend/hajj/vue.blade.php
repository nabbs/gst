@extends ('frontend.layouts.master')
@section('title', 'GST - Hajj')
@section ('content')

<style type="text/css">
  [v-cloak] {
    display: none;
  }
</style>

{{-- <section class="probootstrap-cover overflow-hidden relative" style="background-image: url('/images/hajj/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  
  <div class="container">
    <div class="row align-items-center text-center">
      <div class="col-md">
        
      </div>
    </div>
  </div>
</section> --}}
<section class="probootstrap_section" id="hajj-results">
  
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center mb-3">
        <h2 class="display-4 border-bottom probootstrap-section-heading"> <small class="text-muted"> <em>{{$totalResults}} Hajj Packages Found</em></small></h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 mb-3">
        <div class="text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#" v-on:click="getItems('all')" class="btn btn-primary active">All Results</a> </li>
            <li class="list-inline-item"><a href="#" v-on:click="getItems('mk5star')" class="btn btn-primary">Makkah 5 Star</a> </li>
            <li class="list-inline-item"><a href="#" v-on:click="getItems('md5star')" class="btn btn-primary">Madina 5 Star</a> </li>
            <li class="list-inline-item"><a href="#" v-on:click="getItems('priceless6000')" class="btn btn-primary">Price Upto 6000 </a> </li>
            <li class="list-inline-item"><a href="#" v-on:click="getItems('pricemore6000')" class="btn btn-primary">Price Above 6000  </a></li>
          </ul>
        </div>
      </div>

    </div>

    <div class="card-deck">


      <div v-for="item in items" class="col-md-4 mb-5 item"
        v-bind:class="{'pricemore6000': pricemore6000(item.price), 'priceless6000': priceless6000(item.price), 'mk5star': mk5star(item.mk_rating), 'md5star': md5star(item.md5star)  }" >
        <div class="card">
          <div class="card-img-top">
            <a :href="item.package_url"> 

               <img v-if="! item.mk_hotel_image" src="/images/default.jpg" alt="">
            
               <img v-if="item.mk_hotel_image" :src="item.mk_hotel_image" alt="">

            </a>

            <div class="img-layer">

              <p title="" data-toggle="tooltip" data-placement="right" title="" :data-original-title="'Quad: £'+item.mk_rm_quad_price+', Triple: £'+item.mk_rm_triple_price+', Double £'+item.mk_rm_double_price"> <em>from</em> <strong>&pound;@{{ item.price }}pp</strong> 
                <i class="fa fa-info"></i>
              </p>
              
            </div>
          </div>
          <div class="card-body">

              <p v-if="! item.agent_logo" class="agentinfo green">Agent: <a :href="item.package_url" class="info">
                @{{item.agent_name}}</a></p>
              <p v-if="item.agent_logo" class="agentinfo green">Agent: 
                <a :href="item.package_url">
                <img :src="item.agent_logo" alt="" width="200" height="30"></a></p>
            

            <p class="card-text"></p>
            <p>
              <span class="green d-block">Makkah Hotel: </span><span class="red">@{{ item.mk_hotel }}</span>
              <i v-for="index in item.mk_rating" :key="index" class="fa fa-star" aria-hidden="true"></i>
            </p>
            
            <p>
              <span class="green d-block">Madina Hotel: </span><span class="red"> @{{ item.md_hotel }}</span>
             
              <i class="fa fa-star" aria-hidden="true"></i>
              <i v-for="index in item.md_rating" :key="index" class="fa fa-star" aria-hidden="true"></i>
              
            </p>
            
            <p class="mt-3"> <a :href="item.package_url" class="btn btn-primary btn-block">Book with @{{item.agent_name}}</a> </p>
          </div>
         <div class="card-footer">
          <p>
            <i class="fa fa-bed" title="" data-toggle="tooltip" data-placement="top" title="" :data-original-title="item.md_rm_basis"></i>
            <i v-if="item.flights == 1" class="fa fa-plane" data-toggle="tooltip" data-placement="top" title="" data-original-title="Flights Included"></i>
            
            <i class="fa fa-list" data-toggle="tooltip" data-placement="top" title="" data-original-title=""></i>

            <i class="fas fa-walking" data-toggle="tooltip" data-placement="top" title="" data-original-title="20 Meters from Haram"></i>

            <img src="/images/visa.png" width="30" style="margin:0 8px 8px 0;" data-toggle="tooltip" data-placement="top" data-html="true" title="" data-original-title="Guaranteed Hajj Visa">

            <img src="/images/free.png" width="30" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free Ihram" style="margin:0 8px 8px 0;">
          </p>
        </div>
      </div>
        </div>
      </div><!-- End of v-for -->
    </div>

    <div class="row">
      <div class="col-md-12">
      <div class="text-center" v-cloak v-if="!completed">
        <h5>Loading.....</h5>
      </div>
      <div class="text-center" v-cloak v-if="completed">
        <h5>No More results Found!</h5>
      </div>
      </div>
    </div>

  </div>
</section>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/axios/0.17.1/axios.min.js"></script>

{{-- <script src="//cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@1.5.4/src/loadingoverlay.min.js"></script> --}}

<script type="text/javascript">
  var app = new Vue({
      el: '#hajj-results',
      data: {
        items : {!! $hajjItems !!},
        completed : false,
        progress : false,
        filter : "{{ ( isset($_GET['filter'] )) ? $_GET['filter'] : 'all'  }}",
      },
      methods: {
        pricemore6000: function(value) {
          if (value > 6000)
            return true;
          else
            return false;
        },
        priceless6000: function(value) {
          if (value < 6000)
            return true;
          else
            return false;
        },
        mk5star: function(value) {
          if (value == 5)
            return true;
          else
            return false;
        },
        md5star: function(value) {
          if (value == 5)
            return true;
          else
            return false;
        },
        getItems: function(value) {

          this.filter = value;
          
          if (history.pushState) {
            var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?filter=' + this.filter;
            window.history.pushState({path:newurl},'',newurl);
          }

          $.LoadingOverlay("show");
          this.items = "";
          self = this;
          
          axios.post(newurl)
               .then(function (response) {
                  $.LoadingOverlay("hide"); 
                  self.items = response.data;
                  self.completed = false;
                })
               .catch(function (error) {
                    console.log(error);
                });

        },
        infiniteScroll: function(){  
          var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?filter=' + this.filter ;

          self = this;

          if (!this.completed &&  !this.progress) {
            this.progress = true
            axios.post(newurl,{
                  offset: self.items.length ,
                 })
                 .then( function(response) {
                    if (response.data.length) {
                      self.items = self.items.concat(response.data);
                      self.progress = false;  
                    } else {
                      self.progress = false;  
                      self.completed = true;
                    }
                  })
                 .catch(function (error) {
                    console.log(error);
                  });;
          }

        },
      },
      mounted:function(){
        if (history.pushState) {
            var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?filter=' + this.filter ;
            window.history.pushState({path:newurl},'',newurl);   
        }
        window.addEventListener('scroll', this.infiniteScroll);
      },
  });
</script>





{{-- add the following to fix the i and results --}}

{{--  <p title="" data-toggle="tooltip" data-placement="top" title="" :data-original-title="'Quad: £'+item.mk_rm_quad_price+', Triple: £'+item.mk_rm_triple_price+', Double £'+item.mk_rm_double_price"> <em>from</em> <strong>&pound;@{{ item.price }}pp</strong> 
                <i class="fa fa-info"></i>
              </p>


<div class="card-footer">
          <p>
            <i class="fa fa-bed" data-toggle="tooltip" data-placement="top" title="" :data-original-title="item.md_rm_basis"></i>
            <i v-if="item.flights == 1" class="fa fa-plane" data-toggle="tooltip" data-placement="top" title="" data-original-title="Flights Included"></i>
            
            <i class="fa fa-list" data-toggle="tooltip" data-placement="top" title="" data-original-title=""></i>

            <i class="fas fa-walking" data-toggle="tooltip" data-placement="top" title="" data-original-title="20 Meters from Haram"></i>

            <img src="/images/visa.png" width="30" style="margin:0 8px 8px 0;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Guaranteed Hajj Visa">

            <img src="/images/free.png" width="30" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free Ihram" style="margin:0 8px 8px 0;">
          </p>
        </div>

        
<div class="row">
  <div class="col-md-12">
  <div class="text-center" v-cloak v-if="!completed">
    <h5>Loading.....</h5>
  </div>
  <div class="text-center" v-cloak v-if="completed">
    <h5>No More results Found!</h5>
  </div>
  </div>
</div> --}}
@endsection