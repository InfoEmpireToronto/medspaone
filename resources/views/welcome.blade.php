@extends('layouts.main')

@section('javascript')
<script type="text/javascript">
    
</script>

@endsection



@section('content')
    <div class="wrapper light-wrapper">
      <div class="container-fluid inner pt-20 pb-0">
        <h1 class="heading text-center">Latest Med Spa publications</h1>


        <div class="tiles grid">
          <div class="items row isotope boxed grid-view">

            @foreach($articles as $article)
            @if($article->type == 'ba')
            <div class="item grid-sizer col-6 col-sm-6 col-md-4 col-lg-3">
              <div class="box box-ba bg-white shadow p-20">
                <figure class="main mb-20 overlay overlay1 rounded"><a href="/profile/{{$article->user()->slug}}#BeforeAfter">
                  <img src="/storage/{{$article->before}}" alt="" /></a>
                  <figcaption>
                    <h5 class="text-uppercase from-top mb-0"><a href="/profile/{{$article->user()->slug}}#BeforeAfter">View more</a></h5>
                      <p></p>
                  </figcaption>
                    <div class="category"><a href="/profile/{{$article->user()->slug}}#BeforeAfter">{{$article->getCategories()[0]->name}} <span class="float-right"><i class="fa fa-address-book-o float-right"></i><i class="fa fa-address-book float-right"></i></span></a></div>
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
                    <div class="category"><a href="/profile/{{$article->user()->slug}}#Videos">{{$article->getCategories()[0]->name}}</a></div>
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
                    <div class="category"><a href="/profile/{{$article->user()->slug}}#Articles">{{$article->getCategories()[0]->name}}</a></div>
                </figure>
                  
                <h6 class="mb-0"><a href="/profile/{{$article->user()->slug}}#Articles">{{ucwords(strtolower($article->title))}}</a></h6>

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
		 <p class="text-center"> <a href="#" class="btn btn-l btn-blue shadow">View more</a></p>
        <!--/.tiles -->
		 
      </div>
		 <hr class="pt-20 pb-20">
		 <div class="container inner pt-20 pb-20">
        <h1 class="heading text-center">Latest FAQs</h1>
			 <div class="row">
          <div class="col-lg-12">
            <div id="accordion1" class="accordion-wrapper">
              <div class="card bg-white shadow">
                <div class="card-header">
                  <h3> <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1-1">Question 1</a> </h3>
                </div>
                <!-- /.card-header -->
                <div id="collapse1-1" class="collapse show">
                  <div class="card-block">
                    <p>Answer 1</p>
                  </div>
                  <!-- /.card-block -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
              <div class="card bg-white shadow">
                <div class="card-header">
                  <h3> <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse1-2">Question 2</a> </h3>
                </div>
                <!-- /.card-header -->
                <div id="collapse1-2" class="collapse">
                  <div class="card-block">
                    <p>Answer 2</p>
                  </div>
                  <!-- /.card-block -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
              <div class="card bg-white shadow">
                <div class="card-header">
                  <h3> <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse1-3">Question 3</a></h3>
                </div>
                <!-- /.card-header -->
                <div id="collapse1-3" class="collapse">
                  <div class="card-block">
                    <p>Answer 3</p>
                  </div>
                  <!-- /.card-block -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.accordion-wrapper -->
			  
			  <p class="text-center"><a href="#" class="btn">Read more <i class="mi-arrow-right"></i></a> </p>
          </div>
          <!-- /column -->
        </div>
			 
		</div>
      <!-- /.container -->
    </div>

@endsection
