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
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->

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
        <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5cb87a601e8a61001214aca8&product=inline-share-buttons' async='async'></script>
  
    </head>
    <body>
        <div class="content-wrapper">
    

       @yield('content')

     
      </div>
  <!-- /.content-wrapper -->
<script src="{{ asset('js/app.js') }}"></script>
  <script src="/style/js/jquery.min.js"></script>
  <!-- <script src="/style/js/popper.min.js"></script> -->
  <!-- <script src="/style/js/bootstrap.min.js"></script> -->

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
  <script type="text/javascript">
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
  </script>
    @yield('js')

    </body>
</html>