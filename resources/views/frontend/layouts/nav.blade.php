<nav class="navbar navbar-expand-lg probootstrap_navbar">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="{{ Voyager::image ( setting('site.logo'))}}" alt="" width="130"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
    <span><i class="ion-navicon"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="probootstrap-menu">
      {!! menu('main', 'mainmenu') !!}
    </div>
  </div>
</nav>