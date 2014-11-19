<html>
<head>
	<title>Sign Up</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/signup.css') }}
	{{ HTML::script('js/jquery.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6 col-md-offset-3">
				<div class="heading_logo">
					<a href="" class="btn btn-default btn-xl logo">EBiT</a>
				</div>		
				<div class="signup_heading">
					<h2>30-day free trial</h2>
					<h4>Unlimited users, no credit card required</h4>
				</div>

				<div class="signup_form">
					{{ Form::open(['url' => 'signup_validation', 'class' => 'form-horizontal']) }}
					<div class="form-group">
						<div class="col-sm-6">
							{{ Form::text('first_name',null,['class' => 'form-control','placeholder'=>'First name']) }}
							<p class="text-danger">{{ $errors->first('first_name') }}</p>
						</div>
						<div class="col-sm-6">
							{{ Form::text('last_name',null,['class' => 'form-control','placeholder'=>'Last name']) }}
							<p class="text-danger">{{ $errors->first('last_name') }}</p>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							{{ Form::email('email',null,['class' => 'form-control','placeholder'=>'Email Address']) }}
							<p class="text-danger">{{ $errors->first('email') }}</p>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							{{ Form::password('password',['class' => 'form-control','placeholder'=>'Your password']) }}
							<p class="text-danger">{{ $errors->first('password') }}</p>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							{{ Form::text('phone_number',null,['class' => 'form-control','placeholder'=>'Phone Number']) }}
							<p class="text-danger">{{ $errors->first('phone_number') }}</p>
						</div>
					</div>
					<div class="form-group">
						{{ Form::label('business_location','Business location') }}
						<div class="col-sm-12">
							{{ Form::select('business_location',[
								'AR' => 'Argentina',
								'BD' => 'Bangladesh',
								'CN' => 'China',
								'IN' => 'India',
								'HK' => 'Hong Kong',
								'GB' => 'United Kingdom',
								'US' => 'United States'
							],null,['class'=>'form-control']) }}
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12 checkbox">
							<label>
							{{ Form::checkbox('activation_status','yes') }}
							I have read and I agree to the <a href="">Terms of Use</a>
							</label>
							<p class="text-danger">{{ $errors->first('activation_status') }}</p>
						</div>
					</div>
					{{ Form::submit('Get Started', array('class' => 'btn btn-info signup_btn')) }}
					{{ Form::close() }}
				</div> 
				<div class="register_option">
					<p>Or register interest as an <a href="">accountant or bookkeeper</a>
					</p>
				</div> 
			</div>

		</div>




	</body>
	</html>