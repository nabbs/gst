
<footer class="probootstrap_section">
  <div class="copyRight clearfix probootstrap-animate fadeInUp probootstrap-animated">
      @include('frontend.layouts.newsletter')
      <div class="footer clearfix">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-12">
              <div class="footerContent">
              {!!setting('site.disclaimer')!!}
              </div>
            </div>
            <div class="col-sm-4 col-12">
              <div class="footerContent social-icons">
                <h5>Follow Us</h5>
                {!! menu('social-media', 'footermenu') !!}
              </div>
            </div>
            <div class="col-sm-4 col-12">
              <div class="footerContent imgGallery">
                <h5>Popular cities</h5>
                <div class="row">
                  @foreach ($featured as $image)
                    <div class="col-4 pd-5">
                      <a href="/"><span>{{$image->city}}</span><img class="img-thumbnail" title="{{$image->city}}" src="/{{$image->image}}"> </a> </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyRight clearfix">
        <div class="container">
          <div class="row">
          <div class="col-sm-6">
              <div class="copyRightText">
                <p>{{setting('site.footer_copyright')}}</p>
              </div>
            </div>
            <div class="col-sm-6">
              {!! menu('footer', 'footermenu') !!}
            </div>
          </div>
        </div>
      </div>
      </div>
  </footer>

  <div class="ad-placement" id="ablockercheck"></div>
  <div id="abMessage" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg p-5">
      <div class="modal-content">
         <div class="modal-header">
          <h5 class="modal-title" id="disableTitle">Please disable Ad Blocker</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
       <p class="p-3"> Our website is made possible by displaying online advertisements to our visitors. Please consider supporting us by disabling your ad blocker on our website.</p>
      </div>
    </div>
  </div>


{{--   <style>
#KMxDyVmzanif {
display: none;
margin-bottom: 30px;
padding: 20px 10px;
text-align: center;
background: #D30000;
font-weight: bold;
color: #fff;
border-radius: 5px;
position: absolute;
bottom: 30px;
height: 100px;
}
</style>

<div id="KMxDyVmzanif">
  Our website is made possible by displaying online advertisements to our visitors.<br>
  Please consider supporting us by disabling your ad blocker.
</div>

<script src="/ads.js" type="text/javascript"></script>
<script type="text/javascript">

if(!document.getElementById('VytMBAdPTpgH')){
  document.getElementById('KMxDyVmzanif').style.display='block';
}

</script> --}}




{{-- <footer>
  <div class="container">
    <div class="row fbg"> 
      <!-- Address -->
      <div class="col-sm-4 col-md-3">
        <div class="footer-box address-inner">
          <p>GoSearchTravel.com is a free service that compares prices for flights, hotels, holidays, car hire, hajj and umrah. We are not a travel agent and we dont sell any holidays, flights, hotels, car hire, hajj and Umrah package. We provide search tools to find deals from leading travel agencies and portals.</p>
          <ul class="list-inline ">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li><a href="https://twitter.com/GoSearchTravelC"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
            <!--li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a> </li--> 
            <!--li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a> </li-->
          </ul>
        </div>
      </div>
      <div class="col-sm-8 col-md-6">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <div class="footer-box">
              <h4 class="footer-title">Information</h4>
              <ul class="categoty">
                <li><a href="#">About us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Cookies Policy</a></li>
                <!--li><a href="#">Become a partner</a></li-->
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="footer-box">
              <h4 class="footer-title">Experiences</h4>
              <ul class="categoty">
                <li><a href="#">Epic journeys</a></li>
                <li><a href="#">Hidden tribes</a></li>
                <li><a href="#">Eco lodges &amp; tours</a></li>
                <li><a href="#">Endangered Wildlife</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="footer-box">
              <h4 class="footer-title">Destinations</h4>
              <ul class="categoty">
                <li><a href="#">Europe</a></li>
                <li><a href="#">Africa</a></li>
                <li><a href="#">Asia</a></li>
                <li><a href="#">Oceania</a></li>
                <li><a href="#">North America</a></li>
                <li><a href="#">South America</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 hidden-sm">
        <div class="footer-box">
          <h4 class="footer-title">Popular Cities</h4>
          <ul class="gallery-list">
            <li> <a href="#"><img src="assets/images/flickr-1.jpg" alt=""></a></li>
            <li> <a href="#"><img src="assets/images/flickr-2.jpg" alt=""></a></li>
            <li> <a href="#"><img src="assets/images/flickr-3.jpg" alt=""></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <p>© GoSearchTravel.com 2016-2018. All Rights Reserved</p>
        </div>
        <div class="col-sm-7">
          <div class="footer-menu">
            <ul>
              <li><a href="">About Us</a></li>
              <li><a href="">Privacy Policy</a></li>
              <li><a href="">Cookies Policy</a></li>
              <li><a href="">Blog</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer> --}}