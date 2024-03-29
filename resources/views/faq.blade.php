@extends('layouts.main')


@section('content')
	<div class="wrapper gray-wrapper">
      <div class="container inner">
        <h2 class="heading text-center">FAQs</h2>
      <div class="space20"></div>
        <div class="row">

          <div class="col-lg-4 ">

<?php $currentHeader = ''; ?>
 <ul class="list-group shadow">
@foreach($faqs as $faq)
			  
			 
            

<?php

  if($faq->category != $currentHeader)
  {
    echo "<li class='list-group-item'><a href='#".str_replace(' ', '_', $faq->category)."' class='scroll'>{$faq->category}</a></li>";
    $currentHeader = $faq->category;
  }

?>
          
@endforeach
  </ul>  
          </div>
          <div class="col-lg-8 ">
            <div id="accordion1" class="accordion-wrapper">
              
<?php $currentHeader = ''; ?>

@foreach($faqs as $faq)

<?php
  if($faq->category != $currentHeader)
  {
    echo "<h2 data-aos='fade-down'><a id='".str_replace(' ', '_', $faq->category)."' >{$faq->category}</a></h2>";
    $currentHeader = $faq->category;
  }

?>
              <div class="card bg-white shadow" data-aos="fade-up">
                <div class="card-header">
                  <h3> 
                    <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1-{{$faq->id}}">
                      {{$faq->question}}
                    </a> 
                  </h3>
                </div>
                <!-- /.card-header -->
                <div id="collapse1-{{$faq->id}}" class="collapse">
                  <div class="card-block">
                    <p>{!! str_replace('\\', '', $faq->answer) !!}</p>
                  </div>
                  <!-- /.card-block -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
@endforeach

            </div>
            <!-- /.accordion-wrapper -->
        
        <!-- <p class="text-center"><a href="#" class="btn">Read more <i class="mi-arrow-right"></i></a> </p> -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
@endsection