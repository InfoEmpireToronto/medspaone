@extends('layouts.main')

@section('javascript')
<script type="text/javascript">
    
</script>

@endsection



@section('content')
<style type="text/css">
  .items {
    /*height: auto !important;*/
  }
</style>
    <div class="wrapper light-wrapper" id="posts">
      <div class="container-fluid inner pt-20 pb-0">
        <h1 class="heading text-center">Latest Med Spa publications</h1>


        <div class="tiles grid">
          <div class="items row isotope boxed grid-view" >
            @foreach($articles as $article)
  @if($article->type == 'ba')
  <div class="item grid-sizer col-sm-6 col-md-4 col-lg-3">
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
  <div class="item grid-sizer col-sm-6 col-md-4 col-lg-3">
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
  @elseif($article->type == 'event')
  <div class="item grid-sizer col-sm-6 col-md-4 col-lg-3">
    <div class="box bg-white shadow p-20">
      <figure class="main mb-20 overlay overlay1 rounded"><a href="/profile/{{$article->user()->slug}}#Events">
        <img src="/storage/{{$article->image}}" alt="" /></a>
        <figcaption>
          <h5 class="text-uppercase from-top mb-0"><a href="/profile/{{$article->user()->slug}}#Events">Read more</a></h5>
            <p></p>
        </figcaption>
          <div class="category">
            @foreach($article->getCategories() as $cat)
              <a style='display: inline;' href="/profile/{{$article->user()->slug}}#Articles">#{{$cat->name}}</a>
            @endforeach
          </div>
      </figure>
        
      <h6 class="mb-0"><a href="/profile/{{$article->user()->slug}}#Events">{{ucwords(strtolower($article->title))}}</a></h6>

    </div>
    <!-- /.box -->
  </div>
  <!-- https://youtu.be/IUY47HPTKi0 -->
  @elseif($article->type == 'faq')
  <!-- FAQ hardcoded -->
         <div class="item grid-sizer col-sm-6 col-md-4 col-lg-3">
    <div class="box box-faq bg-white shadow p-20">
      <figure class="main mb-20 overlay overlay1 rounded">
      <div class="category">
        @foreach($article->getCategories() as $cat)
          <a href="/profile/{{$article->user()->slug}}#faq">#{{$cat->name}} <span class="float-right"><i class="fa fa-comments"></i></span></a>
        @endforeach
      </div>
      </figure>
        
      <h6><a href="/profile/{{$article->user()->slug}}#faq">{{ucwords(strtolower($article->title))}}</a></h6>

      <p class="mb-5">{!! substr(strip_tags($article->body),0,200) !!}</p>
      <div class="arrow-link">
        <a href="/profile/{{$article->user()->slug}}#faq" class="text-muted">
          Read more FAQ <i class="mi-arrow-right"></i>
        </a> 
      </div>
    </div>
  </div>
<!-- FAQ hardcoded END -->  

 <!--  <div class="item grid-sizer col-sm-6 col-md-4 col-lg-3">
    <div class="box bg-white shadow p-20">
      <figure class="main mb-20 overlay overlay1 rounded"><a href="/profile/{{$article->user()->slug}}#Events">
        <img src="/storage/{{$article->image}}" alt="" /></a>
        <figcaption>
          <h5 class="text-uppercase from-top mb-0"><a href="/profile/{{$article->user()->slug}}#Events">Read more</a></h5>
            <p></p>
        </figcaption>
          <div class="category">
            @foreach($article->getCategories() as $cat)
              <a style='display: inline;' href="/profile/{{$article->user()->slug}}#Articles">#{{$cat->name}}</a>
            @endforeach
          </div>
      </figure>
        
      <h6 class="mb-0"><a href="/profile/{{$article->user()->slug}}#Events">{{ucwords(strtolower($article->title))}}</a></h6>

    </div>
  </div> -->
  @else
  <div class="item grid-sizer col-sm-6 col-md-4 col-lg-3">
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
  <!--/.item -->
  @endforeach

          </div>
          <!--/.row -->
        </div>
		  <div class="space50"></div>
		 <p class="text-center"> <button onclick='loadItems()' class="btn btn-l btn-blue shadow">View more</button></p>
        <!--/.tiles -->
		 
      </div>
		 <hr class="pt-20 pb-20">
		 <div class="container inner pt-20 pb-20">
        <h1 class="heading text-center">Latest FAQs</h1>
			 <div class="row">


          <div class="col-lg-12">
            <div id="accordion1" class="accordion-wrapper">

@foreach($faqs as $faq)
              <div class="card bg-white shadow">
                <div class="card-header">
                  <h3> <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1-{{$faq->id}}">{{str_replace('\\', '', $faq->question)}}</a> </h3>
                </div>
                <!-- /.card-header -->
                <div id="collapse1-{{$faq->id}}" class="collapse {{ $loop->index == 0 ? 'show' : '' }}">
                  <div class="card-block">
                    <p>{!! str_replace('\\', '', $faq->answer) !!}</p>
                  </div>
                  <!-- /.card-block -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
@endforeach


            </div>
            <!-- /.accordion-wrapper -->
			  
			  <p class="text-center"><a href="/faq" class="btn">Read more <i class="mi-arrow-right"></i></a> </p>
          </div>
          <!-- /column -->
        </div>
			 
		</div>
      <!-- /.container -->
    </div>

@endsection

@section('js')
<script type="text/javascript">
var numPosts = 10;
var $isogrid = window.myisogrid;
  $(document).ready(function(){
    // loadItems();
  });

  function loadItems()
  {
    $.ajax({
        url: '{{ route('getHomepageItems') }}',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        type: 'POST',
        data: {
          start: numPosts
        },
        // datatype: 'json',
        success: renderItems,
        error: function (jqXHR, textStatus, errorThrown) {  }
    });
  }

  function renderItems(data)
  {
    var items = $(data).find('div.item');
    window.myisogrid.append(items);
    window.myisogrid.isotope('appended', items);
    // window.myisogrid.isotope('layout');
    // $(window).delay(500).trigger('resize');
    setTimeout(function(){

    window.myisogrid.isotope({
            masonry: {
                columnWidth: window.myisogrid.width() / 12
            }
        });
  }, 800);


    numPosts += 10;
  }

  

</script>
@stop