@foreach($articles as $article)
  <div>
  @if($article->type == 'ba')
  <div class="item grid-sizer col-6 col-sm-6 col-md-4 col-lg-3">
    <div class="box box-ba bg-white shadow p-20">
      <figure class="main mb-20 overlay overlay1 rounded"><a href="/profile/{{$article->user()->slug}}#BeforeAfter">
        <img src="/storage/{{$article->before}}" alt="" /></a>
        <figcaption>
          <h5 class="text-uppercase from-top mb-0"><a href="/profile/{{$article->user()->slug}}#BeforeAfter">View more</a></h5>
            <p></p>
        </figcaption>
          <div class="category"><a href="/profile/{{$article->user()->slug}}#BeforeAfter">#{{$article->getCategories()[0]->name}} <span class="float-right"><i class="fa fa-address-book-o float-right"></i><i class="fa fa-address-book float-right"></i></span></a></div>
      </figure>
        
      <h6 class="mb-0"><a href="/profile/{{$article->user()->slug}}#BeforeAfter">{{ucwords(strtolower($article->title))}}</a></h6>

    </div>
    <!-- /.box -->
  </div>
  @elseif($article->type == 'video')
  <div class="item grid-sizer col-6 col-sm-6 col-md-4 col-lg-3">
    <div class="box box-video bg-white shadow p-20">
      <figure class="main mb-20 overlay overlay1 rounded"><a href="/profile/{{$article->user()->slug}}#Videos">
        <img src="https://img.youtube.com/vi/{{$article->link}}/0.jpg" alt="" /></a>
        <figcaption>
          <h5 class="text-uppercase from-top mb-0"><a href="/profile/{{$article->user()->slug}}#Videos"><i class="fa fa-play"></i></a></h5>
        </figcaption>
          <div class="category">
            @foreach($article->getCategories() as $cat)
              <a style='display: inline;' href="/profile/{{$article->user()->slug}}#Articles">#{{$cat->name}}</a>
            @endforeach
          </div>
      </figure>
        
      <h6 class="mb-0"><a href="/profile/{{$article->user()->slug}}#Videos">{{ucwords(strtolower($article->title))}}</a></h6>

    </div>
    <!-- /.box -->
  </div>
  <!-- https://youtu.be/IUY47HPTKi0 -->
  @else
  <div class="item grid-sizer col-6 col-sm-6 col-md-4 col-lg-3">
    <div class="box bg-white shadow p-20">
      <figure class="main mb-20 overlay overlay1 rounded"><a href="/profile/{{$article->user()->slug}}#Articles">
        <img src="/storage/{{$article->image}}" alt="" /></a>
        <figcaption>
          <h5 class="text-uppercase from-top mb-0"><a href="/profile/{{$article->user()->slug}}#Articles">Read more</a></h5>
            <p></p>
        </figcaption>
          <div class="category">
            @foreach($article->getCategories() as $cat)
              <a style='display: inline;' href="/profile/{{$article->user()->slug}}#Articles">#{{$cat->name}}</a>
            @endforeach
          </div>
      </figure>
        
      <h6 class="mb-0"><a href="/profile/{{$article->user()->slug}}#Articles">{{ucwords(strtolower($article->title))}}</a></h6>

      <p class="mb-5">{!! substr(strip_tags($article->body),0,200) !!}</p>
      <div class="arrow-link">
        <a href="/article/{{$article->slug}}" class="text-muted">
          Read article <i class="mi-arrow-right"></i>
        </a> 
      </div>
    </div>
    <!-- /.box -->
  </div>
  @endif
</div>
  <!--/.item -->
  @endforeach