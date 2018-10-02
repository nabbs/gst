<style>
  #page-header {
    background-image: url('/images/backgrounds/flights-1.jpg');
  }
</style>
<section class="probootstrap-cover relative" id="page-header">
  <div class="container">
    <div class="row align-items-center text-center">
      <div class="col-md-12">
		@if ($post->status =='PUBLISHED')

        <h1 class="probootstrap-animate">{{ $post->title }}</h1>

        @endif
      </div>
    </div>
  </div>
</section>