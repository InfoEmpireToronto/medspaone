@extends('layouts.main')


@section('content')
	
<div class="wrapper light-wrapper">
      <div class="container-fluid inner pt-20 pt-sm-20">
        <h1 class="heading text-center">All Events {{ $user ? 'For '.$user->name : '' }}</h1>
        
        <div class="tiles grid">
          <div class="items row isotope boxed grid-view">
        
        
        @foreach($events as $event)
          

           <div class="item grid-sizer col-md-3">
              <div class="box bg-white shadow p-20">
                <figure class="main mb-20 overlay overlay1 rounded"><a href="/event/{{$event->slug}}">
                  <img src="/storage/{{$event->image}}" alt="" /></a>
                  <figcaption>
                    <h5 class="text-uppercase from-top mb-0">Read more</h5>
            <p></p>
                  </figcaption>
          

          <div class="category">{{$event->getCategories()[0]->name}}</div>
                </figure>
          
                <h6 class="mb-10">{{ucwords(strtolower($event->title))}}</h6>
          <p class="mb-5">{!! substr(strip_tags($event->body),0,200) !!}</p>
          <div class="arrow-link"><a href="/event/{{$event->slug}}" class="text-muted">View Event <i class="mi-arrow-right"></i></a> </div>
              </div>
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
            <a href="/profile/{{$event->user()->slug}}" class="btn">Back To Profile <i class="fa fa-caret-right"></i></a>
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