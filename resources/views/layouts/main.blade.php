<?php
$currentpage = "home";
$title = "MedSpaOne";
$description = "";
$keywords = "";
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
        <title><?=$title?></title>
        <link rel="stylesheet" type="text/css" href="/style/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/style/css/plugins.css">
        <link rel="stylesheet" type="text/css" href="/style/revolution/css/settings.css">
        <link rel="stylesheet" type="text/css" href="/style/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="/style/revolution/css/navigation.css">
        <link rel="stylesheet" type="text/css" href="/style/type/icons.css">
        <link rel="stylesheet" type="text/css" href="/style.css">
        <link rel="stylesheet" type="text/css" href="/style/css/color/blue.css">
        @yield('css')
    </head>
    <body>
        <div class="content-wrapper">
     <nav class="navbar wide bg-light navbar-expand-lg">
      <div class="container-fluid flex-row justify-content-center">
        <div class="navbar-header">
          <div class="navbar-brand">
              <a href="index.php" class="d-none d-sm-block"><img src="#" srcset="/style/images/logo2.png 1x, /style/images/logo2@2x.png 2x" alt="" /></a>
              <a href="index.php" class="d-block d-sm-none"><img src="#" srcset="/style/images/logo-small.png 1x, /style/images/logo-small@2x.png 2x" alt="" /></a>
            
            </div>
          <div class="navbar-hamburger ml-auto d-lg-none d-xl-none"><button class="hamburger animate" data-toggle="collapse" data-target=".navbar-collapse"><span></span></button></div>
        </div>
        <!-- /.navbar-header -->
        <div class="navbar-collapse collapse justify-content-between align-items-center">
          <ul class="navbar-nav plain mx-auto text-center">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
         
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="/articles">Articles</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="dropdown-item" href="/articles">Category</a></li>
                <!-- <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="/articles">Category with dropdown</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="#">Category</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="#">Category</a></li>
                  </ul>
                </li> -->
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="find-physician">Find a physician</a></li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="before-after">Before &amp; After</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="dropdown-item" href="#">Category</a></li>
                <li class="nav-item"><a class="dropdown-item" href="#">Category</a></li>
                <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Category with dropdown</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="#">Category</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="#">Category</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="#">Category</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
            
            <li class="nav-item"><a class="nav-link  text-uppercase" href="#">Login</a>
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
                              <div class="col-lg-6">
                                 <form>
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Login">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Password">
              </div>
           
              <button type="submit" class="btn btn-red btn-block mb-30">Login</button>
            </form>
                              </div>
                              <!--/column -->
                              <div class="col-lg-6">
                                <p><a href="#" class="btn btn-pastel-aqua">Join our community</a></p>
                                <p><a href="#" class="btn btn-pastel-blue">Physicians apply here</a></p>
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
          </ul>
        </div>
          <div id="search">
              <form class="search-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search...">
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
      <div class="container inner">
        <div class="row d-md-flex align-items-md-center">
          <div class="col-md-4 text-center text-md-left">
            <p class="mb-0"> 2019 MedSpa.One © All rights reserved.</p>
          </div>
          <!--/column -->
          <div class="col-md-4 text-center">
            <img src="#" srcset="/style/images/logo-light.png 1x, /style/images/logo-light@2x.png 2x" alt="" />
          </div>
          <!--/column -->
          <div class="col-md-4 text-center text-md-right">
            <ul class="social social-mute social-s mt-10">
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
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
  <script src="/style/js/jquery.min.js"></script>
  <script src="/style/js/popper.min.js"></script>
  <script src="/style/js/bootstrap.min.js"></script>

  <script src="/style/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="/style/revolution/js/jquery.themepunch.revolution.min.js"></script>

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
  <script src="/style/js/plugins.js"></script>
  <script src="/style/js/scripts.js"></script>

    @yield('js')

    </body>
</html>