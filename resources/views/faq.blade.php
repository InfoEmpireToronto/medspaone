@extends('layouts.main')


@section('content')
	<div class="wrapper gray-wrapper">
      <div class="container inner">
        <h2 class="heading text-center">FAQs</h2>
      <div class="space20"></div>
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div id="accordion1" class="accordion-wrapper">
              <div class="card bg-white shadow">
                <div class="card-header">
                  <h3> <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1-1">Question 1</a> </h3>
                </div>
                <!-- /.card-header -->
                <div id="collapse1-1" class="collapse show">
                  <div class="card-block">
                    <p>Answer 1</p>
                  </div>
                  <!-- /.card-block -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
              <div class="card bg-white shadow">
                <div class="card-header">
                  <h3> <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse1-2">Question 2</a> </h3>
                </div>
                <!-- /.card-header -->
                <div id="collapse1-2" class="collapse">
                  <div class="card-block">
                    <p>Answer 2</p>
                  </div>
                  <!-- /.card-block -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
              <div class="card bg-white shadow">
                <div class="card-header">
                  <h3> <a class="collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse1-3">Question 3</a></h3>
                </div>
                <!-- /.card-header -->
                <div id="collapse1-3" class="collapse">
                  <div class="card-block">
                    <p>Answer 3</p>
                  </div>
                  <!-- /.card-block -->
                </div>
                <!-- /.collapse -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.accordion-wrapper -->
        
        <p class="text-center"><a href="#" class="btn">Read more <i class="mi-arrow-right"></i></a> </p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
@endsection