@extends('layouts.main')


@section('content')
	<div class="wrapper light-wrapper">
      <div class="container-fluid inner pt-70 pt-sm-20">
        <h2 class="heading text-center">Before and after {{$user ? 'provided by '.$user->name : '' }}</h2>
        <div class="space20"></div>
         
			   <div id="cube-inline-6-filter" class="cbp-filter-container text-center">
            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All treatments</div>
                  <div data-filter=".botox" class="cbp-filter-item">Botox</div>
                  <div data-filter=".juvederm" class="cbp-filter-item">Juvederm</div>
                  <div data-filter=".bodycontouring" class="cbp-filter-item">Body contouring</div>
                  <div data-filter=".peels" class="cbp-filter-item">Peels</div>
          </div>
     
        <div class="clearfix"></div>
        <div class="space30"></div>
        <div id="cube-inline-6" class="cbp cbp-images light-gallery">
			
@foreach($beforeAfters as $beforeAfter)
          
          <div class="cbp-item text-center bodycontouring dark-wrapper inverse-text shadow rounded">
            <figure class="overlay overlay4 rounded">
				<a href="/storage/{{$beforeAfter->before}}" title="{{ucwords(strtolower($beforeAfter->title))}}"><img src="/storage/{{$beforeAfter->before}}" alt="" /></a>

              <figcaption class="d-flex">
                <div class="align-self-center mx-auto">
                  <div class="icon fs-50 color-dark mb-20"><i class="si-design_zoom-tool"></i></div>
                </div>
              </figcaption>
            </figure>
			  <div class="px-3">
				  <h5 class="m-0 mt-3 text-uppercase">{{ucwords(strtolower($beforeAfter->title))}}</h5>
				  <p class="m-0">{{$beforeAfter->body}}</p>
				  <div class="meta mb-3 text-capitalize">
				  	<span class="date">{{$beforeAfter->created_at->diffForHumans()}}</span> 
				  	<span class="author">{{$beforeAfter->user()->company}}</span> 
				  	<span><i class="fa fa-thumbs-up"></i> 10</span> 
				  	<span class="category">{{$beforeAfter->getCategories()[0]->name}}</span>
				</div>
			  </div>
          </div>
@endforeach
			
       
        
        </div>
      </div>
    </div>
@endsection