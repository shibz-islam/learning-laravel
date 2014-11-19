<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Your Organization</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/my_xero_home.css') }}
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
						<li role="presentation" class="active"><a href="#">Home</a></li>
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
						<h2>My Xero</h2>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<div class="container">		
		<div class="row">
			<div class="col-md-7 col-md-offset-1">
				<table class="table table-bordered table-hover">
					<caption><h3>Organizations</h3></caption>
					<thead>
						<tr class="info">
							<th>Name</th>
							<th>Last Viewed</th>
							<th>Access</th>
							<th>Subscription</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>John</td>
							<td>Carter</td>
							<td>johncarter@mail.com</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Peter</td>
							<td>Parker</td>
							<td>peterparker@mail.com</td>
						</tr>
						<tr>
							<td>3</td>
							<td>John</td>
							<td>Rambo</td>
							<td>johnrambo@mail.com</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-3">
				<div class="add_new_org">
					<h4>Run another business?</h4>	
					<p>You could save 15% off all subscription fees.</p>
					<a href="" class="btn btn-success">Add an Organization</a>
				</div>
			</div>
		</div>
	</div>

	
</body>
</html>