			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				{{ HTML::style('css/bootstrap.min.css') }}
				{{ HTML::style('css/login.css') }}
				{{ HTML::style('css/carousel.css') }}
				{{ HTML::script('js/jquery.min.js') }}
				{{ HTML::script('js/bootstrap.min.js') }}
				{{ HTML::script('js/ie-emulation-modes-warning.js') }}
				{{ HTML::script('js/docs.min.js') }}
				
				<title>Log In</title>
			</head>
			<body>
				<div class="head">

					<a href=""><h2>EBiT</h2></a>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-offset-2">
							<div class="row">
								<div class="col-md-5 login_form">
									<h5 id="welcome_msg">Welcome to EBiT</h5>

									{{ Form::open(['url' => 'login_check']) }}
									
									@if (Session::has('flash_error'))
									<p class="text-danger">{{ Session::get('flash_error') }}</p>
									@endif
									
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
											{{ Form::email('email',null,['class' => 'form-control','placeholder'=>'Email Address']) }}
										</div>
										<p class="text-danger">{{ $errors->first('email') }}</p>
									</div>

									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
											{{ Form::password('password',['class' => 'form-control','placeholder'=>'Your password']) }}											
										</div>
										<p class="text-danger">{{ $errors->first('password') }}</p>
									</div>

									{{ Form::submit('Login', array('class' => 'btn btn-primary btn-lg submit_btn')) }}
									{{ Form::close() }}

									<a href="" class="forgot_passwd"><h5 id="forgot_passwd">Forgot your password?</h5></a>
								</div>
								<div class="col-md-7 carousel">
									
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="footer">
					<h4>Don't have a login? <a href="">Try EBiT for free</a></h4>
					<a href=""><h6>Terms of Use</h6></a>
					<a href=""><h6>Privacy</h6></a>
				</div>

			</body>
			</html>