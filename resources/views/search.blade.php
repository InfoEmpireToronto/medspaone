@extends('layouts.main')


@section('content')
	<div class="wrapper gray-wrapper">
      <div class="container inner">
        <h2 class="heading text-center">Search Results</h2>
      <div class="space20"></div>
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            @foreach($results as $result)

              <div>
                <h3><a href="/{{$result->type}}/{{$result->slug}}" >{{$result->title}}</a></h3>
                <p>{!! substr(strip_tags($result->body), 0, 200) !!}... <a href="/{{$result->type}}/{{$result->slug}}">Read More</a></p>

              </div>
            @endforeach
         </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
@endsection