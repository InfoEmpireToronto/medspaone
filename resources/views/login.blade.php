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
                        <h3 class="mb-20">Join Our Community</h3>
						  <h5>Join us and get access to Cosmetic News, Reviews and Incentives.</h5>
						  <div class="space30"></div>
						  <form>
              <div class="form-group">
                <input type="text" class="form-control" id="fname" placeholder="First Name">
              </div>
			 <div class="form-group">
                <input type="text" class="form-control" id="lname" placeholder="Last Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="lname" placeholder="Phone number">
              </div>
			<div class="form-group">
                <input type="email" class="form-control" id="lname" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="pass" placeholder="Password">
              </div>
			
			<div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">I hereby agree to the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
                </div>
              </div>
            <div class="form-group mb-0">
              <button type="submit" class="btn btn-red btn-block mx-0 mb-0">Sign up for free </button>
			</div>
							  
							  <div class="form-group mb-0"><p class="text-center m-0">or</p>
              <a href="" class="btn btn-blue btn-block mb-30 mx-0">Sign up with Facebook <i class="fa fa-facebook-square"></i></a>
			</div>
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