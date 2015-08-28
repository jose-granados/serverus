@if(Session::has('success'))
	<div class="alert alert-success">{{ Session::get('success') }}</div>
@endif

@if (Session::has('info'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

@if(Session::has('notice'))
	<div class="alert alert-notice">{{ Session::get('notice') }}</div>
@endif

@if(Session::has('danger'))
	<div class="alert alert-danger">{{ Session::get('danger') }}</div>
@endif

@if($errors->has())
	<div class="alert alert-danger">
		{{ HTML::ul($errors->all()) }}
	</div>
@endif