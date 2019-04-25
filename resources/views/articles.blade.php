@extends('layouts.main')


@section('content')
	
<div class="wrapper light-wrapper">
      <div class="container-fluid inner pt-20 pt-sm-20">
        <h1 class="heading text-center">All Articles {{ $user ? 'For '.$user->name : '' }}</h1>
        
        <div class="tiles grid">
          <div class="items row isotope boxed grid-view">
        
        
        @foreach($articles as $article)
          <!--  <div class="item grid-sizer col-6 col-sm-6 col-md-4 col-lg-3">
              <div class="box bg-white shadow p-20">
                <figure class="main mb-20 overlay overlay1 rounded"><a href="article/40"><img src="style/images/art/ge1.jpg" alt="" /></a>
                  <figcaption>
                    <h5 class="text-uppercase from-top mb-0">Read more</h5>
            <p></p>
                  </figcaption>
          <div class="category">Body contouring</div>
                </figure>
          
                <h6 class="mb-10">Tone Muscles and Burn Fat with Zero Downtime</h6>
          <p class="mb-5">Short blurb...</p>
          <div class="arrow-link"><a href="article/40" class="text-muted">Read article <i class="mi-arrow-right"></i></a> </div>
              </div>
            </div> -->

            <div class="item grid-sizer col-6 col-sm-6 col-md-4 col-lg-3">
              <div class="box bg-white shadow p-20">
                <figure class="main mb-20 overlay overlay1 rounded"><a href="/profile/{{$article->author_id}}#Articles">
                  <img src="/storage/{{$article->image}}" alt="" /></a>
                  <figcaption>
                    <h5 class="text-uppercase from-top mb-0">Read more</h5>
                      <p></p>
                  </figcaption>
                    <div class="category">{{$article->getCategories()[0]->name}}</div>
                </figure>
                  
                <h6 class="mb-0">{{ucwords(strtolower($article->title))}}</h6>

              </div>
              <!-- /.box -->
            </div>
        
        @endforeach 
      
           
          </div>
          <!--/.row -->
        </div>
        <!--/.tiles -->
      @if($user)
         <div class="space70"></div>
        <div class="pagination bg text-center">
          <div class="col-lg-12 text-center"><div class="space20"></div>
            <a href="/profile/{{$user->id}}" class="btn">Back To Profile <i class="fa fa-caret-right"></i></a>
            </div>
          <!-- <ul>
            <li><a href="#" class="btn btn-white shadow"><i class="mi-arrow-left"></i></a></li>
            <li class="active"><a href="#" class="btn btn-white shadow"><span>1</span></a></li>
            <li><a href="#" class="btn btn-white shadow"><span>2</span></a></li>
            <li><a href="#" class="btn btn-white shadow"><span>3</span></a></li>
            <li><a href="#" class="btn btn-white shadow"><i class="mi-arrow-right"></i></a></li>
          </ul> -->
        </div>
        @endif
      </div>
      <!-- /.container -->
    </div>

@endsection