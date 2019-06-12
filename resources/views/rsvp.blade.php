@extends('layouts.main')


@section('content')
<style>
	.dark-form * {color:#fff;} 
	.form-horizontal .form-control {
    background: transparent !important;
    border: 1px solid rgba(255,255,255,0.5) !important;
    height: 44px !important;
    line-height: 2 !important;
    color: #fff !important;
    padding: 10px 15px !important;
    margin-bottom: 10px !important;
}
</style>
<link href="https://medspa.one/style/css/event/form.css" rel="stylesheet" type="text/css" media="all">
	<div class="wrapper dark-wrapper dark-form">
      <div class="container inner pt-60 pt-sm-20">
        
              <!--/.image-block -->
              <div class="container">
                <div class="row">
                  <div class="col-md-6 offset-md-3">
                        <h3 class="mb-20">Upcoming  Event: June 15, 2019</h3>
						  <h5>Online Event Registration</h5>
						  <div class="space30"></div>
					</div>
		</div>
		
        <div class="row">
            <div class="col-md-6 offset-md-3">
			  <img src="http://newyou.events/img/banner.jpg" width="1200" height="628" alt="" class="img-fluid"/><br><br>

                <form class="form-horizontal" method="POST" action="." id="form">
					<input type="hidden" name="form" value="normal">
					 <div class="form-group">
                        <label class="custom-control-label">Gender</label>
							<fieldset id="group1">
                            <input class="check" type="radio" name="gender" id="check1" value="male">
                            <label for="check1"><i class="fa fa-male"></i> Male</label>
                            <input class="check check2" type="radio" name="gender" id="check2" value="female">
                            <label for="check2"><i class="fa fa-female"></i> Female</label>
							</fieldset>
                       
                    </div>
					
                    <div class="form-group">
                        <label class="custom-control-label" for="FirstName">First Name<sup>*</sup></label>
                        <input type="text" class="form-control" id="FirstName" name='fname' required>
                    </div>
					
					
                    <div class="form-group">
                        <label class="custom-control-label" for="LastName">Last Name<sup>*</sup></label>
                        <input type="text" class="form-control" id="LastName" name='lname' required>
                      
                    </div>
					
					<div class="form-group">
                       <label class="custom-control-label" for="phone">Cell number<sup>*</sup></label>
                       <input type="text" class="form-control" id="phone" name='phone' required>
                      
                    </div>
					
					<div class="form-group">
                        <label class="custom-control-label" for="email">Email<sup>*</sup></label>
                        <input type="email" class="form-control" id="Email" name='email' required>
                       
                    </div>
					
					<div class="form-group">
                        <label class="custom-control-label">How many guests will be with you?</label>
                            <select class="form-control mt24 mt-xs-0" name="guests" required>
								<option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
                            </select>
                    </div>
					
                   
					
					<div class="form-group">
                        <label class="custom-control-label">Where did you hear about this event</label>
							<fieldset id="group2">
                            <input class="check" type="radio" name="source" value="Google" id="check3">
                            <label for="check3"><i class="fa fa-globe"></i> Google</label>
                            <input class="check check2" type="radio" name="source" value="Social" id="check4">
                            <label for="check4"><i class="fa fa-facebook"></i> Social</label>
							 <input class="check" type="radio" name="source" value="Friends" id="check5">
                            <label for="check5"><i class="fa fa-users"></i> Friends</label>
                            <input class="check check2" type="radio" name="source" value="Print" id="check6">
                            <label for="check6"><i class="fa fa-file-o"></i> Print ad</label>
							<input class="check" type="radio" name="source" value="Email" id="check7">
                            <label for="check7"><i class="fa fa-envelope"></i> Email</label>
							</fieldset>
                    </div>
					
					<button type="submit" class="btn btn-red btn-block" style="font-size: 15px;">Submit registration</button>
	
                </form>
            </div>
</div>
         
        </div>
      </div>
    </div>
  
@endsection

@section('js')
<script type="text/javascript">
    $('document').ready(function(){

        $('form').submit(function(e){
            e.preventDefault();
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }, 
                data: $('form').serialize(),
                type: 'POST',
                url: "{{ route('rsvpSubmit') }}",
              
            })
              .done(function( data ) {
                $('form').html(data);
          });
        });
    });

</script>
@endsection