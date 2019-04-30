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
			
			
          <div class="cbp-item text-center bodycontouring dark-wrapper inverse-text shadow rounded">
            <figure class="overlay overlay4 rounded">
				<a href="/style/images/before-after.jpg" title="Body sculpting"><img src="/style/images/before-after.jpg" alt="" /></a>

              <figcaption class="d-flex">
                <div class="align-self-center mx-auto">
                  <div class="icon fs-50 color-dark mb-20"><i class="si-design_zoom-tool"></i></div>
                </div>
              </figcaption>
            </figure>
			  <div class="px-3">
			  <h5 class="m-0 mt-3 text-uppercase">Body sculpting</h5>
			  <p class="m-0">Short description</p>
			  <div class="meta mb-3 text-capitalize"><span class="date">April 12, 2019</span> <span class="author">By MedSpa.One</span> <span><i class="fa fa-thumbs-up"></i> 10</span> <span class="category">Body</span>
					</div>
			  </div>
          </div>
			
			<div class="cbp-item text-center botox dark-wrapper inverse-text shadow rounded">
            <figure class="overlay overlay4 rounded">
				<a href="/style/images/art/about11.jpg" title="Botox"><img src="/style/images/art/about11.jpg" alt="" /></a>

              <figcaption class="d-flex">
                <div class="align-self-center mx-auto">
                  <div class="icon fs-50 color-dark mb-20"><i class="si-design_zoom-tool"></i></div>
                </div>
              </figcaption>
            </figure>
			  <div class="px-3">
			  <h5 class="m-0 mt-3 text-uppercase">Botox</h5>
			  <p class="m-0">Short description</p>
			  <div class="meta mb-3 text-capitalize"><span class="date">April 12, 2019</span> <span class="author">By MedSpa.One</span> <span><i class="fa fa-thumbs-up"></i> 5 </span> <span class="category">Botox</span>
				</div>
			  </div>
          </div>
			
		  <div class="cbp-item text-center peels dark-wrapper inverse-text shadow rounded">
            <figure class="overlay overlay4 rounded">
				<a href="/style/images/art/au6.jpg" title="Peels"><img src="/style/images/art/au6.jpg" alt="" /></a>

              <figcaption class="d-flex">
                <div class="align-self-center mx-auto">
                  <div class="icon fs-50 color-dark mb-20"><i class="si-design_zoom-tool"></i></div>
                </div>
              </figcaption>
            </figure>
			  <div class="px-3">
			  <h5 class="m-0 mt-3 text-uppercase">Peels</h5>
			  <p class="m-0">Short description</p>
			  <div class="meta mb-3 text-capitalize"><span class="date">April 12, 2019</span> <span class="author">By MedSpa.One</span> <span><i class="fa fa-thumbs-up"></i> 5 </span> <span class="category">Peels</span>
				</div>
			  </div>
          </div>
			
			<div class="cbp-item text-center juvederm dark-wrapper inverse-text shadow rounded">
            <figure class="overlay overlay4 rounded">
				<a href="/style/images/art/au3.jpg" title="Juvederm"><img src="/style/images/art/au3.jpg" alt="" /></a>

              <figcaption class="d-flex">
                <div class="align-self-center mx-auto">
                  <div class="icon fs-50 color-dark mb-20"><i class="si-design_zoom-tool"></i></div>
                </div>
              </figcaption>
            </figure>
			  <div class="px-3">
			  <h5 class="m-0 mt-3 text-uppercase">Juvederm</h5>
			  <p class="m-0">Short description</p>
			  <div class="meta mb-3 text-capitalize"><span class="date">April 12, 2019</span> <span class="author">By MedSpa.One</span> <span><i class="fa fa-thumbs-up"></i> 5 </span> <span class="category">Juvederm</span>
				</div>
			  </div>
          </div>
			
			
			
			
			
			
			 <div class="cbp-item text-center bodycontouring dark-wrapper inverse-text shadow rounded">
            <figure class="overlay overlay4 rounded">
				<a href="/style/images/art/b15.jpg" title="Body sculpting"><img src="/style/images/art/b15.jpg" alt="" /></a>

              <figcaption class="d-flex">
                <div class="align-self-center mx-auto">
                  <div class="icon fs-50 color-dark mb-20"><i class="si-design_zoom-tool"></i></div>
                </div>
              </figcaption>
            </figure>
			  <div class="px-3">
			  <h5 class="m-0 mt-3 text-uppercase">Body sculpting</h5>
			  <p class="m-0">Short description</p>
			  <div class="meta mb-3 text-capitalize"><span class="date">April 12, 2019</span> <span class="author">By MedSpa.One</span> <span><i class="fa fa-thumbs-up"></i> 10</span> <span class="category">Body</span>
				</div>
			  </div>
          </div>
			
			<div class="cbp-item text-center botox dark-wrapper inverse-text shadow rounded">
            <figure class="overlay overlay4 rounded">
				<a href="/style/images/art/b23.jpg" title="Botox"><img src="/style/images/art/b23.jpg" alt="" /></a>

              <figcaption class="d-flex">
                <div class="align-self-center mx-auto">
                  <div class="icon fs-50 color-dark mb-20"><i class="si-design_zoom-tool"></i></div>
                </div>
              </figcaption>
            </figure>
			  <div class="px-3">
			  <h5 class="m-0 mt-3 text-uppercase">Botox</h5>
			  <p class="m-0">Short description</p>
			  <div class="meta mb-3 text-capitalize"><span class="date">April 12, 2019</span> <span class="author">By MedSpa.One</span> <span><i class="fa fa-thumbs-up"></i> 5 </span> <span class="category">Botox</span>
				</div>
			  </div>
          </div>
			
		  <div class="cbp-item text-center peels dark-wrapper inverse-text shadow rounded">
            <figure class="overlay overlay4 rounded">
				<a href="/style/images/art/bodisculpting-3.jpg" title="Peels"><img src="/style/images/art/bodisculpting-3.jpg" alt="" /></a>

              <figcaption class="d-flex">
                <div class="align-self-center mx-auto">
                  <div class="icon fs-50 color-dark mb-20"><i class="si-design_zoom-tool"></i></div>
                </div>
              </figcaption>
            </figure>
			  <div class="px-3">
			  <h5 class="m-0 mt-3 text-uppercase">Peels</h5>
			  <p class="m-0">Short description</p>
			  <div class="meta mb-3 text-capitalize"><span class="date">April 12, 2019</span> <span class="author">By MedSpa.One</span> <span><i class="fa fa-thumbs-up"></i> 5 </span> <span class="category">Peels</span>
				</div>
			  </div>
          </div>
			
			<div class="cbp-item text-center juvederm dark-wrapper inverse-text shadow rounded">
            <figure class="overlay overlay4 rounded">
				<a href="/style/images/art/co8.jpg" title="Juvederm"><img src="/style/images/art/co8.jpg" alt="" /></a>

              <figcaption class="d-flex">
                <div class="align-self-center mx-auto">
                  <div class="icon fs-50 color-dark mb-20"><i class="si-design_zoom-tool"></i></div>
                </div>
              </figcaption>
            </figure>
			  <div class="px-3">
			  <h5 class="m-0 mt-3 text-uppercase">Juvederm</h5>
			  <p class="m-0">Short description</p>
			  <div class="meta mb-3 text-capitalize"><span class="date">April 12, 2019</span> <span class="author">By MedSpa.One</span> <span><i class="fa fa-thumbs-up"></i> 5 </span> <span class="category">Juvederm</span>
				</div>
			  </div>
          </div>
			
			
       
        
        </div>
      </div>
    </div>
@endsection