<?php
$currentpage = isset($currentpage) ? $currentpage : "home";
$title =  isset($title) ? $title : "MedSpaOne Online Resource";
$description =  isset($description) ? $description : "Your Online resource for latest news and events, Your Online resource for latest news and events";
$keywords =  isset($keywords) ? $keywords : "MedSpaOne, Online, Resource, MedSpaOne, Online, Resource";


?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="/style/images/favicon.png">
        <meta name="robots" content="index, follow" />
        <meta name="keywords" content="<?=$keywords?>" />
        <meta name="title" content="<?=$title?>" />
        <meta name="description" content="<?=$description?>" />
        <meta name="author" content="416-769-5250, www.infoempire.com" />
        <meta name="copyright" content="&copy;<?=date('Y');?>, MedSpa.us" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->

        <title><?=$title?></title>
        <link rel="stylesheet" type="text/css" href="/style/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/style/css/plugins.min.css">
        <link rel="stylesheet" type="text/css" href="/style/revolution/css/settings.min.css">
        <link rel="stylesheet" type="text/css" href="/style/revolution/css/layers.min.css">
        <link rel="stylesheet" type="text/css" href="/style/revolution/css/navigation.min.css">
        <link rel="stylesheet" type="text/css" href="/style/type/icons.min.css">
        <link rel="stylesheet" type="text/css" href="/style.min.css">
        <link rel="stylesheet" type="text/css" href="/style/css/color/blue.min.css">
        @yield('css')
        <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5cb87a601e8a61001214aca8&product=inline-share-buttons' async='async'></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141510760-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141510760-1');
</script>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebSite",
    "name": "medspa.one",
    "alternateName": "MedSPaOne",
    "url": "{{ route('home') }}"
}
</script>
		
<!-- Facebook Pixel Code -->
<script>
 !function(f,b,e,v,n,t,s)
 {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
 n.callMethod.apply(n,arguments):n.queue.push(arguments)};
 if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
 n.queue=[];t=b.createElement(e);t.async=!0;
 t.src=v;s=b.getElementsByTagName(e)[0];
 s.parentNode.insertBefore(t,s)}(window, document,'script',
 'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '466182244169613');
 fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
 src="https://www.facebook.com/tr?id=466182244169613&ev=PageView&noscript=1(44 B)
https://www.facebook.com/tr?id=466182244169613&ev=PageView&noscript=1
"
/></noscript>
<!-- End Facebook Pixel Code -->
  <script src='https://www.google.com/recaptcha/api.js' async defer></script>
  
    </head>
    <body>
      <div id="fb-root"></div>
<script  crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=127647780672409&autoLogAppEvents=1"></script>


        <div class="content-wrapper">
     <nav class="navbar wide bg-light navbar-expand-lg">
      <div class="container-fluid flex-row justify-content-center">
        <div class="navbar-header">
          <div class="navbar-brand">
        <a href="/" class="d-none d-sm-block"><img src="#" srcset="/style/images/logo2.png 1x, /style/images/logo2@2x.png 2x" alt="" /></a>
        <a href="/" class="d-block d-sm-none"><img src="#" srcset="/style/images/logo-small.png 1x, /style/images/logo-small@2x.png 2x" alt="" /></a>
      
      </div>
          <div class="navbar-hamburger ml-auto d-lg-none d-xl-none"><button class="hamburger animate" data-toggle="collapse" data-target=".navbar-collapse"><span></span></button></div>
        </div>
        <!-- /.navbar-header -->
        <div class="navbar-collapse collapse justify-content-between align-items-center">
          <ul class="navbar-nav plain mx-auto text-center">
<!--            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>-->
         <li class="nav-item dropdown"><a class="nav-link dropdown-item dropdown-toggle" href="/">Publications</a>
              <ul class="dropdown-menu">
                 <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="/articles">Articles</a>
                  <!-- <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="/articles">Category</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="/articles">Category</a></li>
                  </ul> -->
                </li>
          <li class="nav-item"><a class="dropdown-item" href="/before-after">Before &amp; after</a></li>
          <li class="nav-item"><a class="dropdown-item" href="/videos">Videos</a></li>
          <li class="nav-item"><a class="dropdown-item" href="/events">Events</a></li>
          <li class="nav-item"><a class="dropdown-item" href="/faq">FAQ</a></li>

              </ul>
            </li>
      <li class="nav-item"><a class="nav-link" href="/find-expert">Find an expert</a></li>
           
           
<!--
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="before-after.php">Before &amp; After</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="dropdown-item" href="before-after.php">Category</a></li>
                <li class="nav-item"><a class="dropdown-item" href="before-after.php">Category</a></li>
                <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Category with dropdown</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="before-after.php">Category</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="before-after.php">Category</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="before-after.php">Category</a></li>
                  </ul>
                </li>
              </ul>
            </li>
-->
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="/about">About</a>
        <ul class="dropdown-menu">
                <li class="nav-item"><a class="dropdown-item" href="/about">About us</a></li>
                <li class="nav-item"><a class="dropdown-item" href="/membership">Membership</a></li>
               <li class="nav-item"><a class="dropdown-item" href="/gift-rewards-program">Gifts &amp; Rewards Program</a></li>
              </ul>
        </li>
            
            <li class="nav-item">

              <a class="nav-link  text-uppercase" href="#">Login</a>
        <ul class="dropdown-menu mega-menu boxed list-view text-left">
                <li class="mega-menu-content">
                  <div class="image-block-wrapper">
                    <div class="image-block col-lg-4 col-xl-5">
                      <div class="image-block-bg bg-image" data-image-src="/style/images/art/me1.jpg"></div>
                    </div>
                    <!--/.image-block -->
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-8 offset-lg-4 col-xl-7 offset-xl-5">
                          <div class="box">
                            <div class="row">
                              <div class="col-md-6">
<form method="POST" action="{{ route('Login') }}">
                        @csrf
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Login" name="email">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Password" name="password">
              </div>
            <div class="form-group mb-0">
              <button type="submit" class="btn btn-red btn-block mb-30 mx-0">Login</button>
      </div>
            </form>
                              </div>
                              <!--/column -->
                              <div class="col-md-6">
                                <p><a href="/membership" class="btn btn-pastel-blue">Physicians apply here</a></p>
                                <p><a href="{{ route('contactus') }}" class="btn btn-pastel-aqua">Contact Us</a></p>
                              </div>
                              <!--/column -->
                        
                              <!--/column -->
                            </div>
                            <!--/.row -->
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
                </li>
                <!--/.mega-menu-content-->
              </ul>

            </li>
<li class="nav-item mt-12 text-center text-sm-left">
         <a href="{{ route('askExpert') }}" class="btn btn-s bg-meander">Ask The Expert</a>
		  </li>
          </ul>
        </div>
      <div id="search">
              <form class="search-form" action="{{ route('search') }}" method="GET">

                <div class="form-group">
                  <input type="text" class="form-control" name="s" placeholder="Search...">
                </div>
                <!-- /.form-group -->
              </form>
              <!-- /.search-form -->
            </div>
<!--
        <div class="social-wrapper text-right">
          <ul class="social social-mute social-s mb-0">
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
-->
        <!--/.social-wrapper -->
      </div>
    </nav>


    @yield('content')

     <footer class="dark-wrapper inverse-text">
      <div class="container inner pt-sm-20">
        <div class="row d-md-flex align-items-md-center">
			<div class="col-md-2 d-none d-sm-block">
            <img src="#" srcset="/style/images/logo-light.png 1x, /style/images/logo-light@2x.png 2x" alt="" />
          </div>
          <div class="col-md-4 text-center text-md-left">
            <p class="mb-0"> 2019 MedSpa.One © All rights reserved.</p>
          </div>



          <div class="col-md-4 text-center text-md-left">
			 <a href="{{ route('privacy') }}" class="nocolor">Privacy Policy</a> &nbsp; &nbsp; <a href="{{ route('terms') }}" class="nocolor">Terms of Service</a>
          </div>

          <div class="col-md-2 text-center text-md-right">
            <ul class="social social-mute social-s">
              <li><a href="https://www.facebook.com/infoempire" target="_blank"><i class="fa fa-facebook"></i></a></li>
      				<li><a href="https://twitter.com/InfoEmpire_Inc" target="_blank"><i class="fa fa-twitter"></i></a></li>
      				<li><a href="http://www.youtube.com/user/GTAwebmastercom" target="_blank"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </footer>
  </div>
  <!-- /.content-wrapper -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/all.js') }}"></script>
  <!-- <script src="/style/js/jquery.min.js"></script> -->
  <!-- <script src="/style/js/popper.min.js"></script> -->
  <!-- <script src="/style/js/bootstrap.min.js"></script> -->

  <script src="/style/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="/style/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- <script src="https://www.google.com/recaptcha/api.js?render=6Ldoa5UUAAAAAK5z4ZpulN8ohV8uZ7aJEKybiOcX"></script> -->

  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->
  <!--<script src="/style/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/style/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/style/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/style/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/style/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/style/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/style/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/style/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/style/revolution/js/extensions/revolution.extension.video.min.js"></script>-->

  <!-- <script src="/style/js/plugins.js"></script> -->
  <!-- <script src="/style/js/scripts.js"></script> -->
  <script type="text/javascript">
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
  </script>

    @yield('js')

    </body>
</html>