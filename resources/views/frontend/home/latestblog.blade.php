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
    <div class="row text-center mb-3">
      <div class="col-md-12">
        <h2 class="display-4 border-bottom probootstrap-section-heading">Latest From the Blog</h2>
        <p>Explore the latest inspirations and city guides </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel blog-slider">
          @foreach($posts as $post)

          @if ($post->status =='PUBLISHED')

          @php
            $truncTitle = str_limit($post->title, 25);
            $truncBody = str_limit($post->body, 101);
          @endphp

          <div class="item-wrapper">

           <div class="package-wiget" style="position: relative">
              
              <div class="grid">
                <figure class="effect-milo" style="position: relative">
                  <a href="/blog/{{ $post->slug }}"><img src="{{$post->image}}" title="{{ $post->title }}" class="img-fluid">
                  </a>
                  <div style="position: absolute; bottom: 0; right: 0; padding: 1em; background: rgba(248, 249, 250, 0.8);   font-weight: bold; color: #4b4b4b;">
                    {{$post->created_at->diffForHumans()}}
                  </div>
                  
                </figure>
              </div>
              <div class="package-content">
                <h5>{{ $post->title }}</h5>
                {{-- <h6>By: {{ $post->author }} </h6> --}}
                <p>{!! $truncBody !!} </p>
                <div align="right">
                  
                </div>
              </div>

              <a href="/blog/{{ $post->slug }}" class="link-mask"><span style="position: absolute; right:10px; bottom:5px;">Continue Reading →</span></a>
            </div>

          </div>

          @endif

          @endforeach

        </div>
      </div>
    </div>
    <p align="right"><a href="/blog" class="btn btn-primary">View All Posts</a></p>
  </div>
</section>