
<footer class="probootstrap_section">
  <div class="copyRight clearfix probootstrap-animate fadeInUp probootstrap-animated">
      @include('frontend.layouts.newsletter')
      <div class="footer clearfix">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-12">
              <div class="footerContent">
                <h5>Disclaimer</h5>
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
                    <div class="col-3 pd-5">
                      <a href="{{$image->link}}"><span>{{$image->city}}</span>{{-- <img class="img-thumbnail" title="{{$image->city}}" src="{{$image->image}}">  --}}</a> 

                      <p>{{$image->link}}</p>
                    </div>
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