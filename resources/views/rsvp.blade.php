@extends('layouts.main')


@section('content')
	<div class="wrapper light-wrapper">
      <div class="container inner pt-60 pt-sm-20">
        <div class="boxed">
          <div class="bg-white shadow rounded">
            <div class="image-block-wrapper">
              <div class="image-block col-lg-6">
                <div class="image-block-bg bg-image" data-image-src="style/images/art/me1.jpg"></div>
              </div>
              <!--/.image-block -->
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-6 offset-lg-6">
                    <div class="box d-flex">
                      <div class="align-self-center">
                        <h3 class="mb-20">Lets Get In Touch!</h3>
						  <h5>If you have a question or comment then lets talk. Leave some information about yourself and we will get back to you as soon as we can.</h5>
						  <div class="space30"></div>
						  <form action="{{ route('contactusThanks') }}" method="POST">
                @csrf
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Full Name *" required="required">
              </div>
			 <!-- <div class="form-group">
                <input type="text" class="form-control" name="lname" placeholder="Last Name">
              </div> -->
              <div class="form-group">
                <input type="text" class="form-control" name="phone" placeholder="Phone number">
              </div>
			        <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email *" required="required">
              </div>
              <div class="form-group">
                <textarea type="" class="form-control" name="comment" placeholder="Comment / Question"></textarea>
              </div>
              
			
		<!-- 	<div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="customCheck1" required="required">
                  <label class="custom-control-label" for="customCheck1">I hereby agree to the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
                </div>
              </div> -->
            <div class="form-group mb-0">
              <button type="submit" class="btn btn-red btn-block mx-0 mb-0">Submit</button>
			</div>
							  
							<!--   <div class="form-group mb-0"><p class="text-center m-0">or</p>
              <a href="" class="btn btn-blue btn-block mb-30 mx-0">Sign up with Facebook <i class="fa fa-facebook-square"></i></a>
			</div> -->
            </form>
                      
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
  
@endsection