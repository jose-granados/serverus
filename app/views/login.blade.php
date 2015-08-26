<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Serverus</title>

		{{ HTML::style('public/css/bootstrap.min.css') }}
		{{ HTML::style('public/css/serverus.css') }}

	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="login-panel panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title ">Please Sign In</h3>
						</div>

						<div class="panel-body">
							{{ Form::open( ['url'=>'login', 'method'=>"post"] ) }}
							<fieldset>
								
								<div class="form-group">
									{{ Form::email( 'email', null, ['class'=>'form-control ','placeholder'=>'E-mail'] ) }}
								</div>
								
								<div class="form-group">
									{{ Form::password( 'password', ['class'=>'form-control','placeholder'=>'Password'] ) }}
								</div>

								{{ Form::submit( 'Login' , ['class'=>'btn btn-lg btn-success btn-block']) }}

								@if(Session::has('message'))
									{{ Session::get('message') }}
								@endif

							</fieldset>
							{{ Form::close() }}
						</div>
					</div>
				</div>
			</div>
		</div>

		{{ HTML::script('public/js/bootstrap.min.js') }}

	</body>
</html>