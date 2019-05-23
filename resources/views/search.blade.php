@extends('layouts.main')


@section('content')
	<div class="wrapper gray-wrapper">
      <div class="container inner pt-sm-20">
        <h2 class="heading text-center">Search Results</h2>
      <div class="space20"></div>
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
			   <ul class="image-list">
            @foreach($results as $result)
			  


              <li>
                  <figure class="rounded"><a href="/{{$result->type}}/{{$result->slug}}" ><img src="/storage/{{$result->image}}" alt="{{$result->title}}"></a></figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="/{{$result->type}}/{{$result->slug}}" >{{$result->title}}</a></h6>
                <p>{!! substr(strip_tags($result->body), 0, 200) !!}...&nbsp;<a href="/{{$result->type}}/{{$result->slug}}">Read&nbsp;more <i class="fa fa-angle-right"></i></a></p>
				  </div>
                </li>
            @endforeach
			  </ul>
         </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
@endsection

<?php


                // For Articles
                // <img src="/storage/{{$result->image}}" alt="" />

                // For Videos
                // <img src="https://img.youtube.com/vi/{{$result->link}}/0.jpg" alt="" />

                // For BA
                // <img src="/storage/{{$result->before}}" alt="" /> 



?>
