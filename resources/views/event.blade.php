@extends('layouts.main')


@section('content')
	<div class="wrapper light-wrapper">
      <div class="container inner pt-60">
        <div class="row">
          <div class="col-md-8">
            <div class="blog classic-view">
              <div class="post text-center">
                <figure class="rounded"><div class="light-gallery">
                    <figure class="overlay overlay3 rounded">
                      <a href="/storage/{{$article->image}}">
                        <img src="/storage/{{$article->image}}" alt="" /></a>
                      </figure>
                  </div></figure>
				  
                <div class="space40"></div>
                <div class="post-content text-left">
                  <h1 class="post-title">{{ucwords(strtolower($article->title))}}</h1>
                  <div class="meta">
                    <span class="date">{{$article->created_at->diffForHumans()}}</span>
                    <span class="author">By <a href="/profile/{{$article->user()->id}}">{{$article->user()->company}}</a></span>
                    <!-- <span class="comments"><a href="#">2</a> </span> -->
                    <!-- <span><a href="#"><i class="fa fa-thumbs-up"></i> 10 </a></span> -->
                    <span class="category event"><a href="#">{{$article->getCategories()[0]->name}}</a></span>
<!--
					 <span class="social-color social-s">
						<span>Share</span>
                   <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook-f"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                  </span>
-->
					</div>
					
					
          @if($article->type == 'video')
            <div class="col-lg-12">
              <div class="wrapper dark-wrapper inverse-text shadow rounded">
                  <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="{{$article->link}}"></div>
              </div>
            </div>
            <br>
            <br>
          @endif

          {!! $article->body !!}

            
					
					
					<!-- CTA FORM -->
				  
				  <div class="space50"></div>
				  <div class="form-container bg-white shadow box">
					   <h3>Sign-up For The Event</h3>
             <input type="hidden" name="event" id="event" value="{{$article->slug}}">
              <!-- <form action="{{ route('saveContact') }}" method="post" class="vanilla vanilla-form contactForm" > -->
                <div class="row text-center" id="form-content">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <input type="text" class="form-control" name="name" placeholder="Your name" required="required">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Your e-mail" required="required">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <input type="tel" class="form-control" name="tel" placeholder="Phone">
                    </div>
                  </div>
                  <div class="col-12">
                    
                    <button type="submit" class="btn btn-red submitContact" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!" style="width:205px;">Submit</button>
                    <footer class="notification-box hidden"></footer>
                  </div>
                </div>
              <!-- </form> -->
            </div>
				  
				  <!-- CTA FORM  END-->
                 
                 <div class="sharethis-inline-share-buttons"></div>
					
				

					
                </div>
                <!-- /.post-content -->
				  
				  	
              </div>
              <!-- /.post -->
              <div class="divider-icon"><i class="si-photo_aperture"></i></div>


              <!--/.row -->
              <div id="comments">
<div class="fb-comments" data-href="{{ url()->current() }}" data-width="750" data-numposts="5"></div>
                <!-- <h4>4 Comments on "What Is a Nonsurgical Facelift?"</h4>
                <ol id="singlecomments" class="commentlist">
                  <li>
                    <div class="message">
                      <figure class="user rounded"><img alt="" src="/style/images/art/u1.jpg" /></figure>
                      <div class="message-inner">
                        <div class="info">
                          <h6><a href="#">Connor Gibson</a></h6>
                          <div class="meta"> <span class="date">January 14, 2019</span><span class="reply"><a href="#">Reply</a></span> </div>
                        </div>
                        <p>Most of us are well aware that social media has become a ubiquitous aspect of modern society. Especially among millennials and the up-and-comer Gen Z cohort, platforms like Instagram or SnapChat are accessed dozens, if not hundreds, of times a day. Fashion magazines have fallen out of fashion; a staid, static assemblage of images that young people consider dated before the mag even hits the coffee table. In comparison, young people prefer the parade of fashionistas and influencers seen on social media that provide real time sourcing for trend-scouting and hip new designers. </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="message">
                      <figure class="user rounded"><img alt="" src="/style/images/art/u2.jpg" /></figure>
                      <div class="message-inner">
                        <div class="info">
                          <h6><a href="#">Nikolas Brooten</a></h6>
                          <div class="meta"> <span class="date">February 21, 2019</span><span class="reply"><a href="#">Reply</a></span> </div>
                        </div>
                        <p>Along with the vibrant images of cool wardrobe innovations and hair and make-up trends, a steady feed of celebrities touting their pumped up pouts has spurred huge demand for dermal fillers among the young followers of such highly influential celebs. The practice of spending copious amounts of time trend-watching on social media has not escaped the notice of purveyors of aesthetic procedures, including medi-spas, plastic surgeons, and dermatologists who are always looking for the best ROI for their marketing efforts. </p>
                      </div>
                    </div>
                    <ul class="children">
                      <li class="bypostauthor">
                        <div class="message">
                          <figure class="user rounded"><img alt="" src="/style/images/art/u3.jpg" /></figure>
                          <div class="message-inner bypostauthor">
                            <div class="info">
                              <h6><a href="#">Pearce Frye</a></h6>
                              <div class="meta"> <span class="date">February 22, 2019</span><span class="reply"><a href="#">Reply</a></span> </div>
                            </div>
                            <p>Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit non.</p>
                          </div>
                        </div>
                        <ul class="children">
                          <li>
                            <div class="message">
                              <figure class="user rounded"><img alt="" src="/style/images/art/u2.jpg" /></figure>
                              <div class="message-inner">
                                <div class="info">
                                  <h6><a href="#">Nikolas Brooten</a></h6>
                                  <div class="meta"> <span class="date">April 4, 2019</span><span class="reply"><a href="#">Reply</a></span> </div>
                                </div>
                                <p>Dysfunctional thought and behavior patterns from such obsessive attention to one’s looks are beginning to emerge. The selfie era has created a hyper-focused fixation on attaining physical perfection, even if questionable tactics are employed. The proliferation of photo editing tools and filters available that can enhance our ho-hum visage into a flawless, glowing version of such are now considered social media staples. It seems everyone is one-upping the other in perfecting their public online persona, impressing each other with ginned up images that are getting dangerously close to cartoonish.  </p>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <div class="message">
                      <figure class="user rounded"><img alt="" src="/style/images/art/u4.jpg" /></figure>
                      <div class="message-inner">
                        <div class="info">
                          <h6><a href="#">Lou Bloxham</a></h6>
                          <div class="meta"> <span class="date">Mar 03, 2019</span><span class="reply"><a href="#">Reply</a></span> </div>
                        </div>
                        <p>All of this intense selfie-curating has people homing in on any little facial imperfection or asymmetry and heading for the plastic surgeon’s office to take care of it. </p>
                      </div>
                    </div>
                  </li>
                </ol>
              </div> -->
            </div>
              <!-- /#comments -->
              <!-- <div class="divider-icon"><i class="si-photo_aperture"></i></div>
              <h4>Would you like to share your thoughts?</h4>
              <p>Your email address will not be published. Required fields are marked *</p>
              <div class="space20"></div>
              <form class="comment-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name*">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email*">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Website">
                </div>
                <div class="form-group">
                  <textarea name="textarea" class="form-control" rows="5" placeholder="Enter your comment here..."></textarea>
                </div>
                <button type="submit" class="btn">Submit</button>
              </form> -->
              
            </div>
            
          </div> 
          <!--/column -->
          <aside class="col-md-4 sidebar">
            <div class="sidebox widget">
              <h3 class="widget-title">About author</h3>
              <figure class="rounded mb-20"><img src="/storage/{{$article->user()->logo}}" alt="" /></figure>
              {!!$article->user()->overview!!}
              <div class="clearfix"></div>
            </div>
            <!-- /.widget -->
            @if($popularPosts)
            <div class="sidebox widget">
              <h3 class="widget-title">Popular Posts</h3>
              <ul class="image-list">

                @foreach($popularPosts as $post)
                  <li>
                    <figure class="rounded"><a href="/article/{{$post->slug}}"><img src="/storage/{{$post->image}}" alt="" /></a></figure>
                    <div class="post-content">
                      <h6 class="post-title"> <a href="/article/{{$post->slug}}">{{$post->title}}</a> </h6>
                      <div class="meta">
                        <span class="date">{{$post->created_at->diffForHumans()}}</span>
                        <!-- <span class="comments"><a href="#">4</a></span> -->
                        <!-- <span><a href="#"><i class="fa fa-thumbs-up"></i> 10 </a></span> -->
                      </div>
                    </div>
                  </li>
                @endforeach
                <!-- <li>
                  <figure class="rounded"><a href="#"><img src="/style/images/art/a1.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="#">Why Cost Shouldn’t Be The First Question</a> </h6>
                    <div class="meta"><span class="date">Mar 03, 2019</span><span class="comments"><a href="#">4</a></span><span><a href="#"><i class="fa fa-thumbs-up"></i> 10 </a></span></div>
                  </div>
                </li>
                <li>
                  <figure class="rounded"> <a href="#"><img src="/style/images/art/a2.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="#">Why Cost Shouldn’t Be The First Question</a> </h6>
                    <div class="meta"><span class="date">Mar 03, 2019</span><span class="comments"><a href="#">4</a></span><span><a href="#"><i class="fa fa-thumbs-up"></i> 10 </a></span></div>
                  </div>
                </li>
                <li>
                  <figure class="rounded"><a href="#"><img src="/style/images/art/a3.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="#">Why Cost Shouldn’t Be The First Question</a> </h6>
                    <div class="meta"><span class="date">Mar 03, 2019</span><span class="comments"><a href="#">4</a></span><span><a href="#"><i class="fa fa-thumbs-up"></i> 10 </a></span></div>
                  </div>
                </li> -->
              </ul>
              <!-- /.image-list -->
            </div>
            @endif
            <!-- /.widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">Categories</h3>
              <ul class="unordered-list">
                @foreach($article->getCategories() as $category)
                  <li><a href="#">{{$category->name}}</a></li>
                @endforeach
                <!-- <li><a href="#">Body Contouring (21)</a></li>
                <li><a href="#">Facelift (19)</a></li>
                <li><a href="#">Injectables (16)</a></li>
                <li><a href="#">Skin rejuvenation (7)</a></li> -->
              </ul>
            </div>
            <!-- /.widget -->

            @if($article->user()->services)
            <div class="sidebox widget">
              <h3 class="widget-title">Services</h3>
              {!! $article->user()->services !!}
              <!-- 
              <ul class="list-unstyled tag-list">
                <li><a href="#" class="btn btn-white shadow">Laser</a></li>
                <li><a href="#" class="btn btn-white shadow">Beauty</a></li>
                <li><a href="#" class="btn btn-white shadow">Men</a></li>
                <li><a href="#" class="btn btn-white shadow">Face</a></li>
                <li><a href="#" class="btn btn-white shadow">Body</a></li>
              </ul> -->
            </div>
            @endif
           
<!--
            <div class="sidebox widget">
              <h3 class="widget-title">Instagram</h3>
              <div class="tiles tiles-s">
                <div id="instafeed-widget" class="items row"></div>
              </div>
            </div>
-->
        
         
            <!-- /.widget -->
          </aside>
          <!-- /column .sidebar -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->
@endsection

@section('js')
<!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
{!! $article->markup !!}


<script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>

  <script type="text/javascript">
    $(document).ready(function(){

      grecaptcha.ready(function() {
          grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', {action: 'homepage'}).then(function(token) {
            console.log('captcha', token);
          });
      });

 
      $('.submitContact').click(function(){

        $.ajax({
            url: "{{ route('saveContact') }}",
            type: 'GET',
            data: {
                name: $('#name').val(),
                email: $('#email').val(),
                phone: $('#phone').val(),
                event: $('#event').val()
            },
            success: function(result) { 
                // console.log(result);
                $('#form-content').html("Thank you! A representative will contact you shortly...")
            }
        });


      });
    });


  </script>
@stop