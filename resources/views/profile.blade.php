@extends('layouts.main')

@section('css')
<style type="text/css">
  .map {
    height: 200px;
  }
</style>
@stop

@section('content')
	<!-- data-image-src="insert doctor cover photo" -->

<div class="wrapper image-wrapper bg-image inverse-text" data-image-src="{{ $user->backImage ? '/storage/'.$user->backImage : '/style/images/art/bg1.jpg' }}">
      <div class="container inner pt-60 pb-60 pt-sm-20 pb-sm-20">
        <h2 class="section-title mb-40 text-center">{{ $user->company }}</h2>
		  <div class="row text-center">
          <div class="col-sm-4">
			  <p class="icon fs-48 mb-10"><i class="si-ecommerce_shop-location"></i></p> 
        @foreach($user->locations() as $location)
			   <p>{{$location->address}}</p>
         @endforeach
			  </div>
			  <div class="col-sm-4">
			  <p class="icon fs-48 mb-10"><i class="si-phone_iphone"></i></p>
				  <p><a href="tel:{{$user->phone}}" class="color-white lead">{{$user->phone}}</a></p>
			  </div>
			  <div class="col-sm-4">
			  <p class="icon fs-48 mb-10"><i class="si-hardware_computer-phone-connection"></i></p>
				  <p><a href="http://{{$user->website}}" target="_blank" class="color-white">{{$user->website}}</a></p>
     		 </div>
		  </div>
		   <div class="row text-center">
			   <div class="col-sm-12"><a href="#/chat" target="_blank" class="btn btn-red">Start video chat with an expert <i class="fa fa-video-camera"></i></a></div>
		  </div>
    </div>
</div>

    <div class="wrapper light-wrapper card">
      <div class="container inner pt-60 pt-sm-20">
        <div class="row">
          <div class="col-md-8">
			  <h3>Meet <strong class="color-default">{{ $user->name }}</strong></h3>
            <div class="tabs-wrapper bg-white shadow mb-30">
              <ul class="nav nav-tabs">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#tab1-1">Overview</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab1-2">Bio</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab1-3">Services</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab1-4">Contact</a></li>
              </ul>
              <!-- /.nav-tabs -->
              <div class="tab-content">
                <div class="tab-pane fade show active" id="tab1-1">
                <div class="image-block-wrapper mb-20">
                  <div class="image-block col-lg-6 mb-30">
                    <div class="image-block-bg bg-image rounded" data-image-src="/storage/{{$user->logo}}"></div>
                  </div>
                  <!--/.image-block -->
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-lg-6 offset-lg-6 pr-m-0 pl-m-0">
                        <div class="p-10">
                          <h4 class="mb-5">{{ $user->name }}</h4>
                          {!! $user->overview !!}
                          
                        </div>
                        <!-- /.box -->
                      </div>
                      <!--/column -->
                    </div>
                    <!--/.row -->
                  </div>
                  <!--/.container-fluid -->
                </div>
					
					
                </div>
                <div class="tab-pane fade" id="tab1-2">
                  {!! $user->bio !!}
                </div>
                <div class="tab-pane fade" id="tab1-3">
                  {!! $user->services !!}
                 
                </div>
             
				  
				  <div class="tab-pane fade" id="tab1-4">
                  <div class="form-container">
              <form action="#contact/vanilla-form" method="post" class="vanilla vanilla-form" novalidate>
                <div class="row text-center">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="name" placeholder="Your name" required="required">
                    </div>
                    <!--/.form-group -->
                  </div>
                  <!--/column -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Your e-mail" required="required">
                    </div>
                    <!--/.form-group -->
                  </div>
                  <!--/column -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="tel" class="form-control" name="tel" placeholder="Phone">
                    </div>
                    <!--/.form-group -->
                  </div>
                  <!--/column -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <!--/.form-group -->
                  </div>
                  <!--/column -->
                  <div class="col-12">
                    <textarea name="message" class="form-control" rows="3" placeholder="Type your message here..." required></textarea>
                    <div class="space20"></div>
                    <button type="submit" class="btn" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">Submit</button>
                    <footer class="notification-box"></footer>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </form>
              <!--/.vanilla-form -->
            </div>
            <!--/.form-container -->
                </div>
              </div>
              <!-- /.tab-content -->
            </div>
			  
@if($user->articles(2))
        <a id="Articles" ></a>
        <h3>Articles</h3>
        <div class="bg-white shadow mb-30 rounded">
          <div class="container-fluid p-4">
         <div class="items row isotope boxed grid-view">

@foreach($user->articles(2) as $article)
            <div class="item grid-sizer col-md-6">
              <div class="box bg-white shadow p-20">
                <figure class="main mb-20 overlay overlay1 rounded"><a href="/article/{{$article->id}}">
                  <img src="/storage/{{$article->image}}" alt="" /></a>
                  <figcaption>
                    <h5 class="text-uppercase from-top mb-0">Read more</h5>
					  <p></p>
                  </figcaption>
					

          <div class="category">{{$article->getCategories()[0]->name}}</div>
                </figure>
				  
                <h6 class="mb-10">{{ucwords(strtolower($article->title))}}</h6>
				  <p class="mb-5">{!! substr(strip_tags($article->body),0,200) !!}</p>
				  <div class="arrow-link"><a href="/article/{{$article->id}}" class="text-muted">Read article <i class="mi-arrow-right"></i></a> </div>
              </div>
            </div>
@endforeach
           </div> <div class="col-lg-12 text-center"><div class="space20"></div>
            <a href="/articles/{{$user->slug}}" class="btn">All Articles <i class="fa fa-caret-right"></i></a>
            </div>
          </div>
         
        </div>
@endif

@if($user->videos(2))

        <a id="Videos" ></a>
        <h3>Videos</h3>
        <div class="bg-white shadow mb-30 rounded">
          <div class="container-fluid p-4">
          <div class="row">
@foreach($user->videos(2) as $video)
          <div class="col-lg-6">
    			  <div class="wrapper dark-wrapper inverse-text shadow rounded">
                <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="0Z8J3axc0oY"></div>
    			  <h6 class="mb-10 p-2 px-3">Video title</h6>
    			  </div>
          </div>
    			<!-- <div class="col-lg-6">
            <div class="wrapper dark-wrapper inverse-text shadow rounded">
              <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="VSqkL31w69k"></div>
              <h6 class="mb-10 p-2 px-3">Video title</h6>
            </div>
          </div>   -->
@endforeach
				  <div class="col-lg-12 text-center">
  				  <div class="space20 d-none d-sm-block"></div>
  				  <a href="/videos/{{$user->slug}}" class="btn">All Videos <i class="fa fa-play-circle"></i></a>
				  </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
				  </div>
			  </div>
@endif
			  

@if($user->beforeAfters(2))

        <h3>Before and after photos</h3>
        
<div class="bg-white shadow mb-30 rounded">
      <div class="container-fluid p-4">
         
			   <!-- <div id="cube-inline-6-filter" class="cbp-filter-container text-center">
            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All treatments</div>
                  <div data-filter=".botox" class="cbp-filter-item">Botox</div>
                  <div data-filter=".juvederm" class="cbp-filter-item">Juvederm</div>
                  <div data-filter=".bodycontouring" class="cbp-filter-item">Body contouring</div>
                  <div data-filter=".peels" class="cbp-filter-item">Peels</div>
          </div> -->
     
        <div class="clearfix"></div>
        <div class="space30"></div>
        <div id="cube-inline-6" class="cbp cbp-images light-gallery">
			
@foreach($user->beforeAfters(2) as $beforeAfter)

          <div class="cbp-item text-center bodycontouring dark-wrapper inverse-text shadow rounded">
            <figure class="overlay overlay4 rounded">
				      <a href="/style/images/before-after.jpg" title="Body sculpting">
                <img src="/storage/{{$beforeAfter->before}}" alt="" />
              </a>

              <figcaption class="d-flex">
                <div class="align-self-center mx-auto">
                  <div class="icon fs-50 color-dark mb-20"><i class="si-design_zoom-tool"></i></div>
                </div>
              </figcaption>
            </figure>
			  <div class="px-3">
			  <h5 class="m-0 mt-3 text-uppercase">{{ucwords(strtolower($beforeAfter->title))}}</h5>
			  <p class="m-0">{!! $beforeAfter->body !!}</p>
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
				
				<div class="col-lg-12 text-center">
					  <div class="space20 d-none d-sm-block"></div>
					  <a href="/before-after/{{$user->slug}}" class="btn">All Before & After <i class="fa fa-photo"></i></a>
					  </div>
      </div>	   
				   
</div>

@endif
			  
			  @if($user->instagram)
			  <h3>Instagram Feed?</h3>
			  
			   <div class="bg-white shadow mb-30 rounded">
      <div class="container-fluid p-4">
        <div class="tiles tiles-s">
          <div id="instafeed" class="items row"></div>
        </div>
        <div class="space40"></div>
        <div class="text-center"><a href="#" class="btn">Visit Instagram Page <i class="fa fa-instagram"></i></a></div>
      </div>
    </div>
			  @endif
			  
			  
			  
			  
			  
          </div>
			
			
			
			
			
			
			
			
          <aside class="col-md-4">
              <h3>Locations</h3>
              <div id="accordion1" class="accordion-wrapper">
              
            @foreach($user->locations() as $location)
              <div class="card bg-white shadow">
                <div class="card-header">
                  <h3> <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1-1">Toronto, ON</a> </h3>
					
                </div>
                <!-- /.card-header -->
                <div id="collapse1-1" class="collapse show">
                  <div class="card-block">
                    <p class="more text-uppercase color-dark">
            				  <div class="rounded">
                        <div class="map" data-lat='{{$location->lat}}' data-lon='{{$location->lon}}' data-title='{{$location->title}}' ></div>
                        <br><i class="fa fa-map-marker"></i> {{$location->address}}</a>
            					  <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5761.109462578503!2d-79.471203!3d43.782101!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5b844e921b65acf5!2sInfoEmpire!5e0!3m2!1sen!2sca!4v1555101204228!5m2!1sen!2sca" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen ></iframe> -->
            				  </div>
@if($location->phone)   
<i class="fa fa-phone"></i> <a href="tel:{{$location->phone}}" class="color-dark">{{$location->phone}}</a><br>
@endif
@if($location->fax)
<i class="fa fa-fax"></i> <a href="fax:{{$location->fax}}" class="color-dark">{{$location->fax}}</a><br>
@endif
<i class="fa fa-envelope-o"></i> <a href="#" target="_blank" class="color-dark">Contact Us</a></p>
                  </div>
                  <!-- /.card-block -->
                </div>
                <!-- /.collapse -->
              </div>

              @endforeach
              <!-- /.card -->
           </div>
        
           
          </aside>
          <!-- /column .sidebar -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
@stop


@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnKC3LbIqv3N657fP7u3H8mTLzOa3V8_w"></script>

  <script type="text/javascript">

  $(document).ready(function(){

    $('.map').each(function(){

      lat = $(this).attr('data-lat');
      lon = $(this).attr('data-lon');
      title = $(this).attr('data-title');

      var myLatlng = new google.maps.LatLng(lat,lon);
      // console.log(myLatlng);

      var map = new google.maps.Map(this, {
          zoom: 15,
          center: myLatlng
        });
      var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(lat,lon),
                  title:title
              });
      marker.setMap(map);
    });
    @if($user->instagram)
      startMyInstagram('instafeed', {{$user->instagram}});
    @endif

  });

  </script>
@stop
