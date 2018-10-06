@extends ('frontend.layouts.master')
@section('title', 'Create Blog Post at GoSearchTravel.com')
@section ('content')

<style>
  #page-header {
    background-image: url('/images/backgrounds/flights-1.jpg');
  }
</style>
<section class="probootstrap-cover relative" id="page-header">
  <div class="container">
    <div class="row align-items-center text-center">
      <div class="col-md-12">


        <h1 class="probootstrap-animate">Create New Post</h1>

      </div>
    </div>
  </div>
</section>

<section class="probootstrap_section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        
        <div>
          <form action="/blog/posts" method="POST">
            {{csrf_field()}}
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" placeholder="Title" required>
            </div>
            <div class="form-group">
              <label for="body">Body*</label>
              <textarea class="form-control" name="body" required placeholder="Post Body"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Create Post</button>
            </div>
          </form>
        </div>
      </div>
          <div class="col-md-4">

        <h5 class="card-header">Recent Posts</h5>
        <ul class="list-group mb-lg-5">

          @foreach($posts as $post)
            @if ($post->status =='PUBLISHED')
            <li class="list-group-item">
              <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
            </li>
            @endif
          @endforeach
        </ul>

        <h5 class="card-header">Topics</h5>
        <ul class="list-group mb-lg-5">
          @foreach($category as $category)
          <li class="list-group-item"><a href="category/{{ $category->id }}">{{ $category->name }}</a></li>
          @endforeach
        </ul>

        @include('frontend.layouts.adblock')

        </div>
    </div>
  </div>
</section>
@endsection