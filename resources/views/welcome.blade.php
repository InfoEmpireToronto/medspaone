@extends('layouts.main')

@section('javascript')
<script type="text/javascript">
    
</script>

@endsection



@section('content')
    <div class="wrapper light-wrapper">
      <div class="container-fluid inner pt-70">
        <h1 class="heading text-center">Latest articles</h1>
        <h2 class="sub-heading2 text-center">Newest in the aesthetics</h2>
        <div class="space50"></div>

        <div class="tiles grid">
          <div class="items row isotope boxed grid-view">

            @foreach($articles as $article)
            <div class="item grid-sizer col-6 col-sm-6 col-md-4 col-lg-3">
              <div class="box bg-white shadow p-30">
                <figure class="main mb-20 overlay overlay1 rounded"><a href="/article/{{$article->id}}">
                  <img src="/storage/{{$article->image}}" alt="" /></a>
                  <figcaption>
                    <h5 class="text-uppercase from-top mb-0">Read more</h5>
                      <p></p>
                  </figcaption>
                    <div class="category">{{$article->title}}</div>
                </figure>
                  
                <h6 class="mb-0">{{$article->title}}</h6>

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
