@extends('layouts.main')



@section('css')
  <style type="text/css">
    #map {
        height: 100%;
      }

  </style>
@endsection

@section('content')


	<!-- /.wrapper -->
    <div class="wrapper light-wrapper">
      <div class="image-block-wrapper" id="find">
        <div class="image-block col-lg-6 offset-lg-6 d-none d-lg-block">
          <div class="image-block-bg bg-image" data-image-src="/style/images/logo-large.png">
      
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5761.109462578503!2d-79.471203!3d43.782101!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5b844e921b65acf5!2sInfoEmpire!5e0!3m2!1sen!2sca!4v1555101204228!5m2!1sen!2sca" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe> -->
        <div id="map"></div> 
      </div>
        </div>
        <!--/.image-block -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 ">
              <div class="pt-20">
          <div class="row">
            <div class="col-sm-8"><h2 class="section-title">Find an expert</h2></div> 
           <!--  <div class="col-sm-4">
              <div class="form-group custom-select-wrapper">
                <select class="custom-select">
                  <option selected>Sort by...</option>
                  <option value="rel">Sort by relevance</option>
                  <option value="distance">Sort by distance</option>
                </select>
              </div>
            </div> -->
          </div>
               
      
            <form>
				
				<div class="row">
          <div class="col-sm-12">
			  <div class="input-group mb-20 mr-sm-2">
              <input type="text" class="form-control mr-sm-2 bg-white shadow" id="searchTerm" placeholder="Search By Name Or Location...">
          
                <!-- <input type="text" class="form-control bg-white shadow" id="inlineFormInputGroupUsername2" placeholder="Search by name..."> -->
          
              </div>
            </div>
          
          <!-- <div class="col-sm-4">
              <button type="submit" class="btn mb-20 btn-purple ml-md-0  shadow float-none float-md-right">Search &nbsp; &nbsp; &nbsp;<i class="fa fa-search"></i></button>
          </div> -->
        </div>
        
<!--
                <div class="input-group mb-20 mr-sm-2">
              <input type="text" class="form-control mr-sm-2 bg-white shadow" id="inlineFormInputName2" placeholder="Your location">
          
                <input type="text" class="form-control bg-white shadow" id="inlineFormInputGroupUsername2" placeholder="Search by name...">
          
              </div>

        <div class="row">
          <div class="col-sm-8">
        
        <div class="form-group custom-select-wrapper">
              <select class="custom-select bg-white shadow">
                <option selected>Pick a procedure</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="col-sm-4">
              <button type="submit" class="btn mb-20  ml-md-0 btn-block shadow ">Search <i class="fa fa-search"></i></button>
          </div>
        </div>-->
            </form>
          <hr class="mb-20 p-0">
              </div>
        
        <div id="search-results">
              <ul class="image-list" id="locationList">
              @foreach($locations as $l)
          
                <li class="{{ $l->featured ? 'bg-pastel-orange' : '' }}" >
                  <div class="row" id="location-{{$l->id}}">
                    <div class="col-sm-8 mb-0">
                          <figure class="rounded"><a href="/profile/{{$l->user()->slug}}"><img src="{{ $l->user()->logo ? '/storage/'.$l->user()->logo : '/style/images/art/a5.jpg'}}" alt="" /></a></figure>
                          <div class="post-content">
                            <h6 class="post-title"> <a href="/profile/{{$l->user()->slug}}">{{$l['title']}}</a> </h6>
                            <p>{{$l['address']}}</p>
                            <div class="meta">
                              <span>
                                <a href="/profile/{{$l->user()->slug}}">
                                  <i class="fa fa-map-marker"></i> &#8249; <span class="distance">-</span> km 
                                </a>
                              </span>
                              <span><a href="#" class="hover has-tooltip" title="<strong>Toronto</strong><br>{{$l['address']}}" data-html="true" data-placement="right"><i class="fa fa-building-o"></i> 1 location </a></span>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-4 text-center">
                      <a href="profile/{{$l->user()->slug}}" class="btn  btn-s btn-{{ $l->featured ? 'red' : 'blue' }} float-none float-md-right mb-0 mt-sm-5">View profile</a>
                    </div>
                  </div>
                </li>
              @endforeach
				  
				  
<!--
				   <li class="bg-pastel-orange">
					<div class="row">
						<div class="col-sm-8 mb-0">
                  <figure class="rounded"><a href="profile.php"><img src="style/images/art/a1.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="profile.php">Sarah Johnson, MD</a>&nbsp;<span class="badge badge-pill bg-pastel-red float-right mb-2 mr-3"><i class="si-badges_ribbon-2"></i> Trusted</span> </h6>
					  <p>5000 Dufferin St, Toronto, ON M3H 5T5 </p>
                    <div class="meta"><span><a href="profile.php"><i class="fa fa-map-marker"></i> &#8249; 3 km </a></span><span><a href="#" class="hover has-tooltip" title="<strong>Toronto</strong><br>5000 Dufferin St, Toronto, ON M3H&nbsp;5T5<hr><strong>Mississauga</strong><br>Ponytrail Dr, Mississauga, ON L4WN&nbsp;2Y1" data-html="true" data-placement="right"><i class="fa fa-building-o"></i> 2 locations </a></span></div>
                  </div>
						</div>
						<div class="col-sm-4">
				<a href="profile.php" class="btn btn-s btn-aqua float-right mb-0">View profile</a>
						</div>
						</div>
                </li>
				  
				 
				  
				  <li class="bg-pastel-pink">
					<div class="row">
						<div class="col-sm-8 mb-0">
                  <figure class="rounded"><a href="profile.php"><img src="style/images/art/a5.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="profile.php">Leila Black, MD</a>&nbsp;<span class="badge badge-pill bg-pastel-violet float-right mb-2 mr-3"><i class="si-badges_ribbon-3"></i> Sponsored</span></h6>
					  <p>5000 Dufferin St, Toronto, ON M3H 5T5 </p>
                    <div class="meta"><span><a href="profile.php"><i class="fa fa-map-marker"></i> &#8249; 3 km </a></span><span><a href="#" class="hover has-tooltip" title="<strong>Toronto</strong><br>5000 Dufferin St, Toronto, ON M3H&nbsp;5T5<hr><strong>Mississauga</strong><br>Ponytrail Dr, Mississauga, ON L4WN&nbsp;2Y1" data-html="true" data-placement="right"><i class="fa fa-building-o"></i> 2 locations </a></span></div>
                  </div>
						</div>
						<div class="col-sm-4">
				<a href="profile.php" class="btn btn-s btn-aqua float-right mb-0">View profile</a>
						</div>
						</div>
                </li>
				  
				   <li class="bg-pastel-green">
					<div class="row">
						<div class="col-sm-8 mb-0">
                  <figure class="rounded"><a href="profile.php"><img src="style/images/art/a5.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="profile.php">Leila Black, MD</a>&nbsp;<span class="badge badge-pill bg-pastel-teal float-right mb-2 mr-3"><i class="si-ecommerce_star-favorites"></i> Favourite</span></h6>
					  <p>5000 Dufferin St, Toronto, ON M3H 5T5 </p>
                    <div class="meta"><span><a href="profile.php"><i class="fa fa-map-marker"></i> &#8249; 3 km </a></span><span><a href="#" class="hover has-tooltip" title="<strong>Toronto</strong><br>5000 Dufferin St, Toronto, ON M3H&nbsp;5T5<hr><strong>Mississauga</strong><br>Ponytrail Dr, Mississauga, ON L4WN&nbsp;2Y1" data-html="true" data-placement="right"><i class="fa fa-building-o"></i> 2 locations </a></span></div>
                  </div>
						</div>
						<div class="col-sm-4">
				<a href="profile.php" class="btn btn-s btn-aqua float-right mb-0">View profile</a>
						</div>
						</div>
                </li>
-->
				  
				  
              </ul>
              <!-- /.image-list -->
          
        
        
        </div>    
        
        
              <!--/.box -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/.container-fluid -->
      </div>
      <!--/.image-block-wrapper -->
    </div>
@endsection

@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnKC3LbIqv3N657fP7u3H8mTLzOa3V8_w"></script>
    <script>
      // In the following example, markers appear when the user clicks on the map.
      // Each marker is labeled with a single alphabetical character.
      var currentLat = 0;
      var currentLon = 0;
      var map = null;

      data = [ 
      <?php forEach($locations as $l)
      {
        echo "{ 
                    title: '{$l['title']}',
                    id: '{$l['id']}',
                    lat: '{$l['lat']}', 
                    lon: '{$l['lon']}',
                    distance: {$l['distance']},
                    featured: {$l['featured']}
                  },";
      }
                
      ?>
        ];

      $(document).ready(function(){
        showPosition(false);

        $("#searchTerm").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#locationList li").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
        // navigator.geolocation.getCurrentPosition(showPosition);
      });


      function showPosition(position) 
      {
        currentLat = {{$geoLocation['lat']}};//43.6532;//position.coords.latitude;
        currentLon = {{$geoLocation['lon']}};//-79.3832;//position.coords.longitude;
        var myLatlng = new google.maps.LatLng(currentLat,currentLon);
        var mapOptions = {
          zoom: 10,
          center: myLatlng
        }
        map = new google.maps.Map(document.getElementById("map"), mapOptions);

        // $(data).each(function(k, v){
        //   // console.log(v,k);
        //   data[k].distance = distanceBetweenPoints(currentLat, currentLon, v.lat, v.lon);
        // });
        // data = data.sort((a, b) => (a.distance > b.distance) ? 1 : -1);
        updateMap(data);
        
      }

      function updateMap(data)
      {
// console.log(data);

        $(data).each(function(k,location)
        {
          // console.log(location.distance);
          if(location.distance > 20)
          {
            // $('#location-'+location.id).parent().hide();
            // console.log('skipping:'+location.title);
            // return;
          }

          $('#location-'+location.id+' .distance').html(Math.ceil(location.distance));
            var d = {
                position: new google.maps.LatLng(location.lat,location.lon),
                title:location.title,
                
            };
            if(location.featured)
            {
              d.icon = {
                  url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png"
                };
            }else{
              d.icon = {
                  url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                };
            }
            var marker = new google.maps.Marker(d);
            marker.setMap(map);
        });
        
       

      }

      function distanceBetweenPoints(lat1, lng1, lat2, lng2) 
      {
        var RADIUS_EARTH = 6371;            // Radius of the earth in kilometers.
        var DEG_TO_RAD = Math.PI / 180;     // To convert degrees to radians.

        var dLat = (lat2 - lat1) * DEG_TO_RAD;
        var dLng = (lng2 - lng1) * DEG_TO_RAD;
        lat1 = lat1 * DEG_TO_RAD;
        lat2 = lat2 * DEG_TO_RAD;

        var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                Math.sin(dLng / 2) * Math.sin(dLng / 2) *
                Math.cos(lat1) * Math.cos(lat2);
        var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

        return RADIUS_EARTH * c;
      };
    </script>

@endsection