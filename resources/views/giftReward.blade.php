@extends('layouts.main')


@section('content')
	<div class="wrapper light-wrapper">
      <div class="container inner pt-70 pt-sm-20">
        <h2 class="heading text-center">Gift Reward Program</h2>
        <div class="space20"></div>
         
		<div class="row">
          <div class="col-md-6">
			<h3 class="color-primary">Join our VIP Loyalty Program</h3>
			<p>We want to thank you for your loyalty and the time you spend with us.</p>
			<h4>A points-based reward program:</h4>
			<p>Reward Points translate into dollars that can be redeemed for services, products, packages, and more! Each dollar you spend will earn you a dollar amount, a prize, or a promotional gift.</p>
			<h4>A membership to our club:</h4>
			<p>This membership provides you a set amount of annual Points, and access to various promotions!</p>
			<p>You've earned those points; so when you're ready, why not redeem them toward great rewards? To maintain your point balance, all you have to do is redeem some of them or earn more! When you're ready for rewards, we've put together options that meet you right where you are. They're your rewards. How do you want to enjoy them?</p>
			<p>Our club members will get better savings and more rewards.</p>
            
          </div>
			<div class="col-md-6">
			<div id="w2g-registration"></div>
			</div>
			
        </div>
        <!--/.row -->
        
      </div>
    </div>
  
@stop

@section('js')
<script src="https://www.wavetoget.com/embed/registration/form.min.js"></script>
<script>
	if($("#w2g-registration").length)
	{
		WaveToGetRegistration("#w2g-registration", "3379667730");
	}
</script>
@stop