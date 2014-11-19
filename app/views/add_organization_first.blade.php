<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Your Organization</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/add_organization_first.css') }}
	{{ HTML::script('js/jquery.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
</head>
<body>
	<nav class="navbar navbar-default nav1" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-1">
					<div class="navbar-header">
						<li class="dropdown drop_header">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								<h4><span class="glyphicon glyphicon-list" aria-hidden="true"></span> My Xero</h4>
							</a>
							<ul class="dropdown-menu sub_menu_1" role="menu">
								<li><a href="#"><span class="logo">My Xero</span> </a></li>
								<li><a href="#">Another action</a></li>
							</ul>
						</li>
						
					</div>
				</div>
				<div class="col-md-2 col-md-offset-3">
					<li class="dropdown drop_1">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							User name <span class="caret"></span>
						</a>
						<ul class="dropdown-menu sub_menu_1" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
						</ul>
					</li>
				</div>				
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-1">
					<ul class="nav nav-pills">
					  <li role="presentation"><a href="#">Home</a></li>
					  <li role="presentation"><a href="#">Subscriptions & Billing</a></li>
					  <li role="" class="dropdown drop_2">
					  	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Settings</a>
					  	<ul class="dropdown-menu sub_menu_2" role="menu">
							<li><a href="#">Profile Settings</a></li>
							<li><a href="#">Account Settings</a></li>
						</ul>
					  </li>
					</ul>
				</div>
				<div class="col-md-2 col-md-offset-3">
					<ul class="nav nav-pills">
					  <li role="presentation"><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> </a></li>
					  <li role="presentation"><a href="#"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> </a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<nav class="navbar navbar-default nav2" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-1">
					<div class="navbar-header">
						<h2>New Organization</h2>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<div class="container">		
		<div class="row">
			<div class="col-md-6 col-md-offset-1 create_org">
				{{ Form::open(['url' => '', 'class' => 'form-horizontal']) }}

				<div class="form-group">
					<div class="input-group">
						{{ Form::label('organization_name','What is the name of your organisation?') }}
						{{ Form::text('organization_name',null,['class' => 'form-control']) }}
					</div>
				</div>

				<div class="form-group">
					<div class="input-group">
						{{ Form::label('tax_pay_location','Where does your organisation pay taxes?') }}
						{{ Form::select('tax_pay_location',[
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

				{{ Form::submit('Start Trial', array('class' => 'btn btn-success submit_btn_1')) }}
				{{ Form::submit('Purchase Now', array('class' => 'btn btn-primary submit_btn_2')) }}
				{{ Form::close() }}
			</div>
			
			<div class="col-md-4 des">
				<h4>Free Trial</h4>
				<p class="text-info">All the Xero features for free. Try raising a few sales invoices or bills, 
					connecting your bank feeds and even start enjoying bank reconciliation.
				</p>
				<p class="text-muted">The trial period (30 days) includes up to 5 sales invoices and bills and 50 reconciled items</p>
			</div>
		</div>
	</div>

	
</body>
</html>