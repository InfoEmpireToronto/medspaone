@extends('layouts.main')

@section('javascript')
<script type="text/javascript">
    
</script>

@endsection



@section('content')
    <div class="wrapper light-wrapper">
      <div class="container-fluid inner pt-20">
        <h1 class="heading text-center">Latest Med Spa publications</h1>


        <div class="tiles grid">
          <div class="items row isotope boxed grid-view">

            @foreach($articles as $article)
            <div class="item grid-sizer col-6 col-sm-6 col-md-4 col-lg-3">
              <div class="box bg-white shadow p-20">
                <figure class="main mb-20 overlay overlay1 rounded"><a href="/profile/{{$article->author_id}}#Articles">
                  <img src="/storage/{{$article->image}}" alt="" /></a>
                  <figcaption>
                    <h5 class="text-uppercase from-top mb-0"><a href="/profile/{{$article->author_id}}#Articles">Read more</a></h5>
                      <p></p>
                  </figcaption>
                    <div class="category"><a href="/profile/{{$article->author_id}}#Articles">{{$article->getCategories()[0]->name}}</a></div>
                </figure>
                  
                <h6 class="mb-0"><a href="/profile/{{$article->author_id}}#Articles">{{ucwords(strtolower($article->title))}}</a></h6>

              </div>
              <!-- /.box -->
            </div>
            <!--/.item -->
            @endforeach


          </div>
          <!--/.row -->
        </div>
        <!--/.tiles -->
      </div>
      <!-- /.container -->
    </div>

@endsection
