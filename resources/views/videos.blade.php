@extends('layouts.main')


@section('content')
	<div class="wrapper light-wrapper">
      <div class="container-fluid inner pt-70 pt-sm-20">
        <h2 class="heading text-center">Latest videos</h2>
        <div class="space20"></div>
         
		<div class="row">
          <div class="col-lg-6">
			  <div class="wrapper dark-wrapper inverse-text shadow rounded">
            <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="0Z8J3axc0oY"></div>
			  <h6 class="mb-10 p-2 px-3">Video title</h6>
			  </div>
          </div>
			<div class="col-lg-6">
			<div class="wrapper dark-wrapper inverse-text shadow rounded">
            <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="VSqkL31w69k"></div>
			<h6 class="mb-10 p-2 px-3">Video title</h6>
			</div>
          </div>  
					  <div class="col-lg-12">
					  <div class="pagination bg text-center">
						  <div class="space50"></div>
          <ul>
            <li><a href="#" class="btn btn-white shadow"><i class="mi-arrow-left"></i></a></li>
            <li class="active"><a href="#" class="btn btn-white shadow"><span>1</span></a></li>
            <li><a href="#" class="btn btn-white shadow"><span>2</span></a></li>
            <li><a href="#" class="btn btn-white shadow"><span>3</span></a></li>
            <li><a href="#" class="btn btn-white shadow"><i class="mi-arrow-right"></i></a></li>
          </ul>
        </div>
					  </div>
          <!-- /column -->
        </div>
        
      </div>
    </div>
  
@endsection