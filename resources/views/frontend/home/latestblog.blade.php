{{-- <style type="text/css" media="screen">
  /* #latestblog {

    background-image: url(/images/backgrounds/blog.jpg);
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
 } 
 */
</style> --}}

<section class="probootstrap_section" id="latestblog">
  <div class="container">
    <div class="row text-center mb-5">
      <div class="col-md-12">
        <h2 class="display-4 border-bottom probootstrap-section-heading">Latest From the Blog</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel blog-slider">
          @foreach($posts as $post)

          @if ($post->status =='PUBLISHED')

          @php
            $truncTitle = str_limit($post->title, 25);
            $truncBody = str_limit($post->body, 35);
          @endphp

          <div class="item-wrapper">

            <a href="/blog/{{$post->slug}}" title="{{$post->title}}" class="link-mask"></a>

            <div class="media probootstrap-media d-block align-items-stretch mb-4" style="position: relative">
              <div style="position: absolute; top: 53%; right: 0; padding: 1em; background: rgba(248, 249, 250, 0.8);   font-weight: bold; color: #4b4b4b;">
                {{$post->created_at->diffForHumans()}}
                {{-- {{$post->created_at->toFormattedDateString()}} --}}
              </div>
              <a href="/blog/{{$post->slug}}" title="{{$post->title}}"><img src="{{$post->image}}" alt="" class="img-fluid"></a>

              <div class="media-body">

                <a href="/blog/{{$post->slug}}" title="{{$post->title}}">

                <h5 class="mb-3">{{$post->title}}</h5> 

                <p>{!!$truncBody!!}</p>

                </a>

              </div>

            </div>

          </div>

          @endif

          @endforeach

        </div>
      </div>
    </div>
  </div>
</section>