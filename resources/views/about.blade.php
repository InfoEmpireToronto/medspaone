@extends('layouts.main')


@section('content')
	<div class="wrapper light-wrapper">
      <div class="container inner pt-60 pt-sm-20">
        <div class="boxed">
          <div class="bg-white shadow rounded">
            <div class="image-block-wrapper">
<!--
              <div class="image-block col-lg-6">
                <div class="image-block-bg bg-image" data-image-src="style/images/art/team.jpg"></div>
              </div>
-->
              <!--/.image-block -->
              <div class="container-fluid">
                <div class="row">
<!--					<div class="col-lg-6 offset-lg-6">-->
                  <div class="col-lg-12">
                    <div class="box d-flex">
                      <div class="align-self-center">
                        <h3 class="mb-20">About MedSpa.One</h3>
                        <p>The demand for cosmetic services has increased in the last few years. With increased demand, comes an increased number of medical spas that offer cosmetic services. The internet is good for many things; however, it has never been a great source for medical advice. We wanted to create a platform that provides valid resources to save users hours of searching up different sources and digging through false information. Medspa.one is the one place for all of your med spa needs. We have created a community that connects doctors with patients to inform with up to date news, learn about the equipment being used and how it works, and find the right fit for your needs.</p>
						 <p>When you're searching for any medical spa information or beauty solutions — our goal is to provide you with the most helpful information available. We provide content from industry experts to help you learn informative and accurate information about the med spa industry.</p>
						  <p>Our platform is made to connect med spa clients with the right med spa. We have made it simple to find best fits users needs and wants. Users get answers quick by communicating through text or video chat with one of our med spa providers to get the answers they need. A simple, informative, and effective way to find the right spa, book an appointment, and even request transportation if necessary. In addition, all payments can be done online making your experience effortless.</p>
						  <p>For doctors, it is a way to learn about patients ever changing needs and wants. Learn what is in demand in the industry and find ways to innovate your practice. Expanding your business means the need for new supplies, Medspa.one connects doctors with manufactures to get the proper equipment. </p>
						  <p>Whether it's our beautifully produced websites, our industry events and conferences or our materials library and consulting services, medspa.one informs, inspires and engages discerning consumers and businesses in design, beauty, health, and wellness.</p>
						  <p>Our mission is to build smart businesses that are driven by design an innovation in order to deliver top quality products, services, and experiences to a highly selective audience. Our brand caters to everyone, from the most affluent individuals to beauty enthusiasts, design experts to design fanatics, experts to beginners. We have created an inclusive community to cater to those looking to learn and those wanting to teach.</p>
						  <p>Through our partnerships with industry leaders, Medspa.one is able to innovate new practices, advance knowledge in this cutting-edge industry, and reach educational goals.</p>
						  <p> 
We offer each of our member’s access to the latest information and expertise, and share our advanced knowledge for a very simple: to ensure that our users receive the best care, have access to the safest tools, and receive the best results. Memberships are renewed annually to ensure that every Medspa.one member is a representative for our values. 
</p>
                       
                      </div>
                    </div>
                    <!-- /.box -->
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/.container-fluid -->
            </div>
            <!--/.image-block-wrapper -->
          </div>
          <!-- /.bg -->
        </div>
        <!-- /.boxed -->
      </div>
      <!-- /.container -->
    </div>

<div class="wrapper image-wrapper bg-image inverse-text" data-image-src="style/images/art/bg3.jpg">
      <div class="container inner pt-150 pb-150">
        <div class="row counter">
          <div class="col-md-4">
            <div class="d-flex flex-row justify-content-center">
              <div class="icon fs-58 icon-color color-dark mr-25"><i class="si-files_text-file-2"></i></div>
              <div>
                <h3 class="value">{{ $articles }}</h3>
                <p>Articles</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-4">
            <div class="d-flex flex-row justify-content-center">
              <div class="icon fs-58 icon-color color-dark mr-25"> <i class="si-ui_share"></i> </div>
              <div>
                <h3 class="value">157</h3>
                <p>Likes</p>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-md-4">
            <div class="d-flex flex-row justify-content-center">
              <div class="icon fs-58 icon-color color-dark mr-25"> <i class="si-ui_users"></i> </div>
              <div>
                <h3 class="value">{{ $members }}</h3>
                <p>Members</p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </div>

<!--<div class="wrapper light-wrapper">
      <div class="container inner">
        <h2 class="section-title text-center">Happy Customers</h2>
        <div class="cube-carousel cbp">
          <div class="cbp-item">
            <div class="box bg-white shadow">
              <blockquote class="icon icon-left">
                <p>Search engine optimization and the structuring of pages by positioning keywords in effective places. We offer customized e-marketing campaigns to improve your Internet presence by maintaining targeted traffic, improving conversion rates and sales overall.</p>
                <footer class="blockquote-footer">Connor Gibson</footer>
              </blockquote>
            </div>
          </div>
          <div class="cbp-item">
            <div class="box bg-white shadow">
              <blockquote class="icon icon-left">
                <p>SSearch engine optimization and the structuring of pages by positioning keywords in effective places. We offer customized e-marketing campaigns to improve your Internet presence by maintaining targeted traffic, improving conversion rates and sales overall.</p>
                <footer class="blockquote-footer">Coriss Ambady</footer>
              </blockquote>
            </div>
          </div>
          <div class="cbp-item">
            <div class="box bg-white shadow">
              <blockquote class="icon icon-left">
                <p>Search engine optimization and the structuring of pages by positioning keywords in effective places. We offer customized e-marketing campaigns to improve your Internet presence by maintaining targeted traffic, improving conversion rates and sales overall.</p>
                <footer class="blockquote-footer">Barclay Widerski</footer>
              </blockquote>
            </div>
          </div>
          <div class="cbp-item">
            <div class="box bg-white shadow">
              <blockquote class="icon icon-left">
                <p>Search engine optimization and the structuring of pages by positioning keywords in effective places. We offer customized e-marketing campaigns to improve your Internet presence by maintaining targeted traffic, improving conversion rates and sales overall.</p>
                <footer class="blockquote-footer">Nikola Brooten</footer>
              </blockquote>
            </div>
          </div>
          <div class="cbp-item">
            <div class="box bg-white shadow">
              <blockquote class="icon icon-left">
                <p>Search engine optimization and the structuring of pages by positioning keywords in effective places. We offer customized e-marketing campaigns to improve your Internet presence by maintaining targeted traffic, improving conversion rates and sales overall.</p>
                <footer class="blockquote-footer">Jackie Sanders</footer>
              </blockquote>
            </div>
          </div>
          <div class="cbp-item">
            <div class="box bg-white shadow">
              <blockquote class="icon icon-left">
                <p>Search engine optimization and the structuring of pages by positioning keywords in effective places. We offer customized e-marketing campaigns to improve your Internet presence by maintaining targeted traffic, improving conversion rates and sales overall.</p>
                <footer class="blockquote-footer">Cory Zamora</footer>
              </blockquote>
            </div>
          </div>
          <div class="cbp-item">
            <div class="box bg-white shadow">
              <blockquote class="icon icon-left">
                <p>Search engine optimization and the structuring of pages by positioning keywords in effective places. We offer customized e-marketing campaigns to improve your Internet presence by maintaining targeted traffic, improving conversion rates and sales overall.</p>
                <footer class="blockquote-footer">Pierce Bailey</footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>-->

<!-- <div class="wrapper gray-wrapper">
      <div class="container inner">
        <h2 class="section-title text-center">Instagram Feed</h2>
        <p class="lead text-center">Here you will find the latest shots from our Instagram feed.</p>
        <div class="space20"></div>
        <div class="tiles tiles-s">
          <div id="instafeed" class="items row"></div>
        </div>
        /.tiles 
        <div class="space40"></div>
        <div class="text-center"><a href="#" class="btn">Instagram Page</a></div>
      </div>
    </div>-->
@endsection